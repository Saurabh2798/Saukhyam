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

Highcharts.chart('container', {

  title: {
    text: 'Yearly diseases'
  },

  xAxis: {
    title: {
      text: 'Year'
    }
  },

  yAxis: {
    title: {
      text: 'Number of cases'
    }
  },
  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },
      pointStart: 2008
    }
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
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});

</script>