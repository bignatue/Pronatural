<?php
  include'include/header.php';
  include'include/menu.php';
?>

  <main id="main">

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact</h2>
            <h5 class="text-danger mt-3 mb-1">Our Pick-Up Centers</h5>
            <h4 class="mb-0 mt-0">Zamboanga del sur / Sibugay</h4>
            <p><i class="mr-2 ion-ios-location-outline"></i> Lacuna Bldg., Purok Lower Golden Shower, Rizal Avenue, Balangasan District, Pagadian City</p>
            <p><i class="mr-2 ion-ios-telephone-outline"></i> <a href="tel:09177122616">0917 712 2616</a></p>

            <h4 class="mb-0 mt-3">Zamboanga del norte</h4>
            <p><i class="mr-2 ion-ios-location-outline"></i> Narvel Mktg., Gen. Luna St., Dipolog City</p>
            <p><i class="mr-2 ion-ios-telephone-outline"></i> <a href="tel:09989544469">0998 954 4469</a></p>
 
            <p class="mt-3">For any inquiries or questions regarding our store, products and membership, please contact us in the following ways.</p>
        </div>
	 
  		<div class="container">
  		    <hr>
  		</div>
        
      <div class="container">
        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>06-A, Zamora Street, 50th District, Ozamiz City, Misamis Occidental Philippines 7200</address>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p>
                <a href="tel:+630883190974">(+63) 088-319-0974</a><br>
                <a href="tel:+639381318873">(+63) 938 131 8873</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:pronaturalwellness44@gmail.com">pronaturalwellness44@gmail.com</a></p>
            </div>
          </div>
        </div>
      </div>
      </div>

      
      <div class="container mt-5">
	      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.1333351657913!2d121.00000161418386!3d14.477032083975738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ce6461cd4e8b%3A0x56063410e8672284!2sEscudo+Ln%2C+Para%C3%B1aque%2C+1700+Metro+Manila!5e0!3m2!1sen!2sph!4v1536857710029" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	      <!-- <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704">
	      </div> -->
	  </div>

      <div class="container mt-5">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>

          <div id="errormessage"></div>
          
          <form name="sentMessage" id="contactForm" class="contactForm" novalidate>
            <div class="form-row"> 
              <div class="form-group col-md-6 mb-0">
                <input type="text" id="name" class="form-control" placeholder="Full name" required="required">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group col-md-6 mb-0">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div> 
            </div>
            <div class="form-group">
              <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group text-center">
              <div id="success"></div>
              <button type="submit" class="btn btn-default">Send Message</button>
            </div>
          </form>
 

        </div>

      </div>
    </section><!-- #contact -->

  </main>

<?php include'include/footer.php'; ?>