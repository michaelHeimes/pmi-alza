<?php

/**
 * Button Group Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'button-group ' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'button-group';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

$remove_top_spacing = get_field('remove_top_spacing') ?? null;
$remove_bottom_spacing = get_field('remove_bottom_spacing') ?? null;
$alignment = get_field('alignment') ?? null;
$button_links = get_field('button_links') ?? null;

?>
<section id="<?php echo esc_attr($id); ?>" class="module block 
    <?= esc_attr($className); 
        if($remove_top_spacing) { echo esc_attr( ' ntm' ); }
        if($remove_bottom_spacing) { echo esc_attr( ' nbm' ); }
    ?>
        
">
    <div class="grid-x grid-padding-x <?= esc_attr( $alignment );?>">
        <?php foreach($button_links as $button_link):
            $style = $button_link['style'] ?? null;
            $add_phone_icon = $button_link['add_phone_icon'] ?? null;
            $link = $button_link['link'] ?? null;
        ?>
            <?php 
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
            <div class="cell shrink">
                <a class="button chev-link grid-x align-center<?php if ($style == 'transparent') { echo ' no-bg'; }; if ($style == 'mint-border') { echo ' border'; };?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                    <?php if ($style == 'transparent' && $add_phone_icon == 'true' ):?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13.132" height="22.223"><path d="M10.606 0H2.525A2.526 2.526 0 0 0 0 2.525V19.7a2.526 2.526 0 0 0 2.525 2.525h8.081a2.526 2.526 0 0 0 2.526-2.525V2.525A2.526 2.526 0 0 0 10.606 0Zm-4.04 21.213A1.515 1.515 0 1 1 8.081 19.7a1.513 1.513 0 0 1-1.515 1.513Zm4.546-4.041H2.02V3.03h9.091Z" fill="#1b9e8f"></path></svg>
                    <?php endif; ?>
                    <span><?php echo esc_html( $link_title ); ?></span>
                </a>
            </div>
            <?php endif; ?>
        <?php endforeach;?>
    </div>
    
</section>