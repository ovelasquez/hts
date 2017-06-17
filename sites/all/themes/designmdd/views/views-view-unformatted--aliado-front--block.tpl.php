<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>


<div id="slider-st" class="">
            <div class=" " id="slider-stage-al">
<!-- BEGIN: aliados 1 -->
<ul >
         

    <?php foreach ($rows as $id => $row): ?>
 
        <?php print $row; ?>
	 <?php endforeach; ?>

       

</ul><!-- END: .aliados -->
</div>
<a id="previous-al" style="display:none">Previous</a>
<a id="next-al" style="display:none">Next</a>

</div>

