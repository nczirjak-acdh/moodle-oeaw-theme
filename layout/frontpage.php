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

$PAGE->requires->js('/theme/klass/javascript/bootstrap-carousel.js');
$PAGE->requires->js('/theme/klass/javascript/bootstrap-transition.js');
$courserenderer = $PAGE->get_renderer('core', 'course');

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php  require_once(dirname(__FILE__) . '/includes/header.php');  ?>
<!--Custom theme header-->
<script type="text/javascript">
        $(document).ready(function(){
            //hide all menupoint in the first load
            $(".block_course_custom_menu").hide();
            $(".fp-coursebox .readmore").hide();
        });            
</script>            
<?php


//block_course_custom_menu
?>


<div id="main">
    <div class="container-fluid">
             <?php
            $toggleslideshow = theme_klass_get_setting('toggleslideshow');
            if ($toggleslideshow == 1) {
                require_once(dirname(__FILE__) . '/includes/slideshow.php');
            } 
          ?>
    </div>
    <!--Custom theme slider
    <div class="fp-site-customdesc">
            <div class="container-fluid">
            <h2>Who we are 1111</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries <a href="javascript:void(0);"><span>Readmore</span></a></p>
      </div>
    </div>-->
    <!--Custom theme Who We Are block-->
    <div id="page" class="container-fluid">
        <header id="page-header" class="clearfix">
            <?php echo $html->heading; ?>
            <div id="page-navbar" class="clearfix">
                <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
                <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
            </div>
            <div id="course-header">
                <?php echo $OUTPUT->course_header(); ?>
            </div>
        </header>
        <div id="page-content" class="row-fluid">
          
            <?php
                echo $courserenderer->new_courses();
                echo $OUTPUT->course_content_header();
                echo $OUTPUT->main_content();                
                echo $OUTPUT->course_content_footer();
              ?>
            
        </div>
        
        
        <div class="frontpage_lower_section" >            
            
            <div  id="frontpage_div_left1">
                <h2>Latests News  <img src="<?php echo $CFG->wwwroot; ?>/theme/klass/pix/latest_news.png" width="50px" height="50px"></h2>
                <?php echo $OUTPUT->blocks('side-content', ''); ?>
            </div> 

            <div  id="frontpage_div_left2">
                <h2>Themes  <img src="<?php echo $CFG->wwwroot; ?>/theme/klass/pix/themes.png" width="50px" height="50px"></h2>
                <center>
                    <?php echo $OUTPUT->blocks('center-post', ''); ?>
                </center>
                
            </div>                 
            
        </div>           
        
    </div>    
</div>   

<?php  require_once(dirname(__FILE__) . '/includes/footer.php');  ?>   
<!--Custom theme footer-->
<div id="mySidenav" class="sidenav" style="margin-bottom:-20px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>  
    <div style=" height:100%; ">
        <?php echo $OUTPUT->blocks('side-pre', 'span3'); ?>
    </div>      
</div>

</body>
</html>
