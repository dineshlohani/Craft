<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="title" content="Crafts Man Admin Panel">
    <!-- Meta -->
    <meta name="description" content="Manage your Site.">
    <meta name="author" content="Nerdware Innovation">

    <title>Ecommerce Admin Panel</title>

    <!-- vendor css -->
    <link href="{{asset('public/backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">

    <!-- TagsInput CSS -->
    <link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>

    <!-- Tosater css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <!-- Datatable css -->
    <link href="{{asset('public/backend/lib/highlightjs/github.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/select2/css/select2.min.css')}}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('public/backend/css/starlight.css')}}">
    <link href="{{ asset('public/backend/lib/summernote/summernote-bs4.css')}}" rel="stylesheet">

</head>

<body>

@if(Auth::guard('admin')->check())
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="">CraftsMan Nepal</a></div>
    <div class="sl-sideleft">
        <label class="sidebar-label">Navigation</label>
        <div class="sl-sideleft-menu">
            <a href="{{url('admin/home')}}" class="sl-menu-link @if((Request::is('admin/home')  )) active @endif">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-home tx-18"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            @if(Auth::user()->orders == 1)
                <a href="#" class="sl-menu-link @if((Request::route()->getName() == 'new.order' or Request::route()->getName() == 'accepted.order' or Request::route()->getName() == 'delivery.order' or Request::route()->getName() == 'completed.order' or Request::route()->getName() == 'rejected.order' or Request::route()->getName() == 'view.order' or Request::route()->getName() == 'all.order')  ))  active show-sub @endif">
                    <div class="sl-menu-item">
                        <i class="menu-item-icon fa fa-list-ol tx-18"></i>
                        <span class="menu-item-label">Orders</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <ul class="sl-menu-sub nav flex-column">
                    <li class="nav-item"><a href="{{route('new.order')}}" class="nav-link @if((Request::is('admin/order/new')  )) active @endif"><i class="menu-item-icon fa fa-clipboard"></i>New Orders</a></li>
                    <li class="nav-item"><a href="{{route('accepted.order')}}" class="nav-link @if((Request::is('admin/order/accepted')  )) active @endif"><i class="menu-item-icon fa fa-clipboard"></i>Accepted Orders</a></li>
                    <li class="nav-item"><a href="{{route('delivery.order')}}" class="nav-link @if((Request::is('admin/order/delivery')  )) active @endif"><i class="menu-item-icon fa fa-clipboard"></i>Order In-Delivery</a></li>
                    <li class="nav-item"><a href="{{route('completed.order')}}" class="nav-link @if((Request::is('admin/order/completed')  )) active @endif"><i class="menu-item-icon fa fa-clipboard"></i>Completed Orders</a></li>
                    <li class="nav-item"><a href="{{route('rejected.order')}}" class="nav-link @if((Request::is('admin/order/rejected')  )) active @endif"><i class="menu-item-icon fa fa-clipboard"></i>Rejected Orders</a></li>
                    <li class="nav-item"><a href="{{route('all.order')}}" class="nav-link @if((Request::is('admin/order/all')  )) active @endif"><i class="menu-item-icon fa fa-clipboard"></i>All Orders</a></li>
                </ul>
            @endif
            @if(Auth::user()->category == 1)

            <a href="#" class="sl-menu-link @if((Request::route()->getName() == 'categories' or Request::route()->getName() =='sub.categories' or Request::route()->getName() =='edit.category' or Request::route()->getName() =='edit.subcategory')  )) active show-sub @endif">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-anchor tx-18"></i>
                    <span class="menu-item-label">Category</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('categories') }}" class="nav-link @if((Request::route()->getName() == ('categories')  )) active @endif"><i class="menu-item-icon fa fa-database"></i>Manage Category</a></li>
                <li class="nav-item"><a href="{{ route('sub.categories') }}" class="nav-link @if((Request::route()->getName() == ('sub.categories')  )) active @endif"><i class="menu-item-icon fa fa-bars"></i>Manage Sub Category</a></li>
            </ul>
            @endif
            @if(Auth::user()->product == 1)
            <a href="#" class="sl-menu-link @if((Request::route()->getName() == 'all.product' or Request::route()->getName() == 'add.product' or Request::route()->getName() == 'admin.offer' or Request::route()->getName() == 'view.product' or Request::route()->getName() == 'edit.product')  ))  active show-sub @endif">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-cubes tx-18"></i>
                    <span class="menu-item-label">Products</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route('all.product')}}" class="nav-link @if((Request::is('admin/product/all')  )) active @endif"><i class="menu-item-icon fa fa-eye"></i>All Products</a></li>
                <li class="nav-item"><a href="{{route('add.product')}}" class="nav-link @if((Request::is('admin/product/add')  )) active @endif" ><i class="menu-item-icon fa fa-plus"></i>Add Products</a></li>
                <li class="nav-item"><a href="{{route('admin.offer')}}" class="nav-link @if((Request::is('admin/offer')  )) active @endif"><i class="menu-item-icon fa fa-plus"></i>Offers</a></li>
            </ul>
            @endif
            @if(Auth::user()->report == 1)
            <a href="#" class="sl-menu-link @if((Request::route()->getName() == 'today.order' or Request::route()->getName() == 'today.acceptOrder' or Request::route()->getName() == 'today.onDelivery' or Request::route()->getName() == 'today.delivered' or Request::route()->getName() == 'today.reject' or Request::route()->getName() == 'search.report' or Request::route()->getName() == 'search.byDate' or Request::route()->getName() == 'search.byMonth' or Request::route()->getName() == 'search.byYear')  ))  active show-sub @endif">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-area-chart tx-18"></i>
                    <span class="menu-item-label">Reports</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                {{--                <li class="nav-item"><a href="" class="nav-link"><i class="menu-item-icon fa fa-check-square"></i>All Orders</a></li>--}}
                <li class="nav-item"><a href="{{ route('today.order') }}" class="nav-link @if((Request::is('admin/report/today/order/new')  )) active @endif"><i class="menu-item-icon fa fa-clipboard"></i>Today New Orders</a></li>
                <li class="nav-item"><a href="{{ route('today.acceptOrder') }}" class="nav-link @if((Request::is('admin/report/today/order/accepted')  )) active @endif"><i class="menu-item-icon fa fa-clipboard"></i>Today Accepted Orders</a></li>
                <li class="nav-item"><a href="{{ route('today.onDelivery') }}" class="nav-link @if((Request::is('admin/report/today/order/on-delivery')  )) active @endif"><i class="menu-item-icon fa fa-clipboard"></i>Today Ongoing Delivery</a></li>
                <li class="nav-item"><a href="{{ route('today.delivered') }}" class="nav-link @if((Request::is('admin/report/today/order/delivered')  )) active @endif"><i class="menu-item-icon fa fa-clipboard"></i>Today Order Delivered</a></li>
                <li class="nav-item"><a href="{{ route('today.reject') }}" class="nav-link @if((Request::is('admin/report/today/order/rejected')  )) active @endif"><i class="menu-item-icon fa fa-clipboard"></i>Today Order Rejected</a></li>
                <li class="nav-item"><a href="{{ route('search.report') }}" class="nav-link @if((Request::is('admin/report/order/search')  )) active @endif"><i class="menu-item-icon fa fa-clipboard"></i>Search Order Reports</a></li>
            </ul>
            @endif
            @if(Auth::user()->users == 1)
            <a href="#" class="sl-menu-link @if((Request::route()->getName() == 'admin.all.user' or Request::route()->getName() =='admin.create.user' or Request::route()->getName() =='admin.edit.user')  )) active show-sub @endif">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-users tx-18"></i>
                    <span class="menu-item-label">Users</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('admin.all.user') }}" class="nav-link @if((Request::is('admin/user/all')  )) active @endif"><i class="menu-item-icon fa fa-users"></i>View All Users</a></li>
                <li class="nav-item"><a href="{{ route('admin.create.user') }}" class="nav-link @if((Request::is('admin/user/create')  )) active @endif"><i class="menu-item-icon fa fa-user-plus"></i>Create New User</a></li>
            </ul>
            @endif
            @if(Auth::user()->return_order == 1)
            <a href="#" class="sl-menu-link @if((Request::route()->getName() == 'admin.return.request' or Request::route()->getName() =='admin.return.complete')  )) active show-sub @endif">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-undo tx-18"></i>
                    <span class="menu-item-label">Return Orders</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('admin.return.request') }}" class="nav-link @if((Request::is('admin/return/request')  )) active @endif"><i class="menu-item-icon fa fa-users"></i>Pending Return Request</a></li>
                <li class="nav-item"><a href="{{ route('admin.return.complete') }}" class="nav-link @if((Request::is('admin/return/complete')  )) active @endif"><i class="menu-item-icon fa fa-user-plus"></i>Completed Order Return</a></li>
            </ul>
            @endif
            @if(Auth::user()->stock == 1)
                <a href="{{ route('admin.stock') }}" class="sl-menu-link @if((Request::is('admin/stock')  )) active @endif">
                    <div class="sl-menu-item">
                        <i class="menu-item-icon fa fa-database tx-18"></i>
                        <span class="menu-item-label">Product Stock</span>
                    </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
            @endif
            @if(Auth::user()->coupon == 1)
            <a href="{{ route('admin.coupon') }}" class="sl-menu-link @if((Request::is('admin/coupon')  )) active @endif">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-ticket tx-18"></i>
                    <span class="menu-item-label">Coupons</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            @endif
            @if(Auth::user()->newsletter == 1)
            <a href="{{ route('admin.newsletter') }}" class="sl-menu-link @if((Request::is('admin/newsletter')  )) active @endif">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-envelope-open tx-18"></i>
                    <span class="menu-item-label">Newsletter</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            @endif
            {{--            @if(Auth::user()->seo_setting == 1)--}}
            <a href="{{ route('admin.contact') }}" class="sl-menu-link @if((Request::is('admin/contact')  )) active @endif">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-send tx-18"></i>
                    <span class="menu-item-label">Contact Messages</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            {{--            @endif--}}
            {{--            @if(Auth::user()->seo_setting == 1)--}}
{{--            <a href="{{ route('admin.wholesale') }}" class="sl-menu-link @if((Request::is('admin/wholesale')  )) active @endif">--}}
{{--                <div class="sl-menu-item">--}}
{{--                    <i class="menu-item-icon fa fa-send tx-18"></i>--}}
{{--                    <span class="menu-item-label">Wholesale Orders</span>--}}
{{--                </div><!-- menu-item -->--}}
{{--            </a><!-- sl-menu-link -->--}}
            {{--            @endif--}}
            @if(Auth::user()->seo_setting == 1)
            <a href="{{ route('admin.seo') }}" class="sl-menu-link @if((Request::is('admin/seo')  )) active @endif">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-search-plus tx-18"></i>
                    <span class="menu-item-label">SEO Settings</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            @endif
            @if(Auth::user()->site_setting == 1)
                <a href="#" class="sl-menu-link @if((Request::route()->getName() == 'admin.site-setting' or Request::route()->getName() =='admin.about' or Request::route()->getName() =='admin.banner' or Request::route()->getName() =='edit.banner' or Request::route()->getName() =='admin.wholesale')  )) active show-sub @endif">
                    <div class="sl-menu-item">
                        <i class="menu-item-icon fa fa-desktop tx-18"></i>
                        <span class="menu-item-label">Site Settings</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <ul class="sl-menu-sub nav flex-column">
                    <li class="nav-item"><a href="{{ route('admin.site-setting') }}" class="nav-link @if((Request::is('admin/site-setting')  )) active @endif"><i class="menu-item-icon fa fa-eye"></i>Site Information</a></li>
                    <li class="nav-item"><a href="{{route('admin.about')}}" class="nav-link @if((Request::is('admin/about')  )) active @endif"><i class="menu-item-icon fa fa-plus"></i>About Us Management</a></li>
                    <li class="nav-item"><a href="{{route('admin.wholesale')}}" class="nav-link @if((Request::is('admin/wholesale')  )) active @endif"><i class="menu-item-icon fa fa-plus"></i>Wholesale Information</a></li>
                    <li class="nav-item"><a href="{{route('admin.banner')}}" class="nav-link @if((Request::is('admin/banner')  )) active @endif"><i class="menu-item-icon fa fa-plus"></i>Banner Management</a></li>
                </ul>
            @endif
            <a href="#" class="sl-menu-link @if((Request::route()->getName() == 'admin.policies' or Request::route()->getName() =='admin.faqs' or Request::route()->getName() =='edit.faq' or Request::route()->getName() =='edit.policy')  )) active show-sub @endif">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-print tx-18"></i>
                    <span class="menu-item-label">Company Information</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('admin.policies') }}" class="nav-link @if((Request::is('admin/policy')  )) active @endif"><i class="menu-item-icon fa fa-eye"></i>Privacy Policies</a></li>
                <li class="nav-item"><a href="{{ route('admin.faqs') }}" class="nav-link @if((Request::is('admin/faq')  )) active @endif"><i class="menu-item-icon fa fa-eye"></i>FAQ</a></li>
            </ul>
        </div><!-- sl-sideleft-menu -->

        <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name">{{ Auth::user()->name }}</span>
                        <img src="{{asset('public/backend/img/avatar.png')}}" class="wd-32 rounded-circle" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="{{ route('admin.password.change') }}"><i class="icon ion-ios-gear-outline"></i> Change Password</a></li>
                            <li><a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Sign Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
        </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

@endif

@yield('admin_content')

<script src="{{asset('public/backend/lib/jquery/jquery.js')}}"></script>
<script src="{{asset('public/backend/lib/popper.js/popper.js')}}"></script>
<script src="{{asset('public/backend/lib/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/lib/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('public/backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>

<script src="{{asset('public/backend/lib/highlightjs/highlight.pack.js')}}"></script>
<script src="{{asset('public/backend/lib/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('public/backend/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
<script src="{{asset('public/backend/lib/select2/js/select2.min.js')}}"></script>

<script>
    $(function(){
        'use strict';

        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
</script>


@stack('scripts')

<script src="{{asset('public/backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('public/backend/lib/d3/d3.js')}}"></script>
<script src="{{asset('public/backend/lib/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{asset('public/backend/lib/chart.js/Chart.js')}}"></script>
<script src="{{asset('public/backend/lib/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('public/backend/lib/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('public/backend/lib/Flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('public/backend/lib/flot-spline/jquery.flot.spline.js')}}"></script>


<script src="{{asset('public/backend//lib/medium-editor/medium-editor.js')}}"></script>
<script src="{{asset('public/backend/lib/summernote/summernote-bs4.min.js')}}"></script>


<script>
    $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
            height: 150,
            tooltip: false
        })
    });
</script>

<script src="{{asset('public/backend/js/starlight.js')}}"></script>
<script src="{{asset('public/backend//js/ResizeSensor.js')}}"></script>
<script src="{{asset('public/backend//js/dashboard.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script>
    @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>

<script>
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
            }
        });
    });
</script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

</body>
</html>
