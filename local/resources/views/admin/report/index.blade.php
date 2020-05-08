@extends('admin.layout.main')

@section('title') Reporting @endsection

@section('icon') mdi-send @endsection


@section('content')

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-10 mx-auto  mt-2">
<div class="card py-3 m-b-30">
<div class="card-body">
{!! Form::open(['url' => [$form_url],'target' => '_blank'],['class' => 'col s12']) !!}

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail4">Select Store</label>
<select name="store_id" class="form-control">
<option value="">All Store</option>
@foreach($data as $user)
<option value="{{ $user->id }}">{{ $user->name }}</option>
@endforeach
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">From Date</label>
{!! Form::text('from',null,['class' => 'js-datepicker form-control',])!!}
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">To Date</label>
{!! Form::text('to',null,['class' => 'js-datepicker form-control'])!!}
</div>

</div>

<button type="submit" class="btn btn-success btn-cta">Get Report</button>


</form>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection