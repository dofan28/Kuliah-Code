<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Belajar Membuat Grafik HighCharts</title>
    <a href="/pegawai">kembali</a>
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
    <!-- <script type="text/javascript" src="highchart/js/highcharts.js"></script> -->
    {{-- <script src="https://code.highcharts.com/highcharts.js"></script> --}}

    <!-- <script type="text/javascript">
        var chart1;
        $(document).ready(function() {
            $('#grafik').highcharts( {
                chart: {
                    type: 'column'
                },
                title:{
                    text:'Grafik Rapat'
                },
                xAxis:{
                    categories:['Tahun']
                },
                yAxis:{
                    title:{
                        text:'Jumlah Rapat'
                    }
                },
                series:
                    [{
                        name:"Tahun",
                        data:meeting
                    }]
            });
        });
    </script> -->
</head>

<body>
    <div id="grafik"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var meeting = <?php echo json_encode($meeting)?>;
    Highcharts.chart('grafik', {
        chart: {
            type: 'column'
        },
        title:{
            text:'Grafik Rapat'
        },
        xAxis:{
            categories: "Tahun"
        },
        yAxis:{
            title:{
                text:'Jumlah Rapat'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
                name:"tahun",
                data:meeting
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
        
</script>

</html>