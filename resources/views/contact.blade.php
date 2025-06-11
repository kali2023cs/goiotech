@include('partials.header')

<!--===== HERO AREA STARTS =======-->
<div class="about-header-area"
  style="background-image: url(assets/img/bg/inner-header.png); background-repeat: no-repeat; background-size: cover; background-position: center;">
  <img src="assets/img/elements/elements1.png" alt="" class="elements1 aniamtion-key-1">
  <img src="assets/img/elements/star2.png" alt="" class="star2 keyframe5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="about-inner-header heading9 text-center">
          <h1>Contact Us</h1>
          <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Contact Us</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== CONTACT AREA STARTS =======-->
<div class="contact-main-inner-area sp1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="heading2 contact-header">
          <h5>Contact Us</h5>
          <h2>Connect with Goio Tech - Your Innovation Partner</h2>
          <p>At Goio Tech, we're passionate about building lasting relationships with our clients. Our Chennai-based
            team is ready to assist you with cutting-edge technology solutions and exceptional service. Whether you have
            questions about our services or want to discuss your next project, we're just a message or call away.</p>
          <div class="space32"></div>
          <div class="number-address-area">
            <div class="phone-number">
              <div class="img1">
                <img src="assets/img/icons/phone3.svg" alt="">
              </div>
              <div class="content">
                <p>Phone Number</p>
                <a href="tel:+914440203344">+91 44 4020 3344</a>
              </div>
            </div>

            <div class="phone-number m-0">
              <div class="img1">
                <img src="assets/img/icons/email3.svg" alt="">
              </div>
              <div class="content">
                <p>Email Address</p>
                <a href="mailto:goiotech.in@gmail.com">goiotech.in@gmail.com</a>
              </div>
            </div>
          </div>
          <div class="space50"></div>
          <div class="number-address-area2">
            <div class="phone-number">
              <div class="img1">
                <img src="assets/img/icons/location3.svg" alt="">
              </div>
              <div class="content">
                <a href="#">Tidel Park, 4th Floor, No.4 <br class="d-lg-block d-none"> Rajiv Gandhi Salai, Taramani,
                  Chennai - 600113</a>
              </div>
            </div>

            <div class="phone-number">
              <a href="https://goo.gl/maps/3J5QZ8X9X5J2" class="map" target="_blank">View Our Map</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-5">
        <div class="contact-form-area">
          <h4>Get In Touch</h4>

          {{-- Flash Message --}}
          @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif

          <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <div class="input-area">
                  <input type="text" name="first_name" placeholder="First Name" required>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="input-area">
                  <input type="text" name="last_name" placeholder="Last Name" required>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="input-area">
                  <input type="email" name="email" placeholder="Email Address" required>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="input-area">
                  <input type="text" name="phone" placeholder="Phone Number" required>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="input-area">
                  <textarea name="message" placeholder="Your Message" required></textarea>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="input-area">
                  <select name="service_type" required>
                    <option value="" disabled selected>Select Service Type</option>
                    <option value="Website">Website</option>
                    <option value="Software">Software</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="input-area">
                  <button type="submit" class="header-btn1">
                    Get In Touch <span><i class="fa-solid fa-arrow-right"></i></span>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="location-section-area sp2 bg2">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 m-auto">
        <div class="location-header text-center heading2">
          <h5>Location</h5>
          <h2>Our Offices</h2>
        </div>
      </div>
    </div>
    <div class="space60 d-lg-block d-none"></div>
    <div class="space30 d-lg-none d-block"></div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="location-boxes">
          <div class="img1">
            <img src="assets/img/icons/location3.svg" alt="">
          </div>
          <div class="space32"></div>
          <a href="#">Chennai HQ <br class="d-lg-block d-none">
            Tidel Park, 4th Floor, Taramani</a>
          <div class="space24"></div>
          <p>Phone Number</p>
          <a href="tel:+914440203344">+91 44 4020 3344</a>
          <div class="space32"></div>
          <a href="https://goo.gl/maps/3J5QZ8X9X5J2" class="map" target="_blank">View Our Map</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="location-boxes">
          <div class="img1">
            <img src="assets/img/icons/location3.svg" alt="">
          </div>
          <div class="space32"></div>
          <a href="#">Bangalore <br class="d-lg-block d-none">
            Prestige Tech Park, Marathahalli</a>
          <div class="space24"></div>
          <p>Phone Number</p>
          <a href="tel:+918023456789">+91 80 2345 6789</a>
          <div class="space32"></div>
          <a href="https://goo.gl/maps/5J7K8M9N2L1P" class="map" target="_blank">View Our Map</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="location-boxes">
          <div class="img1">
            <img src="assets/img/icons/location3.svg" alt="">
          </div>
          <div class="space32"></div>
          <a href="#">Hyderabad <br class="d-lg-block d-none">
            HITEC City, 2nd Floor, Madhapur</a>
          <div class="space24"></div>
          <p>Phone Number</p>
          <a href="tel:+914023456789">+91 40 2345 6789</a>
          <div class="space32"></div>
          <a href="https://goo.gl/maps/9K8J7M6N5L4P" class="map" target="_blank">View Our Map</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mapouter">
  <div class="gmap_canvas">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.269037744963!2d80.24173831482293!3d13.04766359081457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526660b9a6a7a7%3A0x1e2c4a1f7e3c1b1d!2sTidel%20Park!5e0!3m2!1sen!2sin!4v1621234567890!5m2!1sen!2sin"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<!--===== CONTACT AREA ENDS =======-->

{{-- Bottom of the page --}}
@include('partials.footer')