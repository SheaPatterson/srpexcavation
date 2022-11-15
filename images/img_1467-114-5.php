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
    header('Content-Length: 1456');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRqgFAABXRUJQVlA4WAoAAAAQAAAAcQAAKQAAQUxQSNoEAAABoLRt2/LEub8ISYAITgZ3d3d3d3d37eDuFpgQ3B2K1N29ux6zqrvbtn+AfF9CE3p0GRETgP/8PJfMzrG+HOF9QXdu2DxfH6wtKOw6qb8X7Fu3HpU7siGVvVek9FTTJEvpOqDqfKjkBJUbLRaQ0WtRqXEq1gu4kHk4URmpkMQfVKpCdtdjprJxqRefPXUwaQTwFsUGkKPGs05QqrQUyVSOi1BTWPgkU/ewCPJkHOZB0Wk6acNqZG5r7QaQPmHX6QO5LnRBwR2KU8XfZNFJGo/tQd7ezIdcJ2eh0KyE2Y7U4V5tSGevzrJAce9Z3HYQyDC1SCiSoGyjzql00gekagdNoCo8HqxSBzBpSom5NA4F1mnaLdZNEacQIGWuF4PyVA7Rcl0DbBpQ0dxvheLqte9ls0M2m7ig2FUNypHHDICrB9qpFgWX6zQorE7bbibhvD5pDKo+UyDsCDKnl4wglXfNIiu9dIKiajTtZcNYtO4GysSMCfhnDBLnl1wh3fIc0g235rlQUPXq/SJwB46jIaP6EKD/PEnEU04gjZBIK3o5HQqqUnRYzUDZaQEdsvK7AZOniVv0BokeyOvablkcrOlDQZMPO9WQf9LMheysGSY89gHAZaWKAMWFSIDR9EISFNRva0wfqS9OGUCuvqpIHgL4PWv2oEoc6yLoZowPxTSbWbKD49GuA+TfHoeMs0IClPU2LJbPPaGYas2bIeCNXUXiLtcy5ob0IGPId3tJUNDog1Ig57qcgbs0/mbIAuRMKYGPBxggpcmJoappYO0emlJc29oSREVjal4Iu9VRHdwlI+K1bZDTSoMBeAyPvQByYTVCnAGo8A1svSLSShq6x0Rru8cXVzc3V+eHm6Lh1mJvCj5HKeD2bXpAjmwKfuLwsSQyoisTghTJtJN7ozQa1/RsLPmvvfmt08vLs13xxMPq3IQwH0dzoaYak4DsaRID+IuSARr3gZ1PVLgDh4S/XkEWPWKCNSEZfb9jYb/XATh6b3xKvLq2ub37xdcr/7T7udkacOi4+8Q28GfWI9Mezi5LFqdGxidEx4G3dDhX62wS3hILJpfqulxp4Pk5sgBYvpiTlxHj42nD510a1FXAyxUItZTCjo+6A1He6Ecf9hbFuxupE5AatgjoFURMtoOc0X9+9Ik4YHGvgyGFdKgSAEP7xgMT2R5DKFjWIroeWwAwbt4dfVaFRNctZ7KBTgk9H9uCOus0EHEdvmPxoMw1fM8GYL7mRIn5shmg31JwgeA3hZfczr+LK5/+SciyypVc1Ag0LhgAzTpv5vhE1BRtTFDRnBDzQF17q5r5RIHHnHtMLkDQSWC1CkDwvC5Y+mS2+wDEuf5HYV116a9NTceleLst7h6stLjRoS4J0o4dPTnoiXxAg4wu5yWQMe40iRiJiuyxyB4chuZal46WtIE0ALmlgMswmakzgEf9RGFB2Evqru6QqsHG7bl3xvcnk/QhTwMtULdcntdDcF52uk2Zew/f9/c/Xh873dUDoHWjBoAPgCUgo0rXhcxCSwMa/o16AxexAJo/TclvUVO1LN6pMiKgnqUJILkcylir47KECWj2Hc80Z5reiObSWaDIpykhnbbLOnUAMKxVAUCztqVBuZt1ndXycV+y892FsVNL6aq4P43fPX+YY4H/mQFWUDggqAAAANAFAJ0BKnIAKgA+dTqXSKSjoiQleAmYkA6JaQZwADzJQWzIIwFnXZDLfrttnt61BVjYoHSHm4AA/vtBV78D94tjtxGC8Az6TBgrDzELrp9G2+G8KN3YCiHj6OfSXk8lFm42Y/kM7wNxoLsCW4CUflq8+WUxQTFcZ+OXYB2Uo+uZToe1uzZkub91mTXb0Wzuz5QbvTfAa2spWF/QVLnfXIQAHfi8eiKAAA==');
