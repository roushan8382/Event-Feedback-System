<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'feedback');

$query="SELECT * from feeds";
$result=mysqli_query($con,$query);


?>


<html>
<head>
    <title>        
        Event feedback
    </title>
</head>

<style>
    body{
        background-image: url("image/feedback.jpg");
    }
</style>

    <body>
    <button style="width: 100px;"><a href="login.php">Logout</a> </button>
        <table align="center" border="1" style="width: 800px;line-height:30px;">
            <tr>
                <th colspan="13">
                    <h2>
                        Event Feedback
                    </h2>

                </th>
            </tr>
            <tr>
                <th>
                    Student Name
                </th>
                <th>USN</th>
                <th>Email Id</th>
                <th>Department</th>
                <th>Event</th>
                <th>Que1</th>
                <th>Que2</th>
                <th>Que3</th>
                <th>Que4</th>
                <th>Que5</th>
                <th>Que6</th>
                <th>Que7</th>
                <th>Que8</th>
            </tr>
            <?php
                while($row=mysqli_fetch_assoc($result))
                {
            ?>
                <tr>
                    <td><?php echo $row['s_name']; ?></td>
                    <td><?php echo $row['s_usn']; ?></td>
                    <td><?php echo $row['s_email']; ?></td>
                    <td><?php echo $row['s_department']; ?></td>
                    <td><?php echo $row['s_event']; ?></td>
                    <td><?php echo $row['s_q1']; ?></td>
                    <td><?php echo $row['s_q2']; ?></td>
                    <td><?php echo $row['s_q3']; ?></td>
                    <td><?php echo $row['s_q4']; ?></td>
                    <td><?php echo $row['s_q5']; ?></td>
                    <td><?php echo $row['s_q6']; ?></td>
                    <td><?php echo $row['s_q7']; ?></td>
                    <td><?php echo $row['s_q8']; ?></td>


                </tr>
            <?php
                }
            ?>

            
        </table>

       <h3  style="text-align: center;"><a href="list.php">click here</a> to see the register students list... </h3> 
    </body>
</html>