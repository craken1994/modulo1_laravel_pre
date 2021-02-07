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
	 @include('intranet.template.partials.navbar')
	 @yield('head')
  </header>

  <main>
	 @yield('body')
  </main>

  <footer>
	 <p>Sistema de Proyectos, Todos los Derechos Reservados &COPY; 2021</p>
  </footer>
</body>
</html>
