<?php $__env->startSection('title',  $name->category_name . '-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Shop Products Section Start -->
    <div class="section section-padding pt-0">

        <!-- Shop Toolbar Start -->
        <div class="shop-toolbar border-bottom">
            <div class="container">
                <h2><?php echo e($name->category_name); ?></h2>
                <hr>
                <div class="row learts-mb-n20">

                    <!-- Isotop Filter Start -->
                    <div class="col-md col-12 align-self-center learts-mb-20">
                        <div class="isotope-filter shop-product-filter" data-target="#shop-products">
                            <button class="active" data-filter="*">all</button>
                            <button data-filter=".featured">Best Seller</button>
                            <button data-filter=".new">New Arrival</button>
                        </div>
                    </div>
                    <!-- Isotop Filter End -->

                    <div class="col-md-auto col-12 learts-mb-20">
                        <ul class="shop-toolbar-controls">
                            <li>
                                <div class="product-column-toggle d-none d-xl-flex">
                                    <button class="toggle hintT-top" data-hint="5 Column" data-column="5"><i class="ti-layout-grid4-alt"></i></button>
                                    <button class="toggle active hintT-top" data-hint="4 Column" data-column="4"><i class="ti-layout-grid3-alt"></i></button>
                                    <button class="toggle hintT-top" data-hint="3 Column" data-column="3"><i class="ti-layout-grid2-alt"></i></button>
                                </div>
                            </li>
                            <li>
                                <a class="product-filter-toggle" href="#product-filter">Filters</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- Shop Toolbar End -->

        <!-- Product Filter Start -->
        <div id="product-filter" class="product-filter bg-light">
            <div class="container">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1 learts-mb-n30">


                    <!-- Price filter Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Price Filter</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li> <a href="#">All</a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">$</span>0.00</span> - <span class="amount"><span class="cur-symbol">$</span>80.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">$</span>80.00</span> - <span class="amount"><span class="cur-symbol">$</span>160.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">$</span>160.00</span> - <span class="amount"><span class="cur-symbol">$</span>240.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">$</span>240.00</span> - <span class="amount"><span class="cur-symbol">$</span>320.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">$</span>320.00</span> +</a></li>
                        </ul>
                    </div>
                    <!-- Price filter End -->

                    <!-- Categories Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Category Filter</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <?php $__currentLoopData = $category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(url('categoryproduct/'.$cat_list->id)); ?>"><?php echo e($cat_list->category_name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <!-- Categories End -->

                </div>
            </div>
        </div>
        <!-- Product Filter End -->

        <div class="section learts-mt-70">
            <div class="container">
                <div class="row learts-mb-n50">
                    <div class="col-lg-9 col-12 learts-mb-50 order-lg-2">
                        <!-- Products Start -->
                        <div id="shop-products" class="products isotope-grid row row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
                            <div class="grid-sizer col-1"></div>
                            <?php if($cat_products->isEmpty()): ?>
                                <div class="grid-item col-xl-6 featured" style="text-align: center;">
                                    <p style="font-size: 25px;">Sorry! Currently there are no products for this category.</p>
                                    <a href="<?php echo e(url('all/products')); ?>" class="btn btn-sm btn-dark btn-hover-primary">Go To Shop</a>
                                </div>
                            <?php else: ?>
                                <?php $__currentLoopData = $cat_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="grid-item col featured">
                                        <div class="product">
                                            <div class="product-thumb">
                                    <span class="product-badges">
                                        <?php if($pro->discount_price == NULL): ?>
                                            <span class="onsale" style="background: rgb(82,142,85);
                background: linear-gradient(90deg, rgba(82,142,85,1) 0%, rgba(11,225,136,1) 100%, rgba(16,219,134,1) 100%);"><i class="fas fa-star-exclamation"></i></span>
                                        <?php else: ?>
                                            <?php
                                                $amount = $pro->selling_price - $pro->discount_price;
                                                $discount = $amount/$pro->selling_price*100;
                                            ?>
                                            <span class="hot">-<?php echo e(intval($discount)); ?>%</span>
                                        <?php endif; ?>
                                    </span>
                                                <a href="<?php echo e(url('product/details/'.$pro->id.'/'.$pro->product_name)); ?>" class="image">
                                                    <img src="<?php echo e(URL::to('public/media/product/'.json_decode($pro->filename, true)[0])); ?>" alt="Product Image">
                                                    <img class="image-hover " src="<?php echo e(URL::to('public/media/product/'.json_decode($pro->filename, true)[1])); ?>" alt="Product Image">
                                                </a>
                                                <?php if(auth()->guard()->guest()): ?>
                                                    <a href="#offcanvas-wishlist" class="add-to-wishlist hintT-left addwishlist" data-id="<?php echo e($pro->id); ?>" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                                <?php else: ?>
                                                    <a href="#offcanvas-wishlist" class="add-to-wishlist hintT-left offcanvas-toggle addwishlist" data-id="<?php echo e($pro->id); ?>" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="title"><a href="<?php echo e(url('product/details/'.$pro->id.'/'.$pro->product_name)); ?>"><?php echo e($pro->product_name); ?></a></h6>
                                                <?php if($pro->discount_price == NULL): ?>
                                                    <span class="price">$<?php echo e($pro->selling_price); ?></span>
                                                <?php else: ?>
                                                    <span class="price">
                                                <span class="old">$<?php echo e($pro->selling_price); ?></span>
                                                <span class="new">$<?php echo e($pro->discount_price); ?></span>
                                            </span>
                                                <?php endif; ?>
                                                <div class="product-buttons">
                                                    
                                                    <a href="<?php echo e(url('product/details/'.$pro->id.'/'.$pro->product_name)); ?>" class="btn btn-sm btn-primary"><i class="fal fa-search"></i> View Product</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                        <!-- Products End -->
                        <div class="text-center learts-mt-70">
                            <?php echo e($cat_products->links()); ?>

                        </div>
                    </div>

                    <div class="col-lg-3 col-12 learts-mb-10 order-lg-1">

                        <!-- Search Start -->
                        <div class="single-widget learts-mb-40">
                            <div class="widget-search">
                                <form action="<?php echo e(route('search.product')); ?>" method="POST"><?php echo csrf_field(); ?>
                                    <input type="text" name="search" required placeholder="Search products....">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Search End -->

                        <!-- Categories Start -->
                        <div class="single-widget learts-mb-40">
                            <h3 class="widget-title product-filter-widget-title">Product categories</h3>
                            <ul class="widget-list">
                                <?php $__currentLoopData = $category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('categoryproduct/'.$cat_list->id)); ?>"><?php echo e($cat_list->category_name); ?></a><span class="count"><a><i class="fas fa-arrow-right"></i></a></span></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <!-- Categories End -->

                        <!-- Price Range Start -->
                        <div class="single-widget learts-mb-40">
                            <h3 class="widget-title product-filter-widget-title">Filters by price</h3>
                            <div class="widget-price-range">
                                <input class="range-slider" type="text" data-min="0" data-max="350" data-from="0" data-to="350" />
                            </div>
                        </div>
                        <!-- Price Range End -->

                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Shop Products Section End -->

    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script type="text/javascript">

        $(".addwishlist").click(function(event){
            event.preventDefault();
            var id = $(this).data('id');
            if (id) {
                $.ajax({
                    url: " <?php echo e(url('add/wishlist/')); ?>/"+id,
                    type:"GET",
                    datType:"json",
                    success:function(data){
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                icon: 'success',
                                title: data.success,
                            })
                            $("#offcanvas-wishlist").load(location.href+" #offcanvas-wishlist>*","");
                            $("#count_wishlist").load(location.href+" #count_wishlist>*","");
                            $("#count_wishlist1").load(location.href+" #count_wishlist1>*","");
                            $("#count_wishlist2").load(location.href+" #count_wishlist2>*","");
                            $("#count_wishlist3").load(location.href+" #count_wishlist3>*","");
                            $("#count_wishlist4").load(location.href+" #count_wishlist4>*","");
                            $("#count_wishlist5").load(location.href+" #count_wishlist5>*","");
                        }else{
                            Toast.fire({
                                icon: 'error',
                                title: data.error
                            })
                        }


                    },
                });

            }else{
                alert('danger');
            }
        });


    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pages/cat_products.blade.php ENDPATH**/ ?>