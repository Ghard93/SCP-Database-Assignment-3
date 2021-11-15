<?php

    // Database Credentials
    $user = "a9965934_scpAdmin";
    $pw = "SCPadmin1";
    $db = "a9965934_scpFoundation";

    // Database connection PHP object
    $connection = new mysqli('localhost', $user, $pw, $db) or die(mysqli_error($connection));
    
    // return all records from the database and save as variable
    $result = $connection->query("select * from scprecords") or die(mysqli_error($connection));
    
    if(isset($_POST['submit']))
    {
        $h1 = mysqli_real_escape_string($connection, $_POST['h1']);
        $h2 = mysqli_real_escape_string($connection, $_POST['h2']);
        $images = $_POST['img'];
        $p1 = mysqli_real_escape_string($connection, $_POST['p1']);
        $p2 = mysqli_real_escape_string($connection, $_POST['p2']);
        
        
        $insert = "insert into scprecords(h1, h2, img, p1, p2 )
        values('$h1', '$h2', '$images', '$p1', '$p2' )";
        
        // connect to database and run insert query
        if($connection->query($insert) === TRUE)
        {
            echo"
                <style>
                body{font-family: sans-serif; background-color: rgb(34, 34, 34); width: 80%; margin: auto;}
                a {
                background-color: black;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                }
                h1 {
                    color: white;
                }
                </style>
                <br>
                <h1>Record added successfully</h1>
                <p><a href='scpfiles.php'>Back to SCP files</a></p>
                ";
        }
        else
        {
            echo"
                <style>
                body{font-family: sans-serif; background-color: rgb(34, 34, 34);}
                a {
                background-color: black;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                }
                h1 {
                    color: white;
                }
                </style>
                <h1>Error submitting record.</h1>
                <p>$connetion->error</p>
                <p><a href='index.php'>Back to homepage</a></p>
                ";
        }
    }
    
    // delete record functions
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        
        // delete SQL command
        $del = "delete from scprecords where id=$id";
        
        if($connection->query($del) === TRUE)
        {
            echo"
                <style>
                body{font-family: sans-serif; background-color: rgb(34, 34, 34); width: 80%; margin: auto;}
                a {
                background-color: black;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                }
                h1 {
                    color: white;
                }
                </style>
                <br>
                <h1>Record Deleted.</h1>
                <p><a href='scpfiles.php'>Back to SCP files</a></p>
                ";
        }
        else
        {
            echo"
                <style>
                body{font-family: sans-serif; background-color: rgb(34, 34, 34);}
                a {
                background-color: black;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                }
                h1 {
                    color: white;
                }
                </style>
                <h1>Error deleting record.</h1>
                <p>$connetion->error</p>
                <p><a href='index.php'>Back to homepage</a></p>
                ";
        }
    }
    
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $h1 = mysqli_real_escape_string($connection, $_POST['h1']);
        $h2 = mysqli_real_escape_string($connection, $_POST['h2']);
        $images = $_POST['img'];
        $p1 = mysqli_real_escape_string($connection, $_POST['p1']);
        $p2 = mysqli_real_escape_string($connection, $_POST['p2']);
        
        $update = "update scprecords set h1='$h1', h2='$h2', img='$images', p1='$p1', p2='$p2' where id='$id'";
        
        if($connection->query($update) === TRUE)
        {
            echo"
                <style>
                body{font-family: sans-serif; background-color: rgb(34, 34, 34); width: 80%; margin: auto;}
                a {
                background-color: black;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                }
                h1 {
                    color: white;
                }
                </style>
                <br>
                <h1>Record Updated.</h1>
                <p><a href='scpfiles.php'>Back to SCP files</a></p>
                ";
        }
        else
        {
            echo"
                <style>
                body{font-family: sans-serif; background-color: rgb(34, 34, 34);}
                a {
                background-color: black;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                }
                h1 {
                    color: white;
                }
                </s
                </style>
                <h1>Error updating record.</h1>
                <p>$connetion->error</p>
                <p><a href='index.php'>Back to homepage</a></p>
                ";
        }
    }
    

?>