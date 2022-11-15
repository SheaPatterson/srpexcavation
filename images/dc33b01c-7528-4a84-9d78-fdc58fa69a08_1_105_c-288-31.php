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
    header('Content-Length: 7192');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
