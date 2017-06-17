<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>





<div class="features" style="margin-bottom:10px">
   

        

    <?php foreach ($rows as $id => $row): ?>

      <!-- BEGIN: features 1 -->
        <div>

                <?php print $row; ?>

        </div>

    <?php endforeach; ?>

       

</div><!-- END: .features -->

<div class="clear"></div>

