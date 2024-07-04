<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="icon" href="../user_img/logo_ikone.png" type="image/x-icon">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header id="myLinks" class="menu-wrap">
        <div class="logo">
            <img src="../img/logo.png" alt="" srcset="">
        </div>
        <nav>
            <section class="manage">
                <ul>
                <li>
                <a style="color: rgba(54, 162, 235, 1)" href="../index.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                <path  style="fill: rgba(54, 162, 235, 1) !important;" d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"/>
              </svg>
                Moti sot
              </a>
            </li>
                    <li>
                    <a style="color: #709F31" href="../all_param.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512">
                                <path style="fill: #709F31 !important;" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                            </svg>
                            Të gjitha
                        </a>
                    </li>
                    <li>
                        <a style="color: rgba(75, 192, 192, 1)" href="lageshtia_tokes.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                                <path style="fill: rgba(75, 192, 192, 1) !important;" d="M416 128c-.6 0-1.1 .2-1.6 .2 1.1-5.2 1.6-10.6 1.6-16.2 0-44.2-35.8-80-80-80-24.6 0-46.3 11.3-61 28.8C256.4 24.8 219.3 0 176 0 114.1 0 64 50.1 64 112c0 7.3 .8 14.3 2.1 21.2C27.8 145.8 0 181.5 0 224c0 53 43 96 96 96h320c53 0 96-43 96-96s-43-96-96-96zM88 374.2c-12.8 44.4-40 56.4-40 87.7 0 27.7 21.5 50.1 48 50.1s48-22.4 48-50.1c0-31.4-27.2-43.1-40-87.7-2.2-8.1-13.5-8.5-16 0zm160 0c-12.8 44.4-40 56.4-40 87.7 0 27.7 21.5 50.1 48 50.1s48-22.4 48-50.1c0-31.4-27.2-43.1-40-87.7-2.2-8.1-13.5-8.5-16 0zm160 0c-12.8 44.4-40 56.4-40 87.7 0 27.7 21.5 50.1 48 50.1s48-22.4 48-50.1c0-31.4-27.2-43.1-40-87.7-2.2-8.1-13.5-8.5-16 0z" />
                            </svg>
                            Lagështia e tokes
                        </a>
                    </li>
                    <li>
                        <a style="color: rgba(255, 159, 64, 1)" href="ultrazeri.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 640 512">
                                <path style="fill: rgba(255, 159, 64, 1) !important;" d="M111.4 256.3l5.8 65-5.8 68.3c-.3 2.5-2.2 4.4-4.4 4.4s-4.2-1.9-4.2-4.4l-5.6-68.3 5.6-65c0-2.2 1.9-4.2 4.2-4.2 2.2 0 4.1 2 4.4 4.2zm21.4-45.6c-2.8 0-4.7 2.2-5 5l-5 105.6 5 68.3c.3 2.8 2.2 5 5 5 2.5 0 4.7-2.2 4.7-5l5.8-68.3-5.8-105.6c0-2.8-2.2-5-4.7-5zm25.5-24.1c-3.1 0-5.3 2.2-5.6 5.3l-4.4 130 4.4 67.8c.3 3.1 2.5 5.3 5.6 5.3 2.8 0 5.3-2.2 5.3-5.3l5.3-67.8-5.3-130c0-3.1-2.5-5.3-5.3-5.3zM7.2 283.2c-1.4 0-2.2 1.1-2.5 2.5L0 321.3l4.7 35c.3 1.4 1.1 2.5 2.5 2.5s2.2-1.1 2.5-2.5l5.6-35-5.6-35.6c-.3-1.4-1.1-2.5-2.5-2.5zm23.6-21.9c-1.4 0-2.5 1.1-2.5 2.5l-6.4 57.5 6.4 56.1c0 1.7 1.1 2.8 2.5 2.8s2.5-1.1 2.8-2.5l7.2-56.4-7.2-57.5c-.3-1.4-1.4-2.5-2.8-2.5zm25.3-11.4c-1.7 0-3.1 1.4-3.3 3.3L47 321.3l5.8 65.8c.3 1.7 1.7 3.1 3.3 3.1 1.7 0 3.1-1.4 3.1-3.1l6.9-65.8-6.9-68.1c0-1.9-1.4-3.3-3.1-3.3zm25.3-2.2c-1.9 0-3.6 1.4-3.6 3.6l-5.8 70 5.8 67.8c0 2.2 1.7 3.6 3.6 3.6s3.6-1.4 3.9-3.6l6.4-67.8-6.4-70c-.3-2.2-2-3.6-3.9-3.6zm241.4-110.9c-1.1-.8-2.8-1.4-4.2-1.4-2.2 0-4.2 .8-5.6 1.9-1.9 1.7-3.1 4.2-3.3 6.7v.8l-3.3 176.7 1.7 32.5 1.7 31.7c.3 4.7 4.2 8.6 8.9 8.6s8.6-3.9 8.6-8.6l3.9-64.2-3.9-177.5c-.4-3-2-5.8-4.5-7.2zm-26.7 15.3c-1.4-.8-2.8-1.4-4.4-1.4s-3.1 .6-4.4 1.4c-2.2 1.4-3.6 3.9-3.6 6.7l-.3 1.7-2.8 160.8s0 .3 3.1 65.6v.3c0 1.7 .6 3.3 1.7 4.7 1.7 1.9 3.9 3.1 6.4 3.1 2.2 0 4.2-1.1 5.6-2.5 1.7-1.4 2.5-3.3 2.5-5.6l.3-6.7 3.1-58.6-3.3-162.8c-.3-2.8-1.7-5.3-3.9-6.7zm-111.4 22.5c-3.1 0-5.8 2.8-5.8 6.1l-4.4 140.6 4.4 67.2c.3 3.3 2.8 5.8 5.8 5.8 3.3 0 5.8-2.5 6.1-5.8l5-67.2-5-140.6c-.2-3.3-2.7-6.1-6.1-6.1zm376.7 62.8c-10.8 0-21.1 2.2-30.6 6.1-6.4-70.8-65.8-126.4-138.3-126.4-17.8 0-35 3.3-50.3 9.4-6.1 2.2-7.8 4.4-7.8 9.2v249.7c0 5 3.9 8.6 8.6 9.2h218.3c43.3 0 78.6-35 78.6-78.3 .1-43.6-35.2-78.9-78.5-78.9zm-296.7-60.3c-4.2 0-7.5 3.3-7.8 7.8l-3.3 136.7 3.3 65.6c.3 4.2 3.6 7.5 7.8 7.5 4.2 0 7.5-3.3 7.5-7.5l3.9-65.6-3.9-136.7c-.3-4.5-3.3-7.8-7.5-7.8zm-53.6-7.8c-3.3 0-6.4 3.1-6.4 6.7l-3.9 145.3 3.9 66.9c.3 3.6 3.1 6.4 6.4 6.4 3.6 0 6.4-2.8 6.7-6.4l4.4-66.9-4.4-145.3c-.3-3.6-3.1-6.7-6.7-6.7zm26.7 3.4c-3.9 0-6.9 3.1-6.9 6.9L227 321.3l3.9 66.4c.3 3.9 3.1 6.9 6.9 6.9s6.9-3.1 6.9-6.9l4.2-66.4-4.2-141.7c0-3.9-3-6.9-6.9-6.9z" />
                            </svg>
                            Ultrazëri
                        </a>
                    </li>
                    <li style="border-bottom: 1px solid rgba(153, 102, 255, 1);border-radius: 25px;" class="active">
                        <a style="color: rgba(153, 102, 255, 1)" href="presioni_ajrit.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                                <path style="fill: rgba(153, 102, 255, 1) !important;" d="M288 32c0 17.7 14.3 32 32 32h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H352c53 0 96-43 96-96s-43-96-96-96H320c-17.7 0-32 14.3-32 32zm64 352c0 17.7 14.3 32 32 32h32c53 0 96-43 96-96s-43-96-96-96H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H384c-17.7 0-32 14.3-32 32zM128 512h32c53 0 96-43 96-96s-43-96-96-96H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H160c17.7 0 32 14.3 32 32s-14.3 32-32 32H128c-17.7 0-32 14.3-32 32s14.3 32 32 32z" />
                            </svg>
                            Presioni i ajrit
                        </a>
                    </li>
                    <li>
                        <a style="color: rgba(54, 162, 235, 1)" href="lageshtia_ajrit.php">
                            <img src="../img/hygrometer.png" style="margin-right: 1rem" width="24" height="24" />
                            Lageshtia e ajrit
                        </a>
                    </li>
                    <li>
                        <a style="color: rgba(255, 99, 132, 1)" href="temperatura.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                                <path style="fill: rgba(255, 99, 132, 1) !important;" d="M416 0c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm0 128c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm-160-16C256 50.1 205.9 0 144 0S32 50.1 32 112v166.5C12.3 303.2 0 334 0 368c0 79.5 64.5 144 144 144s144-64.5 144-144c0-34-12.3-64.9-32-89.5V112zM144 448c-44.1 0-80-35.9-80-80 0-25.5 12.2-48.9 32-63.8V112c0-26.5 21.5-48 48-48s48 21.5 48 48v192.2c19.8 14.8 32 38.3 32 63.8 0 44.1-35.9 80-80 80zm16-125.1V304c0-8.8-7.2-16-16-16s-16 7.2-16 16v18.9c-18.6 6.6-32 24.2-32 45.1 0 26.5 21.5 48 48 48s48-21.5 48-48c0-20.9-13.4-38.5-32-45.1z" />
                            </svg>
                            Temperatura
                        </a>
                    </li>
                </ul>
            </section>
        </nav>
    </header>
    <div class="hamburger-menu" onclick="toggleMenu()">
        <button class="openbtn">&#9776;</button>
        <button class="closebtn">&times;</button>
    </div>
    <main class="content-wrap">
        <section class="container">
            <div class="sidebar" id="sidebar">
                <form method="GET" action="" class="date-form">
                    <div class="row">
                        <label for="start_date">From:</label>
                        <input type="date" id="start_date" name="start_date" class="date-input">
                    </div>
                    <div class="row">
                        <label for="end_date">To:</label>
                        <input type="date" id="end_date" name="end_date" class="date-input">
                    </div>
                    <button type="submit" class="filter-button"> <span>Filter</span></button>
                </form>
            </div>
            <div class="content">
                <div class="chart-container">
                <div id="noDataMessage" class="no-data-message"></div>
                    <canvas id="airPressureChart" class="chart"></canvas>
                    <div id="airPressureStats" class="stats"></div>
                </div>
            </div>
        </section>

        <?php
        ini_set('memory_limit', '512M');

        // Leximi i te dhenave nga CSV
        $data = array_map('str_getcsv', file('../data_from Libelium.csv'));
        $headers = array_shift($data);
        $csv = array();
        foreach ($data as $row) {
            $csv[] = array_combine($headers, $row);
        }

        // Filtrimi i te dhenave bazuar ne datat e zgjedhura
        $start_date = $_GET['start_date'] ?? null;
        $end_date = $_GET['end_date'] ?? null;
        if ($start_date && $end_date) {
            $csv = array_filter($csv, function ($row) use ($start_date, $end_date) {
                $timestamp = DateTime::createFromFormat('n/j/Y H:i', $row['timestamp']);
                $start = new DateTime($start_date);
                $end = new DateTime($end_date);
                return $timestamp >= $start && $timestamp <= $end;
            });
        }

        // Grumbullimi i te dhenave sipas periudhes (dite) dhe renditja sipas timestamp
        $dataByPeriod = array();
        foreach ($csv as $row) {
            $timestamp = DateTime::createFromFormat('n/j/Y H:i', $row['timestamp']);
            $period = $timestamp->format('Y-m-d'); // Grupi sipas diteve

            $sensor = $row['sensor'];
            $value = floatval($row['value']);
            if (!isset($dataByPeriod[$period])) {
                $dataByPeriod[$period] = array();
            }
            if (!isset($dataByPeriod[$period][$sensor])) {
                $dataByPeriod[$period][$sensor] = array('sum' => 0, 'count' => 0, 'min' => $value, 'max' => $value, 'min_date' => $period, 'max_date' => $period);
            }
            $dataByPeriod[$period][$sensor]['sum'] += $value;
            $dataByPeriod[$period][$sensor]['count'] += 1;
            if ($value < $dataByPeriod[$period][$sensor]['min']) {
                $dataByPeriod[$period][$sensor]['min'] = $value;
                $dataByPeriod[$period][$sensor]['min_date'] = $period;
            }
            if ($value > $dataByPeriod[$period][$sensor]['max']) {
                $dataByPeriod[$period][$sensor]['max'] = $value;
                $dataByPeriod[$period][$sensor]['max_date'] = $period;
            }
        }

        // Llogaritja e mesatareve per secilen periudhe dhe sensor
        $dataBySensor = array();
        foreach ($dataByPeriod as $period => $sensors) {
            foreach ($sensors as $sensor => $values) {
                $averageValue = round($values['sum'] / $values['count'], 2); // Dy shifra pas pikes dhjetore
                $dataBySensor[$sensor][] = array('timestamp' => $period, 'value' => $averageValue, 'min' => $values['min'], 'max' => $values['max'], 'min_date' => $values['min_date'], 'max_date' => $values['max_date']);
            }
        }

        // Renditja e te dhenave per secilin sensor sipas timestamp
        foreach ($dataBySensor as $sensor => &$data) {
            usort($data, function ($a, $b) {
                return strtotime($a['timestamp']) - strtotime($b['timestamp']);
            });
        }
        unset($data); // Çliro referencen

        // Llogaritja e vlerave minimale dhe maksimale per periudhen e caktuar
        $overallStats = array();
        foreach ($dataBySensor as $sensor => $data) {
            $minValues = array_column($data, 'min');
            $maxValues = array_column($data, 'max');
            $minDates = array_column($data, 'min_date');
            $maxDates = array_column($data, 'max_date');
            $overallStats[$sensor] = array(
                'min' => round(min($minValues), 2), // Dy shifra pas pikes dhjetore
                'max' => round(max($maxValues), 2),  // Dy shifra pas pikes dhjetore
                'min_date' => $minDates[array_search(min($minValues), $minValues)],
                'max_date' => $maxDates[array_search(max($maxValues), $maxValues)]
            );
        }

        // Kontrollo nese te gjitha dataset-et jane bosh pas filtrimit
        $allDataEmpty = empty($dataBySensor['SOIL1']) && empty($dataBySensor['US']) && empty($dataBySensor['PRES']) && empty($dataBySensor['HUM']) && empty($dataBySensor['TC']);

        // Konvertimi i te dhenave ne format JSON per perdorim ne JavaScript
        $json_data = json_encode($dataBySensor);
        $json_stats = json_encode($overallStats);
        ?>

        <script>
            // Kalimi i te dhenave te koduara ne JSON ne JavaScript
            const data = <?php echo $json_data; ?>;
            const overallStats = <?php echo $json_stats; ?>;
            const allDataEmpty = <?php echo json_encode($allDataEmpty); ?>;

            // Funksion per krijimin e grafikeve dhe shfaqjen e statistikave
            function createChart(canvasId, label, data, overallStats, maxTicksLimit) {
                const ctx = document.getElementById(canvasId).getContext('2d');
                if (data.length === 0) {
                    ctx.font = '16px Arial';
                    ctx.textAlign = 'center';
                    ctx.fillText('No data available for the selected date range', ctx.canvas.width / 2, ctx.canvas.height / 2);
                } else {
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: data.map(row => row.timestamp),
                            datasets: [{
                                label: label,
                                data: data.map(row => row.value),
                                borderColor: 'rgba(153, 102, 255, 1)',
                                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            }]
                        },
                        options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            ticks: {
                                maxTicksLimit: maxTicksLimit,
                                font: {
                                    size: 10 // Adjust font size for x-axis labels
                                }
                            }
                        },
                        y: {
                            ticks: {
                                font: {
                                    size: 10 // Adjust font size for y-axis labels
                                }
                            }
                        }

                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const index = context.dataIndex;
                                    const value = context.dataset.data[index];
                                    const min = data[index].min;
                                    const max = data[index].max;
                                    return `Date: ${context.label}\nAverage: ${value}, Min: ${min}, Max: ${max}`;
                                }
                            }
                        },
                        title: {
                            display: true,
                            text: `${label} (Min: ${overallStats.min} on ${overallStats.min_date}, Max: ${overallStats.max} on ${overallStats.max_date})`
                        }
                    }
                }
                    });
                }
            }

            // Kontrollo nese te gjitha dataset-et jane bosh dhe shfaq mesazhin nese eshte e vertete
            if (allDataEmpty) {
                document.getElementById('noDataMessage').textContent = 'No data available for the selected date range';
            } else {
                // Krijimi i grafikeve per secilin sensor dhe shfaqja e statistikave
                if (data.PRES) createChart('airPressureChart', 'Air Pressure', data.PRES, overallStats.PRES, 12);
            }
        </script>
    </main>
    <script src="../js/main.js"></script>
</body>

</html>