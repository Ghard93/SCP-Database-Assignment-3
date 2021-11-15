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
        <div class="mainContent">
            <table style="border-collapse: collapse; width: 90%; margin: auto;">
                <tr>
                    <td class="heading"><h1>Latest SCP Files</h1></td>
                </tr>
                <?php foreach($result as $link): ?>
            
                <tr class="contentBackground">
                    <td class="scpLinkContainer">
                        <a href="index.php?link='<?php echo $link['h1']; ?>'" class="scpLink"><?php echo $link['h1']; ?></a>
                    </td>
                </tr>
            
            <?php endforeach; ?>
                
            </table>
        </div>
        


  </body>
</html>