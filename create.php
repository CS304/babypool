<?php
    require_once('calendar/classes/tc_calendar.php');
    include('header.php');
?>
        <div class="inner-container">
            <form action="submit_create.php" method="post">
                <div class="label">
                    FacebookID:
                </div>
                <div class="input">
                    <input type="text" name="facebookID">
                </div>
                <br /><br />
                <div class="label">
                    My Name: 
                </div>            
                <div class="input">    
                    <input type="text" name="name"> &nbsp; 
                        <select name="parent">
                            <option value="Mother">Mother</option>
                            <option value="father">Father</option>
                        </select>
                </div>
                <br /><br />
                <div class="label">
                    Approx. Due Date:
                </div>
                <div class="input">
                    <?php
                        $myCalendar = new tc_calendar("date1", true);
                        $myCalendar->setIcon("calendar/images/iconCalendar.gif");
                        $myCalendar->setDate(date('d'), date('m'), date('Y'));
                        $myCalendar->setPath("calendar/");
                        $myCalendar->setYearInterval(2011, 2013);
                        $myCalendar->writeScript();
                    ?>
                </div>
                <br /><br />
                <div class="label">
                    My Email:
                </div> 
                <div class="input">
                    <input type="text" name="email"><br>
                    <br /><br />
                    <input type="Submit" value="Create Baby Pool">
                </div>
            </form>
        </div>
    </body>
</html>
<?php


?>
