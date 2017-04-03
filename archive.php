<?php
/**
 * Template Page of Timeline Archives
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="row">
    <div class="col s12 m3">
        <div class="table cover">
            <?php $this->need('sidebar.php'); ?>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="post-listing">
            <div class="col-mb-12 col-8" id="main" role="main">

                <div id="page">
                    <header class="page-header">
                        <h2><?php $this->archiveTitle(array(
                                'category'  =>  _t('分类 %s 下的文章'),
                                'search'    =>  _t('包含关键字 %s 的文章'),
                                'tag'       =>  _t('标签 %s 下的文章'),
                                'author'    =>  _t('%s 发布的文章')
                            ), '', ''); ?></h2>
                    </header>
                    <article class="page-content">
                        <div class="archive">
                            <?php if ($this->have()): ?>
                                <?php while($this->next()): ?>
                                    <section class="post">
                                        <header class="post-header">
                                            <p class="post-meta">
                                                <span class="post-date"><?php $this->date('F j, Y'); ?></span>
                                                •
                                                <span class="post-cat"><?php $this->category(','); ?></span>
                                            </p>
                                            <h1>
                                                <a href="<?php $this->permalink() ?>" class="post-title" title="<?php $this->title() ?>"><?php $this->title() ?></a>
                                            </h1>
                                        </header>
                                        <div class="post-description">
                                            <p>
                                                <?php $this->content('- 阅读剩余部分 -'); ?>
                                            </p>
                                        </div>
                                    </section>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <article class="post">
                                    <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
                                </article>
                            <?php endif; ?>
                            <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
                        </div>
                    </article>


                </div><!-- end page content -->
            </div><!-- end #main-->

            <?php $this->need('footer.php'); ?>
        </div>
    </div>
</div>
