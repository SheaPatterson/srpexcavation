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
            $redirect = 'enter-new-customer.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'enter-new-customer.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 1590');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
