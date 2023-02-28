
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Wordpress</title>     
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container-fluid dark">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url() ?>">SUPERSTREET</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo get_post_type_archive_link('test');?>">Test Drives</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_post_type_archive_link('reviews');?>">Reviews</a>
        </li>
        <li class="nav-item search-icon">
          <a href="#" class="nav-link"><i class="fas fa-search"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div>
