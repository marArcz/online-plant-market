<?php include './shared/classes/ProductItem.php' ?>
<?php session_start() ?>
<?php include './shared/loadUserSession.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <?php include './shared/head.php' ?>
    <style>
        .quantity-box {
            width: 150px;
        }
    </style>
</head>

<body>
    <?php $active_page = "cart" ?>
    <?php include './shared/header_nav.php' ?>
    <main>
        <section class="cart-section mt-4">
            <div class="container">
                <p class="text-center text-success fs-4">My Shopping Cart</p>
                <div class="row">
                    <div class="col-md">
                        <div class="card rounded-1 shadow border-0 border-top border-success">
                            <div class="card-body p-4">
                                <div class="table-responsive-md">
                                    <table class="table align-middle">
                                        <thead>
                                            <th class="fw-light text-secondary">Product</th>
                                            <th class="fw-light text-secondary">Quantity</th>
                                            <th class="fw-light text-secondary">Price</th>
                                            <th class="fw-light text-secondary">Remove</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $subtotal = 0;


                                            $query = mysqli_query($con, "SELECT * FROM cart WHERE user_id = $user_id");
                                            $items_count = mysqli_query($con, "SELECT SUM(quantity) FROM cart WHERE user_id = $user_id")->fetch_array()[0];

                                            while ($row = $query->fetch_assoc()) {
                                            ?>
                                                <tr id="cart-row-<?php echo $row['id'] ?>">

                                                    <td>
                                                        <div class="row gx-2 align-items-center">
                                                            <div class="col-md-4">
                                                                <img src="<?php echo $row['product_photo'] ?>" class="img-fluid img-thumbnail" alt="">
                                                            </div>
                                                            <div class="col-md">
                                                                <p class="my-1"><?php echo $row['product_name'] ?></p>
                                                                <p class="my-1"><small>₱<?php echo $row['price'] ?></small></p>
                                                                <div class="badge border text-success">
                                                                    <?php echo $row['category_name'] ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="quantity-box">
                                                            <div class="d-flex">
                                                                <button class="btn btn-success rounded-0 increment" type="button">
                                                                    <i class=" bi bi-plus"></i>
                                                                </button>
                                                                <input data-row="#cart-row-<?php echo $row['id'] ?>" data-id="<?php echo $row['id'] ?>" type="number" readonly min="1" value="<?php echo $row['quantity'] ?>" class="form-control quantity-input rounded-0 text-center" name="quantity">
                                                                <button class="btn btn-light border rounded-0 decrement" type="button">
                                                                    <i class=" bi bi-dash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <?php
                                                        $subtotal += $price = $row['price'] * $row['quantity'];
                                                        ?>
                                                        <p class="my-1 text-success fw-bold ">
                                                            ₱ <span class="price"><?php echo $price ?></span>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <a href="remove-cart-item.php?id=<?php echo $row['id'] ?>" class="btn btn-light shadow-sm border rounded-0 remove-product" data-row="#cart-row-<?php echo $row['id'] ?>">
                                                            <i class="bi bi-x"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                                <?php
                                if ($query->num_rows == 0) {
                                ?>
                                    <div class="text-center">
                                        <p>You have no items in your cart.</p>
                                        <a href="products.php" class="link-success">
                                            <small>Shop Now</small>
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 h-100">
                        <div class="card rounded-1 border-0 shadow border-top border-success h-100">
                            <div class="card-body">
                                <p class="mb-3 text-secondary">Cart Summary</p>
                                <div class="d-flex mb-3">
                                    <p class="my-1">Items</p>
                                    <p class="my-1 ms-auto"><span class="items-count"><?php echo $items_count ?></span></p>
                                </div>
                                <form action="#">
                                    <div class="mb-3">
                                        <div class="d-flex">
                                            <p class="my-1">Subtotal</p>
                                            <p class="my-1 ms-auto text-success">₱<span class="subtotal"><?php echo $subtotal ?></span></p>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="" class="form-label text-secondary">Shipping</label>
                                        <select name="shipping" id="" class="form-select rounded-1">
                                            <option value="standard">
                                                <small>Standard Delivery - ₱50.00</small>
                                            </option>
                                        </select>
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <div class="d-flex">
                                            <p class="my-1 fw-bold">Total</p>
                                            <p class="my-1 fw-bold text-success ms-auto">₱<span class="total"><?php echo $subtotal + 50 ?></span></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include './shared/footer.php' ?>
    <?php include './shared/scripts.php' ?>
    <script>
        $(".increment").on("click", function(e) {
            let input = $(this).siblings('input')
            input[0].stepUp();
            let id = $(this).siblings('input').data('id');

            updateCart(id, input.val(), $(input.data('row')))
        })
        $(".decrement").on("click", function(e) {
            let input = $(this).siblings('input')
            if (input.val() > 1) {
                input[0].stepDown();
                let id = $(this).siblings('input').data('id');

                updateCart(id, input.val(), $(input.data('row')))
            }
        })

        function updateCart(id, quantity,row) {

            Notiflix.Loading.circle({
                backgroundColor: "rgba(50,50,50,0.6)"
            });

            $.ajax({
                url: "update-cart-item.php",
                method: "POST",
                data: {
                    id,
                    quantity
                },
                dataType: 'json',
                success: function(res) {
                    console.log('res: ', res)
                    Notiflix.Loading.remove(1000)

                    $(".total").html(Number(res.subtotal) + 50)
                    $(".subtotal").html(res.subtotal)
                    $(".items-count").html(res.num_of_items)

                    row.find(".price").html(res.cart.price * res.cart.quantity)
                },
                error: err => console.log('err: ', err)
            })
        }
    </script>
</body>

</html>