<?php $this->need('header.php'); ?>
<div class="main">
				<ul class="tmtimeline">
        <?php if ($this->have()): ?>
<li class="line">
<div class="tmicon fa-search"></div>
						<div class="tmlabel">
<h3 class="breadcrumbs" itemprop="breadcrumb"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
</div>
					</li>
     <?php while($this->next()): ?>
					<li class="line">
						<time class="tmtime" datetime="<?php $this->date('Y-n-y H:i'); ?>"><span><?php $this->date('j/n/y'); ?></span> <span title="<?php $this->dateWord(); ?>"><?php $this->date('H:i'); ?></span></time>
						<div class="tmicon fa-<?php if ($this->category == "Tech"): ?>code<?php elseif ($this->category == "Share"): ?>share<?php else: ?>write<?php endif; ?>"></div>
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
                    <?php else: ?>
<li class="line">
<div class="tmicon fa-search"></div>
						<div class="tmlabel">
 <?php _e( '没有找到相关内容'); ?>
</div>
					</li>
                        <?php endif; ?>
                                <?php $this->need('footer.php'); ?>