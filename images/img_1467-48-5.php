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
    header('Content-Length: 466');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRsoBAABXRUJQVlA4WAoAAAAQAAAALwAAEQAAQUxQSHoBAAABgFjbtmlnPX3bts3Ytm3bSR8pmi+/goiYAP5f60v56FxjaXphpHd8ROgQW99EwQSwJv2buz4Qk3onfHxb6kF1yTeggGO8Px2eGyzyfXxZUsva2j5qCKRWncDSvOjVf0mvaVHX3b+zV5MhMCMBnvl6csQJtGYUVHX3r2z1mwFhKFQE74YFlg04F1uo6hpYWh528VVupXuF8qQJpAWpZ82HmqbumbWFID8aqsNTZQDz1VIdVUsTI1Mxfml6GjIi2HEfLghgc+ot7lA8W2n1j8+tzBjR9ozNjMaTZS8Y2yKkhrYB/+F098to38Dx58fU9GirXsnGAy67zSAQf7kdrZUz6T1nfTUF9F1tzEYQHTr/WmJ99GJ3b2jHXpkZw5zuHtaBZqILQO6emN1YCQ15RRbM1VxIhKyzvrl+vNHfXhnOjZ3NzzTDJgFkE6A0ltLH15Pz56sjdm0vCnoBQBFkDd9anQq/NDWXq5K96k7FAAT+uznXn5HoZFmhswFWUDggKgAAABADAJ0BKjAAEgA+qVKjTSYkoyIlaADAFQlpAAApQ5KUAAD+9uSejpgAAA==');
