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
    header('Content-Length: 1834');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRiIHAABXRUJQVlA4IBYHAADQJQCdASoyADIAPgkCgUCBcAAAEJZgDPJYH+Z6fz4f8HeUq3y7X/s5uCJwulz6J+Uf+S7QHiOf3v+LfsV2mvMB+nX+q/sHvAfyD+3dYB/Pv6N1gH6AewB/Cv5T6Sf7XfBn+wn/Q/u3wFfqj/xbpn+IHmn3dux/qN+vv+D0RP1c+n/iV+z/+m9jPwB9Kv4q+4V/Ef5t+NP84/0f+q9QDYL/jX85/HL+4/4z/jdIHyq/hX8Gf5R/S/x25xfu7/Ae4B/E/5h/XP6J+w/9y+jz9e/0/9i/sX6ue035N/uX5E/QJ/Gf5R/aP7P/eP85/gv/F9R3sQ9Cf9WxnVZLZouCS5cJakmBql5lg3SXOpCdeZiWJFVdIXcOmLFb4umI/L4VuloTX842hUDL3/rGB5MlSgcRgSP5fePgAAD+//92H/CTmfTXOEDaYzr6wBtS6Gjyr9oz1Px2sQfBQOkcY0u1axQAA2EAf7SQj1739Vt2dzsq58ws1IlLx9DX5Ii38v+NuaCBWhUBDM/q3GD2dHLFMcQKBeGcslCUDK9m97wf71CmCkgtoK5ez5sZeUH7ht7Iw/v17s58wiWdnz0/6E72IaY2I74v5dZ88HEdKT+z25zIIJG7w9zkHPUqmcQRs7+hpgp/5IXji/Jjnf2bPOCk6+UWGto03AxUmQ9v0RhWAPsncl/key3pYXrXj0W7uhnfDIafbxD+wFxCmryCzLHSBi4DLBsuX1eL8ADcDIPQnk3MdILKlm8A/Y55qhg16oocIpCjJRSkZvBApbCPVoNGxpTVnHrseWk+0bj6/ghyf7CLbayjcUyltoRWt+mTrPlVXwL0LT3DNylzGCIaz7vSxh2W16XlO46HxPLsr+h1/4H0Ebs2ko5GGFYTcFTmdFNK9ZqaoLPkw3isHeACD20huDgicPAEJHYKV1iSN5tBt+Jgs5/1sdk9a2d6NBVBb3PNWyRP1ZzDS/z1rj1851CKJd6U/WcvBuvFd+fzC+/0TfjXOKSDE8t/zF1/WuAmuCBULPM+8T0mGsmJ+uA6Ad0HwnxshedWeYlkXDKWBlU0R6nkjLQYUZJFe6gnkbEP07S2siMLDU0CdDdVzXKHRUktoqzddQFs64NaJ1+Z/YB7Jxr/eamlaatagXPMn/tlSnSD8tskN+rktZ/s44nsgnehdr55L//pepgdeKU2/aMJrLHH+gP1R/mh0fiEdYIb5UyJ/iFqgVGF36sMZA1siKBleiNP9QJOGXHxx+Rw5lhd+bZqjZgd3liQCScuH2DMnp9/Vb6yZzmT6iWtp6hK/dn/hEXvFdEFaJTIvD//0xkvCLR/HXJcd8fLSsEQlm/tsT8htq182qtc7rIHPOZoImceB6w/0r+oOF89BJaYI1NqifuPrpVDJxQkKHKymVMzB6hJQCPyPyuA8kZOWBtT7SrMxA5bB4VebE/XU2wbuZaKcx2DjGQ5xyc86y/i30qFL5w4x6tirMXP/jC5PfM+Ttnoc+GxvIwJfqggBpue9EwRzSE13FgwD93J0UDVj6mIkHoj+bFIkKnts/Eh//8sXeaAo+xRPFKit92E1vMkrNfZPb2TC5daXrnm8DOL4QmmsQ7UXZVvhrXM9EyXLZf1SnvqaF29l2IZJAD//F1lNG2cHCwViz/2oN5qkoDNhapAkhtsymZOG3Kw+fChtzS5OqZYfBXqGY1atKiUKeV1M0Hg1cURucQH+qJqQv0gZAKF/63MoQ+DgCeIu4+Jhkcg4CMWSuNXTQwtRI/189gMuQURvLoayM8i/8fp5sWwIar9DNpgWH5PqfuZeKh0/adTZEbVWzPI7srBPoNe3Aep/aWe3TnN1D424vMmkg5TdVc0iPbwzl/0NLAVnOR6o3h0f1RidrT+5dhh4k/nY6B5uDtnCT9hdvkKZQgKp3xWRYRoqDdrrLwsQrMDQtlb54zdnGVz8v5zUMv9vBqUiZ/BdC8SY2TOZs5RASW6MFA+N7RRLtquj8rocMnici0zkPzjFKX5hRvXyQl6mc0YDYmtEvJpHH1jZYdoSeH/++vX/7mrURo1GAPcKfRVdS3ANgmKb91nlO9WpxUaBtUDrG23ZeacGQAq87gHzhBjfaziVO9mURNEy33LODQDtHM9PtuVsnJCE3DAwCOLwg+Rjfh71QuzfizsYzvspUjUqcxya5T7O55jfHmzG06DAKyW3vS/mXqRTHxWf6zh0Ar8+6uSSmjoSLPlem6hu/Gg69V0pdyIk5EjF/x7lMiA3v//fIQ0tt6qAIK0BgJpYSMlR7Ey3WTCXHdCi7+7E+cy8XQg7xRflptqIMePEaar0h6pKwH5AiqXelw63o2HHmmeKtq7wyi+o2edy20v6RTrpqKpyiyc8uFhgZ0G8V1tYbfzc6QEJQeQj8sj2jNJoq+h6DLQfWFDMc4Ty7T4AAAAAA==');
