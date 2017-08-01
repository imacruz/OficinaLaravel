<div id="ModalProdutos" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <div class="callout callout-danger hidden">
                <p></p>
                </div>
                    <form class="form-horizontal" role="form" id="formProdutos">
                            <div class="form-group">
                                <label>Titulo</label>
                                <input type="text" name="titulo" id="titulo" class="form-control">
                                <label>Descrição</label>                        
                                <textarea name="descricao"  id="descricao" class="form-control">
                                </textarea>
                            </div>
                    </form>
                <div class="modal-footer">
                    <button type="button" class="inserir btn btn-success" id="id">
                        <i class="fa fa-save"></i>
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Excluir -->
<div id="Exclui" class="modal fade"  role="dialog">
  
  <div class="modal-dialog" role="document">

  <div class="modal-content">
   
    <div class="modal-header">

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>

      <h4 class="modal-title"><strong>Excluir</strong></h4>

    </div>

    <div class="modal-body"> Tem certeza que deseja excluir? </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-primary deleteAAAC-modal">OK</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      <span class="hidden id"></span> <!-- Passar o ID para o Cntrolador -->
    </div>

  </div> <!-- Fim de ModaL Content -->

  </div> <!-- Fim de ModaL Dialog -->

</div> <!-- Fim de ModaL -->