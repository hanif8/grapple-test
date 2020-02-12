<?php require_once('partials/header.php'); ?>

<main>
	<div class="container" id="barba-wrapper">
		<div class="left">
	       <div class="inner-bar">
	          	<div class="block active">
					<div class="inner">
				        <p>From</p>
   						<p class="text">
							London
							Kings Cross
							<span>KGX</span>
						</p>
				        <?php echo file_get_contents("app/img/icons/icon-1.svg"); ?>
					</div>
	          	</div>
	          	<div class="block">
					<div class="inner">
						<p>To</p>
   						<p class="text">
							Wakefield
							Westgate
							<span>WKF</span>
						</p>
        				<?php echo file_get_contents("app/img/icons/icon-2.svg"); ?>
					</div>
	          	</div>
	          	<div class="block">
					<div class="inner">
						<p>When</p>
   						<p class="text">
							Oct.09<br>
							12.30am
						</p>
    					<?php echo file_get_contents("app/img/icons/icon-3.svg"); ?>
					</div>
	          	</div>
	          	<div class="block">
					<div class="inner">
						<p>Who</p>
						<p class="text">2 Adults</p>
        				<?php echo file_get_contents("app/img/icons/icon-4.svg"); ?>
					</div>
	          	</div>
	          	<div class="block extra">
					<div class="inner">
						<p>Extras</p>
						<p class="text">None</p>
        				<?php echo file_get_contents("app/img/icons/icon-5.svg"); ?>
					</div>
	          	</div>
	          	<div class="block">
					<div class="inner">
						<p>Your Ticket</p>
	    				<?php echo file_get_contents("app/img/icons/icon-6.svg"); ?>
					</div>
	          	</div>
	        </div>
		</div>
		<div class="right barba-container">
	        <div class="content">
	          <p>START YOUR JOURNEY</p>
	          <h1>Where would<br>you like to go?</h1>
	          <form action="#" id="search">
	            <input type="text" placeholder='Station or location'>
	            <input type="submit" value="submit">
	          </form>
	        </div>
		</div>
	</div>
</main>

<?php require_once('partials/footer.php'); ?>