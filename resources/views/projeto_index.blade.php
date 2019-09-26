@extends('parent')
{{-- Herda conteúdo de parent.blade.php --}}

@section('main')
{{-- Define uam seção de parent.blade --}}

<div class="container">

    <div  align="center">
        <h4>Listar projetos</h4>
      </div>
      
      
      <div align="right">
        <a href="{{ route('projeto.create') }}" class="btn btn-success btn-sm">Add</a>
      </div>
      
      @if($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      
      <table class="table table-bordered table-striped">
       <tr>
        <th width="5%">ID</th>
        <th width="25%">Nome</th>
        <th width="15%">Área Temática</th>
        <th width="20%">Centro</th>
        <th width="10%">Professor</th>
        <th width="35%">Action</th>
       </tr>
       {{-- Fetch data --}}
       @foreach($data as $row)
        <tr>
          {{-- Return public folder/images/ --}}
         <td>{{ $row->id }}</td>
         <td>{{ $row->nome_projeto }}</td>
         <td>{{ $row->area_tematica }}</td>
         <td>{{ $row->centro }}</td>
         <td>{{ $row->nome }}</td>
      
      
         <td>
          <a href="{{ route('projeto.show', $row->id) }}" class="btn btn-primary">Dashboard</a>
          <a href="{{ route('projeto.edit', $row->id) }}" class="btn btn-primary">Edit</a>
      
      
          <form action="{{ route('projeto.destroy', $row->id) }}" method="post">
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
