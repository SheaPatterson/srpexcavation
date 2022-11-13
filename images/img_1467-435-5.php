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
    header('Content-Length: 14412');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');