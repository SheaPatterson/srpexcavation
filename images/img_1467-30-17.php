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
    header('Content-Length: 320');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRjgBAABXRUJQVlA4WAoAAAAQAAAAHQAACgAAQUxQSLQAAAABcBzZtmmt5/e+bdu27bHy+PmPnEFETAC/tEUzVn4tBku5oLMrfmUzsGTrpUJAglCaz4XIfGL1VcwcY06IVYSPxOhqHUJpuihGXEWtnObj0HIbA5RkN+/GNatYeS0A5u6mYgINdVyV/dFL29HIJdKZQqnWtCCfTqX4ID3wk7iVtUBkubw/r9vqOpgrKGAOoKcmj8u+YE55bAjmaDHhiThbaY8ugBDIlu0un1cRRYEfil6DfwJWUDggXgAAADACAJ0BKh4ACwA+CQIDAAAAEJaQ28wAM+gAAP7/x5XedpJrWW6IGI2g9FkhJ2+weIoq7uYxXkv9LRS/mfmTH/iFDAu9wQSIWuOkdOyZ2zb58SmMk14u9l/u/7bUAAA=');
