<?php include ROOT . '/views/layouts/head.php'; ?>
<body>
    <div id="wrapper">
        <?php include ROOT . '/views/layouts/header.php'; ?>
	<!-- end #header -->
        <div id="page">
            <div class="post">
		<h2 class="title"><a href="#">Cabinet</a></h2>
		<h3><?= 'Welcome, ' . $user['name'] . '!' ?></h3>
		<p>This is your personal account</p>
            </div>
	</div>
    </div>
	<!-- end #page -->
<?php include ROOT . '/views/layouts/footer.php'; ?>
</body>
</html>