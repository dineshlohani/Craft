@extends('admin.admin_layouts')

@section('admin_content')

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Banner</a>
            <span class="breadcrumb-item active">Edit Banner</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Banner Update</h6>
                <div class="table-wrapper">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ url('update/banner/'.$banner->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $banner->title }}" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Title: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $banner->sub_title }}" name="sub_title" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image: <span class="tx-danger">*</span></label>
                                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $banner->image }}" name="image" onchange="readURL(this);">
                            </div>
                            <div class="form-group">
                                <img src="{{ URL::to($banner->image) }}" id="one" style="width: 150px; height: 100px;">
                                <input type="hidden" name="old_image" value="{{ $banner->image }}">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info pd-x-20">Update</button>
                                <a href="{{route('admin.banner')}}" class="btn btn-danger mg-r-5">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->

        {{--script for showing images instantly while uploading --}}
        <script type="text/javascript">
            function readURL(input){
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#one')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(100);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>

@endsection
