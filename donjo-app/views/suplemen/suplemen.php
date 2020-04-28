<div class="content-wrapper">
	<section class="content-header">
		<?php if ($tampil == 0): ?>
			<h1>Data Suplemen</h1>
		<?php else: ?>
			<h1>Data Suplemen Dengan Sasaran <?=$sasaran[$tampil]?></h1>
		<?php endif; ?>
		<ol class="breadcrumb">
			<li><a href="<?=site_url('hom_sid')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('suplemen')?>"> Data Suplemen</a></li>
			<li class="active">Sasaran Data Suplemen</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?= site_url("suplemen")?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Kembali Ke Data Suplemen">
							<i class="fa fa-arrow-circle-left "></i>Kembali ke Data Suplemen
						</a>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
									<div class="row">
										<div class="col-sm-12">
											<div class="table-responsive">
												<table class="table table-bordered table-striped dataTable table-hover nowrap">
													<thead class="bg-gray disabled color-palette">
														<tr>
															<th>#</th>
															<th>Aksi</th>
															<th>Nama Data Suplemen</th>
															<th>Sasaran</th>
														</tr>
													</thead>
														<tbody>
															<?php
																$nomer = 0;
																foreach ($program as $item):
																$nomer++;
															?>
															<tr>
																<td><?= $nomer; ?></td>
																<td nowrap>
																	<a href="<?= site_url('suplemen/rincian/1/'.$item["id"].'/'); ?>" class="btn bg-purple btn-flat btn-sm"  title="Rincian Data"><i class="fa fa-list-ol"></i></a>
																	<a href="<?= site_url('suplemen/edit/'.$item["id"].'/'); ?>" class="btn bg-orange btn-flat btn-sm"  title="Ubah Data"><i class='fa fa-edit'></i></a>
																	<a href="#" data-href="<?= site_url('suplemen/hapus/'.$item["id"].'/'); ?>" class="btn bg-maroon btn-flat btn-sm"  title="Hapus Data" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
																</td>
																<td width="70%"><a href="<?= site_url('suplemen/rincian/1/'.$item["id"].'/')?>"><?= $item["nama"] ?></a></td>
																<td width="20%"><a href="<?= site_url('suplemen/sasaran/'.$item["sasaran"])?>"><?= $sasaran[$item["sasaran"]]?></a></td>
															</tr>
															<?php endforeach; ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $this->load->view('global/confirm_delete');?>