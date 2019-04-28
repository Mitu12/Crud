<?php
require './classes/student.php';
$st_obj = new student();
$id=$_GET['id'];
$result=$st_obj->select_student_by_id($id);
$student_info= mysqli_fetch_assoc($result);

if(isset($_POST['btn'])){
    $st_obj->upate_student_info($_POST);
    
}
?>

<html>
    <head>
        <title>Edit student</title>
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
                    <h3>Edit Student </h3>
                    <hr/>
                    <h4 style="color: green">
                        
                       
                    </h4>
                    <form action="" method="post">
                        <table border="1" align="center" width="500px">
                            <tr>
                                <td>Student Name</td>
                                <td>
                                    <input  type="text" value="<?php echo $student_info['student_name']?>"name="student_name">
                                    <input  type="hidden" value="<?php echo $student_info['student_id']?>"name="student_id">
                                </td>
                            </tr>
                            <tr>
                                <td>Student Email</td>
                                <td>
                                    <input  type="text"name="student_email" value="<?php echo $student_info['student_email']?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Student Mobile</td>
                                <td>
                                    <input  type="text"name="mobile_number" value="<?php echo $student_info['mobile_number']?>">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input  type="submit"name="btn"value="update">
                                </td>
                            </tr>
                        </table>
                    </form></td>
                <td width="150px">RIGHT</td>

            </tr> 
            <tr>
                <td colspan="3" height="80px">FOOTER</td>


            </tr> 

        </table>


    </body>
</html>
