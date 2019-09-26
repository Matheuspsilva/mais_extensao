<?php

namespace App\Http\Controllers;
use App\Projeto;
use DB;
use Illuminate\Http\Request;

class ProjetosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('projetos')
        ->join('professores', 'professores.id', '=', 'projetos.professores_id')
        ->select('projetos.id', 'projetos.nome_projeto','projetos.area_tematica','projetos.centro', 'professores.nome')
        ->get();

         return view('projeto_index', compact('data'));


        // $data = DB::table('projetos')
        // ->join('professores', 'professores.id', '=', 'projetos.professores_id')
        // ->get()
        // ->toArray();

        // echo "<pre>";
        // print_r($data);

   
     
        // $data = Projeto::latest()->paginate(5);
        // return view('projeto_index', compact('data'))
        //         ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projeto_create');
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
            'professores_id' => 'required',
            'nome_projeto'    =>  'required',
            'area_tematica'     =>  'required',
            'centro'     =>  'required',
            'curso'     =>  'required',
            'investimento'     =>  'required',
            'semestre'  =>  'required',
            'demandas'  =>  'required',
            'problematicas' =>  'required',
            'observacoes' =>  'required',


        ]);

        $form_data = array(
            'professores_id' => $request->professores_id,
            'nome_projeto'    =>  $request->nome_projeto,
            'area_tematica'     =>  $request->area_tematica,
            'centro'     =>  $request->centro,
            'curso'     =>  $request->curso,
            'investimento'  =>   $request->investimento,
            'semestre'  =>  $request->semestre,
            'demandas'  =>  $request->demandas,
            'problematicas' =>  $request->problematicas,
            'observacoes' =>  $request->observacoes
        );
        
        Projeto::create($form_data);

        //crud
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
        $data = Projeto::findOrFail($id);
        return view('projeto_view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Projeto::findOrFail($id);
        return view('projeto_edit', compact('data'));
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
            'nome_projeto'    =>  'required',
            'area_tematica'     =>  'required',
            'centro'     =>  'required',
            'curso'     =>  'required',
            'investimento'     =>  'required',
            'semestre'  =>  'required',
            'demandas'  =>  'required',
            'problematicas' =>  'required',
            'observacoes' =>  'required',


        ]);

        $form_data = array(
            'nome_projeto'    =>  $request->nome_projeto,
            'area_tematica'     =>  $request->area_tematica,
            'centro'     =>  $request->centro,
            'curso'     =>  $request->curso,
            'investimento'  =>   $request->investimento,
            'semestre'  =>  $request->semestre,
            'demandas'  =>  $request->demandas,
            'problematicas' =>  $request->problematicas,
            'observacoes' =>  $request->observacoes
        );

        Projeto::whereId($id)->update($form_data);

        return redirect('projeto')->with('success', 'Data is successfully updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Projeto::findOrFail($id);
        $data->delete();

        return redirect('projeto')->with('success', 'Data is successfully deleted');
    }
}
