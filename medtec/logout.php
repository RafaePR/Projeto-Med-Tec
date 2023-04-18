<?php

include('connection/Connection.php');
include('connection/UserDAO.php');

$user = new UserDAO();

$logout = $user -> logout();