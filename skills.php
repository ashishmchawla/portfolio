<h2 class="sectionHeadingLight"> My Skills </h2>
<div class="container-fluid">
    <div class="row">
        <!-- <div class="col-md-1"></div> -->
        <div class="col-md-12">
            <div id="chart_div"></div>
        </div> 
        <!-- <div class="col-md-1"></div> -->
    </div>
    <br><br>
    <h3> Tools, Stack, and other things I use...</h3>       
    <br>
    <div class="row" id="toolSection">
        <div class='tools col-6 col-md-2'>
            <i class="devicon-apple-original"></i>
            <h5> Mac OS </h5>
        </div>
        <div class="tools col-6 col-md-2">
            <i class="devicon-ubuntu-plain"></i>
            <h5>Ubuntu</h5>
        </div>
        <div class="tools col-6 col-md-2">
            <i class="devicon-docker-plain"></i>
            <h5>Docker</h5>
        </div>
        <div class='tools col-6 col-md-2'>
            <i class="devicon-nginx-original"></i>
            <br>
            <h5> Nginx </h5>
        </div>
        <div class='tools col-6 col-md-2'>
            <i class="devicon-mysql-plain"></i>
            <br>
            <h5> MySQL </h5>
        </div>
        <div class='tools col-6 col-md-2'>
            <i class="devicon-mongodb-plain"></i>
            <br>
            <h5> MongoDB </h5>
        </div>
        <div class='tools col-6 col-md-2'>
            <i class="devicon-php-plain"></i>
            <br>
            <h5> PHP </h5>
        </div>
        <div class='tools col-6 col-md-2'>
            <i class="devicon-laravel-plain"></i>
            <br>
            <h5> Laravel </h5>
        </div>
        <div class='tools col-6 col-md-2'>
            <i class="devicon-nodejs-plain"></i>
            <br>
            <h5> Node JS </h5>
        </div>
        <div class='tools col-6 col-md-2'>
            <i class="devicon-express-original"></i>
            <br>
            <h5> Express </h5>
        </div>
        <div class='tools col-6 col-md-2'>
            <i class="devicon-javascript-plain"></i>
            <br>
            <h5> JavaScript </h5>
        </div>
        <div class='tools col-6 col-md-2'>
            <i class="devicon-bootstrap-plain"></i>
            <br>
            <h5> Bootstrap </h5>
        </div>
        <div class='tools col-6 col-md-2'>
            <i class="devicon-react-original"></i>
            <br>
            <h5> React JS </h5>
        </div>
        <div class='tools col-6 col-md-2'>
            <i class="devicon-sass-original"></i>
            <br>
            <h5> Sass </h5>
        </div>
        <div class='tools col-6 col-md-2'>
            <i class="devicon-github-plain"></i>
            <br>
            <h5> Github </h5>
        </div>
        <div class='tools col-6 col-md-2'>
            <i class="devicon-slack-plain"></i>
            <br>
            <h5> Slack </h5>
        </div>
    </div>
    <br>
    <h5>and many more depending on needs of project...</h5>
    <br> 
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
         ['NodeJS / Express', 3.8, 'color: #2b7a78' ],
         
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
                // fontName: 'CustomFonts',
                fontSize: 14,
            },
        },
        hAxis: {
            direction: 1,
            slantedText: true,
            slantedTextAngle: 45,
            textStyle: {
                // fontName: 'CustomFonts'
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