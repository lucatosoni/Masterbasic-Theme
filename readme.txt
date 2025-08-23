MASTER BASIC WP THEME - Advanced WordPress Theme with Barba.js

Theme Features:
- Smooth page transitions with Barba.js
- GSAP animations and ScrollTrigger support
- Comments disabled by default
- Gutenberg editor disabled
- Custom SMTP configuration
- Responsive design with BasCSS framework
- Google Fonts integration (EB Garamond & Space Grotesk)

File Structure:
- style.css                         → Theme info and base styles with Barba.js transitions
- functions.php                     → Theme setup + Barba.js enqueue + GSAP + utilities
- header.php                        → Header with Barba.js container wrapper
- footer.php                        → Footer with Barba.js container closure
- index.php                         → Fallback template (shows posts/articles)
- single.php                        → Single post template
- page.php                          → Single page template
- archive.php                       → Base archive template (categories, dates, etc.)
- archive-custom_post.php           → Custom Post Type archive template
- taxonomy-custom_taxonomy.php      → Custom taxonomy archive template
- homepage.php                      → Custom homepage template
- assets/js/barba-init.js          → Barba.js initialization and configuration

Installation:
1. Upload the theme folder to wp-content/themes/
2. Activate the theme from WordPress admin
3. Create an "assets/js" folder in your theme directory
4. Upload the barba-init.js file to assets/js/

Requirements:
- WordPress 5.0+
- Modern browser with ES6 support for Barba.js transitions

Text Domain: masterbasic-wptheme