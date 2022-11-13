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
    header('Content-Length: 3496');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
