<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/profile.css">
    <title>Document</title>
</head>
<body>
    <nav  class="nw navbar navbar-expand-lg bg-secondry ">
        <div  class="container-fluid">
            <img class="img" src="img/logo.png">
          <a id="logo"  class="navbar-brand" href="#">Molto delizioso</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="item" class="navbar-nav me-auto mb-2 mb-lg-0">
              <li  class="items nav-item">
                <a class="nav-link " aria-current="page" href="../home.php">Home</a>
              </li>
              <li  class="items nav-item">
                <a class="nav-link " aria-current="page" href="../all_menu.php">Menu</a>
              </li>
              
              <li >
                <i class="cart fa-solid fa-cart-arrow-down"><sup  class=" m-1 text-black fs-6"><?php  echo number_cart_food(); ?></sup> : <span class="text-black">$ <?php total_cart_price();?></span></i>
              </li>
                             
            </ul>
         
                
            </ul>
         
       
            <a href="./logout.php"><button class="login-button btn" type="submit">Logout</button></a>
          </div>
        </div>
      </nav>

      <!--end navbar-->

      <!--start profile-->

   <!--start profile header-->
   
      <h2 class="text-center mt-3 fw-bold">Your Profile:</h2>

      <div class="user">
        <div class="user-info">
        <div class="imge-profile">
            <img class="rounded-circle" src="../img/suliman.jpeg">

        </div>
        <div class="text-profile">
            <p class="fs-4">Your Name</p>
            <p>Phone</p>
            <p>Emial</p>
          
        </div>
    </div>
    <div class="user-num-order">
        <div class="content">
        <div class="icon">
          
            <i class="fa-solid fa-bag-shopping text-success"></i>
            <p class="fs-5 mt-2 ">15</p>
            <p class="fs-5 mt-2 ">Number ORDER</p>
        </div>

        <div class="icon">
            <i class="fa-solid fa-tag text-danger"></i>
            
            <p class="fs-5 mt-2 ">15</p>
            <p class=" fs-5 mt-2 ">Number Pinding Order</p>

        </div>

        <div class="icon">
            <i class="fa-solid fa-comment text-warning"></i>
            <p class="fs-5 mt-2 ">15</p>
            <p class="fs-5 mt-2 ">Number massage</p>

        </div>
    </div>
    </div>
      </div>
       <!--end profile header-->

       <div class="profile-body">
        <div class="profile-body-edit">
            <h3 class="text-center mt-3 fw-bold" ">Edit Profile</h3>
         <P class="m-4 fs-4">Edit profile</P>
         <form class="m-4 " enctype="multipart/form-data">
            <label class="fs-4 m-1"> Add Image Profile: </label>
            <input type="file">
            <button type="button" class=" mt-3 text-white btn btn-warning">submit</button>
         </form>
         <P class="m-4 fs-4">Edit profile</P>
        </div>





        <div class="profile-show">  

            <div class="profile-select">
                <button type="button" class=" btn btn-outline-dark mt-3 m-3 " style="--bs-btn-padding-y: .40rem; --bs-btn-padding-x: 5rem; --bs-btn-font-size: 1rem;">
                    All Order</button>
                <button type="button" class=" btn btn-outline-dark mt-3 m-3  " style="--bs-btn-padding-y: .40rem; --bs-btn-padding-x: 5rem; --bs-btn-font-size: 1rem;">
                    Pinding Order</button>
                <button type="button" class= "btn btn-outline-dark mt-3 m-3 "style="--bs-btn-padding-y: .40rem; --bs-btn-padding-x: 5rem; --bs-btn-font-size: 1rem;">
                    Done Order</button>
            </div>
            <div class="show-all">
                <h3 class="text-center mt-3 mb-5 fw-bold">Show Order</h3>
                
                <div class="row m-3">



                    <div class="col-xxl-4">

                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
  
                    </div>


                    <div class="col-xxl-4">


                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>


                    </div>
                    <div class="col-xxl-4">

                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>


                    </div>
                    <div class="col-xxl-4">

                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>


                    </div>
                    
                </div>

       </div>


    </div>




<!--start footer-->
<div class="container-faluid " >
<div class=" w-100 "  style="background-color:black; height:60px;">
  <p class="pt-3 text-center text-warning fs-5"><span>&copy;</span> 2023 All Rights Reserved By Suliman Bassam Alajarmeh 2023 </p>
</div>
</div>
<!--end  footer-->  
</body>



</html>