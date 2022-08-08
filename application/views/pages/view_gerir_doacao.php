<!-- <?php if ($_SESSION["logged_user"]["funcao"] === "Administrador") : ?>
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Doações</h1>
		</div>


	<?php else : ?>
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<h1 class="h2">Minhas Doações</h1>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th width="27%">Entidade</th>
							<th width="27%">Valor</th>
							<th width="14%">Status</th>
							<th width="11%">Data</th>
							<th width="11%">Horário</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($doacoes as $doacao) : ?>
							<tr>
								<td><?= $doacao["id"] ?></td>
								<td><?= $doacao["entidade"] ?></td>
								<td>R$ <?= $doacao["valor"] ?></td>
								<td><?= $doacao["status"] == 1 ? "Pendente" : "Aprovado" ?></td>
								<td><?= date('d/m/Y', strtotime($doacao["data"])); ?></td>
								<td><?= date('H:i', strtotime($doacao["data"])); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</main>
	<?php endif; ?> -->

<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card ">
				<div class="card-header ">
					<h5 class="card-title">Doações</h5>
					<p class="card-category">Gerir doações</p>
				</div>
				<div class="card-body ">
					<div class="table">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th width="27%">Entidade</th>
									<th width="23%">Valor</th>
									<th width="14%">Status</th>
									<th width="11%">Data</th>
									<th width="11%">Horário</th>
									<th class="text-center" width="13%">Ações</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($doacoes as $doacao) : ?>
									<tr>
										<td><?= $doacao["id"] ?></td>
										<td><?= $doacao["entidade"] ?></td>
										<td><?php echo 'R$ ' . number_format(floor($doacao["valor"] * 100) / 100, 2, ',', '.'); ?></td>
										<td>
											<?php
											if ($doacao["status"] == 1) {
												echo "Pendente";
											} else if ($doacao["status"] == 2) {
												echo "Aprovado";
											} else {
												echo "Cancelado";
											}
											?>
										</td>
										<td><?= date('d/m/Y', strtotime($doacao["data"])); ?></td>
										<td><?= date('H:i', strtotime($doacao["data"])); ?></td>
										<td class="text-center">
											<?php if ($_SESSION["logged_user"]["funcao"] === "Administrador") : ?>
												<a href="javascript:goConfirma(<?= $doacao['id'] ?>)" class="btn btn-success btn-sm"><i class="fas fa-check"></i></a>
												<a href="javascript:goCancela(<?= $doacao['id'] ?>)" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
											<?php else : ?>
												<button disabled type="button" class="btn btn-success btn-sm"><i class="fas fa-check"></i></a>
													<button disabled type="button" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
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