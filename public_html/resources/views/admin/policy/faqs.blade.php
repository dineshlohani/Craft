@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">FAQs</a>
            <span class="breadcrumb-item active">View FAQs</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">FAQs List
                    <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addfaqmodal" style="float: right;"><i class="fa fa-plus mg-r-10"></i>Add New</a>
                </h6>
                <p class="mg-b-20 mg-sm-b-30">List of FAQs.</p>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mg-b-0">
                        <thead class="bg-info">
                        <tr>
                            <th class="wd-5p">ID</th>
                            <th class="wd-5p">Question</th>
                            <th class="wd-25p">Answer</th>
                            <th class="wd-5p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($faq as $key=>$row)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{!! $row->description !!}</td>
                                <td>
                                    <a href="{{ URL::to('edit/faq/'.$row->id) }}" class="btn btn-sm btn-primary mg-b-10"><i class="fa fa-edit mg-r-10"></i>Edit</a>
                                    <a href="{{ URL::to('delete/faq/'.$row->id) }}" class="btn btn-sm btn-danger mg-b-10" id="delete"><i class="fa fa-trash mg-r-10"></i>Delete</a>
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
        <div id="addfaqmodal" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add FAQ</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('store.faq')}}" method="POST" enctype="multipart/form-data" >
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
                                        <label class="col-sm-5 form-control-label">Title: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="title" class="form-control" placeholder="Enter Banner Sub Title" required>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <label class="col-sm-5 form-control-label">Description: <span class="tx-danger">*</span></label>
                                        <div class="col-xl-12 mg-t-10 mg-sm-t-0">
                                            <textarea class="form-control" id="summernote" name="description" required></textarea>
                                        </div>
                                    </div><!-- row -->
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

        @endsection

        @push('scripts')
            <script type="text/javascript">
                @if (count($errors) > 0)
                $('#addbannermodal').modal('show');
                @endif
            </script>
    @endpush


