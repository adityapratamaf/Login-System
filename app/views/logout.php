<?php

session_start();

// ==================== FUNGSI MENG-KOSONGKAN $_SESSION USER LOGIN ====================
$_SESSION = [];

session_unset();
session_destroy();
header("Location: login.php");
