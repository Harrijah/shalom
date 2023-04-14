<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('font-awesome/font-awesome4/css/font-awesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('font-awesome/font-awesome4/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('font-awesome/font-awesome5/css/all.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('font-awesome/font-awesome5/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style02.css'); ?>">
    <title><?= $title ?></title>
    </head>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YWYKT1TZ4T"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date()); 

    gtag('config', 'G-YWYKT1TZ4T');
    </script>

<body>


<div class="menumobile" id="menumobile02">
    <i class="fas fa-bars"></i>
</div>
    <div class="mobile-menulist" id="menumobile03">
        <ul class="">
            <li class="menuitem"><a href="<?php echo base_url(''); ?>">Accueil</a></li>
            <li class="internmenu">
                <a class="dropbtn">Nos formules</a>
                <ul class="dropdown-content">
                    <li><a href="<?php echo base_url('internat'); ?>">Internat</a></li>
                    <li><a href="<?php echo base_url('externat'); ?>">Externat</a></li>
                </ul>
            </li>
            <li class="menuitem"><a href="<?php echo base_url('aboutus'); ?>">A propos de nous</a></li>
            <li class="menuitem"><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
        </ul>
    </div> 
<nav class="menu">
    <div class="logo"><a href="<?php echo base_url(''); ?>"><img src="<?php echo base_url('image/shalom.png'); ?>" alt="logo" class="logo"></a></div>
    <div class="menulist">
        <ul class="menu-rubriques">
            <li class="menuitem"><a href="<?php echo base_url(''); ?>" class="<?= ($maclasse == '')? 'active' : null; ?>">Accueil</a></li>
            <li class="internmenu">
                <a class="dropbtn <?= ($maclasse == 'internat' || $maclasse == 'externat')? 'active' : null; ?>">Nos formules</a>
                <ul class="dropdown-content">
                    <li><a href="<?php echo base_url('internat'); ?>">Internat</a></li>
                    <li><a href="<?php echo base_url('externat'); ?>">Externat</a></li>
                </ul>
            </li>
            <li class="menuitem"><a href="<?php echo base_url('aboutus'); ?>" class="<?= ($maclasse == 'aboutus')? 'active' : null; ?>">A propos de nous</a></li>
            <li class="menuitem"><a href="<?php echo base_url('contact'); ?>" class="<?= ($maclasse == 'contact')? 'active' : null; ?>">Contact</a></li>
        </ul>
    </div> 
</nav>
