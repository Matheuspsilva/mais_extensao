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
                        <a href="{{ route('relatorio.index') }}" class="btn btn-default">Back</a>
                       </div>
                       <div class="container" style="width: 555px;margin: auto;height: 375px; ">
                             <div class="col-md-6">
                                   <embed src="{{ URL::to('/') }}/arquivo/{{ $data->arquivo }}" width="600" height="800"/>
                                   <a href="{{ URL::to('/') }}/arquivo/{{ $data->arquivo }}" class="btn btn-success">Download</a>
                             </div>
                       
                       </div>

</div>


@endsection
