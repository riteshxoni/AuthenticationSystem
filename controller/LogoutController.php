<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../views/login.php?success=You have been logged out.");
    exit;
?>