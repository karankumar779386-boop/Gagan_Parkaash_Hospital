<?php
include('includ/header.php')
?>

<!-- Make an Appointment -->

<section class="container-fluid p-md-5 p-0  bg_clr_form">
    <div class="container bg-white p-lg-5 px-2 ">
        <div class="row ">
            <div class="col-xl-6 col-lg-6 col-12 mdl_ser_bg">
                <div class="py- p-md-3  ">
                    <h2 class="pb-4 p-sm-2">Make an Appointment</h2>
                    <h4 class="pb-4 p-sm-2 fs-5">Arrange a Call Back</h4>
                    
                    <form action="xyz.php">
                        <div class="mb-4 ">
                            <label class="form-label">Your Name*</label>
                            <input type="text" class="form-control custom-input" placeholder="Enter your name">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Your Email*</label>
                            <input type="email" class="form-control custom-input" placeholder="Enter your email">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Your Phone*</label>
                            <input type="tel" class="form-control custom-input" placeholder="Enter your phone">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Your Message*</label>
                            <textarea class="form-control custom-input" rows="5" placeholder="Write your message..."></textarea>
                        </div>

                        <button type="submit" class="primery_btn w-100 ">Make an Appointment </button>
                    </form>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-12 appointment_img d-flex align-items-center">
                <div class=" p-md-5 pb-5 ">
                    <img class="img-fluid" src="images/appointment_care.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Make an Appointment End -->


<!-- satisfaction care -->

<section>
    <div class="container">
        <div class="text-center py-md-5 pb-5 cstm_satis">
            <h2 class=" text-center mb-3">We Provide the highest level of satisfaction care & services <br> to our patients.</h2>
            <a  class="text-decoration-none fs-3 text-black fw-bold" href="tel:+918054550024"><i class="text-primary fa-solid fa-phone"></i>+91 80545-50024</a>
        </div>
    </div>
</section>

<!-- satisfaction care End -->










<?php
include('includ/footer.php');
?>