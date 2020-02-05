<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <link href="{{ url('favicon.ico') }}" rel="icon" type="image/x-icon"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0">
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name="theme-color" content="#000000">
    <title>Fifteen collect game</title>
    <link rel="manifest" href="{{ url('manifest.json') }}">
</head>
<body>
<div id="root" class="h-100"></div>
<script type="text/javascript" src="{{ asset('js/vendors.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bundle.js') }}"></script>
</body>
</html>
