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
            $redirect = 'enter-new-customer.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'enter-new-customer.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/png');
    header('Content-Length: 392');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAB4AAAALCAYAAABoKz2KAAABT0lEQVR4Ab2ThaodQRBE1+W6u/tzl7h7cGL/kf8np6Hi8jwFhxqf6d5e55pVgD7MIA83Kg/aURSt4wtrQzkMwyPNXTmSVO1cHMdzDt6xy2DFWAv8H9Z3YAqXkgu9IAgewF2lrsFFm3gWHN/3X2EDKDtSmqYDrXEvk7o+lz2GJ3q9KUR7eAUcDl/DeupbO2Zs47KRdrjsETxTJD8qTJJkbN+OVC/pVzVeYf19RZk/O4s/K2sHcsBTHZD5YS6WR8zfYX6LdgBN0ton3W/Ze0C/hO/yKCuwET7FZ1YDqoVtZSznSAGbXxu2gKiGLDi1jeZ2gdaNWPNB6YyhpRp4ZDD3Ef+Mv7eM2QP1qdqq9hWEP0WrQ0wJTKyY2PiJy9/SfmGv1roJ1FTlJlfjfX3zkeZ7+qX28anGkl9T7eriuaIpqmAaUNcrPcHa65OnC1L4b/oCJ3UYNHD3j+UAAAAASUVORK5CYII=');
