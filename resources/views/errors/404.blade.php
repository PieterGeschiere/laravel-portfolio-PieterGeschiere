@extends ('layout')

@section ('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Custom Error Page Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body  style = "background-color: rgb(48, 47, 47)"> 
    <div class="container mt-5 pt-5">
        <div  class="alert alert-danger text-center">
            <h2 class="display-3">404</h2>
            <h3 class="display-3">Page not found</h2>
            <p class="display-5">This page does not exist</p>
            <a href="/">Go back to home-page</a>
        </div>
    </div>
</body>
@endsection