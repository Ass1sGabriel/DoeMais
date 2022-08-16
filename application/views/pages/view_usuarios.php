<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card ">
				<div class="card-header ">
					<h5 class="card-title">Usuários</h5>
					<p class="card-category">Gerir usuários</p>
				</div>
				<div class="card-body ">
					<div class="table">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th width="27%">Nome</th>
									<th width="25%">Email</th>
									<th width="14%">Cidade</th>
									<th width="14%">Função</th>
									<th width="9%">Status</th>
									<th width="11%" align="center">Ações</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($usuarios as $usuario) : ?>
									<tr>
										<td><?= $usuario["id"] ?></td>
										<td><?= $usuario["nome"] ?></td>
										<td><?= $usuario["email"] ?></td>
										<td><?= $usuario["cidade"] ?></td>
										<td><?= $usuario["funcao"] ?></td>
										<td><?= $usuario["status"] == 1 ? "Ativo" : "Inativo" ?></td>
										<td>
											<?php if ($_SESSION["logged_user"]["funcao"] === "Administrador") : ?>
												<a href="<?= base_url() ?>usuarios/edit/<?= $usuario["id"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:altera_status(<?= $usuario['id'] ?>)" class="btn btn-sm btn-danger"><i class="fa-solid fa-arrows-rotate"></i></a>
											<?php else : ?>
												<button disabled type="button" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
													<button disabled type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
													<?php endif; ?>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer ">
					<hr>
					<div class="stats">
						<i class="fa fa-history"></i> Atualizado 3 minutos atrás
					</div>
				</div>
			</div>
		</div>
	</div>
</div>