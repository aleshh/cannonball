<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cannonball</title>

  <style>
    /* @import url('https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i'); */
    @import url('https://fonts.googleapis.com/css?family=Tillana:400,600,800');


    * {
      margin: 0;
      padding: 0;
      font-family: 'Tillana', cursive;
    }

    *, *:before, *:after {
      box-sizing: border-box;
    }

    a {
      text-decoration: none;
      color: ;
    }
    strong {
      font-weight: 600;
    }
    body {
      background-color: #eee;
      color: 333;
    }
    header, main {
      padding: 10px 25px;
    }
    header {
      position: fixed;
      top: 0;
      width: 100%;
      border-bottom: 1px solid #999;
      background-color: #eee;
      opacity: .98;
    }
    main {
      margin-top: 68px;
    }
    nav {
      display: inline;
    }
    nav a {
      margin-right: 10px;
    }
    header h1 {
      display: inline;
      font-weight: 800;
      font-size: 25px;
      margin-right: 10px;
    }
    h2 {
      font-weight: 600;
      font-size: 35px;
      margin-bottom: 5px;
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