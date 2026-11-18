<?php
declare(strict_types=1);
require __DIR__ . '/bootstrap.php';

if (isset($_SESSION['user'])) {
    redirect('dashboard.php');
}

redirect('login.php');
