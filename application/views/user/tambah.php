<div id="container">
<a class="back">dsaasd</a>
	<h1>TAMBAH USER</h1>
    <img src="<?php echo base_url("img/head_login.png"); ?>" />
    <?php echo validation_errors(); ?>
    <?php echo form_open('cruduser/tambah_aksi'); ?>
    	<div id="body">

                <input type="text" name="username" required="" placeholder="Username"/>
                <input type="password" name="password" required="" placeholder="Password"/>
                <input type="submit" value="TAMBAH" id="login" />
            
    	</div>
    </form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>