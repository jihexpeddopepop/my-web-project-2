<?php 
session_start();
include('connectdb.php');              
                  $username = $_POST['txt_username'];
                  $password = $_POST['txt_password'];
                  $sql="SELECT * FROM book_login where book_login_username='".$username."' and book_login_password='".$password."'";
                  $result = mysqli_query($con,$sql);
        
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                  
                      $_SESSION["book_login_level_id"]=$row["book_login_level_id"];
                      $_SESSION["book_login_username"]=$row["book_login_username"];
                      $_SESSION["booK_dept_id"]=$row["book_dept_id"];
                      if($row["book_login_level_id"] =='1'){
                        Header("Location:../home/insert.php"); 
                      }else{
                        Header("Location:../home/insert_user.php"); 
                      }
                      
                      }else{           
                    echo "<script>";
                        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
                  }
?>