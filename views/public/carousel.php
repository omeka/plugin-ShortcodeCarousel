<div class="jcarousel-wrapper">
    <div class="jcarousel" id="jcarousel-<?php echo $id_suffix; ?>">
        <ul>
        <?php foreach ($items as $item): ?>
            <li>
            <?php 
				$options = array();
				if (isset($configs['carousel']['showTitlesAsTooltips']) && $configs['carousel']['showTitlesAsTooltips']) { 
					$options['title'] = trim(strip_tags(metadata($item, array('Dublin Core', 'Title'))));
				}
			?>
            <?php
            echo link_to_item(
                item_image('square_thumbnail', $options, 0, $item),
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

    <a href="#" class="jcarousel-controls jcarousel-control-prev"><span class="fa-stack" style="width: 1em"><i class="fas fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-left fa-stack-1x fa-inverse"></i></span></a>
    <a href="#" class="jcarousel-controls jcarousel-control-next"><span class="fa-stack" style="width: 1em"><i class="fas fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-right fa-stack-1x fa-inverse"></i></span></a>

    <?php if (!isset($configs['carousel']['hidePagination']) || !$configs['carousel']['hidePagination']): ?>
	<p class="jcarousel-pagination"></p>
	<?php endif; ?>
</div>

<script type='text/javascript'>
	jQuery(function() {
		var carouselConfig = <?php echo json_encode($configs['carousel']); ?>;
		var configs = <?php echo json_encode($configs); ?>;
		var carousel = jQuery('#jcarousel-<?php echo $id_suffix; ?>').jcarousel(carouselConfig);
		<?php if (isset($configs['autoscroll'])): ?>
		var autoscrollConfig = <?php echo json_encode($configs['autoscroll']); ?>;
		carousel.jcarouselAutoscroll(autoscrollConfig)
		<?php if (isset($configs['autoscroll']['pauseOnHover']) && $configs['autoscroll']['pauseOnHover']): ?>
		.hover(function() {
			jQuery(this).jcarouselAutoscroll('stop');
		}, function() {
			jQuery(this).jcarouselAutoscroll('start');
		});
		<?php endif; ?>
		<?php endif; ?>
	});
</script>
