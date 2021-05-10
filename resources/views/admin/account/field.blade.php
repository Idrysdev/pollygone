    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nom d\'utilisateur *') !!}
    {!! Form::text('name', $account->name ?? '', ['class' => 'form-control','placeholder' => 'nom de l\'utilisateur' ]) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
    </div>

    <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
    {!! Form::label('surname', 'Prénom(s)') !!}
    {!! Form::text('surname', $account->surname ?? '', ['class' => 'form-control', 'placeholder' => 'Prénom(s) de l\'utilisateur'  ]) !!}
    <small class="text-danger">{{ $errors->first('surname') }}</small>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email *') !!}
    {!! Form::email('email', $account->email ?? '', ['class' => 'form-control',  'placeholder' => 'Email de l\'utilisateur']) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
    </div>

    <div class ="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {!! Form::label('password', 'Mot de passe *') !!}
    {!! Form::password('password', ['class' => 'form-control',  'placeholder' => 'Mot de passe de l\'utilisateur']) !!}
    <small class="text-danger">{{ $errors->first('password') }}</small>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {!! Form::label('password', 'Confirmer le mot de passe *') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmer mot de passe']) !!}
    </div>

    <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
    {!! Form::label('role_id', 'roles') !!}
    <select name="role_id" id="role_id" class="custom-select">
        <option value="">-- select --</option>
        @foreach ($roles as $role)
        <option value="{{ $role->id }}" {{ $account->role_id == $role->id ? 'selected' : '' }} >{{ $role->name }}</option>
        @endforeach

    </select>
    <small class="text-danger">{{ $errors->first('role_id') }}</small>
    </div>


    <div class="form-group">
        <div class="custom-control {{ $errors->has('active') ? ' has-error' : '' }} custom-switch">
            <input type="checkbox" name="active"   {{ $account->active == 1 ? 'checked' : '' }} class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1">Actif</label>
            <small class="text-danger">{{ $errors->first('active') }}</small>
        </div>
    </div>
