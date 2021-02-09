@php
    $setting = \App\Http\Controllers\HomeController::getSetting()
@endphp

<footer class="section-padding footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-box mb-md-40">
                    <h4 class="text-custom-white fw-600">About Us</h4>
                    <p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <p class="text-custom-white">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                    </p>
                    <ul class="custom-flex socials">
                        @if ($setting->facebook != null)<li><a href="{{$setting->facebook}}" target="_blank" class="text-custom-white fs-14"><i class="fab fa-facebook-f"></i></a></li>@endif
                        @if ($setting->twitter != null)<li><a href="{{$setting->twitter}}" target="_blank" class="text-custom-white fs-14"><i class="fab fa-twitter"></i></a></li>@endif
                        @if ($setting->instagram != null)<li><a href="{{$setting->instagram}}" target="_blank" class="text-custom-white fs-14"><i class="fab fa-linkedin"></i></a></li>@endif
                        @if ($setting->youtube != null)<li><a href="{{$setting->youtube}}" target="_blank" class="text-custom-white fs-14"><i class="fab fa-youtube"></i></a></li>@endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box mb-md-40">
                    <h4 class="text-custom-white fw-600">Quick Links</h4>
                    <ul class="custom links">
                        <li>
                            <a href="index.html" class="text-custom-white">Home</a>
                        </li>
                        <li>
                            <a href="hotels.html" class="text-custom-white">Hotels</a>
                        </li>
                        <li>
                            <a href="flights.html" class="text-custom-white">Flights</a>
                        </li>
                        <li>
                            <a href="cruise.html" class="text-custom-white">Cruise</a>
                        </li>
                        <li>
                            <a href="blog.html" class="text-custom-white">Blog</a>
                        </li>
                        <li>
                            <a href="404.html" class="text-custom-white">404</a>
                        </li>
                        <li>
                            <a href="contact.html" class="text-custom-white">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box mb-sm-40">
                    <h4 class="text-custom-white fw-600">Instagram</h4>
                    <ul class="custom instagram gallery-grid">
                        <li>
                            <a href="{{ asset('assets')}}/images/gallery/g_gal_1.jpg" class="text-custom-white popup">
                                <img src="{{ asset('assets')}}/images/gallery/g_gal_1.jpg" class="image-fit" alt="img">
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('assets')}}/images/gallery/g_gal_2.jpg" class="text-custom-white popup">
                                <img src="{{ asset('assets')}}/images/gallery/g_gal_2.jpg" class="image-fit" alt="img">
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('assets')}}/images/gallery/g_gal_3.jpg" class="text-custom-white popup">
                                <img src="{{ asset('assets')}}/images/gallery/g_gal_3.jpg" class="image-fit" alt="img">
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('assets')}}/images/gallery/g_gal_4.jpg" class="text-custom-white popup">
                                <img src="{{ asset('assets')}}/images/gallery/g_gal_4.jpg" class="image-fit" alt="img">
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('assets')}}/images/gallery/g_gal_5.jpg" class="text-custom-white popup">
                                <img src="{{ asset('assets')}}/images/gallery/g_gal_5.jpg" class="image-fit" alt="img">
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('assets')}}/images/gallery/g_gal_6.jpg" class="text-custom-white popup">
                                <img src="{{ asset('assets')}}/images/gallery/g_gal_6.jpg" class="image-fit" alt="img">
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('assets')}}/images/gallery/g_gal_7.jpg" class="text-custom-white popup">
                                <img src="{{ asset('assets')}}/images/gallery/g_gal_7.jpg" class="image-fit" alt="img">
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('assets')}}/images/gallery/g_gal_8.jpg" class="text-custom-white popup">
                                <img src="{{ asset('assets')}}/images/gallery/g_gal_8.jpg" class="image-fit" alt="img">
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('assets')}}/images/gallery/g_gal_9.jpg" class="text-custom-white popup">
                                <img src="{{ asset('assets')}}/images/gallery/g_gal_9.jpg" class="image-fit" alt="img">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box mb-sm-40">
                    <h4 class="text-custom-white fw-600">Newsletter</h4>
                    <div class="newsletter">
                        <p class="text-custom-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <form>
                            <div class="form-group">
                                <input type="email" name="#" class="form-control form-control-custom" placeholder="Email I'd">
                            </div>
                            <button type="submit" class="btn-first btn-submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- Start Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-custom-white">© Toor - 2020 | All Right Reserved <a  class="text-custom-white"></a> {{ $setting->company }}</p>
            </div>
        </div>
    </div>
</div>
<!-- End Copyright -->
<div id="back-top" class="back-top">
    <a href="#top"><i class="flaticon-arrows"></i></a>
</div>
<!-- jQuery -->
<script src="{{ asset('assets')}}/js/jquery.min.js"></script>
<!-- Popper -->
<script src="{{ asset('assets')}}/js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets')}}/js/bootstrap.min.js"></script>
<!-- Range Slider -->
<script src="{{ asset('assets')}}/js/ion.rangeSlider.min.js"></script>
<!-- Slick Slider -->
<script src="{{ asset('assets')}}/js/slick.min.js"></script>
<!-- Datepicker -->
<script src="{{ asset('assets')}}/js/datepicker.js"></script>
<script src="{{ asset('assets')}}/js/datepicker.en.js"></script>
<!-- Isotope Gallery -->
<script src="{{ asset('assets')}}/js/isotope.pkgd.min.js"></script>
<!-- Nice Select -->
<script src="{{ asset('assets')}}/js/jquery.nice-select.js"></script>
<!-- magnific popup -->
<script src="{{ asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
<!-- Custom Js -->
<script src="{{ asset('assets')}}/js/custom.js"></script>
<!-- /Place all Scripts Here -->
