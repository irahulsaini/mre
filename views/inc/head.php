<?php defined('BASEPATH') or exit('No direct access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="utf-8"/>
          <meta name="viewport" content="width=device-width, initial-scale=1"/>
          <?=!empty($title)?'<title>'.$title.'</title>':'';?>
          <?=!empty($description)?'<meta name="description" content="'.$description.'"/>':'';?>
          <?=!empty($canonical)?'<link rel="canonical" href="'.$canonical.'"/>':'';?>
          <link rel="icon" href="<?=template_url('dist/images/icons/32x32.png');?>" sizes="32x32" />
          <link rel="icon" href="<?=template_url('dist/images/icons/192x192.png');?>" sizes="192x192" />

          <link rel="stylesheet" href="<?=template_url('dist/css/bootstrap.css');?>"/>
          <link rel="stylesheet" href="<?=template_url('dist/css/all.min.css');?>"/>
          <link rel="stylesheet" href="<?=template_url('dist/css/owl.carousel.min.css');?>"/>
          <link rel="stylesheet" href="<?=template_url('dist/css/stylers.css');?>"/>
     </head>
     <body>