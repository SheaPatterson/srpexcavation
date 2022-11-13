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
    header('Content-Length: 4484');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRnwRAABXRUJQVlA4IHARAAAQYACdASoFAQUBPw2AuFUsKCUjI/Sb8YAhiU3cLTCay8Jk9ld6P5XKu94/S+OdqTzcef/O9/nvUp5QvQi803nH+l/eqd6x/y+Sr+ee1HoyQU+0XUy7k88f9p3w8Ah2naI+zH3zzNPrPNvTB/wf/a9gn9K+sN/seWFuw1g3kLyX6Hkv0Ai4w5FzxDjz3NQkzVamBBwUX9Yn6yHQ+Ss5IQSrYOcCeP5CZ1noM3Ax24xWpX+MYdDDlxEbDkUd1oCzyYTFZ6fJWgkQqKNDzGP9gpOYX5D4AXzvtHHyzNC5PqGLkbvH0qJEWJu+fNlopPc1PHssBYKvyHy0ojeockyHxoJDQnyZxqm1SZJq1eLRfXlY+dDrd7os1mftSBI7fN72mij2S0aKajUs77PayEG5kpHRim2yGYDWRY2cmSi5w5FlwWFuLCLcsmBnlMbiYniwNoeX3286zihGq9tKxUx5DUpJRPbFagQd8g6JS3U/fyZvSWsFOcNrEFZPNljAKY21ew6fNljKIVTtmopF3j1DRniX5+SFE9GLBC3E9EA4toetB+Hb0M1JARgZFBREZbae9OYeGSvAVoemdbIPfSxC1DHkvu3mh3neLDA4c/l2l5jc6ml4HHgXxlAvSdV9wDMhysQ1dXOaUz9FpZd33xkWj4lh3xBfbQb9Q+NJsILn5xLZTBluHx8ng1pp4vNTBgTDDJd9gtmmPbG61ujrrsDkxz8Bew2l7IvJfc/FFcVUPEP8axX/vmts3GdRT0SW635Xh8h4S5Yq1odUkgwkivcKZjhydej3UiK4eqUZdS2WXxizTieF0LwblgxPYoEP9tuPcHfArw4AplIFyhDZwfpvplKbkTi/DvR5ZhnXkrvLMXnpBtD/J1YA8KGpKQCnu6HvCuGcVSLKX4vIANrYlkTppO+l6kOkxrTzcYF4C9h7O9PDj1IaolVxq7rkgYM8ffCrHqiRRc+GZ7EnvQpX4v0R9U0K3mNWyqSv2ID/y6Bhin6uqfCr1WuqiI0MT5ItcpxDWDeqJiVGnUBIVwAA/vpV4Az0LjL4lU3nMj01OLToqNBG+FsV3gS/ZutI5WkKnGRtCf4qwC4xc8ZB8JnOveMpoy3OCs2dIJ9n9nFQXPfRzkRrXjOz7Q8aOUZwpJkTkZT3h3zqsAV94j/qCwBhPUXa3WT42zkINnvIjDIxCbDwcyTeY/c/qR5eA1xmCGcelRJ5Ptob81oMoV2vw/X1ZWjTiT4k4QlOfVVsDyl/WxcIs1rZdU2j3om6az8pVkvlMSBBU45PSYLXznglM+iUnLaj6+4fT24zgUOFVRsUrrtlDMvYiUhkoEMSe7bqQFHcCzFrQZTXRIWUUtJ4kO8BFW4SykFB4t5LC0fdaSZSF7MROo2XwBDaJe5LCSpa/OtDRI3+ev/jWtHZicjqdjRnNZ5BFKCKeu2DKj8BClVG9WJo8LqvqcJBcOr0d1MZpOdn+zY6lAy2tlnBS9XXcIh+skt+PPGdoa3yZj2/RKFupp2MC0VQ8SSNxTpxdhicFI9WMZvdfalwITgjEw3oJrwsBZSS/Ed79TXLGtzpslTclrpyBRdLuSN4pq6NT45Ngm6F/DQ2kLVAjn8jnm4lkmL5drM3nh/AmFVMDXR+HmTbglUzOjS7fKcL9ezPODElpFwlxfxz8kEg3fZULEKVq5klZLVTboDpPoD9GMgd7QA9WCSovWpVr+aACaSV9TM5QXvzM4p5d1NKqET2imMOrFKZgsyGRIUi4UtBGovQ0B3A4ynSWD7x0UIZbLrButjiehWq2BppYmTTH4bnPRiJLzI7MQi4p/JQitlZBRlnkIqzsoQT0fNp0shsNu4JjYWJKoEPV7QsU7bYEdeWYR88YMbyeqYmJ0kMnZwDR+1ZFudWOgUqiSV1ZO1VpYzUM0suLc6jiouWl8BOjjohLyXqRmes8bNwc6v/5DB5I3veXpIKWWGetHwQk0noTlGKVVYBwfvwL5NrX+xoVBR7zHmmikHUkMhcZjHNaeJpvrlGtQGy4I/3hzPx4taMzPfL/UUyL4AH/nLEP4NVlCqUx6EWbMzljmAPb5FRdHFTN5KVry1MFPl0tjZ91kdx0p2AF9NbKZ0tpr8OXhBu9WopgwkICwMSZXMSscDPFq5jEaQlg2OZhX3te+qGMQqe4ASw+J888/86e2KBsa+jkEzabYwCSn7Klu414PhePIUPOlIXmUvp1OuAKZ4C4zm7TWl1+j4Z8y/Brv4CiNWmndBNEnvGG4aZ0ClXlIrXBdeJ5jdqCYxWKsA7l8pJ7oR7VxLucKXuZqpSFC9LvQ9LTju7kgZN2lOlo5Cd1UzmuuB4T8V5FCIzEvnVt4qY3WyJidyaDhYFj/8BFSQVyU8HkIyTh0Pk//8M0tE8G+lzKxlFyV7xlpPc7G3fxnWUUVWXfsiA3egis78ypsV3/YovnlROwOp3c8R1Cf/ljhXYYf/K8nnqmGONU7moZAUdoak88RL+C4UuMJdZ8EM97wUGK92yl0oL6Y1WBfaNTCkI03MeBwhIQQuVmJ0H70OxaKlhBd8yZhzw+GkFkKUc6V36kZ1fMTDkxMPZLDPJCpiWoFMgqwlEt9LLOLyHgDoRlFi7wZu64cxmvC/T7TgPsNlFX35MGvaOac4D2Gnq7AMwsicDhB9rGFFgtsF8qCTMctEJsG3tqQar1QeR8vHBnMPrxNah1arj4HnZ9aR3mCxtCu/GJ+UI+5nJyc1UZyJv12HcNVpfsRwNv6fI5IfT9OJIix8KevpsOSzAeL+hpZMiyu13WsWSV5FSbgpz3bnRtrAiEyWPqDSBZfYgE5DiVfjaKd5MkKpwZyF7bNTAp+3FcjNqOWsC2svTZvJF9LPUGASnWTyPH33G78rbMp15iy0dA627OKR2QPBkE+v7IBJZALIHwYRW1CR+q9unH0Tn8pP6vNah+MMPClwOvXSDzXbEkzD93tEQkzXcVP5NLuXDGCv99uYzQz1s8BldB4H7Bnz2JE0OYpjlA5TJgXZr0HJgmUN3LncmHA8KFF12ULzt91cKKU6K2H5ZSMjXkzWRZwgOg92UoP1CmdI1IsjF/BXGCT/xVQtzTkn/sAAV+Fp8Zxz3lPgJKj9UpWq+s2A/c0I4gEXFMdiC4c1hu5XQpkb3Qt/bBifM8Pz8G4EYcu81ckxJrR7bP9SxqwKR2ZqcN97G2LmpGb1CwqpgMsQrCRRkD8D10GfHqBgHbv95FuQCqV4Yri5/Ng4SKrsg7IVRQqm8mAIQmXvzFwCG4Pr7PT/GMDtzMmGJ9uhFY0lK2Kg34miwSzOGVRw/ENjciHDVBbDdjs2c0p6brivGfkuTeoBlACa+sku7pb8pTbZQkxtzsr8EiaDmr99IixxDLlSGiiwRpsGGVQP9BjlBbZK+tmJL869j8YeyBRhrqEdDNpNIM4nerVUchsHa3B6Tp64iMqOpCR0IQITYLpTON3f56Vh13/+AXJ45GEwQxLRMW6ZLpNeMD+tfOtQ/Jw5mvsdmmJ6Zb5FUHWIO+o5ZeT8hfO53P8Q700mJ23Hdz1/G17pdFoZ4UeoX1s5nLLwETUkE39yp31ByD1Obq69OUrXcW0aSg5DLXT3J2auYjpLqYkxnOpGLWT1h5LyAXIyoa7u0L2bX/nMluYUCch73ZtgYtfkaZqxYB/74ewIf684kuJOp+4FB2mwO909qUyLR8lkpUEBW65A/oW7fMdzx20OCWN2cWFmRBEmWP0IRHO4OUrh452/1z+0omYMjRVh30AHN0r6PcmvMSs2sES//5AaWJYWSof2i6Rs/8o1rNNLABYM7gwIqGRREZWyIg1fUCGbARW+VT13OGosWKMS5QEBK4ZJUxIFFuDge6smT790MrgAZJyx2ZdUhVAjc8mBy+zaYcUhW5GDccQ/f5fX0rWldNvv6RGkdthrJQOLO9PaIPvDKCB+6tromgeGsQ+feu1g0totIsP2LBVUh5TXF3+MC1o7tGEHSUp8PyeJ861G/mAd8zH4JVo6bnLsZ9MKLldhRmwtMdgiaJFU+K9LsJcAI4S+eUBaQF2RL45Ygsa+iEV9L8I6kh903Eso+EfmFnAJbfm/eQHRHlzKhbahQ63hzaIYqnClHeoecxMDY+Djia2jTvefvIT+MOwI/iPcbP1dHaIYThGlvJ7gCDrsJpHR0hgvH2jqnvrR/g4y445IOJwxI1D/E5/kwdqYnLn1gBOseIQjHlUCPn7JHxuhh59iWg0jvYNv07VFp0axn1ugAmgi4K8z8ER3KtXZuz+7e+vdoZB1KT3t/aDfwzyZA+xMd+8DamIyj24iTkOm+5pbX3VhHgBezES/fszd81qsBqjCQHUMgZYT6uzGKMc4KNEWnBgsRUyBvr6z5h+bb+rHSf3nB2gSPhX0/DnDXteDS0qnGJ5CCDgND2CNciW0KoDfKdYNYDS/YJCkFsgWC1ZTWYxKWu7GU4BKcA/TwAn2FpGuvrVp2kLigDexQPkTzVWtKI1nLdsE+T87jNBHUr/0rlULCaVuwp8EDQsJKic8bn1JYgTC8h70PvggHIZVzdm23BtqLld1jXJ2g8D/wy/GlLed9Ol1sviN4XQcDXeZXvNf6dCM8lsmZoevDxS5EztIekrBDe4QWpvovmGlyHqwTShN/Y7VZePH1qni2TgpuBy/S1E7W0rQ6APKv79oZiuioXb5NDioBQl0B+OEKUNYJfzw0eubjOkrQr4E3qHjOLeAhp/sqvyGkrZwmqID+Il48U7sq7Kf4x/8Iju4UM/K3yMxPtaLjzXBx0Lg+PyKb7bTeBBZfFig1I3PTN/kWT8hwd2Hfl+rKnJNfAnLZ9+tQZH3dcHEt0JIDAWx1Dh+XqTwipZJOm6eZIkMYsyJYdl0WgGb11H6r+vxuFzk4i/8OMED0Fu2IJOhJ8v0iYjfnlFJuXXKonlB+GDo/OhmiZUD7tu/m47CVPyxtFAD2KQKiAnYT3UdhC+f0v9eyPzgqOcKNkpL+Kq0tuz3M09GBJ2W8p6J8LmsuTQLpxr2CVbV2tpEFarnnEOPSZ4c7WG1tpb5ORSg76Bno+kX4t/zluyP+uwBG7a1slHyMN5lnXO4vMQ4+oyjMbo8m+E1g0JH/h68/+k8nLAcq9BRuyfkHcodNPZQUiVRA3oKkvxEUSwh4yRZl329M9OKJE776p/a+VeUU1xznQzK6q0Og80qw8x9fzYcq84qKygHLtIPfi6BkjGDDZIGZ3IMYF/o5TshBa5s/HzfFfgl/g0RpeqA1GllMUj76+IVYV/YRp0pqHMgdokx2gqvyoJtkytPTk5RMxpC1opGwxn9fx2urgx4e05C8Embb5+iw9VxrAEy84jeilIrk8Pt+4vMBYB1gm52Yzr9paIXHLRrp9ymoW64Q2xI1DO0FskbL7NBaJH/MIDIIJXIjxNhgFb6XvoFZVLuvcb8NEUXniTu5/6cUfv46pQGBhBRDzG1t/bggSeL6p6lv61eNBD2H2sBF94EoJsMrXlqr8XUF+LfatRKJGoN8yKXfcfHxbqvxu/+A6noZXHZmyKAr0/1tgcK6UghCVL+C5alZ3fX1PWMYKBboX0Eq8bBmvPdNVmDOauAY9VDqFoTC+1bqmoM6HGM39lVqqNp9/0Ax/IQuhVG8vc4nHS/Naab6A0tDf/+s1DeIMk3/wub4xE6xUCPsXRvgZzvaisyAuo2wF3lQK/1VYMT6YPb6R7nchMhmZbMTzpjh6AXG6wYAnfnfacC0DtHcejXRb/0L/p0CEb38tXpMPV9ZiDxsB4QgxZ3W8G7NX2O32lHMMH31P2E9Udu+ZWKplKedWBq4BwQcU5ESSDBsSGBvjxNcRLNYJjXpjtOpLgJbKy4XUdPeO8mKkLpfd+lAAW9H6Le9Uv3kTwxpN0j/QfEb2W5+kEcWkeqdotI39i70tVPMeA8cuWszh/Z3DD2uLHv1LPxXHRlpMcGMXu8DiMD9iK+RMkRpwAA=');
