<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">

<title>Mailer Challenge</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">   
<!--Fav icon -->
<link rel="icon" href="/images/favicon-16x16.png">
<!--Vuetify material icons-->
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
<!--nprogress-css-->
<link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet" />
<!--google fonts-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet"> 
<!--bootstrap CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--custom css-->
<link href="/css/custom.css" rel="stylesheet"> 

 </head>

<body>
<div id='app' v-cloak>
<router-view></router-view>	
</div>
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
<script src="{{asset('/js/app.js')}}"></script>

 </body>
</html>
