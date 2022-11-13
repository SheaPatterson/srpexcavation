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

    header('Content-Type: image/jpeg');
    header('Content-Length: 10674');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');