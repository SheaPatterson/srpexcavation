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
    header('Content-Length: 4018');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
