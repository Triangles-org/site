<?php
ob_start();
?>
<div id="main-div">
    <h1 style="margin-top: 200px;">Triangles</h1>
    <p>Developer of the game: Lncvrt</p>
    <p>Developers of the website: Puppet & Lncvrt</p>
    <h2 style="margin-top: 50px;">Links</h2>
    <p class="link link-left"><a href="/discord">Discord</a></p>
    <p class="link link-right"><a href="/download/">Download</a></p>
</div>
<?php
$content = ob_get_clean();
$title = 'Home';
include __DIR__ . '/layout.php';