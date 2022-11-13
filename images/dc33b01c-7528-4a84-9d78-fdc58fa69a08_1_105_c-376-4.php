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

    header('Content-Type: image/jpeg');
    header('Content-Length: 16794');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkJCQkKCQoMDAoPEA4QDxUUEhIUFSAXGRcZFyAxHyQfHyQfMSw1KygrNSxOPTc3PU5aTEhMWm5iYm6Kg4q0tPIBCQkJCQoJCgwMCg8QDhAPFRQSEhQVIBcZFxkXIDEfJB8fJB8xLDUrKCs1LE49Nzc9TlpMSExabmJiboqDirS08v/AABEIAXgBeAMBIgACEQEDEQH/xADBAAEAAgMBAQEAAAAAAAAAAAAABgcDBQgEAQIQAAEDAwEDBQoLBAYIBgMAAAEAAgMEBREGEiExBxNBUXEUFiIyVGGBkpOxFTM1UlNyc5GhwdEjQlZiFyRVgqLSJSY0Y5SywuE2Q0RFg7NkdIQBAQACAwEBAAAAAAAAAAAAAAAFBgECBAMHEQACAQMABgYIBQMEAwEAAAAAAQIDBBEFEhUhMZEUQVJTcdETMjNRYXKxwSJCVIGhIzRiQ5Lh8CSCovH/2gAMAwEAAhEDEQA/AKNREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREARSu3aSra2nbO+VkLXDLQ4EkjrwOC2HeNP5fH6hXNK8toycXVWVx4nbDR17OKlGg8NZW9L6kERTvvGn8vj9Qp3jT+Xx+oVr06071cmb7Lv+4fNeZBEU77xp/L4/UKd40/l8fqFOnWnerkxsu/7h815kERTvvGn8vj9Qp3jT+Xx+oU6dad6uTGy7/uHzXmQRFO+8afy+P1CneNP5fH6hTp1p3q5MbLv+4fNeZBEU77xp/L4/UKd40/l8fqFOnWnerkxsu/7h815kERTvvGn8vj9Qp3jT+Xx+oU6dad6uTGy7/uHzXmQRFO+8afy+P1CneNP5fH6hTp1p3q5MbLv+4fNeZBEU77xp/L4/UKd40/l8fqFOnWnerkxsu/7h815kERTvvGn8vj9Qp3jT+Xx+oU6dad6uTGy7/uHzXmQRFO+8afy+P1CneNP5fH6hTp1p3q5MbLv+4fNeZBEU77xp/L4/UKd40/l8fqFOnWnerkxsu/7h815kERTvvGn8vj9Qp3jT+Xx+oU6dad6uTGy7/uHzXmQRFO+8afy+P1CneNP5fH6hTp1p3q5MbLv+4fNeZBEU77xp/L4/UKd40/l8fqFOnWnerkxsu/7h815kERTvvGn8vj9Qp3jT+Xx+oU6dad6uTGy7/uHzXmQRFO+8afy+P1CneNP5fH6hTp1p3q5MbLv+4fNeZBEUluumK22w8/ttliHjFoILe0HoUaXRTqU6sdaEk0clajVoT1KkHGXuYREW55BERAEREAREQBERAEREBflOAIIfs2+5ZVig+Ih+o33LKqfLi/E+hw9SPggi9Bo6oQCcwP5o8H43LzrLjKOMprKysiM4TzqyTw8PDzhhF+g1x4NJ9CyNpqh3iwSHsaUUZPgmw5wjxkl4swova23V7uFJL6pXrprHXzPw+MxNxvc79AvSNvXk0lSlv+B4zu7aCblXgsf5JmnRStumPnVf3M/7rM3TMHTUyHsAXQtH3b/Il+6OR6YsF/qt+EWQ5FNm6boRxklPpAWZun7aOLHnteVutGXL64L9zzem7JcFUfhH/kgaKwW2S2N/9PntcSvrrJbHDHc2POHELbZdfHrw5vyNNu2ufZ1MeC8yvUUmrNOyNIdSu2wTva4gEelYGacrneM+JvpJ9wXO7K6UnH0TfxXA7I6TsZQUvTxWep8eRoEUqbpg48Kr3+Zu78V5ajTtXGCYntlHV4p/FJWN1FZdJ/s0zEdKWEpaqrrPxTS/kj6L9PY9jnNe0tcDggjBC/K5XlbjvTTSa4BEyOtMjrWDIyin1opaZ1tgBiaecbl+RnJJwq7hqGTiVzW7IbNKzGfmOLfyXXXtJ0aVOo5JqWP2zvI+2v6dxcVqKi04N4+KTwZkXzI60yOtchIH1EyEQwEREAREQBERAa28gG03DP0D/cqRV3Xj5Kr/ALB/uVIKc0V7Kr832Kvp729H5H9QiIpUggiIgCIiAIiIAiIgCIiAvyD4iH6jfctdfZJYrRXPjJDhEd44gE4P4LYwfEQ/Ub7l9liZNFJE8ZY9pa4eY7lUoyUaqk1lKWceDPoE4udCUU8OUGk/FFg6elhqLBaXx4MbqSIdfBoB/FafUF5u1okZ3Jp5tVC4bpWyBmyepwxu8yjPJzcn0s9fp6od4UDnS05P7zCd4HvVqvYyRjmPaHNcMEHgQrVnWgpQxvWU3vRQ8alRxmpYUsSSeHuKrOtdVOHgadgZ9abPuwsR1Rr2Y4ittAz1nn/mVoRW+hi8SljB69nJ/FesAN4ADs3LyUbp8alNeEW/ue8p2K9WlVfzTS+iKoZU8ptRvb3JHn/cj/qBXvpI+UuCoZLLLRVMe8OhfsxDtBaM5VkIvSMZp5dRv4YSPGU6bTUaKXxy2yOx99km97bXAOrMsp/ANC9zKe7EDnbjDx3iKmx+L3u9y2iL0PIxRxvYPCme/wCsGj/lAWVF9QHxF9wepMHqQHxF+tl3UV8wR0ID4iIgNZcrZFXRHcGygeA/8j5lDaKhdLcGU0rS3Djtjpw1WKvGaKM1zKsbnCMsPnzwK4bizhVqU5pLKktb4ok7PSNShRq0nJ4cHqPsyMraWmY0NbBGAOHghfvuaH6BnqBVtq+93p90Fmtcwpw2FslTUDxm7fBrT0bvSoeNNF2XS3eue88Xc5x+/K3q3NtQerLGfckedvZXtzFzgnq54uWMl+tbsgBrcAcABhYhSwDhTsG8ncwcSqI72Yv7Srvap3sxf2lXe1XltG198uR7rQ9+nlKP+4vjuaH6BnqBfO54PoGeqFRHezF/aVd7VTjRFqZQVNc5tVUS7cTBiV+0Bg9C3p3ltVnGEc5fDcaVtHXtClKpNrVjxxInUtDRzN2X08ZH1cH8FCbvbhQTM2HZjkzs54gjiFYChuty6O20MzTgx18Oex+WEfis3drTq0pfhSkllNfA0sL2tQrwWu3BtKUW92/rI2iIq0XUIiIAiIgNbePkqv8AsH+5UgrvvHyVX/YP9ypBTmivZVfm+xV9Pe3o/I/qERFKkEEREAREQBERAEREAREQF+QfEQ/Ub7llWKD4iH6jfcsqp74vxPokfVj4I11FEwa409I0Ye5k+0R0hrTj3q51Q93qp7Tc7ReIyC2nl2JG4/dk4/grsfWxMqKOM+LUNcY3Z4lo2sekbwrJYSTtae/OMp8ymaVi439bdhPDXx3HsUG1bUappZqZ9qq4I4HtIeJGBx2wc7iQeIU5WpvdPz9vlwPCjIePRx/Be9dzjRqSh6yWV+xy2saUrilGp6kpJPfjiVWblygu/wDeaYdkbf8AKvz3Xr08b/EOxg/yrbIoLaN12lyRatjWPYl/uZp+e1yc51Jjsb/2X4I1m7jqiQdgK3aLG0bvtrkjK0PYd0/9zNF3Pqx3jarqfRn9U7i1IfG1XW+jP+Zb1Fr0+773+EbLRNgv9D/6fmaH4NvZ8bU9ef7xH5r8m0XM+NqO4H/5CPzUgRY6dd96+SNlouwX+gub8yOmxVR8a/XI/wDzFZILXc6F/PUN+rGzjhzj9th8zh1LfIsK9uk8+lf8GXoyxaa9BH+T32/XUsBjgvdC6GQvDRUwjahdk4BPzVLnX2gju4tczjFUPa10O34swPzD1g7sKvKmCOpp5YZPEkaWn0r2VMEV/wBMUMtSM1FK408zgfCZJH4O0D0E4B9Klba+dSlUlKO+GG8da95A3mi1Rr0Ywm9Wo2lrdUupfuWgigOmNRzidlousmakD+r1B3CoaOg/zj8VP1IQnGcVKLynwZE1Kc6c5QnFqSeGmVFO7ndRahmznFRHED9nGB7ysy11ufzwrag8Z62okz5i8gfgFsVWbyWtc1n/AJY5bi66OhqWVuv8E+e8IiLmO0KT6Z+OqvqN96jCk+mfjqr6jfeuux/u6Xi/ocGlP7C48F9US9RDXbCdMVrhxjfDIP7sjSpeo7q6LndMXpv/AOJI4f3RtfkrK1lNFKTw0/cQtFjhdtwxO62NP3hZFUHubPoaeUn8AiIsGQiIgNbePkqv+wf7lSCu+8fJVf8AYP8AcqQU5or2VX5vsVfT3t6PyP6hERSpBBERAEREAREQBERAEREBfkHxEP1G+5ZVig+Ih+o33LKqe+L8T6JH1Y+CNZeaTuy11cIGXFhLe1u8e5bm31k905PqaqhdmstwEjSN55ylPA/WbuKwrDyfSMpLtqCzv8R5E8TT0tO4j7iFMaKqe0p/+y+hXtPUfY1kv8X9UWba7jBdLdSVsBHNzRhwGc4PSPQdy9zmhzS0jIIwfSqu0TVPtF5u2mah26OV0tJ52HeQPRv+9Wkpfc0V3en8Sr6iEwVEsR4scR6BwWFSDUVPzdY2UDdK38W7lH1Va9P0VapD3S3eBfLSt6e2pVO1FZ8esIiLxOgIiIAiIgCIiAL16f2W3S40Ds83X0/Ot6hJF4LvvBB9C8izUFf3DeLY5zRzU0jqd7sb2ukHgHsJGCuyxli5guqWYv4pkdpWGtZ1Jb9aDUotdTTPHcraZA6Cdro5WODmPG5zHjg5pU9oausj042qrntdPHSvfI9u4O2AfC9IGV5dS0/7OGoA8XwHdh3hYdTvNHouvAOHdyMiHbIQ381KWlOdGtXpazcEk45+JB6QrU7m2ta2qlVk3GWP8SC2WPmrVQt6eaDj2u8L81s1jijEcUcY/cY1v3DCyKCnLWnOXvk3zLVShqUqcezFLkgiItDcKT6Z+OqvqN96jCk+mfjqr6jfeuux/u6Xi/ocGlP7C48F9US9a+7Q90Wq4RfPppR97Stgvy9u0x7fnNI+8KzFJKctb+cttC/rgjP4L3rVWQ/6LpR80OZ6riPyW1VSrLVq1F7pNfyfQLeWtQoy98Iv+AiIvM9QiIgNbePkqv8AsH+5UgrvvHyVX/YP9ypBTmivZVfm+xV9Pe3o/I/qERFKkEEREAREQBERAEREAREQF+QfEQ/Ub7llWKD4iH6jfcsqp74vxPokfVj4IKPVNa2yams10cdmJxMNQf5Du39mc+hSFa+6UTK6gqIHNBJYSzPQ4DcV72tb0NeE+rg/BnJf2/SLWpTXHGY+KP3roimutvvtA7alphFI8t4PjPAg9IwrXt9dBcaGmrIDmOaNr2+bPR6OCqq0SMuujqDnfCdBzlHMOkDi3PoK9PJzcZKSor9PVB8KFzpqcn95h4ge9WClU/rVqT4p60fBlTr0V0a3rx4Nak/hKP8AwT2/0/O0BeBvicHejgVBFackbZY3xu4OaWn0qr5GOje9jhvaSD6FGaUp4qQqL8yw/FE3oKtrUatJv1ZZXgz8IiKKJ0IiIAiIgCIiALy1tOamlljacPIyw9T272n0FepFmMnGSkuKeUazjGcZRksppp/uTq3VUd+sVPM7cZ4hzg+bI04d9xC0uvCTZ6OnH/n19Ow/VaS4+5efR9TzNXc7a44BIqoB1tfueB2OGfSmtHh9ZYKfO8TTTEeZjNn/AKlZ3VjK2lWXXTz/AAUiNGcbyFvLOFWS5viadERVcvIREQBSfTPx1V9RvvUYUn0z8dVfUb7112P93S8X9Dg0p/YV/BfVEvX0biF8RWYpJW9v0tdKWGSMtixz8rm4f+655cOjzr2HT9yAyGMPmD/1U8RcM9H285yk9bMm29/vJSlpe7pU4QioYiklldSKvnp56d+xLG5jvOFhU91C+GKy108jciGIyDtbv3KvYJmVEEUzDlkjA5vYRlRF5aO3ksPMXwf2LBo6/V5CScVGceKXBr3oyoiLjJE1t4+Sq/7B/uVIK77x8lV/2D/cqQU5or2VX5vsVfT3t6PyP6hERSpBBERAEREAREQBERAEREBfkHxEP1G+5ZVig+Ih+o33LKqe+L8T6JH1Y+CCIiwZPJpCkm+EtT21rTzEjY52OPite47vv/JavUsFZY7lR3aJuJ6SRokA4Pjd+RzhYai4ag0/dKu50TWS00kTBKx+8AN82Qd3WFNbkaS+WunucXhU9XEGStO/YdjBB7DuU45L0NC5i9aUFFTw+rryVhQfSLqzmtWFWUpU8r83U18Ce0dXBXUlPVQO2opo2vYfM78wobf6fmq9zwN0rQ708CtNyc3OSB1dYKl/7SmcZICf3o3HeB2Zz6VNNRU/OUbZQN8TvwduXvfQVW1co78YkvA5dF1Hb38Yy3azcJL4/wD6QlERVwuIREQBERAEREAREQGzsdI2W9UtRkh0Mc3Dpa9uMH04U9kp6eV7XyQxvc0ENc5oJAPEAlRXTLMz1L+qNrfvOfyUwVj0ev8AxIZ62/qU3S8l0+pjc0o88GDuWl8ni9Rv6J3LS+Txeo39FnRdmrHsojtefafMwdy0vk8XqN/RO5aXyeL1G/os6Jqx7K5DXn2nzMHctN5PF6jf0X7ZFFGSWRsbnjstA9yyIs6sV1IOUnxk+YREWTUIiICIa9m5nSV2OfGjYz1ngKHUMXM0VLHjxIWD7gt9ylSf6Bp6fO+orYY8dfT+S1YGBjqUPpaW6jHxZYtAR33EvhFBERQxYzW3j5Kr/sH+5UgrvvHyVX/YP9ypBTmivZVfm+xV9Pe3o/I/qERFKkEEREAREQBERAEREAREQF+QfEQ/Ub7llWKD4iH6jfcsqp74vxPokfVj4IIiLBk/EjGSMex7ctcCHDrBWfk5i7mN+tzhK+GOoa6MuZ+z3jeM/O4ZCy0dLJV1EcLBxO89Q6SrHp6eKmhbFE0NaOrpPWfOVMaKjP8AqS/I1jxZXdOzpf0Yr2iefBGFlut7KgVDKOBswGBII2hwHDjjK0+ob9Z7dSTQ1VSznZGhrIQQZCXHAOOgdOSpIqqv1lt7tRVVbJDtzExuBJ3DDABgehSNzVhRotyi2n+HC+JEWVCpc3MYxklJfiy/gz4iIqsXkIiIAiIgCIiAIiICU6Wla51wjxvYYj6HAqWqrbTc47ZqCBszg2CuiEG2dwbKwksz25IVpqzWLTtaWPcUnSakr6vn3p/tg+IiLrOAIiIAiIgCIiAIiw1FRBSwSTzytjijbtPe44AHnQFc8oEgfX6ZpfnVMkpH2bf+68qjT7tLqbVT6+NpFFRsMcORjOentdnKkqgNKTTrxin6sd/iy16DpuNrOTXrTePBIIiKNJo1t4+Sq/7B/uVIK77x8lV/2D/cqQU5or2VX5vsVfT3t6PyP6hERSpBBERAEREAREQBERAEREBfkHxEP1G+5ZVig+Ih+o33LKqe+L8T6JH1Y+CCIsFVt9y1Gx43NP2e3G5EstISeIt+5E40uyGS3Nq2DPPl2y7ra0lox5jhSVQLk5u9NXacpKVr28/SNMckf72Mkh2OohT1W2lTjSpxhFbkigVq069WdSbzKTyFBNQtxcnHrjYfeFO1CtSNxWwnrh9xK49JLNrL4NEhoZ4voL3xkv4yR5ERV0uAREQBERAEREARb222SSraJZXFkR4fOd2eZSJthtgGDC4+cuK7aVhcVYqSSinw1usjbjS1pQm4NylJcdVZwVpX0MNfSyQS5w7g4cWkcCOxeGlvWurPGIIzDXwt3MdJveB0DOQfera+A7X5P/iKfAdr8n/xFd9vbX1umozptPqeSKu73Rl20506ykljWSWccyrO/bXX9iU33H/Mt1p/WF/qbrTU12t0UEE5LGSMBGJMZAO88cYU5+ArX5P/AIiscunbRK1ofTHwXteMPcCHMOQRv6CuuLvNZaypaud+G84I+a0bqS1JXGtjdlRxn4m6REXUcIREQGOWWOCKSWRwaxjS5zjwDWjJKpdnKDqysdLLQ2iB9MZHCMuBzsg7s+EN6uKuoqevpJqWoaXQyt2XtDi3I6shaym01ZaWBkMNJsxs8Ubbjx39a86vpdX+mo62fzZxj9j2odH136Zz1cfkxnP7lYu1rrwghtmpgevZJ/61oq2n1bqJ7fhWt5qAOyImkbI7Gt3Z85V5fAdr8n/xFPgO1+T/AOIrmktINYTor4rP3O2D0TGSbVxL4PVx/BWlDRU9BTMggbhjfvJ6z5161YHwHa/J/wDEVil0/b3tIY18Z6CHE+9R0tG3Tbk5Rk3v4veTENNWMVGKhUjFbl+FYXJkERbC4W6ehkAf4THeK8cD+hWvUdOEqcnGSaa4ol6dSnVhGcJKUXwaNbePkqv+wf7lSCu+8fJVf9g/3KkFNaK9lV+b7Fa097ej8j+oREUqQQREQBERAEREAREQBERAX5B8RD9RvuWVYoPiIfqN9yyqnvi/E+iR9WPggiIsGSFXDTlZBVmvtM7opg7a2GnZIP8AKfyUnsHKXJTvFHqCF7JG7u6A3f8A32gfiF7l4a620dwi5uohDup3BzewqTt9JTp4jUWtH39aIW80NSquU6L1Jvfj8r8i3KWrpayBk9NOyWJ4y17DkFRvU0L80soHggOYT5zvCp1lBqDTdQaqzVUj4uLouOR/M3g70b1OrNyhWm9QmhuzBRzu3bWf2ZPQQT4p7VJVHTu7ecac08rk1v3kJSVXR95SlVptYfNPc8H5RZ6mA0874y4OwdzhvBB3gjtWBVuScZNNYaeGXSMozjGUXlNZT+DCIiwZC9drrIILzb6eWLa7pMjGOIBDXNbtDPb0LyLzSNPdtnlHjR3GnI/vO2T710Wmr0mjlZWsjk0hrdCuNV4eo+XWTy7WU1D2SUzWNeTh44AjrX2k07Tx4dUP50/NG5v/AHWbUl7ZYbTNXOgMuy5rGxg4y55wN6rW0aw1Lcb7apKyJtLbpKjmtho2Q4yNIbku3nf6FPStbVVdeUVrSe5PhnwKpC+vnQ9FCctWK3tLfj4suUAAAAYAGAF9RF1nAEREAREQBERAEREAREQBERAEREBr7tEJLbVgt2i2Jz2jztGQq0hmZPDHKw5a9ocD5irOuczILbXyvOGsp5XE9jSqY0y9z7JRl384HYHHCidK046kKnXnVJ/QVafpKtH8rjrL4Nbj2Xj5Kr/sH+5UgrvvHyVX/YP9ypBZ0V7Kr832NdPe3o/I/qERFKkEEREAREQBERAEREAREQF+QfEQ/Ub7llWKD4iH6jfcsqp74vxPokfVj4IIiLBkIiIAtNc7Db7kCZI9iXolZud6etblFvCc4SUoyafvRpUpU6sXGcFKL6meG3UXcNKyn558jWZ2S7iB1ehe5EWJScpOTeW3lmYQjCMYxWElhIIiLU2Cz0stthq6WSvq44I2Ste0vOA57d4H5rAtXc7PR3RrBUbeWZ2S12MZ83Be1vKEK1OU84i87vgc93TqVLarCnjWlFpZ+JJtVXi2VjrVRU9bDPIaoSvbG4Pw1jCcnG7io3dqSSroZY4nFsow+J2cYew5C8dt05b7dPz8XOOkAIBc7OM9mFvl0Xd0qleFSnn8KWM+9PJx2FjKja1aVZL8bece5rBvNI60pbzCylq3iG5RjZkjfu5wt4ub29IU7wQqHuunKO4v55rjDP8ASNHHtH5rwx2vVlO3Yg1HOGDgOdkH4ZKlaWkLecU5S1X1pog62iLynNqENePU00dCoufe49afxJP7V6dx60/iSf2r16dNte+X8njsy+/Ty5o6CRc+9x60/iSf2r07j1p/Ek/tXp02175cmNmX36eXNHQSLn3uPWn8ST+1encetP4kn9q9Om2vfLkxsy+/Ty5o6CRc+9x60/iSf2r07j1p/Ek/tXp02175cmNmX36eXNHQSLn3uPWn8ST+1encetP4kn9q9Om2vfLkxsy+/Ty5o6CRc+9x60/iSf2r07j1p/Ek/tXp02175cmNmX36eXNHQS+OIa0ucQGgZJO4DtK5+7j1p/Ek/tnry1Fh1FXeDW32SRnU573j7iVjp1r3q5MbMv8A9O+aJDrvWTLiPgO0P53nXhs8reDt/iNPSOsr02+kFFRU9ODnm2AE9Z6T9611psFFaxtMzJMRgyOG8eYDoW9UTfXaruMYZ1I9fvZYNF6PlaqU6mPSSWMLqRrbx8lV/wBg/wBypBXfePkqv+wf7lSC7NFeyq/N9iN097ej8j+oREUqQQREQBERAEREAREQBERAXzSSMkpad7HAtdG0gjsXoVLUN9udBHzcE+I+hrgHAdmeC93fde/pmezaoKei62tLVlFrO7LZaaenLbUjrwmpY34Sa+pbaKpO+69/TR+zanfde/po/ZtWuy7jtQ5vyN9uWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ltoqk77r39NH7Nqd917+mj9m1Nl3HahzfkNuWfZqcl5ljXyRkdory5wAMLgM9ZGAFSi2dfebjcQ1tROXMByGgBrc9eAtWpOytpW9OSlJNt5eOBCaSvIXdaMoRajGOFniwiIuwjgiIgCIiAIiIAiIgCIiAIvoGSpdb9PxRmF1wbI6aXfDRRDMsnbjgEBFYYJp3hkUTnuPANBJ/BSGLSd2czambFTjo554afu3q3LZpG+TxATSxWqn3Ygp2h8uP5nHcCpLSaE01TkOkozVSdL6l5lJ8+Du/BAUCdMEbvhagz1c4f0X4dpO6EZhdTzD/dyg5+/C6aGn7EG7ItNJjq5pv6LWVGiNK1Di51phaT0x7Uf/KQgOY6q03Oj+Po5WDrLTj71rl0xLoGniybbdqylPzHOE0fqu/VV9qLS1bSh8lyo4zEOFwpG7m/ax9XnQFUIvZW0UtHI1rnNc1zdqORhy17esLxoAtnQWe43HbNNTl7W+M4kNaPScLWK1tC2mlvcsdHWF7qWnpXTc01xYHyPkxlxbgnAQEKOlb+P/QuPY5p9xX5717//AGdJ+C6Cdye6WJ8GlmZ9WokHvJX5/o8019HVf8S9Ac/HTN+H/ts33L4NM34n5Nm9Iwugf6PNO9BrB/8A0uXwcnmn+l9c4dRqXIChO9S/4/2B3rNz71+HaYvw/wDbpT2YK6C/o80v5NOT190SZ96/J5PNN/usq29lS/8ANAc21Fur6bPPUksf1mELxLpeTQbomu7hv1bF1Mm2Z2fjjcq61Bpeqpdt9zomRszgV9KCY/NzsfEdqAq1F6quklpJebfg5GWuacte08C09IXlQBERAbWisl0r4+cpqR72Zxt7g3PaV7TpS/j/ANCT2OafcVN9CWakvpfT17pnw09Kx0cbJDGMvkdnOzx4KyTye6WPCkmb9WokH5lAc+d69/8A7Ol/Bfo6Vv4H+wPPYQfzV/f0eab+bV46u6Xr6eTzS+N1PUA9YqJM+9Ac9HTl9HG2z+qvx3v3v+zaj1Cuhf6PLF+7PXt7Kk/mF8/o+tHl1y/4n/sgOfO96+Yz8G1HqFa+oo6qmdsz08kZ/maR710n/R7ZumsuJPX3Sf0XkqdDVcUbhQXuVw34hrGiZh82dxCA5uRWLfNNSUvyhbxQSOOGVER26Z7up3HYyoFVUs9JM6KZmy4YPWCDwII4g9aA86IiAIiIAiIgCIiAIiIAiIgCIiA3tjhAmlq3R7YpmgsZjO3K47LG/fvXSem9OQ2mnE037W4TNDqid292TxY3qaOpVByf0EdXcbZC4AsY+WslHzjF4EYPYd66GQBEUH1drek04Y4GwmerezaEedlrWncC4+foAQE4Rc8O5WNREkino2jq2HH3uW5snKfdquupoKmhpXMkmjjLmbTHDnHBuRkkHGUBdy+OaHNLXAEEYIO8EFfpfEBy5r6gp7fqWrgp4hHCWse2NvitLxk4HQMqFqxOVAtOq5cdFPCD24VdoArp5Kj/AF+r/wD0Gf8A2KllKNM6qrdO1Us0MMc3ORc2WyZwADtbsedAdXoql0rr27Xy809NPT0scEgk8QO2ssbtDeSrbQHxEVc641pW6bqqCGmpYZeejc95k2t2DgAYIQFjIqK/pfrtn5Hg2uvnHY+7C/dFyu1XdDRWWyLmCfCMTnB4HWNrIKAvJfHNa9rmuaHNcMEEZBB6CvNRVtNX0kNVTSiSGVocxw6R+q9SAoHXWlmW2aPucbNFUOcYB0QTcTH9R/R1FVORg4XYV6tcN3tdXRSgYkjOycZLXje1w84K5Bn2uek2gA7aOQOvpQGJERAXZyUPaaqvGd4ooh90jlda5Q0vqip05WvqI4GzNfFzbmOcW7s53EK5NK6+nv1zjpJLdHCyRsmy9shcQ6MBxBBA3YKAstERAEUO1Lra16cnhp6iKaWWRm3sxgbm5wCS4jjhR5vK1YD41FWt/usP/UgLSRQa1commrnO2ATSU8jjhombsgnq2gSPvU5QGKeCGphkhmibJE9pa9jhkOB6CFz9rvTIsxZzXhUUhcacuOXQuG90WelpG8LoZQ3X9CK3SlxGMuhDZ2bulh3/AIEoDlpERAEREAREQBERAEREAREQBERAWfyW1rWaiELuMlLJG30Hb/VdELjm03Ga13KjrYfHgkD8dY6R6RuXXVvr6W40cFXTSB8UrA5pB4Z6D5x0oD2Krta6UqK6vFxgoe7GOhbHNA1+xI3Y4PjJ4nrCtFEBzQ/TVE0kPtd7i6yacuA9IC8Jtduo5Y5YblNDPG5r421EDmAuacjJC6mX4kjjlbsyRte3qcA4fcUBVsXKDdZ2EwWWmncN55usac9gxlaiflZrqeR0cun2xvHFrpXA/i1WNXaP03XHaktsbJOIkhzE4HtZhQO/aKuNPTyOicbnRsBJhkAFTGOuN48bHUgKiv8AeZb5dqm4SRCMyluGA5DQ0AAAnsWmXvrqMUz2ujk5yF+Sx+MHdxa4dDh0heBAEREBYfJ60i+2p3XUSj0cyV0qucOTgg323NdwBqSO3mwuj0B8VBcrp/0xbR1UnveVfqrjWembhdrpQVdPQwVUcdO+J8ckvN7ycg/igOb1mghknmjijYXPe4NAHEkq4GaMuokGNJ0jT851WHNHaFtoNGaj29kNtVC1ww6WFpkkA/lyMZQG+5O2uislRDnMcVdMyM9GBjOPNnKnq11ptdNaLfT0VODzcQ4u3lxJyXHzkrYoD9N8Ydq4yuBBr6wjhz8mPWK65vFxitdrra2RwAhic4ed3AD0lcePc573Occkkk9pQH5REQBWTybH/WC2jz1f/wBQVbKxeTn/AMQWo/7yp/8AqQHSSIiA565WGuOoqTAJ/qLP+dyq/Yf80/cupb/paoulxgrqW5mlmZAYT+yEgc3O10kLSu0ZqAj/AMRwO8zqNuPegKJtdqmrpdpzSynj8KaU7mtaN539a6b0dLUzaZtL6guMhg4u4loJDSfRhaGl0NNM9nwvdO6YGnIpoohDG4j52DkjzKwmtaxrWtaGtaAAAMAAdAQH1aq/ND7Hd2ngaKcf4Ctqonri5Mt2mLk8uw6aMwRjO8uk3fgMoDlRERAEREAREQBERAEREAREQBERAemlo6qsl5qnhfI/GcNGdynemq/VumpsR2+eWme7MkDgdk+cEcD516NEW8XSWG3tldBE5kk9S+M4kkax2y1gPQOtWodA2gfF1txZ1gVDj70Bmotc2OchlU6SgmP/AJdS0sHodwUqgq6WobtQVEUretjw73ZUGreTyyS0k456sdNzbiyR87nYdjdkHdhc2uc9kjiDsnJ3t3e5AdpZyi4yhrq2CQSRVUzHjg5ryCPuU7sev9VwzbPPd2RMY572SgbmtGSdoYIQHSSLzUVXHW0dLVRghk0TJGg8QHDOCvSgKS5SdPtpX/CEDWtgq3BszQMBk43tf5tobiqVXWWsqRtXpe8RuAOKd0g+tH4Y9y5NQBERAWLyeNIvlrcOmacHsERXSa5y5NnD4doA4eCBU7P1iwfkujUB8RFHb5qqz2GSnjr5ZGOma5zdlhdubu34QEiRaGy6mst950UFWJHRjL2FpY4A9OHdC3yALHLLFDG+SWRrI2jLnOIAA85KyKmeU2huU1TTOfUP7hkYGQtzhjJxvw8fzDgUBoOULWcF4LLfb3k0kbtqSTgJXjhj+UKrV+nscx7muaQ5pIIO4ghflAEREAVi8nB/1htY/nqfxiVdKx+TqM/DtqIG8y1J9DYh+qA6QREQBFHr1qmyWKSKOvqXMfI0ua1rHPJAOM7gtCOUzSRO+qnHnMLvyQE/RQF/KZpJoyKuZ3mELvzwovduVuINcy2W9znHcJJzgDzhrT7ygLhqKiCmgknnlbHFG0ue9xwAB1rmnXWre+GubHTlwoackRA7i9x4vI93mWgvOpL1e3A11Y+RoOWxjwWDsaNy0SAIiIAiIgCIiAIiIAiIgCIiAIiIC2uS52LzH56Wob9zmn81fq5p5OrrS0N/pRUytijcyZge44G1IBgE9G8LpZAfl7Q9jmnOHAg486qx+grxSxCKjuNFUQtJ2Y6qDDgCc+M3KtVEBUHebqH+zrKfQRn8F6abQ93qf2NZJRUlG7HOspWkySAfu7R4Aq1kQH5jjZFGyNjQ1jGhrWjgA0YAX6REBEdd17aHSt0cXAOlj5hnWTLu3ejK5WVocpep4LpWw0FJKH09MSXvHB0p3HHWAFV6AKxdJ2+rr2R0dDBR866KSolfUNLgWtdsNaMcFXSuTkrBFzm6jbyT5v225ASuw6Uu1JeaWtq20MUUEcoDKfOXOkGMnKshEQBVnrrT9fdbla5orY6sgigkZIwSCMhxORvJCsxEBzJW89pe40tVT0VTQVcZyIpTtslYdxwRnI6wugrDe6W+2yCtpzjaGHszvY8cWn8lV3LA9mzZGbPhEznPm8ELByVulirZomSHmpqV0kjDw2mP2WkfigLxXjuNvpblRT0dVGHwyt2XDp8xHUR0FexEBUA0RqCEujbFa6hrSQ2eYHnHtHDaAHHCr/WVqqbXLTR1lBTQzSNLmSUzvAe0biCDwIK6fVHcsB/b2Qf7uc/i1AUyiIgLK0vZ5bjTtioLbSTysiEs8tS7AG24hrW+gKxdNaXulDeoqyrpqOCKGGVrGQOztPkwM46MAKO8lRkjqqyM72yUUb89WJHNH3q6kAREQFd6v03c7rdKCqpaOmqI4oHse2d+yAScg+dVrqrT9XbKETVtnpoA52zHNTSZAfx2Xt3biBxXRyrPlWmLNNwMA+MrGZ7GtJQHOiIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCsHTnKJd7LG2nmaKumGNlkjiHsHU13V5iq+X1AdK27lM0zWBomlkpXnolZlvrNypnTXO21cYkgroJGngWyNP5rjZfoOc3gcIDs01dIDg1MOfrt/VfiW4UEDC+WtgY0dLpGgfiVxttv6yvhc5w3klAdPXLlD0vQNds1hqZB+5C0uz/eOAqg1HyiXi8Nkgg/qlK7ILGHw3j+Z35BV+viAIiIArR5O7/aLZW1L66pFO00jYmlwJDnbe0eAOFVyIDqo670iD8sRehrz+S/DtfaRaM/C7D2Mf8AouWEQHUbeUPSDjj4Ux5zE/HuWV2vdItGfheM9jH/AKLlhEBZPKPqO1Xyptot8zpGwRyB7iwtGXkbhnsX65PdRWy13CU18/MsNLzbXFpIJ29rfjPWq0wviA6tdrjSTRk3mH0Bx/JeY8oWkM4+FB282/HuXLaIDqpmu9IvO68RDta8fkqi5TL3bLvWW00FYydkULw4tB3FzvOAqyRAEX1EBanJxqO12yprW3CobBtwRsje4EjwHEkHGccVa79c6SYcG8wnsDj7guU19wUB1R3+aR/tiP1H/ov0ddaRAz8Mxeq/9FyoiA6kHKDpAux8Kjt5t+PcoDyi6rsd3tFLSUFVz0gqRI4hjmhrWtI4uA45VMogCIvuEB8RF9wUB8REQBERAEREAREQBERAEREAREQFi6btktwpxT0NnpquVkQlnfNIGeM4gBuepShukL8Ru0vbAOo1Dc+9Q7QNyuFFeIG08wayonhhmYWh20wknd1Ywr41LNqOGjgdY4IpZzL+0EmMbGOIyR0oCsptLXqGCeV+lrcGRsc5/wDWASWtGTjBVY2t9I2tmnkphJHGxz2ROO4kkBoJ82VcLteVlDS3G3Xy3zG483I39i1uwGyM8HOCetUQ1zmuyDg/ogLrGkdQHB72bXkjj3Q0D7srUWu01lzfXRUemaEupZjHOHzhuJMnxc9G5TDQusq65PbSXU/t59p9LKGBrZGs3Obu6R0KY22xx2u53WshqC2CsLZHwYGy2UZ2n7XHf1ICnr7YLlbrTUVNXp2higaAC6OcOe0uOyCMecqC2m1RVLXVVXLzdJG4NJHjSO+YwdJUv1vrqpus9Zb6N7fg7LWZ2QTIWHO1k8BkbvMt7yd2yCurIZZGh0VvpmOYwjIM9RlxefOBwQH5odL3meFrqHT1HSxHe11Y7akcOst3kLx3jS1yp6d8lxscDom52qmhdl0Y+cWdIHSpFrnX1bZ7gLfbmxiRjWumle3awXbw0Ds4leuya+tdTp95utzhZXOjnY5gjc3cQQ3cARvQHPkzGxyyMbIHta4gOHBwHSrB0xbZbjAKegs9LUzMiEk8k8gb47iABnsVdHie1W1yd01wprxSsp5sNmpudrGuaCGxA/swCeBcgNidIX4Z/wBVrb5/6w3f2b1UNwiEdTIWwGFpccRk5LCDgt39RXVc1/podQ0tnLTzk1O6Xb6AQdzfSASqd5S7IaO5mpjb+xrAZBgeLMwYeP7w3oDNabHW3Kmc+22KgkgikMO3NKGvc5oGSQe1LxYbjbKCWruGnLf3NGW84YZxtjaOBjHatToLV1XbLjSW+aUdwzznbBaMh8gDQc8cZAVn8pLaw2JmxNsUhmY2sAaC7YLhhwPmI3oCH0WnbzX0lNV0+m7YYZmB8RdMGkNdw2gVHdXWmvtdFB3bZqOn515EUkEu0ct3nOOgq49Cms72qR9TMDHg9z5aGlsDfBbtY4k4yqN1nqyrv9bJFtN7ihmeadoaAccNonic4ygNtpq1T3Kl5q32akqHxRsdPJPIGkukyQBnzBSB2kb6GPzpa2kAHIFS3J7N6xcnFNcaW7CGKb9i6lbNWtc0HZJzzTQeIJByVaYv9OdRmy7B5wUvPbfRnPi/dvQHKFZG1k7iyMsY4ktad5aPm+jgp/pu0zXCmbFQWWlqpWRNknknlDN7ycAZ8wX65RbJ8HXaSSNoEFVmeLHQ7hI37969XJ7qe0Wh9aK+cwh8MTWnZLtotJ6u1AbnvQv+/wD1Ytf/ABLf1X5GkL7tYGlraD1mpbj3qf6Z1F8O1F5dG5jqaCoayncGlpcwtzk5861R13Q0F6vVFdZ2xMglYKctjcS5pHhbWM7wgKRkZTQX2rFRbWNFMJBJTtflhkj3bj1ZVix6Uv8AKxkjdOWrZc0Ob+3AwCMjO9VVfKuKqvl0qaeQujmqpXsdjGWucSNy6Q0Pca64WfarJWvkjmMQLWho2WgY4ICj9YW2qthpYau00tNLJl7XwSbYc0biDjzrzWmy0wZTy1cUtRNOMwUUIJkePnOxwCzavutddtRzU9VI0spqmSCLDQ3DNvG/HFXFoCghdSVN1LBztTM6OMniyGI7DWjqG7egIxDpLUkjG81ZbTSsxuZK4SO9OAVob3pmrpYHPuVlZC3H+2UbttjD1vYOAWa/cp15Nynjtpjhpo3lrC5ge5+N2TtZxnqCsvRuopdRWyYVsDG1EeGytA8CRkgyHY8/SEBznSQwUtxIq4xLHE1zy0HwZABluD1FWrFpW/Twxys03a9h7Q5oM4Bw4ZGd6rvWFvFq1BW0UZPNRu/ZdYjf4Qb6M4V6aAutwuNtqW1krXuppWRMLW7PghgxnHFAU+LZFS3Wo521NE7XMi7ic/wWzSODWkHpYQcgqZnSGoP4atf/ABDf1Ur1rpp1fHHdaFoFxo8SNGMiZsZ2tkjpIxu+5b+03KorNN0tfK5vPyUnOOIGAH4Od3mKA5n1NTPpLo+mloIqWaJoEjIn7bCSMgg9hUeWxutzq7rXTVlU4Omk2dogBo3DA3Ba5AEREAREQBERAEREAREQBERAWRpC3vlrbOKOkkkmjqIqiqlz4Mce0QBhXdqObUUNHCbJTRzTmTDw/GA3HHwiBxXOem9XXDTslQ+nhhl52NrCJQTgNORjBClp5W73/Z9H9z/8yAktLpfU1fLcrpcq91vqpcB0cTGPDmRNGDxKqe1x09XW1MtVTvqJHSMZHDH4HOSynA4cFMn8rV5cx7Tb6PwgR+/0+lVvQ3CehrYKqINLopmShrvFLmHIz5kB0Xo/Ts1NI+5V1NzNQW8zTQHf3PC3djtd0lSGkudBevhWgfG9kkLnwVEEngv2HDAdu6HDgqZdytX48KKiH915/wCpaKh13c6K9XK6spqd01Y0Newh2yMYxjBz0IDc3zSstpjrxUWmSelh+KrmPDSIz4u03pLeBXt5KbvFDcaygldh1TGwxk9Los+D9xWjvfKLdrzbZ6GakpWRy7O05odtbjndk+ZQGOSSKRskby17SC1wOCCOkIDoDVmkKupus9xprfFWxTMYJYS/m5GvZu2mHzjiFpDpS/m2zujs1LBTsbnuNx25puvwhwOOC0tv5VL/AE0bY6mGCqwMBzgWP9JbuP3LDdOU/UFdC+GFsNIxwwTECX4PU5x3ehAR22UltdXTA081SNqNkEA8FzpJDgNd5xwXQOjrNPb6OoqqyHm62rk2pWfRsZ4LGbuoLmWhr56KrgqYyHOjmZLh28Ocw7QyrHHK1fd+aGiP914/6kBOqnlIpKetlpJLFXtqI5BHsHZ2tp3ijHEZ6FINV2eS+2CSKKMipaGzQNduIe3fsntBIK5xrdR11ZfTd3sjbPz0UuwAdjMWNncTnoUzHK1f876Oix9V/wDmQEGvdO2juD4RRy0kseBLC521sP4+CeorojT9bDq3SWxUkl0kTqeoI47bR4w854rnG83WovNzqa+djGyTOBc1gIaMDG7OepbnTOsblpttSymjiljmILmSZwHDpGCEBdeuLnDYNKmlpzsPljbTQAcQ0DDj9yorT1PSzTHnKOSqmdJHHTwMONp7snefQvupdT12o6qGepZGwRR7DGR52Rk5J3k7ytXbLlUWytpqqENc6GVsoa7e0ubwzhAdN6TtNRa7XJNVxnu6qe6aoaN5B/dYOwLQu5SKZtY+lNguAqWyCIx+CX7R6Mcc+ZQYcrV9AwaGiPof/mUNfqWvff3XnZjE7pxMWYOxtAYG7OfxQHQ2tLHLe7NswR7VTA9s0LDu2jjDmHtH4rnmpo6Nl87nlpZqWNjiJ4XO2nMLAS5oPnwpiOVq/wCd9FREfVf/AJlX9xutTcbnVXCQNZLO9znBgw0bQwQM53IDoLk9op4KS41D6OSniqZIn07XnJMQjABVXa+t81Nd7pUVNFK0VFSDTT58BzWt8IYXoouVC80VDSUkVFSFsELI2ucHkkMGMnBCj+pdYXDUkdKyqggZzDnFpjDhnaxxyT1IDS2plI6r2qpjnwxsc9zGnBdsjcM+crpXQ9HV0dncKmldA6SpfK1jjkhjsbPDzLltkj2ElpxkEHsKs2PlWvsUUcbaOjwxjWglr/3Rj5yA0usrfNb7pWyVFHLFLUV00sEpPgvi2ugdYKtrkvucNVp7uTaHPUsr9pvTsvO0D2b8KlNSapuGpJKV9XHCwwNc1ojBAO0cnOSepam23OutdWyqo53RTNzhw6jxBB4jzIC17joisoqyYMsfwjTOkc+GSKTYkaHHOxIOnHWrB0hZau2U9ZUVrWR1FU9rjEw5bDGwYazPWOlVlS8rd2jjDam3U0zh++0ujz2jetFfeUS/XiCSnBjpqd4w5kQO04dRcd+OxAYtRV1vu2sbhUSOc+ka5wy04LmxNwMduFcHJ/Q1lLR3GSoon07KiobLCx5yTGWDC5pa9zM7JIyCD2FWdByq3qCnhhbQ0eI42sBIfv2Rj5yAndHfqyy6srbdcmPZR11Q59FI47mknHH5rj9xVhVTQyiqQ1oGIn4AGBwK5Y1Jqmu1HNSy1UMMboGFreaBGcnOTklSGm5Tr9Bbm0boqeUti5sSvDtvGMZODglAVyeK+L6V8QBERAEREAREQBERAEREAREQBERAEREAREQBEW9slrprlJUMlnfFzbNvaDdoYzvytZSUY5fA3hCU5KMeO/8AjeaJFJ6axQOoKioqZZoXxSBpYWcckAYz0nK2r9IU0fdT5K8iONpIIbkjZGTtfkvJ3FJNLLy3hbv++89laV5RcklhLL3pYW/yIGinDdM2wzU8RuEgfMwOYwsGTw8/nX2LTFulfO1lwkdzRaHbLW7i4Hcd/EYWOk0sZ/FwT4Pr4G3Q6zePw5y16y/LvZBkU2ZpejlhDoq55e58jGZj8FxZnf1gbuK01stDKq4VFHPK6N0QfktAIyw4PoW6r02pvL/Dx3fsaO2qp01hfj9Xf8M/c0SKSw2KF1PcZJp5YjTb27UeA9pBwd+/fhZK3ThprbFWNkeTssdKxwALdodG/oT09NSUdbe5aq8cZ+4VtWcHJR3KOs/DOPsRZFOJ9J00cMczayTZLmbQLBnD+rB471hm01SMFeI6yR8lOG+DzfFzxkN3HiVrG5oyxhvl/wB95tKyuI5zFdfWurL+xDUUrp7DROoqSeorJIXSyGMsLODhnd+HSvVNpu2RVLKc3J3OvyGM2Rna6M79wKO4pptfi4Pqf5dzMK0rNJ/h3uK3yWfxLKIUi3l5tdLb6iKCGr515A2wRjYJ4ZI3b1t5NLUokjp23JvdPg7bHNwPC+b1ndwWzrU0ott4azwfA1VvVlKcUk3GSi964vqRDEU1GlqWSVvM1z3wtlMUjtjBa8DozxGdySaUggpzNNXHHOBo2GZyHODRxPHetek0spZefdhm/Q6+q5Yjhdesv+9ZCkU9k0Y1skRbVuMZeWvJaARgE5G/fw3rXd7TW3R1G+oc1roXSRybI3434cM7lhXVFrKl+XW4PgZdjcp4cF6+pxXF7yJoppLpijp+5Gz1z2PnOy0bAI28cM54LUXu1U1sfDGyr52VwJezGNjqyR19S3hWpzaUW96yt3UedS2q04uUkliWq96zniaJERep4BERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBbK33WstrpHU7wNsAOyMjctaiw0msNJr3MzGUotOLafvRIX6ou8jXh0rMOI/cG7HUh1Pdi+R/OR5ezZI2Bjdk5x171HkWNSHYjyN/S1e8lzZvXaiub56eYyM24Q4NOwODhg561+odSXSF872PZmV+24bAxnGNy0CLHo6bWNSOPAelqp59JLPvyySd9d5AcBOwEknOwMgk53fktXQXOroJ3zQvG29pDi4bWcnPSteizqQw1qrD4rHEx6SplPXllcHngSJ+qLu/nAZWYc0A+AN2M8PPvR2qLu5zyZWeE3ZI2Bjt7VHUWPR0+xHkZ9LV7yXNkjdqm8OYG88wYI3hgycI3VN3a+R4kjy/GfAHQo4iejp8NSPIemrZz6WefFm9m1Dc5o2sfIwhsgePAGQQdr3rDLe6+WuhrHOZz0Yw0hoA6eI6eK1CLOpDsrr6veY9JU7cuKfH3HqrKyatqHzzEbbsZwMDcMdC2J1BdHUraczjZbs4dsjb8HePC8y0iI4xeMxW7hu4GFOaziTWeO/iSJ2qLw4w/t2jmznAYAHHGMu6+K/A1JdQJAJGYdJt+INx83VwWgRY9HT7EeRt6Wr3kubN/3yXTul1RzjNp0fNkbA2cZzwX7bqi7tLDzrCW7W8sBztdajqLOpDsR5D0tXvJc2biW+XGV1M58oJgeXsOyOJPuXjrq6evnM05aXkAbgAN3YvGiyoxXBI1cpNYcm1nPEIiLJqEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAf//Z');
