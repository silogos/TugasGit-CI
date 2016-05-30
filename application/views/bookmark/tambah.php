<style>
    
</style>
</head>
<body>
<div class="blur"></div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div id="box" class="col-md-8">
        
            <h1>TAMBAH BOOKMARK</h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('index.php/home/'); ?>">HOME</a></li>
                <li><a href="<?php echo base_url('index.php/home/bookmark'); ?>">BOOKMARK</a></li>
                <li><a href="#">TAMBAH BOOKMARK</a></li>
            </ol>
            
            <div id="content">
                <?php echo validation_errors(); ?>
                <?php echo form_open('crudbookmark/tambah_aksi'); ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="title" required="" placeholder="Title"/>
                    </div>
                        
                    <div class="form-group">
                        <input class="form-control" type="text" name="url" required="" placeholder="Url"/>
                    </div>
                    
                    <div class="form-group">
                        <textarea class="form-control" style="resize: vertical;"  name="description" placeholder="Description"></textarea>
                    </div>
    
                    <input class="form-control btn btn-success" type="submit" value="TAMBAH" />
                </form>  
                 
        	</div>
         </div>
         <div class="col-md-2"></div>
    </div>
</div>
