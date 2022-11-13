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
    header('Content-Length: 744');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRuACAABXRUJQVlA4WAoAAAAQAAAAOQAAFQAAQUxQSPEBAAABkHRt2xlJT5yUeU7bNstqlZkK27Z3Y9uzm99baM4+IiYA91doaKLxEFsXV1dUaaP/3gk+Nd1vBGDYu2dMUBznUNUt3hezp7RaENo2JglUpzYb7soU6wdAhMUJl2kqH7egtjqNO+XHSod7DsC4EQAA10fAzlchlAju0hxUtsrtAIT1blSmS5oz3lghLPtwh5ZoWVbHSQBI9porpiQYWdUJoGOrD7dvjBTTWkRApW3BuAzAs8wA2OZAp1dtuHUuVE6JCRuqO/1uDeb0PAFAWMPAfgC3Pykt6FojalO2vuiM3onKxnVRseLW20qRpZU+1K+deSgABOidJx2om+bNzqaukakxBiBj6en8GGoyFbboByMAa7wxmHtCgjVNlfdDSzlJUSRd11SlXIh7WHBLwcJ6KJAQyx4SdHYJgEkaUi0AGjfFiZYfW6tr8r+/q/7BMTtrbUG9pvPnq6MDrS6z9cgxpcVJAHz+nZSSUFXtEULZwHr8PPpqpjMnXRFUiy+rTwCgoooRlcbCYkpVYoZJAwBdMK/Q3QCILJFc0083txYmVsREz/R1cUP0tAgAwHSgkg6utcq7iWjy2wvdg9YcBIFyAQABC8810KjeMtJIon7asxmmRy4zQT1gAxiYeNxL1moPrEZ5QABA4l5370cGGfxnAQBWUDggyAAAAPADAJ0BKjoAFgA+CQKBQIEgAAAQlpHAGaBlsYAEzXPWDXbS07a+TAAA/v/HjP9NXaBam4WEAbywYcCO5iK/Qqw0+B9T7HKVGg96yPAMsgUYSuJuJ76NfyyLU8tzFfSy0M7lF4kW6SVNjFTarZy6rbejc6w03QF1TTabM9JfTCWjhR/rM48EkxgFpUtdsrKpsuFKpSsYMCiwls2TZXpVI9t0RPMTMGfJq65Pe//robmhNN6cU50bIFRhj9yfvypykANd0rC5wAAA');
