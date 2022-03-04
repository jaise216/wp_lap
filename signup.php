<?php
$data = $_POST;
if(empty($data['username'])||
   empty($data['password'])||
   empty($data['email'])||
   empty($data['password_confirm']))
{
die('please fill all requested fields');
}
if($data['password']!=$data['password_confirm'])
{
die('password and confirm password should match');
}
?>
