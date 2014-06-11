<?php 
    if (empty($subpages)) return;
    end($subpages);
    $last_key = key($subpages);
?>
<!--== Breadcrumb ==-->
<div id="myBreadcrumb">
  <ol class="breadcrumb">
    <?php
        foreach ( $subpages as $k => $v) {
            if ($k == $last_key) {
                echo '<li class="active">'. $k. '</li>';
            } else {
                echo '<li><a href="'. $v. '">'. $k. '</a></li>';
            }
        }
    ?>
  </ol>      
</div>
<!--== End Breadcrumb ==-->
