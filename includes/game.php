<section class="screen game-screen">
	<div class="screen-contents">
		<!-- stats bar -->
		<div class="stats-bar">
			<div class="stat">
				<div class="name">Time: </div>
				<div class="data time-left" id="timer"></div>
			</div>
			<div class="stat">
				<div class="name">Wrong Guesses: </div>
				<div class="data guesses-left"></div>
			</div>
		</div>

		<!-- gallows -->
		<div class="gallows">
		    <div class="pole noose"></div>
		    <div class="pole top"></div>
		    <div class="pole side"></div>
		    <div class="pole bottom"></div>

		    <div class="body-part head"></div>
		    <div class="body-part body"></div>
		    <div class="body-part lt-arm"></div>
		    <div class="body-part rt-arm"></div>
		    <div class="body-part lt-leg last-leg"></div>
		    <div class="body-part rt-leg"></div>
		</div>

		<!-- word reveal -->
		<div class="word-reveal">
		    <div class="placeholder"></div>
		</div>

		<!-- guess -->
		<form class="guess-input" action="#">
		    <input class="letter" type="text" maxlength="1">
		</form>

		<!-- wrong guesses: strikes -->
		<div class="strikes"></div>

		<!-- instructions -->
		<div class="instructions">
			<p>Type a letter to guess.</p>
			<p>(If it's not working, click on the screen and try again.)</p>
		</div>
	</div>
</section>
