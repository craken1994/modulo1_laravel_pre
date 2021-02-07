<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>

  <style>
	*{
	 font-family: 'Open sans';
  }
  </style>
</head>
<body>
  <header>
	 @yield('head')
	 @include('template.partials.navbar')
  </header>

  <main>
	 @yield('body')
  </main>

  <footer>
	 <p>Todos los Derechos Reservados &COPY; 2021</p>
  </footer>
</body>
</html>
