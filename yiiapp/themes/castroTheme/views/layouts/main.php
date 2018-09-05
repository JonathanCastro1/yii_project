<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--  <meta name="description" content="">
    <meta name="author" content=""> -->

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/lib/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo Yii::app()->theme->baseUrl;?>/lib/css/fontawesome-all.css" rel="stylesheet">
     
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    
  </head>
  <body>




<?php echo $content;?>  




  <script src="<?php echo Yii::app()->theme->baseUrl;?>/lib/js/jquery.js"></script>
  <script src="<?php echo Yii::app()->theme->baseUrl;?>/lib/js/bootstrap.min.js"></script>


  </body>
</html>
