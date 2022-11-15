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
    header('Content-Length: 11818');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
