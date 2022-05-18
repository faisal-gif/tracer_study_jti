<html>
<head>
    <script src="http://www.gstatic.com/charts/loader.js"></script>
    <script>google.load("visualization", "44", {packages:["corechart"]});</script>
    <style type="text/css" media="print">
    div.page
    {
        page-break-after: always;
        page-break-inside: avoid;
    }
</style>
</head>
<body>

@foreach($pertanyaan2 as $p)
<div style="page-break-inside: avoid;">
<div class="col-7 grid-margin">
                  <div class="card mb-3">                            
  <div class="card-body">
  <h4 class="card-title">{{$p->label}}</h4>
 @foreach($jawaban as $j)

  @if(isset($j->text[$p->name]))
  

  <p class="card-text">{{$j->text[$p->name]}}</p>
  @endif
  
@endforeach
  </div>
</div>
</div>
</div>
@endforeach



@foreach($pertanyaan as $p)
<div style="page-break-inside: avoid;">
<div id="piechart{{$p->name}}" style="width: 900px; height: 500px;" "></div>
</div>
@endforeach

</body>

<script>
  
  window.onload=  function init() {
        var interval = setInterval(function () {
          if (google.visualization !== undefined && google.visualization.DataTable !== undefined 
            && google.visualization.PieChart !== undefined) {
            clearInterval(interval);
            window.status = 'ready';
            @foreach($pertanyaan as $p)
            drawChart{{$p->name}}();
            @endforeach
          }
        }, 900);
      }
      @foreach($pertanyaan as $p)
      function drawChart{{$p->name}}() {

var data = google.visualization.arrayToDataTable([
  ['Task', 'Number'],
  @foreach($dt[$p->name] as $ad => $cval)
 
  ['{{$ad}}',{{$cval}}],
  @endforeach
]);

var options = {
  title: '{{$p->label}}'
};

var chart = new google.visualization.PieChart(document.getElementById('piechart{{$p->name}}'));

chart.draw(data, options);
}
@endforeach
</script>
   
</html>
