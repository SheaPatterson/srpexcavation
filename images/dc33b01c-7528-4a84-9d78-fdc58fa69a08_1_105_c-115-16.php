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

    header('Content-Type: image/jpeg');
    header('Content-Length: 6674');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
