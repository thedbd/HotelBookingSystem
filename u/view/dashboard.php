<div class="row mt-5">
    <div class="col-md-2 mb-4 pl-5 pr-2 col-sm-12">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                href="#list-home" role="tab" aria-controls="home"><i class="fas fa-ticket-alt fa-fw"> </i> My
                Bookings</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                href="#list-profile" role="tab" aria-controls="profil"><i class="fas fa-file-alt fa-fw"></i> New
                Booking</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                href="#list-messages" role="tab" aria-controls="messages"><i class="fas fa-skiing fa-fw"> </i>
                Activity</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                href="?p=profile" role="tab" aria-controls="settings"><i class="fas fa-user fa-fw"></i>
                Profile</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                href="#list-messages" role="tab" aria-controls="messages"><i class="fas fa-dollar-sign fa-fw"></i>
                Payments</a>
            <a class="list-group-item list-group-item-action"
                href="?p=logout" onclick="return confirm('Do you want to logout?');"><i class="fas fa-arrow-right fa-fw"></i>
                Logout</a>
        </div>
    </div>
    <div class="col-md-10">
        <div class="db-cent-1">
            <p>Hi <?php echo $_SESSION['guest']['guest_name']; ?></p>
            <h4>Welcome to your dashboard</h4>
        </div>
        <div class="db-title pl-5 pt-4">
            <h3><i class="fas fa-ticket-alt fa-fw"></i> My Bookings</h3>
            <p>There are many variations of bookings</p>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">City</th>
                    <th scope="col">Arrival</th>
                    <th scope="col">Departure</th>
                    <th scope="col">Members</th>
                    <th scope="col">Approved By</th>
                    <th scope="col">Payment</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>David</td>
                    <td>9823309743</td>
                    <td><span class="db-tab-hi">Kathmandu,</span>Nepal</td>
                    <td>12may</td>
                    <td>20may</td>
                    <td>12</td>
                    <td>David</td>
                    <td><a href="#" class="badge badge-success">Success</a>
                    </td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td>David</td>
                    <td>9823309743</td>
                    <td><span class="db-tab-hi">Kathmandu,</span>Nepal</td>
                    <td>12may</td>
                    <td>20may</td>
                    <td>12</td>
                    <td>David</td>
                    <td><a href="#" class="badge badge-info">Pending</a>
                    </td>
                </tr>

                <tr>
                    <th scope="row">3</th>
                    <td>David</td>
                    <td>9823309743</td>
                    <td><span class="db-tab-hi">Kathmandu,</span>Nepal</td>
                    <td>12may</td>
                    <td>20may</td>
                    <td>12</td>
                    <td>David</td>
                    <td><a href="#" class="badge badge-success">Success</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
</div>
<div class="hom-footer-section">
    <div class="container">
        <div class="row">
            <div class="foot-com foot-1 col-md-3 col-sm-3">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook fa-fw" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <div class="foot-2 col-md-3 col-sm-3">
                <a class="float-left">Phone: (+977) 9823309743</a>
            </div>
            <div class="foot-4 col-md-3 col-sm-3">
                <a href="" class="float-right"><img src="payment.png" alt="">
                </a>
            </div>

            <div class=" foot-3 col-md-3 col-sm-3">
                <a class="btn-prime btn float-right" href="">room reservation</a> </div>
        </div>
    </div>
</div>
<footer class="mt-5">
    <!--footer starts here-->
    <div class="upper-footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <label>We Accept</label> &nbsp &nbsp
                    <img src="assets/images/esewa.png " height="35px " width="100px "> &nbsp &nbsp
                    <img src="assets/images/khalti.png " height="40px " width="100px "> &nbsp &nbsp
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <p>&copy; 2019 Hotel Something. All rights reserved</p>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>