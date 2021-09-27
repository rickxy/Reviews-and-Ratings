
<!DOCTYPE html>
<html dir='ltr' lang='en-US' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
<head>
<link href='https://www.blogger.com/static/v1/widgets/1394523530-widget_css_bundle.css' rel='stylesheet' type='text/css'/>
<script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4529508631166774",
    enable_page_level_ads: true
  });
</script>
<script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-4529508631166774",
          enable_page_level_ads: true
     });
</script>
<meta charset='UTF-8'/>
<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
<meta content='EBWNjNWqFm-jWpoaN33e7L-7YFo81KO43GajyvVOrBU' name='google-site-verification'/>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<meta content='blogger' name='generator'/>
<link href='https://www.webslesson.info/favicon.ico' rel='icon' type='image/x-icon'/>
<link href='https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html' rel='canonical'/>
<link rel="alternate" type="application/atom+xml" title="Webslesson - Atom" href="https://www.webslesson.info/feeds/posts/default" />
<link rel="alternate" type="application/rss+xml" title="Webslesson - RSS" href="https://www.webslesson.info/feeds/posts/default?alt=rss" />
<link rel="service.post" type="application/atom+xml" title="Webslesson - Atom" href="https://www.blogger.com/feeds/8964111134041337103/posts/default" />

<link rel="alternate" type="application/atom+xml" title="Webslesson - Atom" href="https://www.webslesson.info/feeds/6003697290998394208/comments/default" />
<!--Can't find substitution for tag [blog.ieCssRetrofitLinks]-->
<link href='https://i.ytimg.com/vi/JmnM-K1HPFE/hqdefault.jpg' rel='image_src'/>
<meta content='https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html' property='og:url'/>
<meta content='How to Create Review &amp; Rating Page in PHP with Ajax' property='og:title'/>
<meta content='PHP Review &amp; Rating System using Ajax - Part 1    PHP Review &amp; Rating System using Ajax - Part 2  In this post, you can find How to create p...' property='og:description'/>
<meta content='https://lh5.googleusercontent.com/proxy/jSrAPJvGpsNARd5F9ckmzJZp5Vrc7YSg-HAqcKxdugICkSO1MF8gIjdDT_--ABZiY-XR8lETPCuuuKz3qtRHoPZ4GqI=w1200-h630-n-k-no-nu' property='og:image'/>
<!--[if IE]> <script> (function() { var html5 = ("abbr,article,aside,audio,canvas,datalist,details," + "figure,footer,header,hgroup,mark,menu,meter,nav,output," + "progress,section,time,video").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
<title>How to Create Review & Rating Page in PHP with Ajax | Webslesson</title>
<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
<style id='page-skin-1' type='text/css'><!--
/*
-----------------------------------------------
Name : Semplicemente
Author : Lasantha Bandara
URL 1 : http://www.premiumbloggertemplates.com/
URL 2: http://www.bloggertipandtrick.net/
Theme URL : http://www.premiumbloggertemplates.com/semplicemente-blogger-template/
Date : May 2015
License : GNU General Public License v2 or later
This template is free for both personal and commercial use, But to satisfy the 'attribution' clause of the license, you are required to keep the footer links intact which provides due credit to its authors.
----------------------------------------------- */
body#layout ul{list-style-type:none;list-style:none}
body#layout ul li{list-style-type:none;list-style:none}
body#layout #headerbwrap {height:auto;}
body#layout #content {}
body#layout .widget_search {display:none;}
body#layout #mastheadpbt {overflow:hidden;}
body#layout #site-navigationpbt {display: none;}
body#layout .site-socialpbt {display: none;}
/* Variable definitions
====================
*/
/* Use this with templates/template-twocol.html */
.section, .widget {
margin:0;
padding:0;
}
/*--------------------------------------------------------------
Reset
--------------------------------------------------------------*/
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
border: 0;
font-family: inherit;
font-size: 100%;
font-style: inherit;
font-weight: inherit;
margin: 0;
outline: 0;
padding: 0;
vertical-align: baseline;
}
html {
font-size: 62.5%; /* Corrects text resizing oddly in IE6/7 when body font-size is set using em units http://clagnut.com/blog/348/#c790 */
overflow-y: scroll; /* Keeps page centered in all browsers regardless of content height */
-webkit-text-size-adjust: 100%; /* Prevents iOS text size adjust after orientation change, without disabling user zoom */
-ms-text-size-adjust:     100%; /* www.456bereastreet.com/archive/201012/controlling_text_size_in_safari_for_ios_without_disabling_user_zoom/ */
box-sizing: border-box; /* Apply a natural box layout model to the document; see http://www.paulirish.com/2012/box-sizing-border-box-ftw/ */
}
*,
*:before,
*:after { /* Inherit box-sizing to make it easier to change the property for components that leverage other behavior; see http://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
box-sizing: inherit;
}
body {
background: #f2f2f2; /* Fallback for when there is no custom background color defined. */
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
main,
nav,
section {
display: block;
}
ol, ul {
list-style: none;
}
table { /* tables still need 'cellspacing="0"' in the markup */
border-collapse: separate;
border-spacing: 0;
}
caption, th, td {
font-weight: normal;
text-align: left;
}
blockquote:before, blockquote:after,
q:before, q:after {
content: "";
}
blockquote, q {
quotes: "" "";
}
a:focus {
outline: thin dotted;
}
a:hover,
a:active {
outline: 0;
}
a img {
border: 0;
}
pre
{
border:1px solid #cccccc;
}
/*--------------------------------------------------------------
Typography
--------------------------------------------------------------*/
body,
button,
input,
select,
textarea {
color: #888888;
font-family: 'PT Serif', sans-serif;
font-size: 14px;
line-height: 1.8;
text-rendering: optimizeLegibility;
-webkit-font-smoothing: antialiased;
-webkit-text-size-adjust: none;
}
h1, h2, h3, h4, h5, h6 {
clear: both;
color: #404040;
}
h1 {font-size: 26px;line-height:3.4rem;}
h2 {font-size: 24px;line-height:2.8rem;}
h3 {font-size: 20px;line-height:2.4rem;}
h4 {font-size: 18px;}
h5 {font-size: 15px;}
h6 {font-size: 12px;}
p {
margin-bottom: 1.5em;
}
b, strong {
font-weight: bold;
}
dfn, cite, em, i {
font-style: italic;
}
blockquote {
display: block;
padding: 15px 15px 15px 45px;
margin: 0 0 1.5em;
position: relative;
border-left: 5px solid #36c1c8;
border-right: 2px solid #36c1c8;
}
blockquote::before {
content: "\201C";
font-size: 60px;
line-height: 1;
font-weight: bold;
position: absolute;
left: 10px;
top: 5px;
}
address {
margin: 0 0 1.5em;
}
pre {
background: rgba(0,0,0,.05);
font-family: "Courier 10 Pitch", Courier, monospace;
font-size: 15px;
font-size: 1.5rem;
line-height: 1.6;
margin-bottom: 1.6em;
max-width: 100%;
overflow: auto;
padding: 1.6em;
}
code, kbd, tt, var {
font: 15px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
}
abbr, acronym {
border-bottom: 1px dotted #666;
cursor: help;
}
mark, ins {
background: #fff9c0;
text-decoration: none;
}
sup,
sub {
font-size: 75%;
height: 0;
line-height: 0;
position: relative;
vertical-align: baseline;
}
sup {
bottom: 1ex;
}
sub {
top: .5ex;
}
small {
font-size: 85%;
}
big {
font-size: 125%;
}
/*--------------------------------------------------------------
Elements
--------------------------------------------------------------*/
hr {
background-color: rgba(0,0,0,.05);
border: 0;
height: 1px;
margin-bottom: 1.5em;
}
ul, ol {
margin: 0 0 1.5em 3em;
}
ul {
list-style: disc;
}
ol {
list-style: decimal;
}
li > ul,
li > ol {
margin-bottom: 0;
margin-left: 1.5em;
}
dt {
font-weight: bold;
}
dd {
margin: 0 1.5em 1.5em;
}
img {
height: auto; /* Make sure images are scaled correctly. */
max-width: 100%; /* Adhere to container width. */
}
figure {
margin: 0;
}
table {
margin: 0 0 1.5em;
width: 100%;
}
th {
font-weight: bold;
}
.spaceLeft {
padding-left: 5px;
}
.spaceRight {
padding-right: 5px;
}
.spaceLeftDouble {
padding-left: 10px;
}
.spaceRightDouble {
padding-right: 10px;
}
/*--------------------------------------------------------------
Forms
--------------------------------------------------------------*/
button,
input,
select,
textarea {
font-size: 100%; /* Corrects font size not being inherited in all browsers */
margin: 0; /* Addresses margins set differently in IE6/7, F3/4, S5, Chrome */
vertical-align: baseline; /* Improves appearance and consistency in all browsers */
}
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
border: 1px solid #36c1c8;
border-radius: 4px;
background: #ffffff;
cursor: pointer; /* Improves usability and consistency of cursor style between image-type 'input' and others */
-webkit-appearance: none; /* Corrects inability to style clickable 'input' types in iOS */
line-height: 1;
padding: 8px 12px;
-o-transition: all .3s ease-in-out;
-moz-transition: all .3s ease-in-out;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}
button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover {
background: #36c1c8;
color: #ffffff;
}
button:focus,
input[type="button"]:focus,
input[type="reset"]:focus,
input[type="submit"]:focus,
button:active,
input[type="button"]:active,
input[type="reset"]:active,
input[type="submit"]:active {
background: #36c1c8;
color: #ffffff;
outline: none;
}
input[type="checkbox"],
input[type="radio"] {
padding: 0; /* Addresses excess padding in IE8/9 */
}
input[type="search"] {
-webkit-appearance: none; /* Addresses appearance set to searchfield in S5, Chrome */
-webkit-box-sizing: content-box; /* Addresses box sizing set to border-box in S5, Chrome (include -moz to future-proof) */
-moz-box-sizing:    content-box;
box-sizing:         content-box;
}
input[type="search"]::-webkit-search-decoration { /* Corrects inner padding displayed oddly in S5, Chrome on OSX */
-webkit-appearance: none;
}
button::-moz-focus-inner,
input::-moz-focus-inner { /* Corrects inner padding and border displayed oddly in FF3/4 www.sitepen.com/blog/2008/05/14/the-devils-in-the-details-fixing-dojos-toolbar-buttons/ */
border: 0;
padding: 0;
}
input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
textarea {
color: #666;
border: 1px solid rgba(0,0,0,.05);
border-radius: 3px;
}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
textarea:focus {
outline: none;
border: 1px solid rgba(0,0,0,.1);
}
input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"] {
padding: 3px;
}
textarea {
overflow: auto; /* Removes default vertical scrollbar in IE6/7/8/9 */
padding-left: 3px;
vertical-align: top; /* Improves readability and alignment in all browsers */
width: 100%;
}
/*--------------------------------------------------------------
Navigation
--------------------------------------------------------------*/
/*--------------------------------------------------------------
Links
--------------------------------------------------------------*/
a {
color: #404040;
text-decoration:none;
-o-transition: color .3s ease-in-out;
-moz-transition: color .3s ease-in-out;
-webkit-transition: color .3s ease-in-out;
transition: color .3s ease-in-out;
}
a:hover,
a:focus,
a:active {
color: #36c1c8;
}
/*--------------------------------------------------------------
Menus
--------------------------------------------------------------*/
.main-navigationpbt ul li:hover > a,
.main-navigationpbt li.current-menu-item > a,
.main-navigationpbt li.current-menu-parent > a,
.main-navigationpbt li.current-page-ancestor > a,
.main-navigationpbt .current_page_item > a,
.main-navigationpbt .current_page_parent > a {
background: rgba(0,0,0,.03);
}
.main-navigationpbt {
clear: both;
display: block;
float: left;
width: 100%;
}
.main-navigationpbt ul {
list-style: none;
margin: 0;
padding-left: 0;
}
.main-navigationpbt li {
float: left;
position: relative;
}
.main-navigationpbt a {
display: block;
text-decoration: none;
padding: 1.5em 1em;
-o-transition: all .3s ease-in-out;
-moz-transition: all .3s ease-in-out;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}
.main-navigationpbt ul li .indicator {
position: absolute;
right: 43%;
bottom: 5px;
font-family: 'FontAwesome';
font-size: 12px;
line-height: 1;
}
.main-navigationpbt ul li .indicator:before {
content: "\f0d7";
}
.main-navigationpbt ul ul li .indicator {
right: 20px;
bottom: 39%;
}
.main-navigationpbt ul ul li .indicator:before {
content: "\f0da";
}
.main-navigationpbt ul ul {
float: left;
position: absolute;
top: 67px;
left: auto;
z-index: 99999;
background: #ffffff;
border-bottom: 2px solid rgba(0,0,0,.1);
visibility:hidden;
opacity:0;
transition:visibility 0s linear 0.3s,opacity 0.3s linear;
}
.main-navigationpbt ul ul ul {
left: 100%;
top: 0;
visibility:hidden;
opacity:0;
transition:visibility 0s linear 0.3s,opacity 0.3s linear;
}
.main-navigationpbt ul ul a {
width: 200px;
font-size: 95%;
}
.main-navigationpbt ul ul li {
}
.main-navigationpbt li:hover > a {
}
.main-navigationpbt ul li:hover > ul {
visibility:visible;
opacity:1;
transition-delay:0s;
}
.main-navigationpbt ul ul li:hover > ul {
visibility:visible;
opacity:1;
transition-delay:0s;
}
.main-navigationpbt .current_page_item a,
.main-navigationpbt .current-menu-item a {
}
/* Small menu */
.menu-togglepbt {
display: none;
}
@media screen and (max-width: 768px) {
.menu-togglepbt,
.main-navigationpbt.toggled .nav-menu {
display: block;
width: 100%;
border-radius: 4px;
background: #36c1c8;
color: #ffffff;
text-align: left;
float:left;
padding: 1em;
}
.main-navigationpbt.toggled .nav-menu ul {
display: block;
left: auto;
position: relative;
top: 0;
border-bottom: 0px;
padding-left: 5%;
background: #36c1c8;
width: 100%;
opacity: 1;
visibility: visible;
}
.main-navigationpbt.toggled ul ul a {
font-size: 100%;
width: 100%;
}
.menu-togglepbt i {
float:right;
}
.main-navigationpbt ul {
display: none;
}
.main-navigationpbt li {
width: 100%;
}
.main-navigationpbt a {
padding: .5em;
color: #ffffff;
border-bottom: 1px solid rgba(0,0,0,.05);
}
.main-navigationpbt a:hover {
color: #ffffff;
}
.main-small-navigation .menu a {
}
}
.source-code
{
padding:16px;
background-color:#ff4000;
width:100%;
max-width:250px;
border-radius:5px;
color:#fff;
font-size:24px;
text-align:center;
margin:16px 0;
}
#responsive_ads_unit
{
display:none;
}
/*--------------------------------------------------------------
Accessibility
--------------------------------------------------------------*/
/* Text meant only for screen readers */
.screen-reader-text {
clip: rect(1px, 1px, 1px, 1px);
position: absolute !important;
height: 1px;
width: 1px;
overflow: hidden;
}
.screen-reader-text:hover,
.screen-reader-text:active,
.screen-reader-text:focus {
background-color: #f1f1f1;
border-radius: 3px;
box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
clip: auto !important;
color: #21759b;
display: block;
font-size: 14px;
font-weight: bold;
height: auto;
left: 5px;
line-height: normal;
padding: 15px 23px 14px;
text-decoration: none;
top: 5px;
width: auto;
z-index: 100000; /* Above WP toolbar */
}
/*--------------------------------------------------------------
Clearings
--------------------------------------------------------------*/
.clear:before,
.clear:after,
.entry-content:before,
.entry-content:after,
.site-headerpbt:before,
.site-headerpbt:after,
.site-contentpbt:before,
.site-contentpbt:after,
.site-footerpbt:before,
.site-footerpbt:after,
footer.entry-footerpbt:before,
footer.entry-footerpbt:after,
header.entry-header:before,
header.entry-header:after,
.nav-links:before,
.nav-links:after {
content: '';
display: table;
}
.clear:after,
.entry-content:after,
.site-headerpbt:after,
.site-contentpbt:after,
.site-footerpbt:after,
footer.entry-footerpbt:after,
header.entry-header:after,
.nav-links:after {
clear: both;
}
/*--------------------------------------------------------------
Widgets
--------------------------------------------------------------*/
#secondarypbt .widget {
margin: 0 0 1.5em;
padding: 1.5em;
}
/* Make sure select elements fit in widgets */
.widget select {
max-width: 100%;
}
/* Search widget */
.widget_search .search-submitpbt {
/*display: none;*/
}
#secondarypbt .widget h2 {
font-size: 20px;
line-height: 1.8;
}
#secondarypbt .widget h3 {
font-size: 20px;
line-height: 1.8;
}
/*
.widget-title {
border-bottom: 1px solid rgba(0,0,0,.05);
margin-bottom: 1em;
}
.widget-title h3 {
display: inline-block;
border-bottom: 1px solid #36c1c8;
margin-bottom: -1px;
padding: 3px 0;
font-weight: 400;
letter-spacing: -1px;
}
*/
/*--------------------------------------------------------------
Content
--------------------------------------------------------------*/
#pagepbt {
max-width: 1040px;
margin: 2px auto;
}
header.site-headerpbt {
margin-bottom: 1.5em;
}
#primarypbt {
width: 70%;
float:left;
padding-right: 1.5em;
}
#secondarypbt {
width: 30%;
float:right;
}
.site-brandingpbt, .site-socialpbt {
padding: 0.5em 0;
}
.site-brandingpbt {
float:left;
width: 50%;
}
.site-socialpbt {
float: right;
/*padding: 1.5em 0 0 0;*/
padding: 8px;
width: 50%;
text-align: right;
font-size: 20px;
}
.main-navigationpbt, .hentry, #secondarypbt .widget, header.page-header, #comments {
background: #ffffff;
border: 1px solid rgba(0,0,0,.1);
border-bottom: 2px solid rgba(0,0,0,.1);
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}
header.entry-header, footer.entry-footerpbt {
padding: 0 1.5em;
}
header.entry-header {
padding: 1.5em;
border-bottom: 1px solid rgba(0,0,0,.05);
}
header.page-header {
padding: 1.5em;
margin-bottom: 1.5em;
}
header.page-header h1 span {
font-weight: 700;
letter-spacing: -1px;
}
header.entry-header .entry-title {
font-weight: 700;
margin-bottom: 0.5em;
}
footer.entry-footerpbt {
padding: 1.5em;
border-top: 1px solid rgba(0,0,0,.05);
}
.entry-featuredImg {
position: relative;
}
.entry-featuredImg img {
display: block;
width:100%;
-webkit-border-top-left-radius: 4px;
-webkit-border-top-right-radius: 4px;
-moz-border-radius-topleft: 4px;
-moz-border-radius-topright: 4px;
border-top-left-radius: 4px;
border-top-right-radius: 4px;
}
span.overlay-img {
background:url(//1.bp.blogspot.com/-2-ceNbT9H2w/VUzNYmkrEYI/AAAAAAAANAs/H9qtjVxi8uU/s1600/goto.png) center center no-repeat black;
height: 100%;
position: absolute;
width: 100%;
z-index: 10;
opacity: 0;
-webkit-border-top-left-radius: 4px;
-webkit-border-top-right-radius: 4px;
-moz-border-radius-topleft: 4px;
-moz-border-radius-topright: 4px;
border-top-left-radius: 4px;
border-top-right-radius: 4px;
}
#secondarypbt .widget ul {
margin: 0;
padding: 0;
list-style-type: none;
}
#secondarypbt .widget ul li {
border-bottom: 1px solid rgba(0,0,0,.05);
padding: 1em 0;
}
h1.site-titlenbt {
font-weight: 700;
letter-spacing: -3px;
font-size: 35px;
}
h2.site-descriptionnbt {
font-weight: 300;
font-size: 16px;
}
.posted-on, .byline, .comments-link, .cat-links, .entry-format {
padding-right: 15px;
font-weight: 300;
}
.comment-metadata .edit-link {
display: block;
float: none;
}
.readMoreLinkpbt {
float: right;
padding: 8px 12px;
border-radius: 4px;
border: 1px solid #36c1c8;
line-height: 1;
-o-transition: all .3s ease-in-out;
-moz-transition: all .3s ease-in-out;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}
.readMoreLinkpbt:hover {
background: #36c1c8;
}
.readMoreLinkpbt:hover a {
color: #ffffff;
}
.dataBottom a {
border: 1px solid #36c1c8;
border-radius: 4px;
display: inline-block;
margin: 2px 0;
padding: 0px 5px;
font-weight: 300;
-o-transition: all .3s ease-in-out;
-moz-transition: all .3s ease-in-out;
-webkit-transition: all .3s ease-in-out;
transition: all .3s ease-in-out;
}
.dataBottom a:hover {
background: #36c1c8;
color: #ffffff;
}
.entry-metapbt i {
color: #36c1c8;
margin-right: 2px;
}
.topSearchFormpbt {
display:none;
float: right;
padding-top: 8px;
width: 100%;
}
.topSearchFormpbt input {
width:100%;
border: 1px solid rgba(0,0,0,.1);
border-bottom: 2px solid rgba(0,0,0,.1);
border-radius: 4px;
outline: none;
}
.topSearchFormpbt input[type="submit"] {
display: none;
}
.topSearchFormpbt input:focus {
border: 1px solid rgba(0,0,0,.1);
border-bottom: 2px solid rgba(0,0,0,.1);
}
.top-search {
cursor:pointer;
}
.top-search.active {
color: #36c1c8;
}
.nav-links, .comments-title {
background: #ffffff;
border: 1px solid rgba(0,0,0,.1);
border-bottom: 2px solid rgba(0,0,0,.1);
border-radius: 4px;
}
.paging-navigation .nav-links, .comments-title {
padding: 1.5em;
}
.nav-next {
float: right;
}
.nav-previous {
float: left;
}
.post-navigation .nav-previous {
width: 50%;
padding: 1.5em;
float: left;
}
.post-navigation .nav-next {
width: 50%;
text-align: right;
padding: 1.5em;
border-left: 1px solid rgba(0,0,0,.1);
float: right;
}
.page-content {
background: #ffffff;
padding: 1.5em !important;
border: 1px solid rgba(0,0,0,.1);
border-bottom: 2px solid rgba(0,0,0,.1);
border-radius: 4px;
}
.taxonomy-description {
margin-top: 1.5em;
}
.site-infopbt {
font-size: 95%;
text-align: center;
margin-top: 20px;
}
.comment-awaiting-moderation {
color: #ff0000;
}
/*--------------------------------------------------------------
Posts and pages
--------------------------------------------------------------*/
.hentry {
margin: 0 0 1.5em;
}
.entry-content {
margin: 1.5em 0 0;
padding: 0 1.5em;
}
/*--------------------------------------------------------------
Media
--------------------------------------------------------------*/
/* Make sure embeds and iframes fit their containers */
embed,
iframe,
object {
max-width: 100%;
}
@media all and (max-width: 1180px) {
body {
margin: 0 30px;
}
#pagepbt {
max-width: 985px;
margin: 30px auto;
}
}
@media all and (max-width: 985px) {
body {
margin: 0 20px;
}
#pagepbt {
max-width: 750px;
margin: 20px auto;
}
.site-brandingpbt {
width: 100%;
text-align:center;
}
.site-socialpbt {
width: 100%;
text-align: center;
padding: 0;
padding-bottom: 1em;
}
#primarypbt, #secondarypbt {
width: 100%;
padding-right: 0em;
}
#secondarypbt {
-webkit-column-count: 2;
-webkit-column-gap: 15px;
-moz-column-count: 2;
-moz-column-gap: 15px;
column-count: 2;
column-gap: 15px;
}
#secondarypbt .widget {
-webkit-column-break-inside: avoid;
-moz-column-break-inside: avoid;
column-break-inside: avoid;
}
.site-brandingpbt {
text-align: center !important;
}
#responsive_ads_unit
{
display:block;
}
}
@media all and (max-width: 767px) {
#contentpbt
{
display: flex;
flex-flow: column;
}
#primarypbt
{
order:2;
}
#secondarypbt
{
order:1;
}
#HTML1
{
display:none;
}
#PopularPosts1
{
display:none;
}
.widget_search
{
display:none;
}
#pagepbt {
max-width: 445px;
margin: 20px auto;
}
.posted-on, .byline, .comments-link, .cat-links, .entry-format {
display: block;
}
#secondarypbt {
-webkit-column-count: auto;
-webkit-column-gap: initial;
-moz-column-count: auto;
-moz-column-gap: initial;
column-count: auto;
column-gap: initial;
}
#secondarypbt .widget {
-webkit-column-break-inside: initial;
-moz-column-break-inside: initial;
column-break-inside: initial;
}
h1 {font-size: 22px;line-height:2.8rem;}
h2 {font-size: 20px;line-height:2rem;}
h3 {font-size: 16px;line-height:1.6rem;}
h4 {font-size: 13px;}
h5 {font-size: 10px;}
h6 {font-size: 8px;}
/*
.widget-title h3 {
padding: 5px 0;
}
*/
}
@media all and (max-width: 479px) {
/*#pagepbt {
max-width: 297px;
margin: 20px auto;
}*/
}
h2.date-header {
margin: 10px 0px;
display: none;
}
.main .widget {
margin: 0 0 5px;
padding: 0 0 2px;
}
.main .Blog {
border-bottom-width: 0;
}
#header .description {
}
/* Comments----------------------------------------------- */
#comments {
padding:10px 20px;
margin-bottom:20px;
}
#comments h4 {
font-size:22px;
margin-bottom:10px;
}
#comments ol {
margin-left:0;
}
.deleted-comment {
font-style: italic;
color: gray;
}
#blog-pager-newer-link {
float: left;
}
#blog-pager-older-link {
float: right;
}
#blog-pager {
text-align: center;
padding:5px;
margin:10px 0;
}
.feed-links {
clear: both;
}
.comment-form {
}
#navbar-iframe {
height: 0;
visibility: hidden;
display: none;
}
.author-profile {
background: #f6f6f6;
border: 1px solid #eee;
margin: 10px 0 10px 0;
padding: 8px 15px;
overflow: hidden;
}
.author-profile img {
border: 1px solid #ddd;
float: left;
margin-right: 10px;
}
.post-iconspbt {
margin: 5px 0 0 0;
padding: 0px 10px;
}
.post-locationpbt {
margin: 5px 0;
padding: 5px 15px;
}
.related-postbwrap {
margin: 10px auto 0;
padding: 10px 20px;
}
.related-postbwrap h4 {
font-weight: bold;
margin: 10px 0;
}
.related-post-style-2,.related-post-style-2 li {
list-style: none;
margin: 0;
padding: 0;
}
.related-post-style-2 li {
border-top: 0px solid #eee;
overflow: hidden;
padding: 10px 0px;
}
.related-post-style-2 li:first-child {
border-top: none;
}
.related-post-style-2 .related-post-item-thumbnail {
width: 80px;
height: 80px;
max-width: none;
max-height: none;
background-color: transparent;
border: none;
float: left;
margin: 2px 10px 0 0;
padding: 0;
}
.related-post-style-2 .related-post-item-title {
font-weight: normal;
font-size: 100%;
}
.related-post-style-2 .related-post-item-summary {
display: block;
}
.pbtsharethisbutt {
overflow: hidden;
padding: 10px 0 5px;
margin: 0;
}
.pbtsharethisbutt ul {
list-style: none;
list-style-type: none;
margin: 0;
padding: 0;
}
.pbtsharethisbutt ul li {
float: left;
margin: 0;
padding: 0;
}
.pbtsharethisbutt ul li a {
padding: 0 10px;
display: inline-block;
}
.pbtsharethisbutt ul li a:hover {
}
.separator a[style="margin-left: 1em; margin-right: 1em;"] {margin-left: auto!important;margin-right: auto!important;}
.separator a[style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"] {clear: none !important; float: none !important; margin-bottom: 0em !important; margin-right: 0em !important;}
.separator a[style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"] img {float: left !important; margin: 0px 10px 10px 0px;}
.separator a[style="clear: right; float: right; margin-bottom: 1em; margin-left: 1em;"] {clear: none !important; float: none !important; margin-bottom: 0em !important; margin-left: 0em !important;}
.separator a[style="clear: right; float: right; margin-bottom: 1em; margin-left: 1em;"] img {float: right !important; margin: 0px 0px 10px 10px;}
.PopularPosts .widget-content ul li {
padding:6px 0px;
}
.reaction-buttons table{
border:none;
margin-bottom:5px;
}
.reaction-buttons table, .reaction-buttons td{
border:none !important;
}
.pbtthumbimg {
float:left;
margin:0px 10px 5px 0px;
padding:4px;
border:0px solid #eee;
background:none;
width:200px;
height:auto;
}
.badge
{
width: auto;
background-color: #ddffdd;
padding: 16px 12px;
border-left: 4px solid #4CAF50;
word-wrap: break-word;
font-family: Verdana,sans-serif;
font-size: 15px;
}
.badge h4
{
font-size:18px;
margin:0;
}
.badge li
{
line-height:200%;
}
.badge a
{
color:#333333;
font-weight:bold;
}

--></style>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js' type='text/javascript'></script>
<script type='text/javascript'>
//<![CDATA[

/*! jQuery Migrate v1.2.1 | (c) 2005, 2013 jQuery Foundation, Inc. and other contributors | jquery.org/license */
jQuery.migrateMute===void 0&&(jQuery.migrateMute=!0),function(e,t,n){function r(n){var r=t.console;i[n]||(i[n]=!0,e.migrateWarnings.push(n),r&&r.warn&&!e.migrateMute&&(r.warn("JQMIGRATE: "+n),e.migrateTrace&&r.trace&&r.trace()))}function a(t,a,i,o){if(Object.defineProperty)try{return Object.defineProperty(t,a,{configurable:!0,enumerable:!0,get:function(){return r(o),i},set:function(e){r(o),i=e}}),n}catch(s){}e._definePropertyBroken=!0,t[a]=i}var i={};e.migrateWarnings=[],!e.migrateMute&&t.console&&t.console.log&&t.console.log("JQMIGRATE: Logging is active"),e.migrateTrace===n&&(e.migrateTrace=!0),e.migrateReset=function(){i={},e.migrateWarnings.length=0},"BackCompat"===document.compatMode&&r("jQuery is not compatible with Quirks Mode");var o=e("<input/>",{size:1}).attr("size")&&e.attrFn,s=e.attr,u=e.attrHooks.value&&e.attrHooks.value.get||function(){return null},c=e.attrHooks.value&&e.attrHooks.value.set||function(){return n},l=/^(?:input|button)$/i,d=/^[238]$/,p=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,f=/^(?:checked|selected)$/i;a(e,"attrFn",o||{},"jQuery.attrFn is deprecated"),e.attr=function(t,a,i,u){var c=a.toLowerCase(),g=t&&t.nodeType;return u&&(4>s.length&&r("jQuery.fn.attr( props, pass ) is deprecated"),t&&!d.test(g)&&(o?a in o:e.isFunction(e.fn[a])))?e(t)[a](i):("type"===a&&i!==n&&l.test(t.nodeName)&&t.parentNode&&r("Can't change the 'type' of an input or button in IE 6/7/8"),!e.attrHooks[c]&&p.test(c)&&(e.attrHooks[c]={get:function(t,r){var a,i=e.prop(t,r);return i===!0||"boolean"!=typeof i&&(a=t.getAttributeNode(r))&&a.nodeValue!==!1?r.toLowerCase():n},set:function(t,n,r){var a;return n===!1?e.removeAttr(t,r):(a=e.propFix[r]||r,a in t&&(t[a]=!0),t.setAttribute(r,r.toLowerCase())),r}},f.test(c)&&r("jQuery.fn.attr('"+c+"') may use property instead of attribute")),s.call(e,t,a,i))},e.attrHooks.value={get:function(e,t){var n=(e.nodeName||"").toLowerCase();return"button"===n?u.apply(this,arguments):("input"!==n&&"option"!==n&&r("jQuery.fn.attr('value') no longer gets properties"),t in e?e.value:null)},set:function(e,t){var a=(e.nodeName||"").toLowerCase();return"button"===a?c.apply(this,arguments):("input"!==a&&"option"!==a&&r("jQuery.fn.attr('value', val) no longer sets properties"),e.value=t,n)}};var g,h,v=e.fn.init,m=e.parseJSON,y=/^([^<]*)(<[\w\W]+>)([^>]*)$/;e.fn.init=function(t,n,a){var i;return t&&"string"==typeof t&&!e.isPlainObject(n)&&(i=y.exec(e.trim(t)))&&i[0]&&("<"!==t.charAt(0)&&r("$(html) HTML strings must start with '<' character"),i[3]&&r("$(html) HTML text after last tag is ignored"),"#"===i[0].charAt(0)&&(r("HTML string cannot start with a '#' character"),e.error("JQMIGRATE: Invalid selector string (XSS)")),n&&n.context&&(n=n.context),e.parseHTML)?v.call(this,e.parseHTML(i[2],n,!0),n,a):v.apply(this,arguments)},e.fn.init.prototype=e.fn,e.parseJSON=function(e){return e||null===e?m.apply(this,arguments):(r("jQuery.parseJSON requires a valid JSON string"),null)},e.uaMatch=function(e){e=e.toLowerCase();var t=/(chrome)[ \/]([\w.]+)/.exec(e)||/(webkit)[ \/]([\w.]+)/.exec(e)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(e)||/(msie) ([\w.]+)/.exec(e)||0>e.indexOf("compatible")&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(e)||[];return{browser:t[1]||"",version:t[2]||"0"}},e.browser||(g=e.uaMatch(navigator.userAgent),h={},g.browser&&(h[g.browser]=!0,h.version=g.version),h.chrome?h.webkit=!0:h.webkit&&(h.safari=!0),e.browser=h),a(e,"browser",e.browser,"jQuery.browser is deprecated"),e.sub=function(){function t(e,n){return new t.fn.init(e,n)}e.extend(!0,t,this),t.superclass=this,t.fn=t.prototype=this(),t.fn.constructor=t,t.sub=this.sub,t.fn.init=function(r,a){return a&&a instanceof e&&!(a instanceof t)&&(a=t(a)),e.fn.init.call(this,r,a,n)},t.fn.init.prototype=t.fn;var n=t(document);return r("jQuery.sub() is deprecated"),t},e.ajaxSetup({converters:{"text json":e.parseJSON}});var b=e.fn.data;e.fn.data=function(t){var a,i,o=this[0];return!o||"events"!==t||1!==arguments.length||(a=e.data(o,t),i=e._data(o,t),a!==n&&a!==i||i===n)?b.apply(this,arguments):(r("Use of jQuery.fn.data('events') is deprecated"),i)};var j=/\/(java|ecma)script/i,w=e.fn.andSelf||e.fn.addBack;e.fn.andSelf=function(){return r("jQuery.fn.andSelf() replaced by jQuery.fn.addBack()"),w.apply(this,arguments)},e.clean||(e.clean=function(t,a,i,o){a=a||document,a=!a.nodeType&&a[0]||a,a=a.ownerDocument||a,r("jQuery.clean() is deprecated");var s,u,c,l,d=[];if(e.merge(d,e.buildFragment(t,a).childNodes),i)for(c=function(e){return!e.type||j.test(e.type)?o?o.push(e.parentNode?e.parentNode.removeChild(e):e):i.appendChild(e):n},s=0;null!=(u=d[s]);s++)e.nodeName(u,"script")&&c(u)||(i.appendChild(u),u.getElementsByTagName!==n&&(l=e.grep(e.merge([],u.getElementsByTagName("script")),c),d.splice.apply(d,[s+1,0].concat(l)),s+=l.length));return d});var Q=e.event.add,x=e.event.remove,k=e.event.trigger,N=e.fn.toggle,T=e.fn.live,M=e.fn.die,S="ajaxStart|ajaxStop|ajaxSend|ajaxComplete|ajaxError|ajaxSuccess",C=RegExp("\\b(?:"+S+")\\b"),H=/(?:^|\s)hover(\.\S+|)\b/,A=function(t){return"string"!=typeof t||e.event.special.hover?t:(H.test(t)&&r("'hover' pseudo-event is deprecated, use 'mouseenter mouseleave'"),t&&t.replace(H,"mouseenter$1 mouseleave$1"))};e.event.props&&"attrChange"!==e.event.props[0]&&e.event.props.unshift("attrChange","attrName","relatedNode","srcElement"),e.event.dispatch&&a(e.event,"handle",e.event.dispatch,"jQuery.event.handle is undocumented and deprecated"),e.event.add=function(e,t,n,a,i){e!==document&&C.test(t)&&r("AJAX events should be attached to document: "+t),Q.call(this,e,A(t||""),n,a,i)},e.event.remove=function(e,t,n,r,a){x.call(this,e,A(t)||"",n,r,a)},e.fn.error=function(){var e=Array.prototype.slice.call(arguments,0);return r("jQuery.fn.error() is deprecated"),e.splice(0,0,"error"),arguments.length?this.bind.apply(this,e):(this.triggerHandler.apply(this,e),this)},e.fn.toggle=function(t,n){if(!e.isFunction(t)||!e.isFunction(n))return N.apply(this,arguments);r("jQuery.fn.toggle(handler, handler...) is deprecated");var a=arguments,i=t.guid||e.guid++,o=0,s=function(n){var r=(e._data(this,"lastToggle"+t.guid)||0)%o;return e._data(this,"lastToggle"+t.guid,r+1),n.preventDefault(),a[r].apply(this,arguments)||!1};for(s.guid=i;a.length>o;)a[o++].guid=i;return this.click(s)},e.fn.live=function(t,n,a){return r("jQuery.fn.live() is deprecated"),T?T.apply(this,arguments):(e(this.context).on(t,this.selector,n,a),this)},e.fn.die=function(t,n){return r("jQuery.fn.die() is deprecated"),M?M.apply(this,arguments):(e(this.context).off(t,this.selector||"**",n),this)},e.event.trigger=function(e,t,n,a){return n||C.test(e)||r("Global events are undocumented and deprecated"),k.call(this,e,t,n||document,a)},e.each(S.split("|"),function(t,n){e.event.special[n]={setup:function(){var t=this;return t!==document&&(e.event.add(document,n+"."+e.guid,function(){e.event.trigger(n,null,t,!0)}),e._data(this,n,e.guid++)),!1},teardown:function(){return this!==document&&e.event.remove(document,n+"."+e._data(this,n)),!1}}})}(jQuery,window);

//]]>
</script>
<script type='text/javascript'>
//<![CDATA[

function showrecentcomments(json){for(var i=0;i<a_rc;i++){var b_rc=json.feed.entry[i];var c_rc;if(i==json.feed.entry.length)break;for(var k=0;k<b_rc.link.length;k++){if(b_rc.link[k].rel=='alternate'){c_rc=b_rc.link[k].href;break;}}c_rc=c_rc.replace("#","#comment-");var d_rc=c_rc.split("#");d_rc=d_rc[0];var e_rc=d_rc.split("/");e_rc=e_rc[5];e_rc=e_rc.split(".html");e_rc=e_rc[0];var f_rc=e_rc.replace(/-/g," ");f_rc=f_rc.link(d_rc);var g_rc=b_rc.published.$t;var h_rc=g_rc.substring(0,4);var i_rc=g_rc.substring(5,7);var j_rc=g_rc.substring(8,10);var k_rc=new Array();k_rc[1]="Jan";k_rc[2]="Feb";k_rc[3]="Mar";k_rc[4]="Apr";k_rc[5]="May";k_rc[6]="Jun";k_rc[7]="Jul";k_rc[8]="Aug";k_rc[9]="Sep";k_rc[10]="Oct";k_rc[11]="Nov";k_rc[12]="Dec";if("content" in b_rc){var l_rc=b_rc.content.$t;}else if("summary" in b_rc){var l_rc=b_rc.summary.$t;}else var l_rc="";var re=/<\S[^>]*>/g;l_rc=l_rc.replace(re,"");if(m_rc==true)document.write('On '+k_rc[parseInt(i_rc,10)]+' '+j_rc+' ');document.write('<a href="'+c_rc+'">'+b_rc.author[0].name.$t+'</a> commented');if(n_rc==true)document.write(' on '+f_rc);document.write(': ');if(l_rc.length<o_rc){document.write('<i>&#8220;');document.write(l_rc);document.write('&#8221;</i><br/><br/>');}else{document.write('<i>&#8220;');l_rc=l_rc.substring(0,o_rc);var p_rc=l_rc.lastIndexOf(" ");l_rc=l_rc.substring(0,p_rc);document.write(l_rc+'&hellip;&#8221;</i>');document.write('<br/><br/>');}}}

function rp(json){document.write('<ul>');for(var i=0;i<numposts;i++){document.write('<li>');var entry=json.feed.entry[i];var posttitle=entry.title.$t;var posturl;if(i==json.feed.entry.length)break;for(var k=0;k<entry.link.length;k++){if(entry.link[k].rel=='alternate'){posturl=entry.link[k].href;break}}posttitle=posttitle.link(posturl);var readmorelink="(more)";readmorelink=readmorelink.link(posturl);var postdate=entry.published.$t;var cdyear=postdate.substring(0,4);var cdmonth=postdate.substring(5,7);var cdday=postdate.substring(8,10);var monthnames=new Array();monthnames[1]="Jan";monthnames[2]="Feb";monthnames[3]="Mar";monthnames[4]="Apr";monthnames[5]="May";monthnames[6]="Jun";monthnames[7]="Jul";monthnames[8]="Aug";monthnames[9]="Sep";monthnames[10]="Oct";monthnames[11]="Nov";monthnames[12]="Dec";if("content"in entry){var postcontent=entry.content.$t}else if("summary"in entry){var postcontent=entry.summary.$t}else var postcontent="";var re=/<\S[^>]*>/g;postcontent=postcontent.replace(re,"");document.write(posttitle);if(showpostdate==true)document.write(' - '+monthnames[parseInt(cdmonth,10)]+' '+cdday);if(showpostsummary==true){if(postcontent.length<numchars){document.write(postcontent)}else{postcontent=postcontent.substring(0,numchars);var quoteEnd=postcontent.lastIndexOf(" ");postcontent=postcontent.substring(0,quoteEnd);document.write(postcontent+'...'+readmorelink)}}document.write('</li>')}document.write('</ul>')}

//]]>
</script>
<script type='text/javascript'>
summary_noimg = 400;
summary_img = 300;
img_thumb_height = 150;
img_thumb_width = 200; 
</script>
<script type='text/javascript'>
//<![CDATA[

function removeHtmlTag(strx,chop){ 
	if(strx.indexOf("<")!=-1)
	{
		var s = strx.split("<"); 
		for(var i=0;i<s.length;i++){ 
			if(s[i].indexOf(">")!=-1){ 
				s[i] = s[i].substring(s[i].indexOf(">")+1,s[i].length); 
			} 
		} 
		strx =  s.join(""); 
	}
	chop = (chop < strx.length-1) ? chop : strx.length-2; 
	while(strx.charAt(chop-1)!=' ' && strx.indexOf(' ',chop)!=-1) chop++; 
	strx = strx.substring(0,chop-1); 
	return strx+'...'; 
}

function createSummaryAndThumb(pID){
	var div = document.getElementById(pID);
	var imgtag = "";
	var img = div.getElementsByTagName("img");
	var summ = summary_noimg;
	if(img.length>=1) {	
		imgtag = '<img src="'+img[0].src+'" class="pbtthumbimg"/>';
		summ = summary_img;
	}
	
	var summary = imgtag + '<div>' + removeHtmlTag(div.innerHTML,summ) + '</div>';
	div.innerHTML = summary;
}



//]]>
</script>
<!--<script> $(document).ready(function(){ var fixmeTop = $(&#39;.AdSense&#39;).offset().top; $(window).scroll(function() { var currentScroll = $(window).scrollTop(); if (currentScroll &gt;= fixmeTop) { $(&#39;.AdSense&#39;).css({ position: &#39;fixed&#39;, top: &#39;35px&#39; }); } else { $(&#39;.AdSense&#39;).css({ position: &#39;static&#39; }); } }); }); </script>!-->
<link href='https://www.blogger.com/dyn-css/authorization.css?targetBlogID=8964111134041337103&amp;zx=c4fd6284-2d9d-4edd-9123-c55462bbc032' media='none' onload='if(media!=&#39;all&#39;)media=&#39;all&#39;' rel='stylesheet'/><noscript><link href='https://www.blogger.com/dyn-css/authorization.css?targetBlogID=8964111134041337103&amp;zx=c4fd6284-2d9d-4edd-9123-c55462bbc032' rel='stylesheet'/></noscript>
<meta name='google-adsense-platform-account' content='ca-host-pub-1556223355139109'/>
<meta name='google-adsense-platform-domain' content='blogspot.com'/>

<!-- data-ad-client=ca-pub-4529508631166774 -->

</head>
<body>
<!-- Facebook Page -->
<div id='fb-root'></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook Page -->
<div id='pagepbt'>
<header class='site-headerpbt' id='mastheadpbt' role='banner'>
<div class='site-brandingpbt'>
<div class='headersec section' id='headersec'><div class='widget Header' data-version='1' id='Header1'>
<div id='header-inner'>
<div class='titlewrapper'>
<h1 class='site-titlenbt'>
<a href='https://www.webslesson.info/'>Webslesson</a>
</h1>
</div>
<h2 class='site-descriptionnbt'>PHP, MySql, Jquery, AngularJS, Ajax, Codeigniter, Laravel Tutorial </h2>
</div>
</div></div>
</div>
<div class='site-socialpbt'>
<!--<div class='socialLinepbt'> <a href='https://www.facebook.com/webslesson' rel='nofollow' target='_blank' title='Facebook'><i class='fa spaceLeftDouble fa-facebook'/></a> <a href='https://twitter.com/webslesson' rel='nofollow' target='_blank' title='Twitter'><i class='fa spaceLeftDouble fa-twitter'/></a> <a href='https://plus.google.com/+webslesson/posts' rel='nofollow' target='_blank' title='Google Plus'><i class='fa spaceLeftDouble fa-google-plus'/></a> <a href='#' rel='nofollow' target='_blank' title='Linkedin'><i class='fa spaceLeftDouble fa-linkedin'/></a> <a href='#' rel='nofollow' target='_blank' title='Instagram'><i class='fa spaceLeftDouble fa-instagram'/></a>!-->
<!--<a href='https://www.youtube.com/c/webslesson' rel='nofollow' target='_blank' title='YouTube'><i class='fa spaceLeftDouble fa-youtube'/></a> <a href='#' rel='nofollow' target='_blank' title='Pinterest'><i class='fa spaceLeftDouble fa-pinterest'/></a> <a href='#' rel='nofollow' target='_blank' title='Tumblr'><i class='fa spaceLeftDouble fa-tumblr'/></a>!-->
<!--<a expr:href='data:blog.homepageUrl + &quot;feeds/posts/default&quot;' target='_blank' title='RSS'><i class='fa spaceLeftDouble fa-rss'/></a> <a class='top-search' href='#'><i class='fa spaceLeftDouble fa-search'/></a> </div> <div class='topSearchFormpbt'> <form action='/search' class='search-formpbt' method='get' role='search'> <label> <span class='screen-reader-text'>Search for:</span> <input class='search-fieldpbt' name='q' placeholder='Search' title='Search for:' type='search' value=''/> </label> <input class='search-submitpbt' type='submit' value='Search'/> </form> </div>!-->
<!--<script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'/>!-->
<!-- webslesson_mainblogsec_Blog1_1x1_as -->
<!--<ins class='adsbygoogle' data-ad-client='ca-pub-4529508631166774' data-ad-format='auto' data-ad-slot='6573078845' style='display:block'/> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>!-->
</div>
<nav class='main-navigationpbt' id='site-navigationpbt' role='navigation'>
<button class='menu-togglepbt'>Menu<i class='fa fa-align-justify'></i></button>
<div class='menu-pbt-container'>
<ul class='menupbt'>
<li><a href='https://www.webslesson.info/'>Home</a></li>
<li><a href='#'>Tutorial</a>
<ul class='sub-menu'>
<li><a href='https://www.webslesson.info/search/label/php'>PHP</a></li>
<li><a href='https://www.webslesson.info/search/label/mysql'>MySql</a></li>
<li><a href='https://www.webslesson.info/search/label/JQuery'>JQuery</a></li>
<li><a href='https://www.webslesson.info/search/label/Ajax'>Ajax</a></li>
<li><a href='https://www.webslesson.info/search/label/Codeigniter'>Codeigniter</a></li>
<li><a href='https://www.webslesson.info/search/label/AngularJS'>AngularJS</a></li>
</ul>
</li>
<li><a href='#'>Tools</a>
<ul class='sub-menu'>
<li><a href='https://www.webslesson.info/p/online-slug-generator-tool.html' title='Online Slug Generator'>Online Slug Generator</a></li>
<li><a href='https://www.webslesson.info/p/online-code-formatter.html' title='Online Source Code Formatter'>Online Source Code Formatter</a></li>
<li><a href='https://www.webslesson.info/p/online-html-entities-encoder-and-decoder.html' title='HTML Encoder / Decoder'>HTML Encoder / Decoder</a></li>
<li><a href='https://www.webslesson.info/2018/03/count-character-count-words-online-convert-case.html' title='Convert Case & Count Character'>Convert Case & Count Character</a></li>
</ul>
</li>
<li><a href='http://demo.webslesson.info/' title='Find all Webslesson Demo at Single Place'>Demos</a></li>
<li><a href='https://www.webslesson.info/p/about-us.html'>About Us</a></li>
<li><a href='https://www.webslesson.info/p/write-for-us-publish-guest-post.html'>Write for Us</a></li>
<li><a href='https://www.webslesson.info/p/privacy-policy.html'>Privacy Policy</a></li>
<li><a href='https://www.webslesson.info/p/terms-conditions.html'>Terms and Condition</a></li>
<li><a href='https://www.webslesson.info/p/contact-us.html'>Contact Me</a></li>
<!--<li><a href='#'>Business</a> <ul class='sub-menu'> <li><a href='#'>Internet</a></li> <li><a href='#'>Market</a></li> <li><a href='#'>Stock</a></li> </ul> </li> <li><a href='#'>Downloads</a> <ul class='sub-menu'> <li><a href='#'>Dvd</a></li> <li><a href='#'>Games</a></li> <li><a href='#'>Software</a> <ul class='sub-menu'> <li><a href='#'>Office</a> </li> </ul> </li> </ul> </li> <li><a href='#'>Parent Category</a> <ul class='sub-menu'> <li><a href='#'>Child Category 1</a> <ul class='sub-menu'> <li><a href='#'>Sub Child Category 1</a></li> <li><a href='#'>Sub Child Category 2</a></li> <li><a href='#'>Sub Child Category 3</a></li> </ul> </li> <li><a href='#'>Child Category 2</a></li> <li><a href='#'>Child Category 3</a></li> <li><a href='#'>Child Category 4</a></li> </ul> </li> <li><a href='#'>Featured</a></li> <li><a href='#'>Health</a> <ul class='sub-menu'> <li><a href='#'>Childcare</a></li> <li><a href='#'>Doctors</a></li> </ul> </li> <li><a href='#'>Uncategorized</a></li>!-->
</ul>
</div>
</nav><!-- #site-navigation -->
</header><!-- #masthead -->
<div class='site-contentpbt' id='contentpbt'>
<div class='content-areapbt' id='primarypbt'>
<div class='site-mainpbt' id='mainpbt' role='main'>
<div class='mainblogsec section' id='mainblogsec'><div class='widget Blog' data-version='1' id='Blog1'>
<div class='blog-posts hfeed'>
<!--Can't find substitution for tag [defaultAdStart]-->

          <div class="date-outer">
        
<h2 class='date-header'><span>Wednesday, 26 May 2021</span></h2>

          <div class="date-posts">
        
<div class='post-outer'>
<article class='post hentry' itemprop='blogPost' itemscope='itemscope' itemtype='https://schema.org/BlogPosting'>
<meta content='https://i.ytimg.com/vi/JmnM-K1HPFE/hqdefault.jpg' itemprop='image'/>
<a name='6003697290998394208'></a>
<header class='entry-header'>
<h1 class='post-title entry-title' itemprop='name'>
<a href='https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html'>How to Create Review & Rating Page in PHP with Ajax</a>
</h1>
<div class='entry-metapbt'>
<span class='post-author vcard'><i class='fa fa-user'></i>&nbsp;<span class='fn' itemprop='author' itemscope='itemscope' itemtype='https://schema.org/Person'><meta content='https://www.blogger.com/profile/03700932360506067475' itemprop='url'/><a class='g-profile' href='https://www.blogger.com/profile/03700932360506067475' rel='author' title='author profile'><span itemprop='name'>Webslesson</span></a></span></span>&nbsp;&nbsp;&nbsp;
<i class='fa fa-calendar'></i>&nbsp;<meta content='https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html' itemprop='url'/><a class='timestamp-link' href='https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html' rel='bookmark' title='permanent link'><span class='published updated' itemprop='datePublished' title='2021-05-26T04:22:00-07:00'>04:22</span></a>&nbsp;&nbsp;&nbsp;
<i class='fa fa-folder-open'></i>&nbsp;<a href='https://www.webslesson.info/search/label/php' rel='tag'>php</a>, <a href='https://www.webslesson.info/search/label/php%20rating%20system' rel='tag'>php rating system</a>, <a href='https://www.webslesson.info/search/label/php%20review%20and%20rating%20script' rel='tag'>php review and rating script</a>, <a href='https://www.webslesson.info/search/label/php%20review%20script' rel='tag'>php review script</a>, <a href='https://www.webslesson.info/search/label/php%20review%20system' rel='tag'>php review system</a>, <a href='https://www.webslesson.info/search/label/rating%20system' rel='tag'>rating system</a>, <a href='https://www.webslesson.info/search/label/review%20and%20rating' rel='tag'>review and rating</a>, <a href='https://www.webslesson.info/search/label/review%20and%20rating%20code%20in%20php' rel='tag'>review and rating code in php</a>, <a href='https://www.webslesson.info/search/label/review%20and%20rating%20in%20php' rel='tag'>review and rating in php</a>, <a href='https://www.webslesson.info/search/label/review%20system' rel='tag'>review system</a>&nbsp;&nbsp;&nbsp;
<i class='fa fa-comments'></i>&nbsp;<a href='https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html#comment-form' onclick=''>327 comments</a>&nbsp;&nbsp;&nbsp;
<span class='item-control blog-admin pid-667271025'>
<a href='https://www.blogger.com/post-edit.g?blogID=8964111134041337103&postID=6003697290998394208&from=pencil' title='Edit Post'>
<img alt='' class='icon-action' height='18' src='https://img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
</a>
</span>
</div>
</header>
<div class='post-header-line-1'></div>
<div class='post-body entry-content' id='post-body-6003697290998394208' itemprop='articleBody'>
<h2><b><u>PHP Review &amp; Rating System using Ajax - Part 1</u></b></h2>
<div><br /></div><br />
<div class="separator" style="clear: both; text-align: center;"><iframe allowfullscreen="" class="BLOG_video_class" height="374" src="https://www.youtube.com/embed/JmnM-K1HPFE" width="660" youtube-src-id="JmnM-K1HPFE"></iframe></div><br />
<h2><b><u>PHP Review &amp; Rating System using Ajax - Part 2</u></b></h2><div><b><u><br /></u></b></div><div><b><u><br /></u></b></div><div><b><div class="separator" style="clear: both; text-align: center;"><iframe allowfullscreen="" class="BLOG_video_class" height="374" src="https://www.youtube.com/embed/y3E6QW5LtFQ" width="660" youtube-src-id="y3E6QW5LtFQ"></iframe></div><br /><u><br /></u></b></div>
<p>In this post, you can find How to create product or service review and star rating system with PHP &amp; Mysql using Ajax jQuery. By using Review and Rating Module, user of your website will share their opinion and experiences which are related to your product or services.</p>

<p>Review and Rating System is very important feature for get your user feedback regarding your product or services. With the help of review and star rating system, your user can rate your product or services by selecting star and write review about your product and services and with the help or this review and star rating service provider or product seller can improve their product or services. At the other hand at buyer side, because with the help of product or service rating and review, buyer can select quality product or services based on the rating  and review provided by other customers.</p>

<p>We can easily developed our own Rating and Review System with Mysql database using PHP with Ajax &amp; jQuery. If you want to implement Review and Star Rating system for your product or services then this tutorial will help you to build review and 5 star rating system using PHP with Ajax jQuery and Mysql Database.</p><p><br /></p><div class="separator" style="clear: both; text-align: center;"><a href="https://1.bp.blogspot.com/-30rtJFNaahc/YK4u-NGIAYI/AAAAAAAABp4/OQzVJjq1keYCAepg2ZGMmmiEN5-9bME6gCLcBGAsYHQ/s640/user-rating-with-review-system-in-php-mysql-using-ajax-1.jpg" style="margin-left: 1em; margin-right: 1em;"><img alt="How to Create Review &amp; Rating Page in PHP with Ajax" border="0" data-original-height="360" data-original-width="640" src="https://1.bp.blogspot.com/-30rtJFNaahc/YK4u-NGIAYI/AAAAAAAABp4/OQzVJjq1keYCAepg2ZGMmmiEN5-9bME6gCLcBGAsYHQ/s16000/user-rating-with-review-system-in-php-mysql-using-ajax-1.jpg" title="How to Create Review &amp; Rating Page in PHP with Ajax" /></a></div><p><br /></p>

<p>In this tutorial, we will build Review and 5 star rating system for single product to demonstrate the functionality and user interface of Review and Rating System. Below you can find the feature of this PHP Dynamic Review and Rating System with Ajax jQuery.</p>
<ul>
<li>View Average Star Rating in Number and on Star icon.</li>
<li>View Total Number of Review.</li>
<li>View Total Number of Review in 1 to 5 Star with Animated progress bar</li>
<li>Submit Review and Rating using Bootstrap 4 ModalM</li>
<li>Submit Review and Rating without Refresh of web page using Ajax jQuery.</li>
<li>Fetch Review and Rating Data from Database and Display on Web page in Review and Rating format using Ajax with PHP script.</li>
<li>At Front-end side we have use Ajax, jQuery and Bootstrap 4 library and at Back-end we have use PHP script and Mysql Database for build this Review and Rating System.</li>
</ul>
<br />
<br />
<div align="center">
<a class="source-code" href="http://demo.webslesson.info/php-review-rating-system/" target="_blank">View Demo</a>
</div>
<br />
<br />
<div align="center">
<a class="source-code" href="http://demo.webslesson.info/scm/source-code.php?code=0951df3b28ae5bc3ace01151289c9938">Download Source Code</a>
</div>
<br />
<br />
<h2><b>Set Up Database Table</b></h2>
<br />
<p>For build any dynamic system we need database and under database we need table. So first need to create database, so here we have already created <b>testing</b> for this tutorial and under this database for create review table, we have to run following .sql script for create <b>review_table</b> in Mysql Database.</p>
<pre class="line-numbers language-sql"><code class="language-sql">
--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'Nice Product, Value for money', 1621935691),
(7, 'Peter Parker', 5, 'Nice Product with Good Feature.', 1621939888),
(8, 'Donna Hubber', 1, 'Worst Product, lost my money.', 1621940010);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
</code>
</pre>
<br />
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!--webslesson_sidebarrightsec_AdSense1_1x1_as-->
						<ins class="adsbygoogle" data-ad-client="ca-pub-4529508631166774" data-ad-format="auto" data-ad-host-channel="L0001" data-ad-host="ca-host-pub-1556223355139109" data-ad-slot="7056856732" data-full-width-responsive="true" style="display: block;"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
<br />
<h2><b>Review and Rating System Index Page</b></h2>
<br />
<p>For build and Dynamic Review and Rating System, we have to first create layout for display Star Rating and Review data on web page. So in <b>index.php</b> we have to first create HTML code for display and Review and Rating content with Submit Rating and Review Data to the Server.</p>
<p>So here in HTML code part, for display Rating data in Star icon we have use <b>Font Awesome</b> library and for Submit Review and Rating data we have use Bootstrap 4 modal dialog box. Below you can find HTML source code for create layout for display Rating and Review data on web page.</p>
<b>index.php</b>
<pre class="line-numbers language-markup"><code class="language-markup">
&lt;!DOCTYPE HTML&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Review &amp; Rating System in PHP &amp; Mysql using Ajax&lt;/title&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1" /&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"&gt;
    &lt;link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/&gt;
    &lt;script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"&gt;&lt;/script&gt;
	&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"&gt;&lt;/script&gt;
	&lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="container"&gt;
    	&lt;h1 class="mt-5 mb-5"&gt;Review &amp; Rating System in PHP &amp; Mysql using Ajax&lt;/h1&gt;
    	&lt;div class="card"&gt;
    		&lt;div class="card-header"&gt;Sample Product&lt;/div&gt;
    		&lt;div class="card-body"&gt;
    			&lt;div class="row"&gt;
    				&lt;div class="col-sm-4 text-center"&gt;
    					&lt;h1 class="text-warning mt-4 mb-4"&gt;
    						&lt;b&gt;&lt;span id="average_rating"&gt;0.0&lt;/span&gt; / 5&lt;/b&gt;
    					&lt;/h1&gt;
    					&lt;div class="mb-3"&gt;
    						&lt;i class="fas fa-star star-light mr-1 main_star"&gt;&lt;/i&gt;
                            &lt;i class="fas fa-star star-light mr-1 main_star"&gt;&lt;/i&gt;
                            &lt;i class="fas fa-star star-light mr-1 main_star"&gt;&lt;/i&gt;
                            &lt;i class="fas fa-star star-light mr-1 main_star"&gt;&lt;/i&gt;
                            &lt;i class="fas fa-star star-light mr-1 main_star"&gt;&lt;/i&gt;
	    				&lt;/div&gt;
    					&lt;h3&gt;&lt;span id="total_review"&gt;0&lt;/span&gt; Review&lt;/h3&gt;
    				&lt;/div&gt;
    				&lt;div class="col-sm-4"&gt;
    					&lt;p&gt;
                            &lt;div class="progress-label-left"&gt;&lt;b&gt;5&lt;/b&gt; &lt;i class="fas fa-star text-warning"&gt;&lt;/i&gt;&lt;/div&gt;

                            &lt;div class="progress-label-right"&gt;(&lt;span id="total_five_star_review"&gt;0&lt;/span&gt;)&lt;/div&gt;
                            &lt;div class="progress"&gt;
                                &lt;div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/p&gt;
    					&lt;p&gt;
                            &lt;div class="progress-label-left"&gt;&lt;b&gt;4&lt;/b&gt; &lt;i class="fas fa-star text-warning"&gt;&lt;/i&gt;&lt;/div&gt;
                            
                            &lt;div class="progress-label-right"&gt;(&lt;span id="total_four_star_review"&gt;0&lt;/span&gt;)&lt;/div&gt;
                            &lt;div class="progress"&gt;
                                &lt;div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"&gt;&lt;/div&gt;
                            &lt;/div&gt;               
                        &lt;/p&gt;
    					&lt;p&gt;
                            &lt;div class="progress-label-left"&gt;&lt;b&gt;3&lt;/b&gt; &lt;i class="fas fa-star text-warning"&gt;&lt;/i&gt;&lt;/div&gt;
                            
                            &lt;div class="progress-label-right"&gt;(&lt;span id="total_three_star_review"&gt;0&lt;/span&gt;)&lt;/div&gt;
                            &lt;div class="progress"&gt;
                                &lt;div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"&gt;&lt;/div&gt;
                            &lt;/div&gt;               
                        &lt;/p&gt;
    					&lt;p&gt;
                            &lt;div class="progress-label-left"&gt;&lt;b&gt;2&lt;/b&gt; &lt;i class="fas fa-star text-warning"&gt;&lt;/i&gt;&lt;/div&gt;
                            
                            &lt;div class="progress-label-right"&gt;(&lt;span id="total_two_star_review"&gt;0&lt;/span&gt;)&lt;/div&gt;
                            &lt;div class="progress"&gt;
                                &lt;div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"&gt;&lt;/div&gt;
                            &lt;/div&gt;               
                        &lt;/p&gt;
    					&lt;p&gt;
                            &lt;div class="progress-label-left"&gt;&lt;b&gt;1&lt;/b&gt; &lt;i class="fas fa-star text-warning"&gt;&lt;/i&gt;&lt;/div&gt;
                            
                            &lt;div class="progress-label-right"&gt;(&lt;span id="total_one_star_review"&gt;0&lt;/span&gt;)&lt;/div&gt;
                            &lt;div class="progress"&gt;
                                &lt;div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"&gt;&lt;/div&gt;
                            &lt;/div&gt;               
                        &lt;/p&gt;
    				&lt;/div&gt;
    				&lt;div class="col-sm-4 text-center"&gt;
    					&lt;h3 class="mt-4 mb-3"&gt;Write Review Here&lt;/h3&gt;
    					&lt;button type="button" name="add_review" id="add_review" class="btn btn-primary"&gt;Review&lt;/button&gt;
    				&lt;/div&gt;
    			&lt;/div&gt;
    		&lt;/div&gt;
    	&lt;/div&gt;
    	&lt;div class="mt-5" id="review_content"&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

&lt;div id="review_modal" class="modal" tabindex="-1" role="dialog"&gt;
  	&lt;div class="modal-dialog" role="document"&gt;
    	&lt;div class="modal-content"&gt;
	      	&lt;div class="modal-header"&gt;
	        	&lt;h5 class="modal-title"&gt;Submit Review&lt;/h5&gt;
	        	&lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
	          		&lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
	        	&lt;/button&gt;
	      	&lt;/div&gt;
	      	&lt;div class="modal-body"&gt;
	      		&lt;h4 class="text-center mt-2 mb-4"&gt;
	        		&lt;i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"&gt;&lt;/i&gt;
                    &lt;i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"&gt;&lt;/i&gt;
                    &lt;i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"&gt;&lt;/i&gt;
                    &lt;i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"&gt;&lt;/i&gt;
                    &lt;i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"&gt;&lt;/i&gt;
	        	&lt;/h4&gt;
	        	&lt;div class="form-group"&gt;
	        		&lt;input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" /&gt;
	        	&lt;/div&gt;
	        	&lt;div class="form-group"&gt;
	        		&lt;textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"&gt;&lt;/textarea&gt;
	        	&lt;/div&gt;
	        	&lt;div class="form-group text-center mt-4"&gt;
	        		&lt;button type="button" class="btn btn-primary" id="save_review"&gt;Submit&lt;/button&gt;
	        	&lt;/div&gt;
	      	&lt;/div&gt;
    	&lt;/div&gt;
  	&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>

<br />
<p>Once we have create this html code, next we need to write jQuery for animate star icon, when we have mouse over or mouse leave from star icon. So in below jquery you can find how to animate star icon.</p>
<br />
<pre class="line-numbers language-markup"><code class="language-markup">
var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count &llt;= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count &lt;= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count &lt;= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });
</code>
</pre>
<br />
<p>In this jQuery code, we have create one <b>rating_data</b> variable. Under this variable we will store user star rating data when user has click on any number of star icon.</p>
<p>Next for submit Review and Rating data using bootstrap modal, we have use Ajax request, so when user click on submit button after fill review field, then star rating and review data will be send to PHP server script using Ajax request and this request will also received response from server also.</p>
<h2><b>Insert or Sve Review and Rating System Data</b></h2>
<br />
<p>Once user has click on submit button then rating and reive data will be send to PHP script. So at PHP script first we need to make database connection. So below code you can see in which it will make Mysql database connection.</p>
<b>submit_rating.php</b>
<pre class="line-numbers language-php"><code class="language-php">
$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");
</code>
</pre>
<br />
<p>After making database connection, then it will check <b>$_POST["rating_data"]</b> variable value has been set or not. IF this variable value is set then it will store review and rating data in simple array because here we will use PHP PDO class for insert data into database. And next we have write insert query and execute query for insert review and rating data into Mysql database and send response to Ajax request also.</p>
<pre class="line-numbers language-php"><code class="language-php">
if(isset($_POST["rating_data"]))
{

	$data = array(
		':user_name'		=&gt;	$_POST["user_name"],
		':user_rating'		=&gt;	$_POST["rating_data"],
		':user_review'		=&gt;	$_POST["user_review"],
		':datetime'			=&gt;	time()
	);

	$query = "
	INSERT INTO review_table 
	(user_name, user_rating, user_review, datetime) 
	VALUES (:user_name, :user_rating, :user_review, :datetime)
	";

	$statement = $connect-&gt;prepare($query);

	$statement-&gt;execute($data);

	echo "Your Review &amp; Rating Successfully Submitted";

}
</code>
</pre>
<br />
<h2><b>Fetch Review &amp; Rating Data From Database</b></h2>
<br />
<p>Here we have make dynamic Review and Rating System in PHP and Review and Rating data has been store under database. So once data has been store in database. Then we need to fetch from database and display on web page. So Here we have we have use Ajax jQuery for fetch data from database. For Fetch data we will make function which will send ajax request to PHP script and at server side php script will fetch data from database and return back data to Ajax request in JSON format. So once data has been received from server in JSON format then by using jQuery code it will display on web page. It will display both Star Rating and Review data on web page. Below you can find jQuery script and PHP script code for fetch data from database and display on web page without refresh of web page.</p>
<b>index.php</b>
<pre class="line-numbers language-markup"><code class="language-markup">
$('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) &gt;= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length &gt; 0)
                {
                    var html = '';

                    for(var count = 0; count &lt; data.review_data.length; count++)
                    {
                        html += '&lt;div class="row mb-3"&gt;';

                        html += '&lt;div class="col-sm-1"&gt;&lt;div class="rounded-circle bg-danger text-white pt-2 pb-2"&gt;&lt;h3 class="text-center"&gt;'+data.review_data[count].user_name.charAt(0)+'&lt;/h3&gt;&lt;/div&gt;&lt;/div&gt;';

                        html += '&lt;div class="col-sm-11"&gt;';

                        html += '&lt;div class="card"&gt;';

                        html += '&lt;div class="card-header"&gt;&lt;b&gt;'+data.review_data[count].user_name+'&lt;/b&gt;&lt;/div&gt;';

                        html += '&lt;div class="card-body"&gt;';

                        for(var star = 1; star &lt;= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating &gt;= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '&lt;i class="fas fa-star '+class_name+' mr-1"&gt;&lt;/i&gt;';
                        }

                        html += '&lt;br /&gt;';

                        html += data.review_data[count].user_review;

                        html += '&lt;/div&gt;';

                        html += '&lt;div class="card-footer text-right"&gt;On '+data.review_data[count].datetime+'&lt;/div&gt;';

                        html += '&lt;/div&gt;';

                        html += '&lt;/div&gt;';

                        html += '&lt;/div&gt;';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }
</code>
</pre>
<br />
<b>submit_rating.php</b>
<pre class="line-numbers language-php"><code class="language-php">
if(isset($_POST["action"]))
{
	$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0;
	$review_content = array();

	$query = "
	SELECT * FROM review_table 
	ORDER BY review_id DESC
	";

	$result = $connect-&gt;query($query, PDO::FETCH_ASSOC);

	foreach($result as $row)
	{
		$review_content[] = array(
			'user_name'		=&gt;	$row["user_name"],
			'user_review'	=&gt;	$row["user_review"],
			'rating'		=&gt;	$row["user_rating"],
			'datetime'		=&gt;	date('l jS, F Y h:i:s A', $row["datetime"])
		);

		if($row["user_rating"] == '5')
		{
			$five_star_review++;
		}

		if($row["user_rating"] == '4')
		{
			$four_star_review++;
		}

		if($row["user_rating"] == '3')
		{
			$three_star_review++;
		}

		if($row["user_rating"] == '2')
		{
			$two_star_review++;
		}

		if($row["user_rating"] == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_user_rating = $total_user_rating + $row["user_rating"];

	}

	$average_rating = $total_user_rating / $total_review;

	$output = array(
		'average_rating'	=&gt;	number_format($average_rating, 1),
		'total_review'		=&gt;	$total_review,
		'five_star_review'	=&gt;	$five_star_review,
		'four_star_review'	=&gt;	$four_star_review,
		'three_star_review'	=&gt;	$three_star_review,
		'two_star_review'	=&gt;	$two_star_review,
		'one_star_review'	=&gt;	$one_star_review,
		'review_data'		=&gt;	$review_content
	);

	echo json_encode($output);

}
</code>
</pre>
<br />
<p>If you want to get complete source with .sql file, so please write your email address in comment box. We will send you complete source code file at your define email address.</p>
<br />
<br />
<div align="center">
<a class="source-code" href="http://demo.webslesson.info/php-review-rating-system/" target="_blank">View Demo</a>
</div>
<br />
<br />
<div align="center">
<a class="source-code" href="http://demo.webslesson.info/scm/source-code.php?code=0951df3b28ae5bc3ace01151289c9938">Download Source Code</a>
</div>
<br />
<br />
<div style='clear: both;'></div>
<div class='pbtsharethisbutt'>
<ul class='pbt-social-icons'>
<li class='Share-this-arti'>Share This:&nbsp;&nbsp;</li>
<li class='pbtfacebook'><a href='https://www.facebook.com/share.php?v=4&src=bm&u=https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html&t=How to Create Review & Rating Page in PHP with Ajax' onclick='window.open(this.href,"sharer","toolbar=0,status=0,width=626,height=436"); return false;' rel='nofollow' target='_blank' title='Share this on Facebook'><i class='fa fa-facebook-square'></i>&nbsp;Facebook</a></li><li class='pbttwitter'><a href='https://twitter.com/home?status=How to Create Review & Rating Page in PHP with Ajax -- https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html' rel='nofollow' target='_blank' title='Tweet This!'><i class='fa fa-twitter-square'></i>&nbsp;Twitter</a></li><li class='pbtgoogle'><a href='https://plus.google.com/share?url=https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html' onclick='javascript:window.open(this.href,   "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600");return false;' rel='nofollow' target='_blank' title='Share this on Google+'><i class='fa fa-google-plus-square'></i>&nbsp;Google+</a></li><li class='pbtstumbleupon'><a href='https://www.stumbleupon.com/submit?url=https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html&title=How to Create Review & Rating Page in PHP with Ajax' rel='nofollow' target='_blank' title='Stumble upon something good? Share it on StumbleUpon'><i class='fa fa-stumbleupon-circle'></i>&nbsp;Stumble</a></li><li class='pbtdigg'><a href='https://digg.com/submit?phase=2&url=https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html&title=How to Create Review & Rating Page in PHP with Ajax' rel='nofollow' target='_blank' title='Digg this!'><i class='fa fa-digg'></i>&nbsp;Digg</a></li>
</ul>
</div>
<div style='clear: both;'></div>
</div>
<footer class='entry-footerpbt'>
</footer>
<div class='post-iconspbt'>
<span class='post-icons' style='padding-right:10px;'>
</span>
<div class='post-share-buttons goog-inline-block'>
<a class='goog-inline-block share-button sb-email' href='https://www.blogger.com/share-post.g?blogID=8964111134041337103&postID=6003697290998394208&target=email' target='_blank' title='Email This'><span class='share-button-link-text'>Email This</span></a><a class='goog-inline-block share-button sb-blog' href='https://www.blogger.com/share-post.g?blogID=8964111134041337103&postID=6003697290998394208&target=blog' onclick='window.open(this.href, "_blank", "height=270,width=475"); return false;' target='_blank' title='BlogThis!'><span class='share-button-link-text'>BlogThis!</span></a><a class='goog-inline-block share-button sb-twitter' href='https://www.blogger.com/share-post.g?blogID=8964111134041337103&postID=6003697290998394208&target=twitter' target='_blank' title='Share to Twitter'><span class='share-button-link-text'>Share to Twitter</span></a><a class='goog-inline-block share-button sb-facebook' href='https://www.blogger.com/share-post.g?blogID=8964111134041337103&postID=6003697290998394208&target=facebook' onclick='window.open(this.href, "_blank", "height=430,width=640"); return false;' target='_blank' title='Share to Facebook'><span class='share-button-link-text'>Share to Facebook</span></a>
</div>
<div style='clear: both;'></div>
</div>
<div class='post-location post-locationpbt'>
</div>
<div class='related-postbwrap' id='bpostrelated-post'></div>
<div style='clear: both;'></div>
<script type='text/javascript'>
var labelArray = [
          "php",
      
          "php rating system",
      
          "php review and rating script",
      
          "php review script",
      
          "php review system",
      
          "rating system",
      
          "review and rating",
      
          "review and rating code in php",
      
          "review and rating in php",
      
          "review system"
      ];
var relatedPostConfig = {
      homePage: "https://www.webslesson.info/",
      widgetTitle: "<h4>Related Posts:</h4>",
      numPosts: 5,
      summaryLength: 150,
      titleLength: "auto",
      thumbnailSize: 80,
      noImage: "https://1.bp.blogspot.com/-Xakmg4CGXnA/Uw_8uqsGlwI/AAAAAAAALjg/AdRZNmOJpIA/s1600/no-img.png",
      containerId: "bpostrelated-post",
      newTabLink: false,
      moreText: "Read More",
      widgetStyle: 2,
      callBack: function() {}
};
</script>
<script type='text/javascript'>
//<![CDATA[

/*! Related Post Widget for Blogger by Taufik Nurrohman => http://gplus.to/tovic */
var randomRelatedIndex,showRelatedPost;(function(n,m,k){var d={widgetTitle:"<h4>Artikel Terkait:</h4>",widgetStyle:1,homePage:"http://www.dte.web.id",numPosts:7,summaryLength:370,titleLength:"auto",thumbnailSize:72,noImage:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAA3NCSVQICAjb4U/gAAAADElEQVQImWOor68HAAL+AX7vOF2TAAAAAElFTkSuQmCC",containerId:"related-post",newTabLink:false,moreText:"Baca Selengkapnya",callBack:function(){}};for(var f in relatedPostConfig){d[f]=(relatedPostConfig[f]=="undefined")?d[f]:relatedPostConfig[f]}var j=function(a){var b=m.createElement("script");b.type="text/javascript";b.src=a;k.appendChild(b)},o=function(b,a){return Math.floor(Math.random()*(a-b+1))+b},l=function(a){var p=a.length,c,b;if(p===0){return false}while(--p){c=Math.floor(Math.random()*(p+1));b=a[p];a[p]=a[c];a[c]=b}return a},e=(typeof labelArray=="object"&&labelArray.length>0)?"/-/"+l(labelArray)[0]:"",h=function(b){var c=b.feed.openSearch$totalResults.$t-d.numPosts,a=o(1,(c>0?c:1));j(d.homePage.replace(/\/$/,"")+"/feeds/posts/summary"+e+"?alt=json-in-script&orderby=updated&start-index="+a+"&max-results="+d.numPosts+"&callback=showRelatedPost")},g=function(z){var s=document.getElementById(d.containerId),x=l(z.feed.entry),A=d.widgetStyle,c=d.widgetTitle+'<ul class="related-post-style-'+A+'">',b=d.newTabLink?' target="_blank"':"",y='<span style="display:block;clear:both;"></span>',v,t,w,r,u;if(!s){return}for(var q=0;q<d.numPosts;q++){if(q==x.length){break}t=x[q].title.$t;w=(d.titleLength!=="auto"&&d.titleLength<t.length)?t.substring(0,d.titleLength)+"&hellip;":t;r=("media$thumbnail" in x[q]&&d.thumbnailSize!==false)?x[q].media$thumbnail.url.replace(/\/s[0-9]+(\-c)?/,"/s"+d.thumbnailSize+"-c"):d.noImage;u=("summary" in x[q]&&d.summaryLength>0)?x[q].summary.$t.replace(/<br ?\/?>/g," ").replace(/<.*?>/g,"").replace(/[<>]/g,"").substring(0,d.summaryLength)+"&hellip;":"";for(var p=0,a=x[q].link.length;p<a;p++){v=(x[q].link[p].rel=="alternate")?x[q].link[p].href:"#"}if(A==2){c+='<li><img alt="" class="related-post-item-thumbnail" src="'+r+'" width="'+d.thumbnailSize+'" height="'+d.thumbnailSize+'"><a class="related-post-item-title" title="'+t+'" href="'+v+'"'+b+">"+w+'</a><span class="related-post-item-summary"><span class="related-post-item-summary-text">'+u+'</span> <a href="'+v+'" class="related-post-item-more"'+b+">"+d.moreText+"</a></span>"+y+"</li>"}else{if(A==3||A==4){c+='<li class="related-post-item" tabindex="0"><a class="related-post-item-title" href="'+v+'"'+b+'><img alt="" class="related-post-item-thumbnail" src="'+r+'" width="'+d.thumbnailSize+'" height="'+d.thumbnailSize+'"></a><div class="related-post-item-tooltip"><a class="related-post-item-title" title="'+t+'" href="'+v+'"'+b+">"+w+"</a></div>"+y+"</li>"}else{if(A==5){c+='<li class="related-post-item" tabindex="0"><a class="related-post-item-wrapper" href="'+v+'" title="'+t+'"'+b+'><img alt="" class="related-post-item-thumbnail" src="'+r+'" width="'+d.thumbnailSize+'" height="'+d.thumbnailSize+'"><span class="related-post-item-tooltip">'+w+"</span></a>"+y+"</li>"}else{if(A==6){c+='<li><a class="related-post-item-title" title="'+t+'" href="'+v+'"'+b+">"+w+'</a><div class="related-post-item-tooltip"><img alt="" class="related-post-item-thumbnail" src="'+r+'" width="'+d.thumbnailSize+'" height="'+d.thumbnailSize+'"><span class="related-post-item-summary"><span class="related-post-item-summary-text">'+u+"</span></span>"+y+"</div></li>"}else{c+='<li><a title="'+t+'" href="'+v+'"'+b+">"+w+"</a></li>"}}}}}s.innerHTML=c+="</ul>"+y;d.callBack()};randomRelatedIndex=h;showRelatedPost=g;j(d.homePage.replace(/\/$/,"")+"/feeds/posts/summary"+e+"?alt=json-in-script&orderby=updated&max-results=0&callback=randomRelatedIndex")})(window,document,document.getElementsByTagName("head")[0]);

//]]>
</script>
</article>
<div style='clear: both;'></div>
<div class='blog-pager' id='blog-pager'>
<span id='blog-pager-newer-link'>
<a class='blog-pager-newer-link' href='https://www.webslesson.info/2021/06/wordpress-website-design-the-ultimate-guide-to-wordpress.html' id='Blog1_blog-pager-newer-link' title='Newer Post'>Newer Post</a>
</span>
<span id='blog-pager-older-link'>
<a class='blog-pager-older-link' href='https://www.webslesson.info/2021/05/submit-form-without-page-refresh-using-javascript-with-php.html' id='Blog1_blog-pager-older-link' title='Older Post'>Older Post</a>
</span>
<a class='home-link' href='https://www.webslesson.info/'>Home</a>
</div>
<div class='clear'></div>
<div class='comments' id='comments'>
<a name='comments'></a>
<h4>327 comments:</h4>
<div class='comments-content'>
<script async='async' src='' type='text/javascript'></script>
<script type='text/javascript'>
    (function() {
      var items = null;
      var msgs = null;
      var config = {};

// <![CDATA[
      var cursor = null;
      if (items && items.length > 0) {
        cursor = parseInt(items[items.length - 1].timestamp) + 1;
      }

      var bodyFromEntry = function(entry) {
        if (entry.gd$extendedProperty) {
          for (var k in entry.gd$extendedProperty) {
            if (entry.gd$extendedProperty[k].name == 'blogger.contentRemoved') {
              return '<span class="deleted-comment">' + entry.content.$t + '</span>';
            }
          }
        }
        return entry.content.$t;
      }

      var parse = function(data) {
        cursor = null;
        var comments = [];
        if (data && data.feed && data.feed.entry) {
          for (var i = 0, entry; entry = data.feed.entry[i]; i++) {
            var comment = {};
            // comment ID, parsed out of the original id format
            var id = /blog-(\d+).post-(\d+)/.exec(entry.id.$t);
            comment.id = id ? id[2] : null;
            comment.body = bodyFromEntry(entry);
            comment.timestamp = Date.parse(entry.published.$t) + '';
            if (entry.author && entry.author.constructor === Array) {
              var auth = entry.author[0];
              if (auth) {
                comment.author = {
                  name: (auth.name ? auth.name.$t : undefined),
                  profileUrl: (auth.uri ? auth.uri.$t : undefined),
                  avatarUrl: (auth.gd$image ? auth.gd$image.src : undefined)
                };
              }
            }
            if (entry.link) {
              if (entry.link[2]) {
                comment.link = comment.permalink = entry.link[2].href;
              }
              if (entry.link[3]) {
                var pid = /.*comments\/default\/(\d+)\?.*/.exec(entry.link[3].href);
                if (pid && pid[1]) {
                  comment.parentId = pid[1];
                }
              }
            }
            comment.deleteclass = 'item-control blog-admin';
            if (entry.gd$extendedProperty) {
              for (var k in entry.gd$extendedProperty) {
                if (entry.gd$extendedProperty[k].name == 'blogger.itemClass') {
                  comment.deleteclass += ' ' + entry.gd$extendedProperty[k].value;
                }
              }
            }
            comments.push(comment);
          }
        }
        return comments;
      };

      var paginator = function(callback) {
        if (hasMore()) {
          var url = config.feed + '?alt=json&v=2&orderby=published&reverse=false&max-results=50';
          if (cursor) {
            url += '&published-min=' + new Date(cursor).toISOString();
          }
          window.bloggercomments = function(data) {
            var parsed = parse(data);
            cursor = parsed.length < 50 ? null
                : parseInt(parsed[parsed.length - 1].timestamp) + 1
            callback(parsed);
            window.bloggercomments = null;
          }
          url += '&callback=bloggercomments';
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = url;
          document.getElementsByTagName('head')[0].appendChild(script);
        }
      };
      var hasMore = function() {
        return !!cursor;
      };
      var getMeta = function(key, comment) {
        if ('iswriter' == key) {
          var matches = !!comment.author
              && comment.author.name == config.authorName
              && comment.author.profileUrl == config.authorUrl;
          return matches ? 'true' : '';
        } else if ('deletelink' == key) {
          return config.baseUri + '/delete-comment.g?blogID='
               + config.blogId + '&postID=' + comment.id;
        } else if ('deleteclass' == key) {
          return comment.deleteclass;
        }
        return '';
      };

      var replybox = null;
      var replyUrlParts = null;
      var replyParent = undefined;

      var onReply = function(commentId, domId) {
        if (replybox == null) {
          // lazily cache replybox, and adjust to suit this style:
          replybox = document.getElementById('comment-editor');
          if (replybox != null) {
            replybox.height = '250px';
            replybox.style.display = 'block';
            replyUrlParts = replybox.src.split('#');
          }
        }
        if (replybox && (commentId !== replyParent)) {
          document.getElementById(domId).insertBefore(replybox, null);
          replybox.src = replyUrlParts[0]
              + (commentId ? '&parentID=' + commentId : '')
              + '#' + replyUrlParts[1];
          replyParent = commentId;
        }
      };

      var hash = (window.location.hash || '#').substring(1);
      var startThread, targetComment;
      if (/^comment-form_/.test(hash)) {
        startThread = hash.substring('comment-form_'.length);
      } else if (/^c[0-9]+$/.test(hash)) {
        targetComment = hash.substring(1);
      }

      // Configure commenting API:
      var configJso = {
        'maxDepth': config.maxThreadDepth
      };
      var provider = {
        'id': config.postId,
        'data': items,
        'loadNext': paginator,
        'hasMore': hasMore,
        'getMeta': getMeta,
        'onReply': onReply,
        'rendered': true,
        'initComment': targetComment,
        'initReplyThread': startThread,
        'config': configJso,
        'messages': msgs
      };

      var render = function() {
        if (window.goog && window.goog.comments) {
          var holder = document.getElementById('comment-holder');
          window.goog.comments.render(holder, provider);
        }
      };

      // render now, or queue to render when library loads:
      if (window.goog && window.goog.comments) {
        render();
      } else {
        window.goog = window.goog || {};
        window.goog.comments = window.goog.comments || {};
        window.goog.comments.loadQueue = window.goog.comments.loadQueue || [];
        window.goog.comments.loadQueue.push(render);
      }
    })();
// ]]>
  </script>
<div id='comment-holder'>
<div class="comment-thread toplevel-thread"><ol id="top-ra"><li class="comment" id="c1818509887343530441"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/16031742556979009713" rel="nofollow">Lochan Peru</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622030680443#c1818509887343530441">26 May 2021 at 05:04</a></span></div><p class="comment-content">Nice</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="1818509887343530441">Reply</a><span class="item-control blog-admin blog-admin pid-1397120717"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1818509887343530441">Delete</a></span></span></div><div class="comment-replies"><div id="c1818509887343530441-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1818509887343530441-ra" class="thread-chrome thread-expanded"><div></div><div id="c1818509887343530441-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1818509887343530441">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1818509887343530441-ce"></div></li><li class="comment" id="c7982832223152942503"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/06790337897204282323" rel="nofollow">Shanal Omar</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622030790933#c7982832223152942503">26 May 2021 at 05:06</a></span></div><p class="comment-content">info@technicalyatra.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="7982832223152942503">Reply</a><span class="item-control blog-admin blog-admin pid-1893620236"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7982832223152942503">Delete</a></span></span></div><div class="comment-replies"><div id="c7982832223152942503-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7982832223152942503-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c5874734033293067739"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622184405562#c5874734033293067739">27 May 2021 at 23:46</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5874734033293067739">Delete</a></span></span></div><div class="comment-replies"><div id="c5874734033293067739-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5874734033293067739-ra" class="thread-chrome thread-expanded"><div></div><div id="c5874734033293067739-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5874734033293067739">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5874734033293067739-ce"></div></li></div><div id="c7982832223152942503-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7982832223152942503">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7982832223152942503-ce"></div></li><li class="comment" id="c4376549018431790549"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/14188118393617417825" rel="nofollow">Lathiya harmik</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622033204717#c4376549018431790549">26 May 2021 at 05:46</a></span></div><p class="comment-content">xibir62008@sc2hub.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="4376549018431790549">Reply</a><span class="item-control blog-admin blog-admin pid-1627367688"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4376549018431790549">Delete</a></span></span></div><div class="comment-replies"><div id="c4376549018431790549-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4376549018431790549-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c6394568109265195542"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622184418493#c6394568109265195542">27 May 2021 at 23:46</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6394568109265195542">Delete</a></span></span></div><div class="comment-replies"><div id="c6394568109265195542-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6394568109265195542-ra" class="thread-chrome thread-expanded"><div></div><div id="c6394568109265195542-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6394568109265195542">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6394568109265195542-ce"></div></li></div><div id="c4376549018431790549-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4376549018431790549">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4376549018431790549-ce"></div></li><li class="comment" id="c1503587861833340575"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/13005355214433981517" rel="nofollow">Mehmet Akgül</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622033360376#c1503587861833340575">26 May 2021 at 05:49</a></span></div><p class="comment-content">Very Goood </p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="1503587861833340575">Reply</a><span class="item-control blog-admin blog-admin pid-197249895"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1503587861833340575">Delete</a></span></span></div><div class="comment-replies"><div id="c1503587861833340575-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1503587861833340575-ra" class="thread-chrome thread-expanded"><div></div><div id="c1503587861833340575-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1503587861833340575">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1503587861833340575-ce"></div></li><li class="comment" id="c4471188100575824128"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/14188118393617417825" rel="nofollow">Lathiya harmik</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622034483241#c4471188100575824128">26 May 2021 at 06:08</a></span></div><p class="comment-content">xibir62008@sc2hub.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="4471188100575824128">Reply</a><span class="item-control blog-admin blog-admin pid-1627367688"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4471188100575824128">Delete</a></span></span></div><div class="comment-replies"><div id="c4471188100575824128-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4471188100575824128-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c3477023341947045488"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622184434038#c3477023341947045488">27 May 2021 at 23:47</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3477023341947045488">Delete</a></span></span></div><div class="comment-replies"><div id="c3477023341947045488-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3477023341947045488-ra" class="thread-chrome thread-expanded"><div></div><div id="c3477023341947045488-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3477023341947045488">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3477023341947045488-ce"></div></li></div><div id="c4471188100575824128-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4471188100575824128">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4471188100575824128-ce"></div></li><li class="comment" id="c2685116173478360626"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/02212970257283399093" rel="nofollow">z</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622035261901#c2685116173478360626">26 May 2021 at 06:21</a></span></div><p class="comment-content">vip</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="2685116173478360626">Reply</a><span class="item-control blog-admin blog-admin pid-1047552746"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2685116173478360626">Delete</a></span></span></div><div class="comment-replies"><div id="c2685116173478360626-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2685116173478360626-ra" class="thread-chrome thread-expanded"><div></div><div id="c2685116173478360626-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2685116173478360626">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2685116173478360626-ce"></div></li><li class="comment" id="c4582135786732785163"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/02212970257283399093" rel="nofollow">z</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622035281278#c4582135786732785163">26 May 2021 at 06:21</a></span></div><p class="comment-content">nice </p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="4582135786732785163">Reply</a><span class="item-control blog-admin blog-admin pid-1047552746"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4582135786732785163">Delete</a></span></span></div><div class="comment-replies"><div id="c4582135786732785163-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4582135786732785163-ra" class="thread-chrome thread-expanded"><div></div><div id="c4582135786732785163-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4582135786732785163">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4582135786732785163-ce"></div></li><li class="comment" id="c6233158811550855259"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/16608899684078859810" rel="nofollow">Mosconet</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622036192752#c6233158811550855259">26 May 2021 at 06:36</a></span></div><p class="comment-content">abiolamoses68@gmail</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="6233158811550855259">Reply</a><span class="item-control blog-admin blog-admin pid-410812456"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6233158811550855259">Delete</a></span></span></div><div class="comment-replies"><div id="c6233158811550855259-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6233158811550855259-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c4602198473474125785"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622184446291#c4602198473474125785">27 May 2021 at 23:47</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4602198473474125785">Delete</a></span></span></div><div class="comment-replies"><div id="c4602198473474125785-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4602198473474125785-ra" class="thread-chrome thread-expanded"><div></div><div id="c4602198473474125785-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4602198473474125785">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4602198473474125785-ce"></div></li></div><div id="c6233158811550855259-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6233158811550855259">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6233158811550855259-ce"></div></li><li class="comment" id="c6500911175654431379"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/07401393319929305921" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622036200305#c6500911175654431379">26 May 2021 at 06:36</a></span></div><p class="comment-content">give me link download sourcode , thank you!</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="6500911175654431379">Reply</a><span class="item-control blog-admin blog-admin pid-1167715961"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6500911175654431379">Delete</a></span></span></div><div class="comment-replies"><div id="c6500911175654431379-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6500911175654431379-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c4398437974540918108"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622184537851#c4398437974540918108">27 May 2021 at 23:48</a></span></div><p class="comment-content">Please share your email address under this comment box, then we will send you source code file on your email address.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4398437974540918108">Delete</a></span></span></div><div class="comment-replies"><div id="c4398437974540918108-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4398437974540918108-ra" class="thread-chrome thread-expanded"><div></div><div id="c4398437974540918108-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4398437974540918108">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4398437974540918108-ce"></div></li></div><div id="c6500911175654431379-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6500911175654431379">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6500911175654431379-ce"></div></li><li class="comment" id="c5054799023983383289"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/07401393319929305921" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622036339811#c5054799023983383289">26 May 2021 at 06:38</a></span></div><p class="comment-content">give me source code thank!</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5054799023983383289">Reply</a><span class="item-control blog-admin blog-admin pid-1167715961"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5054799023983383289">Delete</a></span></span></div><div class="comment-replies"><div id="c5054799023983383289-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5054799023983383289-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c2837842653756738064"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622184551783#c2837842653756738064">27 May 2021 at 23:49</a></span></div><p class="comment-content">Please share your email address under this comment box, then we will send you source code file on your email address.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2837842653756738064">Delete</a></span></span></div><div class="comment-replies"><div id="c2837842653756738064-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2837842653756738064-ra" class="thread-chrome thread-expanded"><div></div><div id="c2837842653756738064-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2837842653756738064">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2837842653756738064-ce"></div></li></div><div id="c5054799023983383289-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5054799023983383289">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5054799023983383289-ce"></div></li><li class="comment" id="c786281658763148104"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/00565453837323798864" rel="nofollow">Sandeep</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622042704432#c786281658763148104">26 May 2021 at 08:25</a></span></div><p class="comment-content">Great job</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="786281658763148104">Reply</a><span class="item-control blog-admin blog-admin pid-1661728935"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=786281658763148104">Delete</a></span></span></div><div class="comment-replies"><div id="c786281658763148104-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c786281658763148104-ra" class="thread-chrome thread-expanded"><div></div><div id="c786281658763148104-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="786281658763148104">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c786281658763148104-ce"></div></li><li class="comment" id="c6612412367052561451"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/08980292317259829460" rel="nofollow">Ola Sam</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622043053914#c6612412367052561451">26 May 2021 at 08:30</a></span></div><p class="comment-content">olawalesam2021@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="6612412367052561451">Reply</a><span class="item-control blog-admin blog-admin pid-2057709991"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6612412367052561451">Delete</a></span></span></div><div class="comment-replies"><div id="c6612412367052561451-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6612412367052561451-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c6358845688286235654"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622184620958#c6358845688286235654">27 May 2021 at 23:50</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6358845688286235654">Delete</a></span></span></div><div class="comment-replies"><div id="c6358845688286235654-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6358845688286235654-ra" class="thread-chrome thread-expanded"><div></div><div id="c6358845688286235654-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6358845688286235654">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6358845688286235654-ce"></div></li></div><div id="c6612412367052561451-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6612412367052561451">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6612412367052561451-ce"></div></li><li class="comment" id="c6829519092694501635"><div class="avatar-image-container"><img src="//4.bp.blogspot.com/-FpT2k_BrsEU/W8zu8w0SQdI/AAAAAAAAB8M/szkqlPl54gkLgwmItJVFbR8dx2pU-o_zgCK4BGAYYCw/s35/kirpilmis-ben-1.jpg" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03518473897841119926" rel="nofollow">Emir Şiriner</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622044111722#c6829519092694501635">26 May 2021 at 08:48</a></span></div><p class="comment-content">Very nice and very usefull... Thanks for share.</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="6829519092694501635">Reply</a><span class="item-control blog-admin blog-admin pid-328495751"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6829519092694501635">Delete</a></span></span></div><div class="comment-replies"><div id="c6829519092694501635-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6829519092694501635-ra" class="thread-chrome thread-expanded"><div></div><div id="c6829519092694501635-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6829519092694501635">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6829519092694501635-ce"></div></li><li class="comment" id="c5190579812530826581"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/14076866737394100134" rel="nofollow">Victoire</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622045543217#c5190579812530826581">26 May 2021 at 09:12</a></span></div><p class="comment-content">Great and straight forward content. Thanks for sharing such and more power to your elbow💪</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5190579812530826581">Reply</a><span class="item-control blog-admin blog-admin pid-1767341139"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5190579812530826581">Delete</a></span></span></div><div class="comment-replies"><div id="c5190579812530826581-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5190579812530826581-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c399787035895827830"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/14076866737394100134" rel="nofollow">Victoire</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622549530739#c399787035895827830">1 June 2021 at 05:12</a></span></div><p class="comment-content">Please Have not received source code file.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-1767341139"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=399787035895827830">Delete</a></span></span></div><div class="comment-replies"><div id="c399787035895827830-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c399787035895827830-ra" class="thread-chrome thread-expanded"><div></div><div id="c399787035895827830-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="399787035895827830">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c399787035895827830-ce"></div></li></div><div id="c5190579812530826581-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5190579812530826581">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5190579812530826581-ce"></div></li><li class="comment" id="c4676261413922971071"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/12011305786329796894" rel="nofollow">elmouhawes</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622052789760#c4676261413922971071">26 May 2021 at 11:13</a></span></div><p class="comment-content">elmouhawes@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="4676261413922971071">Reply</a><span class="item-control blog-admin blog-admin pid-1150455101"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4676261413922971071">Delete</a></span></span></div><div class="comment-replies"><div id="c4676261413922971071-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4676261413922971071-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c7879108147074839201"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622184661990#c7879108147074839201">27 May 2021 at 23:51</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7879108147074839201">Delete</a></span></span></div><div class="comment-replies"><div id="c7879108147074839201-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7879108147074839201-ra" class="thread-chrome thread-expanded"><div></div><div id="c7879108147074839201-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7879108147074839201">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7879108147074839201-ce"></div></li></div><div id="c4676261413922971071-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4676261413922971071">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4676261413922971071-ce"></div></li><li class="comment" id="c5456124614104844795"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/04711174984044280847" rel="nofollow">filmesdublados</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622055915998#c5456124614104844795">26 May 2021 at 12:05</a></span></div><p class="comment-content">Nice</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5456124614104844795">Reply</a><span class="item-control blog-admin blog-admin pid-696358391"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5456124614104844795">Delete</a></span></span></div><div class="comment-replies"><div id="c5456124614104844795-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5456124614104844795-ra" class="thread-chrome thread-expanded"><div></div><div id="c5456124614104844795-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5456124614104844795">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5456124614104844795-ce"></div></li><li class="comment" id="c7451227465927225455"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/13415159650819005863" rel="nofollow">manoel</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622056686119#c7451227465927225455">26 May 2021 at 12:18</a></span></div><p class="comment-content">show</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="7451227465927225455">Reply</a><span class="item-control blog-admin blog-admin pid-590946032"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7451227465927225455">Delete</a></span></span></div><div class="comment-replies"><div id="c7451227465927225455-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7451227465927225455-ra" class="thread-chrome thread-expanded"><div></div><div id="c7451227465927225455-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7451227465927225455">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7451227465927225455-ce"></div></li><li class="comment" id="c8528753303997938417"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/13415159650819005863" rel="nofollow">manoel</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622056765635#c8528753303997938417">26 May 2021 at 12:19</a></span></div><p class="comment-content">legal este tópico</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="8528753303997938417">Reply</a><span class="item-control blog-admin blog-admin pid-590946032"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8528753303997938417">Delete</a></span></span></div><div class="comment-replies"><div id="c8528753303997938417-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8528753303997938417-ra" class="thread-chrome thread-expanded"><div></div><div id="c8528753303997938417-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8528753303997938417">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8528753303997938417-ce"></div></li><li class="comment" id="c8621381198286973503"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/13415159650819005863" rel="nofollow">manoel</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622056801997#c8621381198286973503">26 May 2021 at 12:20</a></span></div><p class="comment-content">muito leal este tópico</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="8621381198286973503">Reply</a><span class="item-control blog-admin blog-admin pid-590946032"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8621381198286973503">Delete</a></span></span></div><div class="comment-replies"><div id="c8621381198286973503-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8621381198286973503-ra" class="thread-chrome thread-expanded"><div></div><div id="c8621381198286973503-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8621381198286973503">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8621381198286973503-ce"></div></li><li class="comment" id="c5683211701637186457"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/13415159650819005863" rel="nofollow">manoel</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622057859681#c5683211701637186457">26 May 2021 at 12:37</a></span></div><p class="comment-content">show irmão</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5683211701637186457">Reply</a><span class="item-control blog-admin blog-admin pid-590946032"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5683211701637186457">Delete</a></span></span></div><div class="comment-replies"><div id="c5683211701637186457-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5683211701637186457-ra" class="thread-chrome thread-expanded"><div></div><div id="c5683211701637186457-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5683211701637186457">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5683211701637186457-ce"></div></li><li class="comment" id="c5459629773394903454"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/01191488446144679180" rel="nofollow">Md Tousif Ahamed</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622069987489#c5459629773394903454">26 May 2021 at 15:59</a></span></div><p class="comment-content">mdtacst.info@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5459629773394903454">Reply</a><span class="item-control blog-admin blog-admin pid-99499451"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5459629773394903454">Delete</a></span></span></div><div class="comment-replies"><div id="c5459629773394903454-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5459629773394903454-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c7920148874342467137"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622184682458#c7920148874342467137">27 May 2021 at 23:51</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7920148874342467137">Delete</a></span></span></div><div class="comment-replies"><div id="c7920148874342467137-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7920148874342467137-ra" class="thread-chrome thread-expanded"><div></div><div id="c7920148874342467137-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7920148874342467137">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7920148874342467137-ce"></div></li></div><div id="c5459629773394903454-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5459629773394903454">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5459629773394903454-ce"></div></li><li class="comment" id="c6374669147316193451"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/12470149689697208623" rel="nofollow">Ahmad Susanto</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622077673775#c6374669147316193451">26 May 2021 at 18:07</a></span></div><p class="comment-content">thanks</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="6374669147316193451">Reply</a><span class="item-control blog-admin blog-admin pid-866793561"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6374669147316193451">Delete</a></span></span></div><div class="comment-replies"><div id="c6374669147316193451-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6374669147316193451-ra" class="thread-chrome thread-expanded"><div></div><div id="c6374669147316193451-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6374669147316193451">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6374669147316193451-ce"></div></li><li class="comment" id="c57630567793457959"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/14683741173498842280" rel="nofollow">TeeBug777</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622104140431#c57630567793457959">27 May 2021 at 01:29</a></span></div><p class="comment-content">I want this code</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="57630567793457959">Reply</a><span class="item-control blog-admin blog-admin pid-503915994"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=57630567793457959">Delete</a></span></span></div><div class="comment-replies"><div id="c57630567793457959-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c57630567793457959-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c2889139326055677616"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622184748534#c2889139326055677616">27 May 2021 at 23:52</a></span></div><p class="comment-content">Please share your email address under this comment box, then we will send you source code file on your email address.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2889139326055677616">Delete</a></span></span></div><div class="comment-replies"><div id="c2889139326055677616-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2889139326055677616-ra" class="thread-chrome thread-expanded"><div></div><div id="c2889139326055677616-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2889139326055677616">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2889139326055677616-ce"></div></li></div><div id="c57630567793457959-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="57630567793457959">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c57630567793457959-ce"></div></li><li class="comment" id="c7349777283078893259"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/00565453837323798864" rel="nofollow">Sandeep</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622106517843#c7349777283078893259">27 May 2021 at 02:08</a></span></div><p class="comment-content">Great sir</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="7349777283078893259">Reply</a><span class="item-control blog-admin blog-admin pid-1661728935"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7349777283078893259">Delete</a></span></span></div><div class="comment-replies"><div id="c7349777283078893259-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7349777283078893259-ra" class="thread-chrome thread-expanded"><div></div><div id="c7349777283078893259-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7349777283078893259">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7349777283078893259-ce"></div></li><li class="comment" id="c5060908018228420469"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/00565453837323798864" rel="nofollow">Sandeep</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622115377674#c5060908018228420469">27 May 2021 at 04:36</a></span></div><p class="comment-content">sandeepsingh@pau.edu</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5060908018228420469">Reply</a><span class="item-control blog-admin blog-admin pid-1661728935"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5060908018228420469">Delete</a></span></span></div><div class="comment-replies"><div id="c5060908018228420469-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5060908018228420469-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c1393415288221688660"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622184701882#c1393415288221688660">27 May 2021 at 23:51</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1393415288221688660">Delete</a></span></span></div><div class="comment-replies"><div id="c1393415288221688660-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1393415288221688660-ra" class="thread-chrome thread-expanded"><div></div><div id="c1393415288221688660-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1393415288221688660">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1393415288221688660-ce"></div></li></div><div id="c5060908018228420469-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5060908018228420469">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5060908018228420469-ce"></div></li><li class="comment" id="c5804893033731400082"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/04521900457325844703" rel="nofollow">Leo</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622119374773#c5804893033731400082">27 May 2021 at 05:42</a></span></div><p class="comment-content">Nice x 2</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5804893033731400082">Reply</a><span class="item-control blog-admin blog-admin pid-2113442001"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5804893033731400082">Delete</a></span></span></div><div class="comment-replies"><div id="c5804893033731400082-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5804893033731400082-ra" class="thread-chrome thread-expanded"><div></div><div id="c5804893033731400082-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5804893033731400082">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5804893033731400082-ce"></div></li><li class="comment" id="c1190625325871835355"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/13415159650819005863" rel="nofollow">manoel</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622141679859#c1190625325871835355">27 May 2021 at 11:54</a></span></div><p class="comment-content">show...</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="1190625325871835355">Reply</a><span class="item-control blog-admin blog-admin pid-590946032"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1190625325871835355">Delete</a></span></span></div><div class="comment-replies"><div id="c1190625325871835355-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1190625325871835355-ra" class="thread-chrome thread-expanded"><div></div><div id="c1190625325871835355-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1190625325871835355">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1190625325871835355-ce"></div></li><li class="comment" id="c582171323793328827"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/16351386575806272973" rel="nofollow">SenseiGrifts</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622163767242#c582171323793328827">27 May 2021 at 18:02</a></span></div><p class="comment-content">Awesome </p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="582171323793328827">Reply</a><span class="item-control blog-admin blog-admin pid-116596549"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=582171323793328827">Delete</a></span></span></div><div class="comment-replies"><div id="c582171323793328827-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c582171323793328827-ra" class="thread-chrome thread-expanded"><div></div><div id="c582171323793328827-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="582171323793328827">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c582171323793328827-ce"></div></li><li class="comment" id="c7208948411547600895"><div class="avatar-image-container"><img src="//4.bp.blogspot.com/-FpT2k_BrsEU/W8zu8w0SQdI/AAAAAAAAB8M/szkqlPl54gkLgwmItJVFbR8dx2pU-o_zgCK4BGAYYCw/s35/kirpilmis-ben-1.jpg" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03518473897841119926" rel="nofollow">Emir Şiriner</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622183531927#c7208948411547600895">27 May 2021 at 23:32</a></span></div><p class="comment-content">emirsiriner1@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="7208948411547600895">Reply</a><span class="item-control blog-admin blog-admin pid-328495751"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7208948411547600895">Delete</a></span></span></div><div class="comment-replies"><div id="c7208948411547600895-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7208948411547600895-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c1236450321284743367"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622186355849#c1236450321284743367">28 May 2021 at 00:19</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1236450321284743367">Delete</a></span></span></div><div class="comment-replies"><div id="c1236450321284743367-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1236450321284743367-ra" class="thread-chrome thread-expanded"><div></div><div id="c1236450321284743367-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1236450321284743367">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1236450321284743367-ce"></div></li></div><div id="c7208948411547600895-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7208948411547600895">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7208948411547600895-ce"></div></li><li class="comment" id="c5376274795326367720"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/16351386575806272973" rel="nofollow">SenseiGrifts</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622185102751#c5376274795326367720">27 May 2021 at 23:58</a></span></div><p class="comment-content">Nice</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5376274795326367720">Reply</a><span class="item-control blog-admin blog-admin pid-116596549"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5376274795326367720">Delete</a></span></span></div><div class="comment-replies"><div id="c5376274795326367720-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5376274795326367720-ra" class="thread-chrome thread-expanded"><div></div><div id="c5376274795326367720-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5376274795326367720">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5376274795326367720-ce"></div></li><li class="comment" id="c8521305900613069046"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03914941774987249077" rel="nofollow">Sheheryar Tanveer</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622193255266#c8521305900613069046">28 May 2021 at 02:14</a></span></div><p class="comment-content">shaheryarhasanalvi@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="8521305900613069046">Reply</a><span class="item-control blog-admin blog-admin pid-1033704241"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8521305900613069046">Delete</a></span></span></div><div class="comment-replies"><div id="c8521305900613069046-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8521305900613069046-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c6337127844016033829"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622198434643#c6337127844016033829">28 May 2021 at 03:40</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6337127844016033829">Delete</a></span></span></div><div class="comment-replies"><div id="c6337127844016033829-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6337127844016033829-ra" class="thread-chrome thread-expanded"><div></div><div id="c6337127844016033829-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6337127844016033829">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6337127844016033829-ce"></div></li><li class="comment" id="c2369552396146110605"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03914941774987249077" rel="nofollow">Sheheryar Tanveer</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622214189386#c2369552396146110605">28 May 2021 at 08:03</a></span></div><p class="comment-content">Yes, I received it, thank you very much</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-1033704241"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2369552396146110605">Delete</a></span></span></div><div class="comment-replies"><div id="c2369552396146110605-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2369552396146110605-ra" class="thread-chrome thread-expanded"><div></div><div id="c2369552396146110605-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2369552396146110605">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2369552396146110605-ce"></div></li></div><div id="c8521305900613069046-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8521305900613069046">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8521305900613069046-ce"></div></li><li class="comment" id="c3917996138301305075"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/09832269891575207793" rel="nofollow">redirection to offical</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622194880413#c3917996138301305075">28 May 2021 at 02:41</a></span></div><p class="comment-content">hawemiyassine1@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="3917996138301305075">Reply</a><span class="item-control blog-admin blog-admin pid-822269395"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3917996138301305075">Delete</a></span></span></div><div class="comment-replies"><div id="c3917996138301305075-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3917996138301305075-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c4099814492498296568"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622198449247#c4099814492498296568">28 May 2021 at 03:40</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4099814492498296568">Delete</a></span></span></div><div class="comment-replies"><div id="c4099814492498296568-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4099814492498296568-ra" class="thread-chrome thread-expanded"><div></div><div id="c4099814492498296568-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4099814492498296568">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4099814492498296568-ce"></div></li></div><div id="c3917996138301305075-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3917996138301305075">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3917996138301305075-ce"></div></li><li class="comment" id="c3453766444329720886"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/04386732301994388834" rel="nofollow">DarkSite</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622200066103#c3453766444329720886">28 May 2021 at 04:07</a></span></div><p class="comment-content">hackersranch@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="3453766444329720886">Reply</a><span class="item-control blog-admin blog-admin pid-900757689"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3453766444329720886">Delete</a></span></span></div><div class="comment-replies"><div id="c3453766444329720886-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3453766444329720886-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c6604149237615447780"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622274176865#c6604149237615447780">29 May 2021 at 00:42</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6604149237615447780">Delete</a></span></span></div><div class="comment-replies"><div id="c6604149237615447780-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6604149237615447780-ra" class="thread-chrome thread-expanded"><div></div><div id="c6604149237615447780-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6604149237615447780">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6604149237615447780-ce"></div></li></div><div id="c3453766444329720886-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3453766444329720886">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3453766444329720886-ce"></div></li><li class="comment" id="c987637115738368728"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/16073176374080176860" rel="nofollow">Jonny</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622201939053#c987637115738368728">28 May 2021 at 04:38</a></span></div><p class="comment-content">jonnymunnik@hotmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="987637115738368728">Reply</a><span class="item-control blog-admin blog-admin pid-1406303949"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=987637115738368728">Delete</a></span></span></div><div class="comment-replies"><div id="c987637115738368728-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c987637115738368728-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c5568412110532039157"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622274189617#c5568412110532039157">29 May 2021 at 00:43</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5568412110532039157">Delete</a></span></span></div><div class="comment-replies"><div id="c5568412110532039157-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5568412110532039157-ra" class="thread-chrome thread-expanded"><div></div><div id="c5568412110532039157-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5568412110532039157">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5568412110532039157-ce"></div></li></div><div id="c987637115738368728-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="987637115738368728">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c987637115738368728-ce"></div></li><li class="comment" id="c4895092816643909505"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/00276267658150834254" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622213970029#c4895092816643909505">28 May 2021 at 07:59</a></span></div><p class="comment-content">jobtask90@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="4895092816643909505">Reply</a><span class="item-control blog-admin blog-admin pid-1744969710"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4895092816643909505">Delete</a></span></span></div><div class="comment-replies"><div id="c4895092816643909505-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4895092816643909505-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c3307697598877715413"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622274202137#c3307697598877715413">29 May 2021 at 00:43</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3307697598877715413">Delete</a></span></span></div><div class="comment-replies"><div id="c3307697598877715413-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3307697598877715413-ra" class="thread-chrome thread-expanded"><div></div><div id="c3307697598877715413-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3307697598877715413">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3307697598877715413-ce"></div></li></div><div id="c4895092816643909505-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4895092816643909505">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4895092816643909505-ce"></div></li><li class="comment" id="c6219014744292266655"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/10847417542576116954" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622237836821#c6219014744292266655">28 May 2021 at 14:37</a></span></div><p class="comment-content">Very nice and very usefull... Thanks for share.<br><br></p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="6219014744292266655">Reply</a><span class="item-control blog-admin blog-admin pid-1839528205"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6219014744292266655">Delete</a></span></span></div><div class="comment-replies"><div id="c6219014744292266655-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6219014744292266655-ra" class="thread-chrome thread-expanded"><div></div><div id="c6219014744292266655-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6219014744292266655">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6219014744292266655-ce"></div></li><li class="comment" id="c8682989939061833192"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/10847417542576116954" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622237872319#c8682989939061833192">28 May 2021 at 14:37</a></span></div><p class="comment-content">mymohammad24@gmail.com<br><br></p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="8682989939061833192">Reply</a><span class="item-control blog-admin blog-admin pid-1839528205"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8682989939061833192">Delete</a></span></span></div><div class="comment-replies"><div id="c8682989939061833192-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8682989939061833192-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c24356488229898329"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622274215626#c24356488229898329">29 May 2021 at 00:43</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=24356488229898329">Delete</a></span></span></div><div class="comment-replies"><div id="c24356488229898329-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c24356488229898329-ra" class="thread-chrome thread-expanded"><div></div><div id="c24356488229898329-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="24356488229898329">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c24356488229898329-ce"></div></li></div><div id="c8682989939061833192-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8682989939061833192">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8682989939061833192-ce"></div></li><li class="comment" id="c937682539440781005"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/12011305786329796894" rel="nofollow">elmouhawes</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622245043375#c937682539440781005">28 May 2021 at 16:37</a></span></div><p class="comment-content">Good Job man</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="937682539440781005">Reply</a><span class="item-control blog-admin blog-admin pid-1150455101"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=937682539440781005">Delete</a></span></span></div><div class="comment-replies"><div id="c937682539440781005-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c937682539440781005-ra" class="thread-chrome thread-expanded"><div></div><div id="c937682539440781005-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="937682539440781005">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c937682539440781005-ce"></div></li><li class="comment" id="c7333360469211411451"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/00943998371781900189" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622266816127#c7333360469211411451">28 May 2021 at 22:40</a></span></div><p class="comment-content">Really useful and better</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="7333360469211411451">Reply</a><span class="item-control blog-admin blog-admin pid-2042938349"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7333360469211411451">Delete</a></span></span></div><div class="comment-replies"><div id="c7333360469211411451-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7333360469211411451-ra" class="thread-chrome thread-expanded"><div></div><div id="c7333360469211411451-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7333360469211411451">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7333360469211411451-ce"></div></li><li class="comment" id="c206819089591054191"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/00943998371781900189" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622266873414#c206819089591054191">28 May 2021 at 22:41</a></span></div><p class="comment-content">itsignaturelk2@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="206819089591054191">Reply</a><span class="item-control blog-admin blog-admin pid-2042938349"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=206819089591054191">Delete</a></span></span></div><div class="comment-replies"><div id="c206819089591054191-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c206819089591054191-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c1175909855209526131"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622274230262#c1175909855209526131">29 May 2021 at 00:43</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1175909855209526131">Delete</a></span></span></div><div class="comment-replies"><div id="c1175909855209526131-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1175909855209526131-ra" class="thread-chrome thread-expanded"><div></div><div id="c1175909855209526131-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1175909855209526131">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1175909855209526131-ce"></div></li></div><div id="c206819089591054191-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="206819089591054191">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c206819089591054191-ce"></div></li><li class="comment" id="c8617531467584978780"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/16699653473337447252" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622269257282#c8617531467584978780">28 May 2021 at 23:20</a></span></div><p class="comment-content">Psr.pradeeprathore@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="8617531467584978780">Reply</a><span class="item-control blog-admin blog-admin pid-17393230"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8617531467584978780">Delete</a></span></span></div><div class="comment-replies"><div id="c8617531467584978780-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8617531467584978780-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c3750567256309469555"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622274242362#c3750567256309469555">29 May 2021 at 00:44</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3750567256309469555">Delete</a></span></span></div><div class="comment-replies"><div id="c3750567256309469555-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3750567256309469555-ra" class="thread-chrome thread-expanded"><div></div><div id="c3750567256309469555-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3750567256309469555">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3750567256309469555-ce"></div></li><li class="comment" id="c862661489581799009"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/08767390902201019289" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622355485238#c862661489581799009">29 May 2021 at 23:18</a></span></div><p class="comment-content">alfredudumaudo2020@gmail.com<br>Please I will need the source code</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-1613093504"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=862661489581799009">Delete</a></span></span></div><div class="comment-replies"><div id="c862661489581799009-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c862661489581799009-ra" class="thread-chrome thread-expanded"><div></div><div id="c862661489581799009-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="862661489581799009">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c862661489581799009-ce"></div></li><li class="comment" id="c5764883399346307645"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622453475611#c5764883399346307645">31 May 2021 at 02:31</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5764883399346307645">Delete</a></span></span></div><div class="comment-replies"><div id="c5764883399346307645-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5764883399346307645-ra" class="thread-chrome thread-expanded"><div></div><div id="c5764883399346307645-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5764883399346307645">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5764883399346307645-ce"></div></li></div><div id="c8617531467584978780-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8617531467584978780">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8617531467584978780-ce"></div></li><li class="comment" id="c2809381238678576340"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/02828507543597418174" rel="nofollow">benjamin</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622285601916#c2809381238678576340">29 May 2021 at 03:53</a></span></div><p class="comment-content">mbenjam10@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="2809381238678576340">Reply</a><span class="item-control blog-admin blog-admin pid-3771480"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2809381238678576340">Delete</a></span></span></div><div class="comment-replies"><div id="c2809381238678576340-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2809381238678576340-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c6813467912317007705"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622453498089#c6813467912317007705">31 May 2021 at 02:31</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6813467912317007705">Delete</a></span></span></div><div class="comment-replies"><div id="c6813467912317007705-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6813467912317007705-ra" class="thread-chrome thread-expanded"><div></div><div id="c6813467912317007705-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6813467912317007705">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6813467912317007705-ce"></div></li></div><div id="c2809381238678576340-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2809381238678576340">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2809381238678576340-ce"></div></li><li class="comment" id="c8283646943253205131"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/14188118393617417825" rel="nofollow">Lathiya harmik</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622296492308#c8283646943253205131">29 May 2021 at 06:54</a></span></div><p class="comment-content">lathiyaharmik60@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="8283646943253205131">Reply</a><span class="item-control blog-admin blog-admin pid-1627367688"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8283646943253205131">Delete</a></span></span></div><div class="comment-replies"><div id="c8283646943253205131-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8283646943253205131-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c4905212607515971515"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622453513981#c4905212607515971515">31 May 2021 at 02:31</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4905212607515971515">Delete</a></span></span></div><div class="comment-replies"><div id="c4905212607515971515-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4905212607515971515-ra" class="thread-chrome thread-expanded"><div></div><div id="c4905212607515971515-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4905212607515971515">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4905212607515971515-ce"></div></li></div><div id="c8283646943253205131-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8283646943253205131">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8283646943253205131-ce"></div></li><li class="comment" id="c1170565519446620435"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/00412801761968767655" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622299800024#c1170565519446620435">29 May 2021 at 07:50</a></span></div><p class="comment-content">jeanamariekouekam110@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="1170565519446620435">Reply</a><span class="item-control blog-admin blog-admin pid-1110469650"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1170565519446620435">Delete</a></span></span></div><div class="comment-replies"><div id="c1170565519446620435-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1170565519446620435-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c414755535364056867"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622453564952#c414755535364056867">31 May 2021 at 02:32</a></span></div><p class="comment-content">We have try to send source code to this email, but we have received address not found error, so if you want source code, please provide other email address.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=414755535364056867">Delete</a></span></span></div><div class="comment-replies"><div id="c414755535364056867-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c414755535364056867-ra" class="thread-chrome thread-expanded"><div></div><div id="c414755535364056867-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="414755535364056867">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c414755535364056867-ce"></div></li></div><div id="c1170565519446620435-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1170565519446620435">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1170565519446620435-ce"></div></li><li class="comment" id="c865159774781620996"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/01323936340482454010" rel="nofollow">Rakshit</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622302096386#c865159774781620996">29 May 2021 at 08:28</a></span></div><p class="comment-content">54966.rakshit@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="865159774781620996">Reply</a><span class="item-control blog-admin blog-admin pid-1039378484"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=865159774781620996">Delete</a></span></span></div><div class="comment-replies"><div id="c865159774781620996-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c865159774781620996-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c7180585163786238846"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622453584090#c7180585163786238846">31 May 2021 at 02:33</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7180585163786238846">Delete</a></span></span></div><div class="comment-replies"><div id="c7180585163786238846-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7180585163786238846-ra" class="thread-chrome thread-expanded"><div></div><div id="c7180585163786238846-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7180585163786238846">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7180585163786238846-ce"></div></li></div><div id="c865159774781620996-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="865159774781620996">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c865159774781620996-ce"></div></li><li class="comment" id="c2050363400335933362"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/14420280350489486578" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622321397158#c2050363400335933362">29 May 2021 at 13:49</a></span></div><p class="comment-content">bavlymousa22@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="2050363400335933362">Reply</a><span class="item-control blog-admin blog-admin pid-1067235547"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2050363400335933362">Delete</a></span></span></div><div class="comment-replies"><div id="c2050363400335933362-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2050363400335933362-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c1269057023860630914"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622453598016#c1269057023860630914">31 May 2021 at 02:33</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1269057023860630914">Delete</a></span></span></div><div class="comment-replies"><div id="c1269057023860630914-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1269057023860630914-ra" class="thread-chrome thread-expanded"><div></div><div id="c1269057023860630914-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1269057023860630914">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1269057023860630914-ce"></div></li></div><div id="c2050363400335933362-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2050363400335933362">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2050363400335933362-ce"></div></li><li class="comment" id="c6179296414886184902"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/08089052044439011198" rel="nofollow">Codepacks</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622435409591#c6179296414886184902">30 May 2021 at 21:30</a></span></div><p class="comment-content">Can you send health source codes to codepacks@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="6179296414886184902">Reply</a><span class="item-control blog-admin blog-admin pid-2001522237"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6179296414886184902">Delete</a></span></span></div><div class="comment-replies"><div id="c6179296414886184902-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6179296414886184902-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c4067618334098905315"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622453610787#c4067618334098905315">31 May 2021 at 02:33</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4067618334098905315">Delete</a></span></span></div><div class="comment-replies"><div id="c4067618334098905315-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4067618334098905315-ra" class="thread-chrome thread-expanded"><div></div><div id="c4067618334098905315-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4067618334098905315">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4067618334098905315-ce"></div></li></div><div id="c6179296414886184902-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6179296414886184902">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6179296414886184902-ce"></div></li><li class="comment" id="c5364009629526437386"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/17957358959003670916" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622475135615#c5364009629526437386">31 May 2021 at 08:32</a></span></div><p class="comment-content">thanks</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5364009629526437386">Reply</a><span class="item-control blog-admin blog-admin pid-1471048758"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5364009629526437386">Delete</a></span></span></div><div class="comment-replies"><div id="c5364009629526437386-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5364009629526437386-ra" class="thread-chrome thread-expanded"><div></div><div id="c5364009629526437386-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5364009629526437386">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5364009629526437386-ce"></div></li><li class="comment" id="c822261595972880804"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/17957358959003670916" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622475953824#c822261595972880804">31 May 2021 at 08:45</a></span></div><p class="comment-content">manisha199709july@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="822261595972880804">Reply</a><span class="item-control blog-admin blog-admin pid-1471048758"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=822261595972880804">Delete</a></span></span></div><div class="comment-replies"><div id="c822261595972880804-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c822261595972880804-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c908142976145642480"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622537057793#c908142976145642480">1 June 2021 at 01:44</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=908142976145642480">Delete</a></span></span></div><div class="comment-replies"><div id="c908142976145642480-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c908142976145642480-ra" class="thread-chrome thread-expanded"><div></div><div id="c908142976145642480-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="908142976145642480">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c908142976145642480-ce"></div></li></div><div id="c822261595972880804-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="822261595972880804">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c822261595972880804-ce"></div></li><li class="comment" id="c5084639084988431642"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/12223763596932248394" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622497318908#c5084639084988431642">31 May 2021 at 14:41</a></span></div><p class="comment-content">thanks very much weblesson!<br><br>would you like to make an e-commerce based recommandation system in php?<br>thank you for your answer.</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5084639084988431642">Reply</a><span class="item-control blog-admin blog-admin pid-524813501"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5084639084988431642">Delete</a></span></span></div><div class="comment-replies"><div id="c5084639084988431642-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5084639084988431642-ra" class="thread-chrome thread-expanded"><div></div><div id="c5084639084988431642-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5084639084988431642">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5084639084988431642-ce"></div></li><li class="comment" id="c7111602026795686920"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/14076866737394100134" rel="nofollow">Victoire</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622549358209#c7111602026795686920">1 June 2021 at 05:09</a></span></div><p class="comment-content">Thank you following up but I have not received the source code of this project.</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="7111602026795686920">Reply</a><span class="item-control blog-admin blog-admin pid-1767341139"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7111602026795686920">Delete</a></span></span></div><div class="comment-replies"><div id="c7111602026795686920-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7111602026795686920-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c2820901716349372212"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622714171912#c2820901716349372212">3 June 2021 at 02:56</a></span></div><p class="comment-content">Please share your email address, so we can send you source code file at your email address.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2820901716349372212">Delete</a></span></span></div><div class="comment-replies"><div id="c2820901716349372212-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2820901716349372212-ra" class="thread-chrome thread-expanded"><div></div><div id="c2820901716349372212-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2820901716349372212">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2820901716349372212-ce"></div></li></div><div id="c7111602026795686920-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7111602026795686920">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7111602026795686920-ce"></div></li><li class="comment" id="c5759780106202260970"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/07184557125784063756" rel="nofollow">umair</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622577474786#c5759780106202260970">1 June 2021 at 12:57</a></span></div><p class="comment-content">u6zaki7@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5759780106202260970">Reply</a><span class="item-control blog-admin blog-admin pid-1224204397"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5759780106202260970">Delete</a></span></span></div><div class="comment-replies"><div id="c5759780106202260970-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5759780106202260970-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c9179677844021556200"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622714609312#c9179677844021556200">3 June 2021 at 03:03</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=9179677844021556200">Delete</a></span></span></div><div class="comment-replies"><div id="c9179677844021556200-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c9179677844021556200-ra" class="thread-chrome thread-expanded"><div></div><div id="c9179677844021556200-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="9179677844021556200">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c9179677844021556200-ce"></div></li></div><div id="c5759780106202260970-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5759780106202260970">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5759780106202260970-ce"></div></li><li class="comment" id="c829297759310983237"><div class="avatar-image-container"><img src="//2.bp.blogspot.com/_ydrg8HUkxtk/TTaVBMDJXYI/AAAAAAAAAAk/C86wlYoZq2I/S45-s35/pc%25252Bman.jpg" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/08410404530927997294" rel="nofollow">ezrasoft</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622617295973#c829297759310983237">2 June 2021 at 00:01</a></span></div><p class="comment-content">mezraq@gmail.om</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="829297759310983237">Reply</a><span class="item-control blog-admin blog-admin pid-1935218938"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=829297759310983237">Delete</a></span></span></div><div class="comment-replies"><div id="c829297759310983237-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c829297759310983237-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c4746655779795862528"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622714593249#c4746655779795862528">3 June 2021 at 03:03</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4746655779795862528">Delete</a></span></span></div><div class="comment-replies"><div id="c4746655779795862528-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4746655779795862528-ra" class="thread-chrome thread-expanded"><div></div><div id="c4746655779795862528-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4746655779795862528">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4746655779795862528-ce"></div></li></div><div id="c829297759310983237-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="829297759310983237">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c829297759310983237-ce"></div></li><li class="comment" id="c41339061721606607"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/12300935787348281833" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622618842886#c41339061721606607">2 June 2021 at 00:27</a></span></div><p class="comment-content">danishjalal88@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="41339061721606607">Reply</a><span class="item-control blog-admin blog-admin pid-396764724"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=41339061721606607">Delete</a></span></span></div><div class="comment-replies"><div id="c41339061721606607-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c41339061721606607-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c3646881992721132388"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622714575600#c3646881992721132388">3 June 2021 at 03:02</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3646881992721132388">Delete</a></span></span></div><div class="comment-replies"><div id="c3646881992721132388-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3646881992721132388-ra" class="thread-chrome thread-expanded"><div></div><div id="c3646881992721132388-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3646881992721132388">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3646881992721132388-ce"></div></li></div><div id="c41339061721606607-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="41339061721606607">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c41339061721606607-ce"></div></li><li class="comment" id="c3609427816732772432"><div class="avatar-image-container"><img src="//3.bp.blogspot.com/-01yQmcCTAj8/WcxQ9OwwPyI/AAAAAAAAAlQ/LnXDZIx_1y8f08maYYwURgsd4aJ753NsgCK4BGAYYCw/s35/74dbde263645a830409d09904ce548aa--iphone-backgrounds-wallpaper-backgrounds.jpg" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/04493607108673990470" rel="nofollow">Sya...Smiles^_^</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622702073934#c3609427816732772432">2 June 2021 at 23:34</a></span></div><p class="comment-content">nice</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="3609427816732772432">Reply</a><span class="item-control blog-admin blog-admin pid-502906790"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3609427816732772432">Delete</a></span></span></div><div class="comment-replies"><div id="c3609427816732772432-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3609427816732772432-ra" class="thread-chrome thread-expanded"><div></div><div id="c3609427816732772432-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3609427816732772432">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3609427816732772432-ce"></div></li><li class="comment" id="c5368242427864097995"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03563967899152716331" rel="nofollow">Balogun Abdulquddus</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622713596517#c5368242427864097995">3 June 2021 at 02:46</a></span></div><p class="comment-content">babusunnah@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5368242427864097995">Reply</a><span class="item-control blog-admin blog-admin pid-1527938232"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5368242427864097995">Delete</a></span></span></div><div class="comment-replies"><div id="c5368242427864097995-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5368242427864097995-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c2994607306510711798"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622714559312#c2994607306510711798">3 June 2021 at 03:02</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2994607306510711798">Delete</a></span></span></div><div class="comment-replies"><div id="c2994607306510711798-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2994607306510711798-ra" class="thread-chrome thread-expanded"><div></div><div id="c2994607306510711798-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2994607306510711798">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2994607306510711798-ce"></div></li></div><div id="c5368242427864097995-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5368242427864097995">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5368242427864097995-ce"></div></li><li class="comment" id="c2181354557000049815"><div class="avatar-image-container"><img src="//4.bp.blogspot.com/-FpT2k_BrsEU/W8zu8w0SQdI/AAAAAAAAB8M/szkqlPl54gkLgwmItJVFbR8dx2pU-o_zgCK4BGAYYCw/s35/kirpilmis-ben-1.jpg" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03518473897841119926" rel="nofollow">Emir Şiriner</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622718055677#c2181354557000049815">3 June 2021 at 04:00</a></span></div><p class="comment-content">very nice</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="2181354557000049815">Reply</a><span class="item-control blog-admin blog-admin pid-328495751"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2181354557000049815">Delete</a></span></span></div><div class="comment-replies"><div id="c2181354557000049815-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2181354557000049815-ra" class="thread-chrome thread-expanded"><div></div><div id="c2181354557000049815-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2181354557000049815">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2181354557000049815-ce"></div></li><li class="comment" id="c1883251589491554847"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/14390651904436994518" rel="nofollow">Zictech-ng.com</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622721840965#c1883251589491554847">3 June 2021 at 05:04</a></span></div><p class="comment-content">Thanks</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="1883251589491554847">Reply</a><span class="item-control blog-admin blog-admin pid-400283332"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1883251589491554847">Delete</a></span></span></div><div class="comment-replies"><div id="c1883251589491554847-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1883251589491554847-ra" class="thread-chrome thread-expanded"><div></div><div id="c1883251589491554847-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1883251589491554847">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1883251589491554847-ce"></div></li><li class="comment" id="c364643604546462905"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/14390651904436994518" rel="nofollow">Zictech-ng.com</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622721901348#c364643604546462905">3 June 2021 at 05:05</a></span></div><p class="comment-content">Nice job. abelken99@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="364643604546462905">Reply</a><span class="item-control blog-admin blog-admin pid-400283332"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=364643604546462905">Delete</a></span></span></div><div class="comment-replies"><div id="c364643604546462905-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c364643604546462905-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c3692129086715265071"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622805384271#c3692129086715265071">4 June 2021 at 04:16</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3692129086715265071">Delete</a></span></span></div><div class="comment-replies"><div id="c3692129086715265071-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3692129086715265071-ra" class="thread-chrome thread-expanded"><div></div><div id="c3692129086715265071-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3692129086715265071">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3692129086715265071-ce"></div></li></div><div id="c364643604546462905-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="364643604546462905">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c364643604546462905-ce"></div></li><li class="comment" id="c7111425606676641177"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/14966584332111082864" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622728391228#c7111425606676641177">3 June 2021 at 06:53</a></span></div><p class="comment-content">asafy62@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="7111425606676641177">Reply</a><span class="item-control blog-admin blog-admin pid-1150253165"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7111425606676641177">Delete</a></span></span></div><div class="comment-replies"><div id="c7111425606676641177-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7111425606676641177-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c8769960065658780987"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622805399539#c8769960065658780987">4 June 2021 at 04:16</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8769960065658780987">Delete</a></span></span></div><div class="comment-replies"><div id="c8769960065658780987-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8769960065658780987-ra" class="thread-chrome thread-expanded"><div></div><div id="c8769960065658780987-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8769960065658780987">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8769960065658780987-ce"></div></li></div><div id="c7111425606676641177-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7111425606676641177">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7111425606676641177-ce"></div></li><li class="comment" id="c1582150622840417811"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/06481994095666804969" rel="nofollow">Sophia</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622775477743#c1582150622840417811">3 June 2021 at 19:57</a></span></div><p class="comment-content">thesophiasmith55@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="1582150622840417811">Reply</a><span class="item-control blog-admin blog-admin pid-1187872087"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1582150622840417811">Delete</a></span></span></div><div class="comment-replies"><div id="c1582150622840417811-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1582150622840417811-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c6145539759729153142"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622805416382#c6145539759729153142">4 June 2021 at 04:16</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6145539759729153142">Delete</a></span></span></div><div class="comment-replies"><div id="c6145539759729153142-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6145539759729153142-ra" class="thread-chrome thread-expanded"><div></div><div id="c6145539759729153142-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6145539759729153142">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6145539759729153142-ce"></div></li></div><div id="c1582150622840417811-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1582150622840417811">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1582150622840417811-ce"></div></li><li class="comment" id="c9037862854652944563"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/10871738949650468963" rel="nofollow">como</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622786860500#c9037862854652944563">3 June 2021 at 23:07</a></span></div><p class="comment-content">dealcareer2050@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="9037862854652944563">Reply</a><span class="item-control blog-admin blog-admin pid-2102029605"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=9037862854652944563">Delete</a></span></span></div><div class="comment-replies"><div id="c9037862854652944563-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c9037862854652944563-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c2558060096118242964"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622805429890#c2558060096118242964">4 June 2021 at 04:17</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2558060096118242964">Delete</a></span></span></div><div class="comment-replies"><div id="c2558060096118242964-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2558060096118242964-ra" class="thread-chrome thread-expanded"><div></div><div id="c2558060096118242964-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2558060096118242964">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2558060096118242964-ce"></div></li></div><div id="c9037862854652944563-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="9037862854652944563">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c9037862854652944563-ce"></div></li><li class="comment" id="c6935028061091311873"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/07267501725930936352" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622795636526#c6935028061091311873">4 June 2021 at 01:33</a></span></div><p class="comment-content">dhruvi244210@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="6935028061091311873">Reply</a><span class="item-control blog-admin blog-admin pid-1379108"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6935028061091311873">Delete</a></span></span></div><div class="comment-replies"><div id="c6935028061091311873-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6935028061091311873-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c8011902451880956392"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622805445869#c8011902451880956392">4 June 2021 at 04:17</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8011902451880956392">Delete</a></span></span></div><div class="comment-replies"><div id="c8011902451880956392-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8011902451880956392-ra" class="thread-chrome thread-expanded"><div></div><div id="c8011902451880956392-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8011902451880956392">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8011902451880956392-ce"></div></li></div><div id="c6935028061091311873-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6935028061091311873">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6935028061091311873-ce"></div></li><li class="comment" id="c1299361631066604489"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/06756356939997808672" rel="nofollow">Ripon Sutradhar</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622801183535#c1299361631066604489">4 June 2021 at 03:06</a></span></div><p class="comment-content">Ripondhar94@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="1299361631066604489">Reply</a><span class="item-control blog-admin blog-admin pid-1517457808"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1299361631066604489">Delete</a></span></span></div><div class="comment-replies"><div id="c1299361631066604489-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1299361631066604489-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c6682256227565187672"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622805458771#c6682256227565187672">4 June 2021 at 04:17</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6682256227565187672">Delete</a></span></span></div><div class="comment-replies"><div id="c6682256227565187672-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6682256227565187672-ra" class="thread-chrome thread-expanded"><div></div><div id="c6682256227565187672-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6682256227565187672">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6682256227565187672-ce"></div></li></div><div id="c1299361631066604489-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1299361631066604489">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1299361631066604489-ce"></div></li><li class="comment" id="c5169427068233874970"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/08569324445348795022" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622804922182#c5169427068233874970">4 June 2021 at 04:08</a></span></div><p class="comment-content">nice project</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5169427068233874970">Reply</a><span class="item-control blog-admin blog-admin pid-56147579"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5169427068233874970">Delete</a></span></span></div><div class="comment-replies"><div id="c5169427068233874970-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5169427068233874970-ra" class="thread-chrome thread-expanded"><div></div><div id="c5169427068233874970-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5169427068233874970">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5169427068233874970-ce"></div></li><li class="comment" id="c3161160103430565758"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/16784094549443227798" rel="nofollow">T.SHARANYA</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622902708839#c3161160103430565758">5 June 2021 at 07:18</a></span></div><p class="comment-content">thiyagarajahsugani@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="3161160103430565758">Reply</a><span class="item-control blog-admin blog-admin pid-1293989976"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3161160103430565758">Delete</a></span></span></div><div class="comment-replies"><div id="c3161160103430565758-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3161160103430565758-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c5929577212861116886"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623066861722#c5929577212861116886">7 June 2021 at 04:54</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5929577212861116886">Delete</a></span></span></div><div class="comment-replies"><div id="c5929577212861116886-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5929577212861116886-ra" class="thread-chrome thread-expanded"><div></div><div id="c5929577212861116886-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5929577212861116886">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5929577212861116886-ce"></div></li></div><div id="c3161160103430565758-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3161160103430565758">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3161160103430565758-ce"></div></li><li class="comment" id="c4661434645103729388"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/05228380785667239499" rel="nofollow">Shan</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622904612015#c4661434645103729388">5 June 2021 at 07:50</a></span></div><p class="comment-content">mshamry66@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="4661434645103729388">Reply</a><span class="item-control blog-admin blog-admin pid-1067998265"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4661434645103729388">Delete</a></span></span></div><div class="comment-replies"><div id="c4661434645103729388-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4661434645103729388-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c8788348104573026254"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623066841895#c8788348104573026254">7 June 2021 at 04:54</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8788348104573026254">Delete</a></span></span></div><div class="comment-replies"><div id="c8788348104573026254-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8788348104573026254-ra" class="thread-chrome thread-expanded"><div></div><div id="c8788348104573026254-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8788348104573026254">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8788348104573026254-ce"></div></li><li class="comment" id="c4714668053962088158"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/05228380785667239499" rel="nofollow">Shan</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623082985395#c4714668053962088158">7 June 2021 at 09:23</a></span></div><p class="comment-content">received.. Thanks &#10084;</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-1067998265"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4714668053962088158">Delete</a></span></span></div><div class="comment-replies"><div id="c4714668053962088158-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4714668053962088158-ra" class="thread-chrome thread-expanded"><div></div><div id="c4714668053962088158-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4714668053962088158">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4714668053962088158-ce"></div></li></div><div id="c4661434645103729388-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4661434645103729388">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4661434645103729388-ce"></div></li><li class="comment" id="c3826914463062352384"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/07658970474228571037" rel="nofollow">Kshyhoo</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622905217418#c3826914463062352384">5 June 2021 at 08:00</a></span></div><p class="comment-content">kshyhoo67@tlen.pl</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="3826914463062352384">Reply</a><span class="item-control blog-admin blog-admin pid-1072140950"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3826914463062352384">Delete</a></span></span></div><div class="comment-replies"><div id="c3826914463062352384-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3826914463062352384-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c3968352976237735436"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623066826968#c3968352976237735436">7 June 2021 at 04:53</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3968352976237735436">Delete</a></span></span></div><div class="comment-replies"><div id="c3968352976237735436-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3968352976237735436-ra" class="thread-chrome thread-expanded"><div></div><div id="c3968352976237735436-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3968352976237735436">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3968352976237735436-ce"></div></li></div><div id="c3826914463062352384-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3826914463062352384">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3826914463062352384-ce"></div></li><li class="comment" id="c4076928639548764638"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/12011305786329796894" rel="nofollow">elmouhawes</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622939596382#c4076928639548764638">5 June 2021 at 17:33</a></span></div><p class="comment-content">elmouhawes@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="4076928639548764638">Reply</a><span class="item-control blog-admin blog-admin pid-1150455101"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4076928639548764638">Delete</a></span></span></div><div class="comment-replies"><div id="c4076928639548764638-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4076928639548764638-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c3430119048796675499"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623066809764#c3430119048796675499">7 June 2021 at 04:53</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3430119048796675499">Delete</a></span></span></div><div class="comment-replies"><div id="c3430119048796675499-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3430119048796675499-ra" class="thread-chrome thread-expanded"><div></div><div id="c3430119048796675499-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3430119048796675499">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3430119048796675499-ce"></div></li></div><div id="c4076928639548764638-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4076928639548764638">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4076928639548764638-ce"></div></li><li class="comment" id="c5299640337803697863"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/01922854045475487631" rel="nofollow">Dany</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622967523649#c5299640337803697863">6 June 2021 at 01:18</a></span></div><p class="comment-content">dany.renta98@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5299640337803697863">Reply</a><span class="item-control blog-admin blog-admin pid-239952832"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5299640337803697863">Delete</a></span></span></div><div class="comment-replies"><div id="c5299640337803697863-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5299640337803697863-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c2851755843948273492"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623066793598#c2851755843948273492">7 June 2021 at 04:53</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2851755843948273492">Delete</a></span></span></div><div class="comment-replies"><div id="c2851755843948273492-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2851755843948273492-ra" class="thread-chrome thread-expanded"><div></div><div id="c2851755843948273492-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2851755843948273492">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2851755843948273492-ce"></div></li></div><div id="c5299640337803697863-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5299640337803697863">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5299640337803697863-ce"></div></li><li class="comment" id="c5577427458833978911"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/02418682378444365651" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622988034723#c5577427458833978911">6 June 2021 at 07:00</a></span></div><p class="comment-content">thiyagarajahsugani@gmail.com </p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5577427458833978911">Reply</a><span class="item-control blog-admin blog-admin pid-547005558"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5577427458833978911">Delete</a></span></span></div><div class="comment-replies"><div id="c5577427458833978911-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5577427458833978911-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c2646029594642176456"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623066773824#c2646029594642176456">7 June 2021 at 04:52</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2646029594642176456">Delete</a></span></span></div><div class="comment-replies"><div id="c2646029594642176456-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2646029594642176456-ra" class="thread-chrome thread-expanded"><div></div><div id="c2646029594642176456-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2646029594642176456">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2646029594642176456-ce"></div></li></div><div id="c5577427458833978911-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5577427458833978911">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5577427458833978911-ce"></div></li><li class="comment" id="c4572544989086201792"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/13706596317856440674" rel="nofollow">jayanth r</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1622998221068#c4572544989086201792">6 June 2021 at 09:50</a></span></div><p class="comment-content">jayanthrajdhani2000@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="4572544989086201792">Reply</a><span class="item-control blog-admin blog-admin pid-1895912442"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4572544989086201792">Delete</a></span></span></div><div class="comment-replies"><div id="c4572544989086201792-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4572544989086201792-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c633884594720461138"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623066750357#c633884594720461138">7 June 2021 at 04:52</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=633884594720461138">Delete</a></span></span></div><div class="comment-replies"><div id="c633884594720461138-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c633884594720461138-ra" class="thread-chrome thread-expanded"><div></div><div id="c633884594720461138-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="633884594720461138">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c633884594720461138-ce"></div></li></div><div id="c4572544989086201792-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4572544989086201792">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4572544989086201792-ce"></div></li><li class="comment" id="c8011195461829628025"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/16315978135992371936" rel="nofollow">Danillo Cesar</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623033496224#c8011195461829628025">6 June 2021 at 19:38</a></span></div><p class="comment-content">comerciozapp@gmail.com codigo</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="8011195461829628025">Reply</a><span class="item-control blog-admin blog-admin pid-937760352"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8011195461829628025">Delete</a></span></span></div><div class="comment-replies"><div id="c8011195461829628025-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8011195461829628025-ra" class="thread-chrome thread-expanded"><div></div><div id="c8011195461829628025-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8011195461829628025">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8011195461829628025-ce"></div></li><li class="comment" id="c2204990104716445833"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/16315978135992371936" rel="nofollow">Danillo Cesar</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623035495884#c2204990104716445833">6 June 2021 at 20:11</a></span></div><p class="comment-content">comerciozapp@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="2204990104716445833">Reply</a><span class="item-control blog-admin blog-admin pid-937760352"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2204990104716445833">Delete</a></span></span></div><div class="comment-replies"><div id="c2204990104716445833-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2204990104716445833-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c4286992601069369209"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623066732381#c4286992601069369209">7 June 2021 at 04:52</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4286992601069369209">Delete</a></span></span></div><div class="comment-replies"><div id="c4286992601069369209-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4286992601069369209-ra" class="thread-chrome thread-expanded"><div></div><div id="c4286992601069369209-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4286992601069369209">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4286992601069369209-ce"></div></li><li class="comment" id="c1508517462776509318"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/09565310700237162624" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623085364558#c1508517462776509318">7 June 2021 at 10:02</a></span></div><p class="comment-content">meriembouzar44@gmail.com<br></p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-467149877"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1508517462776509318">Delete</a></span></span></div><div class="comment-replies"><div id="c1508517462776509318-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1508517462776509318-ra" class="thread-chrome thread-expanded"><div></div><div id="c1508517462776509318-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1508517462776509318">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1508517462776509318-ce"></div></li><li class="comment" id="c4995179964032275592"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623144369421#c4995179964032275592">8 June 2021 at 02:26</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4995179964032275592">Delete</a></span></span></div><div class="comment-replies"><div id="c4995179964032275592-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4995179964032275592-ra" class="thread-chrome thread-expanded"><div></div><div id="c4995179964032275592-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4995179964032275592">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4995179964032275592-ce"></div></li></div><div id="c2204990104716445833-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2204990104716445833">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2204990104716445833-ce"></div></li><li class="comment" id="c1633099474796551332"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/13363801169312580505" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623071708983#c1633099474796551332">7 June 2021 at 06:15</a></span></div><p class="comment-content">arbazkhanpathan0348@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="1633099474796551332">Reply</a><span class="item-control blog-admin blog-admin pid-256814482"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1633099474796551332">Delete</a></span></span></div><div class="comment-replies"><div id="c1633099474796551332-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1633099474796551332-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c7104732645683294294"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623144383664#c7104732645683294294">8 June 2021 at 02:26</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7104732645683294294">Delete</a></span></span></div><div class="comment-replies"><div id="c7104732645683294294-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7104732645683294294-ra" class="thread-chrome thread-expanded"><div></div><div id="c7104732645683294294-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7104732645683294294">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7104732645683294294-ce"></div></li></div><div id="c1633099474796551332-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1633099474796551332">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1633099474796551332-ce"></div></li><li class="comment" id="c5562038031658080678"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/01045998000690697235" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623076864426#c5562038031658080678">7 June 2021 at 07:41</a></span></div><p class="comment-content">sssambolionlineclass@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5562038031658080678">Reply</a><span class="item-control blog-admin blog-admin pid-684102883"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5562038031658080678">Delete</a></span></span></div><div class="comment-replies"><div id="c5562038031658080678-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5562038031658080678-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c3989634436763704013"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623144401095#c3989634436763704013">8 June 2021 at 02:26</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3989634436763704013">Delete</a></span></span></div><div class="comment-replies"><div id="c3989634436763704013-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3989634436763704013-ra" class="thread-chrome thread-expanded"><div></div><div id="c3989634436763704013-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3989634436763704013">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3989634436763704013-ce"></div></li></div><div id="c5562038031658080678-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5562038031658080678">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5562038031658080678-ce"></div></li><li class="comment" id="c6825426570176495839"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/10232299066351066853" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623083329399#c6825426570176495839">7 June 2021 at 09:28</a></span></div><p class="comment-content">syriusblack74@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="6825426570176495839">Reply</a><span class="item-control blog-admin blog-admin pid-582477487"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6825426570176495839">Delete</a></span></span></div><div class="comment-replies"><div id="c6825426570176495839-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6825426570176495839-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c2494826848795289448"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623144415173#c2494826848795289448">8 June 2021 at 02:26</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2494826848795289448">Delete</a></span></span></div><div class="comment-replies"><div id="c2494826848795289448-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2494826848795289448-ra" class="thread-chrome thread-expanded"><div></div><div id="c2494826848795289448-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2494826848795289448">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2494826848795289448-ce"></div></li></div><div id="c6825426570176495839-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6825426570176495839">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6825426570176495839-ce"></div></li><li class="comment" id="c2339257347608866158"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/09565310700237162624" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623085250770#c2339257347608866158">7 June 2021 at 10:00</a></span></div><p class="comment-content">meriembouzar44@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="2339257347608866158">Reply</a><span class="item-control blog-admin blog-admin pid-467149877"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2339257347608866158">Delete</a></span></span></div><div class="comment-replies"><div id="c2339257347608866158-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2339257347608866158-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c1996127878885935210"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623144430810#c1996127878885935210">8 June 2021 at 02:27</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1996127878885935210">Delete</a></span></span></div><div class="comment-replies"><div id="c1996127878885935210-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1996127878885935210-ra" class="thread-chrome thread-expanded"><div></div><div id="c1996127878885935210-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1996127878885935210">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1996127878885935210-ce"></div></li></div><div id="c2339257347608866158-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2339257347608866158">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2339257347608866158-ce"></div></li><li class="comment" id="c4600363703696263827"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/10611976038727953189" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623219492153#c4600363703696263827">8 June 2021 at 23:18</a></span></div><p class="comment-content">artipatil25800@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="4600363703696263827">Reply</a><span class="item-control blog-admin blog-admin pid-73871234"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4600363703696263827">Delete</a></span></span></div><div class="comment-replies"><div id="c4600363703696263827-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4600363703696263827-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c8868627521442598136"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623314994937#c8868627521442598136">10 June 2021 at 01:49</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8868627521442598136">Delete</a></span></span></div><div class="comment-replies"><div id="c8868627521442598136-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8868627521442598136-ra" class="thread-chrome thread-expanded"><div></div><div id="c8868627521442598136-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8868627521442598136">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8868627521442598136-ce"></div></li></div><div id="c4600363703696263827-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4600363703696263827">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4600363703696263827-ce"></div></li><li class="comment" id="c1246278889137088591"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/13878702783677925034" rel="nofollow">sadfi nizar</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623259938986#c1246278889137088591">9 June 2021 at 10:32</a></span></div><p class="comment-content">good</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="1246278889137088591">Reply</a><span class="item-control blog-admin blog-admin pid-1302535951"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1246278889137088591">Delete</a></span></span></div><div class="comment-replies"><div id="c1246278889137088591-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1246278889137088591-ra" class="thread-chrome thread-expanded"><div></div><div id="c1246278889137088591-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1246278889137088591">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1246278889137088591-ce"></div></li><li class="comment" id="c3580162527588293600"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/08044490517973185098" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623317786116#c3580162527588293600">10 June 2021 at 02:36</a></span></div><p class="comment-content">i5i@sdsad.com<br></p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="3580162527588293600">Reply</a><span class="item-control blog-admin blog-admin pid-1042232483"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3580162527588293600">Delete</a></span></span></div><div class="comment-replies"><div id="c3580162527588293600-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3580162527588293600-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c5826646411395858389"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623752804949#c5826646411395858389">15 June 2021 at 03:26</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5826646411395858389">Delete</a></span></span></div><div class="comment-replies"><div id="c5826646411395858389-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5826646411395858389-ra" class="thread-chrome thread-expanded"><div></div><div id="c5826646411395858389-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5826646411395858389">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5826646411395858389-ce"></div></li></div><div id="c3580162527588293600-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3580162527588293600">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3580162527588293600-ce"></div></li><li class="comment" id="c7196758195250020591"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/12084578733535754980" rel="nofollow">unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623323506239#c7196758195250020591">10 June 2021 at 04:11</a></span></div><p class="comment-content">shaimahbundhoo24@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="7196758195250020591">Reply</a><span class="item-control blog-admin blog-admin pid-1669690797"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7196758195250020591">Delete</a></span></span></div><div class="comment-replies"><div id="c7196758195250020591-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7196758195250020591-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c886718624401736633"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623752822386#c886718624401736633">15 June 2021 at 03:27</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=886718624401736633">Delete</a></span></span></div><div class="comment-replies"><div id="c886718624401736633-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c886718624401736633-ra" class="thread-chrome thread-expanded"><div></div><div id="c886718624401736633-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="886718624401736633">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c886718624401736633-ce"></div></li></div><div id="c7196758195250020591-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7196758195250020591">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7196758195250020591-ce"></div></li><li class="comment" id="c4973368444255878981"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/13494298241769006865" rel="nofollow">Roko</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623341148299#c4973368444255878981">10 June 2021 at 09:05</a></span></div><p class="comment-content">rokoangami17@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="4973368444255878981">Reply</a><span class="item-control blog-admin blog-admin pid-2040675390"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4973368444255878981">Delete</a></span></span></div><div class="comment-replies"><div id="c4973368444255878981-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4973368444255878981-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c38153501493922046"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623752839971#c38153501493922046">15 June 2021 at 03:27</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=38153501493922046">Delete</a></span></span></div><div class="comment-replies"><div id="c38153501493922046-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c38153501493922046-ra" class="thread-chrome thread-expanded"><div></div><div id="c38153501493922046-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="38153501493922046">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c38153501493922046-ce"></div></li></div><div id="c4973368444255878981-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4973368444255878981">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4973368444255878981-ce"></div></li><li class="comment" id="c990011891122182709"><div class="avatar-image-container"><img src="//3.bp.blogspot.com/-Ci8I1SZahMI/XzTgLg4CplI/AAAAAAAAGng/Co4PfDTGo4Aag_8DsRT4d8pcQzIKDROywCK4BGAYYCw/s35/IMG_-fd8su8.jpg" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/10645829314291653098" rel="nofollow">Ashish Kumar Dangi</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623342022588#c990011891122182709">10 June 2021 at 09:20</a></span></div><p class="comment-content">Good</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="990011891122182709">Reply</a><span class="item-control blog-admin blog-admin pid-417292764"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=990011891122182709">Delete</a></span></span></div><div class="comment-replies"><div id="c990011891122182709-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c990011891122182709-ra" class="thread-chrome thread-expanded"><div></div><div id="c990011891122182709-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="990011891122182709">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c990011891122182709-ce"></div></li><li class="comment" id="c6919921403246410620"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/16538834930950514866" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623349010278#c6919921403246410620">10 June 2021 at 11:16</a></span></div><p class="comment-content">georgeweiss600@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="6919921403246410620">Reply</a><span class="item-control blog-admin blog-admin pid-1641495405"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6919921403246410620">Delete</a></span></span></div><div class="comment-replies"><div id="c6919921403246410620-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6919921403246410620-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c6089857128248963016"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623752857374#c6089857128248963016">15 June 2021 at 03:27</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6089857128248963016">Delete</a></span></span></div><div class="comment-replies"><div id="c6089857128248963016-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6089857128248963016-ra" class="thread-chrome thread-expanded"><div></div><div id="c6089857128248963016-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6089857128248963016">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6089857128248963016-ce"></div></li></div><div id="c6919921403246410620-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6919921403246410620">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6919921403246410620-ce"></div></li><li class="comment" id="c3750334272950980577"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/13943236262531098841" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623349117047#c3750334272950980577">10 June 2021 at 11:18</a></span></div><p class="comment-content">geeth86723@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="3750334272950980577">Reply</a><span class="item-control blog-admin blog-admin pid-1426758660"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3750334272950980577">Delete</a></span></span></div><div class="comment-replies"><div id="c3750334272950980577-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3750334272950980577-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c7783373329860869306"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623752876774#c7783373329860869306">15 June 2021 at 03:27</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7783373329860869306">Delete</a></span></span></div><div class="comment-replies"><div id="c7783373329860869306-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7783373329860869306-ra" class="thread-chrome thread-expanded"><div></div><div id="c7783373329860869306-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7783373329860869306">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7783373329860869306-ce"></div></li></div><div id="c3750334272950980577-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3750334272950980577">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3750334272950980577-ce"></div></li><li class="comment" id="c8122286819840249314"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/07967789951663901539" rel="nofollow">Abang</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623425463505#c8122286819840249314">11 June 2021 at 08:31</a></span></div><p class="comment-content">ashof.z17@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="8122286819840249314">Reply</a><span class="item-control blog-admin blog-admin pid-1443272358"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8122286819840249314">Delete</a></span></span></div><div class="comment-replies"><div id="c8122286819840249314-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8122286819840249314-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c8443939485639672882"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623752894435#c8443939485639672882">15 June 2021 at 03:28</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8443939485639672882">Delete</a></span></span></div><div class="comment-replies"><div id="c8443939485639672882-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8443939485639672882-ra" class="thread-chrome thread-expanded"><div></div><div id="c8443939485639672882-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8443939485639672882">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8443939485639672882-ce"></div></li></div><div id="c8122286819840249314-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8122286819840249314">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8122286819840249314-ce"></div></li><li class="comment" id="c554104021949329477"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/09863589094720863224" rel="nofollow">Zarefa</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623464453822#c554104021949329477">11 June 2021 at 19:20</a></span></div><p class="comment-content">thanks</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="554104021949329477">Reply</a><span class="item-control blog-admin blog-admin pid-1022527227"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=554104021949329477">Delete</a></span></span></div><div class="comment-replies"><div id="c554104021949329477-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c554104021949329477-ra" class="thread-chrome thread-expanded"><div></div><div id="c554104021949329477-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="554104021949329477">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c554104021949329477-ce"></div></li><li class="comment" id="c348978361941658949"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/09863589094720863224" rel="nofollow">Zarefa</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623464487580#c348978361941658949">11 June 2021 at 19:21</a></span></div><p class="comment-content">muhammadafriza80@gmail.com<br></p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="348978361941658949">Reply</a><span class="item-control blog-admin blog-admin pid-1022527227"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=348978361941658949">Delete</a></span></span></div><div class="comment-replies"><div id="c348978361941658949-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c348978361941658949-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c1737934268490163217"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623752910316#c1737934268490163217">15 June 2021 at 03:28</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1737934268490163217">Delete</a></span></span></div><div class="comment-replies"><div id="c1737934268490163217-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1737934268490163217-ra" class="thread-chrome thread-expanded"><div></div><div id="c1737934268490163217-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1737934268490163217">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1737934268490163217-ce"></div></li></div><div id="c348978361941658949-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="348978361941658949">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c348978361941658949-ce"></div></li><li class="comment" id="c3678782574943311885"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/00269062259379106653" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623471598899#c3678782574943311885">11 June 2021 at 21:19</a></span></div><p class="comment-content">Ntandontokozo5@gmail.com </p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="3678782574943311885">Reply</a><span class="item-control blog-admin blog-admin pid-1069120102"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3678782574943311885">Delete</a></span></span></div><div class="comment-replies"><div id="c3678782574943311885-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3678782574943311885-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c3209195210045815801"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623752927796#c3209195210045815801">15 June 2021 at 03:28</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3209195210045815801">Delete</a></span></span></div><div class="comment-replies"><div id="c3209195210045815801-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3209195210045815801-ra" class="thread-chrome thread-expanded"><div></div><div id="c3209195210045815801-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3209195210045815801">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3209195210045815801-ce"></div></li></div><div id="c3678782574943311885-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3678782574943311885">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3678782574943311885-ce"></div></li><li class="comment" id="c5293922796279003878"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/08760819306986692229" rel="nofollow">Farhad khan</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623474111116#c5293922796279003878">11 June 2021 at 22:01</a></span></div><p class="comment-content">farhadullahemail@gmail.com    need the source code please</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5293922796279003878">Reply</a><span class="item-control blog-admin blog-admin pid-99568558"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5293922796279003878">Delete</a></span></span></div><div class="comment-replies"><div id="c5293922796279003878-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5293922796279003878-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c2520884319694035511"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623752941859#c2520884319694035511">15 June 2021 at 03:29</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2520884319694035511">Delete</a></span></span></div><div class="comment-replies"><div id="c2520884319694035511-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2520884319694035511-ra" class="thread-chrome thread-expanded"><div></div><div id="c2520884319694035511-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2520884319694035511">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2520884319694035511-ce"></div></li></div><div id="c5293922796279003878-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5293922796279003878">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5293922796279003878-ce"></div></li><li class="comment" id="c6638515875808834320"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/17231198456221421534" rel="nofollow">NEW</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623495714176#c6638515875808834320">12 June 2021 at 04:01</a></span></div><p class="comment-content">nice</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="6638515875808834320">Reply</a><span class="item-control blog-admin blog-admin pid-171434270"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6638515875808834320">Delete</a></span></span></div><div class="comment-replies"><div id="c6638515875808834320-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6638515875808834320-ra" class="thread-chrome thread-expanded"><div></div><div id="c6638515875808834320-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6638515875808834320">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6638515875808834320-ce"></div></li><li class="comment" id="c3627396531962141969"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/13714370049308648513" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623544265611#c3627396531962141969">12 June 2021 at 17:31</a></span></div><p class="comment-content">good</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="3627396531962141969">Reply</a><span class="item-control blog-admin blog-admin pid-441770286"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3627396531962141969">Delete</a></span></span></div><div class="comment-replies"><div id="c3627396531962141969-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3627396531962141969-ra" class="thread-chrome thread-expanded"><div></div><div id="c3627396531962141969-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3627396531962141969">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3627396531962141969-ce"></div></li><li class="comment" id="c7177353855254283144"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/00689427785541745607" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623570552849#c7177353855254283144">13 June 2021 at 00:49</a></span></div><p class="comment-content">hassun.h98@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="7177353855254283144">Reply</a><span class="item-control blog-admin blog-admin pid-1559234938"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7177353855254283144">Delete</a></span></span></div><div class="comment-replies"><div id="c7177353855254283144-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7177353855254283144-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c2452167919385037777"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623752956510#c2452167919385037777">15 June 2021 at 03:29</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2452167919385037777">Delete</a></span></span></div><div class="comment-replies"><div id="c2452167919385037777-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2452167919385037777-ra" class="thread-chrome thread-expanded"><div></div><div id="c2452167919385037777-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2452167919385037777">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2452167919385037777-ce"></div></li></div><div id="c7177353855254283144-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7177353855254283144">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7177353855254283144-ce"></div></li><li class="comment" id="c4404864601584973481"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/00689427785541745607" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623570629120#c4404864601584973481">13 June 2021 at 00:50</a></span></div><p class="comment-content">thanks so much sir</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="4404864601584973481">Reply</a><span class="item-control blog-admin blog-admin pid-1559234938"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4404864601584973481">Delete</a></span></span></div><div class="comment-replies"><div id="c4404864601584973481-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4404864601584973481-ra" class="thread-chrome thread-expanded"><div></div><div id="c4404864601584973481-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4404864601584973481">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4404864601584973481-ce"></div></li><li class="comment" id="c2379939617749273709"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/06049590243651074840" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623663489031#c2379939617749273709">14 June 2021 at 02:38</a></span></div><p class="comment-content">oktamovazam1@gmail.com<br></p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="2379939617749273709">Reply</a><span class="item-control blog-admin blog-admin pid-711662554"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2379939617749273709">Delete</a></span></span></div><div class="comment-replies"><div id="c2379939617749273709-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2379939617749273709-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c1937096528185923300"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623752972990#c1937096528185923300">15 June 2021 at 03:29</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1937096528185923300">Delete</a></span></span></div><div class="comment-replies"><div id="c1937096528185923300-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1937096528185923300-ra" class="thread-chrome thread-expanded"><div></div><div id="c1937096528185923300-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1937096528185923300">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1937096528185923300-ce"></div></li></div><div id="c2379939617749273709-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2379939617749273709">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2379939617749273709-ce"></div></li><li class="comment" id="c8794535094997806608"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/01358901069260894848" rel="nofollow">blanster</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623681627001#c8794535094997806608">14 June 2021 at 07:40</a></span></div><p class="comment-content">palaniramu199@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="8794535094997806608">Reply</a><span class="item-control blog-admin blog-admin pid-2051916345"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8794535094997806608">Delete</a></span></span></div><div class="comment-replies"><div id="c8794535094997806608-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8794535094997806608-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c7308626148689205264"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623752987907#c7308626148689205264">15 June 2021 at 03:29</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7308626148689205264">Delete</a></span></span></div><div class="comment-replies"><div id="c7308626148689205264-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7308626148689205264-ra" class="thread-chrome thread-expanded"><div></div><div id="c7308626148689205264-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7308626148689205264">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7308626148689205264-ce"></div></li></div><div id="c8794535094997806608-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8794535094997806608">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8794535094997806608-ce"></div></li><li class="comment" id="c5188700534416648727"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/15907295863249552179" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623690335112#c5188700534416648727">14 June 2021 at 10:05</a></span></div><p class="comment-content">roberto.alvarezks@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5188700534416648727">Reply</a><span class="item-control blog-admin blog-admin pid-1191171518"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5188700534416648727">Delete</a></span></span></div><div class="comment-replies"><div id="c5188700534416648727-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5188700534416648727-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c907192716206181898"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623753003941#c907192716206181898">15 June 2021 at 03:30</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=907192716206181898">Delete</a></span></span></div><div class="comment-replies"><div id="c907192716206181898-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c907192716206181898-ra" class="thread-chrome thread-expanded"><div></div><div id="c907192716206181898-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="907192716206181898">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c907192716206181898-ce"></div></li></div><div id="c5188700534416648727-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5188700534416648727">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5188700534416648727-ce"></div></li><li class="comment" id="c3997278636437826983"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/16802197320390987465" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623731318733#c3997278636437826983">14 June 2021 at 21:28</a></span></div><p class="comment-content">trungnguyenhuynhnhi@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="3997278636437826983">Reply</a><span class="item-control blog-admin blog-admin pid-1604869046"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3997278636437826983">Delete</a></span></span></div><div class="comment-replies"><div id="c3997278636437826983-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3997278636437826983-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c8379448673722835495"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623753022799#c8379448673722835495">15 June 2021 at 03:30</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8379448673722835495">Delete</a></span></span></div><div class="comment-replies"><div id="c8379448673722835495-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8379448673722835495-ra" class="thread-chrome thread-expanded"><div></div><div id="c8379448673722835495-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8379448673722835495">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8379448673722835495-ce"></div></li></div><div id="c3997278636437826983-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3997278636437826983">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3997278636437826983-ce"></div></li><li class="comment" id="c188846884773744881"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/16395037029022986516" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623733599208#c188846884773744881">14 June 2021 at 22:06</a></span></div><p class="comment-content">adilriaz0000@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="188846884773744881">Reply</a><span class="item-control blog-admin blog-admin pid-1401886343"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=188846884773744881">Delete</a></span></span></div><div class="comment-replies"><div id="c188846884773744881-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c188846884773744881-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c6188249092796738280"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623753038654#c6188249092796738280">15 June 2021 at 03:30</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6188249092796738280">Delete</a></span></span></div><div class="comment-replies"><div id="c6188249092796738280-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6188249092796738280-ra" class="thread-chrome thread-expanded"><div></div><div id="c6188249092796738280-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6188249092796738280">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6188249092796738280-ce"></div></li></div><div id="c188846884773744881-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="188846884773744881">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c188846884773744881-ce"></div></li><li class="comment" id="c3933254708041523417"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03502483180890426848" rel="nofollow">typw01</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623765796982#c3933254708041523417">15 June 2021 at 07:03</a></span></div><p class="comment-content">pierretypw@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="3933254708041523417">Reply</a><span class="item-control blog-admin blog-admin pid-128606608"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3933254708041523417">Delete</a></span></span></div><div class="comment-replies"><div id="c3933254708041523417-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3933254708041523417-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c2978715229726656402"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623829486323#c2978715229726656402">16 June 2021 at 00:44</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2978715229726656402">Delete</a></span></span></div><div class="comment-replies"><div id="c2978715229726656402-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2978715229726656402-ra" class="thread-chrome thread-expanded"><div></div><div id="c2978715229726656402-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2978715229726656402">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2978715229726656402-ce"></div></li></div><div id="c3933254708041523417-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3933254708041523417">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3933254708041523417-ce"></div></li><li class="comment" id="c6335212118913249527"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/06377521667568244503" rel="nofollow">Bianca</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623785012970#c6335212118913249527">15 June 2021 at 12:23</a></span></div><p class="comment-content">bia.melinte23@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="6335212118913249527">Reply</a><span class="item-control blog-admin blog-admin pid-787724096"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6335212118913249527">Delete</a></span></span></div><div class="comment-replies"><div id="c6335212118913249527-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6335212118913249527-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c4230572320252630788"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623829503778#c4230572320252630788">16 June 2021 at 00:45</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4230572320252630788">Delete</a></span></span></div><div class="comment-replies"><div id="c4230572320252630788-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4230572320252630788-ra" class="thread-chrome thread-expanded"><div></div><div id="c4230572320252630788-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4230572320252630788">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4230572320252630788-ce"></div></li></div><div id="c6335212118913249527-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6335212118913249527">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6335212118913249527-ce"></div></li><li class="comment" id="c430276897717543499"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/09101266753011919146" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623826452628#c430276897717543499">15 June 2021 at 23:54</a></span></div><p class="comment-content">udayakeerthi247@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="430276897717543499">Reply</a><span class="item-control blog-admin blog-admin pid-1620991639"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=430276897717543499">Delete</a></span></span></div><div class="comment-replies"><div id="c430276897717543499-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c430276897717543499-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c5913869908862039789"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623829518845#c5913869908862039789">16 June 2021 at 00:45</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5913869908862039789">Delete</a></span></span></div><div class="comment-replies"><div id="c5913869908862039789-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5913869908862039789-ra" class="thread-chrome thread-expanded"><div></div><div id="c5913869908862039789-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5913869908862039789">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5913869908862039789-ce"></div></li></div><div id="c430276897717543499-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="430276897717543499">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c430276897717543499-ce"></div></li><li class="comment" id="c5782725740110766338"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/09101266753011919146" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623826493798#c5782725740110766338">15 June 2021 at 23:54</a></span></div><p class="comment-content">keerthiiachu173@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5782725740110766338">Reply</a><span class="item-control blog-admin blog-admin pid-1620991639"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5782725740110766338">Delete</a></span></span></div><div class="comment-replies"><div id="c5782725740110766338-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5782725740110766338-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c5788718606294453576"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623829537425#c5788718606294453576">16 June 2021 at 00:45</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5788718606294453576">Delete</a></span></span></div><div class="comment-replies"><div id="c5788718606294453576-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5788718606294453576-ra" class="thread-chrome thread-expanded"><div></div><div id="c5788718606294453576-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5788718606294453576">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5788718606294453576-ce"></div></li></div><div id="c5782725740110766338-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5782725740110766338">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5782725740110766338-ce"></div></li><li class="comment" id="c8309634286915305106"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/14132594244665461246" rel="nofollow">Paul</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623838841777#c8309634286915305106">16 June 2021 at 03:20</a></span></div><p class="comment-content">4929210@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="8309634286915305106">Reply</a><span class="item-control blog-admin blog-admin pid-2121346722"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8309634286915305106">Delete</a></span></span></div><div class="comment-replies"><div id="c8309634286915305106-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8309634286915305106-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c4158379190034606598"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623918952864#c4158379190034606598">17 June 2021 at 01:35</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4158379190034606598">Delete</a></span></span></div><div class="comment-replies"><div id="c4158379190034606598-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4158379190034606598-ra" class="thread-chrome thread-expanded"><div></div><div id="c4158379190034606598-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4158379190034606598">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4158379190034606598-ce"></div></li></div><div id="c8309634286915305106-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8309634286915305106">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8309634286915305106-ce"></div></li><li class="comment" id="c2258467551918401715"><div class="avatar-image-container"><img src="//1.bp.blogspot.com/-6DJLF2FKFSE/T_7mckqmHII/AAAAAAAACpQ/NJRSP9HmhJk/s35/aljannah.jpg" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/09033049470534751821" rel="nofollow">Al-Jannah</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623852184694#c2258467551918401715">16 June 2021 at 07:03</a></span></div><p class="comment-content">shareddeep@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="2258467551918401715">Reply</a><span class="item-control blog-admin blog-admin pid-591952008"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2258467551918401715">Delete</a></span></span></div><div class="comment-replies"><div id="c2258467551918401715-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2258467551918401715-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c4580126964511961385"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623918996343#c4580126964511961385">17 June 2021 at 01:36</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=4580126964511961385">Delete</a></span></span></div><div class="comment-replies"><div id="c4580126964511961385-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c4580126964511961385-ra" class="thread-chrome thread-expanded"><div></div><div id="c4580126964511961385-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="4580126964511961385">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c4580126964511961385-ce"></div></li></div><div id="c2258467551918401715-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2258467551918401715">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2258467551918401715-ce"></div></li><li class="comment" id="c1428477544932500972"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/14940868938100762884" rel="nofollow">unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623857053591#c1428477544932500972">16 June 2021 at 08:24</a></span></div><p class="comment-content">dattaguptasoma123@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="1428477544932500972">Reply</a><span class="item-control blog-admin blog-admin pid-1941909443"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1428477544932500972">Delete</a></span></span></div><div class="comment-replies"><div id="c1428477544932500972-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1428477544932500972-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c8344695851929448778"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623919257853#c8344695851929448778">17 June 2021 at 01:40</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8344695851929448778">Delete</a></span></span></div><div class="comment-replies"><div id="c8344695851929448778-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8344695851929448778-ra" class="thread-chrome thread-expanded"><div></div><div id="c8344695851929448778-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8344695851929448778">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8344695851929448778-ce"></div></li></div><div id="c1428477544932500972-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1428477544932500972">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1428477544932500972-ce"></div></li><li class="comment" id="c6588789206172597101"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/10464884382545985460" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623915060398#c6588789206172597101">17 June 2021 at 00:31</a></span></div><p class="comment-content">clarkchestercasuyon.nittsu@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="6588789206172597101">Reply</a><span class="item-control blog-admin blog-admin pid-1323120967"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6588789206172597101">Delete</a></span></span></div><div class="comment-replies"><div id="c6588789206172597101-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6588789206172597101-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c104622656662458005"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623919273875#c104622656662458005">17 June 2021 at 01:41</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=104622656662458005">Delete</a></span></span></div><div class="comment-replies"><div id="c104622656662458005-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c104622656662458005-ra" class="thread-chrome thread-expanded"><div></div><div id="c104622656662458005-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="104622656662458005">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c104622656662458005-ce"></div></li></div><div id="c6588789206172597101-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6588789206172597101">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6588789206172597101-ce"></div></li><li class="comment" id="c3123242387716252659"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/16817855890832959451" rel="nofollow">PW Pacific</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1623948341268#c3123242387716252659">17 June 2021 at 09:45</a></span></div><p class="comment-content">emailpw7@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="3123242387716252659">Reply</a><span class="item-control blog-admin blog-admin pid-1684220967"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3123242387716252659">Delete</a></span></span></div><div class="comment-replies"><div id="c3123242387716252659-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3123242387716252659-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c6918485171429170323"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1624094677775#c6918485171429170323">19 June 2021 at 02:24</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=6918485171429170323">Delete</a></span></span></div><div class="comment-replies"><div id="c6918485171429170323-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c6918485171429170323-ra" class="thread-chrome thread-expanded"><div></div><div id="c6918485171429170323-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="6918485171429170323">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c6918485171429170323-ce"></div></li></div><div id="c3123242387716252659-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3123242387716252659">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3123242387716252659-ce"></div></li><li class="comment" id="c7937169487848050685"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/02757107427092926083" rel="nofollow">brksphone</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1624029782003#c7937169487848050685">18 June 2021 at 08:23</a></span></div><p class="comment-content">brksphone@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="7937169487848050685">Reply</a><span class="item-control blog-admin blog-admin pid-1190789236"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7937169487848050685">Delete</a></span></span></div><div class="comment-replies"><div id="c7937169487848050685-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7937169487848050685-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c8301455525118616691"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1624094694646#c8301455525118616691">19 June 2021 at 02:24</a></span></div><p class="comment-content">Please check your email, we have send source code file on this email address. If you have received or not, please confirm here.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=8301455525118616691">Delete</a></span></span></div><div class="comment-replies"><div id="c8301455525118616691-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c8301455525118616691-ra" class="thread-chrome thread-expanded"><div></div><div id="c8301455525118616691-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="8301455525118616691">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c8301455525118616691-ce"></div></li></div><div id="c7937169487848050685-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7937169487848050685">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7937169487848050685-ce"></div></li><li class="comment" id="c3752172361557173534"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/02854466756008418974" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1624097530461#c3752172361557173534">19 June 2021 at 03:12</a></span></div><p class="comment-content">superb</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="3752172361557173534">Reply</a><span class="item-control blog-admin blog-admin pid-521410237"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=3752172361557173534">Delete</a></span></span></div><div class="comment-replies"><div id="c3752172361557173534-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c3752172361557173534-ra" class="thread-chrome thread-expanded"><div></div><div id="c3752172361557173534-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="3752172361557173534">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c3752172361557173534-ce"></div></li><li class="comment" id="c5665918518649454685"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/02854466756008418974" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1624097606205#c5665918518649454685">19 June 2021 at 03:13</a></span></div><p class="comment-content">Where is the source code ?<br></p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="5665918518649454685">Reply</a><span class="item-control blog-admin blog-admin pid-521410237"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=5665918518649454685">Delete</a></span></span></div><div class="comment-replies"><div id="c5665918518649454685-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c5665918518649454685-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c2546799068144084076"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1624260242741#c2546799068144084076">21 June 2021 at 00:24</a></span></div><p class="comment-content">Please share your email address, we will send source code and .sql file at your email address.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2546799068144084076">Delete</a></span></span></div><div class="comment-replies"><div id="c2546799068144084076-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2546799068144084076-ra" class="thread-chrome thread-expanded"><div></div><div id="c2546799068144084076-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2546799068144084076">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2546799068144084076-ce"></div></li></div><div id="c5665918518649454685-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="5665918518649454685">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c5665918518649454685-ce"></div></li><li class="comment" id="c2714270081406553876"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/02854466756008418974" rel="nofollow">Unknown</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1624097802771#c2714270081406553876">19 June 2021 at 03:16</a></span></div><p class="comment-content">Source code please <br></p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="2714270081406553876">Reply</a><span class="item-control blog-admin blog-admin pid-521410237"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2714270081406553876">Delete</a></span></span></div><div class="comment-replies"><div id="c2714270081406553876-rt" class="comment-thread inline-thread"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2714270081406553876-ra" class="thread-chrome thread-expanded"><div><li class="comment" id="c2920581666473906036"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/03700932360506067475" rel="nofollow">Webslesson</a></cite><span class="icon user blog-author"></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1624260262284#c2920581666473906036">21 June 2021 at 00:24</a></span></div><p class="comment-content">Please share your email address, we will send source code and .sql file at your email address.</p><span class="comment-actions secondary-text"><span class="item-control blog-admin blog-admin pid-667271025"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=2920581666473906036">Delete</a></span></span></div><div class="comment-replies"><div id="c2920581666473906036-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c2920581666473906036-ra" class="thread-chrome thread-expanded"><div></div><div id="c2920581666473906036-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2920581666473906036">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2920581666473906036-ce"></div></li></div><div id="c2714270081406553876-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="2714270081406553876">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c2714270081406553876-ce"></div></li><li class="comment" id="c1434954834305796855"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/18438620552256799824" rel="nofollow">Xyz</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1624256935113#c1434954834305796855">20 June 2021 at 23:28</a></span></div><p class="comment-content">paxeg67425@0ranges.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="1434954834305796855">Reply</a><span class="item-control blog-admin blog-admin pid-2068463521"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=1434954834305796855">Delete</a></span></span></div><div class="comment-replies"><div id="c1434954834305796855-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c1434954834305796855-ra" class="thread-chrome thread-expanded"><div></div><div id="c1434954834305796855-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="1434954834305796855">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c1434954834305796855-ce"></div></li><li class="comment" id="c7163148770812573511"><div class="avatar-image-container"><img src="//www.blogger.com/img/blogger_logo_round_35.png" alt=""/></div><div class="comment-block"><div class="comment-header"><cite class="user"><a href="https://www.blogger.com/profile/18438620552256799824" rel="nofollow">Xyz</a></cite><span class="icon user "></span><span class="datetime secondary-text"><a rel="nofollow" href="https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html?showComment=1624256988864#c7163148770812573511">20 June 2021 at 23:29</a></span></div><p class="comment-content">xyz.dummy67@gmail.com</p><span class="comment-actions secondary-text"><a class="comment-reply" target="_self" data-comment-id="7163148770812573511">Reply</a><span class="item-control blog-admin blog-admin pid-2068463521"><a target="_self" href="https://www.blogger.com/delete-comment.g?blogID=8964111134041337103&amp;postID=7163148770812573511">Delete</a></span></span></div><div class="comment-replies"><div id="c7163148770812573511-rt" class="comment-thread inline-thread hidden"><span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span class="thread-count"><a target="_self">Replies</a></span></span><ol id="c7163148770812573511-ra" class="thread-chrome thread-expanded"><div></div><div id="c7163148770812573511-continue" class="continue"><a class="comment-reply" target="_self" data-comment-id="7163148770812573511">Reply</a></div></ol></div></div><div class="comment-replybox-single" id="c7163148770812573511-ce"></div></li></ol><div id="top-continue" class="continue"><a class="comment-reply" target="_self">Add comment</a></div><div class="comment-replybox-thread" id="top-ce"></div><div class="loadmore hidden" data-published-min="1624260262284" data-post-id="6003697290998394208"><a target="_self">Load more...</a></div></div>
</div>
</div>
<p class='comment-footer'>
<div class='comment-form'>
<a name='comment-form'></a>
<p>
</p>
<a href='https://www.blogger.com/comment-iframe.g?blogID=8964111134041337103&postID=6003697290998394208' id='comment-editor-src'></a>
<iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' width='100%'></iframe>
<!--Can't find substitution for tag [post.friendConnectJs]-->
<script src='https://www.blogger.com/static/v1/jsbin/186635561-comment_from_post_iframe.js' type='text/javascript'></script>
<script type='text/javascript'>
      BLOG_CMT_createIframe('https://www.blogger.com/rpc_relay.html', '0');
    </script>
</div>
</p>
<div id='backlinks-container'>
<div id='Blog1_backlinks-container'>
</div>
</div>
</div>
</div>
<!--Can't find substitution for tag [defaultAdEnd]-->
<div class='inline-ad'>
</div>
<!--Can't find substitution for tag [adStart]-->

        </div></div>
      
<!--Can't find substitution for tag [adEnd]-->
</div>
<div style='clear: both;'></div>
</div></div>
</div><!-- #main -->
</div><!-- #primary -->
<div class='widget-areapbt' id='secondarypbt' role='complementary'>
<div class='sidebarrightsec section' id='sidebarrightsec'><div class='widget AdSense' data-version='1' id='AdSense1'>
<div class='widget-content'>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- webslesson_sidebarrightsec_AdSense1_1x1_as -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4529508631166774"
     data-ad-host="ca-host-pub-1556223355139109"
     data-ad-slot="8049812049"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<div class='clear'></div>
</div>
</div><div class='widget HTML' data-version='1' id='HTML1'>
<div class='widget-content'>
<div class="fb-page" data-href="https://www.facebook.com/webslesson" data-tabs="Webslesson" data-width="312" data-height="248" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/webslesson" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/webslesson">Webslesson</a></blockquote></div>
</div>
<div class='clear'></div>
</div><div class='widget HTML' data-version='1' id='HTML2'>
<div class='widget-content'>
<a href="https://twitter.com/webslesson?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @webslesson</a><script async="async" src="https://platform.twitter.com/widgets.js" charset="utf-8" ></script>
</div>
<div class='clear'></div>
</div><div class='widget PopularPosts' data-version='1' id='PopularPosts1'>
<h2>Popular Posts</h2>
<div class='widget-content popular-posts'>
<ul>
<li>
<a href='https://www.webslesson.info/2018/07/live-chat-system-in-php-using-ajax-jquery.html'>Live Chat System in PHP using Ajax JQuery</a>
</li>
<li>
<a href='https://www.webslesson.info/2021/02/online-doctor-appointment-system-project-in-php-mysql.html'>Online Doctor Appointment System Project in PHP Mysql</a>
</li>
<li>
<a href='https://www.webslesson.info/2021/01/build-real-time-chat-application-in-php-mysql-using-websocket.html'>Build Real time Chat Application in PHP Mysql using WebSocket</a>
</li>
<li>
<a href='https://www.webslesson.info/2020/06/php-registration-with-email-verification-using-otp.html'>PHP Login Registration with Email Verification using OTP</a>
</li>
<li>
<a href='https://www.webslesson.info/2019/11/php-mysql-based-online-exam-system-project.html'>PHP MySql Based Online Exam System Project</a>
</li>
<li>
<a href='https://www.webslesson.info/2020/12/online-student-result-management-system-in-php-with-mysql.html'>Online Student Result Management System in PHP with Mysql</a>
</li>
<li>
<a href='https://www.webslesson.info/2021/04/laravel-8-tutorial-join-multiple-table-using-eloquent-model.html'>Laravel 8 Tutorial - Join Multiple Table using Eloquent Model</a>
</li>
<li>
<a href='https://www.webslesson.info/2019/09/how-to-make-login-with-google-account-using-php.html'>How to make Login with Google Account using PHP</a>
</li>
<li>
<a href='https://www.webslesson.info/2020/03/phpspreadsheet-beginner-tutorial.html'>PHPSpreadSheet Beginner Tutorial</a>
</li>
<li>
<a href='https://www.webslesson.info/2019/05/online-student-attendance-system-project-in-php.html'>Online Student Attendance System in PHP Mysql</a>
</li>
</ul>
<div class='clear'></div>
</div>
</div></div>
<div class='widget widget_search'>
<form action='/search' class='search-formpbt' method='get' role='search'>
<label>
<span class='screen-reader-text'>Search for:</span>
<input class='search-fieldpbt' name='q' placeholder='Search' title='Search for:' type='search' value=''/>
</label>
<input class='search-submitpbt' type='submit' value='Search'/>
</form>
</div>
</div><!-- #secondary -->
</div><!-- #content -->
<footer class='site-footerpbt' id='colophonpbt' role='contentinfo'>
<div class='site-infopbt'>
<!-- Do not edit or remove credits without our permission: premiumbloggertemplates.com -->
Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script>
<a href='https://www.webslesson.info/'>Webslesson</a><!-- | Powered by <a href='http://www.blogger.com/'>Blogger</a>!--><!--<br/>Design by <a href='http://crestaproject.com/' target='_blank'>CrestaProject</a> | Blogger Theme by <a href='http://www.bloggertipandtrick.net/' target='_blank' title='Blogging Tutorials'>Lasantha</a> - <a href='http://www.premiumbloggertemplates.com/' target='_blank' title='Free Blogger Templates'>PremiumBloggerTemplates.com</a> | Distributed By <a href='http://gooyaabitemplates.com/' rel='dofollow' target='_blank'>Gooyaabi Templates</a>!-->
</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->
<script type='text/javascript'>
//<![CDATA[

(function($) {
	"use strict";
	
	$(document).ready(function() {
	
		/*-----------------------------------------------------------------------------------*/
		/*  Top Search Button
		/*-----------------------------------------------------------------------------------*/ 
		$('.top-search').click(function() {
			$('.topSearchFormpbt').slideToggle('fast');
			$(this).toggleClass("active");
			return false;
		});
		
		$('.main-navigationpbt').find("li").each(function(){
			if(jQuery(this).children("ul").length > 0){
				jQuery(this).append("<span class='indicator'></span>");
			}
		});	
		
		/*-----------------------------------------------------------------------------------*/
		/*  Overlay Effect for Featured Image
		/*-----------------------------------------------------------------------------------*/ 	
			$(".overlay-img").hover(function () {
				$(this).stop().animate({
					opacity: .5
				}, 300);
			},
			function () {
				$(this).stop().animate({
					opacity: 0
				}, 300);
			});

	});
	
})(jQuery);

//]]>
</script>
<script type='text/javascript'>
//<![CDATA[

/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var container, button, menu;

	container = document.getElementById( 'site-navigationpbt' );
	if ( ! container )
		return;

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button )
		return;

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) )
		menu.className += ' nav-menu';

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) )
			container.className = container.className.replace( ' toggled', '' );
		else
			container.className += ' toggled';
	};
} )();

//]]>
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87739877-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- prism highlighters starts here-->
<link href='https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/themes/prism.css' rel='stylesheet' type='text/css'/>
<!-- prism highlighters end here-->
<!-- prism highlighters starts here-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.js' type='text/javascript'></script>
<!-- prism highlighters end here-->
<script>
function source_code()
{
alert("If you want to complete source code of this tutorial, please share your email in comment box.");
}
  
function request(id)
{
    var email = prompt("Enter Email Address for Receive Source Code on Email, you will receive source code within 5 minutes, and also check SPAM folder also");
    if(!isEmail(email))
    {
        alert('Please Provide Valid Email Address');
        request();
    }
    else
    {
        fetch(`https://api.allorigins.win/get?url=${encodeURIComponent('http://demo.webslesson.info/scm/process.php?id='+id+'&email='+email+'')}`)
          .then(function(response){

            return response.json();

        }).then(function(responseData){
            if(responseData.success)
            {
                alert(responseData.success);
            }
            //location.reload();
        });
    }
}

function isEmail(email)
{
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
</script>

<script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/1527282520-widgets.js"></script>
<script type='text/javascript'>
window['__wavt'] = 'AOuZoY7xm3I5VaDtkrD5RFY-JvcajCOPkw:1632733671195';_WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d8964111134041337103','//www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html','8964111134041337103');
_WidgetManager._SetDataContext([{'name': 'blog', 'data': {'blogId': '8964111134041337103', 'title': 'Webslesson', 'url': 'https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html', 'canonicalUrl': 'https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html', 'homepageUrl': 'https://www.webslesson.info/', 'searchUrl': 'https://www.webslesson.info/search', 'canonicalHomepageUrl': 'https://www.webslesson.info/', 'blogspotFaviconUrl': 'https://www.webslesson.info/favicon.ico', 'bloggerUrl': 'https://www.blogger.com', 'hasCustomDomain': true, 'httpsEnabled': true, 'enabledCommentProfileImages': true, 'gPlusViewType': 'FILTERED_POSTMOD', 'adultContent': false, 'analyticsAccountNumber': 'UA-87739877-1', 'encoding': 'UTF-8', 'locale': 'en-GB', 'localeUnderscoreDelimited': 'en_gb', 'languageDirection': 'ltr', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'isDynamicViewsAvailable': true, 'feedLinks': '\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Webslesson - Atom\x22 href\x3d\x22https://www.webslesson.info/feeds/posts/default\x22 /\x3e\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/rss+xml\x22 title\x3d\x22Webslesson - RSS\x22 href\x3d\x22https://www.webslesson.info/feeds/posts/default?alt\x3drss\x22 /\x3e\n\x3clink rel\x3d\x22service.post\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Webslesson - Atom\x22 href\x3d\x22https://www.blogger.com/feeds/8964111134041337103/posts/default\x22 /\x3e\n\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Webslesson - Atom\x22 href\x3d\x22https://www.webslesson.info/feeds/6003697290998394208/comments/default\x22 /\x3e\n', 'meTag': '', 'adsenseClientId': 'ca-pub-4529508631166774', 'adsenseHostId': 'ca-host-pub-1556223355139109', 'adsenseHasAds': true, 'adsenseAutoAds': false, 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/597c4434690a0a14', 'plusOneApiSrc': 'https://apis.google.com/js/plusone.js', 'disableGComments': true, 'sharing': {'platforms': [{'name': 'Get link', 'key': 'link', 'shareMessage': 'Get link', 'target': ''}, {'name': 'Facebook', 'key': 'facebook', 'shareMessage': 'Share to Facebook', 'target': 'facebook'}, {'name': 'BlogThis!', 'key': 'blogThis', 'shareMessage': 'BlogThis!', 'target': 'blog'}, {'name': 'Twitter', 'key': 'twitter', 'shareMessage': 'Share to Twitter', 'target': 'twitter'}, {'name': 'Pinterest', 'key': 'pinterest', 'shareMessage': 'Share to Pinterest', 'target': 'pinterest'}, {'name': 'Email', 'key': 'email', 'shareMessage': 'Email', 'target': 'email'}], 'disableGooglePlus': true, 'googlePlusShareButtonWidth': 0, 'googlePlusBootstrap': '\x3cscript type\x3d\x22text/javascript\x22\x3ewindow.___gcfg \x3d {\x27lang\x27: \x27en_GB\x27};\x3c/script\x3e'}, 'hasCustomJumpLinkMessage': false, 'jumpLinkMessage': 'Read more', 'pageType': 'item', 'postId': '6003697290998394208', 'postImageThumbnailUrl': 'https://i.ytimg.com/vi/JmnM-K1HPFE/default.jpg', 'postImageUrl': 'https://i.ytimg.com/vi/JmnM-K1HPFE/hqdefault.jpg', 'pageName': 'How to Create Review \x26 Rating Page in PHP with Ajax', 'pageTitle': 'Webslesson: How to Create Review \x26 Rating Page in PHP with Ajax'}}, {'name': 'features', 'data': {'sharing_get_link_dialog': 'true', 'sharing_native': 'false'}}, {'name': 'messages', 'data': {'edit': 'Edit', 'linkCopiedToClipboard': 'Link copied to clipboard', 'ok': 'Ok', 'postLink': 'Post link'}}, {'name': 'template', 'data': {'name': 'custom', 'localizedName': 'Custom', 'isResponsive': false, 'isAlternateRendering': false, 'isCustom': true}}, {'name': 'view', 'data': {'classic': {'name': 'classic', 'url': '?view\x3dclassic'}, 'flipcard': {'name': 'flipcard', 'url': '?view\x3dflipcard'}, 'magazine': {'name': 'magazine', 'url': '?view\x3dmagazine'}, 'mosaic': {'name': 'mosaic', 'url': '?view\x3dmosaic'}, 'sidebar': {'name': 'sidebar', 'url': '?view\x3dsidebar'}, 'snapshot': {'name': 'snapshot', 'url': '?view\x3dsnapshot'}, 'timeslide': {'name': 'timeslide', 'url': '?view\x3dtimeslide'}, 'isMobile': false, 'title': 'How to Create Review \x26 Rating Page in PHP with Ajax', 'description': 'PHP Review \x26 Rating System using Ajax - Part 1    PHP Review \x26 Rating System using Ajax - Part 2  In this post, you can find How to create p...', 'featuredImage': 'https://lh5.googleusercontent.com/proxy/jSrAPJvGpsNARd5F9ckmzJZp5Vrc7YSg-HAqcKxdugICkSO1MF8gIjdDT_--ABZiY-XR8lETPCuuuKz3qtRHoPZ4GqI', 'url': 'https://www.webslesson.info/2021/05/how-to-create-review-rating-page-in-php-with-ajax.html', 'type': 'item', 'isSingleItem': true, 'isMultipleItems': false, 'isError': false, 'isPage': false, 'isPost': true, 'isHomepage': false, 'isArchive': false, 'isLabelSearch': false, 'postId': 6003697290998394208}}]);
_WidgetManager._RegisterWidget('_HeaderView', new _WidgetInfo('Header1', 'headersec', document.getElementById('Header1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog1', 'mainblogsec', document.getElementById('Blog1'), {'cmtInteractionsEnabled': false, 'lightboxEnabled': true, 'lightboxModuleUrl': 'https://www.blogger.com/static/v1/jsbin/4043737584-lbx__en_gb.js', 'lightboxCssUrl': 'https://www.blogger.com/static/v1/v-css/4076883957-lightbox_bundle.css'}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_AdSenseView', new _WidgetInfo('AdSense1', 'sidebarrightsec', document.getElementById('AdSense1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML1', 'sidebarrightsec', document.getElementById('HTML1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML2', 'sidebarrightsec', document.getElementById('HTML2'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts1', 'sidebarrightsec', document.getElementById('PopularPosts1'), {}, 'displayModeFull'));
</script>
</body>
</html>