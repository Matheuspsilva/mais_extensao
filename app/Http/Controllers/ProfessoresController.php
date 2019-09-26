<?php

namespace App\Http\Controllers;
use App\Professore;
use Illuminate\Http\Request;
use DB;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Professore::latest()->paginate(5);
        return view('index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function mostrar_projetos()
    {
        $data=DB::table('professores_projetos')
        ->join('professores','professores.id',"=","professores_projetos.professores_id")
        ->join('projetos','projetos.id',"=","professores_projetos.projetos_id")
        ->get()
        ->toArray();

        echo "<pre>";
        print_r($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'nome'    =>  'required',
            'email'     =>  'required',
            'password'     =>  'required',
            'matricula'     =>  'required',
            'departamento'     =>  'required',
            'centro'     =>  'required',
            'curso'     =>  'required',
            'titulacao'     =>  'required',

        ]);

        $form_data = array(
            'nome'       =>   $request->nome,
            'email'        =>   $request->email,
            'password'        =>   $request->password,
            'matricula'        =>   $request->matricula,
            'departamento'        =>   $request->departamento,
            'centro'        =>   $request->centro,
            'curso'        =>   $request->curso,
            'titulacao'        =>   $request->titulacao,

        );

        

        Professore::create($form_data);

        //crud
        return redirect('crud')->with('success', 'Data Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Professore::findOrFail($id);
        return view('view', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dashboard($id)
    {
        $data = Professore::findOrFail($id);
        return view('dashboard', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Professore::findOrFail($id);
        return view('edit', compact('data'));
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
            'departamento'     =>  'required',
            'centro'     =>  'required',
            'curso'     =>  'required',
            'titulacao'     =>  'required',

        ]);

        $form_data = array(
            'nome'       =>   $request->nome,
            'email'        =>   $request->email,
            'password'        =>   $request->password,
            'matricula'        =>   $request->matricula,
            'departamento'        =>   $request->departamento,
            'centro'        =>   $request->centro,
            'curso'        =>   $request->curso,
            'titulacao'        =>   $request->titulacao,

        );


        Professore::whereId($id)->update($form_data);

        return redirect('crud')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Professore::findOrFail($id);
        $data->delete();

        return redirect('crud')->with('success', 'Data is successfully deleted');
    }
}
