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

    header('Content-Type: image/jpeg');
    header('Content-Length: 3520');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
