<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
// use yii\bootstrap5\Html;
use yii\helpers\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';

?>

  <!-- Start Contact Seciton -->
  <section id="contact" class="st-dark-bg">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h4 class="st-section-heading-title"><?= Html::encode($this->title) ?></h4>
        <h2 class="st-section-heading-subtitle"><?= Html::encode($this->title) ?></h2>
      </div>
      <div class="st-height-b25 st-height-lg-b25"></div>
    </div>

    <!-- Contact Container -->

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          
          <div id="st-alert"></div>
        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success">
                Thank you for contacting us. We will respond to you as soon as possible.
            </div>

            <p>
                Note that if you turn on the Yii debugger, you should be able
                to view the mail message on the mail panel of the debugger.
                <?php if (Yii::$app->mailer->useFileTransport): ?>
                    Because the application is in development mode, the email is not sent but saved as
                    a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                    Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                    application component to be false to enable email sending.
                <?php endif; ?>
            </p>

          <?php else: ?>

                     <h3 class="st-contact-title">Just say Hello</h3>
         
                     <?php $form = ActiveForm::begin(['id' => 'contact-form','options' => ['class' => 'st-contact-form'], ]); ?>
                    <div class="st-form-field">
                        <?= $form->field($model, 'firstname')->label(false)->textInput(['id' => 'name',
                        'placeholder' => 'Your First Name', 'required' => true]) ?>
                    </div>
                    <div class="st-form-field">
                        <?= $form->field($model, 'lastname')->label(false)->textInput(['id' => 'name',
                        'placeholder' => 'Your Last Name', 'required' => true]) ?>
                    </div>
                    <div class="st-form-field">
                        <?= $form->field($model, 'email')->label(false)->textInput(['id' => 'email',
                        'placeholder' => 'Your Email', 'required' => true]) ?>
                    </div>
                    <div class="st-form-field">
                        <?= $form->field($model, 'subject')->label(false)->textInput(['id' => 'subject',
                        'placeholder' => 'Your Subject', 'required' => true]) ?>
                    </div>
                    <div class="st-form-field">
                        <?= $form->field($model, 'body')->label(false)->textarea(['rows' => 10,'cols'=> '30', 'id' => 'msg', 'placeholder' => 'Your Message']) ?>
                    </div>
                    <div class="st-form-field">
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                        'template' => '<div class="row"><div class="col-lg-5">{image}</div><div class="col-lg-7">{input}</div></div>',
                    ]) ?>
                    </div>
                  
                        <?= Html::submitButton('Send Message', ['id' => 'submit', 'class' => 'st-btn st-style1 st-color1', 'name' => 'contact-button']) ?>
                    
                    
                <?php ActiveForm::end(); ?>


        <?php endif; ?>
        
        </div>
        <div class="st-height-b0 st-height-lg-b30"></div>

        <div class="col-lg-6">
          <div class="st-height-b0 st-height-lg-b40"></div>
          <h3 class="st-contact-title">Contact Info</h3>
          <div class="st-contact-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla tincidunt id faucibus sed
            suscipit feugiat.
          </div>
          <div class="st-contact-info-wrap">
            <div class="st-single-contact-info">
              <i class="fas fa-envelope"></i>
              <div class="st-single-info-details">
                <h4>Email</h4>
                <a href="#">devis@example.com</a>
                <a href="#">info@support.com</a>
              </div>
            </div>
            <div class="st-single-contact-info">
              <i class="fas fa-phone-alt"></i>
              <div class="st-single-info-details">
                <h4>Phone</h4>
                <span>+1 876-369-9009</span>
                <span>+1 213-519-1786</span>
              </div>
            </div>
            <div class="st-single-contact-info">
              <i class="fas fa-map-marker-alt"></i>
              <div class="st-single-info-details">
                <h4>Address</h4>
                <span>2661 High Meadow Lane Bear Creek, <br>Olancha, KY 93544</span>
              </div>
            </div>
            <div class="st-social-info">
              <div class="st-social-text">Visite my social profile and get connected</div>
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
        </div>
      </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
  </section>
  <!-- End Contact Seciton -->
