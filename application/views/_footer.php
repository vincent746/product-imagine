  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; 2022 <strong><span>IMAGINE ART & MERCHANDISE</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Owned by <strong><span>Ary Herlambang</span></strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js');?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  
  

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

  <script type="text/javascript">
    $(document).ready(function(){
        $('#owl-banner').owlCarouselBanner({
            loop:true,
            margin:0,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    
                    autoHeight:true
                },
                400:{
                    items:1,
                    
                  autoHeight:true
                },
                600:{
                    items:1,
                   
                  autoHeight:true
                },
                1000:{
                    items:1,
                    nav:false,
                    loop:true,
                    autoplay:true,
                    autoplayTimeout:4000,
                    autoplayHoverPause:false,
                  autoHeight:true
                }
            }
        })
    });

    $('#owl-carousel-test').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        nav:true,
        autoplay:true,
        responsiveClass:true,   
        smartSpeed: 3000, 
        autoplayTimeout:7000,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            400:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:true
            },
            1000:{
                items:4,
                nav:true
            }
        }
    })
  </script>