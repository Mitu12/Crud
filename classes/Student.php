    <?php
session_start();
    class Student {

      

public function __construct() {
            $servername= 'localhost';
            $username = 'root';
            $password ='';
            $dbname = "db_ci";
       
            $this->conn = mysqli_connect($servername, $username, $password, $dbname);
         if (!$this->conn) {
             die("Connection failed: " . mysqli_connect_error());
         }
         return  $this->conn;

    }
        

        public function save_student($data) {
            
            $sql = "INSERT INTO tbl_student(student_name,student_email,mobile_number) VALUES ('$data[student_name]','$data[student_email]','$data[mobile_number]')";
            
            $check = mysqli_query($this->conn,$sql);
            
            if($check){
                // session_start();
                 $_SESSION["message"]="Save information successfully!";
             }else{
                // session_start();
                $_SESSION["message"]="Save information failed!";
             }
           header("Location:add_student.php");
            //return $message;
        }
        
        public function select_all_student(){
            $sql="SELECT * FROM tbl_student";
             $result=mysqli_query($this->conn,$sql);
             return $result;
             
        }
        public function delete_student($id){
            $sql="DELETE FROM tbl_student WHERE student_id=$id";
            mysqli_query($this->conn,$sql);
            header("Location:view_student.php");
        }
        public function select_student_by_id($id){
             $sql="SELECT * FROM tbl_student WHERE student_id=$id";
             $result=mysqli_query($this->conn,$sql);
             return $result;
        }
        public function upate_student_info($_abc){
            $sql="UPDATE tbl_student SET student_name='$_abc[student_name]', student_email='$_abc[student_email]',mobile_number='$_abc[mobile_number]'WHERE student_id='$_abc[student_id]'";
            mysqli_query($this->conn,$sql);
            header("Location:view_student.php");
        }

    }
