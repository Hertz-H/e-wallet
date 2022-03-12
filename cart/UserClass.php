<?php
include('DatabaseClass.php');

class User extends DatabaseClass{
  
    // private $db_obj;
    // public  function __construct(){
    //          $this->db_obj=new DatabaseClass();
    //     }
    function signUp($tb,$name,$email,$pass){
            $affected_rows=mysqli_query($this->connection_string,"insert into  $tb values(null,'$name', '$email','$pass')");
            return  $affected_rows;

    }
    function logIn($tb,$email,$pass){
        $result=mysqli_query( $this->connection_string,"select * from $tb where email='$email'" );
        if(mysqli_fetch_assoc($result)>0){
            $result=mysqli_query( $this->connection_string,"select * from $tb where email='$email'and password=$pass" );
            print_r($result);
            return  $result;
        }
        else{
            print_r($result);
            return $result;
        }
       
    }
    function selectUser ($tb,$email){
        $result=mysqli_query( $this->connection_string,"select * from $tb where email='$email'" ); 
        if($row=mysqli_fetch_assoc($result)){
           echo "user_retrivered user_id= ".$row['id'];
            return  $row;
        }
    }
  

}



?>