<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Circular Navigation - Demo 1 | Codrops</title>
		<meta name="description" content="Circular Navigation Styles - Building a Circular Navigation with CSS Transforms | Codrops " />
		<meta name="keywords" content="css transforms, circular navigation, round navigation, circular menu, tutorial" />
		<meta name="author" content="Sara Soueidan for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component1.css" />
		<script src="js/modernizr-2.6.2.min.js"></script>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7243260-2']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/CreativeLinkEffects/"><span>Previous Demo</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16114"><span>Back to the Codrops Article</span></a></span>
			</div>
			<header>
				<h1>Circular Navigation <span>Building a Circular Navigation with CSS Transforms</span></h1>	
				<nav class="codrops-demos">
					<a class="current-demo" href="index.html">Demo 1</a>
					<a href="index2.html">Demo 2</a>
					<a href="interactivedemo/index.html">Intractive demo</a>
				</nav>
			</header>
			<section>
				<p>Soko leek tomatillo quandong winter purslane caulie jícama daikon dandelion bush tomato. Daikon cress amaranth leek cabbage black-eyed pea kakadu plum scallion watercress garbanzo gram caulie welsh onion water spinach tomatillo groundnut desert raisin. Wakame salsify bunya nuts spring onion lotus root prairie turnip fennel onion dandelion black-eyed pea bok choy zucchini taro. Jícama collard greens amaranth bell pepper catsear brussels sprout sweet pepper daikon spring onion aubergine broccoli rabe quandong mustard celery corn groundnut peanut. Mung bean fennel eggplant water spinach bunya nuts sierra leone bologi epazote okra caulie groundnut black-eyed pea parsnip fava bean squash.</p>
				<p>Parsnip tomatillo swiss chard garbanzo gourd potato silver beet. Celery swiss chard melon zucchini arugula pea quandong beet greens radish artichoke black-eyed pea endive winter purslane horseradish garlic amaranth collard greens chickpea. Rock melon pumpkin collard greens celery broccoli rabe endive nori brussels sprout gourd courgette sea lettuce artichoke desert raisin coriander chard.</p>
				<p>Collard greens ricebean horseradish wattle seed chard epazote potato peanut gram earthnut pea spinach yarrow desert raisin salad mung bean summer purslane fennel. Water spinach celery cucumber grape cauliflower nori daikon sweet pepper endive lentil turnip greens catsear leek beet greens. Melon seakale parsnip soybean bamboo shoot fennel scallion. Coriander groundnut squash corn aubergine bitterleaf azuki bean dandelion courgette broccoli rabe. Chickweed salsify chickweed groundnut nori okra lentil water spinach rock melon broccoli. Soko leek tomatillo quandong winter purslane caulie jícama daikon dandelion bush tomato. Daikon cress amaranth leek cabbage black-eyed pea kakadu plum scallion watercress garbanzo gram caulie welsh onion water spinach tomatillo groundnut desert raisin. Wakame salsify bunya nuts spring onion lotus root prairie turnip fennel onion dandelion black-eyed pea bok choy zucchini taro. Jícama collard greens amaranth bell pepper catsear brussels sprout sweet pepper daikon spring onion aubergine broccoli rabe quandong mustard celery corn groundnut peanut. Mung bean fennel eggplant water spinach bunya nuts sierra leone bologi epazote okra caulie groundnut black-eyed pea parsnip fava bean squash.</p>
				<p>Parsnip tomatillo swiss chard garbanzo gourd potato silver beet. Celery swiss chard melon zucchini arugula pea quandong beet greens radish artichoke black-eyed pea endive winter purslane horseradish garlic amaranth collard greens chickpea. Rock melon pumpkin collard greens celery broccoli rabe endive nori brussels sprout gourd courgette sea lettuce artichoke desert raisin coriander chard.</p>
				<p>Collard greens ricebean horseradish wattle seed chard epazote potato peanut gram earthnut pea spinach yarrow desert raisin salad mung bean summer purslane fennel. Water spinach celery cucumber grape cauliflower nori daikon sweet pepper endive lentil turnip greens catsear leek beet greens. Melon seakale parsnip soybean bamboo shoot fennel scallion. Coriander groundnut squash corn aubergine bitterleaf azuki bean dandelion courgette broccoli rabe. Chickweed salsify chickweed groundnut nori okra lentil water spinach rock melon broccoli.</p>
			</section>
			<div class="component">
				<!-- Start Nav Structure -->
				<button class="cn-button" id="cn-button">+</button>
				<div class="cn-wrapper" id="cn-wrapper">
				    <ul>
				      <li><a href="#"><span class="icon-picture"></span></a></li>
				      <li><a href="#"><span class="icon-headphones"></span></a></li>
				      <li><a href="#"><span class="icon-home"></span></a></li>
				      <li><a href="#"><span class="icon-facetime-video"></span></a></li>
				      <li><a href="#"><span class="icon-envelope-alt"></span></a></li>
				     </ul>
				</div>
				<div id="cn-overlay" class="cn-overlay"></div>
				<!-- End Nav Structure -->
			</div>
		</div><!-- /container -->
		<script src="js/polyfills.js"></script>
		<script src="js/demo1.js"></script>
		<!-- For the demo ad only -->   
<script src="http://tympanus.net/codrops/adpacks/demoad.js"></script>
	</body>
</html>

