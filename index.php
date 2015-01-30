<!doctype html>

<html>
<head>
<style type="text/css">

html,body {
  font-family: Verdana;
  font-size: 12px;
}

.block {
  float: left;
  padding: 10px;
  margin: 5px;
  text-align: center;
}

.clear {
  clear: both;
}

.overlay {
  position: absolute;
  padding: 20px 30px;
  font-size: 14px;
}

.o1 {
  top: 220px;
  left: 140px;
  color: #000;
  background: url('/img/opacity/ffffff_50.png');

}

.o2 {
  top: 480px;
  left: 540px;
  color: #fff;
  background: url('/img/opacity/000000_50.png');
}

.color1 { background: url('/img/opacity/ff0000_20.png'); }
.color2 { background: url('/img/opacity/00ff00_40.png'); }
.color3 { background: url('/img/opacity/0000ff_60.png'); }

.color4 { background: url('/img/opacity/255,255,0_30.png'); }
.color5 { background: url('/img/opacity/255,0,255_60.png'); }
.color6 { background: url('/img/opacity/0,255,255_90.png'); }

</style>
</head>
<body>

<div class="block color1">
  <div>background: url('/img/opacity/ff0000_20.png');</div>
  <img src="http://opacity.256.sh/transparent.png" />
</div>
<div class="block color2">
  <div>background: url('/img/opacity/00ff00_40.png');</div>
  <img src="http://opacity.256.sh/transparent.png" />
</div>
<div class="block color3">
  <div>background: url('/img/opacity/0000ff_60.png');</div>
  <img src="http://opacity.256.sh/transparent.png" />
</div>

<div class="clear"></div>

<div class="block color4">
  <img src="http://opacity.256.sh/transparent.png" />
  <div>background: url('/img/opacity/255,255,0_30.png');</div>
</div>
<div class="block color5">
  <img src="http://opacity.256.sh/transparent.png" />
  <div>background: url('/img/opacity/255,0,255_60.png');</div>
</div>
<div class="block color6">
  <img src="http://opacity.256.sh/transparent.png" />
  <div>background: url('/img/opacity/0,255,255_90.png');</div>
</div>

<div class="clear"></div>

<div class="overlay o1"> background: url('/img/opacity/ffffff_50.png'); </div>

<div class="overlay o2"> background: url('/img/opacity/0,0,0_20.png'); </div>

</body>
</html>

<? highlight_file('opacity.php'); ?>

