<?php 

use  yii\helpers\Html;
use  yii\helpers\Url;
use  backend\assets\AppAsset;
use yii\bootstrap\ActiveForm;

AppAsset::register($this);
$this->registerCssFile('/static/css/bootstrap.min.css',['depends'=>['yii\web\YiiAsset']]); 
$this->registerCssFile('/static/css/font-awesome.min.css?v=4.4.0',['depends'=>['yii\bootstrap\BootstrapAsset']]); 
$this->registerCssFile('/static/css/animate.min.css'); 
$this->registerCssFile('/static/css/style.min.css'); 
$this->registerCssFile('/static/css/login.min.css'); 
?>

<?php $this->beginPage();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>后台登录</title>
    <meta name="keywords" content="后台登陆">
    <meta name="description" content="后台登陆">
	<?php $this->head()?>
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>
	
	
</head>

<body class="signin">
<?php $this->beginBody();?>
    <div class="signinpanel">
        <div class="row">
            
            <div class="col-sm-12 ">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' =>true])->label('用户名') ?>
                <?= $form->field($model, 'password')->passwordInput()->label('密  码') ?>
                <div class="form-group">
                    <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            </div>
        </div>
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2015 All Rights Reserved. H+
            </div>
        </div>
    </div>
	<?php  $this->endBody();?>
</body>

</html>
<?php  $this->endPage();?>
