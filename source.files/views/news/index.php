<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="../../template/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../../template/css/style.css"> <!-- Gem style -->
	<script src="../../template/js/modernizr.js"></script> <!-- Modernizr -->

	<title>Online Store</title>
</head>
<body>
<header style="height: 150px;">
    <h1>Responsive Vertical Timeline</h1>
</header>

<section id="cd-timeline" class="cd-container">

    <?php foreach ($newsList as $newsItem):?>
    <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
            <img src="../../template/img/cd-icon-picture.svg" alt="Picture">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content">
            <h2><a href="/news/<?php echo $newsItem['id'];?>" ><?php echo $newsItem['title'];?></a></h2>
            <p><?php echo $newsItem['short_content'];?></p>
            <a href="/news/<?php echo $newsItem['id'];?>" class="cd-read-more">Read more</a>
            <span class="cd-date"><?php echo $newsItem['date'];?></span>
        </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->
    <?php endforeach;?>


</section> <!-- cd-timeline -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../../template/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>