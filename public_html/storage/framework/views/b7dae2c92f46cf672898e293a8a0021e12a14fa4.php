<?php $__env->startSection('title', $product->product_name. '-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Single Products Section Start -->
    <div class="section section mt-5 mb-3 border-bottom-dashed" style="padding-bottom: 30px;">
        <div class="container">
            <div class="row learts-mb-n40">

                <!-- Product Images Start -->
                <div class="col-lg-6 col-12 learts-mb-40">
                    <div class="product-images">
                        <button class="product-gallery-popup hintT-left" data-hint="Click to enlarge" data-images='[
                        <?php $__currentLoopData = json_decode($product->filename, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            {"src": "<?php echo e(URL::to('public/media/product/'.$images)); ?>", "w": 700, "h": 700}<?php if($loop->last): ?><?php else: ?>,<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        ]'><i class="far fa-expand"></i></button>
                        <a href="<?php echo e(asset($product->video_link)); ?>" class="product-video-popup video-popup hintT-left" data-hint="Click to see video"><i class="fal fa-play"></i></a>
                        <div class="product-gallery-slider">
                            <?php $__currentLoopData = json_decode($product->filename, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product-viewer" data-image="<?php echo e(URL::to('public/media/product/'.$images)); ?>">
                                <img src="<?php echo e(URL::to('public/media/product/'.$images)); ?>" alt="">
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="product-thumb-slider">
                            <?php $__currentLoopData = json_decode($product->filename, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <img src="<?php echo e(URL::to('public/media/product/'.$images)); ?>">
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <!-- Product Images End -->

                <!-- Product Summery Start -->
                <div class="col-lg-6 col-12 learts-mb-40">
                    <div class="product-summery">
                        <div class="page-title product-nav">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(url('all/products')); ?>">Shop</a></li>
                                <li class="breadcrumb-item active"><a><?php echo e(str_limit($product->product_name,7)); ?></a></li>
                            </ul>
                        </div>
                        <div class="product-ratings">
                            <span class="star-rating">
                                <span class="rating-active" style="width: 100%;">ratings</span>
                            </span>
                        </div>
                        <h3 class="product-title" style="font-size: 30px;"><?php echo e($product->product_name); ?></h3>
                        <?php if($product->discount_price == NULL): ?>
                            <span class="new" style="font-size: 25px; font-weight: bold">$<?php echo e($product->selling_price); ?></span>
                        <?php else: ?>
                            <span class="pro-price">
                                <span class="old m-1" style="color: red;"><s>$<?php echo e($product->selling_price); ?></s></span>
                                <span class="new" style="font-size: 25px; font-weight: bold">$<?php echo e($product->discount_price); ?></span>
                            </span>
                        <?php endif; ?>
                        <div class="product-description">
                            <p><?php echo str_limit(strip_tags($product->product_desc),500,'.......'); ?>

                                    <a href="#tab-description" Xdata-toggle="tab" class="tab-link" style="color: lightcoral;">Read Full Description</a>
                            </p>
                        </div>
                        <form id="ajaxformcart"><?php echo csrf_field(); ?>
                            <div class="product-variations">
                                <table>
                                    <tbody>
                                    <?php if($product->product_size == NULL): ?>
                                    <?php else: ?>
                                    <tr>
                                        <td class="label"><span>Size</span></td>
                                        <td class="value">
                                            <div class="product-sizes">
                                                <select class="dropdown-header" name="size">
                                                    <?php $__currentLoopData = $product_size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($size); ?>"><?php echo e($size); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if($product->product_color == NULL): ?>
                                    <?php else: ?>
                                    <tr>
                                        <td class="label"><span>Color</span></td>
                                        <td class="value">
                                            <div class="product-colors">
                                                <select class="dropdown-header" name="color">
                                                    <?php $__currentLoopData = $product_color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($color); ?>"><?php echo e($color); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <tr>
                                        <td class="label"><span>Quantity</span></td>
                                        <td class="value">
                                            <div class="product-quantity">
                                                <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                                <input type="number" class="input-qty" value="1" id="qty" name="qty">
                                                <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="product-buttons">
                            <?php if(auth()->guard()->guest()): ?>
                                <a href="#offcanvas-wishlist" class="btn btn-dark btn-outline-hover-dark addwishlist" data-id="<?php echo e($product->id); ?>"><i class="far fa-heart"></i> Add To Wishlist</a>
                            <?php else: ?>
                                <a href="#offcanvas-wishlist" class="btn btn-dark btn-outline-hover-dark offcanvas-toggle addwishlist" data-id="<?php echo e($product->id); ?>"><i class="far fa-heart"></i> Add To Wishlist</a>
                            <?php endif; ?>
                                <button href="#offcanvas-cart" class="btn btn-dark btn-outline-hover-dark offcanvas-toggle add-tocart" data-id="<?php echo e($product->id); ?>"><i class="fal fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                        </form>
                        <div class="product-meta">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="label"><span>Product Code</span></td>
                                    <td class="value"><?php echo e($product->product_code); ?></td>
                                </tr>
                                <tr>
                                    <td class="label"><span>Category</span></td>
                                    <td class="value">
                                        <ul class="product-category">
                                            <li><a href="#"><?php echo e($product->category_name); ?></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <?php if($product->subcategory_name != NULL): ?>
                                <tr>
                                    <td class="label"><span>Sub-Category</span></td>
                                    <td class="value">
                                        <ul class="product-category">
                                            <li><a href="#"><?php echo e($product->subcategory_name); ?></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Product Summery End -->

            </div>
        </div>

    </div>
    <!-- Single Products Section End -->


    <!-- Single Products Infomation Section Start -->
    <div class="section section mt-3 mb-3">
        <div class="container">

            <ul class="nav product-info-tab-list">
                <li><a class="active" data-toggle="tab" href="#tab-description">Description</a></li>
                <li><a data-toggle="tab" href="#tab-additional_information">Additional information</a></li>
                <li><a data-toggle="tab" href="#tab-reviews">Reviews</a></li>
            </ul>
            <div class="tab-content product-infor-tab-content" style="margin-top: -40px;" >

                <div class="tab-pane fade show active" id="tab-description">
                    <div class="row">
                        <div class="col-lg-10 col-12 mx-auto">
                            <p><?php echo $product->product_desc; ?> </p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-additional_information">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-12 mx-auto">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                    <?php if($product->product_size == NULL): ?>
                                    <?php else: ?>
                                    <tr>
                                        <td>Size</td>
                                        <td><?php echo e($product->product_size); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if($product->product_color == NULL): ?>
                                    <?php else: ?>
                                    <tr>
                                        <td>Color</td>
                                        <td><?php echo e($product->product_color); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if($product->product_material == NULL): ?>
                                    <?php else: ?>
                                    <tr>
                                        <td>Material</td>
                                        <td><?php echo e($product->product_material); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if($product->product_weight == NULL): ?>
                                    <?php else: ?>
                                    <tr>
                                        <td>Weight</td>
                                        <td><?php echo e($product->product_weight); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if($product->product_dimension == NULL): ?>
                                    <?php else: ?>
                                    <tr>
                                        <td>Dimension</td>
                                        <td><?php echo e($product->product_dimension); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if($product->product_diameter == NULL): ?>
                                    <?php else: ?>
                                    <tr>
                                        <td>Diameter</td>
                                        <td><?php echo e($product->product_diameter); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-reviews">
                    <div class="product-review-wrapper">
                        <div class="review-form text-center">
                            <div class="fb-comments" data-href="<?php echo e(Request::url()); ?>" data-width="" data-numposts="7"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Single Products Infomation Section End -->

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
         It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>

    <script type="text/javascript">
        $('.tab-link').on('click', function(event) {
            // Prevent url change
            event.preventDefault();

            // `this` is the clicked <a> tag
            $('[data-toggle="tab"][href="' + this.hash + '"]').trigger('click');
        })
    </script>


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0" nonce="L4KpWv2E"></script>

    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(".add-tocart").click(function(event){
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pages/product_details.blade.php ENDPATH**/ ?>