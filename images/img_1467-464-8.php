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

    header('Content-Type: image/png');
    header('Content-Length: 14139');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
