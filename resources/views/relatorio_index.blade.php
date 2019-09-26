@extends('parent')
{{-- Herda conteúdo de parent.blade.php --}}

@section('main')
{{-- Define uam seção de parent.blade --}}

<div class="container">

    <div  align="center">
        <h4>Listar relatorios</h4>
      </div>
      
      <div align="right">
        <a href="{{ route('relatorio.create') }}" class="btn btn-success btn-sm">Add</a>
      </div>
      
      @if($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      
      <table class="table table-bordered table-striped">
       <tr>
        <th width="20%">Projeto</th>
        <th width="45%">Relatorio</th>
        <th width="5%">Semestre</th>
        <th width="30%">Action</th>
       </tr>
       {{-- Fetch data --}}
       @foreach($data as $row)
        <tr>
          {{-- Return public folder/images/ --}}
         <td>{{ $row->nome_projeto }}</td>
         <td>{{ $row->arquivo}}</td>
         <td>{{ $row->semestre}}</td>
      
      
         <td>
          <a href="{{ route('relatorio.show', $row->id) }}" class="btn btn-primary">Show</a>
          <a href="{{ route('relatorio.edit', $row->id) }}" class="btn btn-primary">Edit</a>
          <form action="{{ route('relatorio.destroy', $row->id) }}" method="post">
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
