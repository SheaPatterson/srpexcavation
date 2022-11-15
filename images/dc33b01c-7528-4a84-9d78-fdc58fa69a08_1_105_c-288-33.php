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
    header('Content-Length: 5632');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
