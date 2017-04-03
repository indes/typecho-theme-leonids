<?php
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
                        <h2><?php $this->title() ?></h2>
                    </header>

                    <article class="page-content">
                        <div class="archive">
                            <?php $this->content(); ?>
                        </div>
                    </article>
                </div><!-- end page content -->
<!--                <div class="share-buttons">-->
<!--                    <h6>Share on: </h6>-->
<!--                    <ul>-->
<!--                        <li>-->
<!--                            <a href="https://twitter.com/intent/tweet?text={{ site.url }}{{ page.url }}" class="twitter btn" title="Share on Twitter"><i class="fa fa-twitter"></i><span> Twitter</span></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ site.url }}{{ page.url }}" class="facebook btn" title="Share on Facebook"><i class="fa fa-facebook"></i><span> Facebook</span></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="https://plus.google.com/share?url={{ site.url }}{{ page.url }}" class="google-plus btn" title="Share on Google Plus"><i class="fa fa-google-plus"></i><span> Google+</span></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="https://news.ycombinator.com/submitlink?u={{ site.url }}{{ page.url }}" class="hacker-news btn" title="Share on Hacker News"><i class="fa fa-hacker-news"></i><span> Hacker News</span></a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="https://www.reddit.com/submit?url={{ site.url }}{{ page.url }}" class="reddit btn" title="Share on Reddit"><i class="fa fa-reddit"></i><span> Reddit</span></a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
            </div><!-- end #main-->
            <?php $this->need('comments.php'); ?>
            <?php $this->need('footer.php'); ?>
        </div>
    </div>
</div>
