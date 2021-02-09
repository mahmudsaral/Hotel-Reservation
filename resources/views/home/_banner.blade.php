<div class="banner-tabs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tabs">
                    <ul class="custom-flex nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#hotel">Hotel</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#cruise">SEARCH</a>
                        </li>
                    </ul>
                    <div class="tab-content bg-custom-white bx-wrapper padding-20">
                        <div class="tab-pane active" id="hotel">
                            <div class="tab-inner">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <label class="fs-14 text-custom-black fw-500">Your Destination</label>
                                                <input type="text" name="#" class="form-control form-control-custom" placeholder="Your Destination and Hotel Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Check In</label>
                                                        <div class="input-group group-form">
                                                            <input type="text" name="#" class="form-control form-control-custom datepickr" placeholder="mm/dd/yy" readonly>
                                                            <span class="input-group-append">
                                                                  <i class="far fa-calendar"></i>
                                                              </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Check Out</label>
                                                        <div class="input-group group-form">
                                                            <input type="text" name="#" class="form-control form-control-custom datepickr" placeholder="mm/dd/yy" readonly>
                                                            <span class="input-group-append">
                                                                  <i class="far fa-calendar"></i>
                                                              </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Rooms</label>
                                                        <div class="group-form">
                                                            <select class="custom-select form-control form-control-custom">
                                                                <option>01</option>
                                                                <option>02</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Adults</label>
                                                        <div class="group-form">
                                                            <select class="custom-select form-control form-control-custom">
                                                                <option>01</option>
                                                                <option>02</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label class="fs-14 text-custom-black fw-500">Kids</label>
                                                        <div class="group-form">
                                                            <select class="custom-select form-control form-control-custom">
                                                                <option>01</option>
                                                                <option>02</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <label class="submit"></label>
                                            <button type="submit" class="btn-first btn-submit full-width btn-height">Search Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane" id="cruise">
                            <div class="tab-inner">
                                <form action="{{route('gethotel')}}" method="post">
                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label class="fs-14 text-custom-black fw-500">HOTELS</label>
                                                @livewire('search')
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-12">
                                            <div class="row">

                                                <div class="col-6">

                                                    <label class="submit"></label>
                                                    <button type="submit" class="btn-first btn-submit full-width btn-height">Search Now</button>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                                @section('footerjs')
                                @livewireScripts
                                @endsection
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
