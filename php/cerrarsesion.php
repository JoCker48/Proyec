<?php
    session_start();
    setcookie("PHPSESSID","es",time()-60);
    session_destroy();

    header("Location: /index.php?vista=login");