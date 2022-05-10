    {!!Form::label('name', 'Name');!!}
    {!! Form::text('name',$user->name ?? '',['id'=>'name','name'=>'name','class'=>'form-control','placeholder'=>'Enter Your Name '] ); !!}

    {!! Form::label('email', 'E-Mail Address'); !!}
    {!! Form::email('email', $user->email ?? '',['id'=>'email','name'=>'email','class'=>'form-control','placeholder'=>'example@gmail.com'] ); !!}

    @section('pass')
    {!! Form::label('password', 'Password'); !!}
    {!! Form::password('password',['class'=>''] ); !!}
    @endsection

   <div class="form-group">
    <label for ="exampleFormControlselect1">User_Type</label>
    <select class="form-control" name="user_type">
        {{-- <option value="Admin1" disabled="true" selected="false">Admin1</option> --}}
        <option value="admin"  selected="true">Admin</option>
        <option value="regular">Regular</option>
    </select>
    </div>

