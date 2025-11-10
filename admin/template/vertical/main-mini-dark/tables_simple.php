<?
    include 'header.php';
    include 'sidebar.php';
?>

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Basic Tables</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Tables</li>
								<li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12 col-xl-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Basic Table</h5>
							<p class="mb-0 card-subtitle text-muted">Using the most basic table markup, here’s how .table-based tables look in Bootstrap.</p>
						</div>
						<div class="card-body">
							<table class="table">
								<thead>
									<tr>
										<th style="width:40%;">Name</th>
										<th class="d-none d-md-table-cell" style="width:25%">Date of Birth</th>
										<th style="width:15%;">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Ashley Briggs</td>
										<td class="d-none d-md-table-cell text-fade">Jun 21, 1961</td>
										<td class="table-action min-w-100">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Carl Jenkins</td>
										<td class="d-none d-md-table-cell text-fade">May 15, 1948</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Bertha Martin</td>
										<td class="d-none d-md-table-cell text-fade">Sep 14, 1965</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Stacie Hall</td>
										<td class="d-none d-md-table-cell text-fade">Apr 2, 1971</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Amanda Jones</td>
										<td class="d-none d-md-table-cell text-fade">Oct 12, 1966</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Striped Rows</h5>
							<p class="mb-0 card-subtitle text-muted">Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
						</div>
						<div class="card-body">
							<table class="table table-striped">
								<thead>
									<tr>
										<th style="width:40%;">Name</th>
										<th class="d-none d-md-table-cell" style="width:25%">Date of Birth</th>
										<th style="width:15%;">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Ashley Briggs</td>
										<td class="d-none d-md-table-cell text-fade">Jun 21, 1961</td>
										<td class="table-action min-w-100">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Carl Jenkins</td>
										<td class="d-none d-md-table-cell text-fade">May 15, 1948</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Bertha Martin</td>
										<td class="d-none d-md-table-cell text-fade">Sep 14, 1965</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Stacie Hall</td>
										<td class="d-none d-md-table-cell text-fade">Apr 2, 1971</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Amanda Jones</td>
										<td class="d-none d-md-table-cell text-fade">Oct 12, 1966</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Condensed Table</h5>
							<p class="mb-0 card-subtitle text-muted">Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.</p>
						</div>
						<div class="card-body">
							<table class="table table-striped table-sm">
								<thead>
									<tr>
										<th>Operation System</th>
										<th class="text-end text-fade">Users</th>
										<th class="text-end text-fade">Share</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Windows</td>
										<td class="text-end text-fade">8.232</td>
										<td class="text-end text-fade">40%</td>
									</tr>
									<tr>
										<td>Mac OS</td>
										<td class="text-end text-fade">3.322</td>
										<td class="text-end text-fade">20%</td>
									</tr>
									<tr>
										<td>Linux</td>
										<td class="text-end text-fade">4.232</td>
										<td class="text-end text-fade">34%</td>
									</tr>
									<tr>
										<td>FreeBSD</td>
										<td class="text-end text-fade">1.121</td>
										<td class="text-end text-fade">12%</td>
									</tr>
									<tr>
										<td>Chrome OS</td>
										<td class="text-end text-fade">1.331</td>
										<td class="text-end text-fade">15%</td>
									</tr>
									<tr>
										<td>Android</td>
										<td class="text-end text-fade">2.301</td>
										<td class="text-end text-fade">20%</td>
									</tr>
									<tr>
										<td>iOS</td>
										<td class="text-end text-fade">1.162</td>
										<td class="text-end text-fade">14%</td>
									</tr>
									<tr>
										<td>Windows Phone</td>
										<td class="text-end text-fade">562</td>
										<td class="text-end text-fade">7%</td>
									</tr>
									<tr>
										<td>Other</td>
										<td class="text-end text-fade">1.181</td>
										<td class="text-end text-fade">14%</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Hoverable Rows</h5>
							<p class="mb-0 card-subtitle text-muted">Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
						</div>						
						<div class="card-body">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>Name</th>
										<th>Date of Birth</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<img src="../../../images/avatar/avatar-1.png" width="48" height="48" class="bg-light rounded-circle me-2" alt="Avatar"> Ashley Briggs
										</td>
										<td class="text-fade">Jun 21, 1961</td>
									</tr>
									<tr>
										<td>
											<img src="../../../images/avatar/avatar-10.png" width="48" height="48" class="bg-light rounded-circle me-2" alt="Avatar"> Carl Jenkins
										</td>
										<td class="text-fade">May 15, 1948</td>
									</tr>
									<tr>
										<td>
											<img src="../../../images/avatar/avatar-12.png" width="48" height="48" class="bg-light rounded-circle me-2" alt="Avatar"> Bertha Martin
										</td>
										<td class="text-fade">Sep 14, 1965</td>
									</tr>
									<tr>
										<td>
											<img src="../../../images/avatar/avatar-15.png" width="48" height="48" class="bg-light rounded-circle me-2" alt="Avatar"> Stacie Hall
										</td>
										<td class="text-fade">Apr 2, 1971</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Bordered Table</h5>
							<p class="mb-0 card-subtitle text-muted">Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
						</div>						
						<div class="card-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="width:40%;">Name</th>
										<th class="d-none d-md-table-cell" style="width:25%">Date of Birth</th>
										<th style="width:15%;">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Ashley Briggs</td>
										<td class="d-none d-md-table-cell text-fade">Jun 21, 1961</td>
										<td class="table-action min-w-100">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Carl Jenkins</td>
										<td class="d-none d-md-table-cell text-fade">May 15, 1948</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Bertha Martin</td>
										<td class="d-none d-md-table-cell text-fade">Sep 14, 1965</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Stacie Hall</td>
										<td class="d-none d-md-table-cell text-fade">Apr 2, 1971</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Amanda Jones</td>
										<td class="d-none d-md-table-cell text-fade">Oct 12, 1966</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Contextual Classes</h5>
							<p class="mb-0 card-subtitle text-muted">Use contextual classes to color table rows or individual cells.</p>
						</div>						
						<div class="card-body">
							<table class="table">
								<thead>
									<tr>
										<th style="width:40%;">Name</th>
										<th class="d-none d-md-table-cell" style="width:25%">Date of Birth</th>
										<th style="width:15%;">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Ashley Briggs</td>
										<td class="d-none d-md-table-cell text-fade">Jun 21, 1961</td>
										<td class="table-action min-w-100">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr class="table-primary">
										<td>Carl Jenkins</td>
										<td class="d-none d-md-table-cell text-fade">May 15, 1948</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Bertha Martin</td>
										<td class="d-none d-md-table-cell text-fade">Sep 14, 1965</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr class="table-success">
										<td>Stacie Hall</td>
										<td class="d-none d-md-table-cell text-fade">Apr 2, 1971</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
									<tr>
										<td>Amanda Jones</td>
										<td class="d-none d-md-table-cell text-fade">Oct 12, 1966</td>
										<td class="table-action">
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
											<a href="#" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Always responsive</h5>
							<p class="mb-0 card-subtitle text-muted">Across every breakpoint, use <code>.table-responsive</code> for horizontally scrolling tables.</p>
						</div>						
						<div class="card-body">
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Heading</th>
											<th scope="col">Heading</th>
											<th scope="col">Heading</th>
											<th scope="col">Heading</th>
											<th scope="col">Heading</th>
											<th scope="col">Heading</th>
											<th scope="col">Heading</th>
											<th scope="col">Heading</th>
											<th scope="col">Heading</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  
 <?
    include 'footer.php';
 ?>