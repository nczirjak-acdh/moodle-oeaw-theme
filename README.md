OEAW Theme based on Klass theme for moodle 3.1 Created By Norbert Czirjak

Install steps:

1.You need to copy the files to the themes/klass directory
2.Log on to your site admin and go to the Notifications menupoint. Here the new theme will be available, so please click to the "Upgrade Moodle database now" button.
3.The module has 2 dependencies: Course Custom Menu block, oeaw tags block. Please install them, the header.php and the theme files contains the necessary files and code (js files and jquery codes)
4.Go to the theme section and change the actual theme


This theme is using 4 regions:

'regions' => array('side-pre', 'side-post', 'side-content', 'center-post'),


The frontend layout:

side-pre -> the hamburger menu content and this contains the menu blocks
side-post -> courses (the main content region)
side-content->news
center-post -> Themes (Tags)


The course layouts:

center-post -> the course custom menu
side-post -> courses (the main content region)
side-pre -> the hamburger menu content and this contains the menu blocks