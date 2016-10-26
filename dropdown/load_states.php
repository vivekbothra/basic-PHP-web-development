<?php
    require 'mysql.conf.php';
    ini_set('display_errors', 1);
    
    if(isset($_GET['country']))
    {
        //connect to database
        mysql_connect(DB_HOST, DB_UNAME, DB_PWD) or die('Database error!!');
        mysql_select_db(DB_NAME);
        
        $c = $_GET['country'];
        $states = '';
        
        $r = mysql_query("SELECT `s_id`, `state` FROM state WHERE c_id='$c'");
        
        while($row = mysql_fetch_assoc($r))
        {
            $states .= '<option value="'.$row['s_id'].'">'.$row['state'].'</option>';
        }
        
        if($states == '')
            echo '';
        else 
            echo '<select name="state"><option disabled>Select State</option>'.$states.'</select>';
    }

?>
