@extends('admin.admin_layouts')

@section('admin_content')


    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Products</a>
            <span class="breadcrumb-item active">Product List</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Product List
                    <a href="{{ route('add.product') }}" class="btn btn-sm btn-success" style="float: right;"><i class="fa fa-plus mg-r-10"></i>Add New</a>
                </h6>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap" style="width: 100%!important; border-collapse: collapse!important;">
                        <thead>
                        <tr>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Sub-Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $row)
                            <tr>
                                <td>{{ $row->product_code }}</td>
                                <td class="">{{ $row->product_name }}</td>
                                <td style=""> <img src="{{ URL::to('public/media/product/'.json_decode($row->filename, true)[0]) }}" height="80px;" width="80px;"> </td>
                                <td style="">{{ $row->category_name }}</td>
                                @if($row->subcategory_name == NULL)
                                    <td style="">N/A</td>
                                @else
                                    <td style="">{{ $row->subcategory_name }}</td>
                                @endif
                                <td style="">
                                    @if($row->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif

                                </td>
                                <td>
                                    <a href="{{ URL::to('view/product/'.$row->id) }}" class="btn btn-sm btn-warning" title="View Full-Details"><i class="fa fa-eye"></i></a>
                                    <a href="{{ URL::to('edit/product/'.$row->id) }} " class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="{{ URL::to('delete/product/'.$row->id) }}" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                                    @if($row->status == 1)
                                        <a href="{{ URL::to('inactive/product/'.$row->id) }}" class="btn btn-sm btn-danger" title="Make Inactive"><i class="fa fa-thumbs-down"></i></a>
                                    @else
                                        <a href="{{ URL::to('active/product/'.$row->id) }}" class="btn btn-sm btn-info" title="Make Active"><i class="fa fa-thumbs-up"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->
    </div>

@endsection

