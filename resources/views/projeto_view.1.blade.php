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
<div align="right">
 <a href="{{ route('projeto.index') }}" class="btn btn-default">Back</a>
</div>

{{-- Id projeto --}}
<label class="col-md-4 text-right">Id projeto</label>
<div class="col-md-8">
 <input type="text" name="id" value="{{ $data->id }}" class="form-control input-lg" />
</div>
<br /><br /><br />

  <label class="col-md-4 text-right">Nome</label>
  <div class="col-md-8">
   <input type="text" name="nome_projeto" value="{{ $data->nome_projeto }}" class="form-control input-lg" />
  </div>
 <br /><br /><br />
 
  <label class="col-md-4 text-right">Área Temática</label>
  <div class="col-md-8">
   <input type="text" name="area_tematica" value="{{ $data->area_tematica }}" class="form-control input-lg" />
  </div>
 <br />
 <br />
 <br />

 {{-- Curso --}}
    <label class="col-md-4 text-right">Curso</label>
    <div class="col-md-8">
     <input type="text" name="curso" value="{{ $data->curso }}" class="form-control input-lg" />
    </div>
 <br /><br /><br />
  {{-- Centro --}}

    <label class="col-md-4 text-right">Centro</label>
    <div class="col-md-8">
     <input type="text" name="centro" value="{{ $data->centro }}" class="form-control input-lg" />
    </div>
 <br /><br /><br />
 {{-- Investimento --}}
    <label class="col-md-4 text-right">Investimento</label>
    <div class="col-md-8">
     <input type="number" name="investimento" value="{{ $data->investimento }}" class="form-control input-lg" />
    </div>
 <br /><br /><br />
 {{-- Semestre  --}}
    <label class="col-md-4 text-right">Semestre</label>
    <div class="col-md-8">
     <input type="number" name="semestre" value="{{ $data->semestre }}" class="form-control input-lg" />
    </div>
 <br /><br /><br />
 {{-- Demandas --}}
    <label class="col-md-4 text-right">Demandas</label>
    <div class="col-md-8">
     <input type="text" name="demandas" value="{{ $data->demandas }}" class="form-control input-lg" />
    </div>
 <br /><br /><br />
  {{-- Problemáticas --}}
      <label class="col-md-4 text-right">Problemáticas</label>
      <div class="col-md-8">
       <input type="text" name="problematicas" value="{{ $data->problematicas }}" class="form-control input-lg" />
      </div>
   <br /><br /><br />
    {{-- Observações --}}
    <label class="col-md-4 text-right">Observações</label>
    <div class="col-md-8">
     <input type="text" name="observacoes" value="{{ $data->observacoes }}" class="form-control input-lg" />
    </div>
 <br /><br /><br />



 <form method="post" action="{{ route('relatorio.store', $data->id) }}" enctype="multipart/form-data">
      @csrf
      @method('post')
           <hr>
           <h3 class="text-center">Relatórios</h3>
           <div class="form-group">
               <label class="col-md-4 text-right">Relatório 1</label>
               <div class="col-md-8">
                <input type="file" name="localizacao" />
               </div>
           </div>
           <div class="form-group">
               <div class="col-md-8">
                <input class="hidden" type="text" name="projetos_id" value="{{ $data->id }}" />
               </div>
            </div>
      <div class="form-group text-right">
         <input type="submit" name="add" class="btn btn-primary input-lg" value="Enviar Relatório" />
      </div>
          
 </form>
 <br /><br /><br />

 <form method="post" action="{{ route('aluno.store') }}" enctype="multipart/form-data">

   @csrf
   <div class="form-group">
         <hr>
         <h3 class="text-center">Alunos</h3>
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
  
   {{-- Curso  --}}
   <div class="form-group">
      <label class="col-md-4 text-right">Curso</label>
      <div class="col-md-8">
       <input type="text" name="curso" class="form-control input-lg" />
      </div>
     </div>
   <br /><br /><br />
{{-- Id_projeto --}}
   <div class="form-group">
         <div class="col-md-8">
         <label class="col-md-4 text-right">ID_PROJETO</label>
          <input  type="text" name="projetos_id" value="{{ $data->id }}" />
         </div>
   </div>
  
   <div class="form-group text-center">
    <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
   </div>
  
  </form>




          

@endsection
