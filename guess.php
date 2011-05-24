<?php
    require_once('calendar/classes/tc_calendar.php');

    $pID = $_GET['pID'];
?>
    <?php include('header.php'); ?>
        <div class="inner-container">
            <form action="submit_guess.php" method="post">
            <input type="hidden" name="poolID" value="<?php echo ($pID); ?>">
                <div class="label">
                    FacebookID
                </div>
                <div class="input">
                    <input type="text" name="facebookID">
                </div>
                <br /><br />
                <div class="label">
                    Birth Date:
                </div>
                <div class="input">
                    <?php
                        $myCalendar = new tc_calendar("birth_date", true);
                        $myCalendar->setIcon("calendar/images/iconCalendar.gif");
                        $myCalendar->setDate(date('d'), date('m'), date('Y'));
                        $myCalendar->setPath("calendar/");
                        $myCalendar->setYearInterval(2011, 2013);
                        $myCalendar->writeScript();
                    ?>
                </div>
                <br /><br />
                <div class="label">
                    Boy/Girl:
                </div>
                <div class="input">
                    <select name="baby">
                        <option value="Boy">Boy</option>
                        <option value="Girl">Girl</option>
                    </select>
                </div>
                <div class="label">
                    Weight:
                </div> 
                <div class="input">
                    <select name="weight">
                        <?php
                            for ($i = 1; $i <= 13; $i++) {
                              echo "<option>";
                              echo  $i;
                              echo  "</option>";
                            }
                        ?>
                    </select>
                    lbs.
                </div>
                    <br /><br />
                    <input type="Submit" value="Submit Guess">
                </div>
            </form>
        </div>
      </div>
    <?php include('footer.php'); ?>
