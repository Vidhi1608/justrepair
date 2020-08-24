<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#419eaa">

    @yield('meta-data')
    @include('includes.header')
</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=1049909768686087&autoLogAppEvents=1"></script>
  
    @include('includes.navbar')

    @yield('static-content')


    @include('includes.footer')
</body>
</html>