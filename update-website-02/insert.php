<?php

require_once('connection.php'); 

if(isset($_POST['submit'])){

    $have = false;

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $fullname = $first_name.$last_name;
    $student_number = $_POST['student_number'];
    $sport = $_POST['sport'];
    $gender = $_POST['gender'];
    $faculty = $_POST['faculty'];
    $contact_number = $_POST['contact_number'];

    $sql = "select * from student";
    $result = mysqli_query($sql);

    while ($row=mysqli_fetch_array($result)) 
    {
        if($row[3]==$student_number && $row[4]==$sport)
        {
            $have = true;
        }
    }


if($have)
{
    echo "<script type='text/javascript'> alert('Cannot Insert');</script>";
    header("refresh:2;url=register.php");
}
else
{

$query = "INSERT INTO student(first_name,last_name,student_number,sport,gender,faculty,contact_number) VALUES ('$first_name','$last_name','$student_number','$sport','$gender','$faculty','$contact_number')";

$query1 = "INSERT INTO student_details(student_number,fullname,sport) VALUES ('$student_number','$fullname','$sport')";

    $query_run = mysqli_query($conn,$query);
    $query_run1 = mysqli_query($conn,$query1);

    if($query_run)
    {
       //echo "<script type='text/javascript'> alert('Success');</script>";
        if($query_run1){
        echo "<script type='text/javascript'> alert('Succuess');</script>";
        header("refresh:20;url=register.php");
        }

         
        
    }
    else{

        echo "<script type='text/javascript'> alert('Not Succuess');</script>";
        header("refresh:20;url=register.php");
    }

     
}

mysqli_close($conn);
}




 

?>