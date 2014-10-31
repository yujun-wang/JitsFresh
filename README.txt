Measure Bootstrap Theme

Here are some docs and info to get started.


CSS folder structure:

/bootstrap: the original css bootstrap files, if you want to change versions, just drop and replace them here and put your overrides in _bootstrap-overrides.scss.

/vendor: in here are all the plugins, libraries and external stuff used throughout the theme.

/modules: contains reusable element styles like new buttons, form control styles, etc plus the mixins library with some cool helpers used for the theme.

/partials:
	/pages: contains all the pages styles separated by html page, each one is uniquely contained by adding an ID into the body of their respective page, like a namespace.

	/snippets: in here are blocks of styles for html sections that can be reusable in different pages, e.g. the Screenshots Slider used in the landing page and in the features page reuse the same styles located in snippets.

	_config.scss: is used to import fonts and apply variables used throughout the scss files.
	
	_layout.scss: contains the styles that apply for the layout of the theme, in this case the navbar header and the footer.


Everything is imported onto the theme.scss file using the @import statement except for vendor files (these are referenced explicitly in each page when needed). The compiled file for the theme.scss is located under compiled/theme.css, this way the html pages only reference a single file which makes it easier to maintain.

If you prefer to use normal css, there's the expanded-theme.css which has all the styles in an expanded format, it's easy to edit styles thanks to the body ID that identifies each page.


************

Credits:

- Lato Google webfont http://www.google.com/webfonts/specimen/Lato
- Icons by Brankic1979 http://www.brankic1979.com/icons/
- Sample blog image bought from http://es.123rf.com/photo_8349325_encantado-paisaje-de-nepal.html - electronic license
- Carousel iPhone image from http://www.pixeden.com/psd-mock-up-templates/3d-view-iphone-5-psd-vector-mockup
- Social icons from http://medialoot.com/item/round-social-media-icons/


************

Changelog

v2.0
- Update to latest Bootstrap 3 version
- Updated pages to more modern styles

v1.0.2
- Updated Bootstrap version to 2.2.2
- Fixed a bug with the dropdown menu on mobile devices

v1.0.1
- Fixed some IE Bugs

v1.0
- Initial release

