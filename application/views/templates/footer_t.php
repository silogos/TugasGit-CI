    <script src="<?php echo base_url('assets/javascript/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/javascript/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugin/datatable/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugin/datatable/js/dataTables.bootstrap.min.js') ?>"></script>
    <script>
        $(function(){
            $('#user').dataTable();
        });
        $(document).ready(function(){
            $('.tambahuser').click(function(){
                var data = $('.form-user').serialize();
                $.ajax({
                    type: 'POST',
                    url: "<?php echo base_url('index.php/cruduser/tambah_aksi'); ?>",
                    data: data,
                    beforeSend: function(){
                        $('.progress').show();
                        $('.progress-bar').animate({width: '60%'}, 500);
                    },
                    success: function(){
                        $('.progress-bar').animate({width: '100%'}, 0);
                        setTimeout( 
                            function(){
                                $('#hps').modal('hide');
                                $('#username,#password').val('');
                                $('.progress').css('display','none');
                                $('.progress-bar').css('width','1px');
                            },1000); 
                    }
                });
            }); 
        });
    </script>  
    
</body>
</html>