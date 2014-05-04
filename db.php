<?php
$mysqli = new mysqli("107.170.159.107", "root", "", "NYUSquare");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>