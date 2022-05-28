<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $title ?></h1>
    </div>

    <div class="col-md-12">

        <?php if (isset($entidade)) { ?>
            <form action="<?= base_url() ?>entidades/update/<?= $entidade["id"] ?>" method="post">
            <?php } else { ?>
                <form action="<?= base_url() ?>entidades/store" method="post">
                <?php } ?>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nome <small class="text-danger">* Obrigatório</small></label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?= isset($entidade["nome"]) ? $entidade["nome"] : "" ?>" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">E-mail <small class="text-danger">* Obrigatório</small></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="<?= isset($entidade["email"]) ? $entidade["email"] : "" ?>" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cidade">Cidade <small class="text-danger">* Obrigatório</small></label>
                        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" value="<?= isset($entidade["cidade"]) ? $entidade["cidade"] : "" ?>" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cnpj">CNPJ <small class="text-danger">* Obrigatório</small></label>
                        <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="CNPJ" maxlength="14" value="<?= isset($entidade["cnpj"]) ? $entidade["cnpj"] : "" ?>" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="descricao">Descrição <small class="text-danger">* Obrigatório</small></label>
                        <textarea name="descricao" id="descricao" rows="5" class="form-control" maxlength="100" required><?= isset($entidade["descricao"]) ? $entidade["descricao"] : "" ?></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status <small class="text-danger">* Obrigatório</small></label>
                        <select name="status" id="status" class="form-control">
                            <option selected disabled><?= isset($entidade["status"]) ? $entidade["status"] : "" ?></option>
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
                    <a href="<?= base_url() ?>entidades" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancelar</a>
                </div>
    </div>
    </form>
    </div>

</main>
</div>
</div>