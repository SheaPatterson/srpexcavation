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
            $redirect = 'inventory.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'inventory.php';
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
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAADwAAAAWCAYAAACcy/8iAAADgElEQVR4Ae1WA892VxDsY/O1bdu2bRef2ag2vhph/21nknmSm5v72thkcow5u2d337sl4gPSgUzACdxJyXE6ncMOh2Mb2ALWgGVgD2Nld4Wkz+VytYvcpMfjIbGAaY4fYx/ddqIuaLPL7XYvgnAd2p4j5qaA8OJtIBUCmVZcdgHEaKZz+pu5NFOMNaBuA44SB2Rf//naJQgt9Vv8Lxv6e6gVkKpHO5lzUW9E3yzGRtEOA8cKTR3rmq6TpBeopdbsdvsT/a24YTxA7YFUp8XaZPT/ZGjHtJ+V2GAVq5jfe23mCXSBzCpwACyhnWd2QOjfheMpOkRbkyCxgHIdzSRpOkPD5n026cyug2gYF+sjQWAFWJOTsZsnYt44yJbwccxjMudlNQOAm3uRuGlqPh8UZelVEw3QnHD4PDAJrLMtp2MlUa/XOyST3jSRbVWfy6Tx9w3e2alztrnXVRL1gFi3THaCjgftseMuIRPtUAhZV1+IJNA/KG9sNtsd1ctRf6R/f3XCMEGzw8FDKDd08YwTLncAUZh0Kb8A9mrmHugrAKwkA3N2+aDAKtqRq+TKuLggkx1hWseLn2UjPhKIvARa2TR7XoP5foDzPsU3yD/DMU5595B8QCZQCFTTVzCKAC6rhXbGUZod6k2MkfCinHy0WG8WpWaBHy1Sw0jCIzO7wmPOkKzB8bkTcRrnL6GkeXcDfPwZ5dOrhOobwjqwpv4lYI7n6LHdVn91hBfgRGBXh3QCYzK1JS22GzQzzXXmBEQeuFKeN2xhvvuGRCQbe/yh8LYN7IAoI8B/GP+XWZn8QYUUEBOBCNcCZxK+6CskD1/wUGxcA5T7fL4cZUYhHoA5T1HG9frr0pTdnIwog/oec6iBCWD5qOwJWi6m4+Ij6xE7+ae5P+70itaC8mv6Aph9QULTaL/V13CQPGM11wMbekzrMxVbV2V+VhKQiQyLwJoyH6aSfjo4liYiGyQh77xFi7BIQmy8IEvGbWqX60DuBcp94IBOk5fnHoYoUQw0of6xQuWeLKZVWvcd9wcPcxZOmrlCRg5NDZt+yEPx0n28JC73G8oveVEdSMmhFlT3CQ5ZC8TSeYXlfDxAupzRUZKN+1QrctiBc4lTCcI+E3+2uTn63kBLU3qEDcXKqIUDC+ryN1YSTiBGEvzHNHPTpc1mYgdurRTJ/fdCkxXS1IPcBfkfQK9jDxhWB7IAAAAASUVORK5CYII=');
