<?php
ob_start();
?>
<div id="main-div">
    <h1 style="margin-top: 200px;">Triangles</h1>
    <p>Developer of the game: Lncvrt</p>
    <p>Developer of the website: Puppet</p>
    <h2 style="margin-top: 100px;">Links</h2>
    <p><a href="/discord">Discord</a></p>
    <p><a href="/download/">Download</a></p>
</div>
<?php
$content = ob_get_clean();
$title = 'Home';
include __DIR__ . '/layout.php';