<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cannonball</title>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i');

    * {
      margin: 0;
      padding: 0;
      font-family: 'Merriweather', serif;
    }

    *, *:before, *:after {
      box-sizing: border-box;
    }

    a {
      text-decoration: none;
      color: ;
    }
    body {
      background-color: #eee;
      color: 333;
    }
    header, main {
      padding: 25px;
    }
    header {
      position: fixed;
      top: 0;
      width: 100%;
      border-bottom: 1px solid #999;
    }
    main {
      margin-top: 111px;
    }
    nav a {
      margin-right: 10px;
    }

    h2 {
      margin-bottom: 15px;
    }
    ul {
      margin-left: 20px;
    }
  </style>

</head>
<body>
  <header>
    <h1>Cannonball</h1>
    <nav>
      <a href="/beverages">Beverages</a>
      <a href="/about">About</a>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

</body>
</html>