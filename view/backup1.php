<?php
require_once "dbcontroller.php";
$db_handle = new DBController();

if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["quantity"])) {
                $productByCode = $db_handle->runQuery("SELECT * FROM tbl_rooms WHERE rid='" . $_GET["id"] . "'");
                $itemArray = array($productByCode[0]["rid"] => array('name' => $productByCode[0]["rname"], 'rid' => $productByCode[0]["rid"], 'adult' => $productByCode[0]["adult"], 'child' => $productByCode[0]["child"], 'quantity' => $_POST["quantity"], 'capacity' => $productByCode[0]["capacity"], 'price' => $productByCode[0]["rprice"]));
                if ($_POST["quantity"] <= $productByCode[0]['capacity']) {
                    $cap = $productByCode[0]['capacity'] - $_POST["quantity"];
                    $roomID = $productByCode[0]['rid'];
                    updateRoomCapacity($cap, $roomID);

                    if (!empty($_SESSION["cart_item"])) {
                        if (in_array($productByCode[0]["rid"], array_keys($_SESSION["cart_item"]))) {
                            foreach ($_SESSION["cart_item"] as $k => $v) {
                                if ($productByCode[0]["rid"] == $k) {
                                    if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                                        $_SESSION["cart_item"][$k]["quantity"] = 0;
                                    }
                                    $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                                }
                            }
                        } else {
                            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                        }
                    } else {
                        $_SESSION["cart_item"] = $itemArray;
                    }
                } else {
                    echo "<script>alert('please select less than available room');</script>";
                }
            }
            break;
        case "remove":
            if (!empty($_SESSION["cart_item"])) {
                $productByCode = $db_handle->runQuery("SELECT * FROM tbl_rooms WHERE rid='" . $_GET["id"] . "'");

                $cap = $productByCode[0]['capacity'] + $_GET['q'];
                $roomID = $productByCode[0]['rid'];
                updateRoomCapacity($cap, $roomID);

                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($_GET["id"] == $_SESSION["cart_item"][$k]['rid']) {
                        unset($_SESSION["cart_item"][$k]);
                    }

                    if (empty($_SESSION["cart_item"])) {
                        unset($_SESSION["cart_item"]);
                    }

                }
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
}
?>


<div class="container">



    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <form>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Check In</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Check Out</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="date" name="checkin" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="date" name="checkout" />
                                    </div>
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-warning">Check Availability</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header text-center">
                    Booking Summary
                </div>
                <div class="card-body">
                    <div class="text-right"> <a id="btnEmpty" href="?p=selectRoom&action=empty"><button
                                class="btn btn-outline-danger">Empty Cart</button></a></div>
                    <?php
if (isset($_SESSION["cart_item"])) {
    $total_quantity = 0;
    $total_price = 0;
    ?>
                    <table class="table" cellpadding="10" cellspacing="1">
                        <tbody>
                            <tr>
                                <th style="text-align:left;">Room Name</th>
                                <th style="text-align:right;" width="5%">Adult</th>
                                <th style="text-align:right;" width="15%">Child</th>
                                <th style="text-align:right;" width="15%">No of Rooms</th>
                                <th style="text-align:right;" width="15%">Price</th>
                                <th style="text-align:right;" width="15%">Total</th>
                                <th style="text-align:center;" width="5%">Remove</th>
                            </tr>
                            <?php
foreach ($_SESSION["cart_item"] as $item) {
        $item_price = $item["quantity"] * $item["price"];
        ?>
                            <tr>
                                <td><?php echo $item["name"]; ?>
                                </td>
                                <td style="text-align:right;"><?php echo $item["adult"]; ?>
                                </td>
                                <td style="text-align:right;"><?php echo $item["child"]; ?>
                                </td>
                                <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                                <td style="text-align:right;"><?php echo "$ " . $item["price"]; ?></td>
                                <td style="text-align:right;"><?php echo "$ " . number_format($item_price, 2); ?>
                                </td>
                                <td style="text-align:center;"><a
                                        href="?p=selectRoom&action=remove&id=<?php echo $item["rid"]; ?>&q=<?php echo $item["quantity"]; ?>"
                                        class="btnRemoveAction"> <i class="fa fa-trash"></i></a></td>
                            </tr>
                            <?php
$total_quantity += $item["quantity"];
        $total_price += ($item["price"] * $item["quantity"]);
    }
    ?>

                            <tr>
                                <td></td>
                                <td colspan="2" align="right">Total:</td>
                                <td align="right"><?php echo $total_quantity; ?></td>
                                <td align="right" colspan="2">
                                    <strong><?php echo "$ " . number_format($total_price, 2); ?></strong>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-right"> <a id="btnEmpty" href="?p=selectRoom&action=empty"><button
                                class="btn btn-prime" align="right">Continue</button></a></div>
                    <?php
} else {
    ?>
                    <p class="card-text">No Room(s)
                        Selected</p>
                    <?php
}
?>
                </div>
            </div>
            <div class="row">


                <div class="col-sm-12">

                    <?php
$room = selectRoom();
if ($room) {
    foreach ($room as $result) {
        ?><form action="?p=selectRoom&action=add&id=<?php echo $result['rid']; ?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="Admin/<?php echo $result['image']; ?>" class="card-img-top"
                                                    alt="...">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-8">

                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $result['rname']; ?></h4>
                                                <div class="row">
                                                    <div class="col-sm-6 ">
                                                        <h5 class="card-title">Total Room Available:
                                                            <?php echo $result['capacity']; ?>
                                                        </h5>
                                                        </h5>
                                                        <h5 class="card-title">Room Capacity:
                                                            <?php echo $result['adult']; ?> <i class="fa fa-male"></i>
                                                            Adult &nbsp;&nbsp; <?php echo $result['child']; ?> <i
                                                                class="fa fa-baby"></i> Child
                                                        </h5>
                                                        <h6 class="card-title">Room Rates Inclusive of Tax </h6>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h3 class="card-title"> <?php echo "$ " . $result['rprice']; ?>
                                                        </h3>
                                                        <h6 class="card-title"> price for 1 night</h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="#">Room Info</a>&nbsp;&nbsp;<span>.</span>&nbsp;&nbsp;<a
                                                    href="#">Enquire</a>&nbsp;&nbsp;
                                                <a class="tipso-tooltip tipso_style promo-code-icon" data-tipso
                                                    data-tipso-tutle="SPECIAL OFFERS">
                                                    <i class="fa fa-tag"></i>
                                                    <button type="button" class="btn btn-outline-danger">PROMO
                                                        OFFER</button>&nbsp;&nbsp;&nbsp;
                                                </a>
                                                <input type="text" class="product-quantity" name="quantity" value="1"
                                                    size="2" />
                                                <input type="submit" value="Add Room" class="btn btn-warning">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                    <?php }} else {
    echo "No Rooms Are Available";
}
?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>