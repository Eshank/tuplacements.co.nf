<!DOCTYPE html>
<!--
    Free Responsive Template by templatemo
    http://www.templatemo.com
-->
<html>
  <head>
    <title>Mockpapers</title>
    <meta name="keywords" content="smoothy, responsive bootstrap, one page, #2c3e50, white, free html5 template, templatemo" />
	<meta name="description" content="Smoothy is free HTML5 one-page template for multi-purpose that is based on responsive bootstrap framework." />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">
   	<link rel="stylesheet" href="css/templatemo_misc.css">
   	<style type="text/css">
   	label
   	{font-size: 16px;}
    img.pics:hover
{
  -webkit-transform: scale(1.2,1.2);
    -moz-transform:scale(1.2,1.2);
    opacity: 1;
    -webkit-opacity: 1;
    -moz-opacity: 1;
}
   	</style>
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/JavaScript" src="js/slimbox2.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

<!--/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

-->


<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_flicker", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
  <style>
td.xx{
font-family:'Century Gothic';
font-size:150%;
background:#2c3e50;
color:#e67e22;
transition: width 2s, height 2s;
text-align:center;
}
td.xx:hover{

font-family:'Century Gothic';
background:#f1c40f;
font-size:300%;
color:#e67e22;
width:1000px;
text-align:center;}
</style>
  </head>
  <body>
    <header>
    <!-- start menu -->
        <div id="templatemo_home">
    	<div class="templatemo_top">
      <div class="container templatemo_container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div id="top-menu" >
            <nav class="mainMenu">
            
              <a href="./index.html"><h1>Thapar Placements</h1></a>
              </nav>
            </div>
          </div>
          <div class="col-sm-9 col-md-9 templatemo_col9" >
          	<div id="top-menu">
            <nav class="mainMenu">
             
              <ul class="nav">
                <li><a class="menu" href="#templatemo_home">Home</a></li>
                <li><a class="menu" href="#templatemo_about">About</a></li>
                <li><a class="menu" href="#templatemo_blog">Team</a></li>
              </ul>
            </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="clear"></div>
    <!-- end menu -->
            
  </header>
  	<div class="templatemo_lightgrey_about" id="templatemo_about">
	<div class="container">
               <table align="center" width="100%">
                        <tr>
                        <td class="xx" align="center "height="250" bgcolor="#2c3e50" width="250"><a  href="./mockpapers.php">MockPapers</a></td>
                        <td class="xx" align="center "height="250" bgcolor="#2c3e50" width="250"><a href="./quiz.php">Quiz</a></td>
                        <td class="xx" align="center "height="250" bgcolor="#2c3e50" width="250"><a  href="./placement.php">Placement Predictor</a></td>
                        <td class="xx" align="center "height="250" bgcolor="#2c3e50" width="250"><a href="./question.php?page=1">Interview Questions</a></td>
                        </tr>
                </table>
             
       </div>  
       </div>
<div>
<?php
	$conn = mysqli_connect("fdb13.biz.nf", "1814924_tup", "tuplacements123", "1814924_tup");
	$sql = "select * from mockpapers";
  $query = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($query))
	{
    $sql1 = "select * from c_info where c_name='".$row['name']."'";
    $query1 = mysqli_query($conn, $sql1);
    $row1= mysqli_fetch_array($query1);
?>
					<div style="border:3px solid #2c3e50;padding:60x;margin:60px;height:270px;">
						<img src="./images/company/<?php echo $row1['c_img']?>" style="height:150px;width:220px;left:880px;position:relative;"/>
            <div style="position:relative;top:-130px;left:30px;"><div style="font-weight:bold;font-size:18px;"><?php echo 'Company Name: '.$row1['c_name']?></div><br />
            <div style="font-weight:bold;font-size:18px;">Company Description:</div>
            <div style="font-size:18px;width:800px;word-wrap:break-word;"><?php echo $row1['c_desc']?></div></div>
					<a href="<?php echo "Mockpapers/".$row['name'].".pdf"; ?>" style="background-color:#2c3e50;color:white;padding:5px;border:2px solid #2c3e50;border-radius:5px;position:relative;top:-100px;font-size:16px;left:30px;" download>Download Mock Paper</a>					
				  <a href="<?php echo "./viewonline.php?name=".$row['name'].""; ?>" style="background-color:#2c3e50;color:white;padding:5px;border:2px solid #2c3e50;border-radius:5px;position:relative;top:-100px;font-size:16px;left:40px;" >View Online Paper</a>          
        
          <a href="<?php echo "Mockpapers/".$row['name']."-s.pdf"; ?>" style="background-color:#2c3e50;color:white;padding:5px;border:2px solid #2c3e50;border-radius:5px;position:relative;top:-100px;font-size:16px;left:390px;" download>Download Answer Key</a>               
					<a href="<?php echo "./viewonline.php?name=".$row['name']."-s"; ?>" style="background-color:#2c3e50;color:white;padding:5px;border:2px solid #2c3e50;border-radius:5px;position:relative;top:-100px;font-size:16px;left:400px;" >View Online Answers</a>								
					</div>
<?php
	}	
?>	
	</div>
<!--Footer Start-->
    
   <!--Footer End-->
	<!-- Bottom Start -->
    <div class="templatemo_bottom">
    	<div class="container"></div>
    </div>
    <!-- Bottom End -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/jquery.cycle2.carousel.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script type="text/javascript">
      $(function(){
          var default_view = 'grid';
          if($.cookie('view') !== 'undefined'){
              $.cookie('view', default_view, { expires: 7, path: '/' });
          }
          function get_grid(){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox-list');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          function get_list(){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox');
                  $('.prod-cnt').addClass('dbox-list');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          if($.cookie('view') == 'list'){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0});
              $('.prod-cnt').removeClass('dbox');
              $('.prod-cnt').addClass('dbox-list');
              $('.prod-cnt').stop().animate({opacity:1});
          }

          if($.cookie('view') == 'grid'){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0});
                  $('.prod-cnt').removeClass('dboxlist');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
          }

          $('#list').click(function(){
              $.cookie('view', 'list');
              get_list()
          });

          $('#grid').click(function(){
              $.cookie('view', 'grid');
              get_grid();
          });

          /* filter */
          $('.menuSwitch ul li').click(function(){
              var CategoryID = $(this).attr('category');
              $('.menuSwitch ul li').removeClass('cat-active');
              $(this).addClass('cat-active');

              $('.prod-cnt').each(function(){
                  if(($(this).hasClass(CategoryID)) == false){
                     $(this).css({'display':'none'});
                  };
              });
              $('.'+CategoryID).fadeIn();

          });
      });
    </script>
	<script src="js/jquery.singlePageNav.js"></script>

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
    <script>
      $(document).ready(function(){

        // hide #back-top first
        $("#back-top").hide();

        // fade in #back-top
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
              $('#back-top').fadeIn();
            } else {
              $('#back-top').fadeOut();
            }
          });

          // scroll body to 0px on click
          $('#back-top a').click(function () {
            $('body,html').animate({
              scrollTop: 0
            }, 800);
            return false;
          });
        });

      });
      </script>
      <script type="text/javascript">
      <!--
          function toggle_visibility(id) {
             var e = document.getElementById(id);
             if(e.style.display == 'block'){
                e.style.display = 'none';
                $('#togg').text('show footer');
            }
             else {
                e.style.display = 'block';
                $('#togg').text('hide footer');
            }
          }
      //-->
      </script>
      <script type="text/javascript" src="js/lib/jquery.mousewheel-3.0.6.pack.js"></script>

      <script type="text/javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
      </script>
      <script src="js/stickUp.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
          $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.mWrapper').stickUp();
          });
        });
      </script>
      <script>
     $('a.menu').click(function(){
    $('a.menu').removeClass("active");
    $(this).addClass("active");
	});
      </script>

      <script> <!-- scroll to specific id when click on menu -->
      	 // Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }
});
      </script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>
<!--
    Free Template by templatemo
    http://www.templatemo.com
-->