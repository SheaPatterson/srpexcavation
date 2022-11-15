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

    header('Content-Type: image/webp');
    header('Content-Length: 3570');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
