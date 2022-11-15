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
    header('Content-Length: 4766');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
