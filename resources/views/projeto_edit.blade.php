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
       
       <form method="post" action="{{ route('projeto.update', $data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
         <label class="col-md-4 text-right">Nome</label>
         <div class="col-md-8">
          <input type="text" name="nome_projeto" value="{{ $data->nome_projeto }}" class="form-control input-lg" />
         </div>
        </div>
        <br />
        <br />
        <br />
        <div class="form-group">
         <label class="col-md-4 text-right">Área Temática</label>
         <div class="col-md-8">
          <input type="text" name="area_tematica" value="{{ $data->area_tematica }}" class="form-control input-lg" />
         </div>
        </div>
        <br />
        <br />
        <br />
       
        {{-- Curso --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Curso</label>
           <div class="col-md-8">
            <input type="text" name="curso" value="{{ $data->curso }}" class="form-control input-lg" />
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
        {{-- Investimento --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Investimento</label>
           <div class="col-md-8">
            <input type="number" name="investimento" value="{{ $data->investimento }}" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
        {{-- Semestre  --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Semestre</label>
           <div class="col-md-8">
            <input type="number" name="semestre" value="{{ $data->semestre }}" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
        {{-- Demandas --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Demandas</label>
           <div class="col-md-8">
            <input type="text" name="demandas" value="{{ $data->demandas }}" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
         {{-- Problemáticas --}}
         <div class="form-group">
             <label class="col-md-4 text-right">Problemáticas</label>
             <div class="col-md-8">
              <input type="text" name="problematicas" value="{{ $data->problematicas }}" class="form-control input-lg" />
             </div>
            </div>
          <br /><br /><br />
           {{-- Observações --}}
        <div class="form-group">
           <label class="col-md-4 text-right">Observações</label>
           <div class="col-md-8">
            <input type="text" name="observacoes" value="{{ $data->observacoes }}" class="form-control input-lg" />
           </div>
          </div>
        <br /><br /><br />
       
       
        <div class="form-group text-center">
         <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
        </div>
       
       </form>

</div>

@endsection
