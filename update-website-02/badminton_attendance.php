<?php session_start(); 

 require_once('connection.php'); ?>




<?php 
    $details_list ='';

    $query = "SELECT * FROM student_details WHERE sport='Badminton'";
    $student_detail = mysqli_query($conn,$query);

    if($student_detail){
        while ($student_details = mysqli_fetch_assoc($student_detail)) {
            # code...
            $details_list .="<tr>";
            $details_list .="<td>{$student_details['student_number']}</td>";
            $details_list .="<td>{$student_details['fullname']}</td>";
            $details_list .="<td>{$student_details['atendence']}</td>";
            $details_list .="<td>{$student_details['pracentage']}</td>";
            $details_list .="<tr>";
        }
    }else{
        echo "database query failed";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Badminton Attendance</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        #wrap{
            width: 100%;
            height: 500px;

        }
        h4{
            font-size: 22px;
            color: #020404;
            text-align: center;
            font-weight: bold;
            font-family: sans-serif,Serif;
        }
    </style>
</head>
<body>
<div id="wrap">


    <div class="jumbotron" style="padding: 0px 20px 20px 20px">
        <h3 align="center" style="padding-top:20px;">  Badminton Attendance
</h3>
       <!--  <div align="right">
            <a href="badminton_attendance_women.html"><input type="button" class="btn btn-primary" value="Click for view Women attendance"></a>
            &nbsp;&nbsp;
        </div> -->
        <form action="#">

        </form>
        <br>
        <hr>
        <table class="table table-bordered table-hover" >

            <thead >
            <tr>
                <td bgcolor="aqua">Index Number</td>
                <td bgcolor="aqua">Student Name</td>
                <td bgcolor="red">Attendance<?php echo " This Month Etendence"." - ".date('m/y');?></td>
                <td bgcolor="red">Presentage(%)</td>

                <td></td>
            </tr>
            </thead>
 <tbody>
    <?php echo $details_list; ?>
  </tbody>

        </table>
    </div>
</div>

</body>
</html>