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
    header('Content-Length: 2143');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
