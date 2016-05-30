<style>
    
</style>
</head>
<body>
<div class="blur"></div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div id="box" class="col-md-8">
        
            <h1>EDIT BOOKMARK</h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('index.php/home/'); ?>">HOME</a></li>
                <li><a href="<?php echo base_url('index.php/home/bookmark'); ?>">BOOKMARK</a></li>
                <li><a href="#">EDIT BOOKMARK</a></li>
            </ol>
            
            <div id="content">
            <?php echo validation_errors(); ?>
            <?php echo form_open('crudbookmark/edit_aksi');
                foreach ($bookmark as $row){
            ?>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $row->id; ?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="title" value="<?php echo $row->title; ?>" required="" placeholder="Title"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="url" value="<?php echo $row->url; ?>" required="" placeholder="Url"/>
                </div>
                <div class="form-group">
                    <textarea class="form-control" style="resize: vertical;" name="description" placeholder="Description"><?php echo $row->description; ?></textarea>
                </div>
                
                <input class="form-control btn btn-success" type="submit" value="EDIT" />
            
            <?php } ?>
            </form>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
