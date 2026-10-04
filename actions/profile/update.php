<?php

if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['phone']) &&
    isset($_POST['address']) &&
    isset($_POST['bio'])
) {
    print_r($_POST);
} else {
    echo "Data profile belum lengkap.";
}