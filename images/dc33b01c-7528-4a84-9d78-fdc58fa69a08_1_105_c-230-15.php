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
    header('Content-Length: 4372');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
