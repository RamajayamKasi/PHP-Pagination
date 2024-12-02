<?php
include_once "../classes/class.index.php";
include_once '../classes/class.connection.php';
$pagination = new pagination($conn);
echo $pagination->GetStudentData($_POST['page']);