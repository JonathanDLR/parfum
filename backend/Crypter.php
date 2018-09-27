<?php

class Crypter {
  public function crypt($data) {
    $clef = ['test', 'truchement', 'cucurbitacee'];
    $part1data = substr($data, 0, 4);
    $part2data = substr($data, 4, 6);
    $part3data = substr($data, 7);

    foreach($clef as $key) {
      ${'clef1'.$key} = substr($key, 0, 3);
      ${'clef2'.$key} = substr($key, 4, 6);
      ${'clef3'.$key} = substr($key, 7);
    }

    $data = $clef2truchement.$part2data.$clef1truchement.$part3data.$clef3cucurbitacee.$part1data.$clef1test;

    return $data;
  }

  public function decrypt($data) {

  }
}
?>
