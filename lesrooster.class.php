<?php
/**
  * Lesrooster Class
  *
  * @author Rick Bakker
  */
Class Lesrooster {
 public function getTimetable($q, $week) {
  if(empty($week) || !is_numeric($week) || !isset($week)) {
   $week = date("W");
  }
  $curl = cURL::get("http://roosters.csg.nl/?q=" . $q . "&week=" . $week);
  return $curl;
 }

}
?>
