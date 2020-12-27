<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('images\icons8-mongodb-48.png')}}" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    
    
    <div id="page-contents">

          <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
              <img src="{{asset('images\icons8-mongodb-48.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
              MangoDB &
              <img src="{{asset('images\laravel.png')}}" style="padding-left:5px" width="30" height="30" class="d-inline-block align-top" alt="">
               Laravel
            </a>
          </nav>

    <div class="container" style="margin-top:20px">
   <div class="row">
    {{$slot}}
    </div>
    </div>

</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>