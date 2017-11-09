<?php include ROOT.'/views/layouts/header.php'; ?>

<main>
        <div class="category">
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
        <div class="news">
            <section>
                <?php foreach ($latestProducts as $product): ?>
                <div>
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
