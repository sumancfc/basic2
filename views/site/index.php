<?php

/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Homepage';
$imageUrl = Yii::getAlias('@web') . '/img/section/hero-img.jpg';
?>
  <!-- Start Hero Seciton -->
  <div class="st-height-b80 st-height-lg-b80"></div>
  <section class="st-hero-wrap st-parallax">
    <div class="st-hero st-style1 st-ripple-version">
      <div class="container">
        <div class="st-hero-text">
          <h3>Hello, I’m</h3>
          <h1>Edward <br>Davis
          </h1>
          <h2>Photo Grapher</h2>
          <div class="st-hero-btn">
            <a href="#contact" class="st-btn st-style1 st-color1 st-smooth-move">Hire me</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Image - Social Link Group -->
    <div class="st-hero-img st-to-right">
          <img class="wow fadeInRight" src="<?= $imageUrl ?>" alt="Davis">
      <div class="st-social-group wow fadeInLeft">
        <div class="st-social-link">
          <a href="#" class="st-social-btn active">
            <span class="st-social-icon"><i class="fab fa-dribbble"></i></span>
            <span class="st-icon-name">Dribbble</span>
          </a>
          <a href="#" class="st-social-btn">
            <span class="st-social-icon"><i class="fab fa-behance"></i></span>
            <span class="st-icon-name">Behance</span>
          </a>
          <a href="#" class="st-social-btn">
            <span class="st-social-icon"><i class="fab fa-twitter"></i></span>
            <span class="st-icon-name">Twitter</span>
          </a>
          <a href="#" class="st-social-btn">
            <span class="st-social-icon"><i class="fab fa-linkedin"></i></span>
            <span class="st-icon-name">LinkedIn</span>
          </a>
        </div>
      </div>
    </div>
    <div id="particles-js"></div>
  </section>
  <!-- End Hero Seciton -->
