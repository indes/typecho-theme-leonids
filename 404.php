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
                    <article class="page-content">
                        <div class="archive" style="text-align: center;padding-top: 25%;">
                            <h1>404</h1>
                            <div>咦，页面不见了？</div>
                            <br>
                            <a class="btn" href= "<?php $this->options->siteUrl(); ?>" >
                                Home
                            </a>
                        </div>
                    </article>
                </div><!-- end page content -->
            </div><!-- end #main-->
            <?php $this->need('footer.php'); ?>
        </div>
    </div>
</div>
