<?php



$con=mysqli_connect('localhost','root','','feedback');




if(isset($_POST['sname'])){
    if(!empty($_POST['sname']) && !empty($_POST['semail']) ){
        $name=$_POST['sname'];
        $usn=$_POST['susn'];
        $email=$_POST['semail'];
        $department=$_POST['department'];
        $event=$_POST['event'];
        $qu1=$_POST['q1'];
        $qu2=$_POST['q2'];
        $qu3=$_POST['q3'];
        $qu4=$_POST['q4'];
        $qu5=$_POST['q5'];
        $qu6=$_POST['q6'];
        $qu7=$_POST['q7'];
        $qu8=$_POST['q8'];

        $query="INSERT into feeds(s_name,s_usn,s_email,s_department,s_event,s_q1,s_q2,s_q3,s_q4,s_q5,s_q6,s_q7,s_q8) values('$name','$id','$email','$department','$event','$qu1','$qu2','$qu3','$qu4','$qu5','$qu6','$qu7','$qu8')";
        #$run=mysqli_query($con,$query) ;
        if(!mysqli_query($con,$query)){
            echo "Form does not Sucessfully";
        }
        else{
            echo "Form submited";
        }
    }
    else{
        echo "all fields required";
    }
    







}
?>
<html>
<style>
    body{
        background-image: url("image/studentlogin.jpg");
    }

    table{
        margin-top: 140px;
        color: navy;
    }
</style>   <body>
    <br>

        <button style="width: 100px;"><a href="studentlogin.php">Logout</a> </button>
    </body>
</html>