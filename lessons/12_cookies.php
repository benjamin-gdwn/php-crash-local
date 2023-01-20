<?php
// set a cookie
setcookie('name', 'Ben', time() + 86400 *30);

// retrieving data from cookie
if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}
// empty cookie
setcookie('name', time() - 86400 * 30)
?>