<div id="container">
	<h1>USER</h1>
    <ul id="list">
        <li class="user" style="background: #FFF;"><a href="<?php echo base_url('index.php/home/user'); ?>"><img src="<?php echo base_url("img/user.png"); ?>" /></a></li>
        <li class="bookmark"><a href="<?php echo base_url('index.php/home/bookmark'); ?>"><img src="<?php echo base_url("img/bookmark.png"); ?>" /></a></li>
        <li class="logout"><a href="<?php echo base_url('index.php/home/logout'); ?>"><img src="<?php echo base_url("img/logout.png"); ?>" /></a></li>
    </ul>
    	<div id="body">
            <table id="table" >
                <thead>
                    <th style="width: 50px;" >NO</th>
                    <th style="width: 700px;">USERNAME</th>
                    <th colspan="2">AKSI</th>
                </thead>
                <tbody>
                <?php
                    $no=1;
                    foreach($user as $row){
                        echo"<tr>
                                <td>".$no."</td>
                                <td>".$row->username."</td>
                                <td>
                                    <a href=".base_url('index.php/cruduser/edit/')."/".$row->id."><img src=".base_url("img/update.png")." /></a>
                                </td>
                                <td>
                                    <a href=".base_url('index.php/cruduser/delete/')."/".$row->id."><img src=".base_url("img/delete.png")." /></a>
                                </td>
                            </tr>";  
                        $no++;
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="5">
                        <?php echo"
                            <a class='tambah' href=".base_url('index.php/cruduser/tambah/').">Tambah User</a>"; 
                        ?>
                        </th>
                    </tr>
                </tfoot>
            </table>
    	</div>

	<p class="footer"><span style="float: left; text-decoration: none;"><a style="text-decoration: none;" href="<?php echo base_url('index.php/home/'); ?>">HOME</a> > <a style="text-decoration: none;" href="<?php echo base_url('index.php/home/user'); ?>">USER</a></span> <strong></strong> </p>
</div>