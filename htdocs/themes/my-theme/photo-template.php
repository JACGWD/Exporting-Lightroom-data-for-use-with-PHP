<!doctype html>
<!-- forces the browser into web standards mode -->

<!-- Warning: All these comments may force the UTF-8 character set definition (line #36) too far down for valiation. Please delete all these comments if you want your code to validate.  -->

<!--
This code if from the HTML 5 Boilerplate Project, version 6.1.0 https://html5boilerplate.com/
See: https://github.com/h5bp/html5-boilerplate/blob/master/src/index.html
 -->
 <html class="no-js" lang="en">
 <!-- lang="en" specify language for SEO -->

 <!-- By default the HTML tag gets a class of "no javascript" (.no-js). If javascript is enabled in the browser, Modernizr will automatically change it to whatever the browser is capable of. Use Firebug or any web inspector tool to see this in action. -->

 <head>
<!-- instructions for the browser start here -->

   <meta charset="utf-8">
   <!-- UTF is important for non-English characters -->
   <!-- utf-8 line is important for validation -->

   <meta http-equiv="x-ua-compatible" content="ie=edge">

 <!--
   <link rel="canonical" href="#" />
   When posting duplicate content on the web, such as a portfolio picece on gwd.ca and on your own site - point to the "official" version here -->


<!-- Start tags important for *basic* Search Engine Optimization here -->
   <title><?php echo $title ?></title>
   <!-- title tag: important for SEO, bookmarks, tab/window label -->
   <!-- 70 characters or less, use keywords at the beginning -->


   <meta name="description" content="<?php echo $description ?>">
   <!-- description tag: important for SEO -->
   <!-- 155 characters or less, use keywords -->

   <!-- End tags important for *basic* Search Engine Optimization here -->


   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- step 1 in designing for mobile -->


<link rel="manifest" href="site.webmanifest">
<!-- The web app manifest provides information about a web application (such as its name, author, icon, and description) for websites installed on the homescreen of a mobile device. -->

<link rel="apple-touch-icon" href="icon.png">
<!-- Place favicon.ico in the root directory -->


<!--
*****************
Begin CSS reset options.
Choose one of the following files. Disable the other with a comment.
*****************
-->
<link rel="stylesheet" href="/themes/my-theme/css/normalize.css" media="all" />
<!-- Industry-standard CSS reset, a bit less beginner-friendly -->

<link rel="stylesheet" href="/themes/my-theme/css/simple-css-reset.css" media="all" />
<!-- Default CSS reset -->



<link rel="stylesheet" href="/themes/my-theme/css/style.css?v=2" media="all" />
<!-- Combine all CSS stylesheets into a single CSS file. -->


<meta name="robots" content="noodp, noydir">
<!-- Force Search Engines to use your metadata and not the info in the Open Directory Project or Yahoo! Directory -->


<meta property="author" content="Eric Girouard">
<!-- content="FirstName LastName" -->

 </head>

 <body>
   <!--[if lte IE 9]>
     <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
   <![endif]-->


   <main>
     <!-- Main tag holds the main part of the content of the page. What is important goes here -->
     <!-- This is just sample content. Add your own content here. But do read the links, they are important. -->

     <h1><?php echo $h1 ?></h1>

     <figure>
        <img src="/img/<?php echo $filename . "_1200px.jpg" ?>" />
        <figcaption><?php echo $description ?></figcaption>
     </figure>
   </main>

<aside>
<!-- the <aside> tag is the semantic tag for a sidebar or any sort of content related to whatever is in <main> -->
</aside>

   <!-- All javascript files are to be at the bottom to make the web site faster -->

   <script src="/themes/my-theme/js/modernizr-custom.js"></script>


   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
   <script>window.jQuery || document.write('<script src="/themes/my-theme/js/jquery-3.3.1.min.js"><\/script>')</script>
   <!-- Change the {{JQUERY_VERSION}} and other words in brackets to the real numbers. Such as jquery-3.3.1.min.js -->
   <!-- The first JQuery link loads the library from Google's servers, which is usually faster than your own. -->
   <!-- The second JQuery link only works if the first one fails for some reason. ie If Google link fails load from your own server. -->

   <script src="/themes/my-theme/js/plugins.js"></script>
   <!-- Paste all your JQuery plugin code into one file for fewer http requests -->

   <script src="/themes/my-theme/js/main.js"></script>
   <!-- If you code any JS by hand you can add it to this file -->



   <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID.
   Move the closing comment tag from line 106 to the end of line 97 to enable analytics when the page goes live
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
-->

 </body>

</html>
