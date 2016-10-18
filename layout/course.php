<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package   theme_klass
 * @copyright 2015 Nephzat Dev Team,nephzat.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_klass_get_html_for_settings($OUTPUT, $PAGE);

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
$(document).ready(function(){
        $("ul").removeClass("nav-tabs");
    $("button").click(function(){
        $("p").removeClass("intro");
    });
});
</script>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php /*?><header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo
                format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                ?></a>
            <a class="btn btn-navbar" data-toggle="workaround-collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <?php echo $OUTPUT->user_menu(); ?>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header><?php */?>

<?php  require_once(dirname(__FILE__) . '/includes/header.php');  ?>


<div id="main">
    
    <div class="container-fluid">
            
        <div class="theme-slider" style="padding-bottom: 20px; padding-left: 20px;  padding-right: 20px;">
            <center>
                <div style="overflow: hidden;  border: 1px solid white;  max-width: 1000px; ">
                    <img src="https://clarin.oeaw.ac.at/moodle-dev/theme/klass/pix/course_design.png" style='width:100%; max-width: 1000px;' border="0" alt="Null">
                </div>
            </center>
        </div>
        
    </div>
    
    <div id="page" class="container-fluid">

        <header id="page-header" class="clearfix">          
            <div >
                <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
                <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
            </div>
        </header>
        
        <div id="page-content" class="row-fluid">
             <div style="overflow: hidden; width:100%; height:100%;">
                    
                 
                 
                    <div style="width:25%; float:left; height: 100%;">
                        <?php  echo $OUTPUT->blocks('center-post', 'oeaw_custom_menu'); ?>
                    </div>                    
                    
                    <div style="width:70%; overflow: hidden; height: 100%;">
                        <section id="region-main" class="">
                            <?php
                            echo $OUTPUT->course_content_header();                            
                            echo $OUTPUT->main_content();
                            echo $OUTPUT->course_content_footer();
                            ?>
                        </section>
                    </div>                    
                    
                </div>          
        </div>

        <?php /*?><footer id="page-footer">
            <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
            <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
            <?php
            echo $html->footnote;
            echo $OUTPUT->login_info();
            echo $OUTPUT->home_link();
            echo $OUTPUT->standard_footer_html();
            ?>
        </footer>

        <?php echo $OUTPUT->standard_end_of_body_html() ?><?php */?>

    </div>
</div>    
    
<?php  require_once(dirname(__FILE__) . '/includes/footer.php');  ?>
     <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>  
  <?php echo $OUTPUT->blocks('side-pre', 'span3'); ?>
</div>

</body>
</html>