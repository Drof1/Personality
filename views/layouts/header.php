<div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <h1><a href="/Personality/news/page-1">Personality</a></h1>
                </div>
                <div id="menu">
                    <ul>
                        <?php if(User::isGuest()): ?>
                        <li><a href="/Personality/user/login/">Log in</a></li>
                        <li><a href="/Personality/user/register">Sign up</a></li>
                        <?php else: ?>
                        <li><a href="/Personality/cabinet/heteronym">Add nick</a></li>
                        <li><a href="/Personality/cabinet/post">Post</a></li>
                        <li><a href="/Personality/user/logout">Exit</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div id="banner">
                <div class="content">
                    <img src="<?=TAMPLATE_FOLDER?>images/img02.jpg" />
                </div>
            </div>
	</div>
