@extends('parent')

@section('main')

<div class="container">

      <div class="jumbotron text-center">
            <div align="right">
             <a href="{{ route('aluno.index') }}" class="btn btn-default">Back</a>
            </div>
            <br />
           
              <label class="col-md-4 text-right">Nome</label>
              <div class="col-md-8">
               <input type="text" name="nome" value="{{ $data->nome }}" class="form-control input-lg" />
              </div>
             <br />
             <br />
             <br />
           
              <label class="col-md-4 text-right">Email</label>
              <div class="col-md-8">
               <input type="text" name="email" value="{{ $data->email }}" class="form-control input-lg" />
              </div>
             <br />
             <br />
             <br />
           
               <label class="col-md-4 text-right">Password</label>
               <div class="col-md-8">
                <input type="password" name="password" value="{{ $data->password }}" class="form-control input-lg" />
               </div>
              <br />
              <br />
              <br />
           
            {{-- Matricula --}}
           
               <label class="col-md-4 text-right">Matricula</label>
               <div class="col-md-8">
                <input type="text" name="matricula" value="{{ $data->matricula }}" class="form-control input-lg" />
               </div>
            <br /><br /><br />
             {{-- Centro --}}
           
               <label class="col-md-4 text-right">Centro</label>
               <div class="col-md-8">
                <input type="text" name="centro" value="{{ $data->centro }}" class="form-control input-lg" />
               </div>
            <br /><br /><br />
            {{-- Curso  --}}
           
               <label class="col-md-4 text-right">Curso</label>
               <div class="col-md-8">
                <input type="text" name="curso" value="{{ $data->curso }}" class="form-control input-lg" />
               </div>
            <br /><br /><br />
           
           </div>

</div>

@endsection

