<?php $this->need('header.php'); ?>
<div class="main">
				<ul class="tmtimeline">
					<li class="line">
						<time class="tmtime" datetime="<?php $this->date('Y-n-y H:i'); ?>"><span><?php $this->date('j/n/y'); ?></span> <span title="<?php $this->dateWord(); ?>"><?php $this->date('H:i'); ?></span></time>
						<div class="tmicon fa-<?php if ($this->category == "Tech"): ?>code<?php elseif ($this->category == "Share"): ?>share<?php else: ?>pencil<?php endif; ?>"></div>
						<div class="tmlabel">
							<a href="<?php $this->permalink() ?>"><h2><?php $this->title() ?></h2></a>
<div class="post-content">
							<?php $this->content(); ?>
</div>
<hr>
<span class="tags">
<?php $this->category(); ?><?php $this->tags('', true, '无'); ?>
</span>
						</div>
					</li>
<?php $this->need('comments.php'); ?>
            <?php $this->need('footer.php'); ?>