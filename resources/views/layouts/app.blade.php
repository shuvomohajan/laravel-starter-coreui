<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- font awesome 6 beta2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<body>
  @include('layouts.includes.dashboard.sidebar')
  <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    @include('layouts.includes.dashboard.header')
    <div class="body flex-grow-1 px-3">
      <div class="container-lg">
        {{ $slot }}
      </div>
    </div>
    <footer class="footer">
      <div>&copy; 2021.</div>
      <div class="ms-auto">Powered by&nbsp;<a href="#">#</a></div>
    </footer>
  </div>

  <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>
