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

    header('Content-Type: image/png');
    header('Content-Length: 2054');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
