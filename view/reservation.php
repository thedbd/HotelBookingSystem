<?php
$rid = $_GET['rid'];
$room = getAccomodation($rid);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('input:checkbox').click(function() {
        $('input:checkbox').not(this).prop('checked', false);
    });
});
</script>
<div class="container ">
    <h3 class="text-center mt-5 ">Reservation</h3>
    <p class="text-center "> Enter your details</p>
    <hr width="300px " style="border:1px solid red; ">
    <div class="row mt-5">
        <div class="col-md-8 col-sm-12">
            <h4 class="text-center mb-3"><b>Traveller Information</b></h4>


            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="fname" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="lname" placeholder="">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" id="emailId" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Confirm Email</label>
                        <input type="email" class="form-control" id="emailId" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <div class="contactInputBox">
                            <div class="contactInputBoxLeft"><label for="mCode" class="selectWraper"><select id="mCode"
                                        name="mCode" class="countryCode">
                                        <option hidden="" value="+91">+91</option>
                                        <option value="+93">Afghanistan(+93)</option>
                                        <option value="+355">Albania(+355)</option>
                                        <option value="+213">Algeria(+213)</option>
                                        <option value="+1684">American Samoa(+1684)</option>
                                        <option value="+376">Andorra(+376)</option>
                                        <option value="+244">Angola(+244)</option>
                                        <option value="+1264">Anguilla(+1264)</option>
                                        <option value="+672">Antarctica(+672)</option>
                                        <option value="+1268">Antigua and Barbuda(+1268)</option>
                                        <option value="+54">Argentina(+54)</option>
                                        <option value="+374">Armenia(+374)</option>
                                        <option value="+297">Aruba(+297)</option>
                                        <option value="+61">Australia(+61)</option>
                                        <option value="+43">Austria(+43)</option>
                                        <option value="+994">Azerbaijan(+994)</option>
                                        <option value="+1242">Bahamas(+1242)</option>
                                        <option value="+973">Bahrain(+973)</option>
                                        <option value="+880">Bangladesh(+880)</option>
                                        <option value="+1246">Barbados(+1246)</option>
                                        <option value="+375">Belarus(+375)</option>
                                        <option value="+32">Belgium(+32)</option>
                                        <option value="+501">Belize(+501)</option>
                                        <option value="+229">Benin(+229)</option>
                                        <option value="+1441">Bermuda(+1441)</option>
                                        <option value="+975">Bhutan(+975)</option>
                                        <option value="+591">Bolivia(+591)</option>
                                        <option value="+387">Bosnia and Herzegovina(+387)</option>
                                        <option value="+267">Botswana(+267)</option>
                                        <option value="+55">Brazil(+55)</option>
                                        <option value="+246">British Indian Ocean Territory(+246)</option>
                                        <option value="+1284">British Virgin Islands(+1284)</option>
                                        <option value="+673">Brunei(+673)</option>
                                        <option value="+359">Bulgaria(+359)</option>
                                        <option value="+226">Burkina Faso(+226)</option>
                                        <option value="+257">Burundi(+257)</option>
                                        <option value="+855">Cambodia(+855)</option>
                                        <option value="+237">Cameroon(+237)</option>
                                        <option value="+1">Canada(+1)</option>
                                        <option value="+238">Cape Verde(+238)</option>
                                        <option value="+1345">Cayman Islands(+1345)</option>
                                        <option value="+236">Central African Republic(+236)</option>
                                        <option value="+235">Chad(+235)</option>
                                        <option value="+56">Chile(+56)</option>
                                        <option value="+86">China(+86)</option>
                                        <option value="+61">Christmas Island(+61)</option>
                                        <option value="+61">Cocos Islands(+61)</option>
                                        <option value="+57">Colombia(+57)</option>
                                        <option value="+269">Comoros(+269)</option>
                                        <option value="+682">Cook Islands(+682)</option>
                                        <option value="+506">Costa Rica(+506)</option>
                                        <option value="+385">Croatia(+385)</option>
                                        <option value="+599">Curacao(+599)</option>
                                        <option value="+357">Cyprus(+357)</option>
                                        <option value="+420">Czech Republic(+420)</option>
                                        <option value="+24">Democratic Republic of the Congo(+24)</option>
                                        <option value="+45">Denmark(+45)</option>
                                        <option value="+253">Djibouti(+253)</option>
                                        <option value="+1767">Dominica(+1767)</option>
                                        <option value="+18">Dominican Republic(+18)</option>
                                        <option value="+670">East Timor(+670)</option>
                                        <option value="+593">Ecuador(+593)</option>
                                        <option value="+20">Egypt(+20)</option>
                                        <option value="+503">El Salvador(+503)</option>
                                        <option value="+240">Equatorial Guinea(+240)</option>
                                        <option value="+291">Eritrea(+291)</option>
                                        <option value="+372">Estonia(+372)</option>
                                        <option value="+251">Ethiopia(+251)</option>
                                        <option value="+500">Falkland Islands(+500)</option>
                                        <option value="+298">Faroe Islands(+298)</option>
                                        <option value="+679">Fiji(+679)</option>
                                        <option value="+358">Finland(+358)</option>
                                        <option value="+33">France(+33)</option>
                                        <option value="+689">French Polynesia(+689)</option>
                                        <option value="+241">Gabon(+241)</option>
                                        <option value="+220">Gambia(+220)</option>
                                        <option value="+995">Georgia(+995)</option>
                                        <option value="+49">Germany(+49)</option>
                                        <option value="+233">Ghana(+233)</option>
                                        <option value="+350">Gibraltar(+350)</option>
                                        <option value="+30">Greece(+30)</option>
                                        <option value="+299">Greenland(+299)</option>
                                        <option value="+1473">Grenada(+1473)</option>
                                        <option value="+1671">Guam(+1671)</option>
                                        <option value="+502">Guatemala(+502)</option>
                                        <option value="+441481">Guernsey(+441481)</option>
                                        <option value="+224">Guinea(+224)</option>
                                        <option value="+245">Guinea-Bissau(+245)</option>
                                        <option value="+592">Guyana(+592)</option>
                                        <option value="+509">Haiti(+509)</option>
                                        <option value="+504">Honduras(+504)</option>
                                        <option value="+852">Hong Kong(+852)</option>
                                        <option value="+36">Hungary(+36)</option>
                                        <option value="+354">Iceland(+354)</option>
                                        <option value="+91">India(+91)</option>
                                        <option value="+62">Indonesia(+62)</option>
                                        <option value="+964">Iraq(+964)</option>
                                        <option value="+353">Ireland(+353)</option>
                                        <option value="+441624">Isle of Man(+441624)</option>
                                        <option value="+972">Israel(+972)</option>
                                        <option value="+39">Italy(+39)</option>
                                        <option value="+225">Ivory Coast(+225)</option>
                                        <option value="+1876">Jamaica(+1876)</option>
                                        <option value="+81">Japan(+81)</option>
                                        <option value="+441534">Jersey(+441534)</option>
                                        <option value="+962">Jordan(+962)</option>
                                        <option value="+7">Kazakhstan(+7)</option>
                                        <option value="+254">Kenya(+254)</option>
                                        <option value="+686">Kiribati(+686)</option>
                                        <option value="+383">Kosovo(+383)</option>
                                        <option value="+965">Kuwait(+965)</option>
                                        <option value="+996">Kyrgyzstan(+996)</option>
                                        <option value="+856">Laos(+856)</option>
                                        <option value="+371">Latvia(+371)</option>
                                        <option value="+266">Lesotho(+266)</option>
                                        <option value="+231">Liberia(+231)</option>
                                        <option value="+423">Liechtenstein(+423)</option>
                                        <option value="+370">Lithuania(+370)</option>
                                        <option value="+352">Luxembourg(+352)</option>
                                        <option value="+853">Macau(+853)</option>
                                        <option value="+389">Macedonia(+389)</option>
                                        <option value="+261">Madagascar(+261)</option>
                                        <option value="+265">Malawi(+265)</option>
                                        <option value="+60">Malaysia(+60)</option>
                                        <option value="+960">Maldives(+960)</option>
                                        <option value="+223">Mali(+223)</option>
                                        <option value="+356">Malta(+356)</option>
                                        <option value="+692">Marshall Islands(+692)</option>
                                        <option value="+222">Mauritania(+222)</option>
                                        <option value="+230">Mauritius(+230)</option>
                                        <option value="+262">Mayotte(+262)</option>
                                        <option value="+52">Mexico(+52)</option>
                                        <option value="+691">Micronesia(+691)</option>
                                        <option value="+373">Moldova(+373)</option>
                                        <option value="+377">Monaco(+377)</option>
                                        <option value="+976">Mongolia(+976)</option>
                                        <option value="+382">Montenegro(+382)</option>
                                        <option value="+1664">Montserrat(+1664)</option>
                                        <option value="+212">Morocco(+212)</option>
                                        <option value="+258">Mozambique(+258)</option>
                                        <option value="+95">Myanmar(+95)</option>
                                        <option value="+264">Namibia(+264)</option>
                                        <option value="+674">Nauru(+674)</option>
                                        <option value="+977">Nepal(+977)</option>
                                        <option value="+31">Netherlands(+31)</option>
                                        <option value="+599">Netherlands Antilles(+599)</option>
                                        <option value="+687">New Caledonia(+687)</option>
                                        <option value="+64">New Zealand(+64)</option>
                                        <option value="+505">Nicaragua(+505)</option>
                                        <option value="+227">Niger(+227)</option>
                                        <option value="+234">Nigeria(+234)</option>
                                        <option value="+683">Niue(+683)</option>
                                        <option value="+1670">Northern Mariana Islands(+1670)</option>
                                        <option value="+47">Norway(+47)</option>
                                        <option value="+968">Oman(+968)</option>
                                        <option value="+92">Pakistan(+92)</option>
                                        <option value="+680">Palau(+680)</option>
                                        <option value="+970">Palestine(+970)</option>
                                        <option value="+507">Panama(+507)</option>
                                        <option value="+675">Papua New Guinea(+675)</option>
                                        <option value="+595">Paraguay(+595)</option>
                                        <option value="+51">Peru(+51)</option>
                                        <option value="+63">Philippines(+63)</option>
                                        <option value="+64">Pitcairn(+64)</option>
                                        <option value="+48">Poland(+48)</option>
                                        <option value="+351">Portugal(+351)</option>
                                        <option value="+1">Puerto Rico(+1)</option>
                                        <option value="+974">Qatar(+974)</option>
                                        <option value="+262">Reunion(+262)</option>
                                        <option value="+40">Romania(+40)</option>
                                        <option value="+7">Russia(+7)</option>
                                        <option value="+250">Rwanda(+250)</option>
                                        <option value="+590">Saint Barthelemy(+590)</option>
                                        <option value="+290">Saint Helena(+290)</option>
                                        <option value="+1869">Saint Kitts and Nevis(+1869)</option>
                                        <option value="+1758">Saint Lucia(+1758)</option>
                                        <option value="+590">Saint Martin(+590)</option>
                                        <option value="+508">Saint Pierre and Miquelon(+508)</option>
                                        <option value="+1784">Saint Vincent and the Grenadines(+1784)</option>
                                        <option value="+685">Samoa(+685)</option>
                                        <option value="+378">San Marino(+378)</option>
                                        <option value="+239">Sao Tome and Principe(+239)</option>
                                        <option value="+966">Saudi Arabia(+966)</option>
                                        <option value="+221">Senegal(+221)</option>
                                        <option value="+381">Serbia(+381)</option>
                                        <option value="+248">Seychelles(+248)</option>
                                        <option value="+232">Sierra Leone(+232)</option>
                                        <option value="+65">Singapore(+65)</option>
                                        <option value="+1721">Sint Maarten(+1721)</option>
                                        <option value="+421">Slovakia(+421)</option>
                                        <option value="+386">Slovenia(+386)</option>
                                        <option value="+677">Solomon Islands(+677)</option>
                                        <option value="+252">Somalia(+252)</option>
                                        <option value="+82">South Korea(+82)</option>
                                        <option value="+211">South Sudan(+211)</option>
                                        <option value="+94">Sri Lanka(+94)</option>
                                        <option value="+249">Sudan(+249)</option>
                                        <option value="+47">Svalbard and Jan Mayen(+47)</option>
                                        <option value="+268">Swaziland(+268)</option>
                                        <option value="+46">Sweden(+46)</option>
                                        <option value="+41">Switzerland(+41)</option>
                                        <option value="+963">Syria(+963)</option>
                                        <option value="+992">Tajikistan(+992)</option>
                                        <option value="+255">Tanzania(+255)</option>
                                        <option value="+66">Thailand(+66)</option>
                                        <option value="+228">Togo(+228)</option>
                                        <option value="+690">Tokelau(+690)</option>
                                        <option value="+676">Tonga(+676)</option>
                                        <option value="+1868">Trinidad and Tobago(+1868)</option>
                                        <option value="+216">Tunisia(+216)</option>
                                        <option value="+90">Turkey(+90)</option>
                                        <option value="+993">Turkmenistan(+993)</option>
                                        <option value="+1649">Turks and Caicos Islands(+1649)</option>
                                        <option value="+688">Tuvalu(+688)</option>
                                        <option value="+1340">U.S. Virgin Islands(+1340)</option>
                                        <option value="+256">Uganda(+256)</option>
                                        <option value="+380">Ukraine(+380)</option>
                                        <option value="+971">United Arab Emirates(+971)</option>
                                        <option value="+44">United Kingdom(+44)</option>
                                        <option value="+1">United States(+1)</option>
                                        <option value="+598">Uruguay(+598)</option>
                                        <option value="+998">Uzbekistan(+998)</option>
                                        <option value="+678">Vanuatu(+678)</option>
                                        <option value="+379">Vatican(+379)</option>
                                        <option value="+58">Venezuela(+58)</option>
                                        <option value="+84">Vietnam(+84)</option>
                                        <option value="+681">Wallis and Futuna(+681)</option>
                                        <option value="+212">Western Sahara(+212)</option>
                                        <option value="+967">Yemen(+967)</option>
                                        <option value="+260">Zambia(+260)</option>
                                        <option value="+263">Zimbabwe(+263)</option>
                                    </select></label></div>
                            <div class="flexOne appendLeft10"><input id="mNo" name="mNo" pattern="\d*"
                                    class="txtInputContactInfo" value=""></div>
                        </div>
                        <br>
                        <label>Who are you booking for?</label><br>
                        <input type="radio" name="bookingFor" id="bookingFor"> <i>I am the main guest</i><br>
                        <input type="radio" name="bookingFor" id="bookingFor"><i> Booking is for someone else</i>
                    </div>
                    <div class="form-group col-md-6">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Why Sign up or Login
                                </h5>

                                <p class="card-text">
                                    <ul class="">
                                        <li>Manage your bookings from one
                                            place</li>
                                        <li>Redeem Wallet Cash &amp; get
                                            additional discount(s)!</li>
                                        <li>Book Faster - we’ll save &amp;
                                            pre-enter your details</li>
                                    </ul>
                                </p>
                                <a href="#" class="card-link">Sign Up</a>
                                <a href="?p=login" class="card-link">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" row ">
                    <div class=" col-md-12 col-sm-12 ">
                        <div class=" form-row ">
                            <div class=" form-group col-md-12 ">
                                <label>Pay With</label> &nbsp &nbsp
                                <input type="checkbox" name="ptype"> Cash On Arrival &nbsp &nbsp
                                <input type="checkbox" name="ptype" id="payment-button"> <img
                                    src=" assets/images/khalti.png " height=" 40px " width=" 100px ">
                                <img src=" assets/images/esewa.png " height=" 35px " width=" 100px "> &nbsp &nbsp
                                &nbsp &nbsp
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
            </form>
        </div>
        <div class="col-md-4 col-sm-12">
            <h3 class="text-center">Review Order Details</h3>
            <div class="card">
                <img src="assets/images/image2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Grand Deluxe Room</h5>
                    <p><span class="badge badge-dark">4.5 254 Reviews</p>
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
    <!-- button id="payment-button">Pay with Khalti</button>
     Place this where you need payment button -->
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