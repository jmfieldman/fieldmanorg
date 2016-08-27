<?php
require('hidden/parsedown.php');
require('hidden/parsedownextra.php');
?>
<!DOCTYPE html>
<head>

<style media="screen" type="text/css">
<?=file_get_contents('hidden/screen.css')?>
</style>

</head>
<body>
<div id='master'>

<?php
if (isset($_GET['p'])) {
    $p = $_GET['p'];
    $p = str_replace('/', '', $p);
    $p = str_replace('.', '', $p);
    $md_file = "hidden/md/$p.md";
    if (strlen($p) > 0 && ctype_alnum($p[0]) && stripos($p, '.') == FALSE && file_exists($md_file)) {
        $Parsedown = new ParsedownExtra();
        echo "<div id='md_container'>";
        echo $Parsedown->text(file_get_contents($md_file));
        echo "<div id='md_footer'><p>Return to <a href='/'>Jason's Home Page</a></p></div>";
        echo "</div>";
        echo "";
    } else {
        echo "<div id='no_md'>There is no article named $p. <a href='/'>Home</a></div>";
    }
} else {
    echo file_get_contents('hidden/main.html');
}
?>


</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36348135-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
