<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <!-- Icon Plugins CSS -->
    <link rel="stylesheet" href="assets/css/iconplugins.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Responsive CSS -->
    
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Title -->
    <title>My Fitness Club</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    <style>
      
       @media(max-width:738px){
        .hiiiiiii{
          display:none;
        }
        .mobile-responsive-nav {
          width: 100%;
          display: block;
          z-index: 999;
          background: #fff;
          position: fixed;
          /* box-shadow-: 0 0 1rem black; */
        }
       }
       

    </style>
    <style>
        .bro-p {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 10px;
            gap: 20px;
            z-index: 1000;
            margin: 50px 0;
        }

        .img-bro {
            background-image: url(assets/images/Image1.JPG);
            background-position: center;
            width: 350px;
            height: 500px;
            background-repeat: no-repeat;
            border-radius: 20px;
            overflow: hidden;
            /* padding-top: 200px; */
            /* aspect-ratio: 4/3; */
        }
        .con-bro{
         color: white;  padding-top: 150px;
            position: relative;
        }
        .con-bro .back-bro{
            background: rgb(255, 48, 48); border-radius: 20px;
            position: absolute;
            top: 310%;
            transition: 1s;
        }
        .img-bro:hover .back-bro{
            top: 100%;
        }



        .br-one{
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        width: 100%;
        gap: 20px;
        /* padding: 40px 10px; */
        
      }
      .br-two{
        width: 270px;
        /* height: 400px; */
        border: 1px solid grey;
        border-radius: 15px;
        overflow: hidden;
        background: rgb(24, 24, 24);
      }
      .br-cen{
        text-align: center;
        padding: 20px 0;
        /* background: black; */

      }
      .br-cen h4{
        color: rgb(255, 255, 255);
        font-weight: bold;
      }
      .br-cen h3{
        color: red;
        font-weight: bold;
      }
      @media (max-width:450px) {
        .br-two{
          width: 100%;
        }
        .br-one{
          padding:20px;
        }
      }


      <!-------------------------------final    ---------------------------> */

    .br-final {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap:5%;
      width: 100%;
      padding: 20px 0;
    }

    .br-sub {
      width: 45%;
      /* border: 2px solid rgb(0, 0, 0); */
      background: black;
      text-align: center;
      margin-bottom: 20px;
    }

    .br-4 {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 5%;

    }

    .br-s4 {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      border: 1px solid red;
      background: red;
      /* width: 40%;  */
      height: 200px;
      width: 200px;
      margin-bottom: 30px;
      border-radius: 5px;
    }

@media (max-width:780px) {
  .br-final{
    padding: 20px 10px;
  }
  .br-sub{
    width: 100%;
  }
  .br-s4{
    width: 180px;
    height: 180px;
  }
}
@media (max-width:450px) {
  
  .br-s4{
    width: 140px;
    height: 140px;
  }
  .br-s4 h3{
    font-size: 15px;
  }
}

    </style>
  </head>
  <body>
    <!-- Start Navbar Area -->
     
     <div class="hiiiiiii" style=" position:fixed; z-index:100000000000; background:white; width:100%;">
     <marquee style="background:red; z-index:100000000; " behavior="" direction=""> <h4 style="color:white;"><b>Our Gym (My Fitness Club) are open 24X7. Time:- (05AM To 11PM) and We are always available for your support...... </b></h4></marquee>
    <div class="habibi" style= " display: flex; justify-content: space-between; align-items: center;">
      <div class="phoimg ps-2"  >
        <img src="assets/images/logo.png" width="80px" alt="">
      </div>
      <div class="links-h">
        <a style="text-decoration:none; color:black; padding-left: 30px; font-weight:bold;" href="index.php">Home</a>
        <a style="text-decoration:none; color:black; padding-left: 30px; font-weight:bold;" href="about.php">About Us</a>
        <a style="text-decoration:none; color:black; padding-left: 30px; font-weight:bold;" href="contact.php">Contact</a>
      </div>
      <div class="icon-f-i">
       <a style="text-decoration:none; color:black; padding-right: 10px;  font-size:25px;"  href="https://www.instagram.com/myfitnessclub_official?igsh=anBvb2M1eHF0NTJm&utm_source=qr"><i class="fa-brands fa-instagram"></i></a>
       <a style="text-decoration:none; color:black; padding-right: 30px; font-size:25px;"  href="https://www.youtube.com/@MyFitnessClub17"><i class="fa-brands fa-youtube"></i></a>
      </div>
      
    </div>
   
    </div>
      




    <div class="navbar-area">
      <div class="mobile-responsive-nav">
      <marquee style="background:red; z-index:100000000; " behavior="" direction=""> <h4 style="color:white;"><b>Our Gym (My Fitness Club) are open 24X7. Time:- (05AM To 11PM) and We are always available for your support...... </b></h4></marquee>
        <div class="container wanted">
          <div class="mobile-responsive-menu">
            <div class="logo d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="index.php">
              <img src="assets/images/logo.png" alt="Logo" width="50px" />
            </a>
            <a href='#' class="hamburgar">
              <i class="fa fa-bars"></i>
            </a>
            </div>
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a href="index.php" class="nav-link text-dark"> Home </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="service.php" class="nav-link text-dark"> Services</a>
                </li> -->
                <li class="nav-item">
                  <a href="about.php" class="nav-link text-dark"> About Us </a>
                </li>
                <li class="nav-item">
                  <a href="contact.php" class="nav-link text-dark">Contact Us</a>
                </li>
              </ul>

          </div>
        </div>
      </div>
      <!-- Menu For Desktop Device -->
       <div class="desktop-nav nav-area bg-white">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="index.php">
              <img src="assets/images/logo.png" alt="Logo" width="80px" />
            </a>

            <div
              class="collapse navbar-collapse mean-menu"
              id="navbarSupportedContent"
            >
              <ul class="navbar-nav ">
                <li class="nav-item">
                  <a href="index.php" class="nav-link text-dark"> Home </a>
                </li>
                <li class="nav-item">
                  <a href="service.php" class="nav-link text-dark">
                    Services
                  </a>
                </li>

                <li class="nav-item">
                  <a href="about.php" class="nav-link text-dark"> About Us </a>
                </li>

                
                <li class="nav-item">
                  <a href="contact.php" class="nav-link text-dark">
                    Contact Us
                  </a>
                </li>
              </ul>

              <div class="others-options d-flex align-items-center">
                <div class="optional-item">
                  <div class="search-btn">
                    <a class="#" href="https://www.instagram.com/myfitnessclub_official?igsh=anBvb2M1eHF0NTJm&utm_source=qr" data-bs-toggle="modal">
                      <i class="fa-brands fa-instagram text-dark mx-1 fs-3"></i>
                    </a>
                   
                    <a class="#" href="https://www.youtube.com/@MyFitnessClub17" data-bs-toggle="modal">
                      <i class="fa-brands fa-youtube text-dark mx-1 fs-3"></i
                    ></a>
                  </div>
                </div>
              </div>

              <div class="mobile-nav">
                <div class="mobile-other d-flex align-items-center">
                  <div class="optional-item">
                    <div class="search-btn">
                      <a
                        class="#"
                        href="#searchmodal"
                        data-bs-toggle="modal"
                        data-bs-target="#searchmodal"
                      >
                        <i class="flaticon-loupe"></i>
                      </a>
                    </div>
                  </div>

                  <div class="optional-item">
                    <a class="optional-item-cart color-ffffff" href="cart.html">
                      <i class="flaticon-shopping-cart"></i>
                      <span>2</span>
                    </a>
                  </div>

                  <div class="optional-item">
                    <div class="side-menu">
                      <a
                        class="#"
                        href="#sidebarmodal"
                        data-bs-toggle="modal"
                        data-bs-target="#sidebarmodal"
                      >
                        <i class="ri-menu-line"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div> 
    <!-- End Navbar Area -->

    <!-- Modal Start -->
    <div
      class="modal fade fade-scale searchmodal"
      id="searchmodal"
      tabindex="-1"
      role="dialog"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-bs-dismiss="modal">
              <i class="ri-close-line"></i>
            </button>
          </div>
          <div class="modal-body">
            <form class="modal-search-form">
              <input
                type="search"
                class="search-field"
                placeholder="Search..."
              />
              <button type="submit"><i class="ri-search-line"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="mark">
  
</div>
 

