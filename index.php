<?php
ob_start();
?>
<p>the html content here!!!!</p>
<?php
$content = ob_get_clean();
$title = 'Home';
include __DIR__ . '/layout.php';
// if copy this to like info folder for example do like '/../layout.php' not '/layout.php'