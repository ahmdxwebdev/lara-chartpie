

<html>
  <head>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script> -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
  </head>
  <body>
    <div class="container" >
      <nav>
        <div class="nav-wrapper">
            <!-- <a href="" class="brand-logo" style="margin: 0 20px;"> </a> -->
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/add">Add Data</a></li>
                <li><a href="/">View Chart</a></li>
            </ul>
        </div>
      </nav>
      <div class="row">
        <div class="col s12" id="donutchart" style="width: 900px; height: 500px; margin-top: 10px;"></div>
        <div class="col s4"><a href="/add" class="btn btn-sm btn-primary mt-4"> Add</a></div>
      </div>
    </div>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['City', 'Student Count'],
          <?php echo $chartData ?>
        ]);

        var options = {
          title: 'Gender Chart',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </body>
</html>