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
            $redirect = 'client-portal.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('0');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'client-portal.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/png');
    header('Content-Length: 9762');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
