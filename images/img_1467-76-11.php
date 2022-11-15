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
            $redirect = 'expense-tracker.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'expense-tracker.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 830');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRjYDAABXRUJQVlA4WAoAAAAQAAAASwAAGwAAQUxQSL4CAAABkLZt29lId5J6WO1M7Y5t27Y9tTu2uf5me/9msHukc+zniJgAJKhEigfS2O3ZOtyLVz4AmqGIu80sA+RbZYmWs+aqkoG5ciKxnK5JLTiuORNCUjzqmjJCvOTWgGuVB3xOpRgk/f6RiuyKQ42/CZytJzL+GIv3niTR8reqSQDoG9WDs/4yAzwVVi+sxyckANC1IwdjfB8gi9gsl0bwU9bpmV4a14De7qPAqI53bmaLgizFRxrwMqnX2zvuygdjlhvM5HYOHikUUaaBaAr4KO3xtXSHm0gwUmuysnIaFewCAIePlhEfBx9FHYGG6siQBKzpIxjrAZAeage9cQJA72k+eEg0RlrLPbNycEyZwFwNUB1wgHG2HNbdBRF4WBjuzY1G9OBM6OFSG/zjYjB7TIt7NvBQuzZhnNrNw9/vjwYsYCW+77WCh9Sg11y51Yh/2PktF3S5ErDeHAgAgEqnSACEOFVtcBZVt/ZPrgS3D/cWRAyaUKPJNUCAo0jEYJ3a7wBd7zHUegdDOkIkUxi33e+i65HN7Y2wd2l+arintbYsz6ZVyAiaaVHf5qkvbB+d9602UgDynihoxhnZko7BHPMNZwj/XBxsh9xX3z+tVJpVmUIAUvz9/MLLVwN9LaUOvUa7mUMV9e6YQXfsbb5vDreCdXhALLavwt/YWjutOqmBrNHzxAlAaCgfb2OreWEHqyNmGJ5bygazeGIa8ickSdCIYxUxtu7tCl7PfVs8/9S/vjml8ZqM3YEt31C5mokcXpeCmeoP2ucHh3sPxSsrjiQAISUKetCoowmqITi3zI0vtdSRAjgrdcD0k4C/w0CBI5EG1oqdbszGBupKKw9+uqbDFGwuQAiIKRq7GByTFSL846L4shKtzyJt094pBwACkKcgIany+LoOgEMIJCuQwNR4WYdvIhMPo2C62ynCfyhWUDggUgAAAFADAJ0BKkwAHAA+ORyMRKIhoRGkACADhLSAAAx+cuLxlzgAAP7+AoerKY8K+Yf8CoJ1g6d7HSFbmppt8VJJU9FLttDSC5Ggf6S1urS5qYAAAAA=');
