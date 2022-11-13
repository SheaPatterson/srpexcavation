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
            $redirect = 'inventory.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'inventory.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 17234');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
