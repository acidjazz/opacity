<!doctype html>

<html>
<head>
<style type="text/css">

.block {
  float: left;
  padding: 10px;
  margin: 5px;
}

.clear {
  clear: both;
}


.color1 { background: url('/img/opacity/ff0000_50.png'); }
.color2 { background: url('/img/opacity/00ff00_50.png'); }
.color3 { background: url('/img/opacity/0000ff_50.png'); }

.color4 { background: url('/img/opacity/255,255,0_50.png'); }
.color5 { background: url('/img/opacity/255,0,255_50.png'); }
.color6 { background: url('/img/opacity/0,255,255_50.png'); }

</style>

</head>

<body>

<div class="block color1"> <img src="/transparent.png" /> </div>
<div class="block color2"> <img src="/transparent.png" /> </div>
<div class="block color3"> <img src="/transparent.png" /> </div>

<div class="clear"></div>

<div class="block color4"> <img src="/transparent.png" /> </div>
<div class="block color5"> <img src="/transparent.png" /> </div>
<div class="block color6"> <img src="/transparent.png" /> </div>

<div class="clear"></div>

</body>
</html>

<? highlight_file('opacity.php'); ?>

