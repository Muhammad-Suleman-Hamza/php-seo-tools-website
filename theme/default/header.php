<?php
defined('APP_NAME') or die(header('HTTP/1.0 403 Forbidden'));
/*
 * @author Balaji
 * @name: A to Z SEO Tools - PHP Script
 * @theme: Default Style
 * @copyright 2018 ProThemes.Biz
 *
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Language" content="<?php echo (ACTIVE_LANG); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" type="image/png" href="<?php echo $themeOptions['general']['favicon']; ?>" />

        <!-- Meta Data-->
        <title><?php echo $metaTitle; ?></title>
                
        <meta property="site_name" content="<?php echo $site_name; ?>"/>
        <meta name="description" content="<?php echo $des; ?>" />
        <meta name="keywords" content="<?php echo $keyword; ?>" />
        <meta name="author" content="Balaji" />
        
        <!-- Open Graph -->
        <meta property="og:title" content="<?php echo $metaTitle; ?>" />
        <meta property="og:site_name" content="<?php echo $site_name; ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="<?php echo $des; ?>" />
        <meta property="og:image" content="<?php echo (substr($server_path,-1) == '/' ? substr($server_path,0,-1) : $server_path).$logo_path?>"/>
        <meta property="og:url" content="<?php echo $currentLink; ?>" />

        <?php genCanonicalData($baseURL, $currentLink, $loadedLanguages, false, isSelected($themeOptions['general']['langSwitch'])); ?>

        <!-- Main style -->
        <link href="<?php themeLink('css/theme.css'); ?>" rel="stylesheet" />
        
        <!-- Font-Awesome -->
        <link href="<?php themeLink('css/font-awesome.min.css'); ?>" rel="stylesheet" />
                
        <!-- Custom Theme style -->
        <link href="<?php themeLink('css/custom.css'); ?>" rel="stylesheet" type="text/css" />
        
        <?php if($isRTL) echo '<link href="'.themeLink('css/rtl.css',true).'" rel="stylesheet" type="text/css" />'; ?>
        
        <!-- jQuery 1.10.2 -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        
        <?php if($themeOptions['custom']['css'] != '') echo '<style>'.htmlPrint($themeOptions['custom']['css'],true).'</style>'; ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

<body>   
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="height: 0px;">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="#">
        <img src="https://images.unsplash.com/photo-1600115137672-45aa9e120d3a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="logo" style="width:40px;">
      </a>
      
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Link 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link 3</a>
        </li>
      </ul>
    </nav>

<?php  if($controller == "main"){ ?>
<div class="masthead">
    <div class="container">
        <div class="row">

        <div class="col-md-6 seobannerBig">
        
            <h1 class="seobannerh1"><?php echo $lang['317']; ?></h1>
                <p class="seobannerp"><?php echo $lang['319']; ?></p>

                <button class="btn btn-default" id="getStarted"><?php echo $lang['318']; ?></button>
        </div>
        
        <div class="col-md-6">
            <img class="visible-lg visible-md" alt="<?php echo $lang['317']; ?>" src="<?php themeLink('img/seobanner.png'); ?>" />
        </div>

        </div>            
    </div>
</div>
<?php } else { ?>
<div class="submasthead">
<div class="container">

        <div class="col-md-6 seobannerSmall">
        
            <h1 class="sub_seobannerh1"><?php echo $pageTitle; ?></h1>

        </div>
        
        <div class="col-md-6">
            <img class="visible-lg visible-md" alt="<?php echo $lang['317']; ?>" src="<?php themeLink('img/seobanner_mini.png'); ?>" />
        </div>
        

</div>
</div>
<?php } if(isSelected($other['other']['maintenance'])){ ?>
    <div class="alert alert-error text-center" style="margin: 35px 140px -10px 140px;">
    <strong>Alert!</strong> &nbsp; Your website is currently set to be closed.
    </div>
<?php } ?>