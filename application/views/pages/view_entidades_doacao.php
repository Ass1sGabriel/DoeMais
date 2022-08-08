<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">
                    <h5 class="card-title">Entidades</h5>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <?php foreach ($entidades as $entidade) : ?>
                            <div class="col-md-4">
                                <div class="card border-primary text-center bg-secondary mb-3" style="max-width: 18rem; min-height: 16rem;">
                                    <div class="card-header"><?= $entidade["cidade"] ?></div>
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">
                                            <td><?= $entidade["nome"] ?></td>
                                        </h5>
                                        <p class="card-text">
                                            <td><?= $entidade["descricao"] ?></td>
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-primary">
                                        <a href="<?= base_url() ?>entidadesdoacao/doar/<?= $entidade["id"] ?>" class="btn btn-primary">Doar</a>
                                        <a href="#" class="btn btn-secondary disabled">Mais Informações</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card-footer ">

                </div>
            </div>
        </div>
    </div>
</div>