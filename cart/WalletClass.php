<?php

class Wallet extends DatabaseClass {
    //dispose
function add($tb,$balance,$u_id){
    $date=date("Y-m-d");
    $affected_rows=mysqli_query($this->connection_string,"insert into  $tb values(null,'$balance','$date','$u_id')");
    return  $affected_rows;

}
function intial_wallet($tb,$balance,$u_id){
  
    $affected_rows=mysqli_query($this->connection_string,"insert into  $tb values(null,'$balance','$u_id')");
    return  $affected_rows;

}

//display balance
function display($tb,$id){
 
    $result=mysqli_query( $this->connection_string,"select * from $tb where u_id='$id'" );
    if($row=mysqli_fetch_assoc($result)){
        return $row;
    }
    else{
        echo "no result";
    }
}
//check balance
// function check() {


// } 
function withdraw($tb,$amount,$balance,$u_id) {
  
    $affected_rows= $this->add($tb,$amount,$u_id);
    if($affected_rows){
        $aff_rows=mysqli_query($this->connection_string,"update wallet set balance='$balance' where u_id='$u_id'" );
        if($aff_rows){
            echo" updated";
        }
        else{
            echo"fail to update";
        }
        echo" insert to withdraw";
    }  
    else{
        echo" fail to insert to withdraw";
    }
   

} 
//update balance
function update($tb,$balance,$u_id) {
    $affected_rows=$this->add('deposit',$balance,$u_id);
    $row=$this->display($tb,$u_id);
    $balance=$balance+$row['balance'];
    $affected_rows=mysqli_query($this->connection_string,"update $tb set balance='$balance' where u_id='$u_id'" );
    if($affected_rows){
        return  $affected_rows;
    }
    
    else{
        echo "no updated";
        
    }
   

} 


}




?>