@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Category</a>
            <span class="breadcrumb-item active">View Category</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Category List
                    <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addcategorymodal" style="float: right;"><i class="fa fa-plus mg-r-10"></i>Add New</a>
                </h6>
                <p class="mg-b-20 mg-sm-b-30">List of your categories for product.</p>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mg-b-0">
                        <thead class="bg-info">
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Category Name</th>
                            <th class="wd-15p">Image</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $key=>$row)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $row->category_name }}</td>
                                <td> <img src="{{ URL::to($row->category_image) }}" height="70px;" width="80px;"> </td>
                                <td>
                                    <a href="{{ URL::to('edit/category/'.$row->id) }}" class="btn btn-sm btn-primary mg-b-10"><i class="fa fa-edit mg-r-10"></i>Edit</a>
                                    <a href="{{ URL::to('delete/category/'.$row->id) }}" class="btn btn-sm btn-danger mg-b-10" id="delete"><i class="fa fa-trash mg-r-10"></i>Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

        <!-- Add Category MODAL -->
        <div id="addcategorymodal" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Category</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('store.category')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                    <div class="modal-body pd-20">
                        <div class="col-xl-12">
                            {{--                    Error Message for Validation--}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {{--                    End Error Message for Validation--}}
                            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                                <div class="row">
                                    <label class="col-sm-5 form-control-label">Category Name: <span class="tx-danger">*</span></label>
                                    <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                        <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name" required>
                                    </div>
                                </div><!-- row -->
                                <br>
                                <div class="row">
                                    <label class="col-sm-5 form-control-label">Category Image: <span class="tx-danger">*</span></label>
                                    <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                        <input type="file" class="form-control" aria-describedby="emailHelp" placeholder="Category Image" name="category_image" onchange="readURL(this);">
                                    </div>
                                </div><!-- row -->
                                <div class="row">
                                    <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                        <img class="" src="https://via.placeholder.com/150x100?text=Upload+New" alt="Image" id="one">
                                    </div>
                                </div><!-- row -->
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="ckbox">
                                            <input type="checkbox" name="show_index" value="1">
                                            <span>Show This Category In Homepage</span>
                                        </label>
                                    </div>
                                </div>
                            </div><!-- card -->
                        </div>
                    </div><!-- modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->

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

@push('scripts')
            <script type="text/javascript">
                @if (count($errors) > 0)
                $('#addcategorymodal').modal('show');
                @endif
            </script>
@endpush


