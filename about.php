<?php include("inc/header.php")?>
<style>
    .about-br{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    /* margin: 40px 0 0; */
    background: rgb(251, 236, 236);
    border: 2px solid black;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    overflow: hidden;
    /* gap:; */
}
.about-br .abt-br0{
    width: 50%;
}

.abt-br-btn{
    width: 100%;
    text-align:center;
}
.abt-br-btn a{
    padding:10px 40px;
    border:2px solid green;
    color:green;
    font-weight:bold;
    border-radius:5px;
    text-decoration:none;
}
.abt-br-btn a:hover{
    color:white;
    background:green;
}
@media (max-width:1000px) {
    .about-br .abt-br0{
        width: 100%;
    }
}
</style>
<!-- Modal Start -->
        <div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="modal-search-form">
                            <input type="search" class="search-field" placeholder="Search...">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->

        <!-- Sidebar Modal -->
        <div class="sidebarmodal modal right fade" id="sidebarmodal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-between">
                        <div class="sidebar-logo">
                            <img src="assets/images/logos/logo-2.png" alt="Image">
                        </div>

                        <button type="button" class="close" data-bs-dismiss="modal">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="sidebar-about">
                            <h3>About Us</h3>
                            <p>
                            My Fitness Club has been a cornerstone in the fitness industry for the past 14 years. From the very beginning, our mission has been to work closely with our clients, understanding their goals, and creating personalized strategies to help them achieve those goals. 
                            </p>
                        </div>
                        <div class="contact-us">
                            <h3>Contact Information</h3>
                            <ul class="contact-item">
                                <li>
                                    <i class="ri-phone-line"></i>
                                    <div class="content">
                                        <h4>Office Address</h4>
                                        <p>B-32 Sector 92 Noida </p>
                                    </div>
                                </li>
        
                                <li>
                                    <i class="ri-message-2-line"></i>
                                    <div class="content">
                                        <h4>Call Us</h4>
                                        <p><a href="tel:+1(044)123456789">+91 9718247037</a></p>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-map-pin-line"></i>
                                    <div class="content">
                                        <h4>Email Us</h4>
                                        <p><a href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#92fbfcf4fdd2f5fdfef3fcbcf1fdff"><span class="__cf_email__" data-cfemail="89e0e7efe6c9eee6e5e8e7a7eae6e4">[email&#160;protected]</span></a></p>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-time-line"></i>
                                    <div class="content">
                                        <h4>Office Open</h4>
                                        <p>Sun - Fri (08AM - 10PM)</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
        
                        <div class="sidebar-follow-us">
                            <h3>Follow Us</h3>
                            <ul class="social-wrap">
                                <li>
                                    <a href="https://twitter.com/?lang=en" target="_blank">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="flaticon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="flaticon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
        
                        <div class="sidebar-newsletter">
                            <h3>Newsletter</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </p>
                            <div class="sidebar-newsletter-area">
                                <form class="sidebar-newsletter-form" data-toggle="validator" method="POST">
                                    <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
                                    <button class="subscribe-btn" type="submit">
                                        <i class="flaticon-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- End Sidebar Modal -->

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg1">
            <div class="container">
                <div class="inner-title about-page8002 text-center">
                    <h3>About Us</h3>
                    <!-- <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>About Us</li>
                    </ul> -->
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->


        <div class="about-br">
    <div class="abt-br0" style="padding: 20px;">
      <h2 class="text-center" style="font-size: 35px; margin: 20px 0;"><b>INTRODUCTION</b></h2>
      <p>My Fitness Club has been a cornerstone in the fitness industry for the past 14 years. From the very beginning,
        our mission has been to work closely with our clients, understanding their goals, and creating personalized
        strategies to help them achieve those goals.
      </p>
      <p>When we started My Fitness Club , we made a commitment to build our gym with the clients at the center of our
        approach. Our vision was to create a space where every individual receives tailored attention and support,
        ensuring their fitness journey is aligned with their personal objectives.
      </p>
      <p>
        Over the years, we have continuously evolved to offer state-of-the-art facilities and services that cater to all
        levels of fitness enthusiasts. Our mission remains steadfast: to assist our clients in reaching their desired
        fitness outcomes, whether it’s weight loss, muscle gain, or overall wellness improvement.
      </p>
      <p>
        The success of My Fitness Club can be attributed to our unwavering dedication and commitment to our clients.
        Each member receives customized workout plans and expert guidance, making their fitness journey both
        positive and effective.</p>
      <h3 style="color: red; margin: 20px 0; font-size: 25px;">Welcome to My Fitness Club – where fitness meets passion
        and community!</h3>
      <p style="font-size: 15px;">At My Fitness Club we believe that fitness is not just about lifting weights or
        running miles; it's about lifting each other up and running toward a healthier, happier life. Founded in , our
        club has become more than just a place to work out – it's a space where individuals come together to achieve
        their personal best and support one another along the way.
      </p>
    </div>
    <div class="abt-br0 text-center"><img src="assets/images/logo.png" width="100%" alt="">
    <h2 style="font-size:30px; color:red; font-weight:bold; text-decoration:underline;" >We have two more branches.</h2>
    <h4 style="font-size:20px; color:green; font-weight:bold;"><i class="fa-solid fa-location-crosshairs"></i> ADD :- Sec-126, Raipur</h4>
    <h4 style="font-size:20px; color:green; font-weight:bold;"><i class="fa-solid fa-location-crosshairs"></i> ADD :- Sec-45, Near Police chowki</h4>
    </div>
  </div>
  <div class="new-about-br" style="padding: 20px;  width: 100%; ">
    <h3 style="color: rgb(255, 0, 0); margin: 20px 0; font-size: 25px;">What Sets Us Apart!</h3>
    <p style="font-size: 15px;">
      <b style="text-decoration: underline;">Personalized Approach:</b> We understand that everyone’s fitness journey is unique. Our certified trainers offer personalized workout plans and one-on-one coaching to help you reach your specific goals.
      </p><br>
      <p style="font-size: 15px;"><b style="text-decoration: underline;">State-of-the-Art Facilities:</b> Our club is equipped with the latest fitness technology and high-quality equipment, ensuring you have everything you need for a great workout.
      </p><br>
      <p style="font-size: 15px;"><b style="text-decoration: underline;">Diverse Class Offerings:</b> From high-intensity interval training and yoga to spinning and strength training, our diverse range of classes is designed to keep you engaged and challenged.
      </p><br>
      <p style="font-size: 15px;"><b style="text-decoration: underline;">Community Focus:</b> At My Fitness Club we’re more than just a gym – we’re a community. Join us for social events and challenges that make fitness fun and engaging.
      </p><br>
      <p style="font-size: 15px;"><b style="text-decoration: underline;">Holistic Wellness:</b> We believe in a balanced approach to health, which is why we offer additional services such as nutrition counseling, wellness workshops, and relaxation techniques to complement your physical training.
      </p><br>

      <h3 style="color: rgb(255, 0, 0); margin: 20px 0; font-size: 25px;">Our Team</h3>
      <p style="font-size: 15px;"> Our team of dedicated fitness professionals is passionate about helping you succeed. With years of experience and a commitment to ongoing education, our trainers are here to guide, motivate, and support you every step of the way.
      </p><br>
      <h3 style="color: rgb(255, 0, 0); margin: 20px 0; font-size: 25px;">Join Us Today</h3>
      <p style="font-size: 15px;"> Are you ready to embark on your fitness journey with a supportive community by your side? Come experience the difference at My Fitness Club . We can’t wait to welcome you and help you achieve your health and fitness goals!
      </p><br>
      <!-- <button class="more-info"><a href="">FOR MORE INFORMATION</a></button> -->

      
  </div>
<div class="con-abt-br" style="padding:30px 0; background:rgb(251, 236, 236);">
<h3 class="text-center" style="color: green;  font-size: 25px; "><b>FOR MORE INFORMATION ABOUT GYM YOU CAN CONTACT US...</b></h3>
<button class="abt-br-btn" Style="border:none; background:transparent;"><a href="contact.php">CONTACT-US</a></button>
</div>
        <!-- About Area -->
        <!-- <div class="container-fluid" >
              <div class="row" style="   box-shadow: 0 0 1rem black overflow:hide">
                 <div class="col-12 col-md-6 "  >
                       <h1 class="display-5 my-5 " style=" color: #090979" >MY FITNESS <span style=" color:red" >CLUB</span></h1>
                       <h3 class="fs-5 my-5 " style=" color:green "><i class="fa-solid fa-circle-check"></i> 1200+ at-home workouts across formats including strength, dance & yoga</h3>
                       <h3 class="fs-5 my-5 " style=" color:green " > <i class="fa-solid fa-circle-check"></i> 30+ goal based fitness programs</h3>
                       <h3 class="fs-5 my-5 " style=" color:green " > <i class="fa-solid fa-circle-check"></i> Meditation sessions, health podcasts and more</h3>
                       <h3 class="fs-5 my-5 "  style=" color:green "> <i class="fa-solid fa-circle-check"></i> Starting at ₹3000 / month + taxes</h3>
                       <button type="button" class="btn btn-outline-success text-center mb-2 ">TAKE 3 DAYS FREE TRIAL</button>
                 </div>
                 <div class=" container col-12 col-md-6">
                    <img src="assets/images/abt-img.JPG" alt="" >
                 </div>
              </div>
      </div> -->
    <!-- About Area End -->


        <!-- Team Area -->
        <!-- <div class="team-area pb-70">
            <div class="container">
                <div class="section-title text-center mb-45">
                    <span>MEET OUR TEAM</span>
                    <h2 class="m-auto">Our Team Of Expert Coaches</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-6">
                        <div class="team-item">
                            <a href="team.html">
                                <img src="assets/images/coach2.jpg" alt="Team" />
                            </a>
                            <ul class="team-social">
                                
                                <li>
                                    <a href="https://www.instagram.com/myfitnessclub_official?igsh=anBvb2M1eHF0NTJm&utm_source=qr" target="_blank">
                                        <i class='flaticon-instagram'></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.youtube.com/@MyFitnessClub17" target="_blank">
                                    <i class="fa-brands fa-square-youtube"></i>
                                    </a>
                                </li>
                            </ul> -->
                            <!-- <div class="content">
                                 <h3><a href="team.html">Frederick Gabriel</a></h3>
                                <span>Bodybuilding Trainer</span> -->
                            <!-- </div>  -->
                            <!-- <div class="team-vector">
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6">
                        <div class="team-item">
                            <a href="team.html">
                                <img src="assets/images/coach1.jpg" alt="Team" />
                            </a>
                            <ul class="team-social">
                               
                                <li>
                                    <a href="https://www.instagram.com/myfitnessclub_official?igsh=anBvb2M1eHF0NTJm&utm_source=qr" target="_blank">
                                        <i class='flaticon-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/@MyFitnessClub17" target="_blank">
                                    <i class="fa-brands fa-square-youtube"></i>
                                    </a>
                                </li>
                                
                            </ul> -->
                            <!-- <div class="content"> -->
                                <!-- <h3><a href="team.html"></a></h3>
                                <span></span> -->
                            <!-- </div> -->
                            <!-- <div class="team-vector">
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-6">
                        <div class="team-item">
                            <a href="team.html">
                                <img src="assets/images/coach3.jpg" alt="Team" />
                            </a>
                            <ul class="team-social">
                                 
                            <li>
                                    <a href="https://www.instagram.com/myfitnessclub_official?igsh=anBvb2M1eHF0NTJm&utm_source=qr" target="_blank">
                                        <i class='flaticon-instagram'></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.youtube.com/@MyFitnessClub17" target="_blank">
                                    <i class="fa-brands fa-square-youtube"></i>
                                    </a>
                                </li>
                                
                            </ul> -->
                            <!-- <div class="content"> -->
                                <!-- <h3><a href="team.html">Eleanor Penelope</a></h3>
                                <span>Cardio Training</span> -->
                            <!-- </div> -->
                            <!-- <div class="team-vector">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  -->
               <!-- Team Area End -->

        <!-- Testimonials Area -->
        <!-- <div class="bri">
          <div class="main">
            <h2>TESTIMONIALS</h2>
            <h1>What Our Client Say About Us</h1>
          </div>
          <div class="main2">
            <div class="person1">
            <i class="fa-solid fa-user"></i>
              <div class="b8">
                <p>Joining My Fitness Club was the best decision I've made for my health. The state-of-the-art     equipment and diverse class offerings keep me motivated. </p>
                <h4>Rohan Mishra</h4>
                <div class="stars">
                   <i class="rating" >5.0</i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                </div>
              </div>
          </div>
            <div class="person1">
            <i class="fa-solid fa-user"></i>
              <div class="b8">
                <p>My Fitness Club is fantastic! The equipment is modern and well-maintained, and there’s plenty of variety to keep workouts interesting. thanks for everything.</p>
                <h4>Vartika Thakur</h4>
                <div class="stars">
                   <i class="rating" >5.0</i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                </div>
              </div>
          </div>
            <div class="person1">
            <i class="fa-solid fa-user"></i>
              <div class="b8">
                <p> My Fitness Club was one of the best decisions I’ve made. The gym offers a great environment with a variety of classes, excellent equipment, and a supportive community. </p>
                <h4>Anmol Jha</h4>
                <div class="stars">
                   <i class="rating" >4.5</i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star-half-stroke"></i></i>
                </div>
              </div>
          </div>
            <div class="person1">
              <i class="fa-solid fa-user"></i>
              <div class="b8">
                <p>My Fitness Club The 6-week transformation program at FitZone was incredible. The program was well-structured with a balanced approach to fitness and nutrition. </p>
                <h4>Annu Prajapati</h4>
                <div class="stars">
                    <i class="rating" >4.5</i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star-half-stroke"></i>
                </div>
              </div>
          </div>
      </div>
</div> -->
        <!-- Testimonials Area End -->

        <!-- Training Area -->
        <!-- Training Area End -->

        <!-- Pricing Area -->
        <!-- <div class="pricing-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center mb-45">
                    <span>OUR PRICING</span>
                    <h2 class="m-auto">Best Price Of All Time!</h2>
                </div>
                <div class="row blue-berry"  >
                    <div class="col-lg-3 col-6" >
                        <div class="pricing-card" style="border:1px solid #EC8E92">
                            <h3>Standard Plan</h3>
                            <span>Subscription</span>
                            <h2>₹3000</h2>
                            <div class="monthly-pack">
                                <h4>Monthly</h4>
                            </div>
                            <ul>
                                <li>5 Days In A Week</li>
                                <li>01 Sweatshirt</li>
                                <li>01 Bottle of Protein</li>
                                <li><del>Access to Videos</del></li>
                                <li><del>Weight Lifting</del></li>
                                <li><del>Muscle Stretching</del></li>
                            </ul>
                            <button type="button" class="btn btn-outline-danger">KNOW MORE</button>
                            
                        </div>
                    </div>

                    <div class="col-lg-3 col-6" >
                        <div class="pricing-card" style="border:1px solid #EC8E92">
                            <h3>Personal Plan</h3>
                            <span>Subscription</span>
                            <h2>₹7500</h2>
                            <div class="monthly-pack">
                                <h4>Quarterly</h4>
                            </div>
                            <ul>
                                <li>5 Days In A Week</li>
                                <li>01 Sweatshirt</li>
                                <li>01 Bottle of Protein</li>
                                <li>Access to Videos</li>
                                <li><del>Weight Lifting</del></li>
                                <li><del>Muscle Stretching</del></li>
                            </ul>
                            <button type="button" class="btn btn-outline-danger">KNOW MORE</button>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6" >
                        <div class="pricing-card" style="border:1px solid #EC8E92">
                            <h3>Premium Plan</h3>
                            <span>Subscription</span>
                            <h2>₹10500</h2>
                            <div class="monthly-pack">
                                <h4>Half year</h4>
                            </div>
                            <ul>
                                <li>5 Days In A Week</li>
                                <li>01 Sweatshirt</li>
                                <li>01 Bottle of Protein</li>
                                <li>Access to Videos</li>
                                <li>Weight Lifting</li>
                                <li><del>Muscle Stretching</del></li>
                            </ul>
                            <button type="button" class="btn btn-outline-danger">KNOW MORE</button>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6" >
                        <div class="pricing-card" style="border:1px solid #EC8E92">
                            <h3>VIP Plan</h3>
                            <span>Subscription</span>
                            <h2>₹16000</h2>
                            <div class="monthly-pack">
                                <h4>Yearly</h4>
                            </div>
                            <ul>
                                <li>5 Days In A Week</li>
                                <li>01 Sweatshirt</li>
                                <li>01 Bottle of Protein</li>
                                <li>Access to Videos</li>
                                <li>Weight Lifting</li>
                                <li><del>Muscle Stretching</del></li>
                            </ul>
                            <button type="button" class="btn btn-outline-danger">KNOW MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Pricing Area End -->

        <!-- Footer Area -->
        <?php include("inc/footer.php")?>
        <!-- Footer Area End -->


        <!-- Jquery Min JS -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <!-- Plugins JS -->
        <script src="assets/js/plugins.js"></script>
        <!-- Custom  JS -->
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/my.js"></script>
    </body>

<!-- Mirrored from templates.hibotheme.com/golan/default/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2024 10:00:17 GMT -->
</html>