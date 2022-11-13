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
    header('Content-Length: 6848');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
