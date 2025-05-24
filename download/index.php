<?php
ob_start();
?>
<div id="main-div">
    <h3 style="margin-top: 200px;">Triangles Beta Builds!</h3>
    <p>These are the beta builds of Triangles. They are very incomplete and the current beta version is <b>beta3</b>.</p>
    <p><a href="https://triangles-cdn.lncvrt.xyz/Triangles-1.0.0-beta3-win-x64.zip"><b>Windows x64 download</b></a></p>
    <p><a href="https://triangles-cdn.lncvrt.xyz/Triangles-1.0.0-beta3-win-x86.zip"><b>Windows x86 download</b></a></p>
    <p><a href="https://triangles-cdn.lncvrt.xyz/Triangles-1.0.0-beta3-win-arm64.zip"><b>Windows ARM64 download</b></a></p>
    <p><a href="https://triangles-cdn.lncvrt.xyz/Triangles-1.0.0-beta3-linux.zip"><b>Linux (x86 or x64) download</b></a></p>
    <p><a href="https://triangles-cdn.lncvrt.xyz/Triangles-1.0.0-beta3-macos.zip"><b>MacOS (Intel or Silicon) download</b></a></p>
    <p>If you don't know what download to use, select <b>Windows x64</b> or <b>Windows x86</b> if that doesn't work.</p>
</div>
<?php
$content = ob_get_clean();
$title = 'Downloads';
include __DIR__ . '/../layout.php';