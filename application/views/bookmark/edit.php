<div id="container">
	<h1>EDIT BOOKMARK</h1>
    <a href="<?php echo base_url('index.php/home/bookmark'); ?>" class="back"><img src="<?php echo base_url("img/back.png"); ?>" /></a>
    <img src="<?php echo base_url("img/head_bookmark.png"); ?>" />
    <?php echo validation_errors(); ?>
    <?php echo form_open('crudbookmark/edit_aksi');
        foreach ($bookmark as $row){
    ?>
    	<div id="body">
                <input type="hidden" name="id" value="<?php echo $row->id; ?>" />
                <input type="text" name="title" value="<?php echo $row->title; ?>" required="" placeholder="Title"/>
                <input type="text" name="url" value="<?php echo $row->url; ?>" required="" placeholder="Url"/>
                <textarea style="width: 100%; width: 100%; resize: vertical;" name="description" placeholder="Description"><?php echo $row->description; ?></textarea>
                <input type="submit" value="EDIT" />
            
    	</div>
    <?php } ?>
    </form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>