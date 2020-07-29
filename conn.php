<?php
$conn = mysqli_connect("localhost", "root", "souvikmondal", "alphacoders");
if (mysqli_connect_error()) {
    echo "connection is not done because of" . mysqli_connect_error();
}
