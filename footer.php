<footer>
    <?php if($this->options->footerinfo): ?>
        <?php $this->options->footerinfo();?>
    <?php else: ?>
        &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
        <?php _e('由 <a href="http://www.typecho.org">Typecho</a>强力驱动'); ?>.
        Theme <a href="https://github.com/indes/typecho-theme-leonids">leonids</a> by <i class="fa fa-heart heart-icon"></i>.
    <?php endif; ?>
</footer>
</body>
</html>
