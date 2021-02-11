<div class="banner-tabs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tabs">

                    <div class="tab-content bg-custom-white bx-wrapper padding-20">
                        <div class="tab-pane active" id="hotel">
                            <div class="tab-inner">
                                <form action="{{route('gethotel')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <label class="fs-14 text-custom-black fw-500">Your Hotel</label>
                                                @livewire('search')
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <label class="submit"></label>
                                            <button type="submit" class="btn-first btn-submit full-width btn-height">Search Now</button>
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
