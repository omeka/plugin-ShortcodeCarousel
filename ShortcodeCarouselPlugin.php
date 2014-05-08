<?php

class ShortcodeCarouselPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array('public_head');

    public function setUp()
    {
        add_shortcode('carousel', array('ShortcodeCarouselPlugin', 'carousel'));
        add_shortcode('featured_carousel', array('ShortcodeCarouselPlugin', 'featuredCarousel'));
        add_shortcode('recent_carousel', array('ShortcodeCarouselPlugin', 'recentCarousel'));
        parent::setUp();
    }

    public function hookPublicHead($args)
    {
        queue_css_file('jcarousel.responsive');
        queue_js_file('jcarousel.responsive');
        queue_js_file('jquery.jcarousel.min');
    }

    public static function featuredCarousel($args, $view)
    {
        $args['is_featured'] = 1;
        return self::carousel($args, $view);
    }

    public static function recentCarousel($args, $view)
    {
        $args['sort'] = 'added';
        $args['order'] = 'd';
        return self::carousel($args, $view);
    }

    public static function carousel($args, $view)
    {
        if (isset($args['is_featured'])) {
            $params['featured'] = $args['is_featured'];
        }

        if (isset($args['tags'])) {
            $params['tags'] = $args['tags'];
        }

        if (isset($args['user'])) {
            $params['users'] = $args['user'];
        }

        if (isset($args['ids'])) {
            $params['range'] = $args['ids'];
        }

        if (isset($args['sort'])) {
            $params['sort_field'] = $args['sort'];
        }

        if (isset($args['order'])) {
            $params['sort_dir'] = $args['order'];
        }

        if (isset($args['num'])) {
            $limit = $args['num'];
        } else {
            $limit = 10; 
        }
        $params['hasImage'] = 1;
        $items = get_records('Item', $params, $limit);
        echo $view->partial('carousel.php', array('items' => $items));
    }
}
