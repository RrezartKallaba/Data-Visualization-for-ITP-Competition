import pandas as pd
from prophet import Prophet

data = pd.read_csv('data_from Libelium.csv')

def predict_weather(parameter):
    parameter_data = data[data['sensor'] == parameter]
    parameter_data['timestamp'] = pd.to_datetime(parameter_data['timestamp'])
    weather_data = parameter_data[['timestamp', 'value']]
    weather_data.rename(columns={'timestamp': 'ds', 'value': 'y'}, inplace=True)

    model = Prophet()
    model.fit(weather_data)

    future = model.make_future_dataframe(periods=365, freq='D')
    forecast = model.predict(future)

    predictions = forecast[['ds', 'yhat']]
    predictions.rename(columns={'ds': 'timestamp', 'yhat': parameter + '_pred'}, inplace=True)

    return predictions

weather_parameters = data['sensor'].unique()

all_predictions = pd.DataFrame()

for parameter in weather_parameters:
    parameter_predictions = predict_weather(parameter)
    if all_predictions.empty:
        all_predictions = parameter_predictions
    else:
        all_predictions = pd.merge(all_predictions, parameter_predictions, on='timestamp', how='outer')

all_predictions.to_csv('predictions_2024.csv', index=False)
