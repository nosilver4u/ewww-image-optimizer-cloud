# EWWW Image Optimizer (Cloud edition)
**Minimum WordPress:** 4.9
**Minimum PHP:** 5.6

[![WordPress Plugin Downloads](https://img.shields.io/wordpress/plugin/dt/ewww-image-optimizer-cloud.svg)](https://wordpress.org/plugins/ewww-image-optimizer-cloud/)
[![WordPress Plugin Rating](https://img.shields.io/wordpress/plugin/r/ewww-image-optimizer-cloud.svg)](https://wordpress.org/support/plugin/ewww-image-optimizer-cloud/reviews/)
[![WordPress Plugin Version](https://img.shields.io/wordpress/plugin/v/ewww-image-optimizer-cloud.svg)](https://wordpress.org/plugins/ewww-image-optimizer-cloud/)
[![WordPress Tested Up To](https://img.shields.io/wordpress/v/ewww-image-optimizer-cloud.svg)](https://wordpress.org/plugins/ewww-image-optimizer-cloud/)
[![GNU General Public License 3.0](https://img.shields.io/github/license/nosilver4u/ewww-image-optimizer-cloud.svg)](https://www.gnu.org/licenses/gpl-3.0.en.html)

Speed up your website and improve your visitors' experience by automatically compressing and resizing images and PDFs. Boost SEO and improve sales.


## Description

The EWWW Image Optimizer (cloud edition) will increase your page speeds by way of image optimization. Increased page speeds can result in better search engine rankings, and will also improve conversion rates (increased sales and signups). It will also save you storage space and bandwidth. While EWWW I.O. will automatically optimize new images that you upload, it can also optimize all the images that you have already uploaded, and optionally convert your images to the best file format. You can choose pixel perfect compression or high compression options that are visually lossless. The cloud edition is being phased out in favor of the core EWWW Image Optimizer plugin.

EWWW I.O. will optimize images uploaded and created by any plugin, and features special integrations with many popular plugins, detailed below.

**Why use EWWW Image Optimizer?**

1. **No Speed Limits** and [unlimited file size](https://ewww.io/unlimited-file-size/). Using automatic Background Optimization and optional Parallel Optimization, get rid of upload delays and get back to doing what you love.
1. **Smooth Handling** with pixel-perfect optimization using industry-leading tools and progressive rendering.
1. **High Torque** as we bring you the best compression/quality ratio available with our lossy options for JPG, PNG, and PDF files.
1. **Adaptive Steering** with intelligent conversion options to get the right image format for the job (JPG, PNG, or GIF).
1. **Free Parking** means you never pay for an image we can’t compress, you are never billed for a month you do not use the API, and pre-paid credits never expire. Plus, get WebP image generation at no extra cost: any JPG or PNG can be converted to Google’s next-generation image format.
1. **Comprehensive Coverage:** no image gets left behind, optimize everything on your site, beyond just the WordPress Media Library.
1. **Safety First:** all communications are secured with top SSL encryption.
1. **Roadside Assistance:** top-notch support is in our DNA. For priority assistance, be sure to use your registered email or mention your registered email when you [contact us for help](https://ewww.io/contact-us/).
1. **Pack a Spare:** free image backups store your original images for 30 days.

Images are optimized via specialized servers that utilize the best tools available in lossless or lossy mode. Our lossy compression uses unique algorithms to gain maximum compression while remaining visually lossless. Your images can even be converted to the most suitable file format using the appropriate options. Using the EWWW I.O. API will allow the plugin to work on any hosting platform, and can also be desirable if you cannot, or do not want to use the exec() function on your server, or prefer to offload the resource demands of optimization.


### Automatic Resizing ###

With ExactDN support, images will be automatically resized to fit the page and device size. ExactDN also enables basic retina support and automatic compression.


### Support

If you need assistance using the plugin, please visit our [Support Page](https://ewww.io/contact-us/).


### Bulk Optimize

Optimize all your images from a single page using the Bulk Scanner. This includes the Media Library, your theme, and a handful of pre-configured folders (see Optimize Everything Else below). Officially supported galleries (GRAND FlaGallery, NextCellent and NextGEN) have their own Bulk Optimize pages.


### Optimize Everything Else

Configure any folder within your WordPress folder to be optimized. The Bulk Scan under Media->Bulk Optimize will optimize theme images, BuddyPress avatars, BuddyPress Activity Plus images, Meta Slider slides, WP Symposium Pro avatars, GD bbPress attachments, Grand Media Galleries, and any user-specified folders. Additionally, this tool can run on an hourly basis via wp_cron to keep newly uploaded images optimized. Scheduled optimization should not be used for any plugin that uses the built-in Wordpress image functions.


### Skips Previously Optimized Images

All optimized images are stored in the database so that the plugin does not attempt to re-optimize them unless they are modified. On the Bulk Optimize page you can view a list of already optimized images. You may also remove individual images from the list, or use the Force optimize option to override the default behavior. The re-optimize links on the Media Library page also force the plugin to ignore the previous optimization status of images.


### WP Image Editor

All images created by the built-in WP_Image_Editor class will be automatically optimized. Current implementations are GD, Imagick, and Gmagick. Images optimized via this class include Animated GIF Resize, BuddyPress Activity Plus (thumbs), Easy Watermark, Hammy, Imsanity, MediaPress, Meta Slider, MyArcadePlugin, OTF Regenerate Thumbnails, Regenerate Thumbnails, Simple Image Sizes, WP Retina 2x, WP RSS Aggregator and probably countless others. If you are not sure if a plugin uses WP_Image_Editor, [just ask](https://ewww.io/contact-us/).


### WebP Images

ExactDN enables one-click WebP with JS WebP Rewriting. Otherwise, can generate WebP versions of your images, and enables you to serve even smaller images to supported browsers. Several methods are available for serving WebP images, including Apache-compatible rewrite rules and our JS WebP Rewriting option compatible with caches and CDNs. Also works with the WebP option in the Cache Enabler plugin from KeyCDN.


### WP-CLI

Allows you to run all Bulk Optimization processes from your command line, instead of the web interface. It is much faster, and allows you to do things like run it in 'screen' or via regular cron (instead of wp-cron, which can be unpredictable on low-traffic sites). Install WP-CLI from wp-cli.org, and run 'wp-cli.phar help ewwwio optimize' for more information or see the [Docs](https://docs.ewww.io/article/25-optimizing-with-wp-cli).


### FooGallery

All images uploaded and cached by FooGallery are automatically optimized. Previous uploads can be optimized by running the Media Library Bulk Optimize. Previously cached images can be optimized by entering the wp-content/uploads/cache/ folder under Folders to Optimize and running a Scan & Optimize from the Bulk Optimize page.


### NextGEN Gallery

Features optimization on upload capability, re-optimization, and bulk optimizing. The NextGEN Bulk Optimize function is located near the bottom of the NextGEN menu, and will optimize all images in all galleries. It is also possible to optimize groups of images in a gallery, or multiple galleries at once.


### NextCellent Gallery

Features all the same capability as NextGEN, and is the continuation of legacy (1.9.x) NextGEN support.


### GRAND Flash Album Gallery

Features optimization on upload capability, re-optimization, and bulk optimizing. The Bulk Optimize function is located near the bottom of the FlAGallery menu, and will optimize all images in all galleries. It is also possible to optimize groups of images in a gallery, or multiple galleries at once.


### Image Store

Uploads are automatically optimized. Look for Optimize under the Image Store (Galleries) menu to see status of optimization and for re-optimization and bulk-optimization options. Using the Bulk Optimization tool under Media Library automatically includes all Image Store uploads.


### CDN Support

[WP Offload Media](https://wordpress.org/plugins/amazon-s3-and-cloudfront/) is the officially supported (and recommended) plugin for uploads to Amazon S3 and Digital Ocean Spaces. We also support the Azure Storage and Cloudinary plugins. All pull mode CDNs like Cloudflare, KeyCDN, MaxCDN, and Sucuri CloudProxy work automatically, but will require you to purge the cache after a bulk optimization.


### WPML Compatible

Tested regularly to ensure compatibility with multilingual sites. Learn more at https://wpml.org/plugin/ewww-image-optimizer/


### Translations

Huge thanks to all our translators! See the full list here: https://translate.wordpress.org/projects/wp-plugins/ewww-image-optimizer-cloud/contributors

If you would like to help translate this plugin (new or existing translations), you can do so here: https://translate.wordpress.org/projects/wp-plugins/ewww-image-optimizer-cloud
To receive updates when new strings are available for translation, you can signup here: https://ewww.io/register/


## Installation

1. Upload the "ewww-image-optimizer-cloud" plugin to your '/wp-content/plugins/' directory.
1. Activate the plugin through the "Plugins" menu in WordPress.
1. Purchase a plan via https://ewww.io/plans/
1. Follow the activation instructions.
1. *Optional* Visit the settings page to enable/disable specific tools and turn on advanced optimization features.
1. Done!

Additional documentation can be found at https://docs.ewww.io. If you need further assistance using the plugin, please visit our [Support Page](https://ewww.io/contact-us/).


## Frequently Asked Questions

### Google Pagespeed says my images need compressing or resizing, but I already optimized all my images. What do I do?

Try this for starters: https://docs.ewww.io/article/5-pagespeed-says-my-images-need-more-work


### Does the plugin replace existing images?

Yes, but only if the optimized version is smaller. The plugin should NEVER create a larger image.


### Can I resize my images with this plugin?

Yes, you can, set it up on the Advanced tab.


### Can I lower the compression setting for JPGs to save more space?

The lossy optimization using the API will determine the ideal quality setting and give you the best results, but you can also adjust the default quality for conversion and resizing. More information here: https://docs.ewww.io/article/12-jpq-quality-and-wordpress

### The bulk optimizer doesn't seem to be working, what can I do?

See https://docs.ewww.io/article/39-bulk-optimizer-failure for full troubleshooting instructions.

### I want to know more about image optimization, and why you chose these options/tools.

That's not a question, but since I made it up, I'll answer it. See these resources:  
https://developers.google.com/speed/docs/insights/OptimizeImages
http://developer.yahoo.com/performance/rules.html#opt_images  


## Contact and Credits

Written by [Shane Bishop](https://ewww.io). Based upon CW Image Optimizer, which was written by [Jacob Allred](http://www.jacoballred.com/) at [Corban Works, LLC](http://www.corbanworks.com/). CW Image Optimizer was based on WP Smush.it. PEL is the work of Martin Geisler, Lars Olesen, and Erik Oskam. ExactDN and HTML parsing classes based upon the Photon module from Jetpack.
