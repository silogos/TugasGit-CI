<div id="container">
	<h1>BOOKMARK DETAIL</h1>
    <?php 
        foreach ($bookmark as $row){
    ?>
        <style>
            table, th, td{
                text-align: left;
            }
            .container{
                width: 300px;
            }
        </style>
    	<div id="body">
            <table style="width: 100%;">
                <tr>
                    <th>TITLE</th>
                    <td>:</td>
                    <td><?php echo $row->title; ?></td>
                </tr>
                <tr>
                    <th>URL</th>
                    <td>:</td>
                    <td><?php echo $row->url; ?></td>
                </tr>
                <tr>
                    <th>DESCRIPTION</th>
                    <td>:</td>
                    <td style="word-break: break-all;"><?php echo $row->description; ?></td>
                </tr>
            </table>
            <a style="background: #ccc;margin: 10px;padding: 10px;" href="<?php echo base_url('index.php/home/bookmark'); ?>">BACK</a>
                        <a style="background: #ccc;margin: 10px;padding: 10px;" href="<?php echo base_url('index.php/crudbookmark/edit/')."/".$row->id; ?>">EDIT</a>
                        <a style="background: #ccc;margin: 10px;padding: 10px;" href="<?php echo base_url('index.php/crudbookmark/delete/')."/".$row->id; ?>">DELETE</a>
            
    	</div>
    <?php } ?>
    </form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>