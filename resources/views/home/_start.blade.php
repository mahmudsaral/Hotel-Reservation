<!-- Start Hotels -->
<section class="section-padding hotels-sec bg-light-white">
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h3 class="text-custom-black">Recommended Hotels</h3>
                <div class="section-description">
                    <p class="text-light-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="hotel-slider arrow-layout-2 row">
                    <div class="slide-item col-12">
                        @foreach($recommended_hotels as $rs)
                            <div class="hotel-grid">
                                <div class="hotel-grid-wrapper bx-wrapper">

                                    <div class="image-sec animate-img">
                                        <a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}">
                                            <img src="{{Storage::url($rs->image)}}" class="full-width" alt="img">
                                        </a>
                                    </div>
                                    <div class="hotel-grid-caption padding-20 bg-custom-white p-relative">
                                        <h4 class="title fs-16"><a href="hotel-detail.html" class="text-custom-black">{{$rs->title}}<small class="text-light-dark">{{$rs->country}} {{$rs->city}}</small></a></h4>
                                        <span class="price"><small>Star</small>{{$rs->star}}</span>
                                        <div class="action">
                                            <a class="btn-second btn-small" href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}">View</a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                    </div>

                    <div class="slide-item col-12">
                        @endforeach
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
