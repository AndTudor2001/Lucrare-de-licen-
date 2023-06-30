@extends('vendor.vendor_dashboard')
@section('vendor')


@php
	$id = Auth::user()->id;
	$vendorId = App\Models\User::find($id);
	$status = $vendorId->status; 
	$year = date('Y');
	$year = App\Models\Order::where('order_year',$year)->sum('amount');
	$pending = App\Models\Order::where('status','pending')->get();
@endphp

@if($status === 'active')
	<h4>Vendor Account is <span class="text-success">Active</span> </h4>
	@else
	<h4>Vendor Account is <span class="text-danger">InActive</span> </h4>
	<p class="text-danger"><b> Please wait, Admin will check and approve your account</b></p>
	@endif

<div class="page-content">

<div class="col">
							<div class="card radius-10 bg-gradient-ibiza">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">{{ count($pending) }}</h5>
									<div class="ms-auto">
                                        <i class='bx bx-envelope fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Pending Orders</p>
									
								</div>
							</div>
						 </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ohhappiness">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">${{ $year }}USD</h5>
									<div class="ms-auto">
                                        <i class='bx bx-group fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-3 bg-light-transparent" style="height:3px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Yearly Sale</p>
									
								</div>
							</div>
						</div>
						
					@php
$orders = App\Models\Order::where('status','pending')->orderBy('id','DESC')->limit(10)->get();
@endphp

					  <div class="card radius-10">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-0">Orders Summary</h5>
								</div>
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<hr>
							<div class="table-responsive">
								<table class="table align-middle mb-0">
									<thead class="table-light">
										<tr>
										<th>Sl</th>
											<th>Date</th>
											<th>Invoice</th>
											<th>Amount</th>
											<th>Payment</th>
											<th>Status</th> 
										</tr>
									</thead>
									<tbody>

@foreach($orders as $key => $order)								
<tr>
<td>{{ $key+1 }}</td>

<td>{{ $order->order_date }}</td>
<td>{{ $order->invoice_no }}</td>
<td>${{ $order->amount }}</td>
<td>{{ $order->payment_method }}</td>
<td>
<div class="badge rounded-pill bg-light-info text-info w-100"> 
				{{ $order->status  }}</div>
		</td>

	</tr>
	@endforeach

									</tbody>
								</table>
							</div>
						</div>
					</div>
			</div>

@endsection