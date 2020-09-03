<template>
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Balance</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small card -->
					<div class="small-box bg-info">
					<div class="inner">
						<h3>13,520.00</h3>

						<p>BALANCE</p>
					</div>
					<div class="icon">
						<i class="fas fa-money-bill-wave"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fas fa-arrow-circle-right"></i>
					</a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small card -->
					<div class="small-box bg-success">
					<div class="inner">
						<h3>SEP. 9, 2020<sup style="font-size: 20px"></sup></h3>

						<p>NEXT EXAM DATE</p>
					</div>
					<div class="icon">
						<i class="fas fa-calendar-day"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fas fa-arrow-circle-right"></i>
					</a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small card -->
					<div class="small-box bg-warning">
					<div class="inner">
						<h3>29</h3>

						<p>TOTAL UNITS EARNED</p>
					</div>
					<div class="icon">
						<i class="fas fa-clone"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fas fa-arrow-circle-right"></i>
					</a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small card -->
					<div class="small-box bg-danger">
					<div class="inner">
						<h3>65</h3>

						<p>Unique Visitors</p>
					</div>
					<div class="icon">
						<i class="fas fa-chart-pie"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fas fa-arrow-circle-right"></i>
					</a>
					</div>
				</div>
				<!-- ./col -->
			</div>
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Payment History</h1>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>
        <!-- /.row -->
        <div class="row">
            <!-- Content Header (Page header) -->
	
          <div class="col-12">
           
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
             
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
