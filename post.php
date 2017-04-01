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
                    Home
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
    </span>

                    </header>

                    <article class="post-content">
                        <?php $this->content(); ?>
                    </article>
                </div>

                <div class="share-buttons">
                    <h6>Share on: </h6>
                    <ul>
                        <li>
                            <a href="https://twitter.com/intent/tweet?text={{ site.url }}{{ page.url }}" class="twitter btn" title="Share on Twitter"><i class="fa fa-twitter"></i><span> Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ site.url }}{{ page.url }}" class="facebook btn" title="Share on Facebook"><i class="fa fa-facebook"></i><span> Facebook</span></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/share?url={{ site.url }}{{ page.url }}" class="google-plus btn" title="Share on Google Plus"><i class="fa fa-google-plus"></i><span> Google+</span></a>
                        </li>
                        <li>
                            <a href="https://news.ycombinator.com/submitlink?u={{ site.url }}{{ page.url }}" class="hacker-news btn" title="Share on Hacker News"><i class="fa fa-hacker-news"></i><span> Hacker News</span></a>
                        </li>
                        <li>
                            <a href="https://www.reddit.com/submit?url={{ site.url }}{{ page.url }}" class="reddit btn" title="Share on Reddit"><i class="fa fa-reddit"></i><span> Reddit</span></a>
                        </li>
                    </ul>
                </div><!-- end share-buttons -->

                <?php $this->need('comments.php'); ?>
            </div><!-- end #main-->
            <?php $this->need('footer.php'); ?>
        </div>
    </div>
</div>
