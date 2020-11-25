<?php

const conversion = array(
    "bucket" => 4,
    "butt" => 108,
    "firkin" => 9,
    "hogshead" => 54,
    "pint" => 0.125,
    "grain" => .7,
    "thumbLength" => 2.1,
    "palm" => 3.3,
    "fist" => 10.4,
    "foot" => 25.0,
    "step" => 62.5,
    "doubleStep" => 1500,
    "rod" => 3000
);

function convert_to_gallons($value, $from_unit) {
    if(array_key_exists($from_unit, conversion)) {
    return $value * conversion[$from_unit];
    } else {
        return "Unsupported unit.";
    }
  }
    
function convert_from_gallons($value, $to_unit) {
    if(array_key_exists($to_unit, conversion)) {
        return $value / conversion[$from_unit];
        } else {
            return "Unsupported unit.";
        }
      }
  
function convert_liquid($value, $from_unit, $to_unit) {
      $liquid_value = convert_to_gallons($value, $from_unit);
      $new_value = convert_from_gallons($liquid_value, $to_unit);
      return $new_value;
    }

?>