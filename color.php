<?php
$deployment = getenv("COLOR");

$deployment = getenv("COLOR");
if ( $deployment == 'red') {
  $color = 'red';
} elseif ($deployment == 'orange')  {
  $color = 'orange';
} else {
  $color = 'yellow';
}

$data = [ 'color' => $deployment ];
echo json_encode( $data );
http_response_code(200);
?>
