<html>

  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$pageTitle}</title>
    <link rel="stylesheet" href="{$templateWebPath}css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script type="text/javascript" src="/js/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/main.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
      <div class="container">
        <a href="http://myshop.local/" class="navbar-brand">Mobiil </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

          {if isset($arUser)}
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown mr-3">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-user fa"></i> {$arUser['displayName']}
                </a>
                <div class="dropdown-menu">
                  <a href="/user/" class="dropdown-item">
                    <i class="fas fa-user-circle fa"></i> Profile</a>
                  <a href="/user/orders/" class="dropdown-item">
                    <i class="far fa-list-alt fa"></i> Orders</a>
                  <a href="/user/logout/" class="dropdown-item">
                    <i class="fas fa-user-times fa"></i> Logout</a>
                </div>
              </li>
            </ul>
          {else}
  
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="/user/registration/" class="nav-link"><i class="fas fa-pencil fa"></i> Register</a>
              </li>
  
              <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal"><i class="fas fa-user fa"></i> Login</a>
              </li>
            </ul>
          {/if}

        </div>
      </div>
    </nav>
    <div class="container">
      {include file='leftcolumn.tpl'}


      <div id="centerColumn">