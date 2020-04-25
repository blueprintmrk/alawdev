--------------------

1b13 - 20140307

Created a version of wp_is_mobile() that excludes iPads.

--------------------

1b14 - 20140415

Added specific support for open graph.

--------------------

1b15 - 20140629

The homepage should no longer show "Home" for Open Graph.

--------------------

1b16 - 20140701

Sitemap should now hide thank-you page (based on slug)

--------------------

1b17 - 20150118

Added defaultHeadshotFunc to functions.php

--------------------

1b18 - 20150506

Addressed a bug in defaultHeadshotFunc that would cause it to prepend $possibleHeadshotPath even when a valid relative URL was being passed;

Modified possibleHeadshotPath so that it now reads "/wp-content/media/headshots/" due to the prevalence of desktop/mobile sites;

Added mobOrDsktpInitialClass();

--------------------

100.0.0 - 20150804

Brought the version to 100 because there's a public theme out there called "universal" and this is prompting our websites to prompt for a theme upgrade when the two themes are not the same. By increasing our version number we should be able to avoid the prompt.

Modified the sharethis loading in functions.php so that it would no longer block render.

--------------------

101.0.0 - 20160216

Moved Open Graph support out of functions.php;

Implemented future implementation of title tag;

Updated output_nc_sitemap() (returns immediately if current entry is not a site map page);

Added support for feature images on pages, and therefore the ability to specify og:image (requires DSK Open Graph);

--------------------

101.1.0 - 20160531

Removed Author rel functionality;

Removed nc_generate_more_posts_by_author_link() as this is now in a plugin. This also means that the bases will have three global variables less: $nc_author_name, $nc_author_url, and $nc_enable_rel_author_url.

--------------------

101.1.1 - 20160606

Re-added nc_generate_more_posts_by_author_link() so that if the Public Author Info is disabled or not installed there won't be a PHP error. The function is simpler than ever, though. It will simply return get_the_author().

--------------------

101.1.2 - 20160615

Modified add_sharing_capabilities_nc() so that it can support both http and https.

--------------------

101.1.3 - 20160618

Removed ShareThis dependency. Deleted univ_stLightOptions() and add_sharing_capabilities_nc(). Reworked shareThisWrapper() as well as the css that goes with it.

--------------------

101.1.4 - 20160624

Removed map functions and created a plugin instead: DSK Maps.

--------------------

101.1.5 - 20160626

Reverted to http when accessing social.nextclient.com.

--------------------

101.1.6 - 20160830

Updated 404.php to display search form and site map.

--------------------

101.1.7 - 20170301

Added support for both alt and title tags on featured images.

--------------------

101.1.8 - 20170309

Modified search.php to show a site map when zero results are found.

--------------------

101.1.9 - 20170326

Added support for [img] tag.

--------------------

101.2.0 - 20170407

Headshot shortcode will now show both alt and title attributes.

--------------------

101.2.2 - 20170628

shareThisWrapper function updated to present social media icons differently. Also added return false when feed. This update requires css changes to child theme.

101.2.3 - 20170907

Sharing icons don't have an href attribute by default. One is added on-click.

101.2.4 - 20181010

Site Map link is excluded from Site Map page's list of pages (main content).