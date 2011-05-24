<?php
    require_once('calendar/classes/tc_calendar.php');

    $pID=$_GET['pID'];
    require_once('pool_stats.php');

    include('header.php');
?>
    <div class="inner-container">
        <div class="left-box">
            <h2><?php echo($username); ?>'s Baby Pool</h2>
            <br />
            <a href="guess.php?pID=<?php $pID ?>">Make A Guess</a>
        </div>
        <div class="right-box">
            <center><h3>53% Boy</h3>&nbsp;&nbsp;&nbsp;<h3>47% Girl</h3></center>
            <p>Earliest Due Date: May 5, 2011</p>
            <p>Latest Due Date: July 23, 2011</p>
            <p>Tiniest Baby: 5lbs 6oz</p>
            <p>Biggest Baby: 10lbs 6oz</p>
        </div>
        <div class="clear"></div>
        <div class="left-box">
            <h3>Guesses</h3>
            <hr />
            <?php
                while($row = mysql_fetch_array($result)) {
                    print "<b>".$row['name']."</b>" . " guessed " . "<b>". $row['guess_sex']. "</b> weighing ". "<b>".$row['guess_weight']. " lbs "." oz </b>" . "born on <b> ".$row['guess_date']."</b>";
                    echo "<br />";
                }
            ?>
        </div>
        <div class="right-box">
            <h3>Guest Book</h3>
            <form action="submit_comment.php" method="post">
            <textarea rows="3" cols="42" name="comment"></textarea>
            <input type="submit" value="Add Comment">
            <hr />
        </div>
    </div>

<?php include('footer.php'); ?>
