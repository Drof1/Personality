<?php
echo '<br/>';
print_r(__DIR__);
?>

<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>PERSONALITY</title>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
    <link href="Personality/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
    <div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
                    <div id="logo">
			<h1><a href="#">personality</a></h1>
                    </div>
                    <div id="menu">
			<ul>
                            <li class="current_page_item"><a href="#">Log in</a></li>
                            <li><a href="#">Sign up</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Exit</a></li>
			</ul>
                    </div>
		</div>
		<div id="banner">
                    <div class="content">
                    <img src="Personality/template/images/img02.jpg" />
		</div>
            </div>
	</div>
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
    <div id="featured-content">
	<div id="column">
            <h2>Another Name</h2>
            <p><img src="template/images/img06.jpg" alt="" /></p>
            <p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
            <p class="button"><a href="#">Read More</a></p>
	</div>
	<div id="column">
            <h2>Another Name</h2>
            <p><img src="template/images/img07.jpg" alt="" /></p>
            <p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
            <p class="button"><a href="#">Read More</a></p>
	</div>
	<div id="column">
            <h2>Another Name</h2>
            <p><img src="template/images/img08.jpg" alt="" /></p>
            <p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
            <p class="button"><a href="#">Read More</a></p>
	</div>
    </div>

    <div id="footer">
            <p>Copyright (c) for 2016 Dedicated software development teams </p>
    </div>
<!-- end #footer -->
</body>
</html>