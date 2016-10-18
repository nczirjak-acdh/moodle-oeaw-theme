<?php
$footnote = theme_klass_get_setting('footnote', 'format_html');

$fburl    = theme_klass_get_setting('fburl');
$pinurl   = theme_klass_get_setting('pinurl');
$twurl    = theme_klass_get_setting('twurl');
$gpurl    = theme_klass_get_setting('gpurl');

$address  = theme_klass_get_setting('address');
$emailid  = theme_klass_get_setting('emailid');
$phoneno  = theme_klass_get_setting('phoneno');

?>
<footer id="footer">    
  <div class="footer-main">
    <div class="container-fluid">
      <div class="row-fluid">
          
        <div class="span4">
          <div class="infoarea">
            <div class="footer-logo">
              <a href="<?php echo $CFG->wwwroot;?>">
              	<img src="<?php echo $CFG->wwwroot;?>/theme/klass/pix/moodle-logo-banner_350.png" width="350" height="144" alt="moodle">
              </a>
            </div>
            <?php echo $footnote; ?>
          </div>
        </div>
          
        <div class="span2">
          <div class="foot-links">
              &nbsp;
          </div>
        </div>
        
        <div class="span3">
          &nbsp;
        </div>
        
        <div class="span3">
          <div class="social-media">
            <div class="footer-logo">
              <a href="<?php echo $CFG->wwwroot;?>">
              	<img src="<?php echo get_logo_url('footer'); ?>" width="205" height="80" alt="Klass">
              </a>
            </div>
          </div>
        </div>
          
      </div>
    </div>
  </div>
  <div class="footer-foot">
  	<div class="container-fluid">
	  	<p>Developed by <a href="http://buymoodlethemes.com">Buymoodlethemes.com</a>. Powered by <a href="https://moodle.org">Moodle</a>.</p>
    </div>
  </div>
</footer>
<!--E.O.Footer-->

<?php  echo $OUTPUT->standard_end_of_body_html() ?>