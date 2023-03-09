<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ's</title>
    <?php include './shared/head.php' ?>
</head>

<body>
    <?php include './shared/header_nav.php' ?>
    <main>
        <section class="py-4">
            <div class="container">
                <p class="fs-3 text-center text-success">FAQ's</p>
                <ul class="list-group list-group-flush">
                    <?php
                    $faq_list = [
                        "Shopping" => [
                            "Do your plants come in pots?" => "All plants come in standard plastic pots. If you wish to upgrade to a premium pot, it can be arranged right away.",
                            "How can I assure the plants are healthy?" => "Our store has a return policy of 3 days. Rest assured, the team makes sure that all plants released are healthy, well-rooted and established. Once proven unhealthy in the first 3 days, our team would gladly replace your plant without any additional costs.",
                            "Is there a minimum order purchase?" => "For our personal deliveries, we have minimum order at Php 500 excluding SF. If you wish to opt for a third-party courier, you may do so. But please be advised that our team won't be liable for any damages that may occur in transit.",
                            "How to place an order?" => [
                                "1) Choose your plant/s" => [
                                    "Php 500 minimum worth of order/s for personal deliveries.",
                                    "No minimum amount if the buyer will opt for a third-party courier.",
                                    "Online Plant Market won't be held liable to any damages that may occur in transit."
                                ],
                                "2) Select your add ons/pots all plants are already inclusive of our standard plastic pot
                                " => [],
                                "3) Fill up the necessary payment and delivery information on the checkout page and wait for the plants to arrive over the weekend!" => []
                            ],
                        ],
                        "Payment" => [
                            "Do you have discounts?"=>"Join our Facebook community to enjoy exclusive discounts for members only! Long time suki? Hit us up as well for loyalty discounts.",
                            "What is your mode of payment?"=>"We accept paymets through GCash, Online Bank transfers.",
                            "Do you accept COD?" => "Our team would like to limit the personal transactions during deliveries due to the pandemic so we highly encourage online payments. Although, we can accept COD on special occasions as long as you can present a valid ID"
                        ],
                        "Shipping" =>[
                            "When is the delivery?"=>"Either Tuesday/Friday. Once you've planted your order/s our team will send you the delivery schedule on a Monday/Thursday night after finalizing our delivery routes.",
                            "Can I have my plants picked up instead of having it delivered?"=>"Yes, pickups can be arranged personally or via third-party courier. Give us at least a day to prepare your orders and kindly wait for our go signal before booking!",
                            "Can you deliver my plants at this certain day and time?"=>"Our personal delivery works like Lazada/Shopee couriers wherein we plot our routes in the most convenient and feasible way. Therefore, for special/prioritized deliveries, weekday delivery will entail an additional fee of P250, while requesting a specific day and time on the weekend will be an additional P80 on top of the standard shipping rates.",
                            "Personal Delivery vs. Same Day Delivery"=>"Personal Delivery - Best for tall plants and big orders. Guaranteed 100% safe delivery right to your doorstep every Tuesdays or Fridays. Same Day Delivery - Best for small orders under 10 KG.",
                            
                        ],
                        "Others" => [
                            "What plant/s can you recommend for beginners?"=>"Golden Pothos, ZZ Plant, Fortune Plant, Lucky bamboo, Sansevieria and Aglaonema are beginner-friendly plants!",
                            "When should we water the plants?" => "Only water your indoor plants every once a week or once the top soil is dry.",
                            "Do you accept bulk orders?" => "Yes, we do. Let us know the details and we can send you a quotation! The more plants, the more discount!",
                            "Do you do business-to-business transactions?" => "Yes, we do! We can supply your establishment's plants, event giveaways, and more. Just message us!"
                        ]
                    ];

                    $i = 0;
                    foreach ($faq_list as $faq_title => $faqs) {
                    ?>
                        <li class="list-group-item mb-3">
                            <p class="fs-4 fw-bold"><?php echo $faq_title ?></p>
                            <div class="accordion accordion-flush" id="accordion-<?php echo $i ?>">
                                <?php
                                $x = 0;
                                foreach ($faqs as $key => $faq) {
                                ?>
                                    <div class="accordion-item collapsed ">
                                        <h2 class="accordion-header" id="heading-<?php echo $x ?>">
                                            <button class="accordion-button fw-bold text-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#heading-<?php echo $i ?>-collapse-<?php echo $x ?>" aria-expanded="<?php echo $x == 0 ? 'true' : 'false' ?>" aria-controls="heading-<?php echo $i ?>-collapse-<?php echo $x ?>">
                                                <?php echo $key ?>
                                            </button>
                                        </h2>
                                        <div id="heading-<?php echo $i ?>-collapse-<?php echo $x ?>" class="accordion-collapse collapse " aria-labelledby="heading-<?php echo $x ?>" data-bs-parent="#accordion-<?php echo $i ?>">
                                            <div class="accordion-body">
                                                <?php
                                                if (is_array($faq)) {

                                                ?>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <?php
                                                            foreach ($faq as $inner_key => $value) {
                                                            ?>
                                                                <p class="my-1"><small><?php echo $inner_key ?></small></p>

                                                                <ul class="lis-group list-group-flush">
                                                                    <?php
                                                                    foreach ($value as $inner_value) {
                                                                    ?>
                                                                        <li class="list-group-item">
                                                                            <?php echo $inner_value ?>
                                                                        </li>
                                                                    <?php
                                                                    }
                                                                    ?>

                                                                </ul>
                                                        </li>

                                                    <?php
                                                            }
                                                    ?>
                                                    </ul>
                                                <?php
                                                } else {
                                                ?>
                                                    <p class="my-1"><small><?php echo $faq ?></small></p>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                    $x++;
                                }
                                ?>

                            </div>
                        </li>
                    <?php
                        $i++;
                    }
                    ?>

                </ul>
            </div>
        </section>
    </main>
    <?php include './shared/footer.php' ?>
    <?php include './shared/scripts.php' ?>
</body>

</html>