<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    @include('partials.nav')
    @php

        
    @endphp
   
    <div>
        <a href="{{url("/")}}">Home</a>

        <p>welcome</p>
    </div>
    @yield('content')
    @include('partials.footer')
    

   
    


    <script src=""></script>
</body>
</html>