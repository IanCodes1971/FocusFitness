<?php
// Connect to your database. Replace these values with your actual database credentials.
$servername = "localhost";
$username = "workoutapp";
$password = "focusfitness";
$dbname = "workout_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch workouts from the database
$sql = "SELECT * FROM workouts";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Workouts</title>
    <link rel="stylesheet" type="text/css" href="FitnessPrimeStyles.css">
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
<header>
    <h1>Workouts</h1>
</header>

<div id="mainContent">
    <div id="workouts">
        <h2>All Workouts</h2>
        <ul>
            <?php
            // Output each workout as a list item
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li>" . $row["workout_name"] . "</li>";
                }
            } else {
                echo "No workouts found";
            }
            ?>
        </ul>
    </div>
</div>

<footer>
    <p>&copy; Rob Hartigan, Tyler Lambert, Ian Cassini</p>
    <p>For help call 585-385-8022 or email FocusFitness.help@gmail.com</p>
</footer>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
