<?php
session_start();
include('DatabaseClass.php');
include('WalletClass.php');
$wlet_obj=new Wallet();

?>



<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Document</title>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
<link rel='stylesheet' href='stylesheets/profile.css'>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>


</head>
<body>

<div class='dashboard_cont'>
<div class='container '>
    <!-- <div class='header_line'> -->
      <header class=''>
     
        <div class='navbar navbar-dark  '>
                    <div class='container nav_container '>
                        <span class='navbar-brand'>
                          <div class='user_img m-auto '>
                            <img  class=''src='/images/profile.jpg' alt=''>
                        </div>
                        </span>
                        <button class='navbar-toggler' data-bs-toggle='collapse' data-bs-target='#navbar-cont'>
                          <i class='fas fa-bars'>
                          </i>
                        </button>
                        <div class='navbar-collapse collapse ' id='navbar-cont' >
                            <ul class='navbar-nav '>
                                <li class='nav-item'><a href='' class='nav-link active colored'> <i class='fas fa-user'></i><span  > Personal Info</span> </a></li>
                                <li class='nav-item'><a href='' class='nav-link '> <i class='fas fa-user'></i><span  > Experince</span> </a></li>
                                <li class='nav-item'><a href='' class='nav-link'><i class='fas fa-user'></i><span  > Education</span></a></li>
                                <li class='nav-item'><a href='' class='nav-link'>  <i class='fas fa-user'></i><span  > Courses</span> </a></li>
                                <li class='nav-item'><a href='' class='nav-link'><i class='fas fa-user'></i><span  > skills</span> </a></li>
                                <li class='nav-item'><a href='' class='nav-link nav_icons'><i class='fas fa-user'></i><span  > log out</span> </a></li>
    
                            </ul>
                        </div>
                    </div>
                    <?php
                    if(isset($_SESSION["u_id"])&&$_SESSION["u_id"]!=""){
                      $row=$wlet_obj->display("wallet",$_SESSION["u_id"]);
                      
                      if($row){
                        echo "<h3 style='color:white;margin:auto;'>Your Balance is  ".$row['balance']."<a href='deposit.php' class=' d-inline add add_skls' style='color:white;'>Add</a> </h3>";
                        $_SESSION['balance']=$row['balance'];
                      }
                      else{
                        echo "<h3 style='color:white;margin:auto;'>cat not retrieve the balance</h3>";
                      }
                    }
                   
                    ?>
                </div>    
        </header>
      
    <!-- </div> -->
    <div class='dashboard d-flex  ' style='gap:70px'>
        
        <div class='form-container  '>
            <div class='skills_info'>
                <h3 class='d-inline'> products</h3><a class='add add_skls 'href='home.php'> products</a>
                            <div class='row g-2'>
                              
              
                           
                              <div class='col-12'>
                             
                    
                    
                    
                              <?php
                              
                              if (isset($_SESSION['cart'])){
                                    foreach($_SESSION['cart'] as $pro_arr){
                                    
                                          echo "
                                          <div class='card'>
                                          <div class='card-body'>
                                            <h5 class='card-title'><i  id='icon_cont'>".$pro_arr['name']."</i></h5>
                                            <h6 class='card-title'><i  id='icon_cont'>"."price :".$pro_arr['price']."$  "." Quantity:   ".$pro_arr['quantity']."</i>  
                                            <a href='add_to_cart.php?action=increase&&id=".$pro_arr['id']." class=' edit btn edit_icon' ><i class='fas fa-plus'></i></a>  <a href='add_to_cart.php?action=decrease&&id=".$pro_arr['id']." class=' edit btn edit_icon' ><i class='fas fa-minus'></i></a>  </h6>
                                            <a href='add_to_cart.php?action=delete&&id=".$pro_arr['id']." class=' edit btn edit_icon' > <i class='fas fa-trash'></i></a>
                
                                          </div>
                                      </div>
                                    
                                      
                                    
                                      ";
                                    }
                                    
                               
                                 }
                                ?>
                           
                            
                            </div>
                            
                </div>
                <?php  if(isset($_SESSION['cart'])&&$_SESSION['cart']!=""){
                
                $totall=0;
                foreach($_SESSION['cart']as $product ){
                   $totall+=(int)$product['price'];
                 }
                   $_SESSION['totall']=$totall;
                   echo" <h5 class='d-inline'> totall</h5><span>".$_SESSION['totall']."</span>
                   <div style='margin-top:30px'><a class='add add_skls 'href='Authentcation.php?action=checkout'> checkout</a></div>
                   </div>";
               
                   if(isset($_GET["b"])){
                     if($_GET["b"]=="n"){
                       echo "<span style='color:red; background-color:#ffff0029;'> *not enough balance</span>";
                     }
                   }
               }
         ?>
              </div>
            
    </div>



 

</div>
</div>
</div>

</body>





