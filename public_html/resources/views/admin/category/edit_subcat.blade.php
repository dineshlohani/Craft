@extends('admin.admin_layouts')

@section('admin_content')

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">SubCategory</a>
            <span class="breadcrumb-item active">Edit Sub-Category</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Sub-Category Update</h6>
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
                    <form method="post" action="{{ url('update/subcategory/'.$subcat->id) }}">
                        @csrf
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Category Name: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $subcat->subcategory_name }}" name="subcategory_name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Name: <span class="tx-danger">*</span></label>
                                <select class="form-control" name="category_id">
                                    @foreach($category as $row)
                                        <option value="{{ $row->id }}"
                                        <?php if ($row->id == $subcat->category_id) {
                                            echo "selected";
                                        } ?> >{{ $row->category_name }}  </option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- modal-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20" style="cursor: pointer;">Update</button>
                            <a href="{{route('categories')}}" class="btn btn-danger mg-r-5">Cancel</a>
                        </div>
                    </form>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->

@endsection
