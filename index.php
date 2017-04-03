<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤
 *
 * @package Typecho Replica Theme
 * @author Typecho Team
 * @version 1.2
 * @link http://typecho.org
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
                <?php while ($this->next()): ?>
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
                <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
            </div><!-- end #main-->

            <?php $this->need('footer.php'); ?>
        </div>
    </div>
</div>

