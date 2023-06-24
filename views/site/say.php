<?php

use yii\helpers\Html;

$this->title = 'Say Hello';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-about">
    <h1><?= Html::encode($message) ?></h1>

    <p>
        This is the Say page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>