<?php
/**
* gutenberg block Template.
*
* @param   array $block The block settings and attributes.
* @param   string $content The block inner HTML (empty).
* @param   bool $is_preview True during AJAX preview.
* @param   (int|string) $post_id The post ID this block is saved to.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'timeline-' . $block['id'];
if( !empty($block['anchor']) ) {
$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'timeline-block';
if( !empty($block['className']) ) {
$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
$className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$timeline = get_field('timeline') ?: 'éditer la timeline';



?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <div class=" d-sm-block d-md-none" role="tablist">
        <div class="dropdown">
        <a class="left carousel-control" href="javascript:void(0);" role="button" data-slide="prev">
            <span class="right icon-chevron-left-solid "></span>
            </a>

        <div class="dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        </div>
        <div class=" dropdown-menu nav nav-tabs" aria-labelledby="dropdownMenuButton" role="tablist">
        <?php

        foreach ($timeline as $id => $timeline_item){
            ?>
                <a class="nav-link dropdown-item  <?php if ($id==0){ echo "show active" ;}?>" id="tab-<?php echo $id; ?>" data-toggle="tab" href="#content-<?php echo $id; ?>" role="tab" aria-controls="content-<?php echo $id; ?>" aria-selected="true"><?php   echo $timeline_item['annee']; ?></a>
            <?php
        }

        ?>
        </div>
        <a class="right carousel-control" href="javascript:void(0);" role="button" data-slide="next">
            <span class="right icon-chevron-right-solid "></span>
        </a>
        </div>
    </div>
    <div class="d-none d-md-block">
        <ul class="nav nav-tabs" role="tablist">
            <li><a class="left carousel-control" href="javascript:void(0);" role="button" data-slide="prev">
                    <span class="right icon-chevron-left-solid "></span>
                </a>
            </li>
           <?php

            foreach ($timeline as $id => $timeline_item){
            ?>
                <li class="nav-item" role="presentation">
                    <a class="nav-link <?php if ($id==0){ echo "active" ;}?>" id="tab-<?php echo $id; ?>" data-toggle="tab" href="#content-<?php echo $id; ?>" role="tab" aria-controls="content-<?php echo $id; ?>" aria-selected="true"><?php   echo $timeline_item['annee']; ?></a>
                </li>

                <?php
            }
           ?>
            <li>
                <a class="right carousel-control" href="javascript:void(0);" role="button" data-slide="next">
                    <span class="right icon-chevron-right-solid "></span>
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="myTabContent">
        <?php
        foreach ($timeline as $id => $timeline_item){
        ?>
            <div class="tab-pane fade <?php if ($id==0){ echo "show active";}?>" " id="content-<?php echo $id; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $id; ?>">
                <?php echo $timeline_item['contenu'];?>
          </div>
            <?php
        }

        ?>
    </div>
</div>