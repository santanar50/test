@extends('admin.layout.main')

@section('title') Push Notifications @endsection

@section('icon') mdi-send @endsection


@section('content')

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-10 mx-auto  mt-2">
<div class="card py-3 m-b-30">
<div class="card-body">
{!! Form::open(['url' => [$form_url],'files' => true],['class' => 'col s12']) !!}


<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Title</label>
{!! Form::text('title',null,['id' => 'code','class' => 'form-control','required' => 'required'])!!}
</div>
</div>

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Description (less then 250 words)</label>
{!! Form::textarea('desc',null,['id' => 'code','class' => 'form-control','required' => 'required','maxlength' => '250'])!!}
</div>
</div>

<button type="submit" class="btn btn-success btn-cta">Send</button>


</form>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection