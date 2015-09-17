// new Scoreboard class
var Scoreboard = function(containerId) {

	// scoreboard display variables
	this.container = $('#' + containerId);
	this.timerContainer = $(this.container).find('.timer');
	this.homeScoreContainer = $(this.container).find('.homeScore');
	this.visitorScoreContainer = $(this.container).find('.visitorScore');
	this.gameOverMessageContainer = $(this.container).find('.gameOverMessage');

	// scoreboard data variables
	this.currentTime = 0;
	this.homeScore = 0;
	this.visitorScore = 0;
	this.timerProcess = null;

	this.init = function()
	{
		this.setTimer("00:00");
		$(this.homeScoreContainer).text(this.homeScore);
		$(this.visitorScoreContainer).text(this.visitorScore);
	};

	this.setTimer = function(timeAsString)
	{
		// convert hours:minutes into total seconds
		var timeParts = timeAsString.toString().split(":");
		var totalTime = (parseInt(timeParts[0]) * 60) + parseInt(timeParts[1]);

		// store the time for use later
		this.currentTime = totalTime;
		this.renderTimer();
	};

	this.renderTimer = function()
	{
		// convert total seconds to minutes and seconds
		var minutes = parseInt(this.currentTime / 60);
		var seconds = parseInt(this.currentTime - (minutes * 60));

		// format with leading 0s
		if (minutes < 10) {
			minutes = "0" + minutes.toString();
		}

		if (seconds < 10) {
			seconds = "0" + seconds.toString();
		}

		// set the time in the UI
		$(this.timerContainer).text(minutes + ":" + seconds);
	};

	this.startTimer = function()
	{
		// set a timer to call decrementTimer() every second
		if (this.currentTime > 0) {
			var _this = this;
			this.timerProcess = setInterval(function()
			{
				_this.decrementTimer();
			}, 1000);

		} else {
			alert('Please set the timer first!');
		}
	};

	this.decrementTimer = function()
	{
		// reduce the total time by 1 second and render to UI
		this.currentTime--;
		this.renderTimer();

		// special actions when the timer hits 0
		if (this.currentTime == 0) {

			// stop the timer
			this.stopTimer();

			// sound the buzzer!
			this.playSound('buzzer.mp3');

			// display the winner
			if (this.homeScore > this.visitorScore) {
				$(this.gameOverMessageContainer).text('Hooray! The home team won!');

			} else if (this.visitorScore > this.homeScore) {
				$(this.gameOverMessageContainer).text('Boo! The visiting team won.');

			} else {
				$(this.gameOverMessageContainer).text('It was a tie! Let\'s rematch!');
			}
		}
	};

	this.stopTimer = function()
	{
		window.clearInterval(this.timerProcess);
	};

	this.resetTimer = function()
	{
		this.stopTimer();
		this.setTimer("00:00");
	};

	this.incrementScore = function(homeOrVisitor)
	{
		// increment the correct score and play a silly sound
		if (homeOrVisitor == "home") {
			this.homeScore++;
			this.playSound('cheering.mp3');
		} else {
			this.visitorScore++;
			this.playSound('booing.mp3');
		}

		// update UI
		this.renderScore();
	};

	this.renderScore = function()
	{
		$(this.homeScoreContainer).text(this.homeScore.toString());
		$(this.visitorScoreContainer).text(this.visitorScore.toString());
	};

	this.resetScore = function()
	{
		this.homeScore = 0;
		this.visitorScore = 0;
		$(this.gameOverMessageContainer).text("");
		this.renderScore();
	};

	this.playSound = function(mp3File)
	{
		// play sound fom mp3 file
		var audio = new Audio("sounds/" + mp3File);
		audio.play();
	};
};
