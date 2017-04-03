<div class="cover-card table-cell table-middle">

    <?php if($this->options->user_avatar): ?>
        <img src="<?php $this->options->user_avatar();?>" class="avatar"/>
    <?php endif; ?>

    <a href="<?php $this->options->siteUrl(); ?>" class="author_name">
        <?php if($this->options->user_name): ?>
            <?php $this->options->user_name();?>
        <?php else: ?>
            <?php $this->options->title(); ?>
        <?php endif; ?>
    </a>

    <span class="author_job">

        <?php if($this->options->user_bio): ?>
            <?php $this->options->user_bio();?>
        <?php else: ?>
            <?php $this->options->description() ?>
        <?php endif; ?>

    </span>


<!--    <span class="author_bio mbm">-->
<!--        --><?php //if($this->options->user_bio): ?>
<!--            --><?php //$this->options->user_bio();?>
<!--        --><?php //else: ?>
<!--            --><?php //$this->options->description() ?>
<!--        --><?php //endif; ?>
<!--    </span>-->

    <nav class="nav">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="<?php $this->options->siteUrl(); ?>">home</a>
            </li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <span> / </span><li class="nav-item"><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </nav>
    <script type="text/javascript">
        // based on http://stackoverflow.com/a/10300743/280842
        function gen_mail_to_link(hs, subject) {
            var lhs,rhs;
            var p = hs.split('@');
            lhs = p[0];
            rhs = p[1];
            document.write("<a class=\"social-link-item\" target=\"_blank\" href=\"mailto");
            document.write(":" + lhs + "@");
            document.write(rhs + "?subject=" + subject + "\"><i class=\"fa fa-fw fa-envelope\"></i><\/a>");
        }
    </script>
<!--    <div class="social-links">-->
<!--        <ul>-->
<!--            {% if author.email %}-->
<!--            <li>-->
<!--                <script>gen_mail_to_link('{{ author.email }}', 'Hello from website');</script>-->
<!--            </li>-->
<!--            {% endif %}-->
<!--            {% if author.twitter %}<li><a href="http://twitter.com/{{ author.twitter }}" class="social-link-item" target="_blank"><i class="fa fa-fw fa-twitter"></i></a></li>{% endif %}-->
<!--            {% if author.facebook %}<li><a href="http://facebook.com/{{ author.facebook }}" class="social-link-item" target="_blank"><i class="fa fa-fw fa-facebook"></i></a></li>{% endif %}-->
<!--            {% if author.google.plus %}<li><a href="http://plus.google.com/+{{ author.google.plus }}" class="social-link-item" target="_blank"><i class="fa fa-fw fa-google-plus"></i></a></li>{% endif %}-->
<!--            {% if author.linkedin %}<li><a href="http://linkedin.com/in/{{ author.linkedin }}" class="social-link-item" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a></li>{% endif %}-->
<!--            {% if author.instagram %}<li><a href="http://instagram.com/{{ author.instagram }}" class="social-link-item" target="_blank"><i class="fa fa-fw fa-instagram"></i></a></li>{% endif %}-->
<!--            {% if author.tumblr %}<li><a href="http://{{ author.tumblr }}.tumblr.com" class="social-link-item" target="_blank"><i class="fa fa-fw fa-tumblr"></i></a></li>{% endif %}-->
<!--            {% if author.github %}<li><a href="http://github.com/{{ author.github }}" class="social-link-item" target="_blank"><i class="fa fa-fw fa-github"></i></a></li>{% endif %}-->
<!--            {% if author.gitlab %}<li><a href="http://gitlab.com/u/{{ author.gitlab }}" class="social-link-item" target="_blank"><i class="fa fa-fw fa-gitlab"></i></a></li>{% endif %}-->
<!--            {% if author.youtube %}<li><a href="https://youtube.com/user/{{ author.youtube }}" class="social-link-item" target="_blank"><i class="fa fa-fw fa-youtube"></i></a></li>{% endif %}-->
<!--            {% if author.weibo %}<li><a href="http://www.weibo.com/{{ author.weibo }}" class="social-link-item" target="_blank"><i class="fa fa-fw fa-weibo"></i></a></li>{% endif %}-->
<!--            {% if author.flickr %}<li><a href="http://www.flickr.com/{{ author.flickr }}" class="social-link-item" target="_blank"><i class="fa fa-fw fa-flickr"></i></a></li>{% endif %}-->
<!--            {% if author.500px %}<li><a href="http://www.500px.com/{{ author.500px }}" class="social-link-item" target="_blank"><i class="fa fa-fw fa-500px"></i></a></li>{% endif %}-->
<!--        </ul>-->
<!--    </div>-->

</div>
