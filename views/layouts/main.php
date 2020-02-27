<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset1;
use yii\bootstrap\ActiveForm;

AppAsset1::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="description" content="sepehr karimi personal site or resume">
    <meta name="keywords" content="sepehr karimi,personal site,سپهر کریمی karimi seddigh,سپهر کریمی صدیق">
    <meta name="author" content="John Doe">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php $this->beginBody() ?>
    <?= \app\widgets\Alert::widget() ?>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="<?= Url::home()?>"><span>S</span>epehr</a>
          <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <?php if (!Yii::$app->user->isGuest) : ?>
                    <li class="nav-item"><a href="" class="nav-link"><span>Admin section</span></a></li>
                    <li class="nav-item" onclick="document.getElementById('logout-form').submit();">
                        <a href="#Logout-Boss" class="nav-link"><span>Logout</span></a>
                        <?php
                          $form = ActiveForm::begin(['action' => ['/site/logout'],'id' => 'logout-form','options' => ['method' => 'POST','style'=>"display: none;"]]);
                          ActiveForm::end();
                        ?>
                    </li>
                <?php endif; ?>
              <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
              <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
              <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>              
              <li class="nav-item"><a href="#hobbies-section" class="nav-link"><span>Hobbies</span></a></li>
              <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
            </ul>
          </div>
        </div>
    </nav>
    <?= $content ?>
    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
                <p>I Am Iranian, I'm Graduated in Software Engineering and now I'm a Backend Developer.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a target="_blank" href="https://www.linkedin.com/in/sepehr-karimi-20b07a174"><span class="icon-linkedin-square"></span></a></li>
                <li class="ftco-animate"><a target="_blank" href="https://t.me/Sepehr_karimi"><span class="icon-telegram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><span class="icon-long-arrow-right mr-2"></span>Web Design</li>
                <li><span class="icon-long-arrow-right mr-2"></span>Web Development</li>
                <li><span class="icon-long-arrow-right mr-2"></span>Business Strategy</li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">Tehran | Tehran Pars</span></li>
                    <li><span class="icon icon-telegram"></span><span class="text">@sepehr_karimi</span></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">sepehrkarimi12ir@gmail.com</span></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
