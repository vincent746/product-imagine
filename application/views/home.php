<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '_header.php'; ?>
</head>

<body>

  <!-- ======= Header ======= -->
    <?php include '_topmenu.php'; ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="align-items-center hero-content">

  
   <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-5 text-slider" data-aos="zoom-in" data-aos-delay="200">
              <div id="owl-banner" class="owl-carousel-text owl-theme image-slider">
                <?php foreach($banners as $banner) { ?>
                  <?php if($banner->is_active == 1) { ?>
                    <div class="slider-satu">
                      <img src="<?php echo base_url() . 'assets/img/text-slider/' . $banner->urlbanner; ?>">
                    </div>    
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
         
        </div>
      </div>
  

  </section><!-- End Hero -->

  <!-- Content Product -->
  <section id="products" class="product-bg">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="header-product">
          <p>OUR PRODUCTS</p>
        </div>
        <div class="col-md-10">
          <div class="row content-product">
            <div class="col-md" data-aos="zoom-in" data-aos-delay="100">
              <div class="card card1">
                <img class="card-img-top card-img" src="assets/img/product/PRODUCTDISPLAY1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h2>Noodles</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                      <h4>$13</h4>
                    </div>
                    <div class="bd-highlight">
                      <h4><button type="button" class="btn btn-primary contact">
                        ORDER
                      </button></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md" data-aos="zoom-in" data-aos-delay="200">
              <div class="card card2">
                <img class="card-img-top card-img" src="assets/img/product/PRODUCTDISPLAY2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h2>Noodles</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                      <h4>$13</h4>
                    </div>
                    <div class="bd-highlight">
                      <h4><button type="button" class="btn btn-primary contact">
                        ORDER
                      </button></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md" data-aos="zoom-in" data-aos-delay="300">
              <div class="card card3">
                <img class="card-img-top card-img" src="assets/img/product/PRODUCTDISPLAY3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h2>Noodles</h2>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                      <h4>$13</h4>
                    </div>
                    <div class="bd-highlight">
                      <h4><button type="button" class="btn btn-primary contact">
                        ORDER
                      </button></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row text-center show-more">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary button">
                <p>Show More</p>
              </button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End Content Product-->


  <!-- Detail Product -->
  <section>
    <div class="site-section counter">
        <div class="container detail-product" data-aos="fade-up">
          <div class="row mt-5 mb-5">
            <div class="col-lg-6 mb-5" data-aos="fade-right" data-aos-delay="100">
              <img src="assets/img/detail-product/GAMBAR1.jpg" alt="Image" class="img-fluid img-detail-product">
            </div>
            <div class="col-lg-5 ml-auto align-self-center" data-aos="fade-left" data-aos-delay="100">
              <h1 class="mb-4">Discount up to 50% All Menu</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur.</p>
              <div class="row mb-4">
                <div class="col-md-12">
                  <button type="button" class="btn btn-primary button">
                    <p>READ MORE</p>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="row mb-5">
            <div class="col-lg-6 mb-5 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="assets/img/detail-product/GAMBAR2.jpg" alt="Image" class="img-fluid img-detail-product">
            </div>
            <div class="col-lg-5 mr-auto align-self-center product-right" data-aos="fade-right" data-aos-delay="100">
              <h1 class="mb-4">Discount up to 50% All Menu</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur.</p>
              <div class="row">
                <div class="col-md-12">
                  <button type="button" class="btn btn-primary button">
                    <p>READ MORE</p>
                  </button>
                </div>
              </div>
            </div>
        </div>
    </div>
  </section>
  <!-- End Detail Product -->

  <!-- How To Order -->

  <section id="order" class="order-bg">
    <div class="container order" data-aos="fade-up">
      <div class="row">
        <div class="header-order">
          <p>HOW TO ORDER</p>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="col" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/how-to-order/1BUTTON.png">
              <h1>Order</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.</p>
            </div>
            <div class="col" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/how-to-order/2BUTTON.png">
              <h1>Choose Menu</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.</p>
            </div>
            <div class="col" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/how-to-order/3BUTTON.png">
              <h1>Delivery</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Akhir How To Order -->

  <!-- Testimonial -->
  <div class="section-5" style="margin-top: 100px;">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="header-testimoni">
              <p>TESTIMONI</p>
            </div>
            
          </div>
        </div>
        <section class="blog_section">
            <div class="container">
                <div class="blog_content">
                    <div id="owl-carousel-test" class="owl-carousel owl-theme">
                        <div class="blog_item">
                            <div class="blog_image">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/testimonial/face1.jpg'); ?>" alt="images not found">
                                <span><i class="icon ion-md-create"></i></span>
                            </div>
                            <div class="blog_details">
                                <div class="blog_title">
                                    <h5>Reno</h5>
                                    <h4>Creative &amp; Agency</h4>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                            </div>
                        </div>                        
                        <div class="blog_item">
                            <div class="blog_image">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/testimonial/face1.jpg'); ?>" alt="images not found">
                                <span><i class="icon ion-md-create"></i></span>
                            </div>
                            <div class="blog_details">
                                <div class="blog_title">
                                    <h5>Reni</h5>
                                    <h4>Store &amp; Agency</h4>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                            </div>
                        </div>                        
                        <div class="blog_item">
                            <div class="blog_image">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/testimonial/face1.jpg'); ?>" alt="images not found">
                                <span><i class="icon ion-md-create"></i></span>
                            </div>
                            <div class="blog_details">
                                <div class="blog_title">
                                    <h5>Reno</h5>
                                    <h4>Creative &amp; Agency</h4>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  <!-- Akhir Testimonial -->

  <!-- Contact -->
  <section id="contact" class="contact-bg">
    <div class="container contact" data-aos="fade-up">
      <div class="row text-center">
        <div class="col-12" data-aos="zoom-in" data-aos-delay="100">
          <div class="row contact-us">
            <div class="col-lg-6">
              <img src="assets/img/contact/CONTACTPAGETEXT.png">
              <button>CONTACT US</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Contact -->

  <!-- Imagine Quotes -->

  <?php if ($quotes[0]->is_active == 1) : ?>
    <section class="quotes-bg">
      <div class="container quotes" data-aos="fade-up">
        <div class="row">
          <div class="header-quotes">
            <img src="assets/img/quotes/TANDAKUTIP.png">
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-10" data-aos="zoom-in">
            <p><?php echo $quotes[0]->quotes; ?></p>
          </div>
          <div class="col-md-1"></div>
          <h1>IMAGINE</h1>
        </div>
      </div>
    </section>
  <?php endif ?>
  

  <!-- Akhir Imagine Quotes -->

  <!-- About -->
  <section class="about-bg">
    <div class="container about" data-aos="fade-up">
      <div class="row">
        <div class="header-about">
          <!-- <img src="assets/img/quotes/TANDAKUTIP.png"> -->
        </div>
        <div class="row">
          <div class="col-12">
            <div class="row">
                <div class="col-lg-4 sosmed">
                  <h4>
                      <img class="header-sosmed" src="assets/img/logo/LOGOIMAGINEART&MERCHANDISE.png" width="275">
                  </h4>
                  <ul class="list-inline list-unstyled sosmed-img">
                      <li>
                          <a target="_blank" href="">
                            <img src="assets/img/about/1ICONWA.png">
                          </a>
                      </li>
                      <li>
                          <a target="_blank" href="#">
                            <img src="assets/img/about/2ICONIG.png">
                          </a>
                      </li>
                      <li>
                          <a target="_blank" href="#">
                              <img src="assets/img/about/3ICONFB.png">
                          </a>
                      </li>
                  </ul>
              </div>
              <div class="col-lg-4 contact-us">
                <h2>Contact Us</h2>
                <p>Phone : </p>
                <p>Email : </p>
                <p><span>HQ (Headquarter)</span><br>Bintaro, Jakarta Selatan</p>
              </div>
              <div class="col-lg-4 about-footer">
                <h2>About</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <!-- Akhir About -->


  <!-- ======= Footer ======= -->
    <?php include '_footer.php'; ?>
  <!-- End Footer -->

</body>

</html>