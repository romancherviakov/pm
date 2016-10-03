<?php

require_once('autoload.php');

?>

<html>
<body>

<?php

$picture = new Picture(400, 300);
$text = new Text();


$commentary = new CommentaryDecorator($picture);
$commentary->render('php-elephant.png');

echo "<br>";

$bordered = new BorderDecorator($text, 3, 'red');
$bordered->render('Red text');

?>

</body>
</html>
