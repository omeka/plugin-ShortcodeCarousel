<div class="jcarousel-wrapper">
    <div class="jcarousel" id="jcarousel-<?php echo $id_suffix; ?>">
        <ul>
        <?php foreach($items as $item): ?>
            <li>
            <p>
            <?php echo metadata($item, array('Dublin Core', 'Title')); ?>
            </p>
            <?php echo link_to_item(
                    item_image('square_thumbnail', array(), 0, $item), 
                    array('class' => 'image'), 'show', $item
                    );
            ?>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>

    <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
    <a href="#" class="jcarousel-control-next">&rsaquo;</a>

    <p id="jcarousel-pagination-<?php echo $id_suffix; ?>"></p>
</div>

<script type='text/javascript'>
var carouselConfig = <?php echo json_encode($configs['carousel']);?>;
var configs = <?php echo json_encode($configs);?>;
var carousel = jQuery('#jcarousel-<?php echo $id_suffix; ?>').jcarousel(carouselConfig);
<?php if(isset($configs['autoscroll'])): ?>
var autoscrollConfig = <?php echo json_encode($configs['autoscroll']);?>;
carousel.jcarouselAutoscroll(autoscrollConfig);
<?php endif; ?>
</script>
