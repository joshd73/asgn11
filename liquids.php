<?phpinclude_once'includes/header.php';?>
<?php

require_once('includes/functions.php');

  $from_value = '';
  $from_unit = '';
  $to_unit = '';
  $to_value = '';

  if($_POST['submit']) {
    $from_value = $_POST['from_value'];
    $from_unit = $_POST['from_unit'];
    $to_unit = $_POST['to_unit'];
    
    $to_value = convert_liquid($from_value, $from_unit, $to_unit);
  }
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Volumizer</h1>
  
      <form action="" method="post">
        
        <div class="entry">
            <label>From:</label>&nbsp;
            <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
            <select name="from_unit">
                <option value="buckets"<?php if($from_unit == 'buckets') { echo " selected"; } ?>>Buckets</option>
                <option value="butts"<?php if($from_unit == 'butts') { echo " selected"; } ?>>Butts</option>
                <option value="firkins"<?php if($from_unit == 'firkins') { echo " selected"; } ?>>Firkins</option>
                <option value="hogshead"<?php if($from_unit == 'hogshead') { echo " selected"; } ?>>Hogs Heads</option>
                <option value="imperialgallons"<?php if($from_unit == 'imperialgallons') { echo " selected"; } ?>>Imperial Gallons</option>
                <option value="pints"<?php if($from_unit == 'pints') { echo " selected"; } ?>>Pints</option>
            </select>
        </div>

        <div class="entry">
            <label>To:</label>&nbsp;
            <input type="text" name="to_value" value="<?php echo $to_value; ?>" />&nbsp;
            <select name="to_unit">
                <option value="buckets"<?php if($to_unit == 'buckets') { echo " selected"; } ?>>Buckets</option>
                <option value="butts"<?php if($to_unit == 'butts') { echo " selected"; } ?>>Butts</option>
                <option value="firkins"<?php if($to_unit == 'firkins') { echo " selected"; } ?>>Firkins</option>
                <option value="hogshead"<?php if($to_unit == 'hogshead') { echo " selected"; } ?>>Hogs Heads</option>
                <option value="imperialgallons"<?php if($to_unit == 'imperialgallons') { echo " selected"; } ?>>Imperial Gallons</option>
                <option value="pints"<?php if($to_unit == 'pints') { echo " selected"; } ?>>Pints</option>
          </select>  
        </div>

        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      <?phpinclude_once'includes/footer.php';?>
    </div>
  </body>
</html>
