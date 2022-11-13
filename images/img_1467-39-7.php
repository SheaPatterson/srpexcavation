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

    header('Content-Type: image/webp');
    header('Content-Length: 450');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRroBAABXRUJQVlA4WAoAAAAQAAAAJgAADgAAQUxQSBQBAAABgGXbtuloP/vFj7FtO2Xb5lc1oZofpwURMQFYI6MlwyTWbjSGtVShtw5S5WC0C04A3GA1jEGATHe7k2KTBwBq270K3+CmCWESJZA/J50AmEkIy5uTx4ECqqcB3FYh0AGcExtLG/2rbQ2AlalDmWhwN5GfqFjW07k5CGLa5e8l2goQHI7zWJYv7ewlMDf/GAVJiDdjDgxLC6pbD8SylYoI1/h4KxkJEAi7QWYfDKA3af0Vyqf/14NerVVKxaIRi8H4ZxgP2Qfp0RYJcvDRS5CCHO30775+L1+ytSvLLnf8gFRlAaEyfjzfeekIRtZtewEvX60Nclo8ru4O8zqHmUptqPV3u3W/i1VYrLxca9nYRIXHRgJWUDgggAAAALADAJ0BKicADwA+CQKBQIFVAAAQlpAAgQLm5YhfrgAtMN5d9EQAAP7/xbWNympUx2Jitoi0V40XAikWntk7dzQL7Bwuhthyf8CH05HES6t0nDhx4F1JwXkWM/cJOtsRf2NKETdRl6uK0y5PH1FsevgCn+lFVcNRnLMYJn5ZPIAA');
