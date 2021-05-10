<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
{!! Form::label('name', 'Libellé *') !!}
{!! Form::text('name', $role->name ?? '', ['class' => 'form-control', 'placeholder' => 'Libellé du role']) !!}
<small class="text-danger">{{ $errors->first('name') }}</small>
</div>
