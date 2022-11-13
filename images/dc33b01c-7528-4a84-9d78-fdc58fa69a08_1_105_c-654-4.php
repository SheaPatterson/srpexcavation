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

    header('Content-Type: image/jpeg');
    header('Content-Length: 26513');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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j+iPwNfXvtRvns1rirU/dy8dyJvzdPzI9yLkkuCS7EPfI+FPuR7O65fsh9ro1zWadVc3D08e4lVC3pW1NU6ccJd79LPYFbJmvk58ukLmHTY8P6Y3nrKoAOKwHO630tT7b9p0Q53W+lqfaftL2j538mb7R5Y/rLyABeZQAAAAAAAAAAAAAAAAAAAAAAACR8n/ACrnsj7yTEF068dnXU2swaxJegmdK4oVoqVOrGSfp3mdqqW7Ti27pbGhy0nFFN4iYme57gt2o+cu8bUfOXeVdp6Svbx1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcC3aj5y7xtR85d42npJxR1hcUKbUfOXeNqPnLvG09JOKOsLjnVb6Wp9p+0l+oanRt6co05qVVrCSecelkN4l/SUtWLWmNt+TK1+SlppWs7zG+6gALjOAAAAAAAAAAAAAAAAAAAAAAAACuWigArtPrG0+soAneequ0+tjafWygBvPVXafWxtPrZQA3nqrtPrY2n1soAbz1V2n1sbT62UAN56q7T62Np9bKAG89Vdp9bG0+tlADeequ0+tjafWygBvPVXafWxtPrZQA3nqrtPrY2n1soAbz1V2n1sbT62UAN56q7T62Np9bKAG89Vdp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');
