# Custom Wordpres Theme - Pluralsight, Lynda, Udemy

All about Wordpress architecture and building custom - sellable Wordpress themes, using `React + Wordpress`

## Useful Links
- [Lynda Wordpress from Scratch Github link](https://github.com/mor10/humescores.git)
## Table of Contents
- [Setting up Wordpress](#setting-up-wordpress)
- [Initial Folder Structure](#initial-folder-structure)
- [CSS Description](#css-description)
- [General Settings Setup](#general-settings-setup)
- [Initial Template](#initial-template)


---

# Setting up Wordpress
[top](#)

We need to turn on debugging for Wordpress :

```php
define('WP_DEBUG', true);
```

# Initial Folder Structure

The initial folder structure is as follows:

- wp-content
    - themes
        - innovoskies
            - index.php
            - screenshot.png
            - styles.css


# CSS Description

You can add description and names on your theme which will reflect in your wordpress dashboard:

```css
/*
Theme name: CreativeSkies Custom Wordpress Theme
Author: Pramod AJ
Description: Custom Theme created for Innovoskies website
testdomain: innovoskies, creativeskies
*/
```

# General Settings Setup

- Goto `Settings` > `General` > `Tagline` = Innovoskies Custom Theme Development
- Goto `Settings` > `PermaLinks` > `Postname` Option

# Initial Template 

## index.php - Initial setup and code:

```php

<?php
/*Main Template File*/
    get_header();
?>

<?php $layout_class = ( function_exists( 'shapely_get_layout_class' ) ) ? shapely_get_layout_class() : ''; ?>
	<div class="row">
		<h1><?php echo get_the_title(); ?></h1>
        <main class="main_content">
            <?php 
                //Start the loop
                if(have_posts()):
                    while(have_posts()):
                        the_post();
                        the_content();
                    endwhile;
                endif;
            ?>
        </main>
	</div>
<?php 
    get_footer();
?>

```

---

## Front-page.php Template

>NOTE: Wordpress will first look for `home.php`, if it doesnt find it, then looks for `front-page.php`, if no, then looks for `index.php`

>NOTE: If the settings are changed to show static webpage, then Wordpress will skip `home.php` and look for `front-page.php`

