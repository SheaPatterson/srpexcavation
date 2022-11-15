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
    header('Content-Length: 192');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRrgAAABXRUJQVlA4WAoAAAAQAAAAEwAABwAAQUxQSG0AAAABcB1JstqcmJmZpS82M9tBOP9MBClExATAbEILRJiJIIiiGZ4iZlNEVnOh3GcInjJjWLrPMC3TDTcISRg1Dh0BoG0V7VSEmmG6McdfsnKzltqedTa//3OzqiyUVrxoW9sMiQPKEQQl4gC4SsJyAFZQOCAkAAAAsAIAnQEqFAAIAD6pRJxJJiOioTAIAMAVCWkAAHsgAP73CIAA');
