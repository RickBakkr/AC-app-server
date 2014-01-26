<?php
/**
  * cURL Class
  *
  * @author Rick Bakker
  */
Class cURL {
  /**
  * Function to do a get request
  *
  * @params string
  * @return bool or string
  */
  public function get($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($httpCode != 200) {
      return 'ERROR!';
    }
    return $result;
  }
  /**
  * Function to do a post request
  *
  * @params string, string
  * @return bool or string
  */
  public function get($url, $fields) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($httpCode != 200) {
      return 'ERROR!';
    }
    return $result;
  }
}
