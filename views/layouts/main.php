<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
// use yii\bootstrap5\Html;
// use yii\bootstrap5\Nav;
// use yii\bootstrap5\NavBar;
use yii\helpers\Html;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['http-equiv' => 'x-ua-compatible', 'content'=> 'ie=edge']);
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? 'Basic Yii2 Application']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/img/favicon.png')]);
$imageUrl = Yii::$app->request->baseUrl . '/img/logo.png';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="no-js">
<head>
    <?php $this->head() ?>
    <title>Photography - Photo For Life</title>
</head>

<body>
<?php $this->beginBody() ?>
  <!-- Start Header Seciton -->
  <header class="st-site-header st-style1 st-sticky-header">
    
    <div class="st-main-header">
      <div class="container">
        <div class="st-main-header-in">
          <div class="st-main-header-left">
            <a class="st-site-branding display-4" href="<?php  Yii::$app->homeUrl ?>">
            <img src="<?= $imageUrl ?>" alt="Davis">
          </a>
          </div>
          <div class="st-main-header-right">
            <div class="st-nav">
              <ul class="st-nav-list st-onepage-nav">
                <li><a href="/" class="st-smooth-move">Home</a></li>
                <li><a href="/site/about" class="st-smooth-move">About</a></li>
                <li><a href="/site/portfolio" class="st-smooth-move">Portfolio</a></li>
                <li><a href="/site/contact" class="st-smooth-move">Contact</a></li>
              </ul>
              <div class="sp-phone">
                <svg viewBox="0 0 513.64 513.64">
                  <g>
                    <g>
                      <path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z" />
                    </g>
                  </g>
                </svg>
                <div class="sp-phone-no">+49 971 234 1508</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Seciton -->

  <?= $content ?>

  <!-- Start Footer Seciton -->
  <footer>
    <div class="container">
      <div class="st-copyright-wrap text-center">
        <div class="st-copyright-text">© <?= date('Y') ?>. Designed by Laralink. All right reserved.</div>
      </div>
    </div>
  </footer>
  <!-- End Footer Seciton -->

<!-- /*****

<?php $this->registerJsFile('@web/js/script.js', ['depends' => [\yii\web\JqueryAsset::class]]); ?> 
*/ -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
