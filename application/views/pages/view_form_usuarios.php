<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card ">
				<div class="card-header ">
					<h5 class="card-title"><?= $title ?></h5>
				</div>
				<div class="card-body ">
					<div class="col-md-12">

						<?php if (isset($usuario)) { ?>
							<form action="<?= base_url() ?>usuarios/update/<?= $usuario["id"] ?>" method="post">
							<?php } else { ?>
								<form action="<?= base_url() ?>usuarios/store" method="post">
								<?php } ?>

								<div class="col-md-6">
									<div class="form-group">
										<label for="name">Nome <small class="text-danger">* Obrigatório</small></label>
										<input type="text" class="form-control" name="nome" id="nome" placeholder="nome" value="<?= isset($usuario["nome"]) ? $usuario["nome"] : "" ?>" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="email">E-mail <small class="text-danger">* Obrigatório</small></label>
										<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="<?= isset($usuario["email"]) ? $usuario["email"] : "" ?>" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="cidade">Cidade <small class="text-danger">* Obrigatório</small></label>
										<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" value="<?= isset($usuario["cidade"]) ? $usuario["cidade"] : "" ?>" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="funcao">Função <small class="text-danger">* Obrigatório</small></label>
										<select name="funcao" id="funcao" class="form-control">
											<option selected disabled><?= $usuario["funcao"] ?></option>
											<option value="Administrador">Administrador</option>
											<option value="Usuario">Usuário</option>
										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="status">Status <small class="text-danger">* Obrigatório</small></label>
										<select name="status" id="status" class="form-control">
											<option selected disabled><?= $usuario["status"] == 1 ? "Ativo" : "Inativo" ?></option>
											<option value="Ativo">Ativo</option>
											<option value="Inativo">Inativo</option>
										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="senha">Senha</label>
										<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" value="<?= isset($usuario["senha"]) ? $usuario["senha"] : "" ?>" required>
									</div>
								</div>

								<div class="col-md-6">
									<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
									<a href="<?= base_url() ?>usuarios" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancelar</a>
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