<html>
    <head>
        <title>Drop Down</title>
    </head>
    <body>
        <?php
            // include configuration file.
            require 'mysql.conf.php';
            
            // connect to db
            mysql_connect(DB_HOST, DB_UNAME, DB_PWD) or die('Database error!!');
            mysql_select_db(DB_NAME);
            
            // get table `country` result resourse
            $r = mysql_query('SELECT * FROM `country`'); 
        ?>
        
        <form name='get_state' action='post.php' method='POST' >
            <div id='country_container' style="float:left">
                <select name='country' onchange="window.loadStates()">
                    <option disabled>Select Country</option>
                    <?php while($row = mysql_fetch_assoc($r)): ?>
                    <option value='<?php echo $row["c_id"]?>'><?php echo $row['country']?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div id='states_container' style="float:left"></div>
            <div style="clear: both"></div>
            <input type='submit' name='post' value='post'>
        </form>
        
        <!-- SCRIPTS -->
        <script src='default.js'></script>
    </body>
</html>

