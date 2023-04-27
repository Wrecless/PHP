jQuery.noConflict();

var iHighchartsIndex = 0;
var iHighIntervalSecond = 1;
var arrHighchartsData = [];
var hHighAnimateTimer;
var iBubbleIndex = 0;
(function ($) { // encapsulate jQuery
    function high_myfunc_initdata()
    {
        arrHighchartsData = [];
    }

    function high_myfunc_setdata(arrData)
    {
        arrHighchartsData = arrData;
    }

    function high_myfunc_adddata(data)
    {
        arrHighchartsData[arrHighchartsData.length] = data;
    }

    function myfunc_highcharts_animate(intervalSecond)
    {
        iHighIntervalSecond = intervalSecond;
        iHighchartsIndex = 0;
        iIntervalSecond = intervalSecond;
        iMbostockIndex = 0;
        iIntervalSecond1 = intervalSecond;
        callTimeout2();
    }

    function myfunc_onAnimatedHighcharts()
    {
        if (arrHighchartsData.length > 0 && templateNum == 1){
            myfunc_highcharts(arrHighchartsData[iHighchartsIndex++ % arrHighchartsData.length]);
        }
        else if (arrMbostockData.length > 0 && templateNum == 2)
        {
            if ($("svg").length > 0)
                d3.select(".mbostock2").select("svg").remove();
            myfunc_mbostock(null, arrMbostockData[iMbostockIndex++ % arrMbostockData.length]);
        }
        else if (templateNum == 3){
            if ($("svg").length > 0)
                d3.select(".mbostock1").select("svg").remove();
            transition();
        }
        callTimeout2();
        //if (arrHighchartsData.length >= 0 && iHighchartsIndex < arrHighchartsData.length)
        //    hHighAnimateTimer = setTimeout(myfunc_onAnimatedHighcharts, iHighIntervalSecond * 1000);
    }

    function callTimeout2() {
        setTimeout(myfunc_onAnimatedHighcharts, iHighIntervalSecond * 1000);
    }

    function myfunc_highcharts(data)
    {

        /**
         * Data parsed from http://www.bls.gov/lau/#tables
         *
         * 1. Go to http://www.bls.gov/lau/laucntycur14.txt (or similar, updated datasets)
         * 2. In the Chrome Developer tools console, run this code:
         * copy(JSON.stringify(document.body.innerHTML.split('\n').filter(function (s) { return s.indexOf('<PUT DATE HERE IN FORMAT e.g. Feb-14>') !== -1; }).map(function (row) { row = row.split('|'); return { code: 'us-' + row[3].trim().slice(-2).toLowerCase() + '-' + row[2].trim(), name: row[3].trim(), value: parseFloat(row[8]) }; })))
         * 3. The data is now on your clipboard, paste it below
         */

        var countiesMap = Highcharts.geojson(Highcharts.maps['countries/us/us-all-all']),
            lines = Highcharts.geojson(Highcharts.maps['countries/us/us-all-all'], 'mapline'),
            options;

        // Add state acronym for tooltip
        Highcharts.each(countiesMap, function (mapPoint) {
            mapPoint.name = mapPoint.name + ', ' + mapPoint.properties['hc-key'].substr(3, 2);
        });

        options = {
            chart: {
                borderWidth: 1,
                marginRight: 50 // for the legend
            },

            title: {
                text: 'US Counties unemployment rates, April 2015'
            },

            legend: {
                title: {
                    text: 'Unemployment<br>rate',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                    }
                },
                layout: 'vertical',
                align: 'right',
                floating: true,
                valueDecimals: 0,
                valueSuffix: '%',
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || 'rgba(255, 255, 255, 0.85)',
                symbolRadius: 0,
                symbolHeight: 14
            },

            mapNavigation: {
                enabled: true
            },

            colorAxis: {
                dataClasses: [{
                    from: 0,
                    to: 2,
                    color: "#F1EEF6"
                }, {
                    from: 2,
                    to: 4,
                    color: "#D4B9DA"
                }, {
                    from: 4,
                    to: 6,
                    color: "#C994C7"
                }, {
                    from: 6,
                    to: 8,
                    color: "#DF65B0"
                }, {
                    from: 8,
                    to: 10,
                    color: "#DD1C77"
                }, {
                    from: 10,
                    color: "#980043"
                }]
            },

            plotOptions: {
                mapline: {
                    showInLegend: false,
                    enableMouseTracking: false
                }
            },

            series: [{
                mapData: countiesMap,
                data: data,
                joinBy: ['hc-key', 'code'],
                name: 'Unemployment rate',
                tooltip: {
                    valueSuffix: '%'
                },
                borderWidth: 0.5,
                states: {
                    hover: {
                        color: '#bada55'
                    }
                }
            }, {
                type: 'mapline',
                name: 'State borders',
                data: [lines[0]],
                color: 'white'
            }, {
                type: 'mapline',
                name: 'Separator',
                data: [lines[1]],
                color: 'gray'
            }]
        };

        // Instanciate the map
        $('#container').highcharts('Map', options);
    }

    // load data array //
    high_myfunc_initdata();
    high_myfunc_adddata(data2);
    high_myfunc_adddata(data3);

    //$.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=us-counties-unemployment.json&callback=?', high_myfunc_adddata);
    /////////////////////

    // display data //
    setTimeout(myfunc_highcharts_animate(1), 2000);
    //////////////////

})(jQuery);
jQuery(document).ready(function(){jQuery("#view-menu").click(function(e){jQuery("#wrap").toggleClass("toggled")}),jQuery("#sidebar-close").click(function(e){jQuery("#wrap").removeClass("toggled")}),jQuery(document).keydown(function(e){var t;"INPUT"!=e.target.tagName&&(39==e.keyCode?t=document.getElementById("next-example"):37==e.keyCode&&(t=document.getElementById("previous-example")),t&&(location.href=t.href))}),jQuery("#switcher-selector").bind("change",function(){var e=jQuery(this).val();return e&&(window.location=e),!1})});

(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-2995052-3', 'auto');
ga('send', 'pageview');
