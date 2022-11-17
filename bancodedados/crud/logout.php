<?php
require 'autent.php';

session_destroy();

header('location:../login/index.php');