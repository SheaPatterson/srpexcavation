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
            $redirect = 'business-cards.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'business-cards.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 4882');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
