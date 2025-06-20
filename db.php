<?php

    $con=mysqli_connect('localhost','root','','crud');
    session_start();
         
if(isset($_POST['signup']))
{
    $n=$_POST['n'];
    $e=$_POST['e'];
    $m=$_POST['m'];
    $p=$_POST['p'];
    if($n=="" || $e=="" || $m=="" || $p=="")

    {
        $msg= "Please fill Everything !...You have missed something !";
        require('signup.php');
        exit;  
    }
    else
    {

    $sql="select * from userdetails where email='$e'";
    $exc=mysqli_query($con,$sql);
    $ref=mysqli_num_rows($exc);
   
        if($ref>=1)
        {
             $msg= "Email Exists...Please check !";
            require('signup.php');
            exit;
         }
         else
         {

            $sql = "INSERT INTO userdetails (name, email, mobile, password) VALUES ('$n', '$e', '$m', '$p')";
            $exc=mysqli_query($con,$sql);

            if($exc==true)
            {
                 $msg= "Data is inserted secussfully";
                require('signup.php');
            }
            else
            {
                 $msg= "ERROR! Data is not inserted";
                require('signup.php');
            }
        }
    }
}
elseif(isset($_POST['login']))
{
    $e=$_POST['email'];
    $p=$_POST['pass'];
   if(!empty($e) && !empty($p))
    {
       $sql="select * from userdetails where email='$e'";
       $res=mysqli_query($con,$sql);
       $row=mysqli_num_rows($res);
       if($row> 0)
       {
            $sql="select * from userdetails where email='$e' && password='$p' ";
            $res=mysqli_query($con,$sql);
            $row=mysqli_num_rows($res);
            if($row>0)
            {
                $sql="select * from userdetails where email='$e' && password='$p' ";
                $res=mysqli_query($con,$sql);
                $row=mysqli_fetch_array($res);
                $uid=$row['uid'];
                $_SESSION['uid']=$uid;
                require 'profile.php';
            }
            else
            {
                $msg= "Wrong Password !";
                require('index.php');
                exit();
            }
       }  
       else
       {
            $msg= "Worng Email !";
            require('index.php');
            exit();
         
       }     
       
    }
   else
   {
       $msg= "Please fill Everything !...You have missed something !";
        require('index.php');
        exit();
    }

}
elseif(isset($_GET['edit']))
{


    if(!empty($_SESSION['uid']))
    {
        require('edit.php'); 
        exit(); 
    }
    else
    {
        require("index.php");
        exit();
    }       
}

elseif(isset($_POST['update']))
{
   
    if(!empty($_SESSION["uid"]))
        {
            $uid=$_SESSION['uid'];
            $n=$_POST['n'];
            $m=$_POST['m'];
            $sql="UPDATE userdetails SET name='$n' WHERE uid='$uid'";
            $exc=mysqli_query($con,$sql);
            require("profile.php");
            exit();
    }
    else
    {
       header("Location:http://localhost/CRUD/index.php");
    }


}
elseif(isset($_GET['deleteacc'])){
     if(!empty($_SESSION["uid"]))
    {
   $uid=$_SESSION['uid'];
   
    $sql = "DELETE FROM userdetails WHERE uid='$uid'";
    $exc = mysqli_query($con, $sql); 
    header("Location:http://localhost/CRUD/index.php");
    exit();

    }
    else
    {
         header("Location:http://localhost/CRUD/index.php");
         exit();
    }


}
elseif(isset($_GET["logout"]))
{
       session_unset();
       session_destroy();
       header("Location:http://localhost/CRUD/index.php");

       if(isset($_COOKIE[session_name()])):
        setcookie(session_name(), '', time()-7000000, '/');
    endif;
}



      
   
 

?>