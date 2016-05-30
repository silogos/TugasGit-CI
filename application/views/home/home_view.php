<style>
    
</style>
</head>
<body>
<div class="blur"></div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div id="box" class="col-md-8">
            <h1>HOME</h1>
            <ol class="breadcrumb">
                <li><a style="text-decoration: none;" href="<?php echo base_url('index.php/home/'); ?>">HOME</a></li>
            </ol>
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="<?php echo base_url('index.php/home/'); ?>">HOME</a></li>
                <li><a href="<?php echo base_url('index.php/home/user'); ?>">USER</a></li>
                <li><a href="<?php echo base_url('index.php/home/bookmark'); ?>">BOOKMARK</a></li>
            </ul>
            <div id="content">
                <h2 class="text-center">Selamat Datang di Halaman Admin <?php echo"$username"; ?>.</h2>
            </div>
            
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
