<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <?php wp_head(); ?>

  <title>ArboretumDemo</title>
</head>

<body>

  <div id="slideout-menu">
    <ul>
      <li>
        <a class="active" href="index.html" class="">HOME</a>
      </li>
      <li>
        <a href="#" class="VISIT">VISIT</a>
      </li>
      <li>
        <a href="#" class="LEARN">LEARN</a>
      </li>
      <li>
        <a href="#" class="GET INVOLVED">GET INVOLVED</a>
      </li>
      <li>
        <a href="#" class="LAND STEWARDSHIP">LAND STEWARDSHIP</a>
      </li>
      <li>
        <a href="#" class="RESEARCH">RESEARCH</a>
      </li>
      <li>
        <a href="#" class="ABOUT US">ABOUT US</a>
      </li>
      <li>
        <input type="text" class="text" placeholder="Search..">

      </li>
    </ul>
  </div>

  <nav>

    <div id="logo-img">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/crest-logo.svg" alt="UWMadison-Crest Logo" class=""/>
        <!-- <img src="./img/crest-logo.svg" alt="UWMadison Crest Logo" class=""> -->
      </a>
      <h5>University of Wisconsin-Madison Arboretum</h5>
    </div>

    <div id="menu-icon">
      <i class="fas fa-bars"></i>
    </div>
    <ul>
      <li>
        <a href="#" class="VISIT">VISIT</a>
      </li>
      <li>
        <a href="#" class="LEARN">LEARN</a>
      </li>
      <li>
        <a href="#" class="GET INVOLVED">GET INVOLVED</a>
      </li>
      <li>
        <a href="#" class="LAND STEWARDSHIP">LAND STEWARDSHIP</a>
      </li>
      <li>
        <a href="#" class="RESEARCH">RESEARCH</a>
      </li>
      <li>
        <a href="#" class="ABOUT US">ABOUT US</a>
      </li>
      <li>
        <div id="search-icon">
          <i class="fas fa-search"></i>
        </div>
      </li>
    </ul>
  </nav>
  <div id="searchbox">
    <input type="text" placeholder="Search.." name="" id="">
  </div>