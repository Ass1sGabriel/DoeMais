<?php if ($_SESSION["logged_user"]["funcao"] === "Administrador") : ?>
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Doações</h1>
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
						<th width="9%">Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($doacoes as $doacao) : ?>
						<tr>
							<td><?= $doacao["id"] ?></td>
							<td><?= $doacao["entidade"] ?></td>
							<td>R$ <?= $doacao["valor"] ?></td>
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
							<td>
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
	</main>
	<script>
		function goConfirma(id) {
			var myUrl = 'confirma/' + id;
			if (confirm("Tem certeza que deseja confirmar essa doação?")) {
				window.location.href = 'confirma/' + id;
			} else {
				alert("Doação não alterada");
				return false;
			}
		}

		function goCancela(id) {
			var myUrl = 'cancela/' + id;
			if (confirm("Tem certeza que deseja cancelar essa doação?")) {
				window.location.href = 'cancela/' + id;
			} else {
				alert("Doação não alterada");
				return false;
			}
		}
	</script>
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
<?php endif; ?>