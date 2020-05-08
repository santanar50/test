@include('admin.language.header')
<br>
<div class="tab-content" id="myTabContent1">

@foreach(DB::table('language')->orderBy('sort_no','ASC')->get() as $l)

<div class="tab-pane fade show" id="lang{{ $l->id }}" role="tabpanel" aria-labelledby="lang{{ $l->id }}-tab">

<input type="hidden" name="lid[]" value="{{ $l->id }}">


<div class="form-row">
<div class="form-group col-md-6">
<label for="asd">Item Name</label>
{!! Form::text('l_name[]',$data->getSData($data->s_data,$l->id,0),['placeholder' => 'Name','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="asd">Description</label>
{!! Form::text('l_desc[]',$data->getSData($data->s_data,$l->id,1),['placeholder' => 'Description','class' => 'form-control'])!!}
</div>
</div>


</div>
@endforeach

<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Select Category</label>
<select name="cate_id" class="form-control" required="required">
<option value="">Select</option>
@foreach($cates as $cate)
<option value="{{ $cate->id }}" @if($data->category_id == $cate->id) selected @endif>{{ $cate->name }}</option>
@endforeach
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Name</label>
{!! Form::text('name',null,['id' => 'code','placeholder' => 'Name','class' => 'form-control'])!!}
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Description</label>
{!! Form::text('description',null,['id' => 'code','placeholder' => 'Item Description','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Item Type</label>
<select name="nonveg" class="form-control">
<option value="0" @if($data->nonveg == 0) selected @endif>Veg</option>
<option value="1" @if($data->nonveg == 1) selected @endif>Nonveg</option>
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Status</label>
<select name="status" class="form-control">
	<option value="0" @if($data->status == 0) selected @endif>Active</option>
	<option value="1" @if($data->status == 1) selected @endif>Disbaled</option>
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Image</label>
<input type="file" name="img" class="form-control">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Sort Order</label>
{!! Form::number('sort_no',null,['id' => 'code','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Quantity</label>
{!! Form::number('qty',null,['id' => 'code','class' => 'form-control'])!!}
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Small Price</label>
{!! Form::text('small_price',null,['id' => 'code','placeholder' => 'Small Quantity Price','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Medium Price</label>
{!! Form::text('medium_price',null,['id' => 'code','placeholder' => 'Medium Quantity Price','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Large/Full Price</label>
{!! Form::text('large_price',null,['id' => 'code','placeholder' => 'Large Quantity Price','class' => 'form-control'])!!}
</div>
</div>
</div>
</div>
<button type="submit" class="btn btn-success btn-cta">Save changes</button>
