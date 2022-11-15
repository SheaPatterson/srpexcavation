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

    header('Content-Type: image/jpeg');
    header('Content-Length: 3371');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
