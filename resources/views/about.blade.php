@extends('layouts.template')

@section('content')

    <!-- who we are -->
<section id="main-container" class="main-container">
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <h3 class="column-title">Who We Are</h3>
            <p>when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>
            <blockquote><p>Semporibus autem quibusdam et aut officiis debitis aut rerum est aut optio cumque nihil necessitatibus autemn ec tincidunt nunc posuere ut</p></blockquote>
            <p>He lay on his armour-like  back, and if he lifted. ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing.</p>
  
          </div><!-- Col end -->
  
          <div class="col-lg-6 mt-5 mt-lg-0">
            
            <div id="page-slider" class="page-slider small-bg">
  
                <div class="item" style="background-image:url(images/slider-pages/slide-page1.jpg)">
                  <div class="container">
                      <div class="box-slider-content">
                        <div class="box-slider-text">
                            <h2 class="box-slide-title">Leadership</h2>
                        </div>    
                      </div>
                  </div>
                </div><!-- Item 1 end -->
  
                <div class="item" style="background-image:url(images/slider-pages/slide-page2.jpg)">
                  <div class="container">
                      <div class="box-slider-content">
                        <div class="box-slider-text">
                            <h2 class="box-slide-title">Relationships</h2>
                        </div>    
                      </div>
                  </div>
                </div><!-- Item 1 end -->
  
                <div class="item" style="background-image:url(images/slider-pages/slide-page3.jpg)">
                  <div class="container">
                      <div class="box-slider-content">
                        <div class="box-slider-text">
                            <h2 class="box-slide-title">Performance</h2>
                        </div>    
                      </div>
                  </div>
                </div><!-- Item 1 end -->
            </div><!-- Page slider end-->          
          
  
          </div><!-- Col end -->
      </div><!-- Content row end -->
  
    </div><!-- Container end -->
  </section>
  <!-- who we are end -->

   <!-- Statistics -->
<section id="facts" class="facts-area dark-bg">
    <div class="container">
      <div class="facts-wrapper">
          <div class="row">
            <div class="col-md-3 col-sm-6 ts-facts">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                  <h3 class="ts-facts-title">Total Projects</h3>
                </div>
            </div><!-- Col end -->
  
            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact2.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                  <h3 class="ts-facts-title">Staff Members</h3>
                </div>
            </div><!-- Col end -->
  
            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact3.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                  <h3 class="ts-facts-title">Hours of Work</h3>
                </div>
            </div><!-- Col end -->
  
            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact4.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                  <h3 class="ts-facts-title">Countries Experience</h3>
                </div>
            </div><!-- Col end -->
  
          </div> <!-- Facts end -->
      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
  </section>
  <!-- End of Statistics -->
@endsection