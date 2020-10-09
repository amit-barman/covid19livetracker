<?php

session_start();

// distroy session
session_destroy();

// redirect to index.php
header("location:index.php");

?>