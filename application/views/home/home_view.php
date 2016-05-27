<div id="container">
	<h1>LOGIN</h1>
    <ul id="list">
        <li class="user"><a href="<?php echo base_url('index.php/home/user'); ?>"><img src="<?php echo base_url("img/user.png"); ?>" /></a></li>
        <li class="bookmark"><a href="<?php echo base_url('index.php/home/bookmark'); ?>"><img src="<?php echo base_url("img/bookmark.png"); ?>" /></a></li>
        <li class="logout"><a href="<?php echo base_url('index.php/home/logout'); ?>"><img src="<?php echo base_url("img/logout.png"); ?>" /></a></li>
    </ul>
    	<div id="body">
        
            <h2 style="margin: 100px;">Selamat Datang di Halaman Admin <?php echo"$username"; ?>.</h2>
            
    	</div>

	<p class="footer"><span style="float: left; text-decoration: none;"><a style="text-decoration: none;" href="<?php echo base_url('index.php/home/user'); ?>">HOME</a> ></span> Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
</div>