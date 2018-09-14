<?php
    include("class.php");
?>
<html>
    <head>
        <title>tz</title>
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <form method="post" action="index.php">
                        <input type="text" name="city" placeholder="city" required/><br>
                        <input type="text" name="street" placeholder="street" required/><br>
                        <input type="number" name="house" placeholder="house" required/><br>
                        <input type="text" name="human" placeholder="human" required/><br>
                        <input type="submit" name="btn1" value="sent"/><br>
                    </form>
                    <?php
                        if(isset($_POST['btn1']))
                        {
                            $a=new People(check($_POST['city']),check($_POST['street']),check($_POST['house']),check($_POST['human']));   
                            $a->Out();
                            echo "<h4>Клаc після модифікації</h4>"; 
                            $a->Modify("Kyiv"," Firt street ","12"," Natasha");
                            $a->Out();
                            $a->Destroy(); 
                        }
                    ?>
                </td>
                <td>
                    <form method="post" action="index.php">
                        <input type="text" name="city" placeholder="city" required/><br>
                        <input type="text" name="street" placeholder="street" required/><br>
                        <input type="number" name="house" placeholder="house" required/><br>
                        <input type="text" name="human" placeholder="human" required/><br>
                        <input type="text" name="number" placeholder="tel" required/><br>
                        <input type="submit" name="btn2" value="sent"/><br>
                    </form>
                    <?php
                        if(isset($_POST['btn2']))
                        {
                            $a=new People2(check($_POST['city']),check($_POST['street']),check($_POST['house']),check($_POST['human']),check($_POST['tel']));   
                            $a->Out();
                            echo "<h4>Клаc після модифікації</h4>"; 
                            $a->Modify("Kyiv","Firt street","12","Natasha","0966165412");
                            $a->Out();
                            $a->Destroy(); 
                        }
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>