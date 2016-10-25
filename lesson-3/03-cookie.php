<html>
    <body>

    <h1>$_COOKIE</h1>
    <pre><?php

        var_dump($_COOKIE);

        //if(!isset($_COOKIE['my-name'])) {
            setcookie('my-name', 'Rick Roll', time()-100);
        //}
        
    ?></pre>
</body>
</html>
