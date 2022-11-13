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
    header('Content-Length: 8600');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
