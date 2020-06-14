<?php

session_start();

session_destroy();
header('location:marian/index.php');

exit;
