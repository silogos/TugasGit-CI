<div id="container">
	<h1>TAMBAH BOOKMARK</h1>
    <img src="<?php echo base_url("img/head_login.png"); ?>" />
    <?php echo validation_errors(); ?>
    <?php echo form_open('crudbookmark/tambah_aksi'); ?>
    	<div id="body">

                <input type="text" name="title" required="" placeholder="Title"/>
                <input type="text" name="url" required="" placeholder="Url"/>
                <input type="text" name="description" required="" placeholder="Description"/>
                <input type="submit" value="TAMBAH" />
            
    	</div>
    </form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>