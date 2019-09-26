<?php

namespace App\Http\Controllers;
use App\Aluno;
use App\alunos_projeto;
use DB;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = DB::table('alunos')
        ->join('projetos', 'projetos.id', '=', 'alunos.projetos_id')
        ->select('alunos.id', 'alunos.nome','alunos.email','alunos.matricula', 'projetos.nome_projeto')
        ->get();

        return view('aluno_index', compact('data'));

        // $data = Aluno::latest()->paginate(5);
        // return view('aluno_index', compact('data'))
        //         ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->validate([
            'projetos_id' => 'required',
            'nome'    =>  'required',
            'email'     =>  'required',
            'password'     =>  'required',
            'matricula'     =>  'required',
            'centro'     =>  'required',
            'curso'     =>  'required',

        ]);

        $form_data = array(
            'projetos_id' => $request->projetos_id,
            'nome'       =>   $request->nome,
            'email'        =>   $request->email,
            'password'        =>   $request->password,
            'matricula'        =>   $request->matricula,
            'centro'        =>   $request->centro,
            'curso'        =>   $request->curso,

        );

        Aluno::create($form_data);

        return redirect('aluno')->with('success', 'Data Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Aluno::findOrFail($id);
        return view('aluno_view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Aluno::findOrFail($id);
        return view('aluno_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'nome'    =>  'required',
            'email'     =>  'required',
            'password'     =>  'required',
            'matricula'     =>  'required',
            'centro'     =>  'required',
            'curso'     =>  'required',

        ]);

        $form_data = array(
            'nome'       =>   $request->nome,
            'email'        =>   $request->email,
            'password'        =>   $request->password,
            'matricula'        =>   $request->matricula,
            'centro'        =>   $request->centro,
            'curso'        =>   $request->curso,

        );


        Aluno::whereId($id)->update($form_data);

        return redirect('aluno')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Aluno::findOrFail($id);
        $data->delete();

        return redirect('aluno')->with('success', 'Data is successfully deleted');
    }
}
