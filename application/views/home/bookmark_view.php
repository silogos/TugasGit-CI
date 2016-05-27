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
                    <th>NO</th>
                    <th>TITLE</th>
                    <th>URL</th>
                    <th colspan="2">Aksi</th>
                </thead>
                <tbody>
                <?php
                    $no=1;
                    foreach($bookmark as $row){
                        echo"<tr>
                                <td>".$no."</td>
                                <td><a href='".base_url('index.php/crudbookmark/detail_bookmark')."/".$row->id."'>".$row->title."</a></td>
                                <td><a target='_blank' href=http://".$row->url.">".$row->url."</a></td>
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
	<p class="footer"><span style="float: left; text-decoration: none;"><a style="text-decoration: none;" href="<?php echo base_url('index.php/home/'); ?>">HOME</a> > <a style="text-decoration: none;" href="<?php echo base_url('index.php/home/bookmark'); ?>">BOOKMARK</a></span> Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
</div>