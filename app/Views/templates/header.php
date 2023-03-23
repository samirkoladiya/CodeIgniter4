<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <style>
      .error_message{
        color: red;
      }
      .success_message{
        color: red;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url(); ?>">CodeIgnitor 4 Demo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <?php 
              if( session('is_user_logged_in') )
              {
                echo '<a class="nav-link active" aria-current="page" href="'.site_url('dashboard').'">Dashboard</a>';
              }
              else
              {
                echo '<a class="nav-link active" aria-current="page" href="'.site_url().'">Home</a>';
              }
              ?>
            </li>
            <?php if( ! session('is_user_logged_in') ) { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('login'); ?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('register'); ?>">Register</a>
            </li>
            <?php } ?>

            <?php if( session('is_user_logged_in') ) { ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('logout'); ?>">Logout</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>