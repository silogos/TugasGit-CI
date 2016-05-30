<style>
    
</style>
</head>
<body>
<div class="blur"></div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div id="box" class="col-md-8">
	       <h1>BOOKMARK DETAIL</h1>
           <ol class="breadcrumb">
                <li><a href="<?php echo base_url('index.php/home/'); ?>">HOME</a></li>
                <li><a href="<?php echo base_url('index.php/home/bookmark'); ?>">BOOKMARK</a></li>
                <li><a href="#">BOOKMARK DETAIL</a></li>
            </ol>
            <?php 
                foreach ($bookmark as $row){
            ?>
            <div id="content">
                <table class="table">
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
                
                
                <?php echo anchor(base_url('index.php/home/bookmark'),'BACK',array('class'=>'btn btn-primary')); ?>
                <?php echo anchor(base_url('index.php/crudbookmark/edit').'/'.$row->id,'EDIT',array('class'=>'btn btn-success')); ?>
                <?php echo anchor(base_url('index.php/crudbookmark/delete').'/'.$row->id,'DELETE',array('class'=>'btn btn-danger')); ?>
            
            </div>
            <?php } ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
