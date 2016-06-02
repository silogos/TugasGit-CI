$(function (){
    var user = $('#user').dataTable({
        'ajax': 'user_data',
        'columns': [
            {'data': 'no'},
            {'data': 'username'},
            {'data': 'id'}
        ]
    });
});

function refresh(){
    user.ajax.reload();
}
        
$(document).ready(function(){ 
    $("#delete").click(function(){
        alert('sasasa');
    });
    $('.tambahuser').click(function(){
        var data = $('.form-user').serialize();
        $.ajax({
            type: 'POST',
            url: '../cruduser/tambah_aksi',
            dataType: 'JSON', 
            data: data,
            beforeSend: function(){
                $('.progress').show();
                $('.progress-bar').animate({width: '60%'}, 500);
            },
            success: function(response){
                $('.progress-bar').animate({width: '100%'}, 0);
                setTimeout( 
                function(){
                    $('#hps').modal('hide');
                    $('#username,#password').val('');
                    $('.progress').css('display','none');
                    $('.progress-bar').css('width','1px');
                    refresh();                                                                                                                            
                    alert(response.msg);
                },1000); 
            }
        });
    });

                            

});
