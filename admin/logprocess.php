<?php
// login.php

// Include database connection
include_once 'db.php';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
}

  