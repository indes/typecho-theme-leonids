<?php
/**
 * Template Page of Timeline Archives
 *
 * @package custom
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

                <div id="page">
                    <header class="page-header">
                        <h2><?php $this->title() ?></h2>
                    </header>

                    <article class="page-content">
                        <div class="archive">
                            <div class="timeline" id="timeline">
                            <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
                            $year = 0;
                            $mon = 0;
                            $i = 0;
                            $j = 0;
                            $output ='';
                            while ($archives->next()):
                                $year_tmp = date('Y', $archives->created);
                                $mon_tmp = date('m', $archives->created);
                                $y = $year;
                                $m = $mon;
                                if ($year != $year_tmp) {
                                    $year = $year_tmp;
                                    $output .= '</ul><div class="archive-title"> <h4 class="archive-year">'. $year .'</h4></div><ul>'; //输出年份
                                }
                                $output .='
                                          <li><div style="width:60px;float:left;">' . date('M d', $archives->created) . '</div><a href="'. $archives->permalink .'">' . $archives->title . '</a></li>
                                          ';//输出文章
                            endwhile;
                            echo $output;
                            ?>
                            </ul>
                            </div>
                        </div>
                    </article>


                </div><!-- end page content -->
            </div><!-- end #main-->

            <?php $this->need('footer.php'); ?>
        </div>
    </div>
</div>
