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
            $redirect = 'travel-logbook.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'travel-logbook.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/png');
    header('Content-Length: 953');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAADoAAAAWCAYAAACR1Y9lAAADgElEQVR4Ae1WA6+tRxTt8bVt27Zt26r7ED2zfHXD/tuulayTfJ1851z77mRlvGd75rNbQqFACpAGuIE7RZlut3vA5XJtAOvAMrAAbGOt+LYrF+rxeFqk1JjP56NC4caeMKwd3lYFPfBeu9frnYOi1Rj7guxNhKJzN1mZSCjRBCFnoRDDcVq5l8VwxFot+g4gGLlAO8rXa6MIeKXHJn8cmO+kF6BMDcYJ3It+HeamsDaEcdRJLmBI41z9dSgXAlTRS06n8wvlTpxlPZzegjJtNmcTMP+jZRwrfnbkQBQsYX/XlYch0A4lloBdYB7jbLOwYH4LBSU/gHfGIPws2hUM4+XZVC2bfNZYpK5SwSgI1E3FgEVgWcXDaW7EvhEoWUijmGsK2wUNwwEveVFhY2sODYm26KoUDGfY4NIZYAxY4VjFxI5iQkJC+hW6a4aSTZrzGB7es1Rbt+7ZIK+rUNAHhToUmqMsKBgPn+ByhmKrnoIVf7hTeMz3qbqa4bmpfgn6R8rryyeWe4YXLuxHuyqBU0943EVjIHSLGOrg1UAemMsNsD8Ve7ZoSGAJ4+ir0JHv2qxCc5DfLwp8FkY0DhT4Fmji0KykljDdx33PEe45Z7jGrWodqRxPA/KACtYCvgpmmjj5DjK80K/nG4eqWHUS59vlKD0J/GDzhYv2V1i07TDiJJW0FDSv/53F/fNoGcYdAI0+qf/uEqH+qrACLGt+HpjmPTKy15qLg7yYG4AtMW9jTiqk5nXIafHEBM+ZHwdV1DJV0iibMN2xfCAywON3PVMbzFUoyIr+L9b/4S9K+V4qw8dK8GieBU5OsuB3ePRf8TIwrARKQkNDM/WTiSRj7PkSbZysvSLPOM1PhH48H7GHFh+l4sF+O/BqAQsSjSvjtTFnyR8yfcfoQPuWuY7wzvV7FuMnSgEXleZby/PAqoz4/7vISEUgPNDzolAYkODL/KnoyxfGwsXWUGCVwqvarjMCbD4PDgrGlu8uvclzUOobtDvALoshhSYPS9WnYerRf6onb1sR0iQvhwbKsUBFwK1wZunPZEiB2QEvg2W7KRyE+hXtawqoi0iZtLr6oYJL0WGSQ22UiopPn3Y3EIwyIE+FXgIncCZy62Hf4YecYzLF3GN4ZVzKr+qti7EpTBES+saRP7ljKTzzlOFsCGuGgxO4dZSvMt4Fz5XKMw90G+k/5A9jD8l3PGUAAAAASUVORK5CYII=');
