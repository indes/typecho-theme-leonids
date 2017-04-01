<div class="cover-card table-cell table-middle">

    <?php if($this->options->user_avatar): ?>
        <img src="<?php $this->options->user_avatar();?>" alt="<?php $this->options->title() ?>" class="avatar"/>
    <?php endif; ?>

    <a href="<?php $this->options->siteUrl(); ?>" class="author_name"><?php $this->author(); ?></a>
    <span class="author_job"><?php $this->options->description() ?></span>
    <span class="author_bio mbm"><?php $this->options->description() ?></span>
    <nav class="nav">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="<?php $this->options->siteUrl(); ?>">home</a>
            </li>
        </ul>
    </nav>
</div>
