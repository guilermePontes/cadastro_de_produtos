
<div class="container">
        <h1>
            <div>
                <img src="img/Group 2.png" alt="" class="header">
            </div>
        </h1>
        <form class="row g-3" method="POST" action="_scripts/input.php">
            
            <h3>Sistema de cadastro de peças veiculares - AutoStar</h3>
            <!--
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Nome da peça</label>
                <input type="text" class="form-control" name="nome_produto" required>
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Preço de compra</label>
                <input type="decimal" class="form-control" name="preco_compra" required>
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Preço de venda</label>
                <input type="decimal" class="form-control" name="preco_venda" required>
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Código do produto</label>
                <input type="text" class="form-control" name="codigo_produto" required>
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Nome do fornecedor</label>
                <input type="text" class="form-control" name="nome_fornecedor" required>
            </div>
            -->

            <div class="row g-3 campos">
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Nome da peça" aria-label="Nome da peça" name="nome_produto" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Preço de compra" aria-label="Preço de compra" name="preco_compra" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Preço de venda" aria-label="Preço de venda" name="preco_venda" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Código do produto" aria-label="Código do produto" name="codigo_produto" required>
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Nome do fornecedor" aria-label="Nome do fornecedor" name="nome_fornecedor" required>
                </div>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar peça</button>
            </div>
        </form>
</div>

    