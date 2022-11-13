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
            $redirect = 'employee-portal.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'employee-portal.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/png');
    header('Content-Length: 3696');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAK4AAABCCAQAAABkgyWcAAAON0lEQVR4Ae3aBXhUxxYA4GMz9971LKGhafCgQRPcXett6sWt7jivSN2QB3VDqri7uxV3KW51994XWBbJSzYbqezH/p9AcGbPd2aOQFTUX8TGVAYDFETloXhoTA/zu2oZ7cVDuB830od8J3ggKhfi+Dp6BTfgCTrEK3i0PGHcb3ZQbY171XDZSLtUG4jKgULQDWfiYdqtPjC7OCvFuiGdVLZS6SQ9DVHh8/j5TpzO+9QC6e5ITjQgBHcd/FVqQ1Q4rOr8Ku3ipepBbzEbIQwym4ZDaFGJBt/C82mrvKSSIRscb8BoiMpcnFN149WyQLXxeyCb9AzqBRmLSrCMu2StTDAb2QjZ5o6lQ6oiZCAK4VZeI5Ot2jZCjkh/ngcIUempGjifVxqtbIQccpeiL6QWXIqcBVQ1nao68o0qOf0rNdZNL9Fh6Z5oQI4VMXkdDYNLjINb0su4no7QMT6o9vFeOkgH6Hmw4CxVCTfxIldZyBX1Bm4CJ1w6rEIykDbIGjVE3+gq685XxOwvKcrjd1zNn9IbcIa0oBMyqIFArqiH8CujJFwq3PnkadmiXrNq9Cf4P64kOmkWBZD6fFBfB7mkr8GfpDlEPr/HrM9v4FTH5RAC3yZb1Zve4pk3C2WxquYswPOsOpBLVm36jjtDZNPlVBtnWz0WbfyB7gcTMhNLH8guZzMIicfQICvBKA655EimL+k/ELkc8fQgT+FXpYnUo608VZeGTElN3C2T4i6DLKi3cDfkmq8Sn4IhEKlUNX6N19BgoxR4aCCuV+0gBL6TvjH7Z/1WTWXahLY/AdKxajjjIGzeZD4Voc+vBsJX8wxeRz3Bf/rYeJW86MoPIdCD+J15B4TBqiYn9TRjcLqPAXmaLgthctfmz+k5iDzxDu6AK3EFdwADQBryHPWxrgChPUxfmk0gLOpj17AEi1cbgy+KXhduNUpAWIwr6SvqDZEmxkv340ZcwNcHrjH6iJcYrSEL3IU+s2pCWBxV+WtPIoDrMnqPjuAG6g4a4MzX+6EohEF1pq+4I0QWbww9hltxpgTu+gQajlvooazLUmlGp6zaYaebtBwOZ+kK9Ij0TbAgjVGcjlhXQBb6kzxLJ6R5hB2s9KDtOFUaBL6k/+AuHu6IhyxZV9B+fQ2EST9JuzPu1KrqdNQbAyG58vNU2qTLRFQqkEdpG06WunCa4s64nSeryhAW/lg/AWFSbfB7lQIZ4utxf5KGEKw6tJs/8vkiqfN/P23BqWcPFvhqXMOrjdYQJmkmq4KJQ56SxhCCcRX9wKmQCXkE14VKJ9KLTtEjETSrUp1pI86ShhBQE2fjLtU1RUG4kKdbN0MA4jZoG/Jov+MukCl+DSdBJlxJsoi2R85sl/XtvA4XSgsIKEGj8ZAM8vghO/LJ8mAGTTTwELTLPCHQ19weQuCFGb9bU1kexi/4zYhJB3wNLseVfAMgnOanp/Awv20WhewqakwOlgIpDj7ObTJp1DxOR7klhJCiaD9nEPfOCrwYD/H1EBmkEc7HTdwOFJxG3B538gxVFXLALKon2hjsmNEpfV1GN7yM5+VZ9Vv9CfSVqgIXSdLSk76kUc4CEAkcKTwJd9FDwa49t8TFvIavhpxKkDnBVrdZGL9T1SEdoxVtlheLmJAFswGd9PjTLYWswr18DUQCbzF+iz6lJ9yxENAKF9FudXeSztUYZ5VZ+Ox3q9BXVsLFkzN+izZKCwiDeoDXwjk+n7xAX9Iwjz8idq7kCfqUXjeLQEAjWIKfy5PufJBLdK9KCU4EaA/o83lWdaRdPMIbA2Hh9/iV4O/UN9AeXid1I6K/pTrTDpwULArMIjQGf+CR3uKQNwTOkH44FSAYxTKP10pDCFN/ok36VkjjKsuT6LPgLPhfThrzUlx2rhZ3UA88xQusWpDneAL1Ojs/G0yHpG8RM1sN+YPOuOKXqRfpcx5nlIiMLDuGtqiOwBBwJW6hnfpmGyHPpSjZoCrZqNrTdhyvS0O2GM34iKuv3i/zpGFE9GSpD+2mZ87lvEQcS8elT34X/CVcZelLo6uezDOlEWSb8QrYssnTysZISAbNcD1Mh/IQYEAPPKpGeYvCX0Z6oS3zjVY52ZbRvfF39Xa8A/5WNtqYaMR4HZcbiaqyVdvbyGjNN8ENUDvWHWob+zXcDW0gqD6u5hVmA/jLpLLqgF/KeBuzvgEubhfaaF0nC/FP2ZzFg9DHZ8sTqyBQ+P+uBMsb44g3SqhKUtdorW9Td0tveY7f4LE8l1fTDjpMX+AP+Bv+gb/Rj/gVHsXtPD/TrWBpgdtpNBQ4t1Y5gvaoexoI/GWkrjFUJqNtNobQ/Py+fg68518IjtZqrv7Ym5z2+5+EkGQAvRbIzbIYLnA69rwxVkGdJLW4Nd9BD9AAGsajeQov5LW0jfbRYTpOJ+gYHab9tIM+4eU8hyfyKB5Bz1Bvupfb8LXS2Kqmy5qF3bHxjv5kY2aXyjO0j4NdKoF7aKd627oC/jJmYX6HZxolzXp0LNYdumfM83UfOCvBrzrxUlkS6CbIIqt26BG6PhpXzkZvI/5CluprqRv151d5Ai+hLXSATtDn9Bkdp/20SZbIZPW2PC+9VFd9C7eSeqqKLmMVcuX3exKN4MHlaJOQ5/JMq1DwpHERrpSmkAtST5eDELgTbaMnwASgR3kKhERPqAU22ljMazTnt3kfL+WbQSCN2ZiPJblsDP7HP+ZEw+9xxnmLe1OMq9QDxiv0Bdhqg56Fv9Mfso3X8hKezmNoKPWlrny91NcVrELemEQj+GfkOV0GN8lAIDhNqBevVZ1SOf3mtiu/WUxVNutzS6uOUQI8kCkrAcfSt1IfMkV3y5TgKJynGQ9ASHw77zffVXN5L+2g4Rdu0vJYsCnt6PQMXojrcZvaTfvxEB2iA7JLNsoysNE2XvDcSb/Jkfz1UhT83YwSuCrY49dJPEE/d+YJb5rFpCF3pCd4JM/iVbSFdtBOtYv2wQH+lPfRPp6ScfL2+XArfm+EaBLqJDXqgsHmUUcVyIKqDp3gDlW1iHlxUPA3zpHqdXqDRtCL1J8e4rbcWlUyEp1x8Q4bk1x0yrjnzJ7CKW+VYMkB5xmQMQSVRzuFvCrwuoyPlX7wg+zUN+mneKKskLWymMeqIc5HXLeYDXQ5q6DHX8GZYIEV54yP9VZxPEkHLr6/dXm+0kb1Lh5yJIfuCNMGqeXxJ1g1LbM9/5BWXaUYLaCRqgwC2UD/lTk2QjrcCuLgDDVCfWxjjFfWG1dDGqMkLqKBwUPGifwhYAbLq4/jZl6VJ+11VREP6+76ejWYTqBNe3iifkq1N+v6Cp/+7EO/9WTH+Ue/VVCelL6OeGMwfZJl49xNb+EpPMT71SH8Qe1McdBjvIDX8l5eqcuHvzWJJ63b4EImWNQPbVUR0vAN/LmVAMBv6acDtwAdkKcD0eosj7vwO2mR7mlXh0fyPj3e0YWOQXLo6aFRitvQ6zhRdc5ifuurrNajzcNdSdmp6c0OtAfccIbqoicaTZM0v8OTw/vMHZerZGdj9RLa7muC/7kiPjUGt4EBYeFr8YcL11FVMr/qLUpH1FBIYxbDL3WfMztoWxMsAKMVfutpY6ON1hXG3XRCtjsrXBivxgOyDo/zy66yNtoou6w6GW4O16WH+X1eR3toH66n0eoBlQyhGVfTCXVf9m5Lqw79wDcE/mH8gRoc77ASZJG8CNnCndTmC1ecjdb4HcRAWGgkz4fzktVSd2l3Lf7dUwLS0BD6xuczStHX+hYA83b6BW2Za4yT2bKMvgHb09rGBuKOtWoYj/JcOixrqRcUDIYNHncWuGgvoxE9gUvwKB3lFfyK6qRquPKHtXeghtBRTgXI5tGeoh6BDCfLdSqA0ZQ2q/YAcBndYxWCMPFs6g4XUMNwBRAEIITCuJM7QJDByx0tgVRF+j5fGXesWRjGqlcAeATanmryLJ7Ut0kLuImvV1Vi3d5iNEp2yHrZTgdoL8+kh3XZ86Fl1uNj0DhQpelydD/PoCN8FOdLX6uOx5+NEOSraRfOzV6brj9JdzpGXSEN3SdrXUkA6kFepaqcyXMf0jf6egiIUXdDPGTKU4KPBmYRwW4xfnk+i9NAvj5UWuGVF8waiuJvsl7fDEADeL+sVcn0mhqjKkMBepan8vuqIqSXzLcbrXTZ9M0oVY1OWtcVivG0UsNpK57iNfopV8NCMZBNIk/gHroHKHtb4jyPl5+dIHSQla7LUln9l0fFeIH047pv7OWyEBIBQLtjdXe0zTtSNSiwIAPyEk+46OueMvSicfl9kCmfz5UE55n0AQ0GZ2D7RpcH0DfSr2ZnyC6NK/BPmS+b5BMaxW3NYjktLZQ0Aj9kQ36X9MdD0i9JB0oFHufzWQn6Q+PB05FkjLBubGkY4+lhSEOv0EH8Cmz+Wq+RhbQNZ7nKAV28YYYnpMXFxceFMwRf4Tgn5Jxyl8zBwaBZRFfQ5R2XA/2tTTbrFtrGi1XK+Zmr+apxtZ5u1gOQJmqUSgbQvdW9gZyMNv7MC3Vf40p3aV9howWeoCNmXbgA3YVbQMGlzkazkSymPXxRUexoibYsyl+gmFc/y2PPzoU1gLsUD1er9eMXR451hVEKGM4jnsc3wKXOqsZT6DD1v3AW259iyskW+dFc7XhXraER4OAu0sNTw7hKvy2rdPfS+cLI+PUu8Yh1VuQP6ZgMTb9TQOv5gPFQUmK+MlAhUK3To3iEDvJCujfLd2qUjb6Kegwdpzf//6Hm8dMLGZSpDvBAVNZUVZUWsfQOJEFU3klloxlOoQM0QpeGqNzSpcEf3DukHrJc1krPvBjvRIm8gL/LJP8NxmPqQ1nKr0kT0BCVJ1iewLW8So+SnlIfnBAVFRUVlff+B/wuhVo9mSnaAAAAAElFTkSuQmCC');
