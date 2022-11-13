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
    header('Content-Length: 14912');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
