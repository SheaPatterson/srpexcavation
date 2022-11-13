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
            $redirect = 'travel-logbook.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'travel-logbook.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 2094');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
