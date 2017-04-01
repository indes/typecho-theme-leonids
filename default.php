<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/4/1
 * Time: 15:39
 */
?>

<!DOCTYPE html>
<html lang="zh-cn">

<?php $this->need('header.php'); ?>

<body>
  <div class="row">
    <div class="col s12 m3">
      <div class="table cover">
        {% include sidebar.html %}
      </div>
    </div>
    <div class="col s12 m9">
      <div class="post-listing">
        {{ content }}
        {% include footer.html %}
      </div>
    </div>
  </div>
  {% include js.html %}
</body>
</html>
