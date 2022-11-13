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

    header('Content-Type: image/jpeg');
    header('Content-Length: 13355');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
