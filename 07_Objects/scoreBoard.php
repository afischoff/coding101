<html>
<head>
	<title>Scoreboard Object Example</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			font-family: Arial, Verdana, Helvetica, Geneva, sans-serif;
		}
		.homeScore, .visitorScore, .gameOverMessage {
			font-size: 24px;
			font-weight: bold;
		}
		.red {
			color: red;
		}
	</style>

	<!-- Load jQuery and the Scoreboard class -->
	<script src="js/jquery.min.js"></script>
	<script src="js/Scoreboard.js"></script>

	<script type="text/javascript">
		// when the page is fully loaded, create and initialize the myScoreboard instance of the Scoreboard class
		var myScoreboard = null;
		$(document).ready(function()
		{
			myScoreboard = new Scoreboard('scoreboardDiv');
			myScoreboard.init();
		});
	</script>
</head>
<body>

<!-- Display for the scoreboard -->
<div id="scoreboardDiv" style="width: auto; text-align: center;">
	<h1>Scoreboard Object Example</h1>
	<h1 class="timer"></h1>
	<div style="width: auto;">
		<div style="float: left;">
			<span class="homeScore red"></span>
			<p>Home</p>
		</div>

		<div style="float: right;">
			<span class="visitorScore red"></span>
			<p>Visitor</p>
		</div>
	</div>
	<p class="gameOverMessage red"></p>
</div>

<br clear="all">
<hr>

<!-- scoreboard controls -->
<div style="padding-top:20px;">
	Enter Time: <input id="newTime" placeholder="00:00"> <button onclick="myScoreboard.setTimer($('#newTime').val())">Set Timer</button>
	<p>
		<button onclick="myScoreboard.startTimer()">Start Timer</button>
		<button onclick="myScoreboard.stopTimer()">Stop Timer</button>
		<button onclick="myScoreboard.resetTimer()">Reset Timer</button>
	</p>
	<p>
		<button onclick="myScoreboard.incrementScore('home')">Increment Home Score</button> <button onclick="myScoreboard.incrementScore('visitor')">Increment Visitor Score</button>
	</p>
	<p>
		<button onclick="myScoreboard.resetScore()">Reset Score</button>
	</p>
</div>

</body>
</html>