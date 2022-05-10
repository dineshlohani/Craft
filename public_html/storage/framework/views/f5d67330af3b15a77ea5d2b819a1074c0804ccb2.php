<?php $__env->startSection('title', 'Place Order-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>

    <?php
        $setting = DB::table('settings')->first();
        $charge = $setting->shipping_charge;
        $vat = $setting->vat;
    ?>

    <style>
        /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
        .StripeElement {
            box-sizing: border-box;

            height: 40px;
            width: 100%;

            padding: 10px 12px;

            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;}
    </style>

    <!-- Checkout Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="section-title2 mb-5">
                <div class="page-title">
                    <ul class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?php echo e(route(('show.cart'))); ?>">Cart</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route(('user.checkout'))); ?>">Apply Coupon</a></li>
                        <li class="breadcrumb-item active">Payment Information</li>
                    </ul>
                </div>
            </div>
            <div class="row learts-mb-n30">
                <div class="col-lg-6 order-lg-2 learts-mb-30">
                    <div class="section-title2 text-center">
                        <h2 class="title">Your Order</h2>
                    </div>
                    <div class="order-review">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="name">Product</th>
                                <th class="total">Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="name"><?php echo e($row->name); ?>&nbsp;<?php if($row->options->color != NULL): ?>[Color:<?php echo e($row->options->color); ?>]<?php endif; ?>
                                        <?php if($row->options->size != NULL): ?>[Size:<?php echo e($row->options->size); ?>]<?php endif; ?>
                                        <strong class="quantity">×&nbsp;<?php echo e($row->qty); ?></strong></td>
                                    <td class="total"><span>$ <?php echo e($row->price*$row->qty); ?></span></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                            <tr class="subtotal">
                                <th>Subtotal</th>
                                <td><span>$<?php echo e(Cart::Subtotal()); ?></span></td>
                            </tr>
                            <?php if(Session::has('coupon')): ?>
                                <tr class="subtotal">
                                    <th>Coupon:<p style="font-size: 15px; color: forestgreen;">[<?php echo e(Session::get('coupon')['name']); ?>]</p></th>
                                    <td><strong><span class="amount">$<?php echo e(Session::get('coupon')['discount']); ?></span></strong></td>
                                </tr>
                            <?php endif; ?>
                            <tr class="subtotal">
                                <th>Shipping Charge:</th>
                                <td><strong><span class="amount">$<?php echo e($charge); ?></span></strong></td>
                            </tr>
                            <tr class="subtotal">
                                <th>VAT:</th>
                                <td><strong><span class="amount"><?php echo e($vat); ?>%</span></strong></td>
                            </tr>
                            <?php if(Session::has('coupon')): ?>
                                <tr class="subtotal">
                                    <th>Total: </th>
                                    <?php
                                    $vat_amount = Cart::Subtotal()*$vat/100;
                                    $f_price = Cart::Subtotal() - Session::get('coupon')['discount'] + $charge + $vat_amount;
                                    ?>
                                    <td style="color: black;"><strong><span>$<?php echo e(Cart::Subtotal()); ?> <p style="color: forestgreen;">+ <?php echo e($vat_amount); ?>(VAT Amount)</p><p style="color: darkred; margin-top: -10px;">- $<?php echo e(Session::get('coupon')['discount']); ?>(Coupon)</p>
                                    <hr>
                                    <p style="font-size: 25px;">$<?php echo e($f_price); ?></p></span></strong></td>
                                </tr>
                            <?php else: ?>
                                <tr class="total">
                                    <th>Total:</th>
                                    <?php
                                    $vat_amount = Cart::Subtotal()*$vat/100;
                                    $total_p = Cart::Subtotal() + $charge + $vat_amount;
                                    ?>
                                    <td style="color: black;"><strong><span>$<?php echo e(Cart::Subtotal()); ?> <p style="color: forestgreen; font-size: 15px;">+ <?php echo e($vat_amount); ?>(VAT Amount)</p>
                                    <hr>
                                    <p style="font-size: 25px;">$<?php echo e($total_p); ?></p></span></strong></td>
                                </tr>
                            <?php endif; ?>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 learts-mb-30">
                    <div class="section-title2">
                        <h2 class="title">Card Details</h2>
                    </div>
                    <form action="<?php echo e(route('stripe.pay')); ?>" method="POST" id="payment-form"><?php echo csrf_field(); ?>
                        <div class="form-row">
                            <label for="card-element">
                                Credit or Debit Card
                            </label>
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div>
                        <input type="hidden" name="shipping" value="<?php echo e($charge); ?>">
                        <input type="hidden" name="vat" value="<?php echo e($vat); ?>">
                        <?php if(Session::has('coupon')): ?>
                            <input type="hidden" name="total" value="<?php echo e(Cart::Subtotal() - Session::get('coupon')['discount'] + $charge +$vat); ?>">
                        <?php else: ?>
                            <input type="hidden" name="total" value="<?php echo e(Cart::Subtotal() + $charge +$vat); ?>">
                        <?php endif; ?>
                        <input type="hidden" name="ship_name" value="<?php echo e($data['first_name'] ." ". $data['last_name']); ?>">
                        <input type="hidden" name="ship_country" value="<?php echo e($data['country']); ?>">
                        <input type="hidden" name="ship_address" value="<?php echo e($data['address']); ?>">
                        <input type="hidden" name="ship_apartment" value="<?php echo e($data['apartment']); ?>">
                        <input type="hidden" name="ship_city" value="<?php echo e($data['city']); ?>">
                        <input type="hidden" name="zip_code" value="<?php echo e($data['zip_code']); ?>">
                        <input type="hidden" name="ship_email" value="<?php echo e($data['email']); ?>">
                        <input type="hidden" name="ship_phone" value="<?php echo e($data['phone']); ?>">
                        <input type="hidden" name="order_note" value="<?php echo e($data['order_note']); ?>">
                        <input type="hidden" name="payment_type" value="<?php echo e($data['payment']); ?>">
                        <button type="submit" class="btn btn-md btn-info mt-3">Submit Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->
    <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_51I4KZjFOqsTuqs07r4a8t4XcBwodbSomRtpSvPw1dYjyNXoIdPWNKEBGcDQV5AUfZNBxlCQGukllYWPUA4sa1Qzm00Vxp5UQW6');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pages/payment/stripe.blade.php ENDPATH**/ ?>