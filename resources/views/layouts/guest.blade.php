<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
  
  <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
</head>

<body>
  <div id="auth">
    @yield('content')
  </div>
</body>

</html>