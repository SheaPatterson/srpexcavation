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
    header('Content-Length: 6120');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
