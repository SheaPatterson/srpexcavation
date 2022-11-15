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
            $redirect = 'equipment-logbook.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'equipment-logbook.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/png');
    header('Content-Length: 303');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAABgAAAAJCAYAAAAo/ezGAAAA9klEQVR4Aa2Sg24AQRRFV8Patm3bjfv/X9Mzm1sbNzmjfc5mf1SAHhiFdvizGqARIoyIDmi01i6xF/A9yWmWvR+s936cfcAYs5JQolp8G2Prgm+phQDrVVUdcR4CQ6I59tZn534YVifT3w3eSOBVAh/K+UG5c26CwMt6r6AJ2x3dDTxXKRv3ODICzBD4Bqctrn2Qq+KkwLdzzduhKe4X2O7CSvJL84dZmMcmFbPAPgvxofId/Q3dyRGnW7hMxtCqrtI5gIdR7LbLsrzj2xUcqMhj2Y2qg1oGWjXvkRDCcKoIh0kltc/GkD8fnXguo7c3M+tSZf+uexKJD+ZoeQhzAAAAAElFTkSuQmCC');
