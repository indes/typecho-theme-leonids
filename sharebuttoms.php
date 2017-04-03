<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/4/3
 * Time: 16:24
 */
?>
<?php if(($this->options->sharebuttons)=='enable'): ?>
<div class="share-buttons">
    <h6>Share on: </h6>
    <ul>
        <li>
            <a target="_blank" href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>" class="google-plus btn" title="Share on Weibo"><i class="fa fa-weibo"></i><span> Weibo</span></a>
        </li>
        <li>
            <a target="_blank" href="http://connect.qq.com/widget/shareqq/index.html?url=<?php $this->permalink() ?>" class="qq btn" title="Share on QQ"><i class="fa fa-qq"></i><span> QQ</span></a>
        </li>
        <li>
            <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php $this->permalink() ?>" class="twitter btn" title="Share on Twitter"><i class="fa fa-twitter"></i><span> Twitter</span></a>
        </li>
        <li>
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php $this->permalink() ?>" class="facebook btn" title="Share on Facebook"><i class="fa fa-facebook"></i><span> Facebook</span></a>
        </li>
        <li>
            <a target="_blank" href="https://plus.google.com/share?url=<?php $this->permalink() ?>" class="google-plus btn" title="Share on Google Plus"><i class="fa fa-google-plus"></i><span> Google+</span></a>
        </li>
    </ul>
</div>
<?php endif; ?>
