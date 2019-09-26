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
        <a href="{{ route('projeto.index') }}" class="btn btn-default">Back</a>
       </div>
       
       <form method="post" action="{{ route('projeto.store') }}" enctype="multipart/form-data">
       
        @csrf
        <div class="form-group">
         <label class="col-md-4 text-right">Nome</label>
         <div class="col-md-8">
          <input type="text" name="nome_projeto" class="form-control input-lg" />
         </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
         <label class="col-md-4 text-right">Área Temática</label>
         <div class="col-md-8">
          <input type="text" name="area_tematica" class="form-control input-lg" />
         </div>
        </div>
        <br />
        <br />
        <br />
        {{-- Curso --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Curso</label>
           <div class="col-md-8">
            <input type="text" name="curso" class="form-control input-lg" />
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
        {{-- Investimento --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Investimento</label>
           <div class="col-md-8">
            <input type="number" name="investimento" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
        {{-- Semestre  --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Semestre</label>
           <div class="col-md-8">
            <input type="number" name="semestre" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
        {{-- Demandas --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Demandas</label>
           <div class="col-md-8">
            <input type="text" name="demandas" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
         {{-- Problemáticas --}}
         <div class="form-group">
             <label class="col-md-4 text-right">Problemáticas</label>
             <div class="col-md-8">
              <input type="text" name="problematicas" class="form-control input-lg" />
             </div>
            </div>
          <br /><br /><br />
           {{-- Observações --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Observações</label>
           <div class="col-md-8">
            <input type="text" name="observacoes" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
       
         
       
       
       
        <div class="form-group text-center">
         <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
        </div>
       
       </form>

</div>

@endsection
