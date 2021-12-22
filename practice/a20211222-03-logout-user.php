<?php
session_start();

unset($_SESSION['user']);

header("Location: a20211222-02-login-form.php");

