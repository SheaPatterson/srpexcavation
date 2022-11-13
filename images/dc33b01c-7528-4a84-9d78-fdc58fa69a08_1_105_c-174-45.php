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
    header('Content-Length: 3180');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
