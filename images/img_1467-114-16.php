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

    header('Content-Type: image/png');
    header('Content-Length: 1903');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
