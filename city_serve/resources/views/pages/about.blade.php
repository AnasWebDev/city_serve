@extends('layouts.app')

 @section('content')
 <section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('assets/images/home-bg.svg')}}')" id="home-section">
  <div class="container">
    <div class="row mr-5">
      <div class="col-lg-8 offset-lg-2">
        <div class="row">
  <h2 class="text-left mb-4" style="font-size: 32px; color:white">About Us</h2>
      </div>
    </div>
  </div>
  </div>
</section>
 <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="text-left mb-4" style="font-size: 32px;">About Us</h2>
            <p style="font-size: 20px;">Welcome to City Serve, where volunteering makes a difference! We are a community of passionate volunteers dedicated to creating positive change.</p>
          </div>
          <div class="col-lg-6">
            <div class="text-center">
              <img src="{{ asset('assets/images/4_picture.jpg') }}" class="img-fluid rounded-circle mt-4 mb-4" alt="Volunteers in action" style="width: 200px; height: 200px;">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h3 class="text-left mt-4 mb-2" style="font-size: 28px;">Join Us as a Volunteer</h3>
            <p style="font-size: 20px;">Are you ready to make a difference? Join our community of volunteers and be part of something meaningful.</p>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-6">
                <div class="text-center">
                  <img src="{{ asset('assets/images/2_picture.jpg') }}" class="img-fluid rounded mt-4 mb-4" alt="Volunteer 1" style="width: 300px; height: 200px;">
                </div>
              </div>
              <div class="col-md-6">
                <div class="text-center">
                  <img src="{{ asset('assets/images/3_picture.jpg') }}" class="img-fluid rounded mt-4 mb-4" alt="Volunteer 2" style="width: 300px; height: 200px;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
 @endsection