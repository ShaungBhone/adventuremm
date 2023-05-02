<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @hasSection('title')
    <title>@yield('title') - {{ config('app.name') }}</title>
  @else
    <title>{{ config('app.name') }}</title>
  @endif

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

  @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
  @livewireStyles
  @livewireScripts

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body x-data="{
    page: 'home',
    'darkMode': true,
    'stickyMenu': false,
    'navigationOpen': false,
    'scrollTop': false
}" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
  :class="{ 'b eh': darkMode === true }">
  <x-header />

  @yield('body')

  <x-footer />

</body>

</html>
