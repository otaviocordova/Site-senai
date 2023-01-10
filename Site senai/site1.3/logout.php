<?php
session_start();
session_destroy();
header('Location: iniciosite.php');
exit();