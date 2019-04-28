<?php
require './classes/student.php';
$st_obj = new student();
if (isset($_POST['btn'])) {
   $result=$st_obj->save_student($_POST);
}
?>

<html>
    <head>
        <title>Add student</title>
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
                    <h3>Add Student </h3>
                    <hr/>
                    <h4 style="color: green">
                        <?php
                        if (isset($_SESSION["message"])){
                            echo $_SESSION["message"];
                        

                        }
                        ?>
                       
                    </h4>
                    <form action="" method="post">
                        <table border="1" align="center" width="500px">
                            <tr>
                                <td>Student Name</td>
                                <td>
                                    <input  type="text"name="student_name">
                                </td>
                            </tr>
                            <tr>
                                <td>Student Email</td>
                                <td>
                                    <input  type="text"name="student_email">
                                </td>
                            </tr>
                            <tr>
                                <td>Student Mobile</td>
                                <td>
                                    <input  type="text"name="mobile_number">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input  type="submit"name="btn"value="save">
                                </td>
                            </tr>
                        </table>
                    </form></td>
                    <?php// $_SESSION["message"]=''; ?>
                <td width="150px">RIGHT</td>

            </tr> 
            <tr>
                <td colspan="3" height="80px">FOOTER</td>


            </tr> 

        </table>


    </body>
</html>
