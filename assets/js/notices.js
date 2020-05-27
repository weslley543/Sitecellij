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

    })
}