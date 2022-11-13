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
    header('Content-Length: 2782');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
