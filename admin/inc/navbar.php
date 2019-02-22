<?php 
  foreach (get_settings() as $setting) {
    $logo_name = $setting['logo'];
    $tagline = $setting['tagline'];
  }
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark">
	<div class="container-fluid">
  
    <a class="navbar-brand nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img class="logo" width="40" height="40" src="uploads/<?php echo $logo_name; ?>">
    </a>
    <span class="tagline"><?php echo $tagline; ?></span>
    <div class="dropdown-menu brand-drop-down" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#">View Site</a>
    </div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>