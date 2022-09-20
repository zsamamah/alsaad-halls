@extends('layouts.template')

@section('content')
  
  <section id="main-container" class="main-container">
    <div class="container">
  
      <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Reaching our Office</h2>
          <h3 class="section-sub-title">Find Our Location</h3>
        </div>
      </div>
      <!--/ Title row end -->
  
      <div class="row">
        <div class="col-md-4">
          <div class="ts-service-box-bg text-center h-100">
            <span class="ts-service-icon icon-round">
              <i class="fas fa-map-marker-alt mr-0"></i>
            </span>
            <div class="ts-service-box-content">
              <h4>Visit Our Office</h4>
              <p>9051 Constra Incorporate, USA</p>
            </div>
          </div>
        </div><!-- Col 1 end -->
  
        <div class="col-md-4">
          <div class="ts-service-box-bg text-center h-100">
            <span class="ts-service-icon icon-round">
              <i class="fa fa-envelope mr-0"></i>
            </span>
            <div class="ts-service-box-content">
              <h4>Email Us</h4>
              <a href="mailto:contact@tajmelna.com" class="no-hover">contact@tajmelna.com</a>
            </div>
          </div>
        </div><!-- Col 2 end -->
  
        <div class="col-md-4">
          <div class="ts-service-box-bg text-center h-100">
            <span class="ts-service-icon icon-round">
              <i class="fa fa-phone-square mr-0"></i>
            </span>
            <div class="ts-service-box-content">
              <h4>Call Us</h4>
              <a href="tel:+98472914353">(+9) 847-291-4353</a>
            </div>
          </div>
        </div><!-- Col 3 end -->
  
      </div><!-- 1st row end -->
  
      <div class="gap-60"></div>
  
      <div class="google-map">
        <div id="map" class="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Constra"></div>
      </div>
  
      <div class="gap-40"></div>
  
      <div class="row">
        <div class="col-md-12">
          <h3 class="column-title">We love to hear</h3>
          <!-- contact form -->
          <form id="contact-form" action="{{ route('contact.store') }}" method="post" role="form">
            @csrf
            <div class="error-container"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Name</label>
                  <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
                    required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Subject</label>
                  <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Message</label>
              <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
                required></textarea>
            </div>
            <div class="text-right"><br>
              <button class="btn btn-primary solid blank" type="submit">Send Message</button>
            </div>
          </form>
        </div>
  
      </div><!-- Content row -->
    </div><!-- Conatiner end -->
  </section><!-- Main container end -->


@endsection