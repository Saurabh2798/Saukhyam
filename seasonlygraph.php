<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="container"></div>
<script>
var year = <?php echo json_encode($year); ?>;
/*alert(district);*/
var graphtitle = <?php echo json_encode($table_name); ?>;
graphtitle = graphtitle[0].toUpperCase() + graphtitle.substr(1);
var dengue = <?php echo json_encode($dengue_cases)?>;
var  flu = <?php echo json_encode($flu_cases)?>;
var typhoid = <?php echo json_encode($typhoid_cases)?>;
//console.log("hi");

//console.log(vals);

var chart = Highcharts.chart('container', {

  chart: {
    type: 'column'
  },

  title: {
    text: 'Seasonly diseases'
  },

  legend: {
    align: 'right',
    verticalAlign: 'middle',
    layout: 'vertical'
  },

  xAxis: {
    title: {
      text: 'Season'
    },
    categories: ['Rainy','Winter','Summer'],
    labels: {
      x: -10
    }
  },

  yAxis: {
    allowDecimals: true,
    title: {
      text: 'Number of cases'
    }
  },

  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.0f} </b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  series: [{
    name: 'Dengue_cases',
    data: dengue
  },{
    name: 'Flu_cases',
    data: flu
  },{
    name: 'Typhoid_cases',
    data: typhoid
  }


  ],

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          align: 'center',
          verticalAlign: 'bottom',
          layout: 'horizontal'
        },
        yAxis: {
          labels: {
            align: 'left',
            x: 0,
            y: -5
          },
          title: {
            text: null
          }
        },
        subtitle: {
          text: null
        },
        credits: {
          enabled: false
        }
      }
    }]
  }
});



</script>