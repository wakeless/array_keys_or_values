<?php

function array_keys_or_values($array) {
  return array_map(function($key, $value) {
    return is_numeric($key) ? $value : $key;
  }, array_keys($array), $array);
}
