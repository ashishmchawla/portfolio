<h2 class="sectionHeadingLight"> My Skills </h2>
<div class="container-fluid">
    <div class="row">
        <!-- <div class="col-md-1"></div> -->
        <div class="col-md-12">
            <div id="chart_div"></div>
        </div> 
        <!-- <div class="col-md-1"></div> -->
    </div>
</div>
<script>
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

    var data = google.visualization.arrayToDataTable([
         ['Element', 'Density', { role: 'style' } ],
         ['HTML / CSS', 4, 'color: #3aafa9' ],
         ['JS / jQuery', 4.5, 'color: #2b7a78' ],
         ['React', 2.8, 'color: #3aafa9' ],
         ['REST APIs', 5, 'color: #2b7a78' ],
         ['PHP / Laravel', 4.7, 'color: #3aafa9' ],
         ['MySQL', 4, 'color: #2b7a78' ],
         ['MongoDB', 2, 'color: #3aafa9' ],
         
    ]);

    var options = {
        height: 400,
        is3D: true,
        chartArea:{
            top: 10,
            width: '70%',
            height: '70%',
        },
        vAxis: { 
            ticks: [
                { v: 0, f: ''}, 
                {v: 1, f: 'Rookie'}, 
                {v: 2, f: 'Learner'},
                {v: 3, f: 'Geek'},
                {v: 4, f: 'Ninja'},
                {v: 5, f: 'Jedi'},
            ],
            textStyle: {
                fontName: 'CustomFonts',
                fontSize: 14,
            },
        },
        hAxis: {
            direction: 1,
            slantedText: true,
            slantedTextAngle: 45,
            textStyle: {
                fontName: 'CustomFonts'
            },
        },
        lineWidth: 4,
        backgroundColor: { fill:'transparent' },
        legend: 'none',
        tooltip: {
           trigger: 'none'
        }
    };

    var chart = new google.visualization.ColumnChart(
    document.getElementById('chart_div'));

    chart.draw(data, options);
}

</script>