<!doctype html>
<html lang="en">
  <head>
    @include('home.css')
  </head>
  <body>
    @include('home.header')

    @include('home.slider')

    @include('home.room')

    @include('home.about')

    @include('home.services')
    
    <section class="offer-section-padding" id="offer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="offer-section__content">
                        <p class="section__subheader">Special Offer</p>
                        <h2 class="section__header">Enjoy The Offer</h2>
                        <p class="section__description">
                            Suspendisse commodo bibendum purus at hendrerit. Vivamus aliquam bibendum fringilla.
                            Praesent cursus felis nunc, quis vulputate sapien posuere vitae. Aliquam erat volutpat.
                            Cras egestas porta massa eget pulvinar. Cras non enim et dui pharetra hendrerit mattis.
                        </p>
                        <p class="section__description-2">
                            PAYMENT OPTIONS :
                        </p>
                        <ul class="payment">
                            <li><a href="#"><i class="fa-brands fa-cc-visa"></i></li>
                            <li><a href="#"><i class="fa-brands fa-cc-paypal"></i></li>
                            <li><a href="#"><i class="fab fa-cc-mastercard"></i></a></li>
                            <li><a href="#"><i class="fab fa-cc-stripe"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="circle">
                        <div class="content">
                            <h6>UP TO</h6>
                            <h1>30%</h1>
                            <p>On Selected Rooms</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="count-section" id="#offer">
        <div class="counter-wrapper">
            <div class="counter">
                <h1 class="count" data-target="120">0+</h1>
                <p>New Listing Every Week</p>
            </div>
            <div class="counter">
                <h1 class="count" data-target="220">0+</h1>
                <p>New Visitors Every Week</p>
            </div>
            <div class="counter">
                <h1 class="count" data-target="540">0+</h1>
                <p>Exceptional Food</p>
            </div>
            <div class="counter">
                <h1 class="count" data-target="2560">0+</h1>
                <p>Happy customers every year</p>
            </div>
        </div>
    </section>

    @include('home.gallery')
    
    <section class="testimonial-section" id="review">
        <div class="container">
            <div class="col-12">
                <div class="rx-banner text-center rx-banner-effects">
                    <h4>Testimonial</h4>
                    <h1>What Our Client Say</span></h1>
                </div>
            </div>
            <div class="container-lg">
                <div class="row">
                    <div class="col-sm-12">			
                        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                            </ol>   
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-1.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Paula Wilson</b></div>
                                                        <div class="details">Media Analyst
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>										
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-2.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Antonio Moreno</b></div>
                                                        <div class="details">Web Developer</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>										
                                                </div>
                                            </div>
                                        </div>
                                    </div>			
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-3.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Michael Holz</b></div>
                                                        <div class="details">Web Developer</div>											
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>										
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-4.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Mary Saveley</b></div>
                                                        <div class="details">Graphic Designer / MarsMedia</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>										
                                                </div>
                                            </div>
                                        </div>
                                    </div>			
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-5.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>Martin Sommer</b></div>
                                                        <div class="details">SEO Analyst</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>										
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="testimonial">
                                                <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
                                            </div>
                                            <div class="media">
                                                <img src="assets/test-6.jpg" class="me-3" alt="">
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"><b>John Williams</b></div>
                                                        <div class="details">Web Designer</div>
                                                        <div class="star-rating">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>										
                                                </div>
                                            </div>
                                        </div>
                                    </div>			
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    @include('home.contact')
    
    <section class="faqs" id="faq">
        <div class="col-lg-12 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="rx-banner text-center rx-banner-effects">
                <h4>Faqs</h4>
                <h1>Frequently Asked Questions</h1>
            </div>
        </div>
        <div class="row">
            <div class="image">
                <img src="assets/test-bg.jpg" alt="">
            </div>
            <div class="content">
                <div class="box">
                    <h3>How can I confirm that you have received my reservation?
                        <span class="icon">+</span>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
                </div>
        
                <div class="box">
                    <h3>Up to what age are they considered children?
                        <span class="icon">+</span>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
                </div>
        
                <div class="box">
                    <h3>Do you have any discount code?
                        <span class="icon">+</span>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
                </div>
        
                <div class="box">
                    <h3>How can I get in touch with my hotel?
                        <span class="icon">+</span>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
                </div>
        
                <div class="box">
                    <h3>On the last day, can I leave the room later?
                        <span class="icon">+</span>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cupiditate mollitia.</p>
                </div>
    
                <div class="box">
                    <h3>How can I pay for my booking?
                        <span class="icon">+</span>
                    </h3>
                    <p>We accept Visa, MasterCard, and American Express credit and debit cards for your convenience.</p>
                </div>
                <div class="box">
                    <h3>Do you have hotels with a spa?
                        <span class="icon">+</span>
                    </h3>
                    <p>Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. 
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('home.footer')

  </body>
</html>

