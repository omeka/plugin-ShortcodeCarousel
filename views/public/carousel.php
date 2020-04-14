<div class="jcarousel-wrapper">
    <div class="jcarousel" id="jcarousel-<?php echo $id_suffix; ?>">
        <ul>
        <?php foreach ($items as $item): ?>
            <li>
            <?php
            echo link_to_item(
                item_image('square_thumbnail', array(), 0, $item),
                array('class' => 'shortcode-carousel-image'), 'show', $item
            );
            ?>
            <?php if (isset($configs['carousel']['showTitles']) && $configs['carousel']['showTitles']): ?>
                <p class="shortcode-carousel-title">
                <a href="<?php echo record_url($item, 'show'); ?>">
                <?php echo metadata($item, array('Dublin Core', 'Title')); ?>
                </a>
                </p>
            <?php endif; ?>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>

    <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
    <a href="#" class="jcarousel-control-next">&rsaquo;</a>

    <p class="jcarousel-pagination"></p>
</div>

<script type='text/javascript'>
jQuery(function() {
    var carouselConfig = <?php echo json_encode($configs['carousel']); ?>;
    var configs = <?php echo json_encode($configs); ?>;
    var carousel = jQuery('#jcarousel-<?php echo $id_suffix; ?>').jcarousel(carouselConfig);
    <?php if (isset($configs['autoscroll'])): ?>
    var autoscrollConfig = <?php echo json_encode($configs['autoscroll']); ?>;
    carousel.jcarouselAutoscroll(autoscrollConfig);
    <?php endif; ?>
});
</script>
