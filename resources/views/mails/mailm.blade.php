<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>N-WEB.LT</title>
<!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flex-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-softy-pinko.css') }}" rel="stylesheet">

    </head>

    
    <body>

        @foreach ($mailm as $mailm)
            <p>{{ $mailm->name }}</p>
            <p>{{ $mailm->email }}</p>
            <p>{{ $mailm->message }}</p>
         
            

          
        @endforeach
   

    </body>

</html>