<div class="slider p-relative">
    <div class="main-banner arrow-layout-1 ">
        @foreach($slider as $rs)
            <div class="slide-item">
                <img src="{{Storage::url($rs->image)}}" height="30" alt="" class="image-fit">
                <div class="transform-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="slider-content">

                                    <h1 class="text-custom-white"></h1>
                                    <ul class="custom">
                                        <li class="text-custom-white">
                                            <i class="fas fa-building"></i>
                                            {{$rs->title}}
                                        </li>
                                        <li class="text-custom-white">
                                            <i class="fas fa-map-marker-alt"></i>
                                            {{$rs->country}}
                                        </li>
                                        <li class="text-custom-white">
                                            <i class="fas fa-dollar-sign"></i>
                                            Best Price Hotel
                                        </li>

                                    </ul>
                                    <a href="{{route('hotel',['id' => $rs->id,'slug' => $rs->slug])}}" class="btn-first btn-small">Find Out More</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
