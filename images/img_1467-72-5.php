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
    header('Content-Length: 768');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRvgCAABXRUJQVlA4WAoAAAAQAAAARwAAGgAAQUxQSKQCAAABkLRt2/FG95t8yTSubdthHdtO2ga127Htne2Zrecffm98HLOOiAlASfIlfJS+VBHdP3vuZFVaWnx5esc1KCUg8hNSQhLzlq0BGc9yS4Zn2ZhmkHkihKJvtqyf7Eyi++wiQZaVl6XFwhmopTSsxKfqJA3Hw5s1yFZwqRdFyRs2HL9sYumO2sCO2zgAySS4IEcxygyJ9M4iAYBwmgH1zkklqhYyyC4oUYTVnpQ/YS0H2+UDfSbQc9TWGaN1XBxE4Wv8CUNspRXUgQhTSem6JASIwk/Rn9Si4FX+hMa3PYyMEeFQnDV4uQYAHFoA9UdhLgot86bluj01sgxCuQxAvykFe70PxHZlCIUus20rLWd0DLJd5Bp16N7SgX7IG7zgZ1BozbZGfi4sQq6B8chaHeinbiUPmlDori1DRzpdg5yZl+vDYDMAk3rXh9wZgay2tX9qTitnAHDdiTbjVidyH9q+D7bAUiVdijwSgR3o3u5X6JyhlfTGzsHh4eHB3vZazKVmAOGKoi2xKGvon54d5rG0OhZXp12YowxfXd1fKP+wvLKynHr+89+5oGNBPdJRKeDzCLJOao8/hEMxv81gcu+B6TTerGLJLmgf67y9AEhzA+BITg3PO+rOWOflHcIUwJnY1YIt7hoiFPkna60A1LHVRkcyyAe1xflE0vNQBCrnhgiqC3Mrqf3EB8+f1HT4nMcQQP184nAnrmKRpcMG0Dm2jfGoz7YpF3mlXAALc6je4o42s8Q2NN3XJM679hebagf91gGe7Pny0Y6tRwg6p4sD+sSxDsduy7hd/uN75Hod+GdEEApQKWQRgCMFt1qIzOLxLhHyOXywWkU8n9PmRMzTAoh5EHaj+Mn4QaoJECoIIX0VKFHG0r+0EWxA6fOT5v4y/EcCVlA4IC4AAABQAwCdASpIABsAPtForlGoJaQio0gBABoJaQAAGPzmDnEYAAD+86yz3/PXgAAA');
