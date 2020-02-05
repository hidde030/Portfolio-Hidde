@extends('layouts.contactlayout')

@section('title')
    Contact informatie
@endsection

@section('content')
    <!-- begin contact form -->
<section id="contact">

  <h1 class="section-header">CONTACT</h1>

  <div class="contact-wrapper">

      <!----------------

      CONTACT PAGE right

      ----------------->

    <form class="form-horizontal" role="form" method="post" action="/contact">
    @csrf
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="">
        </div>
      </div>
      @error('content')
        @component('components.alert') {{ $message }} @endcomponent
        @enderror
      <div class="form-group">
        <div class="col-sm-12">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="">
        </div>
      </div>
      @error('email')
        @component('components.alert') {{ $message }} @endcomponent
        @enderror

      <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"></textarea>
      @error('content')
        @component('components.alert') {{ $message }} @endcomponent
        @enderror
      <button class="btn btn-primary send-button shadow" id="submit" type="submit" value="SEND">
        <div class="button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
        </div>

      </button>

    </form>

      <!----------------

      CONTACT PAGE left

      ----------------->

      <div class="direct-contact-container">

        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">IJssestein | Utrecht</span></i></li>

          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(+31) 611133518</a></span></i></li>

          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">glansdorphidde@gmail.com</a></span></i></li>

        </ul>

        <hr>
        <ul class="social-media-list">
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-github" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </li>
          <li><a href="https://www.instagram.com/hiddeglansdorp/" target="_blank" class="contact-icon">
            <i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>
          <li><a href="https://codepen.io/hidde030" target="_blank" class="contact-icon">
            <i class="fa fa-codepen" aria-hidden="true"></i></a>
          </li>
        </ul>
        <hr>

        <div class="copyright">&copy; Hidde Glansdorp 2020</div>

      </div>

  </div>

</section>
<!-- end contact form -->

@endsection
