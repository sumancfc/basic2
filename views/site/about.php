<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$imageUrl = Yii::getAlias('@web') . '/img/section/about.jpg';
?>
  <!-- Start About Seciton -->
  <section id="about" class="st-about-wrap">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h4 class="st-section-heading-title"><?= Html::encode($this->title) ?></h4>
        <h1 class="st-section-heading-subtitle"><?= Html::encode($this->title) ?></h1>
      </div>
      <div class="st-height-b25 st-height-lg-b25"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft">
          <div class="st-about-img-wrap">
            <div class="st-about-img st-dynamic-bg st-bg" data-src="<?= $imageUrl ?>"></div>
          </div>
          <div class="st-height-b0 st-height-lg-b30"></div>
        </div>
        <div class="col-lg-6">
          <div class="st-vertical-middle">
            <div class="st-vertical-middle-in">
              <div class="st-text-block st-style1">
                <h2 class="st-text-block-title">Hi There! I'm Edward Davis</h2>
                <h4 class="st-text-block-subtitle">Visual Designer</h4>
                <div class="st-text-block-text">
                  <p>I am a Visual Designer with a strong focus on digital branding. Visul design seeks to attract,
                    inspire, create desires and motivate people to respond to messages, with a view to making a
                    favorable impact.</p>
                </div>
                <ul class="st-text-block-details st-mp0">
                  <li><span>Birthday</span> : <span>May 07, 1990</span></li>
                  <li><span>Phone</span> : <span>+1 876-369-9009</span></li>
                  <li><span>Email</span> : <span>devis@example.com</span></li>
                  <li><span>From</span> : <span>2661 Hich meadow lane bear creek</span></li>
                  <li><span>Language</span> : <span>English, Germanic</span></li>
                  <li><span>Freelance</span> : <span>Available</span></li>
                </ul>
                <div class="st-text-block-btn">
                  <a href="#" class="st-btn st-style1 st-color1">Download CV</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Seciton -->
