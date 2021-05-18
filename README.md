# Shortcode Carousel

## Description
Omeka Classic plugin that adds a shortcode to create a carousel of items using jCarousel.

The basic shortcode is `[carousel]`. 
The shortcode `[recent_carousel]` and `[featured_carousel]` are shortcuts to creating a carousel of recent and featured items, respectively.

## Installation
Uncompress files and rename plugin folder "ShortcodeCarousel".

Then install it like any other Omeka plugin.

## Plugin specific options
- **speed**: sets the speed for the scrolling animation. May be "fast", "slow", or a time in milliseconds. Default is 400. For example: `[carousel speed=slow]` or `[carousel speed=500]`
- **autoscroll**: setting autoscroll=true will make the items automatically scroll
- **interval**: when autoscroll is on, interval sets the interval between scrolling in milliseconds. Default is 3000. For example: `[carousel autoscroll=true interval=700]`
- **pauseonhover**: setting pauseonhover=true will temporarily pause the carousel's scrolling when mouse will be hovering over it. For example: `[carousel pauseonhover=true]`
- **showtitles**: setting showtitles=true will display the item title in the carousel. For example: `[carousel showtitles=true]`
- **showtitlesastooltips**: setting showtitlesastooltips=true will use the item title as text for image's tooltip in the carousel. For example: `[carousel  showtitles=true showtitlesastooltips=true]`
- **hidenavigation**: setting hidenavigation=true will hide the carousel's navigation bar. For example: `[carousel hidenavigation=true]`

## Item shortcode general options
The carousel shortcode uses also the following options, defined for Items:
- **is_featured**, with 1 or 0
- **user**, with user id
- **ids**, with a range of id
- **sort_field**, with a sort field
- **sort_dir**, with the sort dir "a" or "d"
- **collection**, with the collection id
- **num**, with the number of items to show

## Usage outside of Simple Pages
Theme developers may add support for usage anywhere on their Omeka site. For example, you could create a theme setting called Carousel (as an HTML text area where a user might place the shortcode) and add the following to your homepage or other theme template.
```
<?php
    $t = get_theme_option('Carousel');
    echo $this->shortcodes($t);
?>
```

## Warning
Use it at your own risk.

It’s always recommended to backup your files and your databases and to check your archives regularly so you can roll back if needed.

## Troubleshooting

See online issues on the [plugin issues] page on GitHub.

## License

This plugin is published under [GNU/GPL].

This program is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation; either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
details.

You should have received a copy of the GNU General Public License along with
this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.

## Copyright

* Copyright Omeka Team, 2014-2019
* Copyright Daniel Berthereau, 2020 (see [Daniel-KM] on GitHub)
* Copyright Daniele Binaghi, 2021 (see [DBinaghi] on GitHub)


[Shortcode Carousel]: https://github.com/omeka/plugin-ShortcodeCarousel
[Omeka]: https://omeka.org/classic
[plugin issues]: http://omeka.org/forums/forum/plugins
[GNU/GPL]: https://www.gnu.org/licenses/gpl-3.0.html
[Daniel-KM]: https://github.com/Daniel-KM "Daniel Berthereau"
[DBinaghi]: https://github.com/DBinaghi "Daniele Binaghi"
