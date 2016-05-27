<div id="container">
    <a href="<?php echo base_url('index.php/home/bookmark'); ?>" class="back"><img src="<?php echo base_url("img/back.png"); ?>" /></a>	<h1>TAMBAH BOOKMARK</h1>
    <img src="<?php echo base_url("img/head_bookmark.png"); ?>" />
    <?php echo validation_errors(); ?>
    <?php echo form_open('crudbookmark/tambah_aksi'); ?>
    	<div id="body">

                <input type="text" name="title" required="" placeholder="Title"/>
                <input type="text" name="url" required="" placeholder="Url"/>
                <textarea style="width: 100%; width: 100%; resize: vertical;"  name="description" placeholder="Description"></textarea>
                <input type="submit" value="TAMBAH" />
            
    	</div>
    </form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>