 <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
                  <h3>ردیاب</h3>
                  <p>فروش انواع ردیاب های ماشین بچه ها و سالمندان </p>
                </div>

                <div class="footer-newsletter">
                  <h4>تازه های ما</h4>
                  <p>جدیدترین ردیاب ها دنیا را زا ما بخواهید.</p>
                  <form action="" method="post">
                    <!-- <input type="email" name="email"><input type="submit" value="Subscribe"> -->
                  </form>
                </div>

              </div>

              <div class="col-sm-6">
                <div class="footer-links">
                  <h4>لینک ها مفید</h4>
                  <ul>
                      <li class="active"><a href="{{route('home')}}">خانه</a></li>
                      <li><a href="#about"> ردیابی </a></li>
                      <li><a href="{{route('admin')}}">مدیریت</a></li>
                      <li><a href="{{route('account')}}">حسابداری</a></li>
                      <li><a href="#portfolio">آمار</a></li>
                      <li class="drop-down"><a href="#">پنل کاربری </a>
                  </ul>
                </div>

                <div class="footer-links">
                  <h4> ارتباط با ما </h4>
                  <p>
                    خیابان فلان <br>
                    همدان<br>
                    ایران <br>
                    <strong>تلفن:</strong>09186645717<br>
                    <strong>ایمیل:</strong> maysamnegahdar5717@gmail.com<br>
                  </p>
                </div>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>ارسال نظرات و پیشنهادات</h4>
              <p>تماس با ما </p>
              <form method="POST" action="{{route('contact')}}" role="form" class="contactForm">
              @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="نام"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="ایمیل"
                    data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="موضوع"
                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required"
                    data-msg="Please write something for us" placeholder="پیام"></textarea>
                  <div class="validation"></div>
                </div>
                <div id="errormessage"></div>
                <div class="text-center"><button type="submit" >ارسال پیام</button></div>

              </form>
            </div>
          </div>
        </div>
     

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
<!--  
    JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>


</body>

</html>