@extends('Mamba.master')
@section('content')
 <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="{{asset('/public/assets/img/about.jpg')}}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>About Us</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= our mission ======= -->
    <section class="text-center container" style="padding: 0px;">
    	<h1>OUR MISSION</h1>
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>
 <!--  End our mission -->



   <!-- ======= JOB Market ======= -->
    <section class="text-center container" style="padding: 0px;">
    	<h1>JOB MARKET</h1>
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>
 <!--  End JOB MARKET -->
   

@endsection