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
    header('Content-Length: 9540');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');