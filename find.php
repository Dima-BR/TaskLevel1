<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="find.php" method="get">
            <input type="number" name="id" placeholder="Enter ID"/>
            <input type="submit" name="btnfind" value="Search"/>
        </form>
        <?php
          if(isset($_GET["btnfind"]))
            {  
                $con=new mysqli("localhost","root","015558520","librarys");
                $st=$con->prepare("select * from books where id=?");
                $st->bind_param("i",$_GET["id"]);
                $st->execute();
                $rs=$st->get_result();
                if($rs->num_rows==0)
                    {
                        echo '<h2> Sorry .. Not Found </h2>';
                    }
                    else {
                        $row=$rs->fetch_assoc();
                        echo '<table>';
                        echo '<tr> <th>Book ID</th><th>Book Name</th><th>Book Price</th> </tr>';
                        echo '<tr><td>'.$row["id"].'</td><td>'.$row["name"].'</td><td>'.$row["price"].'</td></tr>';
                        echo '</table>';

                    }
            }        
                
            
        ?>
    </body>
</html>
