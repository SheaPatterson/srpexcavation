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
    header('Content-Length: 1944');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
