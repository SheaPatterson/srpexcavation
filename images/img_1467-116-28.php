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

    header('Content-Type: image/png');
    header('Content-Length: 2007');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
