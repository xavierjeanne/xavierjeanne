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
$id = 'collapse-' . $block['id'];
if( !empty($block['anchor']) ) {
$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'collapse-block';
if( !empty($block['className']) ) {
$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
$className .= ' align' . $block['align'];
}

// Load values and assign defaults.
//$timeline = get_field('timeline') ?: 'éditer la timeline';
if (get_field('image_fond_titre')) {
    $image_fond_titre_id = get_field('image_fond_titre');
    $image_fond_titre = wp_get_attachment_image_url(  $image_fond_titre_id, 'large');
}else{
    $image_fond_titre =  get_template_directory_uri()."/dist/images/main-verte.jpg";
}


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" >

    <div class="banniere" style="background:linear-gradient( <?php echo hex2rgba(get_field('couleur_fond_titre'), .5);?> 100%, <?php echo hex2rgba(get_field('couleur_fond_titre'), .5);?> 100%), url(<?php echo $image_fond_titre ?>);">
        <a  style="color:<?php echo get_field('couleur_titre'); ?>;background-color: <?php echo get_field('couleur_fond_titre'); ?>" data-toggle="collapse" href="#collapse-<?php echo esc_attr($id); ?>" role="button" aria-expanded="false" aria-controls="collapse-<?php echo esc_attr($id); ?>">
       <?php echo get_field('titre'); ?>
            <span class=""></span>
            <span class="right icon-chevron-up-solid "></span>
            <span class="right icon-chevron-down-solid "></span>
        </a>
    </div>
    <div class="collapse" id="collapse-<?php echo esc_attr($id); ?>">
        <div class="card card-body">
            <?php echo get_field('contenu'); ?>
        </div>
    </div>
</div>