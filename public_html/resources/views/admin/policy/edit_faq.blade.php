@extends('admin.admin_layouts')

@section('admin_content')

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">FAQs</a>
            <span class="breadcrumb-item active">Edit FAQs</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">FAQs Update</h6>
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
                    <form method="post" action="{{ url('update/faq/'.$faq->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $faq->title }}" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description: <span class="tx-danger">*</span></label>
                                <textarea class="form-control" id="summernote" name="description" required>{!! $faq->description !!}</textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info pd-x-20">Update</button>
                                <a href="{{route('admin.faqs')}}" class="btn btn-danger mg-r-5">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->

@endsection
