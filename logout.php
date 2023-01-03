<?php
session_start();
if (isset($_SESSION['UserID']))
{
    unset($_SESSION['UserID']);
}
echo 'donee';


die();

 ?>