<?php
session_start();
?>
<?php
if(!isset($_SESSION['usr']))
{
  header("location:index.php");
}
else
{
    session_destroy();
    header("location:index.php");
}
?>