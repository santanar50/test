@include('user.order.dispatch')


@if($row->status == 0)

<div class="btn-group" role="group">
<button id="btnGroupDrop{{ $row->id }}" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Options </button>

<div class="dropdown-menu" aria-labelledby="btnGroupDrop{{ $row->id }}" style="padding: 10px 10px">

<a href="{{ Asset('order/edit/'.$row->id) }}">Edit Order</a><hr>
<a href="{{ Asset('orderStatus?id='.$row->id.'&status=1') }}" onclick="return confirm('Are you sure?')">Confirm Order</a><hr>

<a href="{{ Asset('orderStatus?id='.$row->id.'&status=2') }}" onclick="return confirm('Are you sure?')">Cancel Order</a><hr>

</div>
</div>


@elseif($row->status == 1)

@if(!$row->dboy)
<div class="btn-group" role="group">
<button id="btnGroupDrop{{ $row->id }}" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Options </button>

<div class="dropdown-menu" aria-labelledby="btnGroupDrop{{ $row->id }}" style="padding: 10px 10px">

<a href="{{ Asset('order/edit/'.$row->id) }}">Edit Order</a><hr>


@if($row->type == 2)

<a href="{{ Asset('orderStatus?id='.$row->id.'&status=4') }}" onclick="return confirm('Are you sure?')">Give Order</a><hr>

@else

<a href="javascript::void()" data-toggle="modal" data-target="#slideRightModal{{ $row->id }}">Assign Delivery Boy</a><hr>


@endif

<a href="{{ Asset('order/print/'.$row->id) }}" target="_blank">Print Bill</a><hr>

<a href="{{ Asset('orderStatus?id='.$row->id.'&status=2') }}" onclick="return confirm('Are you sure?')" style="color:red">Cancel Order</a>

</div>
</div>
@endif


@elseif($row->status == 2)

<span style="font-size: 12px">Cancelled at<br>{{ $row->status_time }}</span>

@elseif($row->status == 3)

<span style="font-size: 12px">Picked by {{ $row->dboy }} at<br>{{ $row->status_time }}</span>

<a href="{{ Asset('order/print/'.$row->id) }}" target="_blank">Print Bill</a>


@endif