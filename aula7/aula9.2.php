<?php

    session_set_cookie_params(['lifetime' => 10]);
    session_start();

    $_SESSION["nome"] = "Jean";

    echo session_id();

    // session_unset();
    // session_destroy();

?>