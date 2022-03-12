<?php
class DatabaseClass {
    private $host = "localhost";
    private $username = "root"; 
    private $password = ""; 
    private $db = "e-commerce"; 
    protected $connection_string;
    public  function __construct(){
        try{
            $this->connection_string=mysqli_connect($this->host,$this->username,$this->password,$this->db) ;
        }
   catch(error){
        echo" error in connection";
   }
    }
  public function __get($name){
      if($name==connection_string){
          return $this->connection_string;
      }

  }
    public function display_selected($tb,$id){
        $result=mysqli_query( $this->connection_string,"select * from $tb where id=$id" );
        return  $result;
         
    }
    public function delete($tb,$id){
        $affected_rows=mysqli_query($this->connection_string,"update $tb set active =0 where id=$id" );
        return  $affected_rows;
        
    }
   
}
?>