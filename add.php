<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Book To Library</title>
    </head>
    <body>
        <form method="post" action="add.php">
            <input type="number" name="id" placeholder="Book ID " />
            <input type="text" name="name" placeholder="Book Name"/>
            <input type="number" name="price" placeholder="Book Price"/>
            <input type="submit" value="Add Book" name="btnadd"/>
        </form>
        
        <?php
            if(isset($_POST["btnadd"])){
                $con=new mysqli("localhost","root","015558520","librarys");
                $st=$con->prepare("insert into books values (?,?,?)");
                $st->bind_param("isd", $_POST["id"],$_POST["name"],$_POST["price"]);
                $st->execute();
            }
        ?>
    </body>
</html>
