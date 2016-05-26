<div id="container">
	<h1>BOOKMARK</h1>
    <ul id="list">
        <li class="user"><a href="<?php echo base_url('index.php/home/user'); ?>"><img src="<?php echo base_url("img/user.png"); ?>" /></a></li>
        <li class="bookmark" style="background: #FFF;"><a href="<?php echo base_url('index.php/home/bookmark'); ?>"><img src="<?php echo base_url("img/bookmark.png"); ?>" /></a></li>
        <li class="logout"><a href="<?php echo base_url('index.php/home/logout'); ?>"><img src="<?php echo base_url("img/logout.png"); ?>" /></a></li>
    </ul>
    	<div id="body">
            <table id="table" >
                <thead>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>URL</th>
                    <th>DESCRIPTION</th>
                    <th colspan="2">Aksi</th>
                </thead>
                <tbody>
                <?php
                    $no=1;
                    foreach($bookmark as $row){
                        echo"<tr>
                                <td>".$no."</td>
                                <td>".$row->title."</td>
                                <td>".$row->url."</td>
                                <td>".$row->description."</td>
                                <td>
                                    <a href=".base_url('index.php/crudbookmark/edit/')."/".$row->id."><img src=".base_url("img/update.png")." /></a>
                                </td>
                                <td>
                                    <a href=".base_url('index.php/crudbookmark/delete/')."/".$row->id."><img src=".base_url("img/delete.png")." /></a>
                                </td>
                            </tr>";  
                        $no++;
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="6">
                        <?php echo"
                            <a class='tambah' href=".base_url('index.php/crudbookmark/tambah/').">Tambah User</a>"; 
                        ?>
                        </th>
                    </tr>
                </tfoot>
            </table>
    	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
</div>