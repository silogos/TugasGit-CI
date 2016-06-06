var user;
    
$(document).ready(function(){ 
    
    //datatable
    user = $('#user').DataTable({
        ajax: 'user_data',
        columns: [
            {'data': 'no'},
            {'data': 'username'},
            {'data': 'id'}
        ]
    });
    
});

function reload(){
    user.ajax.reload();
}

function mod_tambah(){
    $('#tambah_user').modal('show');
    $('#username').focus();
    
}

function tambah(){
    var data = $('#form-tambah-user').serialize();
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
            $('.progress').css('display','none');
            $('#username,#password').val('');
            $('.eror_detail').text(response.msg);
            $('#notif').removeClass('alert-danger alert-success alert-warning');
            $('#notif_icon').removeClass('fa-info fa-plus fa-trash');
            if(response.error == true){
                $('#notif').addClass('alert-warning'); 
                $('#notif_icon').addClass('fa-info');
            }else{
                $('#notif').addClass('alert-success');
                $('#notif_icon').addClass('fa-plus');
            }
            $('#notif').fadeIn(3000);
            setTimeout( 
            function(){
                $('#tambah_user').modal('hide');
                reload();
            },1000); 
        }
    });
}

function mod_edit(id){
    $('#edit_user').modal('show');
    $.ajax({
        type: 'GET',
        url: '../cruduser/edit/'+id,
        dataType: 'JSON',
        success: function(data){
            $('#form-edit-user input[name=id]').val(data.id);
            $('#form-edit-user input[name=username]').val(data.username);
            $('#form-edit-user input[name=pass_word]').focus();
        }
    });
}

function edit(){
    $('#id, #username').removeAttr('disabled');
    var data = $('#form-edit-user').serialize();
     
    $.ajax({
        type: 'POST',
        url: '../cruduser/edit_aksi',
        data: data,
        beforeSend: function(){
            $('.progress').show();
            $('.progress-bar').animate({width: '60%'}, 0);
        },
        success: function(response){
            $('.progress-bar').animate({width: '100%'}, 500);
            $('.progress').css('display','none');
            $('#username,#password').val('');
            $('.eror_detail').text(response.msg);
            $('#notif').removeClass('alert-danger alert-success alert-warning');
            $('#notif_icon').removeClass('fa-info fa-plus fa-trash');
            if(response.error == true){
                $('#notif_icon').addClass('fa-info');
                $('#notif').addClass('alert-warning'); 
            }else{
                $('#notif_icon').addClass('fa-check');
                $('#notif').addClass('alert-success');
            }
            $('#notif').fadeIn(3000);
            setTimeout( 
            function(){
                $('#tambah_user').modal('hide');
                reload();
            },1000); 
        }
    });
}

function mod_delete(id){
    $('#hapus').modal('show');
    $('#delete_user').focus();
    $('#delete_user').attr('onclick','deleted('+id+')');
}

function deleted(id){  
    
    $.ajax({
        url: '../cruduser/delete/'+id,
        type: 'GET',
        dataType: 'JSON',
        success: function(response){
            $(this).parent().remove();
            $('#hapus').modal('hide');
            $('.eror_detail').text(response.msg);
            $('#notif').removeClass('alert-danger alert-success alert-warning');
            $('#notif_icon').removeClass('fa-info fa-plus fa-trash');
            if(response.error==true){
                $('#notif_icon').addClass('fa-info'); 
                $('#notif').addClass('alert-warning'); 
            }else{
                $('#notif_icon').addClass('fa-trash'); 
                $('#notif').addClass('alert-danger');
            }
            $('#notif').fadeIn(3000);
            reload();
        }
    });
}

function remove_notif(){
    $('#notif').fadeOut(1000);
}