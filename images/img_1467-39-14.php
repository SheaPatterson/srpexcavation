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
            $redirect = 'business-cards.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'business-cards.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/png');
    header('Content-Length: 573');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAACcAAAAPCAYAAABnXNZuAAACBElEQVR4Ac2UhW4eQQyEQ4dh5uRnpjCnzMzMraiP0JfvN5W32jKDpdEt+OwxbddflABMRVFU4psBPeCfy0wQBBt9fX2HfNcgVw7DsMl+72+SUCaGQOSR2hYR1iPAlwhyB3+qPDOg25GCQAVnu4Zj7FsQ2+QuBh9LLzon+I79TlKTira3t/emOZYkIhPHcc6RhVgDnSsi/ZmMBdLnu/y7SM3KIA7vWSkGvQyob6Y+KtdxK+Ui6x3vbsSIzf+WRsbYPqSuqww+CUmapnOQqLJcB5JBOff0xrwMN+xu6FdJjStilY/vWfZLX9AbBQuWvaKa32VVkiTJkiYUHBW5XyUV46CNsZPgtByCb0lD5eab8ya2G6QWnIhF3iCFoA8klsUxMA0WoyjKU4kaHFYE2XifBRnC4AX1jB5Kmjyrn7ypzMiYN6E19O++m1wTZVHlw/gWeK3e49tB7xLnb/jeUN9KT2+e6bX19omcBSm/c4BgECP2UmVAqQAxTdO8ymrPxBGRFilHTk4w/NSV1e4SMCAnag3r2dvgObqv+F4DDy1Da+pnIzIPOjZAC35p+lFctZQ7SZRakcbQPXBF5ZZhM5BYxmpgzIxPACdax7IrEjbldRuWghKgsnJ+Chzq+bHyRuCLMmjGDmVIkWNIBnY5X7eoRi2QQfv+WVFfuB6wLPxXMgji/43UW8UnLcWzucquAAAAAElFTkSuQmCC');
