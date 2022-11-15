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
    header('Content-Length: 412');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRpQBAABXRUJQVlA4WAoAAAAQAAAAJQAADQAAQUxQSP8AAAABgGPbttrmiKVlZmZmtiWZw8yZAFRpM//KnBFExARwfHe24uXURtkcVbJL/wkcSZ9YHyRkwHQfxd02MHr92mySZrNX4XAxdfnSkTyLINiX7hgI/RYHS5mrj56KNEpBdugtNPFM8xwqZi6eRk7AUbblWl+klK0vvRwanb4s/Gx1Po+TwPVtnu2CpDlcEiiti0XOAFzgWKygWh39RH2Tx05v2B9ZpjmdOMD8vu83u3O/VYPel5kgXWzd3j7//d6vs7OqGi7GAMc8Alrj9uVlYvr080jDD1nP+urO7C2q9qvVSTkAERwdK/O5XtuFoB4AkX0lhZ2N9jiBICBxWq/BfwQAVlA4IG4AAACwAgCdASomAA4APgkCgUCBVQAAEJaRwA+A4AIj/AAA/v/GLzObPKa9H0/AMQBoIKbh0bAcPEZRT5REq8sTbKywCiCjFZaYBXuGFngj7tOSc38Xn+VzFb0SoPQYKODIbjEt1cetWRfhm47FvcgAAA==');
