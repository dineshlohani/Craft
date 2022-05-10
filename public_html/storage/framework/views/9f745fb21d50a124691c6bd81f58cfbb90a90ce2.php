
<!-- Header Section Start -->
<div class="header-section section bg-white d-none d-xl-block">
    <div class="container">
        <div class="row row-cols-lg-3 align-items-center">

            <!-- Header Language & Currency Start -->
            <div class="col">
                <ul class="header-lan-curr">
                    <li><a>English</a></li>
                    <li><a>USD</a></li>
                </ul>
            </div>
            <!-- Header Language & Currency End -->

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo justify-content-center">
                    <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('public/frontend/assets/images/logo/logos.png')); ?>" alt="CraftsManNepal Logo"></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col">
                <div class="header-tools justify-content-end">
                    <div class="header-search">
                        <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="#offcanvas-cart" id="count_cart" class="offcanvas-toggle"><span class="cart-count"><?php echo e(Cart::count()); ?></span><i class="fal fa-shopping-cart"></i></a>
                    </div>
                    <?php if(auth()->guard()->guest()): ?>
                        <div class="header-wishlist">
                            <a href="<?php echo e(route('login')); ?>"><span class="wishlist-count">0</span><i class="fal fa-heart"></i></a>
                        </div>
                        <div class="header-login">
                            <a href="<?php echo e(route('login')); ?>"><i class="fal fa-user"></i></a>
                        </div>
                    <?php else: ?>
                    <?php
                    $wishlist = DB::table('wishlists')
                    ->join('products','wishlists.product_id','products.id')
                    ->select('wishlists.*','products.*')
                    ->where('user_id',Auth::id())->get();
                    ?>
                    <div class="header-wishlist">
                        <a href="#offcanvas-wishlist" id="count_wishlist" class="offcanvas-toggle"><span class="wishlist-count"><?php echo e(count($wishlist)); ?></span><i class="fal fa-heart"></i></a>
                    </div>
                    <div class="header-login">
                        <a href="<?php echo e(route('home')); ?>"><i class="fal fa-user"></i></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>

    <?php
        $selcategory = DB::table('subcategories')
            ->join('categories','subcategories.category_id','categories.id')
            ->select('subcategories.*','categories.*')
            ->get();
    ?>

    <!-- Site Menu Section Start -->
    <div class="site-menu-section section">
        <div class="container">
            <nav class="site-main-menu justify-content-center">
                <ul>
                    <li><a href="<?php echo e(url('/')); ?>"><span class="menu-text">Home</span></a></li>
                    <li><a href="<?php echo e(url('about')); ?>"><span class="menu-text">About Us</span></a></li>
                    <li class="has-children"><a href="<?php echo e(url('all/products')); ?>"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <?php $__currentLoopData = $selcategory->unique('category_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="has-children"><a href="<?php echo e(url('categoryproduct/'.$sel->id)); ?>"><span class="menu-text"><?php echo e($sel->category_name); ?></span></a>
                                    <ul class="sub-menu">
                                        <?php
                                            $subcat = DB::table('subcategories')->where('category_id',$sel->id)->get();
                                        ?>
                                        <?php $__currentLoopData = $subcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(url('subproducts/'.$scat->id)); ?>"><span class="menu-text"><?php echo e($scat->subcategory_name); ?></span></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $test = DB::table('categories AS c1')
                                    ->leftJoin('subcategories AS c2','c2.category_id','=','c1.id')
                                    ->whereNull('c2.category_id')->select('c1.*')->get();
                            ?>
                            <?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(url('categoryproduct/'.$tes->id)); ?>"><span class="menu-text"><?php echo e($tes->category_name); ?></span></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li><a href="<?php echo e(url('wholeseller')); ?>"><span class="menu-text">WholeSeller</span></a></li>
                    <li><a href="<?php echo e(url('contact')); ?>"><span class="menu-text">Contact Us</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Site Menu Section End -->

</div>
<!-- Header Section End -->

<!-- Header Sticky Section Start -->
<div class="sticky-header header-menu-center section bg-white d-none d-xl-block">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo">
                    <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('public/frontend/assets/images/logo/logoh.png')); ?>" alt="Learts Logo"></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Search Start -->
            <div class="col d-none d-xl-block">
                <nav class="site-main-menu justify-content-center">
                    <ul>
                        <li class=""><a href="<?php echo e(url('/')); ?>"><span class="menu-text">Home</span></a></li>
                        <li class=""><a href="<?php echo e(url('about')); ?>"><span class="menu-text">About Us</span></a></li>
                        <li class="has-children"><a href="<?php echo e(url('all/products')); ?>"><span class="menu-text">Shop</span></a>
                            <ul class="sub-menu">
                                <?php $__currentLoopData = $selcategory->unique('category_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="has-children"><a href="<?php echo e(url('categoryproduct/'.$sel->id)); ?>"><span class="menu-text"><?php echo e($sel->category_name); ?></span></a>
                                        <ul class="sub-menu">
                                            <?php
                                                $subcat = DB::table('subcategories')->where('category_id',$sel->id)->get();
                                            ?>
                                            <?php $__currentLoopData = $subcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="<?php echo e(url('subproducts/'.$scat->id)); ?>"><span class="menu-text"><?php echo e($scat->subcategory_name); ?></span></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $test = DB::table('categories AS c1')
                                            ->leftJoin('subcategories AS c2','c2.category_id','=','c1.id')
                                            ->whereNull('c2.category_id')->select('c1.*')->get();
                                ?>
                                <?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('categoryproduct/'.$tes->id)); ?>"><span class="menu-text"><?php echo e($tes->category_name); ?></span></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <li class=""><a href="<?php echo e(url('wholeseller')); ?>"><span class="menu-text">WholeSeller</span></a></li>
                        <li class=""><a href="<?php echo e(url('contact')); ?>"><span class="menu-text">Contact Us</span></a></li>
                    </ul>
                </nav>
            </div>
            <!-- Search End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <div class="header-search d-none d-sm-block">
                        <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="#offcanvas-cart" id="count_cart1" class="offcanvas-toggle"><span class="cart-count"><?php echo e(Cart::count()); ?></span><i class="fal fa-shopping-cart"></i></a>
                    </div>
                    <?php if(auth()->guard()->guest()): ?>
                        <div class="header-wishlist">
                            <a href="<?php echo e(route('login')); ?>"><span class="wishlist-count">0</span><i class="fal fa-heart"></i></a>
                        </div>
                        <div class="header-login">
                            <a href="<?php echo e(route('login')); ?>"><i class="fal fa-user"></i></a>
                        </div>
                    <?php else: ?>
                        <div class="header-wishlist">
                            <a href="#offcanvas-wishlist" id="count_wishlist1" class="offcanvas-toggle"><span class="wishlist-count"><?php echo e(count($wishlist)); ?></span><i class="fal fa-heart"></i></a>
                        </div>
                        <div class="header-login">
                            <a href="<?php echo e(route('home')); ?>"><i class="fal fa-user"></i></a>
                        </div>
                    <?php endif; ?>
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>

</div>
<!-- Header Sticky Section End -->
<!-- Mobile Header Section Start -->
<div class="mobile-header bg-white section d-xl-none">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo">
                    <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('public/frontend/assets/images/logo/logoh.png')); ?>" alt="Learts Logo"></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <div class="header-search d-none d-sm-block">
                        <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="#offcanvas-cart" id="count_cart2" class="offcanvas-toggle"><span class="cart-count"><?php echo e(Cart::count()); ?></span><i class="fal fa-shopping-cart"></i></a>
                    </div>
                    <?php if(auth()->guard()->guest()): ?>
                        <div class="header-wishlist">
                            <a href="<?php echo e(route('login')); ?>"><span class="wishlist-count">0</span><i class="fal fa-heart"></i></a>
                        </div>
                        <div class="header-login">
                            <a href="<?php echo e(route('login')); ?>"><i class="fal fa-user"></i></a>
                        </div>
                    <?php else: ?>
                        <div class="header-wishlist">
                            <a href="#offcanvas-wishlist" id="count_wishlist2" class="offcanvas-toggle"><span class="wishlist-count"><?php echo e(count($wishlist)); ?></span><i class="fal fa-heart"></i></a>
                        </div>
                        <div class="header-login">
                            <a href="<?php echo e(route('home')); ?>"><i class="fal fa-user"></i></a>
                        </div>
                    <?php endif; ?>
                    <div class="mobile-menu-toggle">
                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>
</div>
<!-- Mobile Header Section End -->

<!-- Mobile Header Section Start -->
<div class="mobile-header sticky-header bg-white section d-xl-none">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo">
                    <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('public/frontend/assets/images/logo/logoh.png')); ?>" alt="Learts Logo"></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <div class="header-search d-none d-sm-block">
                        <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="#offcanvas-cart" id="count_cart3"class="offcanvas-toggle"><span class="cart-count"><?php echo e(Cart::count()); ?></span><i class="fal fa-shopping-cart"></i></a>
                    </div>
                    <?php if(auth()->guard()->guest()): ?>
                        <div class="header-wishlist">
                            <a href="<?php echo e(route('login')); ?>"><span class="wishlist-count">0</span><i class="fal fa-heart"></i></a>
                        </div>
                        <div class="header-login">
                            <a href="<?php echo e(route('login')); ?>"><i class="fal fa-user"></i></a>
                        </div>
                    <?php else: ?>
                        <div class="header-wishlist">
                            <a href="#offcanvas-wishlist" id="count_wishlist4" class="offcanvas-toggle"><span class="wishlist-count"><?php echo e(count($wishlist)); ?></span><i class="fal fa-heart"></i></a>
                        </div>
                        <div class="header-login">
                            <a href="<?php echo e(route('home')); ?>"><i class="fal fa-user"></i></a>
                        </div>
                    <?php endif; ?>
                    <div class="mobile-menu-toggle">
                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>
</div>
<!-- Mobile Header Section End -->

<?php
$category = DB::table('categories')->get();
?>
<!-- OffCanvas Search Start -->
<div id="offcanvas-search" class="offcanvas offcanvas-search">
    <div class="inner">
        <div class="offcanvas-search-form">
            <button class="offcanvas-close">×</button>
                <div class="row mb-n3">
                    <div class="col-lg-12 col-12 mb-3">

                        <form action="<?php echo e(route('search.product')); ?>" method="POST"><?php echo csrf_field(); ?>
                            <input type="text" name="search" required placeholder="Search products....">

                        </form>
                    </div>
                </div>
        </div>
        <p class="search-description text-body-light mt-2"> <span># Type at least 1 character to search</span> <span># Hit enter to search or ESC to close</span></p>

    </div>
</div>
<!-- OffCanvas Search End -->

<?php if(auth()->guard()->guest()): ?>
<?php else: ?>
<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
    <div class="inner">
        <div class="head">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <?php if($wishlist->isEmpty()): ?>
                <p>Your Wishlist is Empty!</p>
                <?php else: ?>
                <?php $__currentLoopData = $wishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(url('product/details/'.$wish->id.'/'.$wish->product_name)); ?>" class="image"><img src="<?php echo e(URL::to('public/media/product/'.json_decode($wish->filename, true)[0])); ?>" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="<?php echo e(url('product/details/'.$wish->id.'/'.$wish->product_name)); ?>" class="title"><?php echo e($wish->product_name); ?></a>
                        <?php if($wish->discount_price == NULL): ?>
                        <span class="quantity-price">1 x <span class="amount">$ <?php echo e($wish->selling_price); ?></span></span>
                        <?php else: ?>
                        <span class="quantity-price">1 x <span class="amount">$ <?php echo e($wish->discount_price); ?></span></span>
                        <?php endif; ?>

                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>
        </div>
        <?php if($wishlist->isEmpty()): ?>
        <div class="foot">
            <div class="buttons">
                <a href="<?php echo e(url('all/products')); ?>" class="btn btn-dark btn-hover-primary">Continue Shopping</a>
            </div>
        </div>
        <?php else: ?>
        <div class="foot">
            <div class="buttons">
                <a href="<?php echo e(route('show.wishlist')); ?>" class="btn btn-dark btn-hover-primary">View Wishlist</a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- OffCanvas Wishlist End -->
<?php endif; ?>

<?php
    $cart = Cart::content();
?>
<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner"w >
        <div class="head">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <?php if($cart->isEmpty()): ?>
                    <p>Your Cart is Empty!</p>
                <?php else: ?>
                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(url('product/details/'.$cartItem->id.'/'.$cartItem->name)); ?>" class="image"><img src="<?php echo e(URL::to('public/media/product/'.json_decode($cartItem->options->image, true)[0])); ?>"  alt="Cart product Image"></a>
                        <div class="content">
                            <a href="<?php echo e(url('product/details/'.$cartItem->id.'/'.$cartItem->name)); ?>" class="title"><?php echo e($cartItem->name); ?></a>
                            <span class="quantity-price"><?php echo e($cartItem->qty); ?> x <span class="amount"><?php echo e($cartItem->price); ?>.00</span></span>

                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="foot">
            <div class="sub-total">
                <strong>Subtotal :</strong>
                <span class="amount">$ <?php echo e(Cart::subtotal()); ?></span>
            </div>
            <?php if($cart->isEmpty()): ?>
            <div class="buttons">
                <a href="<?php echo e(url('all/products')); ?>" class="btn btn-dark btn-hover-primary">Continue Shopping</a>
                <a href="<?php echo e(route('show.cart')); ?>" class="btn btn-dark btn-hover-primary">view cart</a>
            </div>
            <?php else: ?>
                <div class="buttons">
                    <a href="<?php echo e(route('show.cart')); ?>" class="btn btn-dark btn-hover-primary">view cart</a>
                    <a href="<?php echo e(route(('user.checkout'))); ?>" class="btn btn-outline-dark">checkout</a>
                </div>
            <?php endif; ?>
            <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- OffCanvas Search Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <div class="inner customScroll">
        <div class="offcanvas-menu-search-form">
            <form action="<?php echo e(route('search.product')); ?>" method="POST"><?php echo csrf_field(); ?>
                <input type="text" name="search" required placeholder="Search products....">
                <button type="submit"><i class="fal fa-search"></i></button>
            </form>
        </div>
        <div class="offcanvas-menu">
            <ul>
                <li class=""><a href="<?php echo e(url('/')); ?>"><span class="menu-text">Home</span></a></li>
                <li class=""><a href="<?php echo e(url('about')); ?>"><span class="menu-text">About Us</span></a></li>
                <li class=""><a href="<?php echo e(url('all/products')); ?>"><span class="menu-text">Shop</span></a>
                    <ul class="sub-menu">
                        <?php $__currentLoopData = $selcategory->unique('category_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class=""><a href="<?php echo e(url('categoryproduct/'.$sel->id)); ?>"><span class="menu-text"><?php echo e($sel->category_name); ?></span></a>
                                <ul class="sub-menu">
                                    <?php
                                        $subcat = DB::table('subcategories')->where('category_id',$sel->id)->get();
                                    ?>
                                    <?php $__currentLoopData = $subcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(url('subproducts/'.$scat->id)); ?>"><span class="menu-text"><?php echo e($scat->subcategory_name); ?></span></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $test = DB::table('categories AS c1')
                                    ->leftJoin('subcategories AS c2','c2.category_id','=','c1.id')
                                    ->whereNull('c2.category_id')->select('c1.*')->get();
                        ?>
                        <?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(url('categoryproduct/'.$tes->id)); ?>"><span class="menu-text"><?php echo e($tes->category_name); ?></span></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                <li class="<?php echo e(url('wholeseller')); ?>"><a href=""><span class="menu-text">WholeSeller</span></a></li>
                <li class=""><a href="<?php echo e(url('contact')); ?>"><span class="menu-text">Contact Us</span></a></li>
            </ul>
        </div>
        <div class="offcanvas-buttons">
            <div class="header-tools">
                <div class="header-cart">
                    <a href="<?php echo e(route('show.cart')); ?>" id="count_cart4"><span class="cart-count"><?php echo e(Cart::count()); ?></span><i class="fal fa-shopping-cart"></i></a>
                </div>
                <?php if(auth()->guard()->guest()): ?>
                    <div class="header-wishlist">
                        <a href="<?php echo e(route('login')); ?>"><span class="wishlist-count">0</span><i class="fal fa-heart"></i></a>
                    </div>
                    <div class="header-login">
                        <a href="<?php echo e(route('login')); ?>"><i class="fal fa-user"></i></a>
                    </div>
                <?php else: ?>
                    <div class="header-wishlist">
                        <a href="#offcanvas-wishlist" id="count_wishlist5" class="offcanvas-toggle"><span class="wishlist-count"><?php echo e(count($wishlist)); ?></span><i class="fal fa-heart"></i></a>
                    </div>
                    <div class="header-login">
                        <a href="<?php echo e(route('home')); ?>"><i class="fal fa-user"></i></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="offcanvas-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
<!-- OffCanvas Search End -->

<div class="offcanvas-overlay"></div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script type="text/javascript">

    $(document).on('click','.rmCart',function (e) {
        e.preventDefault();
        var rowId = $(this).data('id');
        if (rowId) {
            $.ajax({
                url: " <?php echo e(url('remove/cart/')); ?>/"+rowId,
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

<?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/layouts/menubar.blade.php ENDPATH**/ ?>