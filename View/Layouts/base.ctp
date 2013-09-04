<!doctype html>
<html lang="en">
<head>
  <title>
    <?php echo $this->fetch('title'); ?>
    - <?php echo Configure::read('Site.title'); ?>
 </title>

  <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array(
      '/common/css/bootstrap.min',
      '/common/css/bootstrap-responsive.min',
      '/common/css/font-awesome.min',
      '/common/css/ace-fonts',
      '/common/css/ace.min',
      '/common/css/ace-responsive.min',
      // '/common/css/ace-skins.min'
    ));

    echo $this->fetch('css');

    // echo $this->Html->script('/common/js/jquery.min');

    echo $this->Html->script(array(
      '/common/js/jquery-1.10.2.min',
      '/common/js/bootstrap.min',
      // '/common/js/ace-elements.min',
      // '/common/js/ace'
    ));

    echo $this->Js->writeBuffer();

    echo $this->fetch('script');

    if (isset($assets)) {
      echo $assets;
    }

  ?>
</head>
<body class="<?php echo $this->fetch('body-class') ?>">

  <?php echo $this->Session->flash(); ?>

  <?php echo $this->fetch('content'); ?>

  <?php echo $this->element('Common.confirm'); ?>
</body>
</html>
