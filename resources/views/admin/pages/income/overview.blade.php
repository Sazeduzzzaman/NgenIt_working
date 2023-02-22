@extends('admin.master')
@section('content')

    <div class="content-wrapper">
        <!-- Content area -->
				<div class="content">

					<!-- Table components -->
					<div class="card">

						<div class="card-body">
							<div class="col-lg-12 padding">

								<h3 class="text-center"> Income and Expense - Profit / Loss</h3>

								<div class="col-lg-8 offset-lg-3">
									<!-- insite menu start-->
									<ul class="nav nav-pills nav-pills-outline nav-pills-toolbar">
										<li class="nav-item">
											<a href="{{ route('income-expense.overview') }}" class="nav-link active">Overview</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('income-expense.ledger') }}" class="nav-link">Ledger Book</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('income.index') }}" class="nav-link">Income</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('expense.index') }}" class="nav-link">Expense</a>
										</li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
												aria-expanded="true">Cataagorical</a>
											<div class="dropdown-menu dropdown-menu-end" data-popper-placement="top-end"
												style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate(0px, -46px);">
												<a href="cataagorical.html" class="dropdown-item">Cataagorical</a>
												<a href="cataagorical.html" class="dropdown-item">Debts</a>
											</div>
										</li>
									</ul>
									<br>

									<!-- insite menu end-->
								</div>

							</div>

							<table class="table table-xs table-bordered table-responsive">

								<thead>
									<tr style="background-color:rgb(58, 60, 61) ">
										<th class="text-white text-center"> Month </th>
										<th class="text-white text-center"> Income </th>
										<th class="text-white text-center"> Expenses </th>
										<th class="text-white text-center"> Profit/Loss </th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td class="text-center">Jan</td>
										<td class="text-center">3,720,613.00</td>
										<td class="text-center">3,719,605.00</td>
										<td class="text-center">100.03%</td>
									</tr>
									<tr>
										<td class="text-center">Feb</td>
										<td class="text-center">1,450,585.00</td>
										<td class="text-center">1,165,830.00</td>
										<td class="text-center">39.00%</td>
									</tr>
									<tr>
										<td class="text-center">Mar</td>
										<td class="text-center">1,450,585.00</td>
										<td class="text-center">1,165,830.00</td>
										<td class="text-center">39.00%</td>
									</tr>
									<tr>
										<td class="text-center">Apr </td>
										<td class="text-center">1,450,585.00</td>
										<td class="text-center">1,165,830.00</td>
										<td class="text-center">39.00%</td>
									</tr>
									<tr>
										<td class="text-center">May </td>
										<td class="text-center">1,450,585.00</td>
										<td class="text-center">1,165,830.00</td>
										<td class="text-center">39.00%</td>
									</tr>
									<tr>
										<td class="text-center">Jun </td>
										<td class="text-center">1,450,585.00</td>
										<td class="text-center">1,165,830.00</td>
										<td class="text-center">39.00%</td>
									</tr>
									<tr>
										<td class="text-center">Jul </td>
										<td class="text-center">1,450,585.00</td>
										<td class="text-center">1,165,830.00</td>
										<td class="text-center">39.00%</td>
									</tr>
									<tr>
										<td class="text-center">Aug </td>
										<td class="text-center">1,450,585.00</td>
										<td class="text-center">1,165,830.00</td>
										<td class="text-center">39.00%</td>
									</tr>
									<tr>
										<td class="text-center">Sep </td>
										<td class="text-center">1,450,585.00</td>
										<td class="text-center">1,165,830.00</td>
										<td class="text-center">39.00%</td>
									</tr>
									<tr>
										<td class="text-center">Oct </td>
										<td class="text-center">1,450,585.00</td>
										<td class="text-center">1,165,830.00</td>
										<td class="text-center">39.00%</td>
									</tr>
									<tr>
										<td class="text-center">Nov </td>
										<td class="text-center">1,450,585.00</td>
										<td class="text-center">1,165,830.00</td>
										<td class="text-center">39.00%</td>
									</tr>
									<tr>
										<td class="text-center">Dec </td>
										<td class="text-center">1,450,585.00</td>
										<td class="text-center">1,165,830.00</td>
										<td class="text-center">39.00%</td>
									</tr>
								</tbody>


								<tfoot>
									<tr style="background-color:rgb(108, 113, 116)">
										<th class="text-center">Total </th>
										<th class="text-center">1,450,585.00</th>
										<td class="text-center">1,165,830.00</th>
										<th class="text-center">39.00%</th>
									</tr>
								</tfoot>


							</table>



						</div>



					</div>

				</div>
    </div>

@endsection
