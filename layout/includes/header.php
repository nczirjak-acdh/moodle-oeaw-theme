<?php
$surl = new moodle_url('/course/search.php');
?>

 <style>
 
 </style>
 
 <script>

 /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "400px";
    document.getElementById("main").style.marginRight = "400px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight = "0";
    document.body.style.backgroundColor = "white";
}
</script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    
    <script type="text/javascript" src="/moodle-dev/theme/klass/javascript/jquery.awesomeCloud-0.2.js"></script>    
    <script type="text/javascript" src="/moodle-dev/theme/klass/javascript/jquery.textfill.js"></script>    
    <script type="text/javascript" src="/moodle-dev/theme/klass/javascript/jquery.cookie.js"></script>

    <script type="text/javascript">
                
        $(document).ready(function(){
            /* the world cloud settings */
            $("#wordcloud1").awesomeCloud({
                    "size" : {
                            "grid" : 8,
                            "factor" : 0,
                            
                    },
                    "options" : {
                            "color" : "random-dark",
                            "rotationRatio" : 0.35,
                            //"printMultiplier" : 3,
                            "sort" : "random"
                    },
                    "font" : "arvoregular, Helvetica, serif",
                    "shape" : "square"
            });    
            
            /* the lesson content boxes */
            $(".box.view_pages_box tbody").hide();
            
            $(".box.view_pages_box thead").click(function(){        
                $(".box.view_pages_box tbody").hide();
                $('.generaltable.boxaligncenter thead th').css('color', '#016771');
                $('.generaltable.boxaligncenter thead th').css('background-color', 'white');
                var id = $(this).closest('table').attr('id')                
                $("#"+id+" tbody").show();
                $("#"+id+".generaltable.boxaligncenter thead th").css('color', 'white');
                $("#"+id+".generaltable.boxaligncenter thead th").css('background-color', '#016771');
            }); 
            
            
               
            /* 
             * The block menu JQuery commands
             * hide all menupoint in the first load */
            
            $(".oeaw_custom_menu_content").hide();
            $(".oeaw_custom_menu_root").css('background-color', '#b9b9b9');
            
            $(".oeaw_custom_menu_content_row a").click(function(){        
                var id = $(this).attr('id');
                
                //removie cookie
                $.removeCookie("clickedName");     
                // create a new cookie, 7 days lifetime and it will available
                // in the whole site -> /
                $.cookie("clickedName",id , {expires: 7, path:'/'});
                
                var oldClass = $("#"+id).attr('class');                
                var newClass = oldClass+' active';     
                $("#"+id).removeClass( oldClass ).addClass( newClass);                  
                $("#"+id).css('color', 'black');
                
            }); 
            
            if($.cookie("clickedName") != null){
                            
                var cookieName = $.cookie("clickedName");                
                var oldClass = $("#"+cookieName).attr('class');
                var newClass = oldClass+' active';
                $("#"+cookieName).removeClass( oldClass ).addClass( newClass);                        
                $("#"+cookieName).css('color', 'black');                
            }
            
            
            // if the user clicked to the root text
            $(".oeaw_custom_menu_root_header a").click(function(){  
                $(".oeaw_custom_menu_root").css('background-color', '#b9b9b9');
                //hide all menupoint
                $(".oeaw_custom_menu_content").hide();
                // get the clicked id
                var id = $(this).attr('id');
                var newId = id;
                //removie cookie
                $.removeCookie("menuName");     
                // create a new cookie, 7 days lifetime and it will available
                // in the whole site -> /
                $.cookie("menuName", newId, {expires: 7, path:'/'});
                //we change the root to the content in the class name
                newId = newId.replace("cmr", "cmc");        
                //and we add the active class to it
                var oldClass = $("#"+newId).attr('class');
                var newClass = oldClass+' active';                
                
                $("#"+newId).removeClass( oldClass ).addClass( newClass);        
                //show the new class in the selected menu content
                $("#"+newId).show();                
                
                var arr = newId.split("_");                
                var headerClass = "oeaw_custom_menu_root_"+arr[2];                
                $("#"+headerClass).css('background-color', '#016771');
                
            });   
            
            //if we already have a cookie then change the classes
            if($.cookie("menuName") != null){
                            
                var cookieName = $.cookie("menuName");
                var openedMenu = cookieName.replace("cmr", "cmc"); 
                var oldClass = $("#"+openedMenu).attr('class');
                var newClass = oldClass+' active';

                var arr = cookieName.split("_");
                var headerClass = "oeaw_custom_menu_root_"+arr[2];                
                $("#"+headerClass).css('background-color', '#016771');
                
                $("#"+openedMenu).removeClass( oldClass ).addClass( newClass);        
                $("#"+openedMenu).show();
                
                
                
            }
            
        });
    </script>
<header id="header">

    <div class="header-top">
        <div class="container-fluid">
            <?php if($CFG->branch > "27"): ?>
                <?php echo $OUTPUT->user_menu(); ?>            
            <?php endif; ?> 
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="header-main">
        <div class="header-main-content">
        	<div class="container-fluid" style="background: #016771; width: 0 auto;">
                    <div class="row-fluid">
                        
                        <div class="span6">
                            <div id="logo"><a href="<?php echo $CFG->wwwroot;?>/"><img src="<?php echo get_logo_url(); ?>" width="300" height="120" alt="Klass"></a></div>
                        </div>
                        <?php if(! $PAGE->url->compare($surl, URL_MATCH_BASE)): ?>



                        <div class="span6" >
                            
                            <div style="float:right; margin-right: 20px; margin-left: 20px; position: relative; color:white;" >                                
                                <span onclick="openNav()"><h2 style="color:white;">&#9776; </h2></span>  
                            </div>

                            <div class="top-search" >
                                <form action="<?php echo new moodle_url('/course/search.php'); ?>" method="get">
                                   <input type="text" placeholder="<?php echo get_string('searchcourses'); ?>" name="search" value="">
                                   <input type="submit" value="Search">
                                </form>                       
                            </div>                
                            <div class="clearfix"></div>                
                        </div>
            
                        <?php endif; ?>  
                    
                    </div>
            <div class="" style="width: 0 auto;">
                <center><h2 style="color:white;">
                <?php 
                    if(strpos($_SERVER["REQUEST_URI"], '/course/view.php')){
                        echo $COURSE->fullname;
                    }                    
                ?>
                </h2></center>
            </div>
      </div>
    </div>
    <div class="header-main-menubar">
      <div class="navbar">
          <!--
        <div class="navbar-inner">
          <div class="container">
            <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <a href="#" class="brand" style="display: none;">Title</a>
            <p class="navbar-text"><a href="<?php echo $CFG->wwwroot;?>"><i class="fa fa-home"></i>Home</a></p>
            <div class="nav-collapse collapse navbar-responsive-collapse">
              <p class="navbar-text"><a href="<?php echo $CFG->wwwroot;?>"><i class="fa fa-home"></i>Home</a></p>
              <?php echo $OUTPUT->custom_menu(); ?>
              <ul class="nav pull-right">
                  <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                  <?php if($CFG->branch < "28"): ?>
                   <li class="navbar-text"><?php echo $OUTPUT->login_info() ?></li>
                 <?php endif; ?> 
              </ul>
            </div>
          </div>
        </div>
          -->
      </div>
    </div>
  </div>
  
</header>
<!--E.O.Header-->