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
    header('Content-Length: 5579');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
