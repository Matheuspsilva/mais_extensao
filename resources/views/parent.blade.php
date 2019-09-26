<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mais Extensão</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

 </head>
 <body>

  
   <!-- Static navbar -->
   <nav class="navbar navbar-default navbar-static-top">
         <div class="container">
           <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="#">Mais Extensão</a>
           </div>
           <div id="navbar" class="navbar-collapse collapse">
             <ul class="nav navbar-nav">
               <li><a href="#">Login</a></li>
               <li><a href="{{ route('crud.index') }}">Professores</a></li>
               <li><a href="{{ route('aluno.index') }}">Alunos</a></li>
               <li><a href="{{ route('projeto.index') }}">Projeto</a></li>
               <li><a href="{{ route('relatorio.index') }}">Relatorios</a></li>
               
             </ul>
           </div><!--/.nav-collapse -->
         </div>
       </nav>
    
  {{-- <div class="container">     --}}

     {{-- Display content of a given section--}}
     @yield('main')
    {{-- </div> --}}
 </body>
</html>