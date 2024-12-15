<?php

namespace App\Http\Controllers;

use App\Models\Vebinar;
use Illuminate\Http\Request;

class VebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vebinars = Vebinar::all();
        return view('vebinar.main-vebinars', compact('vebinars'));
    }

    public function pastVebinars()
    {
        $pastVebinars = Vebinar::where('end_date', '<', now())
            ->orderBy('end_date', 'desc')
            ->get();

        $description = 'Прошедшие вебинары, description из контроллера';
        $keywords = 'прошедшие, вебинары, ключевые, слова, keywords из контроллера';

        return view('vebinar.past-vebinars', compact('pastVebinars', 'description', 'keywords'));
    }

    public function currentVebinars()
    {

        $currentVebinars = Vebinar::where('start_date', '<=', now())
            ->where('end_date', '>', now())
            ->orderBy('start_date', 'desc')
            ->get();

        $description = 'Актуальные вебинары, description из контроллера';
        $keywords = 'Актуальные вебинары, ключевые, слова, keywords из контроллера';

        return view('vebinar.current', compact('currentVebinars', 'description', 'keywords'));
    }

    public function futureVebinars()
    {

        $futureVebinars = Vebinar::where('start_date', '>', now())
            ->orderBy('start_date', 'desc')
            ->get();

        $description = 'Будущие вебинары, description из контроллера';
        $keywords = 'Будущие вебинары, ключевые, слова, keywords из контроллера';

        return view('vebinar.future',  compact('futureVebinars', 'description', 'keywords'));
    }

    public function signInVebinar()
    {
        $description = 'Регистрация участника, description из контроллера';
        $keywords = 'Регистрация участника, ключевые, слова, keywords из контроллера';


        return view('vebinar.sign-in-vebinar', compact('description', 'keywords'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $description = 'Регистрация автора, description из контроллера';
        $keywords = 'Регистрация автора, ключевые, слова, keywords из контроллера';

        return view('vebinar.create', compact('description', 'keywords'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           // Валидация данных
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'author' => 'required|string|max:255',
        'author_email' => 'required|email',
        'speaker' => 'required|string|max:255',
        'speaker_email' => 'required|email',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'start_registration' => 'required|date',
        'end_registration' => 'required|date',
    ]);

       var_dump($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vebinar $vebinar)
    {
        return view('vebinar.vebinar', compact('vebinar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vebinar $vebinar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vebinar $vebinar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vebinar $vebinar)
    {
        //
    }
}
