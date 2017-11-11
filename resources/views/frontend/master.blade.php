<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Nusendra.com</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
  <div id="app">
    <section class="hero is-dark is-bold">
      <div class="hero-head">
        <nav class="navbar">
          <div class="container">
            <div class="navbar-brand">
              <a class="navbar-item" href="../">
                <img src="/image/logo.png" alt="Logo">
              </a>
              <span class="navbar-burger burger" data-target="navbarMenu">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </div>
            <div id="navbarMenu" class="navbar-menu">
              <div class="navbar-end">
                <a class="navbar-item is-active">
                  Home
                </a>
                <a class="navbar-item">
                  Skillset
                </a>
                <a class="navbar-item">
                  Portofolio
                </a>
                <a class="navbar-item">
                  Contact
                </a>
                <a class="navbar-item">
                  ToS
                </a>
                <a class="navbar-item">
                  Disclaimer
                </a>
                <span class="navbar-item">
                  <a class="button is-white is-outlined is-small" href="https://github.com/dansup/bulma-templates/blob/master/templates/hero.html">
                    <span class="icon">
                      <i class="fa fa-github"></i>
                    </span>
                    <span>My Github</span>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </section>
      <router-view></router-view>
    <footer class="footer">
      <div class="container">
        <div class="content has-text-centered">
          <p>
            <strong>Nusendra.com</strong> This Web is built with Laravel & VueJS
          </p>
          <p>
            2017
          </p>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  if ($navbarBurgers.length > 0) {
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {
        var target = $el.dataset.target;
        var $target = document.getElementById(target);
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }
});
</script>
<script src="js/app.js" charset="utf-8"></script>
