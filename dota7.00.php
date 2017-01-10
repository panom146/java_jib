<?php
    require ('steamauth/steamauth.php');  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Epoxidez-noober</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/Hover-master/css/hover.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Epoxidez</a>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="work.html">Work</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><?php
if(!isset($_SESSION['steamid'])) {
    
    loginbutton("rectangle");
  
  }  else {
    include ('steamauth/userInfo.php');

  
  ?>
  <span style="color: #ffffff;"><?=$steamprofile['personaname']?> 
  <img align="left" src='<?=$steamprofile['avatar']?>' style="margin: 5px;">&nbsp;&nbsp;
  <a href="logout.php" type="submit"  value="Sign Out" name="logout">
  <span class="glyphicon glyphicon-log-out"></span>
  
    </a>
   <?php
    }    
    ?>
    </div>
  </a>

  </span></li> 
          
          </ul>
       

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    
			
				<div class="col-lg-8 col-lg-offset-2">
    
    <p align="center"><img src="assets/img/dota7.00.jpg" alt="dota7.00" align="top"></p>
    <p>
     When the patch notes for 7.00 were released, many players thought life for supports was going to get significantly easier. Support heroes received interesting, new talents, some providing either a choice between extra Gold or XP.
    </p>
    <p> Moreover, lower level requirements, as well as Tome of Knowledge changes have made getting to these crucial levels a much simpler task. In turn, it should have created a more balanced support/core environment—with cores still being item dependant and no significant changes to the gold gains for the majority of core heroes, this meant that the period of relevance, or even dominance, for supports has increased.</p>
    <p>The reality, however, was not as definitive. Supports did not suddenly become more popular among the players and neither do they dominate the pubs. It certainly doesn’t mean that the role is less important, compared to cores, but the ability to reliably raise MMR with support heroes is still well within the domain of the selected few exceptional players.</p>
    <p>That said, the economy of support players has definitely improved. Compared to 6.88, the spread of the average GPM has tightened across heroes—on average, the highest earning heroes now earn 3% less Gold, while the poorest earn almost 4% more. The same, to an even higher extent, can be said about the XPM.</p>
    <p>The new flat GPM increase and XP gain talents are definitely helping with the support item and level progression, and in this case the stats definitely do not lie. But do these talents actually help the heroes win more games?</p>
    <h3>GPM AND RESPAWN TIME REDUCTION (RTR)</h3>
    <img src="assets/img/gpm.jpg" alt="GPM">
    <p>Looking at the table, it becomes almost obvious that in most cases the GPM talent loses to its counterpart. In fact, in almost 65% of all cases, taking GPM over the other benefit is a game-losing choice.</p>
    <p>Furthermore, in the majority of cases where taking GPM is a better alternative, it might not be the impact of the GPM increase itself, but rather the extremely low or even negative utility of the alternative, with the biggest culprit being the RTR, which consistently results in a higher chance of a loss</p>
    <p>On paper, the RTR sounds pretty good—spending less time dead means the hero has more time providing utility for the team or farming. In practice, especially in pubs, it frequently means that the hero simply has more chances to feed extra gold to the enemy team.</p>
    <p>In a typical game of Dota, the life expectancy of a support is rather low, especially if the hero respawns much earlier than the rest of his team after an unsuccessful fight and has no backup. Certain heroes with RTR might be able to delay the high ground push on their own, but once again, it puts their life at risk and you generally should not expect too much of a single support or utility hero in the later stages of the game.</p>
    <p>The RTR talents might shine in the competitive scene, however—higher degree of coordination and lower propensity to feed should be extremely helpful in this regard.</p>
	 <p>Returning to GPM, the only cases when these talents are a game winning choice, which is not supported by the negative RTR utility, is when they come early enough to matter. Getting a smaller amount of extra gold early in the game is always better than a larger increase in the later stages, because the talent is actually doing something for your hero for longer.</p>
   <p>However, the impact of these GPM talents is still rather small, with the highest comparative value of +1.2% for Ogre Magi, with the alternative being +100 Cast Range.</p>
   <p>Overall, the data for the GPM talents was certainly surprising—most players expected them to be significantly more impactful. However, as it stands, taking extra health, cooldown reduction, extra XP gain and even raw damage seems to be working better for the majority of players on the majority of heroes.</p>
   <h3>XPM</h3>
   <img src="assets/img/hero.jpg" alt="heroes">
   <p>Taking the extra experience gain talent means sacrificing an immediate gain in favor of a long-term benefit. Turns out—Dota really doesn’t work like that, with these talents showing even worse performance than the GPM ones. Only in 5 out of 24 cases is picking +XP gain justified and two of these cases are when the talent is compared to the RTR.</p>
   <p>The game has definitely sped up since the introduction of the patch. Snowballing has also become more of a problem, and trying to counter it with a late game investment is not an option, at least for pub players.</p>
   <p>In professional games, the “comeback Midas” was a concept that occasionally worked, and when you are losing, the +XP talents feel exactly like the “comeback Midas” pick-ups. Only in the competitive scene, the choice is generally made by a much more capable player and is often backed by a team composition, which can hold the high ground for the item to at least pay for itself.</p>
   <p>When you are winning, it is generally a “win more” option—you are not going to win more games by making this choice, but you are going to win them harder. In Dota, it doesn’t matter how you win—the only thing that matters is the destruction of the enemy Ancient. When trying to play reliably, it is almost always better to get the immediate advantage, however small, over the illusory late game gains.</p>
   <h3>THE LESSER OF TWO EVILS</h3>
   <p>Visage and Omniknight are unique, in a sense that they have mutually exclusive GPM and XPM talents. Interestingly, for Visage, taking the XPM is a better deal, whereas Omniknight benefits more from extra gold.</p>
   <p>Seeing how the Visage gameplay has been developing this last week-and-a-half, it is understandable—more and more frequently the hero has been picked as a core, rather than a support, which allows him to get to his Aghanim’s Scepter in a timely manner, regardless of the talent selection.</p>
   <p>Omniknight, on the other hand, really doesn’t need a lot of extra levels past level 10, since it allows the hero to have both of his defensive spells maxed out. The extra duration on the Guardian Angel does come into play, and levels are still important for the hero, but definitely not as important as getting a timely Mekansm, potential manapool increasing items and Aether Lens.</p>
   <h3>CLOSING THOUGHTS</h3>
   <p>Talent trees are a major addition to Dota. They improve gameplay, making it more complex, and level the playing field in the later stages of the game, by offering unique upgrades. While, naturally, there is a certain amount of imbalance still present, it is still an overall positive change.</p>
   <p>Understanding which talents are a better fit for the current situation will probably take the same amount of practice, as was once required for learning all the items and their appropriate use. The aggregate data should certainly help facilitate the process of learning and highlight the definitive outliers, however, as with everything aggregate, some degree of caution is required with the evaluation.</p>
   <p>Understanding which talents are a better fit for the current situation will probably take the same amount of practice, as was once required for learning all the items and their appropriate use. The aggregate data should certainly help facilitate the process of learning and highlight the definitive outliers, however, as with everything aggregate, some degree of caution is required with the evaluation.</p>
   <p>The information discussed above was based on data from the first week of the patch—a relatively small sample size, especially for game like Dota. While the trends are likely to continue, some changes to the balance, even the ones not directly related to the talents in question, might have a significant impact on their utility.</p>
   <p>Understanding which talents are a better fit for the current situation will probably take the same amount of practice, as was once required for learning all the items and their appropriate use. The aggregate data should certainly help facilitate the process of learning and highlight the definitive outliers, however, as with everything aggregate, some degree of caution is required with the evaluation.</p>


	</div><!-- /ww -->


	<!-- +++++ Projects Section +++++ -->

	<div class="container pt">
	
	</div><!-- /container -->


	<!-- +++++ Footer Section +++++ -->

	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>Contact us and we'll get back to you within 24 hours.</h4>
					<p><span class="glyphicon glyphicon-map-marker"></span> Khonkaen, TH</p>
          <p><span class="glyphicon glyphicon-phone"></span> 096-5105260</p>
          <p><span class="glyphicon glyphicon-envelope"></span>  jakkrapan051@gmail.com</p>
				</div><!-- /col-lg-4 -->

				<div class="col-lg-4">
					<h4>My Links</h4>
					<p>
						<p><a href="https://plus.google.com/101446976929005628826" class="Link_bottom"><img  class="size_socialpicture hvr-grow-shadow" src="assets/img/googleplus.png" alt ="googleplus">Google+</a><br/></p>
						<p><a href="http://steamcommunity.com/id/kukkaaa/" class="Link_bottom"><img class="size_socialpicture hvr-grow-shadow" src="assets/img/steam.png" alt="Steam">Steam</a><br/></p>
						<p><a href="https://www.facebook.com/JIBJEETHSF" class="Link_bottom"><img class="size_socialpicture hvr-grow-shadow" src="assets/img/facebook500.png" alt="Facebook">Facebook</a></p>
					</p>
				</div><!-- /col-lg-4 -->

				<div class="col-lg-4">
					<h4>Comment me ty</h4>
            <div class="row">
					 <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
				</div><!-- /col-lg-4 -->

			</div>

		</div>
	</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
