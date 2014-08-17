					<li class="line">
<div class="tmicon fa-search"></div>
<div class="box">
<form class="form" id="search">
    <input type="text" name="s" id="s" required="true" placeholder="搜索....">
</form>
</div>
					</li>
					<li class="line">
<div class="tmicon fa-heart"></div>
<div class="box">
<blockquote>
    &copy;
    <?php echo date( 'Y'); ?>
        <a href="<?php $this->options->siteUrl(); ?>">
            <?php $this->options->title(); ?>
        </a>
        . 由
        <a href="http://www.typecho.org" target="_blank">
            Typecho
        </a>
        强力驱动 | Designed By
        <a href="http://tympanus.net/" target="_blank">
            Mary Lou
        </a> | Theme By
        <a href="http://jimmycai.org" target="_blank">
            Jimmy
        </a>
</blockquote>
</div>
					</li>
</ul>
			</div>
</div>
<?php $this->footer(); ?>
</body>
</html>