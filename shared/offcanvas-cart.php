<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-cart" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="text-center mb-3">
            <img src="" alt="" class="img-fluid product-image img-thumbnail">
        </div>
        <p class="name fw-bold fs-5"></p>
        <div class="badge text-bg-white border text-success"></div>
        <p class="price mb-3"></p>

        <form action="add-to-cart.php" method="post">
            <input type="hidden" name="product_id" class="product-id">
            <div class="mb-3 text-center">
                <label for="" class="form-label text-secondary fw-bold">Quantity</label>
                <input type="number" class="form-control text-center" name="quantity" value="1" min="1">
            </div>

            <button class="btn btn-success col-12" type="submit">Add to cart</button>
        </form>
    </div>
</div>