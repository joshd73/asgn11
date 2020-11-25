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
                <option value="grain"<?php if($from_unit == 'grain') { echo " selected"; } ?>>Grain</option>
                <option value="thumbLength"<?php if($from_unit == 'thumbLength') { echo " selected"; } ?>>Thumb Length</option>
                <option value="palm"<?php if($from_unit == 'palm') { echo " selected"; } ?>>Palm</option>
                <option value="fist"<?php if($from_unit == 'fist') { echo " selected"; } ?>>Fist</option>
                <option value="foot"<?php if($from_unit == 'foot') { echo " selected"; } ?>>Foot</option>
                <option value="step"<?php if($from_unit == 'step') { echo " selected"; } ?>>Step</option>
                <option value="doubleStep"<?php if($from_unit == 'doubleStep') { echo " selected"; } ?>>Double Step</option>
                <option value="rod"<?php if($from_unit == 'rod') { echo " selected"; } ?>>Rod</option>
            </select>
        </div>

        <div class="entry">
            <label>To:</label>&nbsp;
            <input type="text" name="to_value" value="<?php echo $to_value; ?>" />&nbsp;
            <select name="to_unit">
                <option value="grain"<?php if($to_unit == 'grain') { echo " selected"; } ?>>Grain</option>
                <option value="thumbLength"<?php if($to_unit == 'thumbLength') { echo " selected"; } ?>>Thumb Length</option>
                <option value="palm"<?php if($to_unit == 'palm') { echo " selected"; } ?>>Palm</option>
                <option value="fist"<?php if($to_unit == 'fist') { echo " selected"; } ?>>Fist</option>
                <option value="foot"<?php if($to_unit == 'foot') { echo " selected"; } ?>>Foot</option>
                <option value="step"<?php if($to_unit == 'step') { echo " selected"; } ?>>Step</option>
                <option value="doubleStep"<?php if($to_unit == 'doubleStep') { echo " selected"; } ?>>Double Step</option>
                <option value="rod"<?php if($to_unit == 'rod') { echo " selected"; } ?>>Rod</option>
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