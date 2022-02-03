<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\QuestionAndAnswer;

class QuestionsAndanswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = QuestionAndAnswer::all();
        return view('coworking.bakent.questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coworking.bakent.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->all();
        $v = Validator::make($request->all(), [
            'question' => 'required|string',
            'answer' => 'required|string',
            'order' => 'required|string'
        ]);
        if ($v && $v->fails()) {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $question = QuestionAndAnswer::create($fields);
        if ($question) {
            Session::flash('flash_message', 'Se ha creado una nueva pregunta');
            Session::flash('flash_message_type', 'success');
        } else {
            Session::flash('flash_message', 'Hubo un error al crear la pregunta');
            Session::flash('flash_message_type', 'success');
        }
        return redirect('admin/preguntas-respuetas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = QuestionAndAnswer::find($id);
        return view('coworking.bakent.questions.update', compact('question'));
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

        $question = QuestionAndAnswer::find($id);
        $fields = $request->all();

        $v = Validator::make($request->all(), [
            'question' => 'required|string',
            'answer' => 'required|string',
            'order' => 'required|string'
        ]);
        if ($v && $v->fails()) {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        $question->update($fields);

        Session::flash('flash_message', 'Se ha actualizado la pregunta');
        Session::flash('flash_message_type', 'success');

        return redirect('admin/preguntas-respuetas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = QuestionAndAnswer::findOrFail($id);
        if ($question) {
            $question->delete();
            Session::flash('flash_message', '¡Pregunta Eliminada!');
            Session::flash('flash_message_type', 'success');
        } else {
            Session::flash('flash_message', 'la pregunta no pudo ser eliminado.');
            Session::flash('flash_message_type', 'warning');
        }
        return redirect('admin/preguntas-respuetas');
    }
}
