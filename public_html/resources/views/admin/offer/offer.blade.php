@extends('admin.admin_layouts')

@section('admin_content')


    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Offers</a>
            <span class="breadcrumb-item active">Offers List</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Offers List
                </h6>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Deal of The Week
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddealoftheweek" style="float: right;">
                                    <i class="fa fa-plus mg-r-10"></i>
                                </button>


                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">

                                    <table class="table display responsive nowrap" style="width: 100%!important; border-collapse: collapse!important;">
                                        <thead>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Product Name</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                    <tbody>
                                    @if(count($deal_of_the_week)>0)
                                    @foreach($deal_of_the_week as $dofd)
                                        <tr>
                                            <td>{{$dofd->product_code}}</td>
                                            <td class="">{{ $dofd->product_name }}</td>
                                            <td style=""> <img src="{{ URL::to('public/media/product/'.json_decode($dofd->filename, true)[0]) }}" height="80px;" width="80px;"> </td>
                                            <td><a href="{{ URL::to('remove/deal_of_week/'.$dofd->id) }}" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" style="text-align: center;">No Deal of the week Item Added.</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                    </table>



                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                   Best Seller
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addbestselling" style="float: right;">
                                    <i class="fa fa-plus mg-r-10"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">

                                <table class="table display responsive nowrap" style="width: 100%!important; border-collapse: collapse!important;">
                                    <thead>
                                    <tr>
                                        <th>Product Code</th>
                                        <th>Product Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($best_selling)>0)
                                    @foreach($best_selling as $bs)
                                        <tr>
                                            <td>{{$bs->product_code}}</td>
                                            <td class="">{{ $bs->product_name }}</td>
                                            <td style=""> <img src="{{ URL::to('public/media/product/'.json_decode($bs->filename, true)[0]) }}" height="80px;" width="80px;"> </td>
                                            <td><a href="{{ URL::to('remove/best_seller/'.$bs->id) }}" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a></td>

                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" style="text-align: center;">No Best Seeling Item Added.</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                   New Arrivals
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addnewarrivals" style="float: right;">
                                    <i class="fa fa-plus mg-r-10"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <table  class="table display responsive nowrap" style="width: 100%!important; border-collapse: collapse!important;">
                                    <thead>
                                    <tr>
                                        <th>Product Code</th>
                                        <th>Product Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($new_arrivals)>0)
                                    @foreach($new_arrivals as $na)
                                        <tr>
                                            <td>{{$na->product_code}}</td>
                                            <td class="">{{ $na->product_name }}</td>
                                            <td style=""> <img src="{{ URL::to('public/media/product/'.json_decode($na->filename, true)[0]) }}" height="80px;" width="80px;"> </td>
                                            <td><a href="{{ URL::to('remove/new_arrival/'.$na->id) }}" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a></td>

                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" style="text-align: center;">No New Arrivals Item Added.</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- card -->
        </div><!-- sl-mainpanel -->
    </div>

    <!-- Modal Deal of the week -->
    <div class="modal fade" id="adddealoftheweek" tabindex="-1" role="dialog" aria-labelledby="adddealoftheweek" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Deal of The Week</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{route('add.dealoftheweek')}}">@csrf

                <div class="modal-body">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Products</label>
                    <select class="custom-select my-1 mr-sm-2" name="product_id" id="inlineFormCustomSelectPref">

                        <option selected>Choose...</option>
                        @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->product_name}}</option>
                        @endforeach

                    </select>




                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Best Selling -->
    <div class="modal fade" id="addbestselling" tabindex="-1" role="dialog" aria-labelledby="addbestselling" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Best Selling</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{route('add.bestselling')}}">@csrf

                    <div class="modal-body">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Products</label>
                        <select class="custom-select my-1 mr-sm-2" name="product_id" id="inlineFormCustomSelectPref">

                            <option selected>Choose...</option>
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->product_name}}
                                    <img src="{{ URL::to('public/media/product/'.json_decode($product->filename, true)[0]) }}" height="80px;" width="80px;">
                                </option>
                            @endforeach

                        </select>




                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal New Arrivals -->
    <div class="modal fade" id="addnewarrivals" tabindex="-1" role="dialog" aria-labelledby="addnewarrivals" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Best Selling</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{route('add.newarrivals')}}">@csrf

                    <div class="modal-body">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Products</label>
                        <select title="Select your surfboard" class="selectpicker">
                            <option>Select...</option>
                            @foreach($products as $product)
                            <option data-content="<img src='{{ URL::to('public/media/product/'.json_decode($product->filename, true)[0]) }}'>">{{$product->id}}</option>
                            @endforeach
                        </select>

                        <select class="custom-select my-1 mr-sm-2" name="product_id" id="inlineFormCustomSelectPref">

                            <option selected>Choose...</option>
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->product_name}}</option>
                            @endforeach

                        </select>




                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

