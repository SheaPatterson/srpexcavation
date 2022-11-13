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
    header('Content-Length: 4354');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
