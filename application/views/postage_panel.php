<div class="container">

    
<div class="row">
    <div class="col-lg-6">
       <form action="<?= base_url('application/controllers/Post/create')?>" method='POST' id='criarNoticia' onsubmit="createNotice(event)" class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name='title' class="form-control">
            <label for="subtitle">Subtitulo</label>
            <input type="text" name='subtitle' class='form-control'>
            <label for="text">Texto</label>
            <textarea name="text" class='form-control' placeholder='digite sua matéria aqui' cols="30" rows="10"></textarea>
            <button style='cursor:pointer; margin-top:10px;' class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
</div>