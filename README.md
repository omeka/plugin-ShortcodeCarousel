# Shortcode Carousel

## Description
Omeka Classic plugin to add a shortcode to create a carousel of items

The plugin adds a shortcode to create a carousel of items using jCarousel.

The basic shortcode is `[carousel]`.

The shortcode `[recent_carousel]` and `[featured_carousel]` are shortcuts to creating a carousel of recent and featured items, respectively.

## Installation
Uncompress files and rename plugin folder "EmailNotification".

Then install it like any other Omeka plugin.

## Options
**speed**: sets the speed for the scrolling animation. May be "fast", "slow", or a time in milliseconds. Default is 400. For example: `[carousel speed=slow]` or `[carousel speed=500]`

**autoscroll**: setting autoscroll=true will make the items automatically scroll

**interval**: when autoscroll is on, interval sets the interval between scrolling in milliseconds. Default is 3000. For example: `[carousel autoscroll=true interval=700]`

**showtitles**: setting showtitles=true will display the item title in the carousel. For example `[carousel showtitles=true]`





## Warning
Use it at your own risk.

It’s always recommended to backup your files and your databases and to check your archives regularly so you can roll back if needed.
