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
  chart: {
    type: 'column'
  },
  title: {
    text: 'Monthly diseases'
  },
  xAxis: {
  title: {
      text: 'Month', 
    },
    categories: [
      'Jan',
      'Feb',
      'Mar',
      'Apr',
      'May',
      'Jun',
      'Jul',
      'Aug',
      'Sep',
      'Oct',
      'Nov',
      'Dec'
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
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
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
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
  ]
});

</script>