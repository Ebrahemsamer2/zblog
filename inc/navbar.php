<?php include "admin/inc/functions.php";
  foreach(get_settings() as $setting){
    $name = $setting['name'];
    $tagline = $setting['tagline'];
    $home_posts_number = $setting['home_posts_number'];
  }
?>

<div class="header">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand logo" href="#"><span>ZB</span><span>log</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
<!--       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link search" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-search"></i></a>
        <form action="index.php" method="GET" class="form-inline my-2 my-lg-0">
          <input name="s" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
        </form>
      </li>
      <li class="nav-item">
        <a class="nav-link sign-in" href="#" tabindex="-1" aria-disabled="true">Sign-in</a>
      </li>
    </ul>
  </div>
</nav>
<div class="text-center site-info">
  <p class="lead name"><?php echo $name; ?></p>
<p class="lead tagline"><?php echo $tagline; ?></p>
</div>

</div>