Shortcode Carousel (plugin for Omeka)
=====================================

[Shortcode Carousel] is a plugin for [Omeka] that allows to add a carousel of
items in a page.


Installation
------------

Uncompress files and rename plugin folder "ShortcodeCarousel".

Then install it like any other Omeka plugin and follow the config instructions.


Usage
-----

Use the shortcode `[carousel]`, `[featured_carousel]`, or `[recent_carousel]`.

Options are params to get items:
- `is_featured`, with 1 or 0
- `user`, with user id
- `ids`, with a range of id
- `sort_field`, with a sort field
- `sort_dir`, with the sort dir "a" or "d"
- `collection`, with the collection id
- `num`, with the number of items to show
- `speed`, with a number for the duration
- `showtitles`, with "true" if needed
- `autoscroll`, with "true" if needed


Warning
-------

Use it at your own risk.

It’s always recommended to backup your files and your databases and to check
your archives regularly so you can roll back if needed.


Troubleshooting
---------------

See online issues on the [plugin issues] page on GitHub.


License
-------

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


Copyright
---------

* Copyright Omeka Team, 2014-2019
* Copyright Daniel Berthereau, 2020 (see [Daniel-KM] on GitHub)


[Shortcode Carousel]: https://github.com/omeka/plugin-ShortcodeCarousel
[Omeka]: https://omeka.org/classic
[plugin issues]: http://omeka.org/forums/forum/plugins
[GNU/GPL]: https://www.gnu.org/licenses/gpl-3.0.html
[Daniel-KM]: https://github.com/Daniel-KM "Daniel Berthereau"
