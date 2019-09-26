@extends('parent')
{{-- Herda conteúdo de parent.blade.php --}}

@section('main')
{{-- Define uam seção de parent.blade --}}
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
<div class="container">
  
            
    <div align="right">
        <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
    </div>
    <br />
<form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
<div class="form-group">
<label class="col-md-4 text-right">Nome</label>
<div class="col-md-8">
<input type="text" name="nome" value="{{ $data->nome }}" class="form-control input-lg" />
</div>
</div>
<br />
<br />
<br />
<div class="form-group">
<label class="col-md-4 text-right">Email</label>
<div class="col-md-8">
<input type="text" name="email" value="{{ $data->email }}" class="form-control input-lg" />
</div>
</div>
<br />
<br />
<br />
<div class="form-group">
<label class="col-md-4 text-right">Password</label>
<div class="col-md-8">
 <input type="password" name="password" value="{{ $data->password }}" class="form-control input-lg" />
</div>
</div>
<br /><br /><br />

{{-- Matricula --}}
<div class="form-group">
<label class="col-md-4 text-right">Matricula</label>
<div class="col-md-8">
 <input type="text" name="matricula" value="{{ $data->matricula }}" class="form-control input-lg" />
</div>
</div>
<br /><br /><br />
{{-- Centro --}}

<div class="form-group">
<label class="col-md-4 text-right">Centro</label>
<div class="col-md-8">
 <input type="text" name="centro" value="{{ $data->centro }}" class="form-control input-lg" />
</div>
</div>
<br /><br /><br />
{{-- Departamento --}}
<div class="form-group">
<label class="col-md-4 text-right">Departamento</label>
<div class="col-md-8">
 <input type="text" name="departamento" value="{{ $data->departamento }}" class="form-control input-lg" />
</div>
</div>
<br /><br /><br />
{{-- Curso  --}}
<div class="form-group">
<label class="col-md-4 text-right">Curso</label>
<div class="col-md-8">
 <input type="text" name="curso" value="{{ $data->curso }}" class="form-control input-lg" />
</div>
</div>
<br /><br /><br />
{{-- Titulação --}}
<div class="form-group">
<label class="col-md-4 text-right">Titulação</label>
<div class="col-md-8">
 <input type="text" name="titulacao" value="{{ $data->titulacao }}" class="form-control input-lg" />
</div>
</div>
<br /><br /><br />


<div class="form-group text-center">
<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
</div>
</form>
</div>

@endsection