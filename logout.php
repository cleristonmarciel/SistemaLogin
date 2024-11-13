<?php

if(!isset($SESSION)) {
    session_start();
}

session_destroy();

header("Location: home.php"); 