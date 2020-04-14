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
        queue_js_file('jquery.jcarousel.min');
        queue_js_file('jcarousel.responsive');
    }

    /**
     * Easy shortcut for carousel of featured items with [featured_carousel]
     * @param array $args
     * @param Zend_View $view
     * @return string HTML to display
     */
    public static function featuredCarousel($args, $view)
    {
        $args['is_featured'] = 1;
        return self::carousel($args, $view);
    }

    /**
     * Easy shortcut for carousel of recent items with [recent_carousel]
     * @param array $args
     * @param Zend_View $view
     * @return string HTML to display
     */
    public static function recentCarousel($args, $view)
    {
        $args['sort'] = 'added';
        $args['order'] = 'd';
        return self::carousel($args, $view);
    }

    /**
     * Build HTML for the carousel
     * @param array $args
     * @param Zend_View $view
     * @return string HTML to display
     */
    public static function carousel($args, $view)
    {
        static $id_suffix = 0;
        if (isset($args['is_featured'])) {
            $params['featured'] = $args['is_featured'];
        }

        if (isset($args['tags'])) {
            $params['tags'] = $args['tags'];
        }

        if (isset($args['user'])) {
            $params['user'] = $args['user'];
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

        if (isset($args['collection'])) {
            $params['collection'] = $args['collection'];
        }

        if (isset($args['num'])) {
            $limit = $args['num'];
        } else {
            $limit = 10;
        }
        $params['hasImage'] = 1;
        $items = get_records('Item', $params, $limit);

        //handle the configs for jCarousel
        $configs = array('carousel' => array());

        //carousel configs
        if (isset($args['speed'])) {
            if (is_numeric($args['speed'])) {
                $configs['carousel']['animation'] = (int) $args['speed'];
            } else {
                $configs['carousel']['animation'] = $args['speed'];
            }
        }
        if (isset($args['showtitles']) && $args['showtitles'] == 'true') {
            $configs['carousel']['showTitles'] = true;
        }
        //autoscroll configs
        if (isset($args['autoscroll']) && $args['autoscroll'] == 'true') {
            $configs['autoscroll'] = array();
            if (isset($args['interval'])) {
                $configs['autoscroll']['interval'] = (int) $args['interval'];
            }
        }
        $configs['carousel']['wrap'] = 'circular';
        $html = $view->partial('carousel.php', array('items' => $items, 'id_suffix' => $id_suffix, 'configs' => $configs));
        $id_suffix++;
        return $html;
    }
}
