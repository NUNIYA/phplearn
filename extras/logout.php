<?php
session_start();
session_destroy(); //this destroys the created session
header('Location: ../sessions.php');
