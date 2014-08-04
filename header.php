<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if($this->_currentPage>1) echo '第'.$this->_currentPage.'页 | '; ?><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' | '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('font-awesome.min.css'); ?>">
    <?php if ($this->is('post')): ?>
    <link rel="canonical" href="<?php $this->permalink() ?>" />
    <?php endif; ?>
    <?php if ($this->is('index')): ?>
    <link rel="canonical" href="<?php $this->options->siteUrl(); ?>" />
    <?php endif; ?>
    <?php $this->header("generator=&template="); ?>
  </head>
<body>
		<div class="container">
			<header class="clearfix">
<a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>">
				<span><?php $this->options->description(); ?></span>
				<h1><?php $this->options->title(); ?></h1></a>
				<nav class="menu">
					<a href="/about.html" class="fa-user" data-info="关于">关于</a>
					<a href="/archives.html" class="fa-history" data-info="归档">归档</a>
				</nav>
			</header>