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
    header('Content-Length: 11772');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
