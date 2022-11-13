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
