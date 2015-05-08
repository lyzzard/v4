<html>
    <head>
        <title>VVVV.js viewer</title>
<?php
if ($_GET['patch']) {
?>
        <link rel="stylesheet" type="text/css" href="vendor/vvvv.js/vvvviewer/vvvv.css" />
        <script language="javascript" src="vendor/vvvv.js/lib/jquery/jquery-1.8.2.min.js"></script> 
        <script language="javascript" src="vendor/vvvv.js/vvvv.js"></script>
        <link rel="VVVV" type="text/xml" href="assets/patches/<?php echo $_GET['patch'];?>.v4p" nocache="nocache" />
        <script language="javascript">
$(function() {
    VVVV.init('vendor/vvvv.js', 'full', function() {
        console.log("VVVV.js successfully initialized.")
    });
});
        </script>
<?php
}
?>
        <style>
body {
    font-family: "Lucida Sans", sans-serif;
    color: #333;
    background: #CCC;
}
        </style>
    </head>
    <body>
<?php
foreach(glob('assets/patches/*.v4p') as $path) {
    $name = basename($path, '.v4p');

    print '<a href="?patch=' . $name . '">' . $name . '</a>';
}
print '<br />';
?>
<?php
if ($_GET['patch']) {
?>
        <canvas id="renderer" width="1200" height="675"></canvas>
<?php
}
?>
    </body>
</html>
