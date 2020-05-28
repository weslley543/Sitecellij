let page = 1;

function createNotice(e){
    e.preventDefault();
    console.log($('#criarNoticia'));
    $.ajax({
        method:'post',
        url:'http://[::1]/cellij/Post/create',
        data:$('#criarNoticia').serialize(),
        success:function(response){
            console.log(response);
        }

    });
}


function buscarpostagens(e){
    e.preventDefault();
    $.ajax({
        method:'get',
        url:$('#buscarpostagens')[0].action,
        data:$('#buscarpostagens').serialize()+'&page='+page,
        success:function(response){
            $('#corpoTabela').append(response);
        }
    })
}

function apagar(cod){
    $.ajax({
        method:'post',
        url:'http://[::1]/cellij/Post/delete',
        data:{cod},
        success:function(response){
            if(response.ok ===true){
                $('#id'+cod).fadeOut(300, function() {
                    $(this).remove();
                });
            }
        }
    })
}