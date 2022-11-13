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
    header('Content-Length: 2818');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRvoKAABXRUJQVlA4IO4KAADwNACdASqWAJYAPslYpk2npSQiKfMcYPAZCWIA1Pgm/ccs92bIJdmcx+eb/Rep3zAOcj+1/qA84L0Hea71J/oAeW/7Pv93yWyXTx5rsvrfyk4+nU3/J9C/qA/A84e9vgEO9+UnoEez2a/gZ3LHjdeDtQG/Sno36EPrn2FOlgfrtxPrwKoAMb3gy8aJCx3gkszW6CgKocV6lWozXBNrbIJ8ZaEAM3XCtNxVjDM14iMPUhI6p7AHzNFhKkeJQfMXLIqaOaMWAtlsnBT2yBXg94Jo9Qt7RaVwrwvOwENIpkz6NGnOfUU3MxxUk2nc7oP+Bb8KNXMxB6K1DdO0QadYo2Ry358k2hf2PdY5uFtxnKjS0Rl//druWAw9qaiGH/3AYuSfk6Pacs1qcWf2O/7KXZxX4BI9wPZYlUJEXslv09I2fPUG0BDRrbFPqJNjCakLQ18G3JWVbO/4YaZtPDwfibbbg0NRkzBRYkGCegzliZVaVmdKTdOZLP8w14B51EpLTdtWbeTOJ9xfhcQjzgYhJECbzJdlUt8EknPi7l9UoBd89Z4Yty5K2qSHdOwYIgtZ2wAA/vggawVbRcJ8/fRVpAuzEH80a/DcKkRqr+ccAjUSjjw9S1agD4x/w4bKCJGTy7ac7fC4fKpp0POgpXR1xvXUMsUKkfTICSO297mZsQAirh9+bHPhDGPVbz2AX8Q6HuAnIp1x+8C2BrEt8bdXpr3DcaIOvzWwJDwBc79DISKu7u6VL5w5nuE1lDag90dsg+miPQnK4J1tKjdVqtp9BzpZhaA6vgGjEl/6YRC5UIOVoRWmm88s6Y98qJWgczQs3u5ciRE1iNbocLxhvOQtg2J/eCjU8O284IMnokGUn5ANbiNWURDGjKOk3+sPiBrBzNpforrDdjLrePPzTrkONcimKR+OVV0ToJAO3I2iu+/UXO3IWNhIgk9j4pxnh8Vv5ne2SKPFirDc7eFtsUPm5CUZzORGvdyz0gMkqP5EpUTPMfxBfnQ5KUaHMPlQl74HiV7z8bJ57HxAGAW2sffr34ernQZ1ty/kck8KLLkerv12A7uEDMVRRTqOZAYdI+3JurdesGkJtLKusFH4VNxbtH5QfU7X0VKQ5yioWBqfkCszqB/tQ13J9f8H/mjzl2cL8lqW37vnbVwI37IW5rY3tBpxnOxaWhUImz8mvIZDISeWoFztcDIdhPU1XBQHs7y0X0JHXMR/tnTfkSIF5rhONr8RBMDvONBAzbHv59fQUabOeQtStiMpkUdnG2pgJaAjXiTtBKu4V79rWZZwsxI+5jupdi93fVcjeXBOWEWCL4Cwis7NimfL3M1BlJ6UqiwcocXkf9+N0Wq8z0H84+66iwfu67ydsCTA2pDVKG7Qyjgi0XiILMEEFZ22K5hLt9A/Y4h2cTIHudoiYrByOstXjQt675PAp+06Yu3vnJmIVLZU20FD6ISNIwtgrMyV5RV/zQlB4RwEPHvHMt2bq31jKGj6FAqeKMeEGTBS23WIsP7YhtZW0xYvxCnrSBvjOx6rvF0vnzO19bRM6cKY+bqxRyc/Omkp9CGyGmAZ6FZBYrhrxTsikvxSf6hJX5O0uUFxZ6oy2BSyqNNfre0z6KLuQ89tn6ZYZp8A3d/4Rf8Qy5pULFAExKwApleWPrTxi98FYUe5W0VvptgjH+Dvc89xGsvqfI840/pHbxwDZt1/HBFtwfrsOgHSQoY5uC4XwSo/92+5EQKb3h+tARsSC3EHyIIRzPRneDE74vbP/P/Ck+quVBNAIZCr18sIXrlNUCCnwdScUdmhFT7Hux/L2SmjhJItmbsirU2vVTbBCsFdfxo5HcsqLntqhB5ClHjPwKBlt/vuCTYnvGgOM6QK8Of/1Afgvrd1IufozF2N5X1ryVN5ZgX3P2TxH+EI3sGLFl0HWJsSte7a/DZpSTxES7eiE49EmxRIIdI60hrf3nBVvLpoB41S+JKJUSlefGYTw/tX+2oiqqsJmT1dEI7gH/7LqKvVJg8OSYAIQ1CQ9c8qlJB/vlwngd9mTqjaChDsXufu7U5cO9XL378pjDUTQsE8OTL8QzErtHzkL0RqyDdaUO+bnBDSjoinpw+a5UhXVNl55eLEW+b1bKtUduUoAq4DKgSsH25VEVRJRkpZ3p6Abtk7F9qEfq5ig8EJaa6ONzLp4uONLWr+GYDOfhsvaEKFUfF2mvqATsdfEChO0AWsaW9LKppmI7U2gH8swHDu9zyXe4ZoHc+PnZbI7hE4EQOtnZaf8SrHGJKLVyNSSZb2wTSiLEof3+92HbMfPLfKS2nSvaqQNLMaMfEKyxEWzDmMva2sKYGwgiibsyZ+442e4dOCdoPzv0RuhO7GwPU1eH19FF+JlsPp69FL0906/AFiSP11oufjWt4ASVXokZmEaZ3X8ktzApYl88BVyyFKk5+SrknV4OxFlo8cCmDAjrbOU0tZ2F/sETZ+j9Y6AY5DUzP/Akk1BhQ2eJRFBgdtRqe5yCjI5f45yAILeCzo2MWpzAcweqMXLP5aBqxbFIqqXfaFkygCRiYXjaTX+iN7ktIhRcCNIij87ANa2v5JU1Fr0I7OOrNIftrs2HZs8bCcjbSCNxsJ8QiOXZTv4kII9GYcasJEm+Aex2Xjk7ZXeKrRBCe7a8Esefrr8LYsb/vl/9ReEbKNLksBT4PUAvqe3ELyBLtKj9mlUbk1JV3McFX8EoxUmCdmo+s5Tn385lpBpHcJtMMrqWyRUER3Uw0QORJvwdf/n/9yo0JyQuoEpkha7oeV/1PYiKyL8eSuiJ3A9o/vhFLB5FTCRpd8bf9vLA70SwaqhFpVEiaB/3vdSCHXrn+i5cE753sd/6YV7Br7zl/g6+dk7/d1oWXiWUyapb6rHTKGWNdgv0uS/8B7M6qTFGAkVpa5peCHEZGrtbMYIRt2u9lVu+UdRRKYfC8cp7cMjBVseEEHITPKjiXbaqYObgg3PM05ftNolO/gYzAO12tnxraxeoqwJPQzvIs3sH4cEPEGUjwOW/8MCGpyihmTiztl84lX+XSye5NMpILAyujZZ6518N7ZETPwegaCC34yKG0Lsi67GpiyNLDCw+QXuTUY6Gua//eKgUFU6soDgN1vB7stl6pJiSNil0yfMwIWNX7FMWkEHCnXiNh301NFv7DSfVyKHlhs/l7pBOGvZFfYWwJzbQF22jvnBW0L0zHCQjlt+pRZXpKRbaSpXw1N1RMj3EMdKINhQSwA7wBOz1o3Jw+4upbiVw8GuVMa3U/BWkH999ermMACMFOJO0XsIUGP5oRZVgnvIktHSuv64BsYklFsRJnXdVaH99CseHXBI/MOOOFe2lebfEvddvJhmh7Rm2PyXvlitdLK+fMA+EtCuMDg7bXKvjelWQr45VWTo/wZTBoYhQiON2de76sPI8+WgvSZoeqz0AcduBba/9bSKGKWa7lx8VSieKV8nGRqdi2XFRdanOzsXgMB2ue96PaEBfjOsY7R/cyZ1KPIb4l6nuhDrA6BF759glxluOqPWKcRc2/fNsulIZxCaAUdL1Ur33J+kuzoqOfUwey91nmA47IdGMBK3To1QX/RPXD1OjxQkOLQP32BkHtosvgzdzed8Yh7Z7SoJ67I8EdzmjsU+6g67yBev6hzKKKKumpGCpCfw1HfvfUEhdlvBNTElftiZEFV+cHh73V2wmv/nayoWu16Gic2s345G/Na1HvybrjdJi2JD5mgAAAAAAAAAA==');
