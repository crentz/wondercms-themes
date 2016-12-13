<!DOCTYPE html>
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

	<div id="titlu">
	
	<div id="logo" >
	<a href="./">
<img title="<?=$siteTitle?>" alt="<?=$siteTitle?>" src="./themes/pinky/images/logo.png" />
</a>
</div>
					
					
					<div id="meniu" class="border">
						<?=wCMS::navigation()?>
					</div>
					<div id="subside">
				<?=$subside?>
			</div>
			<div id="social">
			
			<p>Follow us on Social Media.</p>

<a href="http:// full link to your facebook page">
<img title="Facebook" alt="Facebook" src="./themes/pinky/images/facebook.png" width="57" height="57" />
</a>

<a href=" http:// pinterest address ">
<img title="Pinterest" alt="Pinterest" src="./themes/pinky/images/pinterest.png" width="57" height="57" />
</a>

<a href="http:// full link to your twitter">
<img title="Twitter" alt="Twitter" src="./themes/pinky/images/twitter.png" width="57" height="57" />
</a>

<a href="http:// full link to your instagram">
<img title="Instagram" alt="Instagram" src="./themes/pinky/images/instagram.png" width="57" height="57" />
</a>

<a href="mailto:[email address]">
<img title="Email" alt="Email" src="./themes/pinky/images/email.png" width="57" height="57" />
</a>




</div>
				</div>
				</header>
				<div id="desc">
<a href="./"><h1><?=$description?></h1></a></div>
					<div id="continut">
					
				<?=$content?>
			</div>
			

	<div id="foot">
		
			<p><?=wCMS::footer()?></p>
		</div>
	

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.autosize/3.0.17/autosize.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?=wCMS::js()?>
</body>
</html>