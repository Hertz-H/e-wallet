<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/stylesheets/profile.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
   
</head>

<body>

    <div class="dashboard_cont">
    <div class="container ">
        <!-- <div class="header_line"> -->
          <header class="">
         
            <div class="navbar navbar-dark  ">
                        <div class="container nav_container ">
                            <span class="navbar-brand">
                              <div class="user_img m-auto ">
                                <img  class=""src="/images/profile.jpg" alt="">
                            </div>
                            </span>
                            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-cont">
                              <i class="fas fa-bars">
                              </i>
                            </button>
                            <div class="navbar-collapse collapse " id="navbar-cont" >
                                <ul class="navbar-nav ">
                                    <li class="nav-item"><a href="" class="nav-link active colored"> <i class="fas fa-user"></i><span  > Personal Info</span> </a></li>
                                    <li class="nav-item"><a href="" class="nav-link "> <i class="fas fa-user"></i><span  > Experince</span> </a></li>
                                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-user"></i><span  > Education</span></a></li>
                                    <li class="nav-item"><a href="" class="nav-link">  <i class="fas fa-user"></i><span  > Courses</span> </a></li>
                                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-user"></i><span  > skills</span> </a></li>
                                    <li class="nav-item"><a href="" class="nav-link nav_icons"><i class="fas fa-user"></i><span  > log out</span> </a></li>
        
                                </ul>
                            </div>
                        </div>
                    </div>    
            </header>
          
        <!-- </div> -->
        <div class="dashboard d-flex  " style="gap:70px">
           
            <div class="form-container  ">

                <h3 > Desposit</h3>
                <form class="row g-3  "action='Authentcation.php' method='post' >
              <input style="display:none" type="text" class="form-control " id="inputName" placeholder="First Name" name="action" value="deposit"  >
                    <div class="col-md-12">
                      <label for="Proficiency" class="form-label"></label>
                      <input type="text" class="form-control" id="Proficiency" name="balance"required >
                    </div>
                    <div class="col-2">
                      <button type="submit" class="btn save">Save</button>
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn cancel">Cancel</button>
                      </div>
                  </form>
               
              </div>
        </div>
    

  
     
 
</div>


  


  



</div>



</div>


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
</body>
</html>