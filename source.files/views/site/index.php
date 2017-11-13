<?php include ROOT.'/views/layouts/header.php'; ?>

    <main>
        <div class="category main-info">
            <ul class="ul-category" type="none">
                <?php foreach ($categories as $categoryItem): ?>
                    <li>
                        <h4>
                            <a href="/category/<?php echo $categoryItem['id']; ?>">
                                <?php echo $categoryItem['name']; ?>
                            </a>
                        </h4>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="news main-info">
            <section>
                <?php foreach ($latestProducts as $product): ?>
                <div class="latest-product">
                    <div>
                        <img src="../../template/img/example.jpg" alt="">
                        <h2><?php echo $product['price']; ?></h2>
                        <p>
                            <a href="<?php echo $product['id']; ?>">
                                <?php echo $product['name']; ?>
                            </a>
                        </p>
                    </div>
                    <div class="m-new">
                    <?php if($product['is_new']): ?>
                        <img src="../../template/img/new.png" alt="new" >
                    <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </section>
        </div>
    </main>
<?php include ROOT.'/views/layouts/footer.php'; ?>
