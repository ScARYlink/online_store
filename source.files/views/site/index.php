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
                <div>
                    123
                </div>
            </section>
        </div>

    </main>
<?php include ROOT.'/views/layouts/footer.php'; ?>
