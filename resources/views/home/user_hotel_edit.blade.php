@extends('layouts.home2')
@section('title','Edit Hotel')
@section('headerjs')

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

@endsection

@section('content')

    <div class="page-wrapper">

        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Hotels</h4>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="card-body">
                                            <form action="{{route('user_hotel_update',['id'=>$data->id])}}" method="post" accept-charset="" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-body">
                                                    <h3 class="card-title">Hotel Edit</h3>
                                                    <hr>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-success">
                                                                <label class="control-label">Parent</label>
                                                                <select class="form-control custom-select" name="category_id">
                                                                    @foreach ($datalist as $rs)
                                                                        <option value="{{ $rs->id }}" @if($rs->id == $data->parent_id) selected="selected" @endif>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Title</label>
                                                                <input type="text" id="title" name ="title" value="{{$data->title}}"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Keywords</label>
                                                                <input type="text"  name ="keywords" value="{{$data->keywords}}"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Description</label>
                                                                <input type="text"  name ="description" value="{{$data->description}}"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>

                                                    <!--/row-->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Detail</label>
                                                                <textarea id="detail" name="detail"></textarea>
                                                                <script>
                                                                    CKEDITOR.replace( 'detail' );
                                                                </script>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Star</label>
                                                                <input type="text"  name ="star" value="{{$data->star}}"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Address</label>
                                                                <input type="text"  name ="address" class="form-control">
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Phone</label>
                                                                <input type="text"  name ="phone" value="{{$data->phone}}" class="form-control">
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Fax</label>
                                                                <input type="text"  name ="fax" value="{{$data->fax}}"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>
                                                                <input type="text"  name ="email" value="{{$data->email}}"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">City</label>
                                                                <input type="text"  name ="city" value="{{$data->city}}" class="form-control">
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Country</label>
                                                                <input type="text"  name ="country" value="{{$data->country}}"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Location</label>
                                                                <input type="text"  name ="location"  value="{{$data->location}}"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Slug</label>
                                                                <input type="text"  name ="slug" value="{{$data->slug}}" class="form-control">
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-success">
                                                                <label class="control-label">Status</label>
                                                                <select class="form-control custom-select" name="status">
                                                                    <option selected="selected">{{$data->status}}
                                                                    </option>
                                                                    <option value="0" selected="selected">False</option>
                                                                    <option>True</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Image</label>
                                                                <input type="file"  name ="image" value="{{$data->image}}" class="form-control">
                                                                @if($rs->image)
                                                                    <img src="{{ Storage::url($rs->image)}}" height="60" alt="">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Edit Hotel</button>
                                                    <button type="submit" class="btn btn-inverse">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>


@endsection





