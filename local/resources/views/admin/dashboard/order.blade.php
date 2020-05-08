<div class="row">
<div class="col-lg-12 m-b-30">
<div class="card">
<div class="card-header">
<div class="card-title">Latest Orders</div>

<div class="card-controls">

<a href="#" class="js-card-refresh icon"> </a>

</div>

</div>

<div class="table-responsive">

<table class="table table-hover table-sm ">
<thead>
<tr>
<th>Order ID</th>
<th>Store</th>
<th>User</th>
<th>Address</th>
<th>Status</th>
<th>Order Time</th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
<tr>

@foreach($orders as $row)

<tr>
<td width="10%">#{{ $row->id }}</td>
<td width="20%">{{ $row->store }}
<br>
@if($row->type == 0)

<small style="color:blue">Home Delivery</small>

@else

<small style="color:green">Pickup</small>


@endif
<td width="15%">{{ $row->name }}<br>{{ $row->phone }}</td>
<td width="15%">{{ $row->address }}</td>
<td width="15%">{!! $row->getStatus($row->id) !!}</td>
<td width="15%">{{ date('d-M-Y',strtotime($row->created_at)) }}</td>
<td width="15%">@include('admin.order.action')</td>
@endforeach

</tr>

</tbody>
</table>

</div>

</div>
</div>
</div>