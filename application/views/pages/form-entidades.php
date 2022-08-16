<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title"><?= $title ?></h5>
                </div>
                <div class="card-body ">
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
                                            <option selected disabled><?= $entidade["status"] == 1 ? "Ativo" : "Inativo" ?></option>
                                            <option value="Ativo">Ativo</option>
                                            <option value="Inativo">Inativo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
                                    <a href="<?= base_url() ?>entidades" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancelar</a>
                                </div>

                                </form>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>