<?php include ROOT . '/views/layouts/head.php'; ?>
<body>
    <div id="wrapper">
        <?php include ROOT . '/views/layouts/header.php'; ?>
	<!-- end #header -->
        <?php foreach ($newsList as $newsItem):?>
        <div id="page">
            <div class="post">
		<h2 class="title"><a href="#"><?php echo $newsItem['title'];?></a></h2>
		<h3><?php echo $newsItem['author_name'];?></h3>
		<p><?php echo $newsItem['short_content'];?></p>
            </div>
	</div>
        <?php endforeach;?>
    </div>
	<!-- end #page --> 
<?php include ROOT . '/views/layouts/footer.php'; ?>
</body>
</html>