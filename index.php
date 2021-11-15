<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link href="stylesheet.css" rel="stylesheet">


    <title>SCP Foundation</title>
  </head>
  <body>

    <?php
    include 'connection.php';
    ?>

    <table class="banner">
        <tr>
            <td><img src="images/SCP_Logo.png" alt="SCP Logo" style="width: 80%; height: 80%;"></td>
            <td><img src="images/SCP_Title.png" alt="SCP Title" style="width: 80%; height: auto;"></td>
            <td style="width: 30%;"></td>
        </tr>
        <tr class="navbar">
            <td colspan="3" style="padding: 0;">
                <ul class="container">
                    <li class="navbutton"><a href="index.php">HOME</a></li>
                    <li class="navbutton"><a href="scpfiles.php">SCP FILES</a></li>
                    <li class="navbutton"><a href="form.php">ADD FILE</a></li>
                </ul>
            </td>
        </tr>
    </table>

    <div class="contentContainer">
        <?php    
            if(isset($_GET['link']))
            {
                $h1 = trim($_GET['link'], "'");
                
                
                $record = $connection->query("select * from scprecords where h1='$h1'") or die($connection->mysqli_error($connection));
                
                // turn record into an associative array
                $array = $record->fetch_assoc();
                
                $h1 = $array['h1'];
                $h2 = $array['h2'];
                $image = $array['img'];
                $p1 = $array['p1'];
                $p2 = $array['p2'];
                
                
                // Variables to hold update and delete url strings
                $id = $array['id'];
                $update = "update.php?update=" . $id;
                $delete = "connection.php?delete=" . $id;
                
                echo "
                    <div class='contentContainer'>
                        <table class='contentBackground' style='border-collapse: collapse; padding-top: 20px;'>
                            <tr>
                                <td class='heading'><h1>$h1</h1></td>
                            </tr>
                            <tr>
                                <td style='padding-top: 10px; padding-bottom: 10px; text-align: center;'>
                                    <h4>Object Class: $h2</h4>
                                    <p><img src='$image' width='90%' height='auto'</p>                        
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Special Containment Procedures:</h4>
                                    <p>$p1</p>
                                    <h4>Description:</h4>
                                    <p>$p2</p>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td style='width: 80%; text-align: center; padding-bottom: 20px;'>
                                 <button class='scpButton'>
                                    <a href='$update' style='color: grey;'>Update Record</a>
                                 </button>
                                 <button class='scpButton'>
                                    <a href='$delete' style='color: grey;'>Delete Record</a>
                                 </button>
                                </td>
                            </tr>
                        </table>
                        <br>
                    </div>
                    
                    
                ";
            }
            else
            {
                
                echo "
                <div class='contentContainer' style='padding-top: 20px; padding-bottom: 20px;'>
                    <div class='contentBackground'>
                        <div class='homePageMsg'>
                            <p>WARNING: THE FOUNDATION DATABASE IS</p>
                            <br>
                        <h1>CLASSIFIED</h1>
                        <br>
                        <p>ACCESS BY UNAUTHORIZED PERSONNEL IS STRICTLY PROHIBITED
                        PERPETRATORS WILL BE TRACKED, LOCATED, AND DETAINED</p>
                        </div>
                    </div>
                </div>
                    
                    
                ";
            }
        ?>
        


  </body>
</html>