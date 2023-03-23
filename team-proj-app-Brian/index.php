<?php
//start session
session_start();

//require config.php
require_once("config.php");

//check if user session doesn't exist
if (!isset($_SESSION['user'])) {
    //redirect to login page
    header("Location: login.html");
}

//get user session data
$username = $_SESSION['user'];

//connect to the database
$connection = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

//check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// prepare the query, select session where userID = users.userID
$sql = "SELECT users.first_name, users.last_name, sessions.*
    FROM users
    JOIN sessions ON users.user_id = sessions.user_id
    WHERE users.username = '$username'";

// execute the query
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>My Cricket Sessions</title>


</head>

<body>
    <h1>Welcome,
        <?php echo $username; ?>!
    </h1>
    <table border='1' class='full-width'>
        <tr>
            <th>Session ID</th>
            <th>Session Start</th>
            <th>Session End</th>
            <th>Balls Bowled</th>
            <th>Balls Hit</th>
            <th>Hit Percentage</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <?php $hitPercentage = $row['balls_hit'] / $row['balls_bowled'] * 100; ?>
                <td>
                    <?php echo $row['session_id']; ?>
                </td>
                <td>
                    <?php echo $row['session_start']; ?>
                </td>
                <td>
                    <?php echo $row['session_end']; ?>
                </td>
                <td>
                    <?php echo $row['balls_bowled']; ?>
                </td>
                <td>
                    <?php echo $row['balls_hit']; ?>
                </td>
                <td>
                    <?php echo $hitPercentage; ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <?php
    //prepare the query to get the summary data
    $sql = "SELECT COUNT(session_id) AS totalSessions, SUM(TIMESTAMPDIFF(SECOND, session_start, session_end)) AS totalTimePlayed, SUM(balls_bowled) AS totalBallsBowled, SUM(balls_hit) AS totalBallsHit
    FROM sessions
    JOIN users ON users.user_id = sessions.user_id
    WHERE users.username = '$username'";

    // execute the query
    $result = $connection->query($sql);

    // fetch the summary data
    $summary = mysqli_fetch_array($result);

    // assign summary data to variables
    $totalSessions = $summary['totalSessions'];
    $totalTimePlayed = $summary['totalTimePlayed'];
    $totalBallsBowled = $summary['totalBallsBowled'];
    $totalBallsHit = $summary['totalBallsHit'];
    $overallHitPercentage = $totalBallsHit / $totalBallsBowled * 100;


    ?>

    <table border='1' class='full-width'>
        <tr>
            <th>Total Sessions</th>
            <th>Total Time Played</th>
            <th>Total Balls Bowled</th>
            <th>Total Balls Hit</th>
            <th>Overall Hit Percentage</th>
        </tr>
        <tr>
            <td>
                <?php echo $totalSessions; ?>
            </td>
            <td>
                <?php echo gmdate("H:i:s", $totalTimePlayed); ?>
            </td>
            <td>
                <?php echo $totalBallsBowled; ?>
            </td>
            <td>
                <?php echo $totalBallsHit; ?>
            </td>
            <td>
                <?php echo $overallHitPercentage . '%'; ?>
            </td>
        </tr>
    </table>


    <p><a href="sessioninput.html">Add a new session</a></p>

</body>

</html>

<?php
//close connection
$connection->close();
?>