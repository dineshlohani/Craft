<?php $__env->startSection('title', 'CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>

<!-- Slider main container Start -->
<div class="home1-slider swiper-container">
    <div class="swiper-wrapper">
        <div class="home1-slide-item swiper-slide" data-swiper-autoplay="7000" data-bg-image="<?php echo e(asset('public/frontend/assets/images/slider/home1/banner1.jpg')); ?>">
            <div class="home1-slide1-content">
                <span class="bg"></span>
                <span class="slide-border"></span>
                <span class="icon"><img src="<?php echo e(asset('public/frontend/assets/images/slider/home1/slide-1-1.png')); ?>" alt="Slide Icon" style="margin-top: -40px;"></span>
                <h2 class="title">Welcome To</h2>
                <h2 class="title">Our Cosmetic</h2>
                <h5 class="sub-title">Delivering all cosmetic Products</h5>
                <div class="link"><a href="<?php echo e(url('all/products')); ?>">shop now</a></div>
            </div>
        </div>
        <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="home1-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-image="<?php echo e(asset($row->image)); ?>">
                <div class="home1-slide3-content">
                    <span class="bg" data-bg-image="<?php echo e(asset('public/frontend/assets/images/slider/home1/slide-2-1.png')); ?>"></span>
                    <span class="slide-border"></span>
                    <span class="icon">
                        <img src="<?php echo e(asset('public/frontend/assets/images/slider/home1/slide-2-2.png')); ?>" alt="Slide Icon">
                        <img src="<?php echo e(asset('public/frontend/assets/images/slider/home1/slide-2-3.png')); ?>" alt="Slide Icon">
                    </span>
                    <h2 class="title" style="color: white;"><?php echo e($row->title); ?></h2>
                    <h3 class="sub-title" style="color: white;"><?php echo e($row->sub_title); ?></h3>
                    <div class="link"><a href="<?php echo e(url('all/products')); ?>">shop now</a></div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="home1-slider-prev swiper-button-prev"><i class="ti-angle-left"></i></div>
    <div class="home1-slider-next swiper-button-next"><i class="ti-angle-right"></i></div>
</div>
<!-- Slider Main Container End -->

<!-- Feature Section Start -->
<div class="section learts-pt-30 learts-pb-30" data-bg-color="#eee4dc">
    <div class="container">
        <div class="row learts-mb-n30">

            <div class="col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="icon-box5">
                    <div class="icon"><i class="fas fa-truck"></i></div>
                    <div class="content">
                        <h4 class="title">Free shipping</h4>
                        <p>All orders over $100</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="icon-box5">
                    <div class="icon"><i class="fas fa-redo-alt"></i></div>
                    <div class="content">
                        <h4 class="title">Free returns</h4>
                        <p>Free 7-day returns</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="icon-box5">
                    <div class="icon"><i class="fas fa-headset"></i></div>
                    <div class="content">
                        <h4 class="title">24/7 Support</h4>
                        <p>Dedicated support</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="icon-box5">
                    <div class="icon"><i class="fas fa-gift"></i></div>
                    <div class="content">
                        <h4 class="title">Gift cards</h4>
                        <p>Code promotion</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Feature Section End -->

<!-- About us Section Start -->
<div class="section section mt-5 mb-5">
    <div class="container">
        <div class="row">

            <div class="col-xl-7 col-lg-8 col-12 mx-auto">
                <div class="about-us2">
                    <div class="inner">
                        <h2 class="title">Crafts Man Nepal</h2>
                        <h5 class="sub-title">WELCOME TO OUR STORE</h5>
                        <div class="desc">
                            <p>CraftsManNepal is an online shop of passionate craftsmen where they sell handicrafts and arts’ works all around the world. We provide high-end unique vases, jewels, singing bowls, home accessories, and many handicrafts related products.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- About us Section End -->

<!-- Category Banner Section Start -->
<div class="section section-fluid">
    <div class="container">
        <div class="category-banner1-carousel">
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="category-banner1">
                    <div class="inner">
                        <a href="<?php echo e(url('categoryproduct/'.$key->id)); ?>" class="image"><img src="<?php echo e(asset($key->category_image)); ?>" alt=""></a>
                        <div class="content">
                            <h3 class="title">
                                <a href="<?php echo e(url('categoryproduct/'.$key->id)); ?>"><?php echo e($key->category_name); ?></a>
                                <span class="number"><i class="far fa-hand-point-up"></i></span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<!-- Category Banner Section End -->

<!-- Product Sale Section Start -->
<div class="section section mt-5 mb-5">
    <div class="container">

        <div class="row learts-mb-30">
            <div class="col-md-auto col-12 learts-mb-20">
                <!-- Section Title Start -->
                <div class="section-title2 m-0">
                    <h2 class="title title-icon-right">Deal of the Week</h2>
                </div>
                <!-- Section Title End -->
            </div>
            <div class="col-md col-12 learts-mb-20 d-flex justify-content-lg-end">
                <div class="countdown2" data-countdown="2021/01/29"></div>
            </div>
        </div>

        <!-- Products Start -->
        <div class="product-carousel">
            <?php $__currentLoopData = $dealweek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                        <span class="product-badges">
                        <?php if($row->discount_price == NULL): ?>
                                <span class="onsale" style="background: rgb(82,142,85);
                                background: linear-gradient(90deg, rgba(82,142,85,1) 0%, rgba(11,225,136,1) 100%, rgba(16,219,134,1) 100%);"><i class="fas fa-star-exclamation"></i></span>
                            <?php else: ?>
                                <?php
                                    $amount = $row->selling_price - $row->discount_price;
                                    $discount = $amount/$row->selling_price*100;
                                ?>
                                <span class="hot">-<?php echo e(intval($discount)); ?>%</span>
                            <?php endif; ?>
                        </span>
                            <a href="<?php echo e(url('product/details/'.$row->id.'/'.$row->product_name)); ?>" class="image">
                                <img src="<?php echo e(URL::to('public/media/product/'.json_decode($row->filename, true)[0])); ?>" alt="Product Image" style="">
                                <img class="image-hover " src="<?php echo e(URL::to('public/media/product/'.json_decode($row->filename, true)[1])); ?>" alt="Product Image">
                            </a>
                            <?php if(auth()->guard()->guest()): ?>
                                <a href="#offcanvas-wishlist" class="add-to-wishlist hintT-left addwishlist" data-id="<?php echo e($row->id); ?>" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            <?php else: ?>
                                <a href="#offcanvas-wishlist" class="add-to-wishlist hintT-left offcanvas-toggle addwishlist" data-id="<?php echo e($row->id); ?>" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            <?php endif; ?>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="<?php echo e(url('product/details/'.$row->id.'/'.$row->product_name)); ?>"><?php echo e($row->product_name); ?></a></h6>
                            <?php if($row->discount_price == NULL): ?>
                                <span class="price">$<?php echo e($row->selling_price); ?></span>
                            <?php else: ?>
                        <span class="price">
                            <span class="old">$<?php echo e($row->selling_price); ?></span>
                            <span class="new">$<?php echo e($row->discount_price); ?></span>
                        </span>
                            <?php endif; ?>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Add To Cart" id="<?php echo e($row->id); ?>" onclick="productview(this.id)"><i class="fal fa-shopping-cart"></i></a>
                            </div>
                            <div class="product-rating">
                                <span class="rating">
                                    <span class="rating-active" style="width: 100%;">ratings</span>
                                </span>
                            </div>
                            <div class="product-stock-status">
                                <div class="bar">
                                    <div class="progress" style="width: 66.6666%;"></div>
                                </div>
                                <span class="sold">Available: <span><?php echo e($row->product_quantity); ?></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- Products End -->

    </div>
</div>
<!-- Product Sale Section End -->

<!-- New Arrival Section Start -->
<div class="section section-fluid mb-5">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h3 class="sub-title mb-4">Shop Now</h3>
            <h2 class="title title-icon-both">New Arrivals</h2>
        </div>
        <!-- Section Title End -->

        <!-- Products Start -->
        <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

            <?php $__currentLoopData = $newarrival; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                        <span class="product-badges">
                        <?php if($row->discount_price == NULL): ?>
                                <span class="onsale" style="background: rgb(82,142,85);
                                background: linear-gradient(90deg, rgba(82,142,85,1) 0%, rgba(11,225,136,1) 100%, rgba(16,219,134,1) 100%);"><i class="fas fa-star-exclamation"></i></span>
                            <?php else: ?>
                                <?php
                                    $amount = $row->selling_price - $row->discount_price;
                                    $discount = $amount/$row->selling_price*100;
                                ?>
                                <span class="hot">-<?php echo e(intval($discount)); ?>%</span>
                            <?php endif; ?>
                        </span>
                            <a href="<?php echo e(url('product/details/'.$row->id.'/'.$row->product_name)); ?>" class="image">
                                <img src="<?php echo e(URL::to('public/media/product/'.json_decode($row->filename, true)[0])); ?>" alt="Product Image">
                                <img class="image-hover " src="<?php echo e(URL::to('public/media/product/'.json_decode($row->filename, true)[1])); ?>" alt="Product Image">
                            </a>
                            <?php if(auth()->guard()->guest()): ?>
                                <a href="#offcanvas-wishlist" class="add-to-wishlist hintT-left addwishlist" data-id="<?php echo e($row->id); ?>" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            <?php else: ?>
                                <a href="#offcanvas-wishlist" class="add-to-wishlist hintT-left offcanvas-toggle addwishlist" data-id="<?php echo e($row->id); ?>" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            <?php endif; ?>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="<?php echo e(url('product/details/'.$row->id.'/'.$row->product_name)); ?>"><?php echo e($row->product_name); ?></a></h6>
                            <?php if($row->discount_price == NULL): ?>
                                <span class="price">$<?php echo e($row->selling_price); ?></span>
                            <?php else: ?>
                                <span class="price">
                            <span class="old">$<?php echo e($row->selling_price); ?></span>
                            <span class="new">$<?php echo e($row->discount_price); ?></span>
                        </span>
                            <?php endif; ?>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Add To Cart" id="<?php echo e($row->id); ?>" onclick="productview(this.id)"><i class="fal fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <!-- Products End -->
        <div class="row learts-mt-50">
            <div class="col text-center">
                <a href="<?php echo e(url('all/products')); ?>" class="btn btn-dark btn-hover-primary">Go To Shop</a>
            </div>
        </div>

    </div>
</div>
<!-- New Arrival Section End -->

<?php $__currentLoopData = $fcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- Category_Product Section Start -->
<div class="section section-fluid mb-5">
    <div class="container">

        <div class="section-title2 text-md-left text-center row justify-content-between align-items-center">
            <div class="col-md-auto col-12">
                <!-- Section Title Start -->
                <h2 class="title title-icon-right"><?php echo e($fcat->category_name); ?></h2>
                <!-- Section Title End -->
            </div>
            <div class="col-md-auto d-none d-md-block mt-4 mt-md-0">
                <a href="<?php echo e(url('categoryproduct/'.$fcat->id)); ?>" class="btn btn-dark btn-hover-primary">View All</a>
            </div>
        </div>

        <!-- Products Start -->
        <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
            <?php
                $catprod = DB::table('products')->where('category_id',$fcat->id)->where('status',1)->orderBy('id','desc')->limit(5)->get();
            ?>
            <?php $__currentLoopData = $catprod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                        <span class="product-badges">
                        <?php if($row->discount_price == NULL): ?>
                                <span class="onsale" style="background: rgb(82,142,85);
                                background: linear-gradient(90deg, rgba(82,142,85,1) 0%, rgba(11,225,136,1) 100%, rgba(16,219,134,1) 100%);"><i class="fas fa-badge-check"></i></span>
                            <?php else: ?>
                                <?php
                                    $amount = $row->selling_price - $row->discount_price;
                                    $discount = $amount/$row->selling_price*100;
                                ?>
                                <span class="hot">-<?php echo e(intval($discount)); ?>%</span>
                            <?php endif; ?>
                        </span>
                            <a href="<?php echo e(url('product/details/'.$row->id.'/'.$row->product_name)); ?>" class="image">
                                <img src="<?php echo e(URL::to('public/media/product/'.json_decode($row->filename, true)[0])); ?>" alt="Product Image" style="">
                                <img class="image-hover " src="<?php echo e(URL::to('public/media/product/'.json_decode($row->filename, true)[1])); ?>" alt="Product Image">
                            </a>
                            <?php if(auth()->guard()->guest()): ?>
                                <a href="#offcanvas-wishlist" class="add-to-wishlist hintT-left addwishlist" data-id="<?php echo e($row->id); ?>" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            <?php else: ?>
                                <a href="#offcanvas-wishlist" class="add-to-wishlist hintT-left offcanvas-toggle addwishlist" data-id="<?php echo e($row->id); ?>" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            <?php endif; ?>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="<?php echo e(url('product/details/'.$row->id.'/'.$row->product_name)); ?>"><?php echo e($row->product_name); ?></a></h6>
                            <?php if($row->discount_price == NULL): ?>
                                <span class="price">$<?php echo e($row->selling_price); ?></span>
                            <?php else: ?>
                                <span class="price">
                            <span class="old">$<?php echo e($row->selling_price); ?></span>
                            <span class="new">$<?php echo e($row->discount_price); ?></span>
                        </span>
                            <?php endif; ?>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Add To Cart" id="<?php echo e($row->id); ?>" onclick="productview(this.id)"><i class="fal fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- Products End -->
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- Category_Product Section End -->

<!-- Best Selling Product Section Start -->
<div class="section section-fluid section-padding pt-0">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h2 class="title title-icon-both">Best Selling</h2>
        </div>
        <!-- Section Title End -->

        <!-- Products Start -->
        <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
        <?php $__currentLoopData = $bestselling; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <span class="product-badges">
                        <?php if($row->discount_price == NULL): ?>
                                <span class="hot" style="background-color: #db431d;"><i class="fab fa-hotjar"></i></span>
                        <?php else: ?>
                            <?php
                                $amount = $row->selling_price - $row->discount_price;
                                $discount = $amount/$row->selling_price*100;
                            ?>
                                <span class="hot">-<?php echo e(intval($discount)); ?>%</span>
                        <?php endif; ?>
                        </span>
                        <a href="<?php echo e(url('product/details/'.$row->id.'/'.$row->product_name)); ?>" class="image">
                            <img src="<?php echo e(URL::to('public/media/product/'.json_decode($row->filename, true)[0])); ?>" alt="Product Image" style="">
                            <img class="image-hover " src="<?php echo e(URL::to('public/media/product/'.json_decode($row->filename, true)[1])); ?>" alt="Product Image">
                        </a>
                        <?php if(auth()->guard()->guest()): ?>
                            <a href="#offcanvas-wishlist" class="add-to-wishlist hintT-left addwishlist" data-id="<?php echo e($row->id); ?>" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        <?php else: ?>
                            <a href="#offcanvas-wishlist" class="add-to-wishlist hintT-left offcanvas-toggle addwishlist" data-id="<?php echo e($row->id); ?>" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        <?php endif; ?>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="<?php echo e(url('product/details/'.$row->id.'/'.$row->product_name)); ?>"><?php echo e($row->product_name); ?></a></h6>
                        <?php if($row->discount_price == NULL): ?>
                            <span class="price">$<?php echo e($row->selling_price); ?></span>
                        <?php else: ?>
                        <span class="price">
                            <span class="old">$<?php echo e($row->selling_price); ?></span>
                            <span class="new">$<?php echo e($row->discount_price); ?></span>
                        </span>
                        <?php endif; ?>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="Add To Cart" id="<?php echo e($row->id); ?>" onclick="productview(this.id)"><i class="fal fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- Products End -->
        <div class="row learts-mt-50">
            <div class="col text-center">
                <a href="<?php echo e(url('all/products')); ?>" class="btn btn-dark btn-hover-primary">Go To Shop</a>
            </div>
        </div>

    </div>
</div>
<!-- Best Selling Product Section End -->


<!-- Modal -->
<div class="quickViewModal modal fade" id="quickViewModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="close" data-dismiss="modal">&times;</button>
            <div class="row learts-mb-n30">

                <!-- Product Images Start -->
                <div class="col-lg-6 col-12 learts-mb-30">
                    <div class="product-images">
                        <div class="product-gallery-slider-quickview">
                            <div class="product-zoom" id="pimagezoom1" data-image="">
                                <img id="pimage1" src="" alt="">
                            </div>
                            <div class="product-zoom" id="pimagezoom2" data-image="">
                                <img id="pimage2" src="" alt="">
                            </div>
                            <div class="product-zoom"  id="pimagezoom3" data-image="">
                                <img id="pimage3" src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Images End -->

                <!-- Product Summery Start -->
                <div class="col-lg-6 col-12 overflow-hidden learts-mb-30">
                    <div class="product-summery customScroll">
                        <div class="product-ratings">
                                <span class="star-rating">
                                <span class="rating-active" style="width: 100%;">ratings</span>
                                </span>
                        </div>
                        <h3 id="pname"></h3>
                        <span class="pro-price">
                                <span class="new" style="font-size: 25px; font-weight: bold">Price: $<b id="pselling"></b></span>
                        </span>
                        <div class="myaccount-content dashboad mt-2">
                            <p>Please select the variations and quantity for the product and add them to cart!</p>
                        </div>
                        <form id="ajaxformcart1"><?php echo csrf_field(); ?>
                            <input type="hidden" name="product_id" id="product_id">
                            <div class="product-variations">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="label"><span>Size</span></td>
                                        <td class="value">
                                            <div class="product-sizes">
                                                <select class="dropdown-header" name="size" id="size">

                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label"><span>Color</span></td>
                                        <td class="value">
                                            <div class="product-colors">
                                                <select class="dropdown-header" name="color" id="color">

                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label"><span>Quantity</span></td>
                                        <td class="value">
                                            <div class="product-quantity">
                                                <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                                <input type="number" class="input-qty" value="1" name="qty">
                                                <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="product-buttons">

                                <button href="#offcanvas-cart" class="btn btn-dark btn-outline-hover-dark offcanvas-toggle addtocart" data-id="" id="btnid"><i class="fal fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                        </form>
                        <div class="product-meta mb-0">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="label"><span>Product Code</span></td>
                                    <td class="value" id="pcode"></td>
                                </tr>
                                <tr>
                                    <td class="label"><span>Category</span></td>
                                    <td class="value">
                                        <ul class="product-category">
                                            <li><a href="#" id="pcategory"></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label"><span>Share on</span></td>
                                    <td class="va">
                                        <div class="product-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="fal fa-envelope"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Product Summery End -->

            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script type="text/javascript">
    function productview(id){
        $.ajax({
            url:"<?php echo e(url('cart/product/view/')); ?>/"+id,
            type: "GET",
            dataType:"json",
            success:function (data){
                $('#pname').text(data.product.product_name);
                var $check = $.parseJSON('[' + data.product.filename.replace(/\"}/g, '"},').replace(/,$/, "") + ']');

                $('#pimage1').attr('src', 'public/media/product/'+$check[0][0]);

                $('#pimage2').attr('src','public/media/product/'+ $check[0][1]);
                $('#pimage3').attr('src', 'public/media/product/'+ $check[0][2]);
                $('#pcode').text(data.product.product_code);
                $('#pselling').text(data.product.selling_price);
                $('#pcategory').text(data.product.category_name);
                $('#btnid').attr('data-id', data.product.id);

                var d = $('select[name="color"]').empty();
                $.each(data.color,function(key,value){
                    $('select[name="color"]').append('<option value="'+value+'">'+value+'</option>');
                });

                var d = $('select[name="size"]').empty();
                $.each(data.size,function (key,value){
                    $('select[name="size"]').append('<option value="'+value+'">'+value+'</option>');
                });
            }
        })

    }

</script>

<script type="text/javascript">
    $(".addtocart").click(function(event){
        event.preventDefault();
        var id = $(this).data('id');
        let size = $("select[name=size]").val();
        let color = $("select[name=color]").val();
        let qty = $("input[name=qty]").val();
        let _token   = $('meta[name="csrf-token"]').attr('content');
        if (id) {
            $.ajax({
                url: " <?php echo e(url('/cart/product/add')); ?>/"+id,
                type:"POST",
                datType:"json",
                data:{
                    size:size,
                    color:color,
                    qty:qty,
                    _token: _token
                },
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
                            title: data.success
                        })
                        $("#offcanvas-cart").load(location.href+" #offcanvas-cart>*","");
                        $("#count_cart").load(location.href+" #count_cart>*","");
                        $("#count_cart1").load(location.href+" #count_cart1>*","");
                        $("#count_cart2").load(location.href+" #count_cart2>*","");
                        $("#count_cart3").load(location.href+" #count_cart3>*","");
                        $("#count_cart4").load(location.href+" #count_cart4>*","");
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pages/index.blade.php ENDPATH**/ ?>