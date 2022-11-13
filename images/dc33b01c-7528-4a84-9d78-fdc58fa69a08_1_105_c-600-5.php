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
            $redirect = 'employee-logbook.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'employee-logbook.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 12602');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
