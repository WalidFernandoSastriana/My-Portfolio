<!DOCTYPE html>
<html lang="en">
<head>
  <title>WEBSITE WALID</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .header {
      overflow: hidden;
      background-color: teal;
      padding: 20px 10px;
    }

    .header a {
      float: left;
      color: black;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      border-radius: 4px;
    }

    .header a.logo {
      font-size: 25px;
      font-weight: bold;
    }

    .header a:hover {
      background-color: #ddd;
      color: black;
    }

    .header-right {
      float: right;
    }

    @media screen and (max-width: 500px) {
      .header a {
        float: none;
        display: block;
        text-align: left;
      }

      .header-right {
        float: none;
      }
    }

    footer {
      background-color: teal;
      padding: 10px;
      text-align: center;
      color: black;
      font-weight: bold;
    }

    .social-links a {
      text-decoration: none;
      color: white;
      margin: 0 5px;
    }

    .social-links a:hover {
      color: #ddd;
    }
  </style>
</head>
<body>

  <header class="header">
    <div class="header-right">
      <a href="/about">About Me</a>
      <a href="/experience">Experience</a>
      <a href="/cv">CV</a>
    </div>
  </header>

  <!-- Container -->
  <div class="container">
    <div class="row">
      @yield('content')
    </div>
  </div>
  <!-- Container -->

  <footer>
    <p>&copy; 2024 MyWebsite. All rights reserved.</p>
      <div class="social-links">
        <a href="https://www.instagram.com/walidfrnds14_" class="fa fa-instagram"></a>
        <a href="https://www.youtube.com/@walidfernando.s" class="fa fa-youtube"></a>
        <a href="https://www.facebook.com/walid.fernando.s" class="fa fa-facebook"></a>
        <a href="https://twitter.com/SWalidfernando" class="fa fa-twitter"></a>
        <a href="https://www.linkedin.com/in/walidfernandosastriana" class="fa fa-linkedin"></a>
      </div>
    </div>
  </footer>

</body>
</html>
