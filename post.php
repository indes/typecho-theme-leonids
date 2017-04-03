<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="row">
    <div class="col s12 m3">
        <div class="table cover">
            <?php $this->need('sidebar.php'); ?>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="post-listing">
            <div class="col-mb-12 col-8" id="main" role="main">
                <a class="btn" href= "<?php $this->options->siteUrl(); ?>" >
                    <i class="fa fa-angle-left" aria-hidden="true"></i> Home
                </a>
                <!--{% if page.image.feature %}-->
                <!--<div class="post-image-feature">-->
                <!--    <img class="feature-image" src=-->
                <!--    {% if page.image.feature contains 'https' or page.image.feature contains 'http' %}-->
                <!--    "{{ page.image.feature }}"-->
                <!--    {% else %}-->
                <!--    "{{ site.url }}/img/{{ page.image.feature }}"-->
                <!--    {% endif %}-->
                <!--    alt="{{ page.title }} feature image">-->
                <!---->
                <!--    {% if page.image.credit %}-->
                <!--    <span class="image-credit">Photo Credit: <a href="{{ page.image.creditlink }}">{{ page.image.credit }}</a></span>-->
                <!--    {% endif %}-->
                <!--</div>-->
                <!--{% endif %}-->


                <div id="post">
                    <header class="post-header">
                        <h1 title="<?php $this->title() ?>"><?php $this->title() ?></h1>
                        <span class="post-meta">
                            <span class="post-date">
                                <?php $this->date('F j, Y'); ?>
                            </span>
                            •
                            <span class="post-cat"><?php $this->category(','); ?></span>
                        </span>
                    </header>

                    <article class="post-content">
                        <?php $this->content(); ?>
                    </article>
                </div>
                <?php $this->need('sharebuttoms.php'); ?>

                <?php $this->need('comments.php'); ?>
            </div><!-- end #main-->
            <?php $this->need('footer.php'); ?>
        </div>
    </div>
</div>
