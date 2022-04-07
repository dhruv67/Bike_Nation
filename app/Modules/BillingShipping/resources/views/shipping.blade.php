@extends('layouts.user.webapp')
@section('usercontent')
    <div class="woocommerce">
        <div class="container">
            <div class="content-top">
                <h2>Checkout</h2>
                <p>Need to Help? Call us: +9 123 456 789 or Email: <a href="mailto:Support@Rosi.com">Support@Rosi.com</a>
                </p>
            </div>
            <!--- .content-top-->
            <div class="checkout-step-process">
                <ul>
                    {{-- <li>
                        <div class="step-process-item"><i data-href="checkout-step1.html"
                                class="redirectjs fa fa-check step-icon"></i><span class="text">Checkout
                                method</span></div>
                    </li> --}}
                    <li>
                        <div class="step-process-item"><i data-href="checkout-step2.html"
                                class="redirectjs  step-icon icon-pointer"></i><span class="text">Address</span>
                        </div>
                    </li>
                    <li>
                        <div class="step-process-item active"><i class="step-icon-truck step-icon"></i><span
                                class="text">Shipping</span></div>
                    </li>
                    <li>
                        <div class="step-process-item"><i data-href="checkout-step4.html"
                                class="redirectjs  step-icon icon-wallet"></i><span class="text">Delivery &amp;
                                Payment</span></div>
                    </li>
                    <li>
                        <div class="step-process-item"><i data-href="checkout-step5.html"
                                class="redirectjs  step-icon icon-notebook"></i><span class="text">Order
                                Review</span></div>
                    </li>
                </ul>
            </div>
            <!--- .checkout-step-process --->
            <form name="shipping_checkout" id="shipping_checkout" method="POST"
                class="checkout woocommerce-checkout form-in-checkout" action="/addshipping">
                @csrf
                <ul class="row">
                    <li class="col-md-9">
                        <div class="checkout-info-text">
                            <h3>Previous Address</h3>
                            <p>Already Registed? Please login below.</p>
                        </div>
                    </li>
                    @if (!empty($address))
                        @foreach ($address as $items)
                            <li class="col-md-9">
                                <input type="radio" name="address" value="{{ $items->id }}" class="rba"
                                    checked><label>Address:&nbsp;
                                </label>{{ $items->address }}
                            </li>
                        @endforeach
                    @endif
                    <li class="col-md-9">
                        <input type="radio" name="address" value="new" id="new_add"><label>Add new address</label>
                    </li>
                </ul>
                <div id="new_bill">
                    <ul class="row">
                        <li class="col-md-9">
                            <div class="checkout-info-text">
                                <h3>Shipping Address</h3>
                                {{-- <p>Already Registed? Please login below.</p> --}}
                            </div>

                            <div class="woocommerce-billing-fields">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <p class="form-row validate-required" id="billing_first_name_field">
                                            <label for="billing_first_name" class="">First Name <abbr
                                                    class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text " name="billing_first_name"
                                                id="sbilling_first_name" placeholder="" value="" required>
                                                <label id="fname_err"></label>
                                        </p>
                                    </li>
                                    <li class="col-md-6">
                                        <p class="form-row validate-required" id="billing_last_name_field">
                                            <label for="billing_last_name" class="">Last Name <abbr
                                                    class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text " name="billing_last_name"
                                                id="sbilling_last_name" placeholder="" value="" required>
                                                <label id="lname_err"></label>
                                        </p>
                                    </li>
                                    <li class="col-md-12  col-left-12">
                                        <p class="form-row  validate-required validate-email" id="billing_email_field">
                                            <label for="billing_email" class="">Email ID <abbr
                                                    class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text " name="sbilling_email"
                                                id="sbilling_email" placeholder="" value="" required>
                                                <label id="email_err"></label>
                                        </p>
                                    </li>
                                    <li class="col-md-6">
                                        <p class="form-row address-field validate-postcode woocommerce-validated"
                                            id="billing_postcode_field">
                                            <label for="billing_postcode" class="">Zip code <abbr
                                                    class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text " name="billing_pincode"
                                                id="sbilling_pincode" value="" required>
                                                <label id="pincode_err"></label>
                                        </p>
                                    </li>
                                    <li class="col-md-6">
                                        <p class="form-row validate-required validate-phone woocommerce-validated"
                                            id="billing_phone_field">
                                            <label for="billing_phone" class="">Phone number <abbr
                                                    class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text" name="billing_phone"
                                                id="sbilling_phone" placeholder="" value="" required>
                                                <label id="phone_err"></label>
                                        </p>
                                    </li>
                                    <li class="col-md-4">
                                        <p class="form-row form-row-wide address-field validate-required"
                                            id="billing_city_field">
                                            <label for="billing_city" class="">City <abbr
                                                    class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text" name="billing_city" id="sbilling_city" required>
                                            <label id="city_err"></label>
                                        </p>
                                    </li>
                                    <li class="col-md-4">
                                        <p class="form-row address-field validate-state" id="billing_state_field">
                                            <label for="billing_state" class="">State/Province <abbr
                                                    class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text" name="billing_state"
                                                id="sbilling_state" required>
                                                <label id="state_err"></label>
                                        </p>
                                    </li>
                                    <li class="col-md-4">
                                        <p class="form-row address-field validate-state" id="billing_state_field"
                                            data-o_class="form-row form-row-first address-field">
                                            <label for="billing_country" class="">Country <abbr
                                                    class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text" name="billing_country"
                                                id="sbilling_country" required>
                                                <label id="country_err"></label>
                                        </p>
                                    </li>
                                    <li class="col-md-12  col-left-12">
                                        <p class="form-row  validate-required validate-email" id="#">
                                            <label for="Address" class="">Address <abbr class="required"
                                                    title="required">*</abbr></label>
                                            <textarea name="billing_address" cols="116" rows="4" id="sbilling_address" required></textarea>
                                            <label id="address_err"></label>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <!--- .woocommerce-billing-fields--->
                        </li>
                    </ul>
                </div>
                <div class="checkout-col-footer">
                    <input type="submit" value="Continue" class="btn-step">
                    <div class="note">(<span>*</span>) Required fields</div>
                </div>
                <!--- .checkout-col-footer--->
            </form>
            <!--- form.checkout--->
            <div class="line-bottom"></div>
        </div>
        <!--- .container--->
    @endsection
    @section('userscripts')
    <script>
        $(document).ready(function() {
            $('#new_bill').hide();
        });

        $('#new_add').on('click', function() {
            $('#new_bill').show(300);
        });

        $('.rba').on('click', function() {
            $('#new_bill').hide(300);
        });

        $("#sbilling_first_name").attr("maxlength", "46");
        $("#fname_err").hide();
        $("#sbilling_first_name").keypress(function(e) {
            var keyCode = e.keyCode || e.which;
            $("#fname_err").html("");
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[A-Za-z]+$/;
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#fname_err").show();
                $("#fname_err").html("*only alphabets allowed");
                $("#fname_err").focus();
                $("#fname_err").css("color", "red");
            } else {
                $("#fname_err").hide();
            }
            return isValid;
        });

        $("#sbilling_lirst_name").attr("maxlength", "46");
        $("#lname_err").hide();
        $("#sbilling_last_name").keypress(function(e) {
            var keyCode = e.keyCode || e.which;
            $("#lname_err").html("");
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[A-Za-z]+$/;
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#lname_err").show();
                $("#lname_err").html("*only alphabets allowed");
                $("#lname_err").focus();
                $("#lname_err").css("color", "red");
            } else {
                $("#lname_err").hide();
            }
            return isValid;
        });

        $("#sbilling_pincode").attr("maxlength", "6");
        $("#pincode_err").hide();
        $("#sbilling_pincode").keypress(function(e) {
            var kk = e.which;
            if (kk < 48 || kk > 57) {
                e.preventDefault();
                $("#pincode_err").show();
                $("#pincode_err").html("*only numbers allowed");
                $("#pincode_err").focus();
                $("#pincode_err").css("color", "red");
            } else {
                $("#pincode_err").hide();
            }
        });

        $("#sbilling_phone").attr("maxlength", "10");
        $("#phone_err").hide();
        $("#sbilling_phone").keypress(function(e) {
            var kk = e.which;
            if (kk < 48 || kk > 57) {
                e.preventDefault();
                $("#phone_err").show();
                $("#phone_err").html("*only numbers allowed");
                $("#phone_err").focus();
                $("#pincode_err").css("color", "red");
            } else {
                $("#phone_err").hide();
            }
        });

        $("#sbilling_city").attr("maxlength", "35");
        $("#city_err").hide();
        $("#sbilling_city").keypress(function(e) {
            var keyCode = e.keyCode || e.which;
            $("#city_err").html("");
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[\s+A-Za-z]+$/;
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#city_err").show();
                $("#city_err").html("*only alphabets allowed");
                $("#city_err").focus();
                $("#city_err").css("color", "red");
            } else {
                $("#city_err").hide();
            }
            return isValid;
        });

        $("#sbilling_state").attr("maxlength", "45");
        $("#city_err").hide();
        $("#sbilling_state").keypress(function(e) {
            var keyCode = e.keyCode || e.which;
            $("#state_err").html("");
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[\s+A-Za-z]+$/;
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#state_err").show();
                $("#state_err").html("*only alphabets allowed");
                $("#state_err").focus();
                $("#state_err").css("color", "red");
            } else {
                $("#state_err").hide();
            }
            return isValid;
        });

        $("#sbilling_country").attr("maxlength", "56");
        $("#country_err").hide();
        $("#sbilling_country").keypress(function(e) {
            var keyCode = e.keyCode || e.which;
            $("#country_err").html("");
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[\s+A-Za-z]+$/;
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#country_err").show();
                $("#country_err").html("*only alphabets allowed");
                $("#country_err").focus();
                $("#country_err").css("color", "red");
            } else {
                $("#country_err").hide();
            }
            return isValid;
        });

        $("#sbilling_address").attr("maxlength", "56");
        // $("#address_err").hide();
        // $("#billing_address").keypress(function(e) {
        //     var keyCode = e.keyCode || e.which;
        //     $("#address_err").html("");
        //     //Regex for Valid Characters i.e. Alphabets.
        //     var regex = /^[0-9a-zA-Z]+$/;
        //     //Validate TextBox value against the Regex.
        //     var isValid = regex.test(String.fromCharCode(keyCode));
        //     if (!isValid) {
        //         $("#address_err").show();
        //         $("#address_err").html("*only alphabets allowed");
        //         $("#address_err").focus();
        //         $("#address_err").css("color", "red");
        //     } else {
        //         $("#address_err").hide();
        //     }
        //     return isValid;
        // });

        $("#sbilling_email").attr("maxlength", "62");
        $( "#shipping_checkout" ).validate({
            rules: {
                sbilling_email: {
                required: true,
                email: true
                }
            }
        });
    </script>
@endsection