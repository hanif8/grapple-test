<?php require_once('partials/header.php'); ?>

<main>
	<div class="container">
	      <div class="left">
	        <div class="inner-bar t-page">
	          	<div class="block">
					<div class="inner">
        				<p>From</p>
   						<p class="text">
							London
							Kings Cross
							<span>KGX</span>
						</p>
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
					</div>
	          	</div>
	          	<div class="block">
					<div class="inner">
						<p>When</p>
   						<p class="text">
							Oct.09<br>
							12.30am
						</p>
					</div>
	          	</div>
	          	<div class="block">
					<div class="inner">
						<p>Who</p>
						<p class="text">2 Adults</p>
					</div>
	          	</div>
	          	<div class="block extra">
					<div class="inner">
						<p>Extras</p>
						<p class="text">None</p>
					</div>
	          	</div>
	          	<div class="block active">
					<div class="inner">
						<p>Your Ticket</p>
						<?php echo file_get_contents("app/img/icons/icon-6.svg"); ?>
					</div>
	          	</div>
	        </div>
	      </div>
	      <div class="right">
	        <div class="scroll-section">
    		  <div class="show-all">
				Show All Fares
    		  </div>
	          <div class="ticket">
	          	<p class="recommend">Our recommended ticket</p>
	            <div class="info">
	              <p>13:58 - 16:00</p>
	              <p>£102.00</p>
	            </div>
	            <div class="info-lower">
	              <p>2:01hrs</p>
	              <a href="#" class="buy">Buy</a>
	            </div>
	          </div>
	        </div>
	        <div class="map">
	          <iframe src="https://api.mapbox.com/styles/v1/haych8/ck6gsrei73ll81imtncs8jk9v.html?fresh=true&title=view&access_token=pk.eyJ1IjoiaGF5Y2g4IiwiYSI6ImNrNmdzZ3huaDBjeGIzb2s2M3p0bGY3ZngifQ.A6y356QVGk6iBpevCnufGw" frameborder="0"></iframe>
	        </div>
	      </div>
	    </div>
</main>

<?php require_once('partials/footer.php'); ?>