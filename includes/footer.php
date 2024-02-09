 <!--Site Footer Start-->
 <!-- Brochure Form start -->
<?php include('includes/brochure-form.php'); ?>

<style>
    
    input#mobileNoF {
    height: 52px;
    width: 100%;
    border: 1px solid #514b44;
    background-color: transparent;
    padding-left: 30px;
    padding-right: 30px;
    outline: none;
    font-size: 14px;
    color: var(--alipes-white);
    display: block;
    font-weight: 400;
}

.nice-select
{
    height: 52px;
    border: 1px solid #514b44;
    background-color: transparent;
    /*padding-left: 30px;*/
    padding-right: 30px;
    outline: none;
    font-size: 14px;
    color: var(--alipes-white);
    display: block;
    font-weight: 400; 
}

.contact-one__input-box {
    display: flex;
    width: 100%;
    align-items: center;
  }

  #countryCode {
    width: 30%;
  }

  #mobileNoF {
    width: 70%;
   
  }
.nice-select .list
{
        overflow: scroll;
    height: 250px;
}

.price__input-box .nice-select {
  
    margin-bottom: 20px;
}

.price__input-box .nice-select .list {
    overflow: scroll!important;
        height: max-content!important;
}

.price__input-box .nice-select {
    width: 100%;
}

.contact-one__form-box {
  position: relative;
  display: block;
  padding: 60px 60px 60px;
  background-color: var(--alipes-black);
  z-index: 2!important;
}
/*Mobile view*/

@media only screen and (min-width:320px)
	and (max-width:768px){
	    
	    .contact-one__right .section-title__title
	    {
	        font-size:34px!important;
	    }
	    
	    .contact-one__input-box {
    display: flex;
    flex-direction: column;
    align-items: stretch;
  }

  #countryCode {
    width: 100%; 
    margin-bottom: 10px;
  }

  #mobileNoF {
    width: 100%; 
  }
	}

</style>


        <!--Contact One Start-->
        <section class="contact-one" id="contactform_home">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <div class="contact-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Visit Our Property </span>
                                <h2 class="section-title__title">Schedule A Visit Today</h2>
                            </div>
                           
                            <ul class="contact-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <a href="tel:+919121850111"><span class="fas fa-phone-alt"></span></a>
                                    </div>
                                    <div class="content">
                                        <p>Have any questions?</p>
                                        <h4><a href="tel:+919121850111">+91 9121 850 111</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <a href="mailto:sales@realplushomes.com"><span class="fas fa-envelope"></span></a>
                                    </div>
                                    <div class="content">
                                        <p>Write to Us</p>
                                        <h4><a href="mailto:sales@realplushomes.com">sales@realplushomes.com</a></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="disclaimer-container">
                            <h6>Disclaimer:</h6>
                        <p>All layouts, plans, specifications, designs, elevations, features, amenities, facilities, services, product/equipment types and brands mentioned are indicative of the kind of<span id="dots">...</span><span id="more">development proposed in the project and its finally is subject to the approval of the respective authorities or as required by the promoter/developer in the interest of continuous improvement, without prior notice or obligation. Minor variations in actual carpet areas may occur as a result of design/construction variances, finishing tolerances and column projections. The pictures/images and perspective views of the premises/building/ layout are an artist's impression of the development and for representational purposes only and are not a part of actual deliverables. Furniture, soft furnishing, gadgets, etc. are not part of the offering. the details, pictures and images contained in the leaflets, brochures or any other printed material does not constitute an offer and/or contract of any type between the promoter/Developer and the purchaser.</span></p>
                        <a onclick="myFunction()" id="readmore-Btn">Read more</a>
                        
                        <!----------Disclaimer Script Start----------------->
                                <script>
                                function myFunction() {
                                 var dots = document.getElementById("dots");
                                var moreText = document.getElementById("more");
                                var btnText = document.getElementById("readmore-Btn");

                                if (dots.style.display === "none") {
                                 dots.style.display = "inline";
                                 btnText.innerHTML = "Read more"; 
                                 moreText.style.display = "none";
                                 } else {
                                dots.style.display = "none";
                                    btnText.innerHTML = "Read less"; 
                                 moreText.style.display = "inline";
                                 }
                                }
                                </script>
                        <!----------Disclaimer Script End----------------->
                        </div>

                    </div>
                    <div class="col-xl-5 col-lg-4">
                        <div class="contact-one__right">
                            <div class="contact-one__form-box wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="contact-form-bg"
                                    style="background-image: url(assets/images/formbg.png);">
                                </div>
                                <div class="section-title text-left">
                                    <!--<span class="section-title__tagline">contact with me</span>-->
                                    <h2 class="section-title__title">Contact Today</h2>
                                </div>
                                
                                <form action="thankyou.php" method="POST" class="contact-one__form contact-one-validated">

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="Your Name" id="name" name="firstname" required>
                                        <div id="nameF"></div>

                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input type="email" placeholder="Email Address" id="email" name="email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">

                                        <select id="countryCode" name="countryCode">
                                            <option value="91" selected>+91 (India)</option>
                                            <option value="1">+1 (USA)</option>
                                            <option value="44">+44 (UK)</option>
                                            <option value="81">+81 (Japan)</option>
                                            <option value="86">+86 (China)</option>
                                            <option value="33">+33 (France)</option>
                                            <option value="49">+49 (Germany)</option>
                                            <option value="7">+7 (Russia)</option>
                                            <option value="61">+61 (Australia)</option>
                                            <option value="55">+55 (Brazil)</option>
                                            <option value="91">+91 (Canada)</option>
                                            <option value="82">+82 (South Korea)</option>
                                            <option value="39">+39 (Italy)</option>
                                            <option value="34">+34 (Spain)</option>
                                            <option value="81">+81 (Japan)</option>
                                            <option value="65">+65 (Singapore)</option>
                                            <option value="41">+41 (Switzerland)</option>
                                            <option value="31">+31 (Netherlands)</option>
                                            <option value="46">+46 (Sweden)</option>
                                            <option value="52">+52 (Mexico)</option>
                                            <option value="971">+971 (UAE)</option>
                                            <option value="91">+91 (India)</option>
                                            <option value="92">+92 (Pakistan)</option>
                                            <option value="60">+60 (Malaysia)</option>
                                            <option value="63">+63 (Philippines)</option>
                                            <option value="64">+64 (New Zealand)</option>
                                            <option value="55">+55 (Argentina)</option>
                                            <option value="234">+234 (Nigeria)</option>
                                            <option value="27">+27 (South Africa)</option>
                                            <option value="20">+20 (Egypt)</option>
                                            <option value="27">+27 (South Africa)</option>
                                            <option value="31">+31 (Netherlands)</option>
                                            <option value="32">+32 (Belgium)</option>
                                            <option value="33">+33 (France)</option>
                                            <option value="34">+34 (Spain)</option>
                                            <option value="36">+36 (Hungary)</option>
                                            <option value="39">+39 (Italy)</option>
                                            <option value="41">+41 (Switzerland)</option>
                                            <option value="43">+43 (Austria)</option>
                                            <option value="45">+45 (Denmark)</option>
                                            <option value="46">+46 (Sweden)</option>
                                            <option value="47">+47 (Norway)</option>
                                            <option value="48">+48 (Poland)</option>
                                            <option value="51">+51 (Peru)</option>
                                            <option value="52">+52 (Mexico)</option>
                                            <option value="54">+54 (Argentina)</option>
                                            <option value="55">+55 (Brazil)</option>
                                            <option value="56">+56 (Chile)</option>
                                            <option value="57">+57 (Colombia)</option>
                                            <option value="58">+58 (Venezuela)</option>
                                            <option value="60">+60 (Malaysia)</option>
                                            <option value="61">+61 (Australia)</option>
                                            <option value="62">+62 (Indonesia)</option>
                                            <option value="63">+63 (Philippines)</option>
                                            <option value="64">+64 (New Zealand)</option>
                                            <option value="65">+65 (Singapore)</option>
                                            <option value="66">+66 (Thailand)</option>
                                            <option value="82">+82 (South Korea)</option>


                                        </select>



                                        <input type="tel" placeholder="Phone" id="phone" name="phone" required style="width: 100%;border: 1px solid #514b44;background-color: transparent;padding-left: 30px;
    padding-right: 30px;
    outline: none;
    font-size: 14px;
    color: var(--alipes-white);
    display: block;
    font-weight: 400;
    height: 52px;">

                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-xl-12">
                                    <div class="price__input-box">
                                        <select id="price" name="countryCode" required>
                                            <option value="" selected>Select Price</option>
                                            <option value="10 Cr +">10 Cr +</option>
                                            <option value="12 Cr +">12 Cr +</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="contact-one__input-box text-message-box">
                                        <textarea name="message" placeholder="Write a Message" required></textarea>
                                    </div>
                                    <div class="col-xl-12 d-flex mb-3">
                                        <input type="checkbox" id="termsChkbox" />
                                        <p style="color:#fff !important;font-size: 0.69rem;padding: 0 0 0 5px;">I
                                            consent to processing my personal data according to <a
                                                href="privacy-policy.php"
                                                style="color:#ac8748;text-decoration:underline;font-size: 0.69rem;">Privacy
                                                policy</a></p>
                                    </div>
                                    <button type="submit" class="thm-btn contact-one__btn" id="sub2" disabled="disabled"
                                        value="Send a message">Send a message</button>
                                </div>
                            </div>
                        </form>


<script>
    document.getElementById("mobileNoF").addEventListener("input", function () {
        var numberInput = document.getElementById("mobileNoF");
        var number = numberInput.value.replace(/\D/g, ''); // Remove non-numeric characters
        var isValid = number.length === 10; // Check if the number has exactly 10 digits
        numberInput.setCustomValidity(isValid ? "" : "Please enter a 10-digit phone number");
    });
</script>
<script>
    document.getElementById("emailIdF").addEventListener("input", function () {
        var emailInput = document.getElementById("emailIdF");
        var email = emailInput.value;        
        var atPos = email.indexOf("@");
        var dotPos = email.lastIndexOf(".");
        if(atPos > 0 && dotPos > atPos + 1 && dotPos < email.length - 1) {
         var isValidDomain = true;
        }
        else {
          var isValidDomain = false;
        }
        emailInput.setCustomValidity(isValidDomain ? "" : "Please enter a valid email address with a standard domain extension (.com, .in, .co, etc.)");
    });
</script>
<script>
    var nameInput = document.getElementById("nameF");
    nameInput.addEventListener("input", function() {
        var value = nameInput.value;
        var minLength = 2; // Minimum number of characters required

        if (value.length < minLength) {
            nameInput.setCustomValidity("Please enter at least " + minLength + " characters.");
        } else {
            nameInput.setCustomValidity("");
        }
    });
</script>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact One Start-->

        <!--Google Map Start-->
        <section class="google-map">
            <!--<iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d50851.70093807866!2d78.3605094370072!3d17.41353346794277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sfuji%20project%20banjara%20hills%20hyderabad!5e0!3m2!1sen!2sin!4v1680785412143!5m2!1sen!2sin"
                class="google-map__one" allowfullscreen></iframe>-->
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15226.473303754705!2d78.4088458!3d17.430095!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91b683ce1cb5%3A0x230e3d6ac9e01319!2sReal%20Plus%20Developers!5e0!3m2!1sen!2sin!4v1689847878596!5m2!1sen!2sin" class="google-map__one" allowfullscreen></iframe>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15226.19621564504!2d78.4054106!3d17.4334157!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91486a9c2ac7%3A0x2a14447e996ee1cb!2sRealPlus%20Homes!5e0!3m2!1sen!2sin!4v1696310279299!5m2!1sen!2sin" class="google-map__one" allowfullscreen></iframe>
        </section>
        <!--Google Map End-->
<!-- Brochure Form end -->
 <footer class="site-footer">
            <div class="site-footer__shape-1 float-bob-x">
                <img src="assets/images/draw-image.png" alt="">
            </div>
            <div class="container">
                <div class="site-footer__inner">
                    <div class="site-footer__top">
                        <div class="row">                            
                            <div class="col-xl-5 col-lg-5 col-md-5 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__explore">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Quick links</h3>
                                    </div>
                                    <div class="footer-widget__explore-list-box">
                                        <ul class="footer-widget__explore-list list-unstyled">
                                            <li><a href="" data-toggle="modal" data-target="#exampleModal">Fuji Brochure</a></li>
                                            <li><a href="amenities.php">Fuji Amenities</a></li>
                                            <li><a href="specifications.php">Fuji Specifications</a></li>
											<li><a href="floorplan.php">Fuji Floor Plans</a></li>
                                            <li><a href="gallery.php">Gallery</a></li>
                                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                        </ul>
                                        <!--<ul class="footer-widget__explore-list list-unstyled">-->
                                        <!--    <li><a href="#">News</a></li>-->
                                        <!--    <li><a href="#">Feedbacks</a></li>-->
                                        <!--    <li><a href="#">Shop</a></li>-->
                                        <!--    <li><a href="#">Privacy Policy</a></li>-->
                                        <!--</ul>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__contact">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Contact</h3>
                                    </div>
                                    <!--<p class="footer-widget__contact-text">Road No 36, Jubilee Hills, Hyderabad</p>-->
									<p class="footer-widget__contact-text">
									Corporate Office: HNo. 8-2-293/82/A/1130 & 1130/1,<br> Plot No. 1130, Ground 
									Floor Shreya Towers,<br> Road No. 36, Jubilee Hills,<br> Hyderabad – 500033
									</p>
                                    <ul class="footer-widget__contact-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:sales@realplushomes.com">sales@realplushomes.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-telephone"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:+919121850111">+91 9121 850 111</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="footer-widget__column footer-widget__newsletter company_logos">
                                    
                                     <img src="assets/images/fuji halcyon.png" />
                                     
                                          <!--Social Icons-->
                            
                            <div class="social-icons">
                                
                          <a href="https://www.facebook.com/realplushomesofficial/" target="_blank"><i class="fab fa-facebook"></i></a>
                          <a href="https://www.linkedin.com/company/realplushomes/" target="_blank"><i class="fab fa-linkedin"></i></a>
                          <a href="https://www.instagram.com/realplushomes/" target="_blank"><i class="fab fa-instagram"></i></a>
                          <a href="https://twitter.com/realplushomes" target="_blank"><i class="fab fa-twitter"></i></a>
                          <a href="https://www.youtube.com/@realplushomes" target="_blank"><i class="fab fa-youtube"></i></a>
                            
                            </div>
                              </div>
                            </div>
                            
                       
                            
                        </div>
                    </div>
                    <div class="site-footer__bottom">
                        <div class="site-footer__bottom-inner">
                            <div class="site-footer__bottom-left">
                                <p class="site-footer__bottom-text">© All Copyright 2023 by <a href="#">RealPlus Homes</a>
                                </p>
                            </div>
                            <div class="site-footer__bottom-right d-none">
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>-->
                                    <!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/images/resources/logo-1.png" width="40"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:sales@realplushomes.com">sales@realplushomes.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+919121850111">+91 9121 850 111</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top d-none">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    


<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LdTU84mAAAAAKVaxPR8-qZ__wNfDNSjirmADlUG"></script>
