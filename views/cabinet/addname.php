<?php include ROOT . '/views/layouts/head.php'; ?>
<body>
    <div id="wrapper">
        <?php include ROOT . '/views/layouts/header.php'; ?>
	<!-- end #header -->
        <div id="page">
            <div class="post">
                <div class="signup-form"><!--sign up form-->
                    <h2 class="title">Enter your heteronym</h2>
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Name" value="<?= $name ?>" />
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