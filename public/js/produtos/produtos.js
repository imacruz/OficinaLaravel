$(document).ready(function($) {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

/** Configurações da Table que lista os Produtos  **/
var tabela = $('#produtos').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "sorting": [[ 1, "asc" ]],
        "autoWidth": false,
        "lengthMenu": [
            [5, 10, 15, -1],
            [5, 10, 15, "Todos"]
        ],
        language: {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        },
        columnDefs: [
            { targets : [0,2,3], sortable : false },
            { "width": "5%", "targets": 0 },
            { "width": "60%", "targets": 1 },
            { "width": "20%", "targets": 2 },
            { "width": "15%", "targets": 3 },
        ]
    });

    tabela.on('order.dt search.dt', function() {
        tabela.column(0, { search: 'applied', order: 'applied' }).nodes().each(function(cell, i) {
            cell.innerHTML = i + 1;
        });
    }).draw();

/** Funções JS para o CRUD **/

    $(document).on('click', '.inserir', function() {
        //Limpar campos 
        $('#titulo').val("");
        $('#descricao').val("");

        jQuery('#ModalProdutos').modal('show');
       
    });
    /** **/
    $(document).on('click', '.add', function(){
        var dados = new FormData($("#formProdutos")[0]); //pega os dados do form
        
            $.ajax({
            type: 'post',
            url: "/produtos/inserir",
            data: dados,
            processData: false,
            contentType: false,
            success: function(data) {  
                
                  console.log(data);

                    var editar = "<a class='btn btn-primary><i class='fa fa-check-square-o'></i></a>";
                    var deletar= "<a class='btn btn-danger><i class='fa fa-trash'></i></a>";

                    var linha = $('#produtos').DataTable().row.add([
                        null,
                        data.titulo,
                        data.descricao,
                        editar + deletar

                    ]).draw(false).node();
                    $(linha).addClass('item' + data.id); //adiciona o id para a linha

                    jQuery('#ModalProdutos').modal('hide');

                    $(function() {

                        iziToast.success({
                            title: 'OK',
                            message: 'Produto Cadastrado com Sucesso!',
                        });
                    });

                
            },
            error: function() {
                jQuery('#ModalProdutos').modal('hide');

                iziToast.error({
                    title: 'Erro Interno',
                    message: 'Operação Cancelada!',
                });
            },

        });

    });

    $(document).on('click', '.edit', function(){
        $('.actionBtn').removeClass('add');
        $('.actionBtn').addClass('salvarEdit');
        $('#id').val($(this).data('id'));
        $('#titulo').val($(this).data('titulo'));
        $('#descricao').val($(this).data('descricao'));
        jQuery('#ModalProdutos').modal('show');
    });

    $(document).on('click', '.salvarEdit', function(){
            var dados = new FormData($("#formProdutos")[0]); //pega os dados do form
            dados.append('id', $("#id").val());

            $.ajax({
            type: 'post',
            url: "/produtos/editar",
            data: dados,
            processData: false,
            contentType: false,
            success: function(data) {  
                
                  console.log(data);

                    var editar = "<a class='editar btn btn-primary' data-id='"+data.id+"' data-titulo='"+data.titulo+"' data-descricao='"+data.descricao+"'><i class='fa fa-check-square-o'></i></a>";
                    var deletar= "<a class='btn btn-danger'><i class='fa fa-trash'></i></a>";

                    $('#produtos').DataTable().row('.item' + data.id).data([
                        null,
                        data.titulo,
                        data.descricao,
                        editar + deletar

                    ]).draw(false).node();

                    jQuery('#ModalProdutos').modal('hide');

                    $(function() {

                        iziToast.success({
                            title: 'OK',
                            message: 'Produto Atualizado com Sucesso!',
                        });
                    });

                
            },
            error: function() {
                jQuery('#ModalProdutos').modal('hide');

                iziToast.error({
                    title: 'Erro Interno',
                    message: 'Operação Cancelada!',
                });
            },

        });
    });


 });