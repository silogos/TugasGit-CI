$(function (){
    var user = $('#user').dataTable({
        ajax: 'user_data',
        columns: [
            {'data': 'no'},
            {'data': 'username'},
            {'data': 'id'}
        ]
    });
});


        
$(document).ready(function(){ 
    $('.tambahuser').click(function(){
        var data = $('.form-user').serialize();
        $.ajax({
            type: 'POST',
            url: '../cruduser/tambah_aksi',
            dataType: 'JSON', 
            data: data,
            beforeSend: function(){
                $('.progress').show();
                $('.progress-bar').animate({width: '60%'}, 0);
            },
            success: function(response){
                $('.progress-bar').animate({width: '100%'}, 500);
                $('#username,#password').val('');
                $('.progress').css('display','none');
                $('.progress-bar').css('width','1px'); 
                setTimeout( 
                function(){
                    $('#tambah-user').modal('hide');                                                                                                    
                    alert(response.msg);
                    refresh()
                },1000); 
            }
        });
    });
});

function refresh(){
    user.ajax.url('user_data').load();
}

function mod_delete(id){
    $('#hapus').modal('show');
    $('#delete_user').attr('onclick','delete_user('+id+')');
}

function delete_user(id){        
    $.ajax({
        url: '../cruduser/delete/'+id,
        type: 'GET',
        dataType: 'JSON',
        success: function(response){
            $(this).parent().remove();
            $('#hapus').modal('hide');
            $('.eror_detail').text(response.msg);
            if(response.error){
                $('#notif').addClass('alert-success');    
            }else{
                $('#notif').addClass('alert-danger');
            }
            $('#notif').fadeIn(3000);
            
        }
    });
}