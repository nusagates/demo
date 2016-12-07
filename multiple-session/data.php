<?php
session_start();
if($_GET['session1']){
  $_SESSION["session1"] = "Contoh session 1";
  echo $_SESSION["session1"];
}
if($_GET['session2']){
  $_SESSION["session2"] = "Contoh session 2";
  echo $_SESSION["session2"];
}
if($_GET['session3']){
  $_SESSION["session3"] = "Contoh session 3";
  echo $_SESSION["session3"];
}
