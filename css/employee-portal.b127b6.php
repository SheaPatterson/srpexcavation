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

    header('Content-Type: text/css');
    header('Content-Length: 1330');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('Ym9keXstLWY6MTstLXN3OjBweDttaW4td2lkdGg6MTkyMHB4fUBtZWRpYSAobWluLXdpZHRoOjEyMDBweCkgYW5kIChtYXgtd2lkdGg6MTkxOXB4KXtib2R5e21pbi13aWR0aDoxMjAwcHh9fUBtZWRpYSAobWluLXdpZHRoOjk2MHB4KSBhbmQgKG1heC13aWR0aDoxMTk5cHgpe2JvZHl7bWluLXdpZHRoOjk2MHB4fX1AbWVkaWEgKG1pbi13aWR0aDo3NjhweCkgYW5kIChtYXgtd2lkdGg6OTU5cHgpe2JvZHl7bWluLXdpZHRoOjc2OHB4fX1AbWVkaWEgKG1pbi13aWR0aDo0ODBweCkgYW5kIChtYXgtd2lkdGg6NzY3cHgpe2JvZHl7bWluLXdpZHRoOjQ4MHB4fX1AbWVkaWEgKG1heC13aWR0aDo0NzlweCl7Ym9keXttaW4td2lkdGg6MzIwcHh9fS5tZW51LWNvbnRlbnR7Y3Vyc29yOnBvaW50ZXI7cG9zaXRpb246cmVsYXRpdmV9bGl7LXdlYmtpdC10YXAtaGlnaGxpZ2h0LWNvbG9yOnJnYmEoMCwwLDAsMCl9CkBmb250LWZhY2V7Zm9udC1kaXNwbGF5OmJsb2NrO2ZvbnQtZmFtaWx5OiJRdWlja3NhbmQiO3NyYzp1cmwoJ1F1aWNrc2FuZC1NZWRpdW0ud29mZjInKSBmb3JtYXQoJ3dvZmYyJyksdXJsKCdRdWlja3NhbmQtTWVkaXVtLndvZmYnKSBmb3JtYXQoJ3dvZmYnKTtmb250LXdlaWdodDo1MDB9QGZvbnQtZmFjZXtmb250LWRpc3BsYXk6YmxvY2s7Zm9udC1mYW1pbHk6IlNwZWNpYWwgRWxpdGUiO3NyYzp1cmwoJ1NwZWNpYWxFbGl0ZS53b2ZmMicpIGZvcm1hdCgnd29mZjInKSx1cmwoJ1NwZWNpYWxFbGl0ZS53b2ZmJykgZm9ybWF0KCd3b2ZmJyk7Zm9udC13ZWlnaHQ6NDAwfUBmb250LWZhY2V7Zm9udC1kaXNwbGF5OmJsb2NrO2ZvbnQtZmFtaWx5OiJRdWlja3NhbmQiO3NyYzp1cmwoJ1F1aWNrc2FuZC1SZWd1bGFyLndvZmYyJykgZm9ybWF0KCd3b2ZmMicpLHVybCgnUXVpY2tzYW5kLVJlZ3VsYXIud29mZicpIGZvcm1hdCgnd29mZicpO2ZvbnQtd2VpZ2h0OjQwMH1AZm9udC1mYWNle2ZvbnQtZGlzcGxheTpibG9jaztmb250LWZhbWlseToiUXVpY2tzYW5kIjtzcmM6dXJsKCdRdWlja3NhbmQtQm9sZC53b2ZmMicpIGZvcm1hdCgnd29mZjInKSx1cmwoJ1F1aWNrc2FuZC1Cb2xkLndvZmYnKSBmb3JtYXQoJ3dvZmYnKTtmb250LXdlaWdodDo3MDB9QGZvbnQtZmFjZXtmb250LWRpc3BsYXk6YmxvY2s7Zm9udC1mYW1pbHk6IkxhdG8iO3NyYzp1cmwoJ0xhdG8tUmVndWxhci53b2ZmMicpIGZvcm1hdCgnd29mZjInKSx1cmwoJ0xhdG8tUmVndWxhci53b2ZmJykgZm9ybWF0KCd3b2ZmJyk7Zm9udC13ZWlnaHQ6NDAwfS5jMXtkaXNwbGF5OmlubGluZS1ibG9jaztwb3NpdGlvbjpyZWxhdGl2ZTttYXJnaW4tbGVmdDowO21hcmdpbi10b3A6NnB4fQ==');
