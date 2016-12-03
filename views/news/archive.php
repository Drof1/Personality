					<?php foreach ($newsList as $newsItem):?>
					<div class="post">
						<h2 class="title"><a href='news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h2>
						<p class="meta">Posted by <a href="#"><?php echo $newsItem['author_name'];?></a> on <?php echo $newsItem['date'];?>
							&nbsp;&bull;&nbsp; <a href='news/<?php echo $newsItem['id'] ;?>' class="permalink"> Full article</a></p>
						<div class="entry">
							<p><img src="template/images/newsImages<?php echo $newsItem['preview'] ;?>" width="800" height="300" alt="" /></p>
							<p><?php echo $newsItem['short_content'];?></p>
						</div>
					</div>
                                        <?php endforeach;?>