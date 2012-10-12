<?

define('CACHE', true);
define('PATH', '/var/www/opacity/img/opacity/');

list($color, $opacity) = explode('_',$_REQUEST['params'], 2);

if (strstr($color, ',') !== false) {
  $rgb = explode(',', $color);
} else {
  $rgb = hex2rgb($color);
}

$file = rgb2hex($rgb).'_'.$opacity.'.png';

if (CACHE && file_exists(PATH.$file)) {
  echo file_get_contents(PATH.$file);
  return true;
}

$im = imagecreatetruecolor(5,5);
$color = imagecolorallocatealpha($im, $rgb[0], $rgb[1], $rgb[2], 127-($opacity*127/100));
imagefill($im, 0, 0, $color);
imagesavealpha($im, true);


if (CACHE && !file_exists(PATH.$file)) {
  imagepng($im, PATH.$file);
}

imagepng($im);


function hex2rgb($hex) {

  if (strlen($hex) == 2) {
    $hex = $hex.$hex.$hex;
  }

  if (strlen($hex) == 3) {
    $hex = $hex.$hex;
  }

  if (strlen($hex) != 6) {
    return array(0,0,0);
  }

  $rgb = array();
  for ($i = 0; $i != 6; $i+=2) {
    $rgb[] = hexdec(substr($hex, $i, 2));
  }

  return $rgb;

}

function rgb2hex($rgb) {

  $return = '';

  foreach ($rgb as $color) {
    $return .= dechex($color);
  }

  return $return;

}

