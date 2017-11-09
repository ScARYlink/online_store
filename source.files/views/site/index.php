<?php include ROOT.'/views/layouts/header.php'; ?>

    <main>
        <div class="category main-info">
            <ul>
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
                    <img src="../../template/img/example.jpg" alt="">
                    <h2><?php echo $product['price']; ?></h2>
                    <p>
                        <a href="<?php echo $product['id']; ?>">
                            <?php echo $product['name']; ?>
                        </a>
                    </p>
                </div>
                <?php endforeach; ?>
            </section>
        </div>

    </main>
<?php include ROOT.'/views/layouts/footer.php'; ?>
