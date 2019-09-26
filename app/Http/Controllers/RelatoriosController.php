<?php

namespace App\Http\Controllers;
use App\Relatorio;
use DB;
use Illuminate\Http\Request;

class RelatoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = DB::table('relatorios')
        ->join('projetos', 'projetos.id', '=', 'relatorios.projetos_id')
        ->select('relatorios.id', 'relatorios.arquivo', 'relatorios.semestre', 'projetos.nome_projeto')
        ->get();

        return view('relatorio_index', compact('data'));

        // $data = Relatorio::latest()->paginate(5);
        // return view('relatorio_index', compact('data'))
        //         ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//
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
            'arquivo'         =>  'required|max:2048',
            'projetos_id'         =>  'required',
            'semestre'         =>  'required'

        ]);

        $arquivo = $request->file('arquivo');

        $new_name = rand() . '.' . $arquivo->getClientOriginalExtension();
        $arquivo->move(public_path('arquivo'), $new_name);
        $form_data = array(
            'arquivo'            =>   $new_name,
            'projetos_id'            =>   $request->projetos_id,
            'semestre'         =>  $request->semestre,

        );

        Relatorio::create($form_data);

        return redirect('projeto')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Relatorio::findOrFail($id);
        return view('relatorio_view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
