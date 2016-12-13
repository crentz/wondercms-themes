<!Doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$siteTitle?> - <?=$title?></title>
	<meta name="description" content="<?=$description?>">
	<meta name="keywords" content="<?=$keywords?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=wCMS::asset('css/style.css')?>">
	<?=wCMS::css()?>

</head>

<body>
<?=wCMS::displayMessages()?>
	<?=wCMS::settings()?>
	<header>
	<div id="menu" >
	
<img title="<?=$siteTitle?>" alt="<?=$siteTitle?>" src="./themes/parallax/css/images/logo.png" />
	<ul>
			<li><a href="#desc">Start</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#Social">Social</a></li>
			<li><a href="#Contact">Contact</a></li>
			</ul>
			</div>
		
			
			
		
			
		
		<div id="desc">
	
		
		<?=$siteTitle?>
		</div>
			</header>
			
		
<div id="about" >
<?=$content?>
		</div>
		
		
		
		
		
		
		
<div id="services" >

<div id="stitle">
<h3 class="text-left">Our Services</h3> <hr />
</div>
		
	<div id="side" >
	
			<h4>Service 1</h4>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>

	</div>
	<div id="side2" >
			<h4>Service 2</h4>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>

	</div>
	<div id="side3" >
			<h4>Service 3</h4>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
	</div>
	</div>
	
	
	
	<div id="Social" >
	<div id="side4" >
			<h3 class="text-left">Follow us on Social Media</h3> <hr />

<a href="http:// full link to your facebook page">
<img title="Facebook" alt="Facebook" src="./themes/parallax/css/images/facebook.png" width="80" height="80" />
</a>
-
<a href=" http:// pinterest address ">
<img title="Pinterest" alt="Pinterest" src="./themes/parallax/css/images/pinterest.png" width="80" height="80" />
</a>
-
<a href="http:// full link to your twitter">
<img title="Twitter" alt="Twitter" src="./themes/parallax/css/images/twitter.png" width="80" height="80" />
</a>
-
<a href="http:// full link to your instagram">
<img title="Instagram" alt="Instagram" src="./themes/parallax/css/images/instagram.png" width="80" height="80" />
</a>
-
<a href="mailto:[email address]">
<img title="Email" alt="Email" src="./themes/parallax/css/images/email.png" width="80" height="80" />
</a>

	</div>
	</div>
	
	<div id="Contact">
	<div id="side5" >
			<?=$subside?>
		
	</div>
	<div id="up">
	<a href="#desc"><img title="Back to Top" alt="Back to Top" src="./themes/parallax/css/images/top.png" width="80" height="80" align="center" />
	</div>
	</div>
	<footer>

	
	<p> <?=wCMS::footer()?> designed by <a href="https://wondercms.com/forum/memberlist.php?mode=viewprofile&u=847">wdq</a></p>
	
	</footer>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<!-- SMOOTH SCROLL -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
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
<!-- End of SMOOTH SCROLL -->
	<script src="https://cdn.jsdelivr.net/jquery.autosize/3.0.17/autosize.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?=wCMS::js()?>
	
</body>
</html>