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
            $redirect = 'equipment-logbook.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'equipment-logbook.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 4656');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRigSAABXRUJQVlA4IBwSAAAwXACdASrwAPAAPuVkrFCpJSSiqFLMGSAciU3bq+goekn31cV/m+X5JpwQcT+aJy351P+H6kPMA/uvQb8w37SetH/xPWp/g/UA/qvUq+hP50n/q9qD/D5Ln5Q/s3cJ3++Nv5nIuuL/mn4Hzv/z3+f8E/kdqF+KfFd2V8NHsF+0P3PzYfofMf7E+wBwU/pvsBfzn/IejroQ+uvYZ6WvoknweXTwP/xHl078aU/UYmwJFZL+EC2roerz+beoHz6qx5zcgRlw7nEAeYRr2apZmIsG6L46jnxIK6wqnJThdAaxaqExfmkLeeNYdyXs5gZPHcQ2+ikol3HVMcQiHYFhFLncoj0RLV1h7R5fMx9P8pWUb5XwPUjbk8VlZLHKoxdsN86t5n6CvFdndv3fb+0A7TtQkx/Ras4D7qeOJsTAiOL9LYA4a8hqqFKEXtFlwQCclIgJKPEjYRGu97J2XDt1Esmscr+Qt8vmflOlytZS8QTlUfJ3moQ5MThCWvutvhht344iGWIT5cL+bdIU92VJzRRDToG01alouhBPdWwWMH48nRVBfKdX8eTYOJ1/51Q2GY4f1ok9nWB+xEyKejrOT+n3r0mO6QWnek+ut3zY9NTmSpnmAxtsf83hWNeFrqWmvYsBi2PH4Cl2MKRSg7pvxlSpklUyVg+XQVRHcEYX5ZKcfo0o4L5puPA7i/0dMQyHLW+VyKNIZavWi9kqI1V0uMSJctpjAW/idTZy+lvu6n28dBCFp3u7Q6sKvCjW+gN4ol1q7B6hGmZBeXRAVudnCf9E/tpCML0Ily0Jv5GtMn+HrJ5szLx6iwldF3Qo+o01UdljR9jyzhSjnbdah3YLgVQg5gcPKC1BfJtU7lw+uCBJidGHFtGy4ogQJ3Q3pVYACyXeSnVgjkBsJIXSwP/Lmn/q/SJwV6L38lqums8+dFZlZ4jwDOZT2ggjwTX0YofMSfAkesWKuXTdjiaSSHgo2sT4bjMs7IG/YgJqUAD+9j14AF1ckb87hqN2T9M+dCyQKHuABzB0lAzlJyJU+zG3uuGWj/6ry2CgXbJxg1PCWt8WTtBe89Lv3XST47zpVPwAQJlUy0wU+H60a3Cdh/8LgPAp5kw5a5UlL3sDWGoUtlHQP8rjgaypmq+aFbsyD5kXokH3zoB0mTtyssoE2yOyDM/rLXPtYuXYXENkZ7ujN7cY1gfKSmeAgUSxYm+fYkXD+Ixumq1lewqMW4cYvR06iBQTDGClPSlngNXu7/EpfhUqCmoIQHDV69UpJf6KQhxQmjWAgpAxmA7BQqx3XQZS9AXEDMY6yBH4lLJLhA6wk5Lrz4+mi2dMdNjv+jCarpT3RTYDNHnlw8kmUXJQ82qzfVnkgLvvl2cQyZq6XpLRooIz/tEC44jyj9IpTG0uIt1T28yampNV+Zz72bZPKliJWCzQt7LyfF65MENihwCmG+hCSJKvGxpDzGXFRSXgOjKJQ1axpde+fpQF+w6wDqS7BvzSirghLWjUr5r6yshl5BjlihFXRBoQDmkvM0XOD6+/7q1nu8sFZd+fmH3TjOnPPjTPIMKJ010afjZ8e/tQMvnfsoYBKXlitApR1E5oObb/IKsVXIKAdy1ty0wZXz9GOuaGFIwBGbXF9HSB8n9M1QqxStkJ6ZwWqTzKH/6drQqRutpB6q2JRrk4COGsOgS8agePwYAGVLRm2Jfob0oUkcBWFdByGTXfD8NWg8carGctkekPhOcQ9pano7RchU8KgWr32jvBoFRdFSiyPr4fEVCl72BFIXsPSl2wc0tb7Sw1GUoN5DN0+BDr9TtTKmsuZFOrAj6JQQUL34NQwMCJhWENA4i1tYyXSDBvTmPFmg8EKJdOErO15/bUGthktsRvYOetKIsuHDRIwOSzWZS5USHT0/ybPEdS9vYLTLNLA84lY8X9s/i6d2A2/sezWxA4TXtE1uRC8932iTcLa0wPwNV6bM+lT8iwyS9fiF+WgRVj5aASfPyFJNS8L+4gMHTLb3vDnXZut+UW/6imTzyzJq85mO3h7Z1G/z84q01dmMs4jZdt+RvukNER2bgz36ahc7odPAZL8cxBu8BVdS6P4fVNIS6aRGtG7w1Gx68RNSdH9e4TY1xTVxnkouF6TmxllaWoi+HG1Lz5et6023+lqdF0WNdBv/nyiXUpJmfMlnHiiLSiZCQqVwaODsPJUFyWbVrHSg+2H9Kt1nHnoXhwr3EXjrI2OrsQ4tjwy9vTrNEjOWT8TfwiM473fcKdjnff89O/SNFt9lXlyCEulRlOTMzs0R1+uXjGHW/vTiZs0xJme4OSUOQWt6RGwxkTaRSxJZvycGNJkSl/zoyqBZ7COVoHzVgl4QYH9bUkNdCqy2byvay+qjtVM2ovdgLtrEEJO5481kzIDpN5t0VFSz45GpZEg5HGm8CKRALI0CQCw9qnsrGOmHhFAqqpan2FOSZ2y+NhoT4aN4gKd0N4nXW9fpGnX5p1NRyzCNZZuhRwnPW13ALPrGIYedGXfKDUWqQom7Y7/aTEYRr22WkLcCQulxa8B3P5qpJZBEcGAvsmdaEGs+SenmP8jvRYbtOPECZNVkMVomP6y1vdj/Qpzq6134bRkVffzwh6qSafkcxvSdr4qhqnnMRCVTnhRFrzlgo2xUzLFLAlpumwsVYc7cRp/DuWc2wdlUy+/ISB/vcMVZ4nbviO/70m9OiXTzKPo8fNcnSfAwXhYPsbs0UNIS/OZ+8rZfUmAsIsLW9NqCJf40SpBQ5heUAY0iaHKHmyeK/Zq/tkR7zX+oVKgh3Rwh1ZsrkK+dvn6UkC2FleJGhj90lYGMfO4n9+dhTd1vosKdLPeFl4xoOsQbVFAYyE1UOF4AMjfiOuYjkEK7899Lq0cMAXrOb+cHV2U6rOBv4fvyPYmfZ8BIjpJySvZwdLFcPvwRuZdcoL0ssltw9Y95hLAF7ItHjgJfkYfc7bB7H/R+RAws9tHOagNESufLw/QEPHcKQe5Fwhs9kLYSdLqemk2NqGa1zivsfQWDUgJcqO6FLSDHkn68N3bL5/pcco7cLOVrNrl0xQBHU5iNZB8Mx0lyl/ICbhygDrKxRRf7HZhDiE7fh1rMAqFf04D40mWjidKtmrsOeRd6IcpUy567tlCdSeXM5Pgkyee6IEmQmEWSnYMZPGVCE9eOO1GEt/HY0oQe4vgI4XeqW1foGdP0OExwaeR3aPBzEergE09mpsiaavZHZ13XUn2g0PNs9TuCY23RQAFwILHvHcWpC6UjBf0OAscmQGWmuaQ7HVhhqmBM/w9JIa13jRmn7ciHIoedtR/Gd5wH3b6YckfXohzz43jiqtbU3jsZM6IktHHOpGj+1/DDCAvt0vAj/88ljps7BbXKegNKCNOkUJx2ZacKoycqPNS/eooSUskcuqKoqcGhsHieTcJ0wDZylCeiEX7bCyc2sEQMEflzFfHdANP2dSQMoRrhoTrreWuoaRvziO+9/ByuXDbpbDnArmLmXsFaVByuV7XfoVj6BfgnCyZy9iydf7KUdrFLCM2PsmLVpsFGY9yuSEjbKO4GQFUms7Cj9wAI1OhVBhi3gAmNJKdSkCqv4wshOAuqm9v7mKlN7jPCc3WN8zDk6OcUWlECaSp+FWo4+7wIfn1RTxSjnc0xpak9zYdetvBWg6CcN15d5GlUPovEJAhtB9Jdm1yYaiQqHAGOmeFZwEdF4Cx1zeYbfIy3J6xkntvzFdzS0Hffo7zvo21aIfBeGuyl6E+XYUUTqbYVWJQ3rOEVTpK+ADpZLj3X3/Q8VJH5VqHB3WeT4aoWeOLxgxIOA2u/1Kz5/wbM+7o+ZC92qoUpnf32QvTnX219ORZDcEZbnVMzf5rLcTR8OHPSf42hNciXJA47Ofoj3u0dQOgOymeIdPP/VSUeYoDmx+Brp2eWjE7kIBKW9Qy85VoogO2cMipz8DhckrcWGJwrYnnOuxZaxaCLSDg1XYaAqrBk3ncgo6rVVEpbK49qOYTCb5rJmjrZ7YpoZzAPHN8eP6RWOPDwPCjbHxlUutDI844qcLBny623vdlbM2XJYcNd6crrXKQxj8mNo/82D+GuN4PKXbcihzjkyO/4+12VMxNpNgj0by0f8IhOcLU5OMOhzON+i8BBoffaEak6O+OlV5ot/kI2LeNbgx63TMj5HIkywsE1oRgn5AC7bnda7xMqTMzU3TugFOHwFipzo7gL1GIB/67A0xkjqPbRcg6sA0Qf08YnMF47vi0pa5sIaIC6j4aVr3uiCTQGvCX8LkqZQ3Eo0sv0Bmpw9aGhi0ho6qTdtbv5mnXA2tlRRBjUvGircDjhO/KbL/Z+obStWw5w4z6uSxIsyAZjr66zLD5zG2c2XzrxI/SLInKBE2hMdrUivXo2vBPiYDee+J8OT++AtpRAwxF/aLKCMu+fy9jrTH3nlzDlDy3bv/hNvXRIUOu67RJbDUKX+5W7bWKe8AkRyb678R98GD0/C0+zjf93NgOxTxPbVqWeJqpm990LSEx4IRtL00JVFQRBrVZqUuKupsgHZCNZI9zNsHXYxXUPsTchHVjL+D/OkD8hc961pgx6W7jDpG5wGjkjPvMYAnRrJZHzie16B01vXeVT9rdnDcK2WjKLpuDmSa6PL4Vp2DjxnyX9S9aXSlAlYd7GifIqHy+/CKuSWYR2ch2gpjXnmSXHRx8nRhi5sSxlTFLek2ltb/fC4IJ0a2iXtv/W8EaKGODRPvr8zSdmfZ/LqNA26jf13OYDxYWk851jN3NI8TC21NBXr5Z+vKqzGfp+DytK1wVdZCtkMGDDlZAJBpSJq6dcJ3F/5yDcTBBTXI5xMBLFXW+dPl1/R2PkZFZz6x9W1/HeA6+DOPQ2pSPcgStg/h2M9qxlAHG5fGVDlmPx9RcpjxZVhIMZ8SLyTqtB8EgJPxF98OR73CDxXce5n64ptLsaN24QGnkPJdwKbpifqLEqv/lc6gqKOPjf48sUu75K5jMMg1+3aPz6VlHC50hnO5nAT+nQ34/HyhW8N1FwEDkgC/COY9G2a6O+/ypCrcVaqDP05kOs66h+8/FSwPyLoPsDiZriHjeigNusQsbX+6go1zYrccY/eSgm8VpJ2ZSqiTggBYh+FNwYhE0LglMxxcbnX5GIacn/+0FOPlyz/x7URLgXpPlrcWJV3o4Y0sD8rwQ47eHKTRB2hvn6rxSRj6+PVJnr3Y1HQYOilur/QeP+kOkZFIO8VGq8/ObTgPPiyJ+5oI5bGlswBscamH0OWAPL/ZlWTrWlrRUI9/U8KybvFZhcP3+Ho30Ue87pFLiH+zI5wyB61XXrGW9M/8oaKPJe7mTNxtdDbt39FoSozPE8KrnluM1XdCuk1mVGshe9yCXJVSeFiFoTGHoONJuumex140xscgLfbtqTddPuS67Gc1H2tmd5BxUwg+RIXDxladpg1PZa6tgoxGxllBLxrn48s3SRsrJMxqDw7PzdENMzG+Ro/Y4Z2oGKfoTjehO8Mz/73BjKgTaYdQ9qC77lmipM6HNWQyKtCU5pwH1W1wjiSBRGTu0eFDCozAVVc84qNYJQAHkopg5PwWAlCNvPoWZYfzPiRHWXhaZQMPq26OHG+wY4KkSVnJP1OqtHvMSbN0IcYouCiWIi7GNlauUTfAxLv8qtqw3mHtYc2fzMHtiXjjP98LTmV0odQHHmHKwxeBkbaSano9uuZSaSJ6JF02Z0Nw0D0P9kWqImmYqhQ2jW9ykZfw80TmcznAvKKnql21/TQqU0zZzq6J1mTcr580X9sPjol4JwzbDMYN5VB6RkGku3g4ZcgL3fZiU45ZdMZccQz4y40TY9ZrWt1twLSuB5L2NSkzQ7oQftlIMw8QxCf6XUlBFvpquButZyqxqNksJbALxfsEe9T34zy/PVnkqH75Nb69nzEB72m72ec8/tEjNo9Uy7r4sMYLYeKvQ83v3eCWOYkfBGBjdY6wZIZRM5fdhgZYQFC7/STL/4GbiukTIHIUAClVdblKW/aFS7F5pshsPJbvZHKCz3rtZv1J2tywZOXmB/ku4h6p78NaWQMAM5lWRYqRYngxnIixSkLcDkkzeUPhdQDrCZa7rmfIzkGZnFsSqdWD3C6CNGdfOJhcVRR6dwyRNsvsw3fftnxRLn3IeBakURlVp6uWVatNECsj8IahANeICYyfwqUADQzFTDXhb9ATO8wZQAAA');
