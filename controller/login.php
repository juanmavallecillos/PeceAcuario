<?php

if (isset($_SESSION['username'])){
    include __DIR__ . '/../view/php/logout.php';
}
else {
    include __DIR__ . '/../view/php/login.php';
}

?>