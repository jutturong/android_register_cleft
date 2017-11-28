  <?php


            $host="localhost";
            $us="root";
            $ps="1234";
            $db="cleft";



     /*
       $host="202.12.97.33";
       $us="cleft";
       $ps="cleftkku";
       //$db="mydatabase";
       $db="cleft2";
       */

     //  $connect = new Connection($host,$us,$ps,$db);



            $connect=mysql_connect($host,$us,$ps) or die("can't connect MYSQL SERVER!!");
            $select_db=mysql_select_db($db) or die("can't  select MYSQL SERVER!!!");
            mysql_query("SET NAMES UTF8");

            /*
            mysql_query("SET character_set_results=utf8");
            mysql_query("SET character_set_client=utf8");
            mysql_query("SET character_set_connection=utf8")
            */



   ?>
