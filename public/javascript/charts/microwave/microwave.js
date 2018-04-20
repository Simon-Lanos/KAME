$(function () {
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#utilisation').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
        {
            value    : 700,
            color    : '#f56954',
            highlight: '#f56954',
            label    : 'Développeurs'
        },
        {
            value    : 700,
            color    : '#032255',
            highlight: '#032255',
            label    : 'Designers'
        },
        {
            value    : 500,
            color    : '#00a65a',
            highlight: '#00a65a',
            label    : 'Marketeux'
        },
        {
            value    : 400,
            color    : '#f39c12',
            highlight: '#f39c12',
            label    : 'Année 3'
        },
        {
            value    : 600,
            color    : '#00c0ef',
            highlight: '#00c0ef',
            label    : 'Personnes qui ne l\'utilisent pas'
        },
    ]
    var pieOptions     = {
        //Boolean - Whether we should show a stroke on each segment
        segmentShowStroke    : true,
        //String - The colour of each segment stroke
        segmentStrokeColor   : '#fff',
        //Number - The width of each segment stroke
        segmentStrokeWidth   : 2,
        //Number - The percentage of the chart that we cut out of the middle
        percentageInnerCutout: 50, // This is 0 for Pie charts
        //Number - Amount of animation steps
        animationSteps       : 100,
        //String - Animation easing effect
        animationEasing      : 'easeOutBounce',
        //Boolean - Whether we animate the rotation of the Doughnut
        animateRotate        : true,
        //Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale         : false,
        //Boolean - whether to make the chart responsive to window resizing
        responsive           : true,
        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio  : true,
        //String - A legend template
        legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)
})
//-------------
//- FIN PIE CHART -
//-------------
//-------------
//- Line CHART -
//-------------
// Get context with jQuery - using jQuery's .get() method.
var areaChartCanvas = $('#lineChart').get(0).getContext('2d')
// This will get the first returned node in the jQuery collection.
var areaChart       = new Chart(areaChartCanvas)
var areaChartData = {
    labels  : ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet'],
    datasets: [
        {
            label               : 'Femme',
            fillColor           : '#ef6531',
            strokeColor         : '#ef6531',
            pointColor          : '#ef6531',
            pointStrokeColor    : '#ef6531',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [65, 59, 80, 81, 56, 55, 40]
        },
        {
            label               : 'Homme',
            fillColor           : '#397ca3',
            strokeColor         : '#397ca3',
            pointColor          : '#397ca3',
            pointStrokeColor    : '#397ca3',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [28, 48, 40, 19, 86, 27, 90]
        }
    ]
}
var areaChartOptions = {
    //Boolean - If we should show the scale at all
    showScale               : true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines      : false,
    //String - Colour of the grid lines
    scaleGridLineColor      : 'rgba(0,0,0,.05)',
    //Number - Width of the grid lines
    scaleGridLineWidth      : 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines  : true,
    //Boolean - Whether the line is curved between points
    bezierCurve             : true,
    //Number - Tension of the bezier curve between points
    bezierCurveTension      : 0.3,
    //Boolean - Whether to show a dot for each point
    pointDot                : false,
    //Number - Radius of each point dot in pixels
    pointDotRadius          : 4,
    //Number - Pixel width of point dot stroke
    pointDotStrokeWidth     : 1,
    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    pointHitDetectionRadius : 20,
    //Boolean - Whether to show a stroke for datasets
    datasetStroke           : true,
    //Number - Pixel width of dataset stroke
    datasetStrokeWidth      : 2,
    //Boolean - Whether to fill the dataset with a color
    datasetFill             : true,
    //String - A legend template
    legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
    //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio     : true,
    //Boolean - whether to make the chart responsive to window resizing
    responsive              : true
}
//Create the line chart
areaChart.Line(areaChartData, areaChartOptions)
//-------------
//- LINE CHART -
//--------------
var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
var lineChart                = new Chart(lineChartCanvas)
var lineChartOptions         = areaChartOptions
lineChartOptions.datasetFill = false
lineChart.Line(areaChartData, lineChartOptions)