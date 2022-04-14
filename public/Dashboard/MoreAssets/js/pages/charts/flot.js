var data = [], totalPoints = 110;
var updateInterval = 320;
var realtime = 'on';

$(function () {
    //Real time ==========================================================================================
    var plot = $.plot('#real_time_chart', [getRandomData()], {
        series: {
            shadowSize: 0,
            color: 'rgb(0, 188, 212)'
        },
        grid: {
            borderColor: '#f3f3f3',
            borderWidth: 1,
            tickColor: '#f3f3f3'
        },
        lines: {
            fill: true
        },
        yaxis: {
            min: 0,
            max: 100
        },
        xaxis: {
            min: 0,
            max: 100
        }
    });

    function updateRealTime() {
        plot.setData([getRandomData()]);
        plot.draw();

        var timeout;
        if (realtime === 'on') {
            timeout = setTimeout(updateRealTime, updateInterval);
        } else {
            clearTimeout(timeout);
        }
    }

    updateRealTime();

    $('#realtime').on('change', function () {
        realtime = this.checked ? 'on' : 'off';
        updateRealTime();
    });
    //====================================================================================================

    //====================================================================================================

    //BAR CHART ==========================================================================================
    var barChartData = [];
    for (var i = 0; i <= 10; i += 1) {
        barChartData.push([i, parseInt(Math.random() * 30)]);
    }

    $.plot('#bar_chart', [barChartData], {
        series: {
            stack: 0,
            lines: {
                show: false,
                fill: true,
                steps: false
            },
            bars: {
                show: true,
                barWidth: 0.6
            },
            color: '#00BCD4'
        },
        grid: {
            hoverable: true,
            autoHighlight: false,
            borderColor: '#f3f3f3',
            borderWidth: 1,
            tickColor: '#f3f3f3'
        }
    });
    //====================================================================================================

    //PIE CHART ==========================================================================================
    var pieChartData = [], pieChartSeries = 4;
    var pieChartColors = ['#E91E63', '#03A9F4', '#FFC107', '#009688'];
    var pieChartDatas = [72, 17, 28, 10];

    for (var i = 0; i < pieChartSeries; i++) {
        pieChartData[i] = {
            label: 'Serie - ' + (i + 1),
            data: pieChartDatas[i],
            color: pieChartColors[i]
        }
    }
    $.plot('#pie_chart', pieChartData, {
        series: {
            pie: {
                show: true,
                radius: 1,
                label: {
                    show: true,
                    radius: 3 / 4,
                    formatter: labelFormatter,
                    background: {
                        opacity: 0.5
                    }
                }
            }
        },
        legend: {
            show: false
        }
    });
    function labelFormatter(label, series) {
        return '<div style="font-size:8pt; text-align:center; padding:2px; color:white;">' + label + '<br/>' + Math.round(series.percent) + '%</div>';
    }
    //====================================================================================================
});

function getRandomData() {
    if (data.length > 0) data = data.slice(1);

    while (data.length < totalPoints) {
        var prev = data.length > 0 ? data[data.length - 1] : 50, y = prev + Math.random() * 10 - 5;
        if (y < 0) { y = 0; } else if (y > 100) { y = 100; }

        data.push(y);
    }

    var res = [];
    for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
    }

    return res;
}