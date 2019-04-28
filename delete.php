<?php
require './classes/student.php';
$st_obj = new student();

$id=$_GET['id'];
$st_obj->delete_student($id);