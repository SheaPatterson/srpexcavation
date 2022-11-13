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
    header('Content-Length: 2280');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
