<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>
    :root{
    --main-color:#28b661;
    --secondary-color:#f3f5f0;
}
.Sign{
    /* background-color: wheat; */
    box-shadow: 0 8px 16px rgba(0, 0, 0, .15);
    padding:20px;
    width:400px;
        margin: auto;
        margin-top:30px;
        border-radius: 5px;

       
}

    .Sign h3{
        margin: 5px 0 15px 0;
        padding-bottom:20px;
        color:var(--main-color);
        /* padding-top:px; */
        border-bottom: 1px var(--main-color) solid;
       
    }
    .Sign .btn{
        background-color:var(--main-color);
        color:white;
        display: block;
        margin-top:20px;
        margin-bottom:15px;
        width: 100%;
        
    }
    
    .form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #28b661 ;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgb(76 175 80 / 27%) ;
     
    }
    @media(max-width:768px){
        .Sign{
                width:80%;
        }
    }
</style>
<body>
    <div class=" Sign  ">
        <h3 class="text-center " > log in</h3>
        <form class="row g-3 needs-validation" novalidate method="post" action="Authentcation.php">
            <div class="col-12">
              <input style="display:none" type="text" class="form-control " id="inputName" placeholder="First Name" name="action" value="log_in"  >
              <label for="inputEmail" class="form-label">Email</label>
              <input type="Email" class="form-control" id="inputEmail" placeholder="username@gmail.com" name="email" value="" required>
              <span style="color:red;font-size:12px"><?php $email_error ?> </span>

            </div>
            <div class="col-md-12">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pass"value=""required>
              <span style="color:red;font-size:12px"><?php $pass_error ?> </span>
            </div>
            <div class="col-12 ">
              <button type="submit"  class="btn  save">log in</button>
            </div>
            
          </form>
      </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>