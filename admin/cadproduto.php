<?php
include_once 'headeradmin.php';

/*
  Gabriel: 21018981
  Guilherme Forlani: 20551582
  Guilherme Mateus: 20779723
  João: 20923708
  Samuel: 20408096
 * Página de cadastro de produto
 */

?>

<div class="container col-md-6" style="margin-top: 50px; margin-bottom: 100px;">
    <h1 class="text-center">Cadastre-se em nosso site: </h1>
    <form action="resForm.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nome Produto</label>
            <input type="text" class="form-control" name="nome"required>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-6">
                    <label>Preço</label>
                    <input type="text" class="form-control" name="preco"required>
                    <small>Digite apenas numeros com ponto. EX: 50.00</small>
                </div>
                <div class="col-6">
                    <label>Marca</label>
                    <input type="text" class="form-control" name="marca"required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-6">
                    <label>Tipo</label>
                    <input type="text" class="form-control" name="tipo"required>
                    <small>Gãos de Café, Filtro de papel, máquina...</small>
                </div>
                <div class="col-6">
                    <label>Peso</label>
                    <input type="text" class="form-control" name="peso"required>
                    <small>EX: 1kg, 100gr</small>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Descrição:</label>
            <textarea class="form-control" name="descricao" rows="6"></textarea>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-6">
                    <label>Data Inicio do Novo</label>
                    <input type="date" class="form-control" name="data_inicio" required>
                </div>
                <div class="col-6">
                    <label>Data Final do Novo</label>
                    <input type="date" class="form-control" name="data_final"required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-6">
                </div>
                <div class="col-6">
                    <label>Miniatura</label>
                    <input type="file" name="foto_grande" required>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
