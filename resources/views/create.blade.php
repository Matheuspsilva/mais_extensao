{{-- Herda parent --}}
@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif

<div class="container">
    <div align="right">
        <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
       </div>
       
       <form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">
       
        @csrf
        <div class="form-group">
         <label class="col-md-4 text-right">Nome</label>
         <div class="col-md-8">
          <input type="text" name="nome" class="form-control input-lg" />
         </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
         <label class="col-md-4 text-right">Email</label>
         <div class="col-md-8">
          <input type="email" name="email" class="form-control input-lg" />
         </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
           <label class="col-md-4 text-right">Password</label>
           <div class="col-md-8">
            <input type="password" name="password" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
       
        {{-- Matricula --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Matricula</label>
           <div class="col-md-8">
            <input type="text" name="matricula" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
         {{-- Centro --}}
       
        <div class="form-group">
           <label class="col-md-4 text-right">Centro</label>
           <div class="col-md-8">
            <input type="text" name="centro" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
        {{-- Departamento --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Departamento</label>
           <div class="col-md-8">
            <input type="text" name="departamento" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
        {{-- Curso  --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Curso</label>
           <div class="col-md-8">
            <input type="text" name="curso" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
        {{-- Titulação --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Titulação</label>
           <div class="col-md-8">
            <input type="text" name="titulacao" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
       
       
       
        <div class="form-group text-center">
         <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
        </div>
       
       </form>
       
</div>

@endsection
