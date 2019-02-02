# Exporting Lightroom data for use with PHP

A simple set of scripts to quickly build a photography gallery using PHP variables based on data extracted from Adobe Lightroom.

Requires the donationware [LR/Transporter plugin by Timothy Armes](http://www.photographers-toolbox.com/products/lrtransporter.php).

## Functionality

These scripts extract metadata values (title, caption, etc) from Adobe Lightroom and insert them into individual PHP files as PHP variables. The variables are then inserted into a PHP template which is dynamically rendered by the web server.

If one is willing to purchase a license from Timothy Armes (very highly encouraged) the unlocked plugin can export any number of images from Adobe Lightroom hence giving the opportunity to quickly build a custom photography gallery with minimal effort.

Of course, the scripts could be edited to generate a SQL file to upload the same data to MySQL. However, the use case of these scripts is to teach an intro to the concept of variables to beginner web design students who learned Lightroom in the previous semester. This exercise is a preparatory step towards learning MySQL at a later time.


## Included files

This repository contains two files:

1. *page-export-script.php* which is the code that is pasted into LR/Transport's *Companion Files* tab. This exports only a few pieces of information (title, caption, etc) from Lightroom. The plugin can access many more than what is demoed here. This is what is known as a "detail" page.
2. *thumbnails-page-export-script.php* is the code that is pasted into LR/Transport's *Summary File* tab. It's role is to build a thumbnails page complete with navigation, images and text links. This corresponds to the "master" file of a "master/detail" set of pages.

See this other [JACGWD repository for more information on master/detail page relationships](https://github.com/JACGWD/Basic-HTML).
