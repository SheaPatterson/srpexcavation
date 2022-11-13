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
    header('Content-Length: 3880');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
