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

    header('Content-Type: image/png');
    header('Content-Length: 3884');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAALQAAABFCAQAAABJCgQFAAAO80lEQVR4Ae3cBXRUZ/YA8Gvf994biUxjQHB3SYu7W73I/uvu7orsBq+3uLtuSqCCuzsEJ4ZbG6rr+/4nHiSTGUK6Z3bndwwP786n994XCPpdBdkIQSVIzArcTd5UU2QtJuF+3I4J9JpRDW6UIKMaP0az8DD+gGdpNy9SY4yheoCOVxN4O53jyY7SUCxBDLdQPO6k7+mwmqYedzQMC7Px8kXEWV8WY5qqD0HXR9eiAbSLj/M36nlXnTjlbcWW+bgHTAjyT1iYeoBX0HFOdN5bOcqnv1Ge/iLtwR/B1ZiG0xHeKq9Y5cBnc1klw6MQ5BvViKfSMZ5mtu5P4Je2pkqHHhBUNEecmi0HdHxoRbgOzrp0xhkDQd7pGjxVDuj3XJFwnfhLXABBXt0EwylFD3NGF+eDogx1CwSvy4VfmPlePMaJrlpQDG2F1/ME+B8WKZ3oHZ7BG2gfbqLp9LRZHgpwlML5dFLfV9y8hR6Ex903wf+i8FC+HxdTOqXwWp6mRjgGmn/kcXSAfuBekEM1xVT+JrwcFJPujX+TVvC/xxktA+SArNNvOBqWdhQcrXHKegt/NCsAAEgHuiDvFz8Hp27GX+k5+G9SW0MEUFF/Rr1MB9VMq6mNhVyVN9GTAKo+pVr3QLF5ytJJ+uK/aCEIbaTfxCRM13XAC3ULb5JVVlPwQkZIP1A8VbpCsYV4aA8mthUIfFYs36v7Ox+Q5WDjEekMBIWi1+ii/qAXg1fqUTwQ4XZFQrFVCZF1uCXCDYGtrUhXnskr6HWjMvemo/JpiAcKFRqO8/mksxMUyXgSbV0Hiq26W63AJIiGQBbiUc/xRlzF98cpsxLO5/XSFrwwK+EetS2mAvhAzQTbfASu5NB9/BvNagXut8pA4DIrymA6gInSGaC0gwbRbvUCKPBC18R0TqjuBh9ERcsZc4xsifXAZaQVLwafxXpkHe50lIJApevwWEym6dmXWX6MdvDnRT5ONTzJ433dkOR9c5NN9JHaGtK4igF5+EFcBj7yxMpOXBuwFxTViGZgKo3WNQEApCuulcWOOChKaUxRI309Dbui6HvrLgBAeotOUCrNzC2rqpdxic9ZumReEO2EQKRu4bmYSp+YlbJ+1hC/ot3ct+jwxVq8WU3y/dKhJuImkNy/TE/SKLMNZJF4TAQfGN3oAn0CDIFHxWUFeURONaMcjaFU6ecJAR/wSFkWp8BH1t30W2EFVJrE04tOTckrdEk9C4FH1eeZWUEuC5lC6QNM52lGZfCJdOFjrijwkbMB/UzPQCFwGX1YVBWRp9MJ6RCIqfZJlEaf5Ixk4UfwMK/2PTlTxeBtjjsgi1VW3gGvQivRKRpZ+FilA/QyeGE1pf282iwPgcWswF9SGo0yK0EW7oZb6KC+158Uj75XLc/983w3pgB7rVAfo7kghV/x6QLfCYWIU/pdyqAhtTUEEmeMDKFUmqprQraGuAhPyjv+XmV5jnk/5KCnIR00FMJdg5JpDhhQKHc1+lU1LHR520Dp3D3AuiXoHUrGP6s4yFaGRuI5Hm2VBb/J4vA6kMN6FQsNtNmaTtMXwOCF0RUvXSv7EafkDfyJZwdW0dWkZ/AQrsi7TBv0Mp7grx2Nrq84pRe5q0EO/TYdu3YyyXyCzhZ9TjBewUPAcAVnfV6HZ/m+gKrZ6T64G7flr4PcHbfzdqMnXDdZdFNNyCEf45ZrdhtNpH3SHIqkpmDClXlteZt+wnlWWQgcZnteg4f58dzJLR1wGR1TzxZvc+HFRjfIgQk0F65gdKe9PCk03JdhIDvoHSjAasZb8QT3hcDhqi3z6Ti9Fx4K2drDCvpehhU/Hyxv09t5gdpIA6AAR2meTId1b593jnNmx/yEq3xEP/N4Z3TgBDlKPqaTNDJ3+ukamIB/4znuGnAjhKsmuSdqSslflPqTepxSaLLvG5jjZrqQ/adt1HdTMu03OkOgiFPqGTyGC1UDyOamD/An3mi2LYnEKp01K+UGjVdREvcAP6gnaUfW5ldPEukn+WOkCwKF2YE34eb8qhzfhYcpTT3Ui6EEGD1pLzCA+yb5iM7IEL9P5FNlRJVI63O6xIt0PQgUYRXUNDqinslL9tTARMyQ+NBwKCF6MI+x0XyADuAi1cD/E5HsUXt0qlputgughgB6DVNpZN766ID38aIscNUsyaMjb6S9OoG/k45wHRw98d943LrHRggU0gw340ZoAbk64R7aY/Qo2UdwNsC/yXbjtuvbSYynKYOSwir83veKOBXpckWGVXDVsZob3fleeFa/afaTYfQlfEwveqkqxVoyGE/S66AgWzSNx1P6zVgLSpTVC5MxI7YMFMXgx6TN5Q/r6K6/5RT8t6OorTOK3gPO3mp9WwBtrGKEhzpjjMq6nrQwuum+6il5S4bwGJ7D3/FGSqI0Ok8/49/w32ijjf/AX/EipeFeXMMJamyhiWLVCLfhSl27QIfmEZ5jVirpkoEab8bjD2o2FMEqxyv0AHDkB8LoopfIOneLUuXV7vDQoloYaTIAQOjNnJ7/kpuNFcwQj1XOWddspW9Xj8jrNITH4nxexlsoiZLpJJ2lC3QRz9MpSqYk3sqreBHP5DGZLTzqZfWY7sPdpbWK0zWscq7ISFecKmLuq6fplLwNDNka4wraZ9wGJcoVyZ/zdmlvIx1RDxV1nuftxgv5FWz1MG+gXep5cACoZ3iu97HpbiEXI1vaGN6KT9JF8wl6hz7nebyG9tFxukg/0c+UQWfoKG+XpWqW+kx/oJ7VfY2u0lzXM6pYse6I7BAWdwE1eDztz8snOGgIHqd4TwgURyjfCzeBF9yd9tMkiAawytDJoioy9JFalfmgVUKMzjSB02kPPQXO7CYdStJv2JgTBmwr3YzMLiazvLOuq42+T/rpWfQL2JxurMe/ky37eBMv5wU8TobQq/wAd1dNjOqOUhHutlKyO1EYLuGE3MK7asJr1XSj6tXrtzvCrKQamG24m9nKqAah4AXfgcm0F8KhUNxN1ucexfgu2d2fwCu+l09aM9QqTqM0niKdQOWf98GmDN5oLFUrcSsepGQ+jqfxHJ3LnO6yR9aDjbbxadidfJZ/89z9hIL/CBd+Q4Mhm6bXeU3Ovc9pVJb2/BjF81ReytvpIKVQmjpOp+Ecn+WTlM5LC+s84jvB5q0RpaFwHlmQ31PBU9RkX85D8DQ8Kq2unGmYqPeak2g6T6Fx8okMpJf5Ae6mGhhVXFGxVuYcoAzjNYDQipyR13vqAQW5EH4HiqfLW9nrmNkG16FtPqr7qI/5W9olmUv/12qs633HI0Y3xy1GFWdMufDwUAiN9USUdjd3DqbT0gUKYuloVogoRRf4q7Aw8KYuHbWaZPY921gunM5br4DLEacaQM2wML/fO/k1tBFcRVrnhlJ9Lott7MWyQr8BmbQMw5UQAln4HtxhtrpWDYnewG383Q26yjtK4w/ykYoz75NvyUabjspC9ZHxtNkxpGp4aFErlnxN70Eeaa9G695hFdQengAavDNpLP6M6bJX7ZVDaIfdoRrxejpM6ZRObwKBz2io7L3i/8kgNAt/gggAAOM2/jG0MoC8Kwk2AoSG8xLepmvn3CdfBxvXhXiuODI25JGcplab8XgJ6oBXvdiswL1pGH2i64I3VllnV3Mm2nRKPeaq5c+J2V2Dvlc3537+aqQab8WalWS3DACf6Jp8u3rUHAz/VKuzvi5GO2MiHT3pN3oGfGVgGsVDAdJJ3nXVRtt4BQDALI8X9CAAaUknrXIAzmjcqOfalJ1mMMagrSYUHLMhHvN+WU3f8zx388zZxseu3acd4VaN1KP8JS+nJDqDqbhUBusaRXYKyTLe6u+9KjxU9tGU3K1PVpsP2mh0lUP8IPglwk2XQrpBAbwEEnzvjsJ/q8aQh+8xVjhjnK/R+dpZ4ePx9HN0VGg4HpM/ZoaW9oEtic63jQ9lEZ8BW5bamJ2WDS+ne/NMPkkn6Mvcsem4nX42y1/+v5UW9C4uxZOUQUc5UQbwHUa1CiYUzWpGSbjE32a/ek5ehluy1jklI+SbrMn5BiVJMwDw+NO5rO+ko1WMyzqqD9GfwEf0Kh4FBTmM6rI7OgqABsuRrABasFmNB5BP0Y6qLC0pnWfLQPiCvpB3pbOzAc+iE8YoNVYWyT46Qwd5jNElwp1fVeez9Eze5ag6PcUL6RReop3yib4ztGKc8mM0yXC6KP1A+fsiL2/jFVmn5Eheokb3YtA8ib/LvN3zH3APHc77T2hdEwi8kIU0AgrQvfDH/FHEj1ux4AXNpn6Q731O0++bFaEMHrO+5IXOurjSeiHCLe1xmyyhw9T/6j4pmswzJZ7/oGvFqcuXVEpSz2eeWcwO8hHtpQw6ZIx19bqO9htpgftwh7TwN5WiXqDTNBQ0AHhwkx6Q9erEUhkKAE71obxl/R+vzA2ufIq/eit4hVbmi5dlBQW30bP5ixr+wN5up2g8U7CdjB/Gv9M0sAAgDhdzbwD5hP6VVT/Xuo5fhbcQ3IO27qe/Uil0CpfTa6r+9b7loiWeHwcD/KLr8XLZ7WoDmZBGSz8Aq7ms1L0AjMp6kuPWZpZaBXcAANNQPYBOg23OMuOpPw3nXnAVGo5roIBIl/kYEORSxksQA77TV25IRjX9Xkwk+M9F79AQGaSekZbg+d1flZAhdJ4+yt2lrXJ6so3mE3phZv3Q6KqnuGpHuI0F9FrWI/YAG2z8B+2XRGOo2U+WoC1/1rUv31DxLPeBoHy1tfk4pfAmaQl5rDKcIkvUyDjVn3R/ngChALqGtAYA5DvkAO0wXnfVyd3oejH1o5GXZzT4QTwAJgTlNc7cITsomR+7fJUyHwJbjsQ2CblfNtKXkS6rjI0ANrrulhVqWdidRXd8yEDuBkF5jTOr6bS8d9nVmMxW5p841THPNVNN52l8T9aV4Df9rcyXHbxU3+5jFkxBUE4W92s8Lx9f+YKYoxT9ghtcdQrmZ8PC6AUYRQOlOfglGOTmRiJdpLFGFbgaq5tBQVBxSTv+ms7TBF0TgkpGtNN1D6+kdPrEqApBN5J0kTZ53zJyGO2VTepFVxQE3Vj8Gdh0MaSf9Zl8J2tkhDQDgqAbj++hOZigPlWPqwYg8J8XFBQUFPT/N73bP38Ep1kAAAAASUVORK5CYII=');
