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
    header('Content-Length: 996');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRtwDAABXRUJQVlA4WAoAAAAQAAAAWQAAIAAAQUxQSHEDAAABoHVt2xnJepLUFBpltm3btm2bVW0U2raN09m2rV/WX6V6p2vNcURMAD5MaZ/S8Y3jHb2vvaHC+9ZNzfHucmX8UbJdUdStjCU4guy5a0c03cZCZ7D0XLQbTp0L8WA/mvrGqMCaiYUOHZCynw8bU5apN0UXmsaKY8OLT0XlSwrY6H0lA/fV0ef1pMCVOjFeNhdWwlbNtS+47lzQ13M6LiJU7XuCPGgCQDmx0d5EgePajunGvn4PEDstApCpvcMIBro2Ft6XkeC2+/Bsbs1EHMi1E7BeOCidn+UF663Fn/qC0x6js/E55goeyGGzsO55Jgb4VOqwlaZ1ObjsOjwXEbvUK4FVZkYmGCC5XvnjZW0TQbfWT4PD6gFjhM/8tBtYajohuyCEHQeBaEh/UX2ZAA5LupZj1X2WULB2aYXuEABVtagGedMD8NqZdgR3+bWbmcrRvVTY6FCLkEUg2FxLgczfA7/nJAYcTl+rdKi+qaZhM4P8MvGw0RPWPWfTzzt44K7ffLdj5OGAI15VP72QDbbVfw9pwV1+p9FNPLnohtcN+a2MB6KHEyCu/y8aRCc5hCRaKNV6hcRllNR3642bxyf7PYwVv7UipnIlHq+r6dAfgFxQw7h3LBToQRSsJG2Zq7onTGubm+vLxvmp0d7W2tKc5Eh/V7kDyIlGpXqs8h1fGxCbleZHyjHQBM+xgMwyErXVY7Jk01Xfjk3NTy+av/vzp4+rynPC/FylArx29JR89KuuzqkZ/UB7R+fMKAWeR+p7XxBHS3yOs7LCX8A5RA3wTouyE8MqvJV7IXO8ChmavQFIa0ZoKzwlw8Jr4Bdzjp+SD6J2E0G17VNOIHsMHf7sWrra9IKYsAxocx6YxbJx3b4h+maXL4yZ3i6+kAFwyxmY35gSs4jeiQdLjxP/svrmljQXK0BePZA/BZGANJ4NxWb+bsBl5cPCbm/D7cLi6ngSHa9Xpo/trHanufPBstyiAcuKDd/SmrrirOMY14ueUAUAal0FalCDvDhStAC6Y3F98k5gig8AeGoZQPbl/PJQghi2SsAyZquTJ1ivyc4Lzg385wtD67MbEDMHgAF4DMk6H6xpsTP+12CL0RvSrv8MbfU1g/0+AIQMEKzBmw8xroQDSGoSOSOyzBV2k5+4aI6CHR4+ajC0e8Mu+yS6M/jABgBWUDggRAAAALADAJ0BKloAIQA+dTqZSiSjIiGhyACQDolpAAANtY0IBJx+YC3IAP77LQN6THlCeAv8uiNGam4AhBtTAYhLRymAAAAA');
