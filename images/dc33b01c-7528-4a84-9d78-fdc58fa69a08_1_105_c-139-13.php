<?php
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
    session_start();
    include '../groups-31083e.php';
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
            $redirect = 'inventory.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'inventory.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 4344');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
