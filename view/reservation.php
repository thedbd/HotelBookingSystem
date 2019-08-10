<?php
$rid = $_GET['rid'];
$room = getAccomodation($rid);
?>
<div class="container ">
    <h3 class="text-center mt-5 ">Reservation</h3>
    <p class="text-center "> Enter your details</p>
    <hr width="300px " style="border:1px solid red; ">
    <div class="row mt-5">
        <div class="col-md-8 col-sm-12">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="fname" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="password" class="form-control" id="lname" placeholder="Last Name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="emailId" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="password" class="form-control" id="phone" placeholder="Phone number">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="adate" placeholder="Arrival Date">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="ddate" placeholder="Departure Date">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="adults" placeholder="Adults">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="children" placeholder="children">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="infants" placeholder="infants">
                    </div>
                </div>

            </form>
        </div>
        <div class="col-md-4 col-sm-12">
            <h3 class="text-center">Selected Package</h3>
            <div class="card">
                <img src="assets/images/image2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Grand Deluxe Room</h5>
                    <p><span class="badge badge-dark">4.5</span> 254 Reviews</p>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <ul>
                                <li>Air Condition</li>
                                <li>Car Parking</li>
                                <li>Swimming Pool</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <ul>
                                <li>Restaurant &amp; Bar</li>
                                <li>Vehicle Rental</li>
                                <li>Complementary Meal</li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="btn btn-prime">Book now from $199</a>
                </div>
            </div>
        </div>



        <div class=" row ">
            <div class=" col-md-12 col-sm-12 ">
                <div class=" form-row ">
                    <div class=" form-group col-md-12 ">
                        <label>Pay With</label> &nbsp &nbsp
                        <img src=" assets/images/esewa.png " height=" 35px " width=" 100px "> &nbsp &nbsp
                        <img src=" assets/images/khalti.png " height=" 40px " width=" 100px "> &nbsp &nbsp
                        <img src=" assets/images/ime.png " height=" 40px " width=" 100px ">
                    </div>
                </div>
                <div class=" form-row ">
                    <div class=" form-group ">
                        <input type="submit" class="btn btn-prime" value="Reserve Now" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" row mt-5 ">
        <div class=" col-md-8 col-sm-12 ">
            <h3>How to make Reservation ?</h3>
            <ol type=" 1 ">
                <li>Call as far ahead of time as possible</li>
                <li>Schedule an early or late dinner if availability is limited</li>
                <li>Be as courteous as possible when booking a reservation. </li>
                <li>Visit the restaurant in person</li>
                <li>Call ahead or cancel if you are running late</li>
                <li>Book a reservation online if possible</li>
            </ol>
        </div>

        <div class=" col-md-4 col-sm-12 ">
            <h3>Reservation Support</h3>

            <div class=" info_item ">
                <i class=" fas fa-home fa-fw "></i>
                <h6>Gaindakot-2, Nawalpur</h6>
                <p>Oxford Chowk</p>
            </div>
            <div class=" info_item ">
                <i class=" fas fa-phone fa-fw "></i>
                <h6><a href=" # ">+977 9812345678</a></h6>
                <p>Mon to Fri 9am to 6pm</p>
            </div>
            <div class=" info_item ">
                <i class=" fas fa-envelope "></i>
                <h6><a href=" # ">support@hotel.com</a></h6>
                <p>Send us your query anytime!</p>
            </div>

        </div>
    </div>

</div>
</div>
<html>

<head>
    <script src="https://khalti.com/static/khalti-checkout.js"></script>
    <script src="view/khalti-checkout.js"></script>
</head>

<body>
    ...
    <!-- Place this where you need payment button -->
    <button id="payment-button">Pay with Khalti</button>
    <!-- Place this where you need payment button -->
    <!-- Paste this code anywhere in you body tag -->
    <script>
    var config = {
        // replace the publicKey with yours
        "publicKey": "test_public_key_540911696ef74dafa941355364e6b95d",
        "productIdentity": "1234567890",
        "productName": "Dragon",
        "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
        "eventHandler": {
            onSuccess(payload) {
                // hit merchant api for initiating verfication
                console.log(payload);
            },
            onError(error) {
                console.log(error);
            },
            onClose() {
                console.log('widget is closing');
            }
        }
    };

    var checkout = new KhaltiCheckout(config);
    var btn = document.getElementById("payment-button");
    btn.onclick = function() {
        checkout.show({
            amount: 1000
        });
    }
    </script>
    <!-- Paste this code anywhere in you body tag -->
    ...
</body>

</html>