<?php
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
    session_start();
    include 'groups-31083e.php';
    function checkAccess($groups) {
        if(isset($_SESSION['user_groups'])) {
            return count(array_intersect($groups, $_SESSION['user_groups'])) > 0;
        }
        return FALSE;
    }
    if(isset($_SESSION['user_logged']) && 8 > 0) {
        $now = new DateTime();
        $fmt = "Y-m-d\TH:i:sP"; // ATOM
        $end = DateTime::createFromFormat($fmt, $_SESSION['user_logged']->format($fmt));
        $end->add(new DateInterval("PT8H"));
        $diff = $now->diff($end);
        if($diff->invert) {
            $redirect = 'employee-logbook.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: user-login.php');
            exit;
        }
    }
    $acg = isset($access_control_groups['EBDA2BE2-9060-4AC9-A6C3-2DBE480F0FEE']) ? $access_control_groups['EBDA2BE2-9060-4AC9-A6C3-2DBE480F0FEE'] : NULL;
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'employee-logbook.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

ini_set('default_charset','UTF-8');header('Content-Type: text/html; charset=UTF-8');header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');header('Cache-Control: post-check=0, pre-check=0', false);header('Pragma: no-cache'); ?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Employee Logbook</title>
<meta name="referrer" content="no-referrer-when-downgrade">
<link rel="canonical" href="http://srpexcavation.com/employee-logbook.php">
<meta name="robots" content="noindex,noarchive">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Quicksand-Regular.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@font-face{font-display:block;font-family:"Quicksand";src:url('css/Quicksand-Medium.woff2') format('woff2'),url('css/Quicksand-Medium.woff') format('woff');font-weight:500}@font-face{font-display:block;font-family:"Quicksand";src:url('css/Quicksand-Regular.woff2') format('woff2'),url('css/Quicksand-Regular.woff') format('woff');font-weight:400}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0;--z:1;zoom:var(--z)}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=date],input[type=email],input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial !important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
#b{background-color:#fff}.v4{display:block;vertical-align:top}.ps34{position:relative;margin-top:0}.s43{width:100%;min-width:1920px;min-height:368px;height:368px}.c33{z-index:1;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;box-shadow:0 2px 4px rgba(0,0,0,.4)}.ps35{display:inline-block;width:0;height:0}.ps36{position:relative;margin-top:2px}.s44{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:376px}.v5{display:inline-block;vertical-align:top}.ps37{position:relative;margin-left:46px;margin-top:6px}.s45{min-width:1789px;width:1789px;min-height:360px}.ps38{position:relative;margin-left:0;margin-top:0}.s46{min-width:300px;width:300px;min-height:360px;height:360px}.c35{z-index:2;pointer-events:auto}.a2{display:block}.i5{position:absolute;left:0;width:300px;height:300px;top:30px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.i6{width:100%;height:100%;display:inline-block}.v6{display:inline-block;vertical-align:top;overflow:visible}.ps39{position:relative;margin-left:1258px;margin-top:232px}.s47{min-width:231px;width:231px;min-height:86px;height:86px}.c36{z-index:3;pointer-events:auto}.m2{padding:0px 0px 0px 0px}.ml2{outline:0}.s48{min-width:231px;width:231px;min-height:86px;height:86px;box-shadow:0 1px 1px rgba(0,0,0,.5);-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.mcv2{display:inline-block}.c37{pointer-events:none;border:0;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;background-color:#fe5000}.ps40{position:relative;margin-left:0;margin-top:24px}.s49{min-width:231px;width:231px;min-height:38px}.c38{pointer-events:auto;overflow:hidden;height:38px}.p4{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f11{font-family:Quicksand;font-size:36px;font-size:calc(36px * var(--f));line-height:1.112;font-weight:500;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:2px 2px 1px rgba(0,0,0,.5)}.ps41{position:relative;margin-top:100px}.s50{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:2000px}.s51{min-width:1920px;width:1920px;min-height:2000px;height:2000px}.c39{z-index:4;pointer-events:auto}.wrapper1{font-size:15px;line-height:1.4;height:2000px}.wrapper1 div, .wrapper1 p, .wrapper1 a{font-size:15px;line-height:1.4}.wrapper1 input{font-size:15px;line-height:1.4;margin:3px 2px 3px 2px}.ps42{position:relative;margin-top:168px}.s52{width:100%;min-width:1920px;min-height:228px;height:228px}.c40{z-index:7;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;box-shadow:0 2px 4px rgba(0,0,0,.4)}.ps43{position:relative;margin-top:46px}.s53{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:136px}.ps44{position:relative;margin-left:722px;margin-top:0}.s54{min-width:1140px;width:1140px;min-height:136px}.s55{min-width:452px;width:452px;min-height:136px}.c41{pointer-events:auto;overflow:hidden;height:136px}.f12{font-family:Quicksand;font-size:24px;font-size:calc(24px * var(--f));line-height:1.751;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f13{font-family:Arial, Helvetica, sans-serif;font-size:24px;font-size:calc(24px * var(--f));line-height:1.584;letter-spacing:normal;color:#fff;background-color:initial}.s56{display:inline-block;height:24px;padding-right:0;vertical-align:top;text-indent:0;transform-origin:50% 100%;transform:scale(1.000) translateY(4px)}.ps45{position:relative;margin-left:456px;margin-top:32px}.s57{min-width:232px;width:232px;min-height:104px;height:104px}.c42{pointer-events:auto}.i7{position:absolute;left:0;width:232px;height:87px;top:9px;-webkit-filter: invert(100%);-moz-filter: invert(100%);filter: invert(100%);border:0}.i8{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}body{--d:0;--s:1920}@media (min-width:1200px) and (max-width:1919px) {.s43{min-width:1200px;min-height:230px;height:230px}.ps36{margin-top:-1px}.s44{min-width:1200px;width:1200px;min-height:241px}.ps37{margin-left:29px}.s45{min-width:1073px;width:1073px;min-height:225px}.s46{min-width:188px;width:188px;min-height:225px;height:225px}.i5{width:188px;height:188px;top:18px}.ps39{margin-left:786px;margin-top:145px}.s47{min-width:99px;width:99px;min-height:54px;height:54px}.s48{min-width:99px;width:99px;min-height:54px;height:54px}.ps40{margin-top:15px}.s49{min-width:99px;width:99px;min-height:24px}.c38{height:24px}.f11{font-family:Lato;font-size:15px;font-size:calc(15px * var(--f));line-height:1.334;font-weight:400;color:#000;text-shadow:none}.ps41{margin-top:63px}.s50{min-width:1200px;width:1200px;min-height:1250px}.s51{min-width:1200px;width:1200px;min-height:1250px;height:1250px}.wrapper1{height:1250px}.ps42{margin-top:105px}.s52{min-width:1200px;min-height:143px;height:143px}.ps43{margin-top:28px}.s53{min-width:1200px;width:1200px;min-height:85px}.ps44{margin-left:451px}.s54{min-width:713px;width:713px;min-height:85px}.s55{min-width:283px;width:283px;min-height:85px}.c41{height:85px}.f12{font-size:15px;font-size:calc(15px * var(--f));line-height:1.734}.f13{font-size:15px;font-size:calc(15px * var(--f));line-height:1.601}.s56{height:15px;transform:scale(1.000) translateY(3px)}.ps45{margin-left:285px;margin-top:20px}.s57{min-width:145px;width:145px;min-height:65px;height:65px}.i7{width:145px;height:55px;top:5px}body{--d:1;--s:1200}}@media (min-width:960px) and (max-width:1199px) {.s43{min-width:960px;min-height:184px;height:184px}.ps36{margin-top:-2px}.s44{min-width:960px;width:960px;min-height:196px}.ps37{margin-left:23px}.s45{min-width:895px;width:895px;min-height:180px}.s46{min-width:150px;width:150px;min-height:180px;height:180px}.i5{width:150px;height:150px;top:15px}.ps39{margin-left:629px;margin-top:116px}.s47{min-width:116px;width:116px;min-height:43px;height:43px}.s48{min-width:116px;width:116px;min-height:43px;height:43px}.ps40{margin-top:11px}.s49{min-width:116px;width:116px;min-height:20px}.c38{height:20px}.f11{font-size:18px;font-size:calc(18px * var(--f));text-shadow:1px 1px 1px rgba(0,0,0,.5)}.ps41{margin-top:50px}.s50{min-width:960px;width:960px;min-height:1000px}.s51{min-width:960px;width:960px;min-height:1000px;height:1000px}.wrapper1{height:1000px}.ps42{margin-top:84px}.s52{min-width:960px;min-height:114px;height:114px}.ps43{margin-top:23px}.s53{min-width:960px;width:960px;min-height:68px}.ps44{margin-left:361px}.s54{min-width:570px;width:570px;min-height:68px}.s55{min-width:226px;width:226px;min-height:68px}.c41{height:68px}.f12{font-size:12px;font-size:calc(12px * var(--f))}.f13{font-size:12px;font-size:calc(12px * var(--f));line-height:1.668}.s56{height:12px;transform:scale(1.000) translateY(3px)}.ps45{margin-left:228px;margin-top:16px}.s57{min-width:116px;width:116px;min-height:52px;height:52px}.i7{width:116px;height:44px;top:4px}body{--d:2;--s:960}}@media (min-width:768px) and (max-width:959px) {.s43{min-width:768px;min-height:147px;height:147px}.ps36{margin-top:-3px}.s44{min-width:768px;width:768px;min-height:160px}.ps37{margin-left:18px}.s45{min-width:715px;width:715px;min-height:144px}.s46{min-width:120px;width:120px;min-height:144px;height:144px}.i5{width:120px;height:120px;top:12px}.ps39{margin-left:504px;margin-top:93px}.s47{min-width:91px;width:91px;min-height:34px;height:34px}.s48{min-width:91px;width:91px;min-height:34px;height:34px}.ps40{margin-top:9px}.s49{min-width:91px;width:91px;min-height:16px}.c38{height:16px}.f11{font-size:14px;font-size:calc(14px * var(--f));line-height:1.144;text-shadow:0 0 1px rgba(0,0,0,.5)}.ps41{margin-top:40px}.s50{min-width:768px;width:768px;min-height:800px}.s51{min-width:768px;width:768px;min-height:800px;height:800px}.wrapper1{height:800px}.ps42{margin-top:68px}.s52{min-width:768px;min-height:91px;height:91px}.ps43{margin-top:18px}.s53{min-width:768px;width:768px;min-height:55px}.ps44{margin-left:289px}.s54{min-width:456px;width:456px;min-height:55px}.s55{min-width:181px;width:181px;min-height:54px}.c41{height:54px}.f12{font-size:9px;font-size:calc(9px * var(--f));line-height:1.779}.f13{font-size:9px;font-size:calc(9px * var(--f));line-height:1.557}.s56{height:9px;transform:scale(1.000) translateY(2px)}.ps45{margin-left:182px;margin-top:13px}.s57{min-width:93px;width:93px;min-height:42px;height:42px}.i7{width:93px;height:35px;top:4px}body{--d:3;--s:768}}@media (min-width:480px) and (max-width:767px) {.s43{min-width:480px;min-height:92px;height:92px}.ps36{margin-top:-4px}.s44{min-width:480px;width:480px;min-height:106px}.ps37{margin-left:12px}.s45{min-width:447px;width:447px;min-height:90px}.s46{min-width:75px;width:75px;min-height:90px;height:90px}.i5{width:75px;height:75px;top:7px}.ps39{margin-left:314px;margin-top:58px}.s47{min-width:58px;width:58px;min-height:22px;height:22px}.s48{min-width:58px;width:58px;min-height:22px;height:22px}.ps40{margin-top:5px}.s49{min-width:58px;width:58px;min-height:11px}.c38{height:11px}.f11{font-size:9px;font-size:calc(9px * var(--f));text-shadow:0 0 1px rgba(0,0,0,.5)}.ps41{margin-top:25px}.s50{min-width:480px;width:480px;min-height:500px}.s51{min-width:480px;width:480px;min-height:500px;height:500px}.wrapper1{height:500px}.ps42{margin-top:42px}.s52{min-width:480px;min-height:57px;height:57px}.ps43{margin-top:12px}.s53{min-width:480px;width:480px;min-height:34px}.ps44{margin-left:181px}.s54{min-width:285px;width:285px;min-height:34px}.s55{min-width:113px;width:113px;min-height:34px}.c41{height:34px}.f12{font-size:6px;font-size:calc(6px * var(--f));line-height:1.668}.f13{font-size:6px;font-size:calc(6px * var(--f));line-height:1.668}.s56{height:6px;transform:scale(1.000) translateY(2px)}.ps45{margin-left:114px;margin-top:8px}.s57{min-width:58px;width:58px;min-height:26px;height:26px}.i7{width:58px;height:22px;top:2px}body{--d:4;--s:480}}@media (max-width:479px) {.s43{min-width:320px;min-height:61px;height:61px}.ps36{margin-top:-5px}.s44{min-width:320px;width:320px;min-height:76px}.ps37{margin-left:8px}.s45{min-width:298px;width:298px;min-height:60px}.s46{min-width:50px;width:50px;min-height:60px;height:60px}.i5{width:50px;height:50px;top:5px}.ps39{margin-left:209px;margin-top:39px}.s47{min-width:39px;width:39px;min-height:14px;height:14px}.s48{min-width:39px;width:39px;min-height:14px;height:14px}.ps40{margin-top:3px}.s49{min-width:38px;width:38px;min-height:7px}.c38{height:7px}.f11{font-size:6px;font-size:calc(6px * var(--f));line-height:1.001;text-shadow:0 0 1px rgba(0,0,0,.5)}.ps41{margin-top:17px}.s50{min-width:320px;width:320px;min-height:333px}.s51{min-width:320px;width:320px;min-height:333px;height:333px}.wrapper1{height:333px}.ps42{margin-top:28px}.s52{min-width:320px;min-height:38px;height:38px}.ps43{margin-top:8px}.s53{min-width:320px;width:320px;min-height:23px}.ps44{margin-left:120px}.s54{min-width:191px;width:191px;min-height:23px}.s55{min-width:75px;width:75px;min-height:23px}.c41{height:23px}.f12{font-size:4px;font-size:calc(4px * var(--f))}.f13{font-size:4px;font-size:calc(4px * var(--f));line-height:1.501}.s56{height:4px;transform:scale(1.000) translateY(1px)}.ps45{margin-left:77px;margin-top:5px}.s57{min-width:39px;width:39px;min-height:17px;height:17px}.i7{width:39px;height:15px;top:1px}body{--d:5;--s:320}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-0637be.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-7a3f4b.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/employee-portal.539601.php" media="print">
</head>
<body id="b">
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=Math.trunc(1e3/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size")))/10,t=document.body;r!=t.style.getPropertyValue("--f")&&t.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<script>!function(){var e=function(){var e=document.body,n=window.innerWidth,t=getComputedStyle(e).getPropertyValue("--s");n=320==t?Math.min(479,n):480==t?Math.min(610,n):t,e.style.setProperty("--z",Math.trunc(n/t*1000)/1000)};window.addEventListener?window.addEventListener("resize",e,!0):window.onscroll=e,e()}();</script>

<div class="v4 ps34 s43 c33">
<div class="ps35">
</div>
<div class="ps36 v4 s44">
<div class="v5 ps37 s45 c34">
<div class="v5 ps38 s46 c35">
<a href="./" class="a2"><picture class="i6"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-50-5.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-100-5.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-150-13.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-50-4.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-100-4.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-150-12.php 3x" media="(max-width:479px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-75-5.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-150-15.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-225-5.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-75-4.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-150-14.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-225-4.php 3x" media="(max-width:767px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-120-5.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-240-5.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-360-5.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-120-4.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-240-4.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-360-4.php 3x" media="(max-width:959px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-150-17.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-300-9.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-450-5.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-150-16.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-300-8.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-450-4.php 3x" media="(max-width:1199px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-188-5.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-376-5.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-564-5.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-188-4.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-376-4.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-564-4.php 3x" media="(max-width:1919px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-300-11.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-600-5.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-900-5.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-300-10.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-600-4.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-900-4.php 3x" media="(min-width:1920px)"><img src="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-600-4.php" class="un13 i5"></picture></a>
</div>
<div class="v6 ps39 s47 c36">
<ul class="menu-dropdown v5 ps38 s47 m2" id="m1">
<li class="v5 ps38 s48 mit2">
<a href="user-login.php" class="ml2"><div class="menu-content mcv2"><div class="v5 ps38 s47 c37"><div class="v5 ps40 s49 c38"><p class="p4 f11">User Login</p></div></div></div></a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="ps41 v4 s50">
<div class="v5 ps38 s51 c39">
<div class="wrapper1">
<script src="https://static.airtable.com/js/embed/embed_snippet_v1.js"></script><iframe class="airtable-embed airtable-dynamic-height" src="https://airtable.com/embed/shr5jVQdflPktDOAA?backgroundColor=orange" frameborder="0" onmousewheel="" width="100%" height="777" style="background: transparent; border: 1px solid #ccc;"></iframe>
</div>
</div>
</div>
<div class="v4 ps42 s52 c40">
<div class="ps35">
</div>
<div class="ps43 v4 s53">
<div class="v5 ps44 s54 c34">
<div class="v5 ps38 s55 c41">
<p class="p4"><span class="f12">Copyright </span><span class="f13"><x-svg class="s56"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM199.2 312.6c14.94 15.06 34.8 23.38 55.89 23.38c.0313 0 0 0 0 0c21.06 0 40.92-8.312 55.83-23.38c9.375-9.375 24.53-9.469 33.97-.1562c9.406 9.344 9.469 24.53 .1562 33.97c-24 24.22-55.95 37.56-89.95 37.56c0 0 .0313 0 0 0c-33.97 0-65.95-13.34-89.95-37.56c-49.44-49.88-49.44-131 0-180.9c24-24.22 55.98-37.56 89.95-37.56c.0313 0 0 0 0 0c34 0 65.95 13.34 89.95 37.56c9.312 9.438 9.25 24.62-.1562 33.97c-9.438 9.344-24.59 9.188-33.97-.1562c-14.91-15.06-34.77-23.38-55.83-23.38c0 0 .0313 0 0 0c-21.09 0-40.95 8.312-55.89 23.38C168.3 230.6 168.3 281.4 199.2 312.6z'/></svg></x-svg></span><span class="f12"> 2022</span></p>
<p class="p4 f12">SRP Consulting Group, LLC</p>
<p class="p4 f12">All Rights Reserved.</p>
</div>
<div class="v5 ps45 s57 c42">
<picture class="i8">
<source srcset="images/img_1467-39-5.php 1x, images/img_1467-78-5.php 2x, images/img_1467-117-5.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_1467-39-4.php 1x, images/img_1467-78-4.php 2x, images/img_1467-117-4.php 3x" media="(max-width:479px)">
<source srcset="images/img_1467-58-5.php 1x, images/img_1467-116-9.php 2x, images/img_1467-174-5.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_1467-58-4.php 1x, images/img_1467-116-8.php 2x, images/img_1467-174-4.php 3x" media="(max-width:767px)">
<source srcset="images/img_1467-93-5.php 1x, images/img_1467-186-5.php 2x, images/img_1467-279-5.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_1467-93-4.php 1x, images/img_1467-186-4.php 2x, images/img_1467-279-4.php 3x" media="(max-width:959px)">
<source srcset="images/img_1467-116-11.php 1x, images/img_1467-232-9.php 2x, images/img_1467-348-5.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_1467-116-10.php 1x, images/img_1467-232-8.php 2x, images/img_1467-348-4.php 3x" media="(max-width:1199px)">
<source srcset="images/img_1467-145-5.php 1x, images/img_1467-290-5.php 2x, images/img_1467-435-5.php 3x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_1467-145-4.php 1x, images/img_1467-290-4.php 2x, images/img_1467-435-4.php 3x" media="(max-width:1919px)">
<source srcset="images/img_1467-232-11.php 1x, images/img_1467-464-5.php 2x, images/img_1467-696-5.php 3x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_1467-232-10.php 1x, images/img_1467-464-4.php 2x, images/img_1467-696-4.php 3x" media="(min-width:1920px)">
<img src="images/img_1467-464-4.php" class="un14 i7">
</picture>
</div>
</div>
</div>
</div>
<div class="btf c1">
</div>
<script>dpth="/";!function(){for(var e=["js/jquery.5fa783.js","js/jqueryui.5fa783.js","js/menu.5fa783.js","js/menu-dropdown-animations.5fa783.js","js/menu-dropdown.539601.js","js/employee-logbook.539601.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<6&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<6;o++)t(o)}();
</script>
</body>
</html>