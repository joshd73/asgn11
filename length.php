<?php

function convert_to_meters($value, $from_unit) {
  switch($from_unit) {
    case 'inches':
      return $value * 0.0254;
      break;
    case 'feet':
      return $value * 0.3048;
      break;
    case 'yards':
      return $value * 0.9144;
      break;
    case 'miles':
      return $value * 1609.344;
      break;
    case 'millimeters':
      return $value * 0.001;
      break;
    case 'centimeters':
      return $value * 0.01;
      break;
    case 'meters':
      return $value;
      break;
    case 'kilometers':
      return $value * 1000;
      break;
    case 'imperialgallons'
      return $value;
  }
}
  
function convert_from_meters($value, $to_unit) {
  switch($to_unit) {
    case 'inches':
      return $value / 0.0254;
      break;
    case 'feet':
      return $value / 0.3048;
      break;
    case 'yards':
      return $value / 0.9144;
      break;
    case 'miles':
      return $value / 1609.344;
      break;
    case 'millimeters':
      return $value / 0.001;
      break;
    case 'centimeters':
      return $value / 0.01;
      break;
    case 'meters':
      return $value;
      break;
    case 'kilometers':
      return $value / 1000;
      break;
    default:
      return "Unsupported unit.";
  }
}

function convert_length($value, $from_unit, $to_unit) {
  $meter_value = convert_to_meters($value, $from_unit);
  $new_value = convert_from_meters($meter_value, $to_unit);
  return $new_value;
}

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if($_POST['submit']) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_length($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Length</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Length</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="inches"<?php if($from_unit == 'inches') { echo " selected"; } ?>>inches</option>
            <option value="feet"<?php if($from_unit == 'feet') { echo " selected"; } ?>>feet</option>
            <option value="yards"<?php if($from_unit == 'yards') { echo " selected"; } ?>>yards</option>
            <option value="miles"<?php if($from_unit == 'miles') { echo " selected"; } ?>>miles</option>
            <option value="millimeters"<?php if($from_unit == 'millimeters') { echo " selected"; } ?>>millimeters</option>
            <option value="centimeters"<?php if($from_unit == 'centimeters') { echo " selected"; } ?>>centimeters</option>
            <option value="meters"<?php if($from_unit == 'meters') { echo " selected"; } ?>>meters</option>
            <option value="kilometers"<?php if($from_unit == 'kilometers') { echo " selected"; } ?>>kilometers</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value; ?>" />&nbsp;
          <select name="to_unit">
            <option value="inches"<?php if($to_unit == 'inches') { echo " selected"; } ?>>inches</option>
            <option value="feet"<?php if($to_unit == 'feet') { echo " selected"; } ?>>feet</option>
            <option value="yards"<?php if($to_unit == 'yards') { echo " selected"; } ?>>yards</option>
            <option value="miles"<?php if($to_unit == 'miles') { echo " selected"; } ?>>miles</option>
            <option value="millimeters"<?php if($to_unit == 'millimeters') { echo " selected"; } ?>>millimeters</option>
            <option value="centimeters"<?php if($to_unit == 'centimeters') { echo " selected"; } ?>>centimeters</option>
            <option value="meters"<?php if($to_unit == 'meters') { echo " selected"; } ?>>meters</option>
            <option value="kilometers"<?php if($to_unit == 'kilometers') { echo " selected"; } ?>>kilometers</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
