



<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
  
  function insert()
  {
    alert("Successfull");
  }

</script>


    <link rel="stylesheet"   type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="bd1">

<div>
    <div class="e1"> <table><tr><td width="30%"><img class="logo" src="logo.png"></td>
        <td><ul class="nav" style="padding-left: 600px">
           <a href="home.html"> <li>Home</li></a>
           <a href="sports.html"> <li>Sports</li></a>
            <a href="register.php"><li>Register</li></a>
            <li>About Us</li></a>
            <li>Contact</li></a>
        </ul></td></tr></table></div>

    <div style="padding-top: 75px">

<div class="" style="padding: 20px 20px 20px 20px">
    <form action="insert.php" method="post"><div class="form-group">
       <h1>Player's Registration</h1>
        <table class="tbl01">
            <tr>
                <td class="td01">First Name</td>
                <td class="td01" >
                    <input type="text" class="form-control" name="first_name" placeholder="Your Full name:" style="width: 260px;height: 1%" required></td>
            </tr>

            <tr>
                <td class="td01">Last Name</td>
                <td class="td01"> <input type="text" class="form-control" name="last_name" placeholder="Your Full name:" style="width: 260px; height: 1%" required></td>
            </tr>

            <tr>
                <td class="td01">Index Number</td>
                <td class="td01">
                    <input type="text"  class="form-control" placeholder="Ex:PS/2015/123" name="student_number" style="width: 260px; height: 1% " required></td>
            </tr>



            <tr>
           <td class="td01">Sport Name</td>
           <td class="td01"><select name="sport" class="form-control form-control-sm" style="height: 1%" required>
               <option value="Badminton">Badminton</option>
               <option value="Baseball">Baseball</option>
               <option value="Basketball">Basketball</option>
               <option value="Chess">Chess</option>
               <option value="Carrom">Carrom</option>
               <option value="Cricket">Cricket</option>
               <option value="Elle">Elle</option>
               <option value="Football">Football</option>
               <option value="Hockey">Hockey</option>
               <option value="Karate">Karate</option>
               <option value="Netball">Netball</option>
               <option value="Road Race">Road Race</option>
               <option value="Scrabble">Scrabble</option>
               <option value="Rugby">Rugby</option>i
               <option value="Swimming">Swimming</option>
               <option value="Table Tennis">Table Tennis</option>
               <option value="Taekwondo">Taekwondo</option>
               <option value="Tennis">Tennis</option>
               <option value="Track & Field">Track & Field</option>
               <option value="Vollyball">Vollyball</option>
               <option value="Weightlifting">Weightlifting</option>
               <option value="Wresling">Wresling</option>
           </select>
           </td>
       </tr>
            <tr>
                <td class="td01">Gender</td>
                <td class="td01"> <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female" required> Female
                </td>
            </tr>




       <tr>
           <td class="td01">Faculty</td>
           <td > <select class="form-control form-control-sm" name="faculty" style="height: 1%" required>
               <option value="Commerce and Management Studies">Commerce and Management Studies</option>
               <option value="Computing and Technology">Computing and Technology</option>
               <option value="Humanities">Humanities</option>
               <option value="Medicine">Medicine</option>
               <option value="Science">Science</option>
               <option value="Social Science">Social Science</option>
               </select></td>
       </tr>
       <tr>
           <td class="td01">Contact Number</td>
           <td class="td01"> <input type="text" class="form-control" name="contact_number" placeholder="07xxxxxxxx" style="width: 260px; height: 1%" required></td>
       </tr>

      
       <tr>
           <td></td>
           <td style="padding-top: 15px" > <input type="submit"  class="btn btn-success" name="submit" value="Register" style="text-align: center width: 120px; padding-bottom: 30px; height: 28px; background-color: #7D0B12; color: white" required></td>
       </tr>
   </form>
   </table>
        <div class="row" style="padding: 30px 30px 30px 30px">
            <a href="home.html"><input type="button" class="btn btn-primary"  value="Back"></a>
            &nbsp;&nbsp;</div>
    </div>
 


</div>
</div>
</div>
</body>
</html>