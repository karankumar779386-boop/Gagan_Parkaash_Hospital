<?php
include('includ/header.php')
?>

<!-- carousel -->
<section class="carousel ">
  <div id="demo" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/collage2pic .jpg" alt="Los Angeles" class="d-block caro_img" style="width:100%">
      </div>
      <div class="carousel-item">
        <img src="images/collage4-1024x545-1.jpg" alt="Chicago" class="d-block caro_img" style="width:100%">
      </div>

    </div>
    <div class="caro_span">
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
</section>
<!-- carousel End -->

<!-- Welcome to Hospital -->

<section class="container-fluid mt-5 cstm_bgimg">
  <div class="container ">
    <div class="row gy-5 align-items-center py-5">
      <div class="text_content col-lg-4 col-md-6 w-lg-50">
        <img src="images/oner.png" alt="">
      </div>
      <div class="text_content col-lg-4 col-md-6 w-lg-50">
        <h1 class="fw-bold ">Welcome To Gagan Parkaash Hospital</h1>
        <p class="lh-base my-4">Gagan Parkaash Hospital is fertility and maternity Centre wherein our foremost priority is Patient’s satisfaction and medical safety. Gagan Parkaash Hospital aims at offering world class treatment to its patients at very low cost. We offer comprehensive range of infertility services, from diagnosis to treatment and child’s birth under one roof. </p>
        <h1 class="cstm_font fw-bold">Dr Gurlin Kaur Bhinder</h1>
      </div>
      <div class="text_content col-lg-4 col-md-12 gy-0 ">
        <a href="appointment.php" class="primery_btn "><i class="fa-solid fa-calendar"></i>
          <h4>Ruquest Appontment</h4><i class="fa-solid fa-angle-right a_icon"></i>
        </a>
        <a href="https://maps.app.goo.gl/gFNReGiZCk1WMVqt6" target="blank" class="primery_btn "><i class="fa-solid fa-location-dot"></i>
          <h4>Find Location</h4> <i class="fa-solid fa-angle-right a_icon"></i>
        </a>
        <a href="tel:+918054550024" class="primery_btn "><i class="fa-solid fa-phone"></i>
          <h4>Emerganry Contant </h4><i class=" fa-solid fa-angle-right a_icon"></i>
        </a>
        
      </div>
    </div>
  </div>

</section>

<!-- Welcome to Hospital End -->

<!-- Our Medical Services -->

<section class="container-fulid my-5 mdl_ser_bg">
  <div class="container ">
    <h2 class="fw-bold py-4 text-center"> Our Medical Services </h2>
    <div class="none_div">
      <div class="none_div1"></div>
    </div>
    <div class="row my-5">
      <div class="col-lg-3 col-md-6    mt-3 ">
        <div class="cstm_cols_div d-flex align-items-center justify-content-center flex-column py-3">
          <img class=" img-fluid " src="images/services/test_tube_baby.png" alt="image of medical servires">
          <h6 class="pt-3">Test Tube Baby/IVF, ICSI </h6>
        </div>
      </div>
      <div class="col-lg-3 col-md-6    mt-3 ">
        <div class="cstm_cols_div d-flex align-items-center justify-content-center flex-column py-3">
          <img class=" img-fluid " src="images/services/management_high_risk.png" alt="image of medical servires">
          <h6 class="pt-3">Management Of High-Risk Pregnancy </h6>
        </div>
      </div>
      <div class="col-lg-3 col-md-6   mt-3 ">
        <div class="cstm_cols_div d-flex align-items-center justify-content-center flex-column py-3">
          <img class="img-fluid " src="images/services/sperm_freezing.png" alt="image of medical servires">
          <h6 class="pt-3">Oocyte/Sperm Freezing </h6>
        </div>
      </div>
      <div class="col-lg-3 col-md-6   mt-3 ">
        <div class="cstm_cols_div d-flex align-items-center justify-content-center flex-column py-3">
          <img class="img-fluid" src="images/services/laparoscopy_and_hysteroscopy.png" alt="image of medical servires">
          <h6 class="pt-3">Laparoscopy and Hysteroscopy </h6>

        </div>
      </div>
      <div class="my-5 d-flex justify-content-center">

        <button class="primery_btn" onclick="location.href='our_serivces.php'">View More Services</button>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>

<!-- Our Medical Services End -->

<!-- Meet Orr Team -->

<section class="">
  <h2 class="text-black text-center my-4">Meet Our Team</h2>
  <div class="none_div">
    <div class="none_div1"></div>
  </div>

  <div class="container-fluid">
    <div class="row bg_color tab mt-3 nav nav-pills">
      <div class="col-lg-4 col-md-4 col-12 text-center mt-4 mt-lg-5">
        <div class="cstm_tabs nav-item ">
          <a class=" show active" data-bs-toggle="tab" data-bs-target="#madern_tech">Modern Technology</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 text-center mt-4 mt-lg-5 ">
        <div class=" nav-item cstm_tabs">
          <a data-bs-toggle="tab" data-bs-target="#success_treatments">Success of Treatments</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 text-center mt-4 mt-lg-5">
        <div class="cstm_tabs nav-item">
          <a data-bs-toggle="tab" data-bs-target="#certified_doctor">Certified Doctor</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid tab-content">
    <div class="tab-pane fade show active" id="madern_tech">
      <div class="row">
        <div class="col-lg-5 catm_madern_tech">
          <h4>Certified Doctors and Using Modern Technology </h4>
          <p>We offer IVF treatments at significantly lower prices than many other conventional fertility centres. We use Narishige high-precision ICSI machine, Heracell Incubators, Remi Centrifuge fitted with Lab guard (the air filtration unit).</p>
          <button class="secondary_btn">See All Services <i class="fa-solid fa-angles-right"></i></button>
        </div>
        <div class="col-lg-7">
          <img src="images/ICSI_machine.png" alt="ICSI_machine" class="img-fluid w-100">
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="success_treatments">
      <div class="row">
        <div class="col-lg-12  catm_madern_tech">
          <h4>Success of Treatments</h4>
          <p>We can proudly say, that our results are unbeatable as, we offer world class treatment using world class technology but at VERY LOW prices. The reason behind this success is the experienced Team of Doctors and Technicians. Dr. Gurlin Kaur treats every case as an individual and strongly follow the rule which says “One size doesn’t fit all”. Coordination within the team of doctors and technicians is so good that most of our patients conceive.</p>
          <button class="secondary_btn">See All Services <i class="fa-solid fa-angles-right"></i></button>
        </div>

      </div>
    </div>

    <div class="tab-pane fade" id="certified_doctor">
      <div class="row">
        <div class="col-lg-5 catm_madern_tech">
          <h4>Certified Doctors</h4>
          <p>Dr. Gurlin always strives for high success rate so that each individual who visits may achieve the parenthood they are desparately looking for. She has made it possible with the great team she has established during the span of more than 5 years. For Dr. Gurlin following tight quality control and maintaining that is a must, and that is the reasn for her success. She keeps upgrading her knowledge to maintain the success achieved. Dr. Gurlin Kaur supports the patient to recover from physical and mental stress as well. She is well equipped and has got immense knowledge of how to counsell the patients. Her career began with MBBS from Prestigious GMC Amritsar Post Grad. from MRMC Gulbarga, Karnataka. She has been trained in IVF from pioneer's of the field. Her Fellowship's and trainings in IVF are from Rajasthan, Ahmadabad, London, Germany.</p>
          <button class="secondary_btn">See All Services <i class="fa-solid fa-angles-right"></i> </button>
        </div>
        <div class="col-lg-7">
          <img src="images/Doctor_mam.png" alt="ICSI_machine" class="img-fluid w-100">
        </div>
      </div>
    </div>
  </div>

</section>

<!-- Meet Orr Team End-->

<!-- group photo -->

<section>
  <div class="container-fluid bg_color mt-5">
    <div class="row">
      <div class="col-12">
        <div class="container d-flex justify-content-center">
          <img class="img-fluid pt-2 pt-lg-5" src="images/group_photo.png" alt="">
        </div>
      </div>
    </div>
  </div>

</section>

<!-- group photo End -->

<!-- Working Process -->

<section class="container-fluid working_bg">
  <div class="container">
    <h2 class="text-center  "> Working Process</h2>
    <div class="none_div">
      <div class="none_div1"></div>
    </div>

    <div class="row my-5">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3 mb-lg-5">
        <div class="cstm_img_working">
          <img class="rounded-circle " src="images/comfortable_care.png" alt="comfortable care">
          <h4 class="text-center  p-3">Comfortable Care</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3 mb-lg-5">
        <div class="cstm_img_working">
          <img class="rounded-circle " src="images/consultation.png" alt=" consultation">
          <h4 class="text-center  p-3">Consultation</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3 mb-lg-5">
        <div class="cstm_img_working">
          <img class="rounded-circle " src="images/highest_quality.png" alt="highest quality">
          <h4 class="text-center  p-3">Highest Quality</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3 mb-lg-5">
        <div class="cstm_img_working">
          <img class="rounded-circle " src="images/always_smiling.png" alt="always smiling">
          <h4 class="text-center  p-3">Always Smiling </h4>
        </div>
      </div>
    </div>
  </div>
</section> 

<!-- Working Process End -->

<!-- appointment -->

<section class="contanier-fulid bg_img_appointment">
  <div class="container">
    <div class="cstm_cont_appt d-flex flex-column justify-content-center align-items-center ">
      <h4>Need a Doctor for Check-up?</h4>
      <h2>Just Make An Appointment And You're Done!</h2>
      <button class="secondary_btn" onclick="location.href='appointment.php'">Make an Appointment</button>

    </div>
  </div>

</section>

<!-- appointment End -->
<!-- Years of Experience -->

<section>
  <div class="container my-5 ">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="cstm_years">
          <img src="images/year_of_exp.png" alt="">
          <h4>10<sup>+</sup></h4>
          <h6>Years of Experience </h6>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="cstm_years">
          <img src="images/beds.png" alt="">
          <h4>15<sup>+</sup></h4>
          <h6>Beds </h6>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="cstm_years">
          <img src="images/happy_patients.png" alt="">
          <h4>1564<sup>+</sup></h4>
          <h6>Happy Patients</h6>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Years of Experience End -->

<?php
include('includ/footer.php');
?>