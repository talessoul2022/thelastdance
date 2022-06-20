<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-12 ">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Cadastro de Produto</h6>
                            <form id="formProduto">
                                <input type="hidden" name="id" value="" id="id">
                                <input type="hidden" name="id_usuario" id="id_usuario"value="<?=$usuario->id ?>">

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                                    <input type="text" name="nome" class="form-control" id="nome"
                                        aria-describedby="nomeHelp">
                                    <div id="nomeHelp" class="form-text">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPreco" class="form-label">Preço</label>
                                    <input type="text" name="preco" id="preco" class="form-control" id="exampleInputPreco">
                                </div>
                                
                                <button type="submit" id="btnEnviar" data-evento="1" class="btn btn-primary">Cadastrar</button>
                                <button type="button" id="btnLimpar" class="btn btn-primary">Limpar</button>
                            </form>
                        </div>
                    </div>
<div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Tabela de Produto</h6>
                            <div class="table-responsive">
                                <table id="dataproduto" class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Preço</th>
                                            <th scope="col">Ações</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="limpar">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td></td>

                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>