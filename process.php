<?php

if (isset($_POST["submit"])) {
    echo "It works";
}

else {
    header("location: ../index.php");
}