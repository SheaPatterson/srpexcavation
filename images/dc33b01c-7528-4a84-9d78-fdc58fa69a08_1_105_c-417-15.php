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
    header('Content-Length: 7352');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
