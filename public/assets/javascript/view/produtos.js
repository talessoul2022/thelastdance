var tabela;
$(document).ready(function () {
    tabela = $('#dataproduto').DataTable({
        ajax: base_url + '/produtos/getProdutos',
        responsive: true,
        columns: [
            {data: 'id'},
            {data: 'nome'},
            {data: 'preco'},
            {data: 'id',orderable: false, serchable: false},



        
        ],
        columnDefs: [{
            targets: 3,
            render: function (data, type, row, meta){
                let dataRow = JSON.stringify(row);
                return`

                <a class='btn btn-sm btn-icon btn-secondary' data-row='${dataRow}' href='#' id='editarProduto' ><i class='fa fa-pencil-alt'></i></a>
                <a class='btn btn-sm btn-icon btn-secondary' data-row='${dataRow}' href='#' id='deletarProduto'><i class='fa fa-trash-alt'></i></a>
                
                `;
            }
        }]
    });
});
$('#formProduto').submit(function(e){
    if($('#btnEnviar')[0].dataset.evento == '1'){

        $.ajax({
            type: "POST",
            url: base_url +'/produtos/inserirProduto',
            data: {'nome':$('#nome').val(),'preco':$('#preco').val(),'id_usuario':$('#id_usuario').val()},
            success: function(e){
                tabela.ajax.reload();
            },
            error: function(e){
                tabela.ajax.reload();
            }
           })
    }else  if($('#btnEnviar')[0].dataset.evento == 'e'){
        $.ajax({
            type: "POST",
            url: base_url +'/produtos/editarProduto',
            data: {'nome':$('#nome').val(),'preco':$('#preco').val(),'id_usuario':$('#id_usuario').val(),'id':$('#id').val()},
            success: function(e){
                tabela.ajax.reload();
            },
            error: function(e){
                tabela.ajax.reload();
            }
           })

    }else  if($('#btnEnviar')[0].dataset.evento == 'd'){
        $.ajax({
            type: "POST",
            url: base_url +'/produtos/deletarProduto',
            data: {'nome':$('#nome').val(),'preco':$('#preco').val(),'id_usuario':$('#id_usuario').val(),'id':$('#id').val()},
            success: function(e){
                tabela.ajax.reload();
            },
            error: function(e){
                tabela.ajax.reload();
            }
           })

    }
   

    $('#id').val("");
    $('#nome').val("");
    $('#preco').val("");
    $('#btnEnviar')[0].dataset.evento = 'i';
    $('#btnEnviar')[0].innerHTML = 'Cadastrar';
    e.preventDefault();

})

$(document).on('click','#editarProduto',function(e){
var data = JSON.parse(e.currentTarget.dataset.row);
$('#id').val(data.id);
$('#nome').val(data.nome);
$('#preco').val(data.preco);
$('#btnEnviar')[0].dataset.evento = 'e';
$('#btnEnviar')[0].innerHTML = 'Editar';
});

$(document).on('click','#deletarProduto',function(e){
    var data = JSON.parse(e.currentTarget.dataset.row);
    $('#id').val(data.id);
    $('#nome').val(data.nome);
    $('#preco').val(data.preco);
    $('#btnEnviar')[0].dataset.evento = 'd';
    $('#btnEnviar')[0].innerHTML = 'Deletar';
    });
$(document).on('click','#btnLimpar',function(e){
    $('#id').val("");
    $('#nome').val("");
    $('#preco').val("");
    $('#btnEnviar')[0].dataset.evento = 'i';
    $('#btnEnviar')[0].innerHTML = 'Cadastrar';
    });