<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }} - @yield('page-name')</title>

  @vite('resources/js/app.js')

  @yield('cdn')
</head>
<body>
   @include('partials.header')

   <main>
    <section class="container">
      <h1 class="my-3">@yield('page-name')</h1>
      @yield('main-content')
    </section>
   </main>

</body>
</html>