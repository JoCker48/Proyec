<?php
    session_start();
    setcookie("NS","es",time()-60);
    session_destroy();

    header("Location: /index.php?vista=login");