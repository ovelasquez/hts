<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>



<?php if (!empty($title)) : ?>

    <h3><?php print $title; ?></h3>

  <?php endif; ?>

<div id="slider-st" class="">
            <div class=" " id="slider-stage">
   

        <ul>


    <?php foreach ($rows as $id => $row): ?>

      <li class="<?php print $classes_array[$id]; ?>">

                <?php print $row; ?>

        </li>

    <?php endforeach; ?>

        </ul>

</div>
<a id="previous" style="display:none">Previous</a>
<a id="next" style="display:none">Next</a>
</div>
