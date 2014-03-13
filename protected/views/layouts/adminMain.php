<?php /* @var $this Controller */ ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/classic/css/base.css"/>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<header> <?php echo CHtml::encode(Yii::app()->name); ?>
</header>
<div>
    <?php $this->widget('zii.widgets.CMenu',array(
        'items'=>array(
            array('label'=>'Login', 'url'=>array('admin/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('admin/logout'), 'visible'=>!Yii::app()->user->isGuest)
        ),
    )); ?>
</div>
<section id="content">
    <?php echo $content; ?>
</section>

<footer>Подвал</footer>
</body>
</html>