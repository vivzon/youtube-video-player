<? require"libs/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Viral Hub - UTPlayer</title>
    <meta charset="utf-8">
    <meta name="referrer" content="always">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="img/logo.png" sizes="180x180">
    <link rel="icon" href="img/logo.png" sizes="32x32" type="image/png">
    <link rel="icon" href="img/logo.png" sizes="16x16" type="image/png">
    <link rel="icon" href="img/logo.png">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://vivzon.in/tools/UTPlayer/">
    <meta property="og:title" content="Viral Hub - UTPlayer">
    <meta property="og:description" content="Introducing the ultimate tool for viral YouTube video success! With our powerful meta description generator, you can create compelling descriptions for your videos that grab the attention of viewers and boost your views. Our tool provides a range of customizable templates and keyword suggestions to help you optimize your meta descriptions for maximum visibility and engagement. Say goodbye to lackluster descriptions and hello to viral success with our YouTube meta description tool!">
    <meta property="og:image" content="img/ytplay-banner.png">
    
    <!-- Facebook -->
    <meta property="og:site_name" content="Sellvell Marketplace">
    <meta property="og:image:url" content="img/ytplay-banner.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">
    <!--Find your destination in your business area through the sellvell directory-->
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://vivzon.in/tools/UTPlayer/">
    <meta property="twitter:title" content="Viral Hub - UTPlayer">
    <meta property="twitter:description" content="Introducing the ultimate tool for viral YouTube video success! With our powerful meta description generator, you can create compelling descriptions for your videos that grab the attention of viewers and boost your views. Our tool provides a range of customizable templates and keyword suggestions to help you optimize your meta descriptions for maximum visibility and engagement. Say goodbye to lackluster descriptions and hello to viral success with our YouTube meta description tool!">
    <meta property="twitter:image" content="img/ytplay-banner.png">
    
    <!--Basic Info -->
    <meta name="description" content="Introducing the ultimate tool for viral YouTube video success! With our powerful meta description generator, you can create compelling descriptions for your videos that grab the attention of viewers and boost your views. Our tool provides a range of customizable templates and keyword suggestions to help you optimize your meta descriptions for maximum visibility and engagement. Say goodbye to lackluster descriptions and hello to viral success with our YouTube meta description tool!">
    <meta name="keywords" content="how to viral video on youtube,how to go viral on youtube,how to find viral tags for youtube video,how to viral short video on youtube,how to make a youtube video go viral,video viral kaise kare,how to make viral videos on youtube,how to go viral,how to make a viral video,how to viral youtube video,how to make a video go viral on youtube,how to make a video go viral,youtube shorts video viral kaise kare,how to find best tags for youtube videos">
    <meta name="image" content="img/ytplay-banner.png">
    <meta name="author" content="Vivek Raj">
    <meta name="docsearch:language" content="en">
    <meta name="docsearch:version" content="1.0">
    <meta name="theme-color" content="#f1342e">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        
        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
    </style>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157867332-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-157867332-1');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5398572989442322" crossorigin="anonymous"></script>
    
</head>
<body>

<nav class="navbar navbar-expand-sm bg-danger navbar-danger">
    <div class="container">
        <a class="navbar-brand font-weight-bold text-white" href="/tools/UTPlayer/">UTPlayer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/tools/UTPlayer/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/tools/UTPlayer/">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="/tools/UTPlayer/">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="/tools/UTPlayer/">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="/tools/UTPlayer/">My Account</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-3">
    
    <div class="row">
        
        <div class="col-md-4 offset-md-4 text-center">
            
            <div id="UTPlayerarea"></div>
            
            <div class="overlay"></div>
            
            <input type="hidden" id="playid" value="<?php echo $output; ?>">
            
        </div>
        
        <div class="col-md-4 offset-md-4 mt-3 text-center">
           
            <div class="row">
                
                <div class="col">
                    <span class="alert alert-primary alert-sm d-block p-2"><?php echo $_SESSION['views']; ?> Video Watched</span>
                </div>
                
                <div class="col" id="nxtbtn" style="display:none;">
                    <a href="/tools/UTPlayer/?id=1<?php echo $output.$_SESSION['views']; ?>" class="btn btn-danger w-100 p-2">Next</a>
                </div>
                
            </div>
           
        </div>
        
        <div class="col-md-4 offset-md-4">
            
           <p>यदि आप अपने वीडियो लिंक को हमारे प्लेटफॉर्म पर जोड़ना चाहते हैं तो 3 वीडियो देखें। इसके बाद आपको वीडियो जोड़ने का विकल्प मिलेगा वहां आप  अपने वीडियो का लिंक सबमिट कर पाओगे |</p>
           <p>Watch 3 videos if you want to add your video link to our platform. After this you will get the option to add video, there you will be able to submit the link of your video.</p>
            
        </div>
        <?php if($_SESSION['views']>4){ ?>
        <div class="col-md-4 offset-md-4 mb-4" id="frm">
            
            <h3>Submit your link</h3>
            
            <form action="send.php" method="post">
                
                <div class="form-group mb-3">
                    <label>Youtube Link:</label>
                    <input type="url" name="ulink" class="form-control" placeholder="Write your link here" required>
                </div>
                
                <div class="form-group mb-3" <?php if(!empty($_SESSION['mob'])){ ?>style="display:none;"<?php } ?>>
                    <label>Mobile No.:</label>
                    <input type="number" name="unb" maxlength="10" class="form-control" placeholder="Enter your mobile n." value="<?php echo $_SESSION['mob']; ?>" style="-webkit-appearance: none;" required>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
                
                <?php $res = $_SESSION['res']; $subres = json_decode($res, true); if($_SESSION['res']!='Done'){ ?>
                <div class="response">
                    <?php if($subres['success']=='true'){ ?>
                        <span class="alert alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <?php echo $subres['msg']; ?>
                        </span>
                    <?php }else{ ?>
                        <span class="alert alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <?php echo $subres['msg']; ?>
                        </span>
                    <?php } ?>
                </div>
                <?php $_SESSION['res']='Done'; } ?>
            </form>
            
        </div>
        <?php } ?>
    </div>

	<script>
	    // Load the YouTube API
		var video_id = document.getElementById("playid").value;
		
		//alert(video_id);
		var tag = document.createElement('script');
		tag.src = 'https://www.youtube.com/iframe_api';
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

		// Create the player object with autoplay
		var player;
		function onYouTubeIframeAPIReady() {
			player = new YT.Player('UTPlayerarea', {
				height: '280',
				width: '100%',
				videoId: video_id,
				playerVars: {
					'autoplay': 1, // Set autoplay to 1 to start playing the video automatically
				},
				events: {
					'onReady': onPlayerReady,
					'onStateChange': onPlayerStateChange
				}
			});
		}

		// Start playing the video when the player is ready
		function onPlayerReady(event) {
			event.target.playVideo();
		}
		
		function onPlayerStateChange(event) {
			// Do something when the video is finished
			if (event.data == YT.PlayerState.ENDED) {
                window.location.href="/tools/UTPlayer/?id=1"+video_id+'<?php echo $_SESSION['views']; ?>';
			}
		}
		
		/*function onPlayerStateChange(event) {
			if (event.data == YT.PlayerState.PLAYING) {
				console.log('Video is playing');
			}
		}*/
		
		$(function() {
            setInterval(function() {
                $('#nxtbtn').css('display','block');
            }, 60000);
        });
	</script>
</div>

</body>
</html>
