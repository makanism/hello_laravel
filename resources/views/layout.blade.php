<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello Laravel</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div>
      <nav>
        <ul class="navigation">
          <li><a href="/">Welcome</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav>

      @yield('content')

      @yield('sidebar')

    </div>
  </body>
</html>
