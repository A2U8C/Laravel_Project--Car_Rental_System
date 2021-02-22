<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
<style>body {
        background-color: powderblue;
      }</style>
        <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="starter-template.css" rel="stylesheet">    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>{{ config('app.name') }}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            <br>
        @include('inc.messages')
        @yield('content')
        </div>
    </body>
</html>
