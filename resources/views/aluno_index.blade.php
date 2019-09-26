@extends('parent')
{{-- Herda conteúdo de parent.blade.php --}}

@section('main')
{{-- Define uam seção de parent.blade --}}

<div class="container">
  
<div  align="center">
    <h4>Listar alunos</h4>
  </div>
  
  <div align="right">
    <a href="{{ route('aluno.create') }}" class="btn btn-success btn-sm">Add</a>
  </div>
  
  @if($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
  
  <table class="table table-bordered table-striped">
   <tr>
    <th width="15%">Nome</th>
    <th width="25%">Email</th>
    <th width="15%">Matricula</th>
    <th width="25%">Projeto</th>
    <th width="30%">Action</th>
   </tr>
   {{-- Fetch data --}}
   @foreach($data as $row)
    <tr>
      {{-- Return public folder/images/ --}}
     <td>{{ $row->nome }}</td>
     <td>{{ $row->email }}</td>
     <td>{{ $row->matricula }}</td>
     <td>{{ $row->nome_projeto }}</td>
  
     <td>
      <a href="{{ route('aluno.show', $row->id) }}" class="btn btn-primary">Show</a>
      <a href="{{ route('aluno.edit', $row->id) }}" class="btn btn-primary">Edit</a>
      <form action="{{ route('aluno.destroy', $row->id) }}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
     </form>
  
</div>

 @endforeach
</table>
{{-- Link de paginação --}}
{{-- {!! $data->links() !!} --}}
@endsection
