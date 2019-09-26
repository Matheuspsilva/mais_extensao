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

{{-- 
   <div align="right">
      <a href="{{ route('projeto.index') }}" class="btn btn-default">Back</a>
   </div> --}}

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <div class="profile clearfix ">
                  <div class="profile_pic">
                  {{-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="150" height="150" class="img-responsive img-circle" alt="Generic placeholder thumbnail"> --}}
                  <img src="{{ asset('img/user-placeholder.png') }}" width="150" height="150" class="img-responsive img-circle" alt="Generic placeholder thumbnail">
                  {{-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="..." class="img-circle profile_img"> --}}
                  </div>
                  <div class="profile_info">
                  <h2 >Usuários</h2>
                  </div>
         </div>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Enviar Relatórios <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Adicionar Alunos</a></li>
            <li><a href="#">Relatórios</a></li>
            <li><a href="#">Exportar</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Verificar Datas</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-md-9">
          <h1 class="page-header text-center">Dashboard</h1>

          
          <h2 class="sub-header">Relatórios</h2>
          <div class="table-responsive">
             
 <form method="post" action="{{ route('relatorio.store', $data->id) }}" enctype="multipart/form-data">
      @csrf
      @method('post')
           <hr>
           <div class="form-group">
               <label class="col-md-4 text-right">Relatório</label>
               <div class="col-md-8">
                <input type="file" name="arquivo" />
            </div>
            <br>
            <br />
           </div>
            <div class="form-group">
                    <label class="col-md-4 text-right">Semestre</label>
                    <div class="col-md-8">
                     <input type="number" name="semestre" class="form-control input-lg" />
                    </div>
            </div>
            <br>
            <br>
            <br/>
           <div class="form-group">
               <div class="col-md-8">
                <input class="hidden" type="text" name="projetos_id" value="{{ $data->id }}" />
               </div>
            </div>
      <div class="form-group text-right">
         <input type="submit" name="add" class="btn btn-primary input-lg" value="Enviar Relatório" />
      </div>
          
 </form>
 <br />

 <h2 class="sub-header">Alunos</h2>

            <form method="post" action="{{ route('aluno.store') }}" enctype="multipart/form-data">

               @csrf
               <div class="form-group">
                     <hr>
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
               <div class="form-group"  >
                     <div class="col-md-8">
                     {{-- <label class="col-md-4 text-right">ID_PROJETO</label> --}}
                     <input  type="text" name="projetos_id" class="hidden" value="{{ $data->id }}" />
                     </div>
               </div>
            
               <div class="form-group text-right">
               <input type="submit" name="add" class="btn btn-primary input-lg" value="Add Aluno" />
               </div>
            
            </form>
          </div>
        </div>
      </div>
    </div>










@endsection
