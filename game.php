<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Snakes and Ladders</title>
      <link rel="stylesheet" href="./assets/css/stylesheet.css">
  </head>
  <body>
    <div class ='container bg'>
		<div class="game">
    <div class="menu">
      <div>
        <span class="p1">
        
        <input type="button" value="Roll">
        <div id="dice"></div>



        </span>
        <span class="p1"></span>
      </div>
    </div>
		<?php
    $boxCount = 0;
    $boxDirection = "right";
    for($i=100; $i>=1; $i--):
      
			$boxColors = array("yellow", "red", "dark", "blue", "green");
      $boxColor = array_rand($boxColors, 1);
      if($boxCount == 0):
        ?><div class="row <?php echo $boxDirection; ?>"><?php
      endif;
			?><div class="box <?php echo $boxColors[$boxColor]; ?>" id="box-<?php echo $i; ?>"><span class="number"><?php echo $i; ?></span></div><?php
      if($boxCount == 9):
        ?></div><?php
      endif;
      $boxCount++;
      if($boxCount == 10) $boxCount = 0;
      if($i == 91 || $i == 71 || $i == 51|| $i == 31|| $i == 11):
        $boxDirection = "left";
      else:
        $boxDirection = "right";
      endif;
		endfor;
		
		?>
		</div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/js/script.js" charset="utf-8"></script>
  </body>
</html>
