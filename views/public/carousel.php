<div class="jcarousel-wrapper">
    <div class="jcarousel">
        <ul>
        <?php foreach($items as $item): ?>
            <li>
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

    <p class="jcarousel-pagination"></p>
</div>
