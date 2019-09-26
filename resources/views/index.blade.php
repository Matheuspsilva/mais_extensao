@extends('parent')
{{-- Herda conteúdo de parent.blade.php --}}

@section('main')
{{-- Define uam seção de parent.blade --}}

<div class="container">

    <div  align="center">
        <h4>Listar professores</h4>
      </div>
      
      
      <div align="right">
        <a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">Add</a>
      </div>
      
      @if($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      
      <table class="table table-bordered table-striped">
       <tr>
        <th width="5%">Id</th>
        <th width="15%">Nome</th>
        <th width="30%">Email</th>
        <th width="20%">Matricula</th>
        <th width="30%">Action</th>
       </tr>
       {{-- Fetch data --}}
       @foreach($data as $row)
        <tr>
          {{-- Return public folder/images/ --}}
         <td>{{ $row->id }}</td>
         <td>{{ $row->nome }}</td>
         <td>{{ $row->email }}</td>
         <td>{{ $row->matricula }}</td>
      
         <td>
          <a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary" style="width: 90px; margin:2px;">Add Projeto</a>
          <a href="{{ route('crud.edit', $row->id) }}" class="btn btn-primary" style="width: 90px; margin:2px;">Edit</a>
          {{-- <a href="{{ route('projeto.show', $row->id) }}" class="btn btn-primary" style="width: 90px; margin:2px;">Projeto</a> --}}
      
          <form action="{{ route('crud.destroy', $row->id) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" style="width: 200px;">Delete</button>
         </form>
      

</div>
 @endforeach
</table>
{{-- Link de paginação --}}
{!! $data->links() !!}
@endsection
