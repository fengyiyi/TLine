<?php
/**
 * 天蓝色的时间轴主题
 * 
 * @package TLine
 * @author Jimmy
 * @version 1.1
 * @link http://jimmycai.org
 */
 
 $this->need('header.php');
 ?>    
<div class="main">
				<ul class="tmtimeline">
     <?php while($this->next()): ?>
					<li class="line">
						<time class="tmtime" datetime="<?php $this->date('Y-n-y H:i'); ?>"><span><?php $this->date('j/n/y'); ?></span> <span title="<?php $this->dateWord(); ?>"><?php $this->date('H:i'); ?></span></time>
						<div class="tmicon fa-<?php if ($this->category == "Tech"): ?>code<?php elseif ($this->category == "Share"): ?>share<?php else: ?>pencil<?php endif; ?>"></div>
						<div class="tmlabel">
							<a href="<?php $this->permalink() ?>"><h2><?php $this->title() ?></h2></a>
<div class="index-text post-content">
							<p><?php $this->excerpt(); ?></p>
</div>
						</div>
					</li>
                    <?php endwhile; ?>
					<li class="line">
						<div class="tmicon fa-send"></div>
<div class="page-nav">
							                <?php $this->pageNav('&laquo;','&raquo;',2,'...');?>
</div>
					</li>
            <?php $this->need('footer.php'); ?>