<?php include ROOT.'/views/layouts/header.php'; ?>

<div class="row col-md-12">
    <div class="col-md-3">
        <div class="category main-info">
            <ul class="ul-category" type="none">
                <?php foreach ($categories as $categoryItem): ?>
                    <li>
                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                            <?php echo $categoryItem['name']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div class="news main-info">
            <section class="row top-product">
                <?php foreach ($categoryProducts as $product): ?>
                    <div class="latest-product">
                        <div>
                            <a href="<?php echo $product['id']; ?>">
                                <img src="../../template/img/example.jpg" alt="" class="img-fluid">
                            </a>
                            <h2><?php echo $product['price']; ?>&#164;</h2>
                            <p>
                                <a href="<?php echo $product['id']; ?>">
                                    <?php echo $product['name']; ?>
                                </a>
                            </p>
                        </div>
                        <div class="m-new">
                            <?php if($product['is_new']): ?>
                                <img src="../../template/img/new.png" alt="new" class="img-fluid size-img-new">
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
        </div>
    </div>
</div>

<?php include ROOT.'/views/layouts/footer.php'; ?>
