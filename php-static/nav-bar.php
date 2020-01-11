<?php 
## LINK VERIFICATION
## Returns the page it is currently on
$link = $_SERVER['REQUEST_URI'];
$link = ($link == '/' ? 'index.php': 
        substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '/') + 1) ); 
echo "<script> console.log('" . json_encode($link) . "'); </script>"; 
?>

<!-- Fixed Nav Bar -->
<div class="fixed-nav">
    <nav class="main-nav">
        <h2>JSA19</h3>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="<?php echo ($link == 'index.php' ? 'gilman/' : 
                ($link == 'gilman.php' ? '': '../gilman/') ); ?>gilman.php">Gilman</a></li>
            <li><a href="<?php echo ($link == 'index.php' ? 'blogs' : '../blogs'); ?>/blog-index.php">Blog</a></li>
            <!--<li><a href="testimonials.html">Testimonials</a></li>
            <li><a href="about.html">About</a></li>-->
        </ul>
        <div id="nav-button">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
</div>