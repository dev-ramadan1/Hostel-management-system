<?php
require_once 'includes/auth.php';

// Redirect to login if not logged in, otherwise to dashboard
if (isLoggedIn()) {
    header('Location: admin/dashboard.php');
} else {
    header('Location: login.php');
}
exit();
?>