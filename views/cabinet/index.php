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
        <div id="page">
            <div class="post">
                <div class="signup-form"><!--sign up form-->
                    <h2 class="title">Enter the site</h2>
                    <form action="#" method="post">
                        <input type="text" name="title" placeholder="Title of post" value="<?= $title ?>" />
                        <textarea name="short_content" placeholder="A summary of the news" value="<?= $short_content ?>"></textarea>
                        <textarea name="content" placeholder="News content" value="<?= $content ?>"></textarea>
                        
                        <input type="submit" name="submit" value="Post" />
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
	<!-- end #page -->
<?php include ROOT . '/views/layouts/footer.php'; ?>
</body>
</html>