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

    header('Content-Type: image/jpeg');
    header('Content-Length: 19335');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAUFBQUFBQYGBgYICQgJCAwLCgoLDBINDg0ODRIbERQRERQRGxgdGBYYHRgrIh4eIisyKigqMjw2NjxMSExkZIYBBQUFBQUFBgYGBggJCAkIDAsKCgsMEg0ODQ4NEhsRFBERFBEbGB0YFhgdGCsiHh4iKzIqKCoyPDY2PExITGRkhv/AABEIAVwBXAMBIgACEQEDEQH/xADLAAEAAgEFAQAAAAAAAAAAAAAABwgGAQMEBQkCEAABAwMBBAMGEQoDBgQHAAABAAIDBAURBgcSITETQVEUFyJhcZEIMjZCUlRVdIGToaKxssHC0RUWIzM1VmJyktJTc4IkNENFV2MYN4OUJSYnRKOz4QEBAAIDAQEAAAAAAAAAAAAAAAUHAwQGAgERAAEDAgEGCQkHBAMBAQAAAAEAAgMEEQUSFiExUpIGExQ1QVFxwdEiU1RhcnOBkbEyNHSTobLhFSNCYyQzgmKi/9oADAMBAAIRAxEAPwCmSIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIsu0XpkapvIo3ymOFkZlmc3026DjAz1klY5pY4InyyGzWi5KzU8EtVNHBE273uDWj1lYiitM3Zdo0NANJMfGZ3ZPmWvev0b7Sm+PeoTOOg2Zt0eK6bM3Ftun3j4KrCK0/ev0b7Sm+Penev0b7Sm+PemcdBszbo8UzNxXbp94+CqwitP3r9G+0pvj3p3r9G+0pvj3pnHQbM26PFMzcV26fePgqsIrT96/RvtKb496d6/RvtKb496Zx0GzNujxTM3Fdun3j4KrCK0/ev0b7Sm+Penev0b7Sm+PemcdBszbo8UzNxXbp94+CqwitP3r9G+0pvj3p3r9G+0pvj3pnHQbM26PFMzcV26fePgqsIrT96/RvtKb496d6/RvtKb496Zx0GzNujxTM3Fdun3j4KrCK0/ev0b7Sm+Penev0b7Sm+PemcdBszbo8UzNxXbp94+CqwitP3r9G+0pvj3p3r9G+0pvj3pnHQbM26PFMzcV26fePgqsIrT96/RvtKb496d6/RvtKb496Zx0GzNujxTM3Fdun3j4KrCK0/ev0b7Sm+Penev0b7Sm+PemcdBszbo8UzNxXbp94+CqwitP3r9G+0pvj3p3r9G+0pvj3pnHQbM26PFMzcV26fePgqsIrT96/RvtKb496d6/RvtKb496Zx0GzNujxTM3Fdun3j4KrCK0/ev0b7Sm+Penev0b7Sm+PemcdBszbo8UzNxXbp94+CqwitP3r9G+0pvj3p3r9G+0pvj3pnHQbM26PFMzcV26fePgqsIrT96/RvtKb496wnXGze1Wy0TXS1GSM04Bkie7fDmk4yCeIIyssGPUM8rIhxjS4gAuGi57CsFTwUxSlgkncYXNY0ucGuN7DXrAUHItStFNLmkREREREREREREREREUu7HP29cPeJ+u1REpd2Oft64e8T9dqjcX5tqvY71M8H+eaL3ncVYtEXb6Jpbfqu73ugc+ZotrYRK9mADJMCQ0ZzyA4rgqWknrJeKhbd1rnoAHrVr19fS4bBx1S/JbewsLknqAXUIpAl2e3ATPEdZT9ED4LnbwcR4wAtt2iBCM1F6oo/KfxwtoYNiZJHJnfMeK0DwjwUNBNY3SL/ZcT9FgaLMJbJpSkGazWNsj8s0TfrPXWyVuyulOKjXFJ/plYfqgrM3AcTdriaO1wWB3CvBG6p3O7GO7wuhWhIHMhZvpm67KLhdBS27UNLXVRjJbFK7DTjmW7zWgnxKQpKvSFEcSVNngx7KSFn0kLbi4NVLm3kmYw31DyvBR0/DWiY60NPJILayQ3xUDjjy4rebTzv9JDI7yNJU5Q6i0tI4MpbjRTO7KciY/wD495d/DNHMzejzjxtLfkIC2W8GB/lV/Jn8rTdw4d/jQD4yfwq7Mtlzf6ShqT5InfguU3T99eN4Wypx/IQrCZPaiyjgzT/5VEh7AAsDuG1Wfs0kI7ST4KttTQ1tGf8AaaWaL+dhaPOVxVZiWOOeN0crGvY4YLXDIPwFYyzRenmPc/uVzsnO657sDxDxLVn4Myhw4idpb05egj5XW9S8NYCx3KqZ7XDVxekH52soNJATIKsNBYrNTfqrfTg9pYHHzuyvmqsFmrGls1BBx9c1oY7ztwvObM+T94jyuqxt816z2pcu3JJcnryhf5KvaLPdQaKloGOqreXywNGXxni9g7R2j5VgbWue5rWgkkgADrJUFVUlRRy8VMyx6D0HsK6mhxGkxGDjqeQOb0g6C09RHQtEWbRaCvkkbXOdTxkjO655yPLgFfZ2f3kj9dS/1O/BZxhWIkA8lk+S1jj2DgkGui0eu66X82bwLb+Uu5x0O5v43vD3fZbvYugU/XG21VVpistcUjW1MtskpmPJIaJHRFgORxwCoypNnl/ipKeOeppHSthY2Rwe45cBgnl1lSdfgUkTYTSte8lvljRoPWoTCeFMVRJUtrpIogHXjcLi7T0dOpYcizrvf3n/AB6X+p34LTvf3n/Gpf6nfgo3+k4l6K9TX9fwb06L9VgyLvLppy72hvSVNP8Aos46RhDm/Djl8K6NaUsMsD8iVjmO6nCykoKiCqjEkErJGHpabhERFjWZERERFiWu/Uhefe/3gstWJa79SF597/eC2aP75Te+Z9VpYjzfWfh5P2lVEREVnqj0REREREREREREREREUu7HP29cPeJ+u1REpd2Oft64e8T9dqjcX5tqvY71M8H+eaL3ncVYtdPs8u/5q7Wq631Tt2k1DTtMDzy7oi5N8p4j4Qu4WDbQbc+qsTq+nk6OrtrxVwSA4LTHxOD8o8YXH4NVClrmE/Zf5Dvjq/VWLwloTXYXKG/bi/uN9eSNI+StlqjS1m1hapLXdoXPhJ3muY8sfG4cnNc3kfpUEt9DrZBO8GCF0e8cPknlcSO0jtVgNO3Ca72C0XGdgbLVUME0jRyDpGBxwu4XdT07ajJynyttsPLb9tlVlLVvpcvJihflecja+3ZfUoFpvQ+aMjx00EJ8TWOP1nLI6TYrs9psZtEcmPZNb9gWR6017Y9BUtJV3llYYqiV0bDTw9LhzRvYdxGMjko3d6I/QI9JR3t/kpW/3rGKOlZrDj7b3O+pWZ2I1sn2S1vu42s/aAs9OyvZ24Rh+mKB+4ct3mcj8GF39FpLSttx3FYLZCRycyljDv6sZUP/APiO0YfS2e/u8lM3+5fB9EZpk+k03qF3/oMH3lnaYY2hrSxo6hYLVe2pmdlPbI9x6SCSrBNa1gAaA0dg4DzBfSrufRE2k/q9H6id/wCkwfatP/EFG79XoXULvKwD7EM8A1ys3ggpao6oJT/5KsQirudvVa79Xs/vh/mwPsW2dul9P6vZ7cf9UwH2LyaqlGueLeCyCgrjqpZz/wCHeCsYira7bhq8/qtnc5/nq2t+6tnv1bQHOG7s7YBnjmuGceYLxy2jGuph3wvQwzETqoqj8t3grMIox0jtY01qmp/J0vS2y6geFQ1oEbnY643elePJx8Sk3fYHNZvN3iCQM8SBzIWyCHAEEEHUQtRzXMcWuaQQbEEWIWqjyq02yk1VbaunjHc005c9vUx7Wl3mOMhSGmAcLXqaWKqEfGDSx7XtPrB71tUddPQmUwusJInRuHQQ4Wv2hYPrfaFpvQFHDUXiaQyzkinpoW780pbz3RkAAZ4klRO3b9cZ/Dptn13fEfSudIGkjybi4esmwXbajdJp4w/8l26jghDuIY+YOlc4dhII4rVQuJY46jqXQRRNcWgZRcesX0WXTYLwXjxGjZVTzuYHk5LWgagbXJK53f4vX/Tu6/HD+xO/xev+nd1+OH9i4OAmAo7Oaq8xF+vipfMmh9Kn/wDz4Lnd/i9f9O7r8cP7FOOmrxLf7Fb7rNRSUb6mLfdTyHLozkjBOB2KAMBT5pb1PW3/ACftKlcJxabEJ3xyRsaGsyri/WB0qCx/g/TYRSxTRTSPLpckh1rWsT0LvJYo543xStDmPaWuaeRB5hVgjmbJU3Gnxh1JcKilf5YXloPwjBVolVyoZ0Gr9a05GN289IPJNCx+flXzhFCx9EJcny2PFj6josvvA6pkjxJ0AcciWNxLei7dIK5CIi4dWgiIiIixLXfqQvPvf7wWWrEtd+pC8+9/vBbNH98pvfM+q0sR5vrPw8n7SqiIiKz1R6IiIiIiIiIiIiIiIiKXdjn7euHvE/XaoiUu7HP29cPeJ+u1RuL821Xsd6meD/PNF7zuKsWse1bDNUaYvMUDC+R1HIGtHM8Or4FkKcOsZHYq8ifxcjH2vkuBt2K354hNDLETYPY5t+0WUs7OdTWy87PrDc4ndFCylippA71kkREJB+Hr7CpD5cFV3Yk1n/z5oOqcRE2Uz0/URHUt3CR5PBKmzZ/qKbUWnIpKwgXCjmkobg3sqaY7jj5HemHlVpRvbLGyRupzQR2FUXNE6GWSJ/2mOLT2g2XZasoe77FVsDcvjAlZwzxZxPyKB1ZotDmlrhkEEEeIqut1ojbrlV0h/wCHK4D+XmPkXJ8Jqez4KgDWMg9o0hd7wKq7x1NITpaRI3sOgrgZPamT2laIuWXd2WuT2laIiL6iIiIiIiIusulmtl6gENwpY5mg5aTwc09rXDiPgXY2m2vvOiq+xw11VT3PTFeKm31jHkzMgny9hz64AEtI68L6W5Y6wWbWVnrJHAUtc19srAeRE3GEnyP4fCpvBKuSOo5PxrmtlaWt06GuOogLl+E1BDLRirELXSQPa92jS5g1tJ6ln+zzaDNfJ36e1AyOC+U8e+HN4RVsQ/40XYfZN6lLHPgqvar04RXSUzZpKesoqnpaKrj4SQvHFjwesEcx1qbtBahud+07HWXikFPWQSyQVG7+rkdDj9LH/C8HIHUupw3EOVh8MoDZ4yQ9vXbRcLhsZwjkBjqICX0swDo3dVxfJKggzCu1ZrW4DlLe5IWntbSsbEPoXPWO6We+a0CrkOX1VVU1JPb0srnD5CsiXE4nJxmIVTv9jh8tCs3BIuJwmiZ/paT2uF+9ERFoqURT5pb1PW3/ACftKgNT5pb1PW3/ACftK6Tgz98m913hcbw15vp/xA/aV36rTqSPufaTqiPqlp7dP/VG5h+qrLKumumGHadMT/8Acaepnjx9FO9v2qfxtuVhlR6g0/JwXI8GX5GN0nrLh82ldeiIq8VwIiIiIsS136kLz73+8FlqxLXfqQvPvf7wWzR/fKb3zPqtLEeb6z8PJ+0qoiIis9UeiIiIiIiIiIiIiIiIil3Y5+3rh7xP12qIlLuxz9vXD3ifrtUbi/NtV7Hepng/zzRe87irFoiKuVcixairxpbaxpe7ufuU9yY+3VR5DwuDCfISD8CkBlyfoHbbWW+ocWWrVUcc0RPBjK1vgHH8xGD5Qov2h0ElXpuapgH+0UMjKqIjmDGePyLNtpdTQbRdnGn9SWqoablCRPAYzl7Jo2B8sZ7HAjl5F3WD1gOGNLz/ANT8h3qBOg/qqt4RYc4Y29rG/wDezjGAdLgNI+NlZ5RFtAoehuMFa0eDPHuuP8UfD6FkmzfWMOudIW68NI6ct6Grby3aiMAP+A8x4iudrSh7ssUzwMvgcJW+QcHfIVt4xT8ow+ZoHlNGW3tb/Cj+D1XyPF6ZxNmvdxbux+j6qD0RFXSuJERERERERERERFwLlU09FS921NN08NNNDUSR9ZbDI15Ix1gDK56+JI2SxvjkaHMe0tcDyIIwQskMnFTRyWvkvDvkbrBUxcfTzQ3tlxubf2hZTFrWjguVkiudMGv6PckbI310Mg5+McQVwmVRsWzK5XAcDFbayoB8e64j6AuLswrG3PSEtiq39JNbJJLfKCckw43oXfDGRx8S2dp8brVsruFvY7efJDTULSOG8ZpWsPnGVYcdPHyw17LZMlOAf0N/kqhmq5v6cMKkBy4qskDq0EW+aiewUvcVjtdN1x0cTT5Q0ZXbLRrQxoa3kAAPgWqrp7i97nnW5xPzVwxMEcUcY1NaG/IWREReVkRT5pb1PW3/ACftKgNT5pb1PW3/ACftK6Tgz98m913hcbw15vp/xA/aV36gTadEItdaeqeuaz1cHl6OVkn3lPaivaHpe7328aWrbbTiUUbq1tQd9rd1k8bQ30xGeLV1GIRuloaljQSTG6wGslcLhEzYMTo5HuDWiZuUToABNiSo4RZR+Zuo/aQ+Mb+K6mus90tnGspJI259MRlvnGQq8ko6uJpdJTytaNZLSArfixGgneGRVcD3HU1rwSutREWst1FiWu/Uhefe/wB4LLViWu/Uhefe/wB4LZo/vlN75n1WliPN9Z+Hk/aVURERWeqPRERERERERERERERERS7sc/b1w94n67VESl3Y5+3rh7xP12qNxfm2q9jvUzwf55ovedxVi0RFXKuRfL2MkY5j2hzXAhzSMgg9RWPbNg2jdrnRuAG08rLrQt/7fpXhviAIWRrpLTRVkG1nSldSMDmVkNTR1bScAxCNznE9uBxA8SmcFeHTy0rj5M8TmfG1wVzXCWMspYK5g8ulnY+//wAk2IWuzC6/mPtHq9NyHdtt/HT0hJw2OpbnwR5eXmVspYmTRSRPGWvaWuHiIwVVHa3oyst1DFU0c+ayid3ZRTMGHtMZy5vlwMqwGgNVw610lar5HgSTRbs7B6yaPwXjyZGR4l1uGzSS0xinFpYjxcgPZoPxC4DGqeKCsFRSuvBOONicNHTpHwKh2rpn0dXUUz/TRSOYf9JwuOs113Q9zXgVDRhtTGHf6m+CfsWFLgqyA01VNCf8XkDs6Fa+HVQraGmqBrfGCe3Uf1RERay3URERERERERERF2eiq9tl11C1792C80vczsnh3TT5kiPlLd4LKNssm/adOUIdjum/07iO1tOx8pHyLEbVbYbperNFIDmO4QTsI5h0Lt/PmHFWJkggm3OmhjeWHLd5odukjGRnku5wWR9VhTor2LcqMO7RcfK6q3hLDHQ46ycNDmvyJnNGjSDYj42VaUVlO5aX2vD/AEBO5aX2vD/QFo5sH0obn8qVz4b6AfzP4Va0VlO5aX2vD/QE7lpfa8P9ATNg+lDc/lM+G+gH8z+FWtT5pb1PW3/J+0rue5aX2vD/AED8Futa1jQ1rQAOQAwApLDMIOHTPk44PymZNsm3TfrULjfCIYxTxwimMeTJl3y8q+gjqHWtURFNrmUXzJFHOx0UjGvY8Yc0jIIPUV9LR0gia6Q8mNLj5BxQ2IsQvoJBBBsQqtQXKjuFXdo6QEMo7lU0hBOeML8A+QhctYVoN/dFoq6/rrbpWVBPbvSYz8izVVlXsjirahkYs1sjgB1aVdmEyzTYbRyzG73QtJPXca0WJa79SF597/eCy1Ylrv1IXn3v94LzR/fKb3zPqveI831n4eT9pVRERFZ6o9ERERERERERERERERFLuxz9vXD3ifrtURKXdjn7euHvE/Xao3F+bar2O9TPB/nmi953FWLREVcq5EWI6nsV1uM9tuVmubqK4W+R0kEg5EkfJy8nasuRZqeeWmmZNE6z26ja61qulgrad9PO3KY+1xe2o36Fu6K1LWbSNJVEdy8LUdlmMVUwNDXzROPB263AzzBAHMeNcbZPFetF66u2nprbWts91/2mmlML+ihnaCS0nGBvDI+ALt9nGmbpS7QbjqGmooWW6otggqJ3Ow50+9vfowBxPgjeyrFbxxjJwrAo42zPZXsJaZYgHs6CR0/BVLiMr6aOTCZAHinqHGOTpaDrHYVhGu6HumzCoaMup5Q7/S7wT9ihlZPtC2r01ru0+jbZaqmsucnRMneW4ghjmwS4nmSGnhyAKxhc1wkjY2sjeCLvj8oesdK7PgZNI/DpYnA5McpyT6nC9vmiIi55dgiIiIiIiIiIiIsu0PD0uoYXf4cUj/kx9qm1Qboar6DVlNTuOBUUVSB43M3XAebKnJd7wfaG4c07T3Hu7lVHC2Qvxh7diJjR8r96IiKbXMoiIiIiIiIiIiIsc1jXC2aS1DXE46C11T8+MRnCyNRRtvuTLbsx1AS8NfUxR0sYPrnTPAIH+nKIoR0RTdy6Ts0eME0rXnyvJf8AasqXAtcPc1soYMY6Omib5mgLnqrah/GTzP2nuPzKvSjj4qkp49mJrfkLIsS136kLz73+8FlqxLXfqQvPvf7wXuj++U3vmfVY8R5vrPw8n7SqiIiKz1R6IiIiIiIiIiIiIiIiKXdjn7euHvE/XaoiUu7HP29cPeJ+u1RuL821Xsd6meD/ADzRe87irFoiKuVciLsrTbJ7vXw0kOfCOXu9iwc3LrVm2yaqZcKzVUod/ulXBRtb4hH0jnfC44+BSOF0XL6tsZPkNGU/sHR8VC47if8AS6B0rReR5yI/aPSexS7SUkFDTRU1O3djjaGtH2nxlchEVjNaGgNaAABYAdCp5znPc5ziS4m5J0kkqDtawsj1JVvawB0kcLiQOJ8ADj5liqzfX7N2+Ru9nSRnzFwWEKuMVGTiNUP9hPz0q48AdlYNQn/UB8tCIiKPUwiIiIiIiIiIuxprPdaxm/T0M8jfZNYcedemMfIbMaXHqAuscksULcqR7WDrcQB+qxW81F0traO9Wlm/WWyqbVMi/wAVjQWyR/6mkhWE0lrvTGtbfHWWivic4tBlpnuDZoXEcWvaePDtHAqL/wA27/7mVP8ASsHvGxll3qTVfkiupZySXSU/gbxPWRgjK6fB66aijdBPTTlmVdrgwki+sdi4nhFhlNiUzamlraYSBuS5rpAA4DUQetW232ezb51qHNdyIPkKpd3hqvrlvv8AU38FmOg9Cag2e6noa+kgu1TSVT+5K+OXDgyOTi2UAY9I4AnxZU/FiUEsjWCOYFxsC6NwHzXJT4NUwRPldLTENFyGytJ+AVoUWq0UgolERERCQBkkAeNfPSR+zb51XnbTZtXayu9h05bKCuFpjJqa2siGGF/ENYD1loHnKjXvCVX+JfP6m/gtOorYqZ4a9kriRfyGF30UjR4bPWxufHJA0B1v7kgYfgCrY37VumtMUr6q83alpY2jk94L3eJrBlzj5Aqfan1dX7aNU01PTRSQaatk3SAO4GZw9c/+J3ID1oXaU2wOGGYS1FDdanBzuyOAB8u6AT51ItHo66W+nZTUlllhhZ6VjIw0DzKKrsXkMTmUtNOXuFsosIA7PWp7DOD8IqGS11bSiNpByGytJdboPUF1qLt5bBe4GF8ltqQ0czuE/Quo4gkHmFxb4pIzaRjmk7QI+qsmKeGYExSseBryXA/RFiWu/Uhefe/3gstWJa79SF597/eCzUf3ym98z6rXxHm+s/DyftKqIiIrPVHoiIiIiIiIiIiIiIiIpd2Oft64e8T9dqiJS7sc/b1w94n67VG4vzbVex3qZ4P880XvO4qxaIirlXIijWHV162Sa0r7wykdWWe67pqIgd3D29bXccPaeWeBBwpKW3LFFPG+KWNr2OGHNcMgjsIK38Or34fUcaG5QLclzb2uFE4xhUeL0vEOeWOa7KY617HVpHUpr0XtA0xr2jNTZKzeewDpqaQbk0RIzgt6x4xkLNFRC7bODT1bbrpWukt1bGd9jWPLW738Lhxb9CzXS+32+6cqIbPtCtkpAIaLhE3wyPZPaODx2lvHxLuqPEqSub/afZ3Sw6HBVbiODV+GOPHx3ZfRI3S0/Ho+KmHaIzFwoH+ypnD+l3/9UeqV7tJaddWGK56froK3oSXMdC4OJBHhMI5tdwzg8VFJBBIIwQcELkMegfFiEkhb5MgBaewWKsLgpVRTYRFE1wy4S5rh0i5JH1WiIihV0yIi1RFldPo+41VobcoZYn7zC9sIzvFo8fLPiWLxRSzyNjijc95OA1oyVnmxqeUaeutBI5xNFfKuNhccnck3Zm8/513Go9f6A0CyUV9fSwzklxpacCSoc49rWcRn+LAXXZvQTx0z4pS0GMF+i9yRe46lXg4X1VNLWRTwCRzZXCMXyckAkWNhpWzpfRxhd3ZdoBvg/ooXYcB/E7HX2BSTgAAAcByC6qw3en1BZbbeKZj2Q1tLHURtfjeDZBkA44Z7V2q6Cjo4KGIRxDtcdZPrXKYhiNVidQZqh1z/AItH2WjqARERbS0EREREREREREREwEwERERERETksM1XpumuNJNWQMayqiY55cBjpA0ZId4+wrM1qAHENIBBOCD1grBU08VVC6KVoLSPl6wtqjrJ6GoZUQPLXNPwI6j6lWMEELEtd+pC8+9/vBcnS1ea63TgnPc1dU0wPa2J5DfkIXG136kLz73+8FXkULqfEo4XG5ZUNaT2OVvTVDavBZqhosJKRzgOq7dSqIiIrKVLoiIiIiIiIiIiIiIiIpd2Oft64e8T9dqiJS7sc/b1w94n67VG4vzbVex3qZ4P880XvO4qxaIirlXIiIiIi4NxtlBdqZ1NX00c8R9a8Zx4weYPjC5yL61zmODmkgg3BGgheXsZI0te0OaRYgi4KiUaR1RoqvN30Ndpon5y+mc4eEBx3TnwXjxOUoUdwud1p2Vt1pWU9bLk1ETPSh4OCW8TwdzC5SLeqcSqauBkM5Dsh1w63laraVF0eDUdBVy1NM0s4xmS5gPk673HUiIi0FLIiIURSzs2tM1vt1xqJW7vd1w6dgPsBEyIH4S0lVuh0tYrzfLxqOupu6J6q61kjWyneja1szmtw3r4DrXDlpdr0D6qGg1o5lLM9xDBI9u41x9KwEOLAOoNKzCyW42m00dA6XpHQxBrpOW87mTx7SuoxDEYm4bTQUtTd4DWuLbg2DbLhcJwed+NVtVXUYEbi9zA8AjKc64I19CzrYxqymdR1Wiq2VsdxtM0radjjgzUjnF7HM7d0HBA5DCnVUv1RpOS7VFNdrXVvorvS4MFQwlud3iASOIx1Fcqi2tba7IwU1wsNJc90YE254TsdZMLgD5lM4fi1LUwMy5WskAAc1xtpHSLrncWwCuoqqTi4HyQucSxzAXaD0G2ohXGRVH7+u1L9xabzTf3J39Nqf7i03mm/uW/yul9Ii3wonkFd6JP+W7wVuEVR+/ptT/cWm8039yd/Tan+4tN5pv7k5XS+fi3wnIK70Sf8t3grcIqj9/Tan+4tN5pv7k7+m1P9xabzTf3Jyul8/FvhOQV3ok/5bvBW4RVH7+m1P8AcWm8039yd/Tan+4tN5pv7k5XS+fi3wnIK70Sf8t3grcIqj9/Tan+4tN5pv7k7+m1P9xabzTf3Jyul8/FvhOQV3ok/wCW7wVuEVR+/ptT/cWm8039yd/Xan+4tN5pv7k5XS+fi3wnIK70Sf8ALd4K3Cj/AGla6t+gtMVdwmmaKySN8dDDnwpJiMAgexbzcVX2q227X6mIx0mkKWnkIwJOjkfj4Hux51hEOlNV6wvLb3ruvkmc3G5TlwdwHEMw3wWM8Q5rDPiVFTxl7p2Gw0BrgSewBbNLg2JVcrY2UsjbnS5zS1o9ZJWS7OqKoo9LUz6kOEtTLJUHe5/pDwJ8oGVzNd+pC8+9/vBZY1rWgNaAABgAcgAsT136kLz73+8FwkcxqMTjmIsX1DXW6ruVpy07aTBZadpuI6Rzb9dm61URERWSqYRERERERERERERERERS5sdcBf68EjJoTj4HtURrsrTda6y10VdQymOaM8DzBB5gjrBWrWwOqqSaFpAL22BPWt7DKptDX09S9pLY3gkDXbUrrIq6t2xXwNAdb6InHE+GM/OWvfjvXudRfP8AxXGZv4lsM3grJztwbzkm4VYlFXbvx3r3Oovn/infjvXudRfP/FM38S2GbwTO3BvOSbhViUVdu/Hevc6i+f8AinfjvXudRfP/ABTN/Ethm8Eztwbzkm4VYlFXbvx3r3Oovn/infjvXudRfP8AxTN/Ethm8Eztwbzkm4VYlFXbvx3r3Oovn/infjvXudRfP/FM38S2GbwTO3BvOSbhViUVdu/Hevc6i+f+Kd+O9e51F8/8UzfxLYZvBM7cG85JuFWJRV278d69zqL5/wCKd+O9e51F8/8AFM38S2GbwTO3BvOSbhViUVdu/Hevc6i+f+Kd+O9e51F8/wDFM38S2GbwTO3BvOSbhViUVdu/Hevc6i+f+Kd+O9e51F8/8UzfxLYZvBM7cG85JuFWJRV278d69zqL5/4p34717nUXz/xTN/Ethm8Eztwbzkm4VYlFXbvx3r3Oovn/AIp34717nUXz/wAUzfxLYZvBM7cG85JuFWJRV278d69zqL5/4p34717nUXz/AMUzfxLYZvBM7cG85JuFWJRV278d69zqL5/4p34717nUXz/xTN/Ethm8Eztwbzkm4VYlFXbvx3r3Oovn/infjvXudRfP/FM38S2GbwTO3BvOSbhViUVdu/Hevc6i+f8AinfjvXudRfP/ABTN/Ethm8Eztwbzkm4VYlYlrwgaPvJJx/s4HncFEffjvXudRfP/ABWL6k19e9TQNpZ+ihpwQ4xRAgOI5bxJJOOxbFJgNcyphfIGNa14cTlX1G608Q4VYXJRVEcJkc98bmtGTbS4W6VhCLVaLtVWiIiIiIiIiIiIiIiIiIiIiLVrXOIa0Ek8gOaybTmmZr46aolqI6S30+DU1cpwxmfWt9k89QVltC7NLxcI4prBborTbnAf/FbhF0lbUNProYjwa09ROAiKulr0Dqm6xiaO3uhgP/GqCIWfO4n4F2h2c1MfCa/2SN/sTU5+xXhotiukGyCe9vrr1Uezrpj0Y/ljj3WgeJZrT6I0bSR9FT6btMbPYtpYwPoRF5ynZrfZATR1Vsq/8mqZn52Fj9y0lqW0AurbTUxsHr9zeZ/U3IXpNcNmGzy5u36rS1sLvZMi6Jx+GPdKxao2I6XjLn2O4Xe0P6hT1Jki+GObeBCIvOHBC0Vr9oOym821klXdqOO40Lf+a26Ho6uAdtRAOD2DrLVWO6211rquh6eKeNzBJFNE7LJGO5OHWD2g8QURdYiLkUkbZaqCN3J0rWnyE4RFldFs/wBXXCkirKe1uMUgywveyMuHaGvIOFunZvrcH9iTnyFp+1W72bbOtI6y0u2/6hoH11bV1dSN+SaRojjikMbGRtY5oaAAs2Ow7ZqTwtM7fE2tqAProioWdnOth/yKp+AA/avg7Pdag4/INZ/Sr6nYbs49bbqxvkrp/wC5fB2GbPvW09xaOwV834oioozZtrd4z+RZm/zOY36Svl2zjWzf+STnyFp+gq+TNh2zUD9JaZ5T2yVk5PyPCO2HbNT6W01DP5a2oH30ReetdpXUltBNZaKyIDrMTsecLoSCDgjivR2TYjp2El1qvN+t7scBHV9LH8LJQ7Kh3XmyO+0cclTXUcd6omDjXUMQhuMI9k+IeDK0dePkRFUNF3F3tD7XKwsmbPSygup6hgIbI0c+B4hw5OaeIK6dEREW9T/r4v52/SiLLqXZ5rKrhZPHZ5Qx7Q5pkcyPIPEEB5C3HbN9bN/5LO7+Usd9BVttmezjSOr9MNvmoKKWurp62sa+SSplaMRzOY3daxzQMALPH7D9mp9JaJ4/5KyoH3yiKhrdm+t3f8lmH8zmN+krbfs71rHzsVUf5QHfQVfVuw7ZqPT2meT+esnP0PC+H7DdnR/VUNbD/l104+lxRFQU6F1iDg2Gu+KKDQusTysNd8UVfbvHaI9bLem+IXCRO8doj1016d4jcJERee9fp2/Wsb1da6uBva+JwHnXSr0bn2J2iFrjZtQ3yheR6V04qoif4mSgqC9c7J7zbYpqq8Wmmq6VuS662lhZNEB6+opzwLe0t86IqsIu2u9ontM0YdJHNDK3fgqIjvRys5Zae0dYPELqURERERERERERERERERERERF9Na57g1oJJOAB1kr5XdadkihvVFPKAWwyGXB7YwXj5QiK3GxvQlFc6tzrjA2a32IsiiicAY5rk8CSaR49d0WQ0Z61bFR/srtkdr2f6fY3jJUUoq5nnm+WpPSucfHxUgIiLVRvtS1zNoHTH5RpKMVVZPUMpqWIglvSPBO87HEgAchzKovX7atp9dUSSyakqosn9XCGRsb4gGhEXpgtF5sWvbVtMpJt46oqXNa0uDJWMka4jiGneHIr0ip5emp4Jcg78THZHI7wB4Ii3eorzK2y2+ntm0zUtNTwsii7qD2sY0NaOkYHnAHLJK9NV5rbc52VG1TUrmcmzRRnysia0/KERRKuVRHdrKY9kzPrBcVERelWw/8A8trX75rf/wB7lLK8vbFtT19pq1MtFovs9NRsc5zI2tYd0vOXYLmk8SrxbEr9ddQaPmqLrXTVdTFcqiIzSkFxaA1zRwxyDkRTAiLE9eXSrsuitR3Oil6OpprbPJDJgHdeG8Dg9hRFliLzcptvW1SmYW/nC6TxyQRPPnLVp3+dqvTtm/OJ/A53Ohi3D4iN3kiL0kWvJRJsh2lt2j2KWWphZDcqNzWVbGDDHb+d2RgOcB2OI6ipaRFUTbxs5o6HN+t8HRUVbMG17WDwKepPCOoAHJr/AEsnnVOXtcx7mOGC0kEeML1wvFqpL7aa+1VkYfBV08kL2nseMfIvJatZJHWVEcpy9krmuPaWnBRFxluRO3ZY3djgfMVtoiL0i2Ezsn2dUhaeIuFfvDsJnc7HmKmFeYGldquuNF259tsl0ENM6V0vRuijkw92ASC8EjOFe3ZBqW86o0rNVXmpbUVUFxnpzMGNjLmsDXDIbwz4SIpSRFjesb+dK6VvN+bAJjQ0plbETgOdkNAJ7MniiLJEVF2+il1mHZdZbOR2bsw++uzofRU3sVMf5Q05QvgyN8QSyMeB2gvLhnxIiuqixfR2sLLriyQ3m0SudC8lj43gCSKRvNjwM8R8oWUIip5t72eUVjpJL9a4GxUFXMBV07G4ZBUkHcnjA9KJMbrxyVP16k7TrYy77PdUUjmhx/Js0rc9ToR0gPnavLZERERERERERERERERERERERfbHuje17eYK+ERF6Y7F75Fftm1gla8OkpoTSSjrDoDujP8ApwVKS89dhu1Kn0Fdam33Zzxaa9zS94BPQSt4CXA5tI4OxxXoJS1VNW00NVSzRzQSsD45Y3BzXtPIgjmERdBq3Sts1lZZbTcDIxheyWKaI7ssMsZy2RhPJw+hQVVbF9XiRwZX6Yr2/wCNWUDmTP8A5zHwz41ZpERVFuOxfU4hfv6W0vVDBB7lnkppOPW0vbjK6upm2p6ZomU9fX6tt1JDG1kcrYoa6GJrRhoMkXHdAHYrnoDjiEReeVz1rtco6Z9fQ60qrhRNPhT00gJj/wAxhAcz4QoUuFwrbrW1FfXVEk9TPI6SaV5y573cSSe0r0o1jsrsOpjJX0IFrvIBMdfTtDd4kelnYOEjD154qg+udN1Niu1ZDU0raaqp5hHV07P1Ye4bzZYf+1IOIHVyRFgaIiItQMkDxr0O2ARGLSl3HUb7Uhv+mONv0heeLeBHlXoj6H+Xf0VVsxxZeasH/VuO+1EU4qPtrG8dmurd3n+S5fN1qQV114tVHfbVXWqua51NV074Jg07rix4wcHqKIvKr82NRlrXCzV5DgC0iB5BB4gjh1rt6fZ5rOpLN2y1DGu9dJiMAdp3iMK9A2IWCNjWQah1LE1oAAbXDAA4Y4sXIZsO0G7dNY26VjvXOnr5Tv8A8wYWhEUf+h8sT7dcdQSxPbJT09JS0LpmcWS1LSZZNw9YZnGVZ9cC12q22Sggt9spIqalhbiOGJu61ueJ+E9ZXPRFrvBnhOOA3iT4hxXkTdJWz3OumbjD6mVwx2OcSvSHbJrOHRmh7hK2QCtrWOpKRmeJfIMOd5GNOV5oIiIiIiL0O9D6/f0hdR2Xyo+WOMrzxXoZ6H0D81byR7uTfJDGiKd1HO15pfsw1c0Dj+T8+aRpP0KRls1NNT1lPLTVMLJYZWFkkb2hzXNdwIIPMFEXmHHs2vk0bJGVtqLXNDh/tbBzGeOetbsWze5QHprtcLdR0bOMk5qGycP4WtJJPYF6BO2X7OXHJ0jaP/btH0L6otmWz23VbKyl0tbI5mODmP6IO3SOsB2QCiLBNhNgmtVmu9wFNLT0VwqYTQxSjde6Gnj6MTOb1GQ8VOiIiLodVPjj0tf3yEBjbVVlxPLHROXk2vQ30QGtINNaJqLXHIO7ru11PGwHi2H/AIjz4seCPGV54oiIiIiIiIiIiIiIiIiIiIiLmUFDUXKtp6KmaDLNIGMBOBk9p7Fw12tkcW3Sn3SQSXAEc8uaQiKWqLZ1aaqmD6O1aourGEsfXUFO00znt4O6Pe4uAPWs403R610ezc0jR6zBLiTS1NE19K49e8x5bg+McVajZuI2bP8ASoia1rfyVT8GjAyW8eXaVmpJPMlEVQT6JHUmn6p9v1RpONtVE7dljY99NK3gCC5jw8DIORgrtmeiq06XND9M3FozxInjdgeTdGVh23bTEVw19U1twfVUNK63UwiqxSPnhke3eDg5zPSkDChVujLLIMx6ytJb/EJGnzEIivLpzbls41G9kLLt3FO/GIq1vQ8T1b/FmfhUuNc17Wua4OaQCCDkEHrBXmbbtH2GCshdPfILm/P6K30EckktQ/1rOXAE8z2L0A2d2i52HRFgtd1eTWU9G1soJ3twklwjz17gO78CIszVYfRL6aimsFHqWKNvS00nctTgcXwzcWEntY8cPKrPKHdvc9PBsrvwmxmR1NHGO15ma4fICURebyIiIvpvFzfKF6KbBYtzSFwlHFst7rC09oZuM+6qWfmVaoXtgqdWW6CqaGmaF7JP0biMlu8AQSOtXW2CADQ85jfvQG8VxheOTmbwG8M9RKIpqRFiuuq6qtmi9SV1HK6KogtdRJFI3mx7WEhw8YRFlSKh1q13ttsoprzLczcqKKNk0tO+SKXfiIDiHBvhg46xxCudpPVNp1nYqS9WqTegmb4TD6eJ49NG8drT5+aIsjUXbStqVt2d00TXUU9bXzwvlhp4/BaGMO6ZJH8cNBPVxUoqONpmhW62sjRS9Gy60ZdLQyPHguJGHQyf9uQcD50Ree+t9eah1/dRcLzO0hgLYIIxuxQsPrWDjz6yeJWFqRZtG2t09R098pLZIyV0clFVh/TQSNOHMdgcQDyPWFjd7sAtAikhuNHXU8hLRLTvzhw4lrmnBB7O1EWPIi+mtL3BrRkk4A8ZRF8r0J9D1vN0peGOHEXqQn/VDGqdO0A2AiKt1HZ6eoGOkgfK7ejd7FxAIyOtXV2EQsbpC41Mbg5lTe6t7HjiHNYGxgg9ngoimpEWL63r6y1aP1BX0M3RVNPb5pIpMA7rmtyDg5CIsoRUEGrtp9XDFNHtLozM9jXNgFQ2N2XDO6fADcrDqnbFtXpZpaafU9a18byx7cR5BBweIaiL0plligifNNIyONgy573BrWjtJPAKEda7fdE6Xilit1Q27VwyGxU7sxNd/HLyx2huSqJXrWWqtRjdvF7rqtvUyWZzmDyNzj5FjSIsm1bq29a1vU94vE4fPIA1rW8GRsHJjB1NCxlEREREREREREREREREREREREXYWqVkNyo5HkBrZ2FxPUM8V16Ii9Rtlkgl2caUeDkfk2MeYkfYs9Xnfst223jQZjttwbJXWbPCDe/SU+TkmEnq7Wngrp6a2n6F1WyM2y+U3SuH+7zuEMwPZuvxn4Moiz08QQeR5hcB9qtUjt59uo3HtMDCflC7DqB6jyWiIuJT2+30ji+moqaFx5ujiawn4WgLlouLXV1FbKZ9VXVUNPAwZdLM8RsA8ZdgIi5Sp36KDV0b3WrSdLMCYz3XWNB5EjETT48EnCybaB6JCy2uKooNJN7urfCZ3Y4Yp4zjG8wHjIR1dSpPcbjXXauqK+vqJJ6meQvllkOXOceZJRFwluwY6aLIyN9vDt4raXJotzuyn33BrelZvOPIDIySiL0U2KUdFVaAikqKWCSSS6XB8m/G13h9MR1g9imOOOOFjY4mNYwcmtAaB5AFFOw0B+zi3SM4iSrrpMjr3p3cVLWD2Ii0XHq6Smr6Wekq4WSwTRujljeMtexwwWkdhC3nPY30z2jykBfTfCGW8R4uKIoG2kbLtC0Wi73dLdZ4KCtoKGSenqKcujc10YyAcHBB5cVXLYFrG5ab1U2iO9JbLjNFT1LAfSSyEtikaO0HgfErdbYqqCn2Z6pEkzGl9CWNBcAS5zgAB2qjmyOeBusrDBI9oMl4o3YJwCGFx+nCIvTBaL73XHjulbZc0HBcAewlEXDktttllfNJQ0r5Heme6FjnHykjJVIvRP2230Oq7JJSU0MLp7ZmURMawOLJHAEhoGTjhlXrALuQyqNeineTq+xxkEbtoB4+OV6IqwLep3mOoheObZGkfAVsrege2OeJ7xlrXtJHiBRF6J7GbZYrhoGjnmtdHJO6rrBUulgY95kEzs7xcCeWFMtPT09JCyCmhjiiYMMjjaGNaOwAYAUUbDTTz7PKOppnB/T1tbNJjmHPmccHxgYUvbrh1FEXytuaGKoikhmjZJG9pa9jwHNc08CCDwIK3t1x6ivlxDPTEDy8ERYvXaR0jPb6mnnsNs6B0Lw8CmjbhuDkggcCO1eVMxYZXlhcW7x3S7njqyvW+6yU8dqr3zyNZEKWYvcTgBu4cnK8i0RERERERERERERERERERERERERERERERdzYKWgq7rAy4ue2kaHyTFnpiyNpcQ3xnGERdMtclWKi2cxVDIp4tnOqHNkY18e7I0sLXDIOc9YW6dmfHwtm+qR4hI0/aiKJLLtG1zp9u5bdRXCKPGOj6YvZw/hfkLIX7bdp7+epaoeRsY+hqx/V9mpbbqFlsitldbZf0bZqWrIc9jn4III5gggqTrfoS23WlZVWrQ+oa6k3nxx1UMrd2YxuLHOxnhxCIsOm207TponRHU9Y0Ec2bjHf1NaCsCud9vd6k6S6XOrq3ZzmeZ0mPJvEqZodF2ma71doj0RqR9xiibNNRiRu9FEcAPzniCStL5oOmtVmra2q0NqOigijy6rle0iIk7rXObniMkZRFAiLKdOaafezNVVNQykt1Ng1NXJ6VueTWj1zz1BTJbNm/d1NG+0bPrxcIS3Iqq2fuMSD2TGkt4HqRFXJFMOrNCQ2yLeqbNcrDVFrjFHWfpaWctGSyOYcnY5A81E1LCKmqggLt3pJWsz2bxxlEXKprxd6KPoqW41cMfsI5nsbx8QIX3+Xb37q1vx7/wAVN9v0HbbrRMq7VofUVdRuc5sdZFI0CXcJaXNbnlkLoNY6Jhs9rZM/St9tUr5N2CWrIdFK4AkxnHJxAJHkRFE8lyuMxzJW1Dz/ABSOP0lb0d6vETd2O5VjB2NmeB8hWR6KtdsudZKyto6utkLooaWkpjuvmmmJAGeoABS93spcf+Weof8A3Dc/SiKuc9XV1X+8VEsvHPhvLvpWy1zmODmkgg5BHAghTpadIWO6VFxorZo7UNdU0kpbWRCRrX0rslojODxOWlcm96Cgtlora2r0DqCigih3nVT5WkRDkHuGe0jIRFDY1LqNsYjF6uIYOTRUyY82Vw33S5vdvvrqlzu0yuJ+lZ9oTTttvUTo3We43WvllkEVLSODN2KFrS6RxOOt4CkPvZHJHe31TnsEjSPgOeKIoGi1BfoDmK7VzD2tne36CuHWV9dcJRLW1U9RIBgPle57sdmXErkXekhpK6ZlOJhAXExdKMPABxuuA9c0jB8aljSmjLdd7ZAaXTN6vFSImSVUlK8NjiMuS1nMccDiiKFEVkDsyPHOzfVHjxI0+bjxXErNnlPR0VVU1Gz/AFRDDDC+SWZ72gRsYMufz44HFEUHUN7vVsjdHQXOspmOOXNhmfGCe0hpC+nX++vJc67VxJ5kzvJ+lZpomw2m7uljda7hdKuWd0dJSUzhGSyNu+57jnqCkk7M5MH/AOmmo/H+nb8nFEUCN1Bf2elu9ePJUSD7VszXm71BzNcquQ/xzPd9JXLjtLrvfn26zQylsk7hE2YgOYwcSZCOA3RzKliw6AtdQHw26zXTUlTH4M0lL+io439bOlyMkIihiS53KWMxSV1S5mMbrpXEY7MErgqx1z2YVkFO99ds5u9HHu56egqW1jmDtczJzhQfd7L+TqmPoKhtRSzOIhnALc4OC17Txa9vrmlEXQorBWnQduudGJbVou+3SCN7oXVkcrWMkkj4P3RkcAVi9y0fa6G/Ftbbrrb4KaF0tbQzgd0NaGbzHRu9cyQ8M9RRFEqKyLdmjnta5uzXUpDgCD0rckHlwyob1pa6Sz3l9FDba+gkjY3p6WsIL2PPEYI5gggoixJERERERERERERERERERERfbHvY7LHEEgjh2Hgvhd1p+CgnukP5Ra91JG18szWHDnNjaXboPVnGERei+yDUd21LpFs1zFP0tLUvo2OhaWNcyBrGgkEnjx4rAp9rG0LTFxbVa10iKKw90yQd008ZfI5xB6MDMmOOFmuxmzXazaTmbcqHuQ1VwmqoITIJC2GYNczJb4lgV50ztn13XUlq1FHbqC0RXLuptVSmJ80RhDujIaXHOSRkIirBta1TQat13X3q2MqI4JI6cR9Mzo35jjDSSOOOI4KXth21y4Ww0Gm7vTxNskbjCysbGQ6GepkL2dK/ON1xJHiWDbUbDNbNf2/T9zu09wiZHC91Q+FkUoZKcuaNzmBjgpn2W7PJLvV2y71VlFv0/TtZX0NK6YTOrKiQZjmlxyaxuCGnrRFOY0e6DaB+dtJVhgntpo62nczfMm44OjdG71uMeF24Va9um2WSaouuirKymlozF0FdUuG+4yBwcWxEHA3CME9qtAzV1vfq+o0nURSw1ncbaqnc8jdqYzkPMeDkFmOIPFVS1/sol0xNfKtun+77FHEZ4KxtU2KekY8kvjIPGQtcctz1Ii5ewnStu1DW0z6yJk1FZ6SOpELhlr66rcXCRw5HcY3Az1rK9qm3+v0lqSawWGhpZX0uG1U9QHOHSEA7jGtI9LniT1rBPQy6rpKC/XWw1krWPr4IjTOccb0lOSOjHjLXHHkWebQdkFzq9T3O+W6x0d4prhKyaSnfUdzTwS7u64tceDmOxnCItddbS9K6s2OVTJ7zbPyvVW+nkfRRuJcyffaXNa12SCOKpRb6aprK6lpqUEzyzMZHjnvOOArRaq2Y6ooNKPuF0tNqht0GTLQ0QD6mjjx/vAl4dIQfTN6wo02d6flvO9R2G3Oqr1K2Ytq3yiOOkp8tiMoa70zhvZ7URWw2ESXOPSFTTVMsMlsoq2aC31AYWOlY1xdJI45II3jgHxLt557Ntp2f3FtASzenmZTudguiqaZ2Y3+R3A+Qrvqx0GzPQjG2u1T1tPaqVoMETmteY2cZJSXfC5yx3ZztSp9fV1TSUWnKuihgp2TSVD3xmMOl4sbhmDlwyR5ERUIpbrc9H6mprlTxMjqaWrbOYJG5Y2aFxBY5vDgHZGF6H7PNZza+0PBeKfoI7gY5IZWYPRx1TBwyM53DkHGeRVctuOz82m5X3UptRntla2OXumOZrH0lW87jssPp2SEAnyrpPQ16yNn1PPpuoee5rq0GIE8G1EQJb/UMjy4RFnGw6s1FLtA1SJ+gDql01Te2dEQYKlsz2MiiOesuJ49QW76IfafUWszaJt0dO9tVRD8oSPBc5nSEOYxmCMHAySe1WCFt0/otuqdSlvRiqca6uecf8GPdw3y4z5SvOKovMOrta197vrZZIqiaepljjOHbjWktjaeoAAN8iIpB2Jw6ht2pbFW2oxOmrqqWmEMrC5opAGmon4EY3d0AeNXeuWsrVatWWPTM2RVXOGeWE5GG9CMgHxuwceRRrsd0TWWqSq1Dcre2hdLSxUtspBIJego8CQuLh66RxyetbWodtbdP6nqrFVaNuD6uF7RC4SxZlZK7cje3ngPzw45RFAfogNFt07qOStpm4pLmX1cLQMBkwwJ2DxHg8DyrKNgGv9JaboLvT3u6w0LpHU24Jd7wyxpaSCAeCn3alo+p13o1kVNShtyp3xVdNDKQPDA8OFxzgbzSQTnGVQurttootY1dJcLZU0tPSdKaqhEokc2SFpJjbIObSRwKIvQfZzrOTXNmr7oY4WxxXappYDFvYfDERuPO9xyQeKi+p20aYvegdQU14uNJR3iSkuVN3IwPPhAPjjxkH0wx1rOdjthutg0nUQ3WiNJPU3apqmwF7ZN2OUtLOLSRyCoVruw1mm7o233K3SUtwzLLMTK2RsrJXl0bwG53eHAhEWugdTXjS9/guNs6B0lPHM8MnaXR4czdccAjjheg20zVly0doOu1BbmQPqohTbolaXMPTPa08AR1HgqFaEsb73HNR263vq7vVyOiph0oiZFFG3fkcd7AJI4YV7NrGnrrqTZ5X2e10vdFXIaTdh32s3hFI1zhvOIA4BEVHtnNvdfbsKAOLZrvcIaJ72cCyneTLOWnqy1uFcXabry37HtL2yksttpzLM4w0VMRuxRsiA3nuDcE4yPKSqWaM1DRaW2i2q4iOSnoKe6tL45Hb7ooySx2SOe6CeKu1tV0I/X1stFxtApKuejL5IoZnYhq4Kho3mh49KeALXIijXZdt+v2p9SU1ov9vpGxVUgihqaZjmdHK4Esa8EnIdjGe1Yx6JXSdLZqqiv9AxsbLnMW1cYGG90RDLZW45Oc0kO7Vl+gNll7gv8Abaqr0/DZLdQVQq3s7pbUzVU7GkRjLc4Y3OeKx30UGpKKrqLFpmCYPqIJH1NS0cejMgDWA/xEZOOxEXZehs1Xd6hsmmqgU7qJlPPWxPDT0u+6YNcHHOCOOVLO1zZ0Nb2buqgJju9DE80pHATsPhOp345hxHDsKjHYTYJ4dQTXWgtkkNnht8tC2okla4zVLJmukO7zAOFlGrtXXjZ1tLhudxjd+bF3gpqWSQvBEdRG0/pQ3mN0Hwu0IikHQWp7jqLQlLe6+CGCt6OpbLC1rg2N9O5zN0hxJBG7xC84tYamuGsNQ1t7uDIWVFQWbzYgWsAY0MGASTyC9TpxAbbUyUwjLJIJJGlgG68vbne4c97t615HzfrX+VEW2iIiIiIiIiIiIiIiIiIiIvpj3xkljiCQRw7DzXyiIp0pfRE7S6Sngp46qgLIY2Rt3qRhOGDAz8AW+30SO04DjU288c8aRigRERZXq3Wd81revy1dpIu6+iZGHQsETQ1mcYDevis7tW3raNZrTQ2qiraRtPSU7IIc0sbnBjBhuSRxIChlERSjNth1xUaqotVS1VO65UtI6ljf0DAzo3AggtAwT4R4rsL/ALdNoOpLPW2e4VVIaWqj6OYMpmNcW5BwD1clDyIi3IpZYZWSxPcyRjg5r2nBaQcggjkQpts3ohtpdpp208ldT1rWgBrquESPAH8QLSfhUHIiKStXbXNd61p3Ul1uhbSOPhU1OwQxO/mDfTfCuj0hrfUOhrhJcLJUMjmfTugJkjbINx7g4gB2QOLQsRREU03Pb9tHu1trLbVVlGYKqnkgl3aVjXFkjS1wBHLgVimjdperdCNrG2OrijbVdH0olibLnogQ3G8DjGVgKIilXU+2bXer7JNZLvV0z6SV7HPDKdjHExneHFo7VG1uuFXaq+luFHKY6immZLE8c2vYcgrhoiKW9U7bNe6vss9mudXTdyzFplEMDYnPDTvAEjqzzCidj3xkljiDgjIPUeBXwiIpvo/RC7S6Kmgpoq2jMcMTImB1LGcNYA0dXYFgd919qXUWo4tR19TGa+MQhrmRtYzEB3mDdHA4IWGIiKdR6IzaiHZNfRnxGkj/AAUQXa93G9Xavu1ZNmqrJZJJnNAaHGT02AOQPYupREU6j0Re01sccbKyha1jGtGKRnJowOeVGOrdXXrW12N3vUsclUYWRFzIxGN2MYHBvBYwiIsj0vqq86Pu0F1tEzGVEIeGb7A9v6Ru47wTw5KUXeiM2pE5FxpB5KSL8FBaIi3JZXzyySyHL3uLnHtJOSpI0htd11oqFlLbLnv0bM7tLUNE0Tc+xB4t+AhRmiIp7u3oj9pFypnU8EtDQ7wwZKaDEnwOeXY+BQbVVdVW1UtXVTySzyvL5JXuLnucTkkk8yuMiIpW0ttn11o+0NtFqqaUUzZpJR0sDZH70hy7LjxOSuu1ntS1fr2ipaK+1EEkVPMZYxHC2M7xG7xLeYwo6REUs2HbZtB07YWWKiuETqSON0cXTQtkfGx3rWudxAHV2KJ3EuJJ5laIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiKStndqt92lusddRU9Q1lOHRiSTcO/nAAORgHrPUsytujrdQ2+jgr6G31VU25tikmE2G9C4gku8IccHACgVrnN9KSPItekf7I888+tactK+RzyJ3NDjew6PJyf5UhBXMhZG00zHFotlHpGVladHw7FY381NJRQSCntkE0gro2vEs2OiD3tz64eCGnLR41xorPpMVF9iksEGKAMk4Sgula5gd4OXjd5HyKvfSP9keeeab7uPhHjz481jFBosaiQ6Rrcb6Dfr+CzuxW5BbSwtNiNDW20i2q3RrVho9NaeqbLRVkVloQ6VkLyDNgND3jmd7j4J4jtWNbQdOWG223uylggpJxVCKKKOXf6aMjJeW5O6QVD/SPxjedjsyvlznOOXEnyr1FRujka8zvNi4206b9B0rHNiLJYXxiljblNaL2Fxk9I0aypnGkaSu03Yq6lo6BkzY2TVTnzECVg5tIyeJA48uxZEzR2nBebq+egpY6FkUMcYMpJ33El0gw7LR60Z54yq79I/G7vOx2ZTpHnOXHjz4r46jkc0t5S8XvpGggFwd3L0zEYmOa7kcRIySQdIJDS3VbpvftVg7BoSzQw3ClulJTSuZVyNhlMvhmItBaTuu4L7pdKacD7RG610cjJO6Gyzd0B2RHnc5OAc52MkjgFXrpZOPhu48+K0EjxjDjw5cV8NDIS8mpku75DQRo0+tehicTWxtFFFZnXYk+UDpNvVZTZBpS3Wi336e42yjqTC9k9OyOoO8yN2S5hcSMhgHwlcq7UWkbfVWSJun4XmvewAiXDWNeADk75y4ZB7FBJkec5cePPihe44y48OS9mjLnFz5nkm+okawBqB6LXWMYiGNDGU8YAybXAcfJcXayOm9lIWvqWw266Utut9B0HRRtM8zXZ6TfxjAyeQ6+srPJdN6LLqCR1ujZQGSNsVY2qbiYuGcSNLsjJ4eLrUAOcXHJJJ8abxwAScDkF6dSksjYJnjIYW3ubm419q8Mrw2WaQ08Ry5GusQLAA3ydWpWKZo7TctRG+otlNBNPTzb1Eyp3yxrXAMkacjwjnB6l90+ktJufbG01sp56eSCUvnfMcktaN3hvDLnHOezCrp0j87287OOeUEjxjDiMcuKwmgeb/8qUaCNZsL9WnoWwMVjFv+FAbOB0tFzYg6TbptpViYNH6HqjWyU7YHQvl6DJe4dDM0ljgwkg4yRz+BcGw6KskVFTNvFLTdPHWyxF/S5ErXekDw13BxzwUB77hwDjzzz606R/sjzzz6+1HUDy1zRVzAEjp0iwtoP1RmKxtcxxoacloIPk6Dch2kfDQpzorfpCW3XyvlsUJZbp6iIRMnJMrWeE0kl2R2E/CFBbyC4kDAJ4DsQPcAQCcHmvlbcMPEmQ5bnZTr6STb1C60KioNQIgWMbkMDfJAGV6zbpRERZlrIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiL//Z');
