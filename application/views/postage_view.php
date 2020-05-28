<div class="container">

    
<div class="row">
    <div class="col-lg-5">
        <form class='form-group' action="<?= base_url('Post/index')?>" id='buscarpostagens' method='GET' onsubmit="buscarpostagens(event)">
            <input name='title' type="text" class='form-control' placeholder="Digite aqui um o titulo">
            <button class='btn btn-primary' style='margin-top:10px;'><i class="fas fa-search"></i></button>
        </form>
    </div>
    <div class="col-lg-12">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope='col'>Titulo</th>
                    <th scope='col'>Subtitulo</th>
                    <th>Criado em</th>
                    <th>Atualizado em</th>
                    <th scope='col'>Ações</th>
                </tr>
            </thead>
            <tbody id='corpoTabela'>

            </tbody>
        </table>
    </div>
</div>
</div>