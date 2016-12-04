<?php include ROOT . '/views/layouts/head.php'; ?>
<body>
    <div id="wrapper">
        <?php include ROOT . '/views/layouts/header.php'; ?>
	<!-- end #header -->
        <div id="page">
            <div class="post">
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div class="signup-form"><!--sign up form-->
                    <h2 class="title">Enter the site</h2>
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" />
                        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>" />
                        <input type="submit" name="submit" value="Enter" />
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
	<!-- end #page --> 
<?php include ROOT . '/views/layouts/footer.php'; ?>
</body>
</html>