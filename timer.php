<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset=utf-8>
		<link rel="stylesheet" type="text/css" href="css/timer.css" />
		<link rel="stylesheet" type="text/css" href="css/timerwatch.css" />
		<link href="http://fonts.googleapis.com/css?family=Play" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Nova Square" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Fondamento" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.countdown.pack.js"></script>
<link rel="stylesheet" href="assets/css/space.css" type="text/css">
		<script type="text/javascript">
			$(function () {
			$('#countdown').countdown({until:$.countdown.UTCDate(-8, 2014,  2 - 1, 1), format: 'DHMS', layout: 
									  '<div id="timer">' +
										  '<div id="timer_days" class="timer_numbers">{dnn}</div>'+
										  '<div id="timer_hours" class="timer_numbers">{hnn}</div>'+ 
										  '<div id="timer_mins" class="timer_numbers">{mnn}</div>'+
										  '<div id="timer_seconds" class="timer_numbers">{snn}</div>'+
										'<div id="timer_labels">'+
											'<div id="timer_days_label" class="timer_labels">days</div>'+
											'<div id="timer_hours_label" class="timer_labels">hours</div>'+
											'<div id="timer_mins_label" class="timer_labels">mins</div>'+
											'<div id="timer_seconds_label" class="timer_labels">secs</div>'+
										'</div>'+
									'</div>'
									  
			});
			});
		</script>

	</head>
	<body>
		<p id="universe">
			<span id="fog"></span>
			<span id="fog-2"></span>
			<span id="glow"></span>
			<span id="light"></span>
			<span id="stars"></span>
			<span id="stars-2"></span>
			<span id="small-stars"></span>
			<span id="small-stars-2"></span>
		</p>
			<div id="container">
				<div id="nakFooterContent">
					NAKSHATRA'12
				</div>
				<div id="nit">
					<span>National Institute Of Technology,Calicut</span>
				</div>
				<div id="wrapper">
					<div id="countdown"></div>
				</div>
			</div>
				<div id="footer">
					<div id="nakWrapperFooter">
						<div id="footerleft">
							<p class="footer">© 2012 NAKSHATRA. All Rights Reserved.</p>
						</div>
						<div id="footerright">
							<p class="footer"></p>
						</div>
					</div>
				</div>
	</body>
</html>
