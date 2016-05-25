<div id="container">
	<h1>EDIT USER</h1>
    <img src="<?php echo base_url("img/head_login.png"); ?>" />
    <?php echo validation_errors(); ?>
    <?php echo form_open('cruduser/edit_aksi');
        foreach ($user as $row){
    ?>
    	<div id="body">
                
                <input type="hidden" name="id" value="<?php echo $row->id; ?>" required=""/>
                <input type="text" name="username" value="<?php echo $row->username; ?>" readonly="" required="" placeholder="Username"/>
                <input type="password" name="password" required="" placeholder="Password Lama"/>
                <input type="password" name="password_b" required="" placeholder="Password Baru"/>
                <input type="submit" value="EDIT" id="login" />
            
    	</div>
    <?php } ?>
    </form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>