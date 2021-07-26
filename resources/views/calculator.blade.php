<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{!! mix('/css/app.css') !!}" rel="stylesheet">
  <style>
   
</style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-brand mx-auto d-block text-center order-0 order-md-1 w-25">
        CALCULATOR
    </div>
  </div>
</nav>
  
<div class="container" id="app">
    <div class="panel panel-success">
        <calculator></calculator>
    </div>

</div>
<script src="{{ asset(mix('/js/app.js')) }}"></script>
</body>
</html>
