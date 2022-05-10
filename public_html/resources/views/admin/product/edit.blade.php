@extends('admin.admin_layouts')

@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Products</a>
            <span class="breadcrumb-item active">Edit Product</span>
        </nav>

        <div class="sl-pagebody">

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Update Product
                    <a href="{{ route('all.product') }}" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-eye mg-r-10"></i>View All Products</a>
                </h6>
                <br>
                <div class="alert alert-warning" role="alert">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-alert-circled alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
                        <span><strong>Warning!</strong> Fields marked with <span class="tx-danger" style="font-size: 20px;">*</span> are compulsory to fill.</span>
                    </div><!-- d-flex -->
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{url('update/product/withoutphoto/'.$product->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_name" value="{{ $product->product_name }}" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_code" disabled value="{{ $product->product_code }}" required style="cursor: not-allowed;">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_quantity" value="{{ $product->product_quantity }}" required >
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" name="category_id" required>
                                        <option label="Choose Category"></option>
                                        @foreach($category as $row)
                                            <option value="{{ $row->id }}"
                                            <?php
                                                if ($row->id == $product->category_id){
                                                    echo "selected";
                                                }
                                                ?>
                                            >{{ $row->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Sub-Category: </label>
                                    <select class="form-control select2" name="subcategory_id">
                                        <option label="Choose Category"></option>
                                        @foreach($subcategory as $row)
                                            <option value="{{ $row->id }}"
                                            <?php
                                                if ($row->id == $product->subcategory_id){
                                                    echo "selected";
                                                }
                                                ?>
                                            >{{ $row->subcategory_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="selling_price" value="{{ $product->selling_price }}" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label">Discount Price: </label>
                                    <input class="form-control" type="text" name="discount_price" value="{{ $product->discount_price }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Product Color: </label>
                                    <input class="form-control" type="text" name="product_color" id="color" data-role="tagsinput" value="{{ $product->product_color }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Product Size: </label>
                                    <input class="form-control" type="text" name="product_size" id="size" data-role="tagsinput" value="{{ $product->product_size }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Product Material: </label>
                                    <input class="form-control" type="text" name="product_material" id="material" data-role="tagsinput" value="{{ $product->product_material }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Product Weight: </label>
                                    <input class="form-control" type="text" name="product_weight"  value="{{ $product->product_weight }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Product Dimension: </label>
                                    <input class="form-control" type="text" name="product_dimension" value="{{ $product->product_dimension }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Product Diameter: </label>
                                    <input class="form-control" type="text" name="product_diameter" value="{{ $product->product_diameter }}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Product Description: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" id="summernote" name="product_desc" required>{{ $product->product_desc }}</textarea>
                                </div>
                            </div><!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Video Link: </label>
                                    <input class="form-control" name="video_link" value="{{ $product->video_link }}">
                                </div>
                            </div><!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Audio Link: </label>
                                    <input class="form-control" name="audio_link" value="{{ $product->audio_link }}">
                                </div>
                            </div><!-- col-12 -->
                        </div><!-- row -->
                        <br><hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="best_selling" value="1" <?php
                                        if ($product->best_selling == 1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Best Selling</span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="new_arrival" value="1" <?php
                                        if ($product->new_arrival == 1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>New Arrivals</span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="deal_week" value="1" <?php
                                        if ($product->deal_week == 1){
                                            echo "checked";
                                        }
                                        ?>>
                                    <span>Deal of The Week</span>
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Update Product</button>
                            <a href="{{route('all.product')}}" class="btn btn-danger mg-r-5">Cancel</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->
        </div>
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Update Images</h6>
                <br>
                <form method="POST" action="{{ url('update/product/photo/'.$product->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label class="form-control-label">Image Upload: </label>
                            <div class="input-group control-group increment" >
                                <input type="file" name="filename" value="{{$product->filename}}" class="form-control"required>
                            </div>
                        </div>
                    </div><!-- row -->
                    <br>
                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Add Photo</button>
                        <a href="{{route('all.product')}}" class="btn btn-danger mg-r-5">Cancel</a>
                    </div><!-- form-layout-footer -->
                </form>
                <div class="col-md-12 col-sm-12">
                    <br>
                    @foreach(json_decode($product->filename, true) as $images)
                        <img src="{{ URL::to('public/media/product/'.$images)}}" class="" style="width: 150px; height: 100px; margin:10px;">
                        @if($loop->count > 2)
                        <a href="{{ URL::to('delete/product/image/'.$product->id.'/'.$images) }}" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    {{--    script for showing sub-category according to category--}}
    <script type="text/javascript">
        $(document).ready(function(){
            $('select[name="category_id"]').on('change',function(){
                var category_id = $(this).val();
                if (category_id) {

                    $.ajax({
                        url: "{{ url('/get/subcategory/') }}/"+category_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            var d =$('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value){

                                $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

                            });
                        },
                    });

                }else{
                    alert('danger');
                }

            });
        });

    </script>


@endsection



