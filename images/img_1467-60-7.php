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
            $redirect = 'employee-portal.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'employee-portal.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 794');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRhIDAABXRUJQVlA4WAoAAAAQAAAAOwAAFgAAQUxQSBcCAAABkHbbtvFm68kTW7VtG7HVNnby2rZt4yc/qdvvETEBHGHB1GbieOrmsmdrlXpKeQx6tkuuTjkQXj9yvaloJ429k0dG6PPsOOSqZNLGrq1nxUMTh7WS8Xx4aiAYiM+yu/56M4crG/Bff6gDMb2lBRQvVIjyRrprgxyqciFzvjYJyKvrSCdf+c1jEw2sV4Y5TOVqLldeVwFEZ5Hqr6in2h1zkuFLHRyifDkbL8RtSDt89lVAf7kfSA6CGCvrOHhhPhdI5HpoPN03vgM99T6AM2YGrzk4xNFCKF0dZ/eOrqVldXjHACCWDZm6jYNvSYY8Fxwy9hyJVaZpaPl6do6DF73J2WxUw95b/ziUgF2k+3kewKTUINdaWntHZlbckVTlwsWsBkyZhY3tFrRGUdJpAMTN7RpA98XNkvvh8NDI7Nbf3zdrlXop6XO5Vucnh7tbrToBXcH15GxkJ5Mp1oYxLj2UTGdjO7Nq0LuXjc1vs9tnHa/ubC0p10CxPITUogNQ3Xq81GSQA4mV+VJODaDb/D/kPUvD/KBs8/rS9fLDK68fL2TPbmWVg8FyNd8HyLf8NDQkw8F04nznzkabgCFNn0szKVmVzRRj1Ux+vKXXu9Eh3L5wbmfGIiAVjUgVrnODUx+Sq/6zP6K1ZpxjKJCpJSAIyOXsajezX+X6BYfcejY0mAq0ItVwRFWtdmfdrQYZx7D7mmtUzikMAFZQOCDUAAAAEAUAnQEqPAAXAD4JAoFAgSAAABCWlqa2FQDoA9IYDhBW6RLetvCI/mfL1twT8dYAAAD+/8h3vdFz/BuGW+da4Pm5mBInZNfN9WsJTcv9oncbHCsNCpiVcjhOXrl+GU6LA/FTYH5C88S22BYGqdYBIJdltqABc+agm/5VWrXkNGfivtOU8nY3aYo0CWV7cNPxD0a/AHRZpr555MKGXHmHxgKurfyVYtl8ZCpxwtmaiJ7nf4POvZsGM5RYKW73QFuaSlr3Lj+SKznYODxUWPGd+zwwAAA=');
