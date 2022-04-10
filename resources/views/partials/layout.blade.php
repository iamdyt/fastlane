<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('styles/css/css/bootstrap.min.css')}}">
    <title>Fastlane Cinema</title>
</head>
<body>

    @yield('content')

     <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('styles/css/js/bootstrap.min.js')}}"></script>
    @stack('scripts')
   
</body>
</html>