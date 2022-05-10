<?php

Route::get('/', 'Frontend\IndexController@index')->name('index');

//Auth & User Routes Section
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/order/track', 'HomeController@orderTrack')->name('order.tracking');
Route::get('order/view/{id}','HomeController@viewUserOrder')->name('user.view_order');
Route::get('order/cancel/{id}','HomeController@cancelUserOrder')->name('user.cancel_order');
Route::get('order/return/request/{id}','HomeController@returnRequestOrder')->name('user.request_return');
Route::post('/password/update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');
//-------------------------------------------------------------------/-------------------------------------------------------------------------------------------/
//Admin Routes Section//
//Admin Login
Route::get('admin/home', 'AdminController@index')->name('admin.home');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');

// Admin Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update');
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');

//Admin Categories Section
Route::get('admin/categories', 'Admin\Category\CategoryController@category')->name('categories');
Route::post('admin/store/category', 'Admin\Category\CategoryController@storecategory')->name('store.category');
Route::get('delete/category/{id}', 'Admin\Category\CategoryController@deletecategory');
Route::get('edit/category/{id}', 'Admin\Category\CategoryController@Editcategory')->name('edit.category');
Route::post('update/category/{id}', 'Admin\Category\CategoryController@Updatecategory');

//Admin Sub-Categories Section
Route::get('admin/sub/category', 'Admin\Category\SubCategoryController@subcategories')->name('sub.categories');
Route::post('admin/store/subcat', 'Admin\Category\SubCategoryController@storesubcat')->name('store.subcategory');
Route::get('delete/subcategory/{id}', 'Admin\Category\SubCategoryController@deletesubcat');
Route::get('edit/subcategory/{id}', 'Admin\Category\SubCategoryController@EditSubcat')->name('edit.subcategory');
Route::post('update/subcategory/{id}', 'Admin\Category\SubCategoryController@UpdateSubcat');

//Admin Coupons Section
Route::get('admin/coupon', 'Admin\Coupon\CouponController@Coupon')->name('admin.coupon');
Route::post('admin/store/coupon', 'Admin\Coupon\CouponController@storecoupon')->name('store.coupon');
Route::get('delete/coupon/{id}', 'Admin\Coupon\CouponController@deletecoupon');
Route::post('admin/update/coupon', 'Admin\Coupon\CouponController@updatecoupon')->name('update.coupon');

//Admin Stock Section
Route::get('admin/stock', 'Admin\Stock\StockController@Stock')->name('admin.stock');
Route::post('update/stock','Admin\Stock\StockController@updStock')->name('update.stock');

//Offer Section
Route::get('admin/offer', 'Admin\Product\ProductController@offers')->name('admin.offer');
Route::post('admin/store/deal_of_week', 'Admin\Product\ProductController@addDealOfTheWeek')->name('add.dealoftheweek');
Route::post('admin/store/best_selling', 'Admin\Product\ProductController@addBestSelling')->name('add.bestselling');
Route::post('admin/store/newarrivals', 'Admin\Product\ProductController@addNewArrivals')->name('add.newarrivals');

Route::get('remove/deal_of_week/{id}', 'Admin\Product\ProductController@removeDealOfTheWeek');
Route::get('remove/new_arrival/{id}', 'Admin\Product\ProductController@removeNewArrival');
Route::get('remove/best_seller/{id}', 'Admin\Product\ProductController@removeBestSelling');


//Admin Newsletter Section
Route::get('admin/newsletter', 'Admin\Newsletter\NewsLetterController@Newsletter')->name('admin.newsletter');
Route::get('delete/sub/{id}', 'Admin\Newsletter\NewsLetterController@DeleteSub');

//Admin Products Section
Route::get('admin/product/all', 'Admin\Product\ProductController@index')->name('all.product');
Route::get('admin/product/add', 'Admin\Product\ProductController@create')->name('add.product');
Route::post('admin/product/store', 'Admin\Product\ProductController@store')->name('store.product');
Route::get('view/product/{id}','Admin\Product\ProductController@ViewProduct')->name('view.product');
Route::get('edit/product/{id}', 'Admin\Product\ProductController@EditProduct')->name('edit.product');
Route::post('update/product/withoutphoto/{id}', 'Admin\Product\ProductController@UpdateProductWithoutPhoto');
Route::post('update/product/photo/{id}', 'Admin\Product\ProductController@UpdateProductPhoto');
Route::get('delete/product/{id}','Admin\Product\ProductController@DeleteProduct');
Route::get('delete/product/image/{id}/{image_name}','Admin\Product\ProductController@deleteImage');

//Admin Product Active/Inactive
Route::get('inactive/product/{id}','Admin\Product\ProductController@inactive');
Route::get('active/product/{id}','Admin\Product\ProductController@active');

//For Showing Sub-category using Ajax
Route::get('get/subcategory/{category_id}', 'Admin\Product\ProductController@GetSubCat');

//Admin Orders Routes
Route::get('admin/order/all','Admin\Order\OrderController@allOrder')->name('all.order');
Route::get('admin/order/new','Admin\Order\OrderController@newOrder')->name('new.order');
Route::get('admin/order/accepted','Admin\Order\OrderController@acceptedOrder')->name('accepted.order');
Route::get('admin/order/rejected','Admin\Order\OrderController@rejectedOrder')->name('rejected.order');
Route::get('admin/order/delivery','Admin\Order\OrderController@deliveryOrder')->name('delivery.order');
Route::get('admin/order/completed','Admin\Order\OrderController@completedOrder')->name('completed.order');

Route::get('admin/order/view/{id}','Admin\Order\OrderController@viewOrder')->name('view.order');

Route::get('admin/order/payment/accept/{id}','Admin\Order\OrderController@acceptOrderPayment')->name('accept.order.payment');
Route::get('admin/order/payment/cancel/{id}','Admin\Order\OrderController@cancelOrderPayment')->name('cancel.order');
Route::get('admin/order/delivery/proceed/{id}','Admin\Order\OrderController@proceedOrderDelivery')->name('proceed.delivery');
Route::get('admin/order/delivery/completed/{id}','Admin\Order\OrderController@completeOrderDelivery')->name('proceed.delivery');

//Admin Order Return Routes
Route::get('admin/return/request','Admin\Order\ReturnController@returnOrder')->name('admin.return.request');
Route::get('admin/return/complete','Admin\Order\ReturnController@returnOrderComplete')->name('admin.return.complete');
Route::get('admin/return/approve/{id}','Admin\Order\ReturnController@approveReturnOrder')->name('admin.return.approve');

//Admin Reports Routes
Route::get('admin/report/today/order/new', 'Admin\Report\ReportController@todayOrder')->name('today.order');
Route::get('admin/report/today/order/accepted', 'Admin\Report\ReportController@todayAccept')->name('today.acceptOrder');
Route::get('admin/report/today/order/on-delivery', 'Admin\Report\ReportController@todayDeliveryStart')->name('today.onDelivery');
Route::get('admin/report/today/order/delivered', 'Admin\Report\ReportController@todayDeliveryComplete')->name('today.delivered');
Route::get('admin/report/today/order/rejected', 'Admin\Report\ReportController@todayReject')->name('today.reject');
Route::get('admin/report/order/search', 'Admin\Report\ReportController@searchReport')->name('search.report');

//Admin Search Report Routes
Route::post('admin/report/order/search/year', 'Admin\Report\ReportController@searchByYear')->name('search.byYear');
Route::post('admin/report/order/search/month-year', 'Admin\Report\ReportController@searchByMonth')->name('search.byMonth');
Route::post('admin/report/order/search/date', 'Admin\Report\ReportController@searchByDate')->name('search.byDate');

//Admin Seo Setting Routes
Route::get('admin/seo', 'Admin\Seo\SeoController@seoSetting')->name('admin.seo');
Route::post('admin/seo/update', 'Admin\Seo\SeoController@seoUpdate')->name('update.seo');

//Admin Site Setting Routes
Route::get('admin/site-setting', 'Admin\SiteSetting\SiteSettingController@siteSetting')->name('admin.site-setting');
Route::post('admin/site-setting/update', 'Admin\SiteSetting\SiteSettingController@siteUpdate')->name('update.site-setting');

//Admin About Us Page Routes
Route::get('admin/about', 'Admin\SiteSetting\AboutController@about')->name('admin.about');
Route::post('admin/about/update', 'Admin\SiteSetting\AboutController@aboutUpdate')->name('update.about');

//Admin Contact Us Page Routes
Route::get('admin/contact', 'Admin\Contact\ContactController@contact')->name('admin.contact');

//Admin Wholesale Information Management Routes
Route::get('admin/wholesale', 'Admin\Contact\ContactController@wholeSale')->name('admin.wholesale');
Route::get('admin/wholesale/edit', 'Admin\Contact\ContactController@wholeSaleEdit')->name('admin.wholesale.edit');
Route::post('admin/wholesale/update', 'Admin\Contact\ContactController@wholesaleUpdate')->name('admin.wholesale.update');

//Admin Banner Management Routes
Route::get('admin/banner', 'Admin\Banner\BannerController@banner')->name('admin.banner');
Route::post('admin/store/banner', 'Admin\Banner\BannerController@storeBanner')->name('store.banner');
Route::get('delete/banner/{id}', 'Admin\Banner\BannerController@deleteBanner');
Route::get('edit/banner/{id}', 'Admin\Banner\BannerController@editBanner')->name('edit.banner');
Route::post('update/banner/{id}', 'Admin\Banner\BannerController@updateBanner');

//Admin Privacy Policy Routes
Route::get('admin/policy', 'Admin\CompanyInfo\CompanyInfoController@policies')->name('admin.policies');
Route::post('admin/store/policy', 'Admin\CompanyInfo\CompanyInfoController@storePolicy')->name('store.policy');
Route::get('delete/policy/{id}', 'Admin\CompanyInfo\CompanyInfoController@deletePolicy');
Route::get('edit/policy/{id}', 'Admin\CompanyInfo\CompanyInfoController@editPolicy')->name('edit.policy');
Route::post('update/policy/{id}', 'Admin\CompanyInfo\CompanyInfoController@updatePolicy');

//Admin FAQs Routes
Route::get('admin/faq', 'Admin\CompanyInfo\CompanyInfoController@faqs')->name('admin.faqs');
Route::post('admin/store/faq', 'Admin\CompanyInfo\CompanyInfoController@storeFaq')->name('store.faq');
Route::get('delete/faq/{id}', 'Admin\CompanyInfo\CompanyInfoController@deleteFaq');
Route::get('edit/faq/{id}', 'Admin\CompanyInfo\CompanyInfoController@editFaq')->name('edit.faq');
Route::post('update/faq/{id}', 'Admin\CompanyInfo\CompanyInfoController@updateFaq');

//Admin User-Role Routes
Route::get('admin/user/all', 'Admin\UserRole\UserRoleController@viewUserRole')->name('admin.all.user');
Route::get('admin/user/create', 'Admin\UserRole\UserRoleController@userRoleCreate')->name('admin.create.user');
Route::post('admin/user/store', 'Admin\UserRole\UserRoleController@userRoleStore')->name('admin.store.user');
Route::get('admin/user/delete/{id}', 'Admin\UserRole\UserRoleController@userRoleDelete')->name('admin.delete.user');
Route::get('admin/user/edit/{id}', 'Admin\UserRole\UserRoleController@userRoleEdit')->name('admin.edit.user');
Route::post('admin/user/update', 'Admin\UserRole\UserRoleController@userRoleUpdate')->name('admin.update.user');

//Export to PDF Routes
Route::get('pdf_download/{id}', 'PdfController@pdfDownload')->name('pdf.download');
Route::get('pdf_view/{id}', 'PdfController@pdfView')->name('pdf.view');

//End Admin Routes Section
//-------------------------------------------------------------------/-------------------------------------------------------------------------------------------/

//FrontEnd Routes Section Start//
//Company Information Route Section
Route::get('policies', 'Frontend\PolicyController@policies')->name('policies');
Route::get('faq', 'Frontend\PolicyController@faq')->name('faq');

//Contact Us Route Section
Route::get('contact', 'Frontend\ContactController@index')->name('contact');
Route::post('store/contact', 'Frontend\ContactController@storeMessage')->name('store.message');

//About Us Route Section
Route::get('about', 'Frontend\AboutController@index')->name('about');

//WholeSeller Route Section
Route::get('wholeseller', 'Frontend\ContactController@wholeSeller')->name('wholeseller');

//NewsLetter Route Section
Route::post('store/newsletter', 'Frontend\NewsLetterController@StoreNewsletter')->name('store.newsletter');

//Product Details Route Section
Route::get('product/details/{id}/{product_name}','Frontend\ProductController@productView');

//Product SubCategory Routes
Route::get('subproducts/{id}','Frontend\ProductController@subProductsView');

//Product Category Routes
Route::get('categoryproduct/{id}','Frontend\ProductController@catProductsView');

//All Products(Shop) Routes
Route::get('all/products','Frontend\ProductController@allProductsView');

//Searched Products(Shop) Routes
Route::post('search/products','Frontend\ProductController@searchProductsView')->name('search.product');

//Wishlist Routes Section
Route::get('add/wishlist/{id}','Frontend\WishListController@addWishList');
Route::get('product/wishlist','Frontend\WishListController@showWishlist')->name('show.wishlist');

//Cart Routes Section
Route::post('cart/product/add/{id}','Frontend\ProductController@AddCart');
Route::get('product/cart','Frontend\CartController@showCart')->name('show.cart');
Route::get('cart/product/view/{id}','Frontend\CartController@quickView');
Route::get('remove/cart/{rowId}','Frontend\CartController@removeCart');
Route::post('update/cart/{rowId}','Frontend\CartController@updateCart');
//Route::match(array('GET','POST'),'update/cart/{rowId}','Frontend\CartController@updateCart');

//Checkout Routes Section
Route::get('user/checkout','Frontend\CartController@checkOut')->name('user.checkout');
Route::get('check','Frontend\CartController@check');

//Apply Coupon Routes Section
Route::match(array('GET','POST'),'user/applyCoupon','Frontend\CartController@applyCoupon')->name('apply.coupon');
Route::get('coupon/remove/','Frontend\CartController@removeCoupon')->name('coupon.remove');

//Socialite Routes
Route::get('/auth/redirect/{provider}', 'Frontend\SocialController@redirect');
Route::get('/callback/{provider}', 'Frontend\SocialController@callback');

//Payment Routes
//Stripe Payment
Route::get('user/payment','Frontend\PaymentController@paymentPage')->name('user.payment');
Route::post('payment/process','Frontend\PaymentController@paymentProcess')->name('payment.process');
Route::post('payment/stripe','Frontend\PaymentController@paymentStripe')->name('stripe.pay');







