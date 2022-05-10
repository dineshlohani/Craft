<?php $__env->startSection('title', 'Payment Information-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier'); ?>

<?php $__env->startSection('content'); ?>

    <?php
        $setting = DB::table('settings')->first();
        $charge = $setting->shipping_charge;
        $vat = $setting->vat;
    ?>

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
                            <th>Coupon: [<?php echo e(Session::get('coupon')['name']); ?>]

                            </th>
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
                    <h2 class="title">Shipping Details</h2>
                </div>
                <form action="<?php echo e(route('payment.process')); ?>" method="POST"><?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6 col-12 learts-mb-20">
                            <label for="bdFirstName">First Name <abbr class="required">*</abbr></label>
                            <input type="text" name="first_name" id="bdFirstName" required>
                        </div>
                        <div class="col-md-6 col-12 learts-mb-20">
                            <label for="bdLastName">Last Name <abbr class="required">*</abbr></label>
                            <input type="text" name="last_name" id="bdLastName" required>
                        </div>
                        <div class="col-6 learts-mb-20">
                            <label for="bdCountry">Country <abbr class="required">*</abbr></label>
                            <select id="bdCountry" name="country" class="select2-basic">
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="col-6 learts-mb-20">
                            <label for="bdAddress1">Address <abbr class="required">*</abbr></label>
                            <input type="text" id="bdAddress1" placeholder="House number and street name" name="address" required>
                        </div>
                        <div class="col-6 learts-mb-20">
                            <label for="bdAddress2" class="sr-only">Apartment, suite, unit etc. (optional)</label>
                            <input type="text" id="bdAddress2" placeholder="Apartment, suite, unit etc. (optional)" name="apartment">
                        </div>
                        <div class="col-6 learts-mb-20">
                            <label for="bdTownOrCity">Town / City <abbr class="required">*</abbr></label>
                            <input type="text" id="bdTownOrCity" name="city" required>
                        </div>
                        <div class="col-6 learts-mb-20">
                            <label for="bdPostcode">Postcode / ZIP</label>
                            <input type="text" id="bdPostcode" name="zip_code" required>
                        </div>
                        <div class="col-md-6 col-12 learts-mb-20">
                            <label for="bdEmail">Email address <abbr class="required">*</abbr></label>
                            <input type="email" id="bdEmail" name="email" required>
                        </div>
                        <div class="col-md-6 col-12 learts-mb-30">
                            <label for="bdPhone">Phone <abbr class="required">*</abbr></label>
                            <input type="text" id="bdPhone" name="phone" required>
                        </div>
                        <div class="col-12 learts-mb-20">
                            <label for="bdOrderNote">Order Notes (optional)</label>
                            <textarea id="bdOrderNote" name="order_note" placeholder="Notes about your order, e.g. special notes for delivery." style="height: 90px;"></textarea>
                        </div>
                        <div class="col-md-12 col-12 learts-mb-30">
                            <h3 class="title">Payment Method</h3>
                            <div class="form-group">
                                <ul style="list-style: none;">
                                    <li><input type="radio" name="payment" value="stripe" style="cursor: pointer;"><img src="<?php echo e(asset('public/frontend/assets/images/others/stripe.png')); ?>" style="width: 120px; height: 80px;"></li>
                                    <li><input type="radio" name="payment" value="paypal" style="cursor: pointer;"><img src="<?php echo e(asset('public/frontend/assets/images/others/paypal.png')); ?>" style="width: 120px; height: 80px;"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="payment-note">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                        <button type="submit" class="btn btn-dark btn-outline-hover-dark">Place order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Checkout Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/craftsma/domains/craftsmannepal.com/public_html/resources/views/pages/payment.blade.php ENDPATH**/ ?>