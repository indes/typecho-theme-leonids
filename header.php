<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

<!--    <meta name="description" content="{% if page.excerpt %}{{ page.excerpt | strip_html | strip_newlines | truncate: 160 }}{% else %}{{ site.description }}{% endif %}">-->

    <!-- CSS files -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/main.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/font-awesome.min.css'); ?>">
<!--    <link rel="canonical" href="{{ page.url | replace:'index.html','' | prepend: site.url }}">-->
    <link rel="alternate" type="application/rss+xml" title="{{ site.title }}" href="{{ "/feed.xml" | prepend: site.url }}" />
    <!-- Icons -->
    <!-- 16x16 -->
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>">
    <!-- 32x32 -->
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.png'); ?>">
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->



