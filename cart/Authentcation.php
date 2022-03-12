<?php
session_start();
include('UserClass.php');
include('WalletClass.php');
  $user=new User();
  $wallet=new Wallet();
  if(isset($_POST)){
    //   print_r();
    if($_POST['action']=="sign_up"){
        $affected_rows=$user->signUp("user",$_POST['name'],$_POST['email'],$_POST['pass']);
        if($affected_rows>0){
            $row=$user->selectUser("user",$_POST['email']);
            if($row){
                $aff_rows=$wallet->intial_wallet("wallet",0,$row["id"]);
                if($aff_rows>0){
                header('location:log_in.php');
                }
                else{
                    echo "fiald insert into wallet";
                }
            }
            else{
                echo "invalid user_email";
            }
          
        }
        else{
            header('location:log_in.php?action=not');

        }
    }

    if($_POST['action']=="log_in"){
        $result=$user->logIn("user",$_POST['email'],$_POST['pass']);
        print_r($_SESSION);
        if($row=mysqli_fetch_assoc($result)){
            $_SESSION["u_id"]=$row["id"];
            print_r($_SESSION);
            header('location:home.php');
        }
        else{
            header('location:log_in.php?action=not');
        }
        
    }
    if($_POST['action']=="deposit"){
        if(isset($_SESSION["u_id"])&&$_SESSION["u_id"]!=""){
            $aff_rows=$wallet->update("wallet",$_POST['balance'],$_SESSION["u_id"]);
            print_r($_SESSION);
            print_r($_POST);

            if($aff_rows>0){
             
            header('location:cart.php');
            }
            else{
                echo "fiald insert into wallet";
            }

        }
        else{
            header('location:log_in.php');
        }
    }
 
  }
  print_r($_GET);
  if(isset($_GET)){
    if($_GET['action']=="checkout"){
     if( isset($_SESSION["u_id"])&&$_SESSION["u_id"]!=""){
         if($_SESSION['totall']>0){
            if((int)$_SESSION['totall']>(int)$_SESSION['balance']){
                header('location:cart.php?b=n');
               
            }
            else{
                $balance=(int)$_SESSION['balance'] - (int)$_SESSION['totall'];
                $wallet->withdraw('withdraw',(int)$_SESSION['totall'],$balance,$_SESSION["u_id"]);
                unset($_SESSION['cart']);
                unset($_SESSION['totall']);
                header('location:cart.php');
            }
         }
        
     }
     else{
        header('location:log_in.php');
     }
    }
    }

  ?>