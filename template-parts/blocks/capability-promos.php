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
$id = $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'capability-promos';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

$capability_promos = get_field('capability_promos') ?? null;
if($capability_promos):
?>
<style>
    .capability-promos .cell {
        max-width: 188px;
        margin-bottom: 30px;
    }
    .capability-promos .img-wrap {
        background-color: #000;
        border: 1px solid #1B9E8F;
        border-radius: 15px;
        filter: drop-shadow(0px 0px 0px #1B9E8F);
        padding: 10px 0;
        transition: all .3s ease;
    }
    .capability-promos a {
        transition: color .3s ease;
    }
    .capability-promos a .title {
        padding-top: 8px;
    }
    .capability-promos img {
        transition: opacity 0s ease;
    }
    .capability-promos svg path {
        transition: .3s ease;
    }
    .capability-promos img.hover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .capability-promos .inline-icon-wrap {
        display: inline-flex;
    }
    .capability-promos a:hover,
    .capability-promos a:focus {
        color: #F2F0F0;
    }
    .capability-promos a:hover .img-wrap,
    .capability-promos a:focus .img-wrap {
        filter: drop-shadow(0px 0px 35px #1B9E8F);
    }
    
    .capability-promos a:hover svg path,
    .capability-promos a:focus svg path {
        fill: #F2F0F0;
    }
    .capability-promos a:hover img.load,
    .capability-promos a:focus img.load {
        opacity: 0;
    }
    .capability-promos a:hover img.hover,
    .capability-promos a:focus img.hover {
        opacity: 1 !important;
    }
    .capability-promos .title {
        line-height: 1.25;
    }
    .capability-promos .title svg {
        margin-left: 4px;
    }
    @media screen and (min-width: 1024px) {
        .cards-wrap {
            margin-left: -30px;
            margin-right: -30px;
        }
        .cards-wrap .cell {
            max-width: 214px;
            padding-left: 30px;
            padding-right: 30px;
            margin-bottom: 90px;
        }
    }
    @media screen and (min-width: 1580px) {
        .cards-wrap {
            margin-left: -50px;
            margin-right: -50px;
        }
        .cards-wrap .cell {
            max-width: 256px;
            padding-left: 50px;
            padding-right: 50px;
            margin-bottom: 110px;
        }
    }
</style>
<section id="<?php echo esc_attr($id); ?>" class="module block <?= esc_attr($className);?>">
    <div class="grid-container">
        <div class="cards-wrap grid-x grid-padding-x align-center">
            <?php foreach($capability_promos as $promo):
                $icon = $promo['icon'] ?? null;
                $icon_hover_state = $promo['icon_hover_state'] ?? null;
                $link = $promo['link'] ?? null;
            ?>
                <div class="cell shrink">
                    
                    <?php if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    
                        // Split title into words and wrap the last word
                        $title_words = explode(' ', $link_title);
                        if (count($title_words) > 1) {
                            $last_word = array_pop($title_words);
                            $title_html = implode(' ', $title_words) . ' <span class="inline-icon-wrap">' . esc_html($last_word) . '
                                <svg xmlns="http://www.w3.org/2000/svg" width="7.485" height="12.122" viewBox="0 0 7.485 12.122"><path d="M0 10.697 4.626 6.06 0 1.424 1.424 0l6.061 6.061-6.061 6.061Z" fill="#1b9e8f"/></svg>
                            </span>';
                        } else {
                            // Only one word: wrap entire thing
                            $title_html = '<span class="inline-icon-wrap">' . esc_html($link_title) . '
                                <svg xmlns="http://www.w3.org/2000/svg" width="7.485" height="12.122" viewBox="0 0 7.485 12.122"><path d="M0 10.697 4.626 6.06 0 1.424 1.424 0l6.061 6.061-6.061 6.061Z" fill="#1b9e8f"/></svg>
                            </span>';
                        }
                    ?>
                        <a class="inner grid-x flex-dir-column" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                    <?php else:?>
                        <div class="grid-x flex-dir-column">
                    <?php endif;?>
                            <?php if($icon || $icon_hover_state) :?>
                                <div class="img-wrap relative">
                                    <?php if($icon) {
                                        echo wp_get_attachment_image( $icon['id'], 'full', false, ['class' => 'load'] );    
                                    };?>
                                    <?php if($icon_hover_state) {
                                        echo wp_get_attachment_image( $icon_hover_state['id'], 'full', false, ['class' => 'hover', 'style' => 'opacity: 0;'] );    
                                    };?>
                                </div>
                            <?php endif; ?>
                            <?php if($link_title): ?>
                                <div class="title color-link-blue font-header relative text-center">
                                    <?= $title_html; ?>
                                </div>
                            <?php endif; ?>
                            
                        <?php if( $link ):?>
                            </a>
                        <?php else:?>
                            </div>
                        <?php endif;?>
                        
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?php endif;?>