<?php
require './classes/student.php';
$st_obj = new student();
$result=$st_obj->select_all_student();
?>

<html>
    <head>
        <title>view student</title>
    </head>
    <body>
        <table border="1" align="center" width="980px" height="900px">
            <tr>
                <td width="150" height="150">LOGO</td>
                <td colspan="2">BANNER</td>
            </tr> 
            <tr>
                <td colspan="3" height="50px">
                    <a href="add_student.php">Add student</a>&nbsp;
                    <a href="view_student.php">view student</a>
                </td>

            </tr> 
            <tr>
                <td>LEFT</td>
                <td valign="top">
                    <table border="1" align="center" width="90%">
                        <h3>View All Student</h3>
                        <hr/>
                        <tr>
                            <th>Sn#</th>
                            <th>Student Id</th>
                            <th>Student Name</th>
                            <th>Student Email Adress</th>
                            <th>Mobile Number</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $i=1;
                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $i;
                            ?></td>
                            <td><?php echo $row['student_id'] ?></td>
                            <td><?php echo $row['student_name'] ?></td>
                            <td><?php echo $row['student_email'] ?></td>
                            <td><?php echo $row['mobile_number'] ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['student_id']; ?>">Edit</a>
                                <a href="delete.php?id=<?php echo $row['student_id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php
                        $i++;
                        }
                        ?>
                    </table>
                    
                <td width="150px">RIGHT</td>

            </tr> 
            <tr>
                <td colspan="3" height="80px">FOOTER</td>


            </tr> 

        </table>


    </body>
</html>










