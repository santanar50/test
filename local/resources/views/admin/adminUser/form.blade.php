<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Name</label>
{!! Form::text('name',null,['id' => 'code','required' => 'required','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Username</label>
{!! Form::text('username',null,['id' => 'code','required' => 'required','class' => 'form-control'])!!}
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
@if($data->id)
<label for="inputEmail6">Change Password</label>
<input type="password" name="password" class="form-control">
@else
<label for="inputEmail6">Password</label>
<input type="password" name="password" class="form-control" required="required">
@endif
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Assign Permission</label>
<select name="perm[]" class="form-control js-select2" multiple="true">
@foreach(DB::table('perm')->get() as $p)
<option value="{{ $p->name }}" @if(in_array($p->name,$array)) selected @endif>{{ $p->name }}</option>
@endforeach
</select>
</div>
</div>

<button type="submit" class="btn btn-success btn-cta">Save changes</button>
