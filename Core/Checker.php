<?php


namespace Core;

class Checker
{

  public $url;

  public function __construct()
  {
    if (isset($url)) $this->url = $url;
  }

  public static function checkFor200Code(string $url)
  {
    $checkingInCase = curl_init();
    // curl_setopt($checkingInCase, CURL_OPT_HEADER, 1);
    // echo curl_getinfo($checkingInCase, CURLINFO_HTTP_CODE);
    // echo curl_getinfo($checkingInCase, CURLINFO_HTTP_CODE);
    // curl_exec($checkingInCase);
    $checking = curl_setopt($checkingInCase, CURLOPT_URL, $url);
    $checking = curl_setopt($checkingInCase, CURLOPT_HEADER, 1);
    $checking = curl_setopt($checkingInCase, CURLOPT_FOLLOWLOCATION, 1);
    $checking = curl_setopt($checkingInCase, CURLOPT_RETURNTRANSFER, 1);
    $checking = curl_exec($checkingInCase);
    $information = curl_getinfo($checkingInCase);
    // if (curl_errno($checkingInCase)) return false;
    // else ;
    curl_close($checkingInCase);
    // echo $information['http_code'];
    if ($information['http_code'] != 200) return false;
    return true;
  }
}
