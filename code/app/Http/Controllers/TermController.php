<?php

namespace App\Http\Controllers;

use App\Role;
use App\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TermController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('q') && $request->get('q') !== null) {
            if($request->has('searchType')) {
                $terms = Term::search(
                    $request->get('q'),
                    $request->get('searchType')
                )->paginate(10);
            }
            else {
                $terms = Term::search($request->get('q'))->paginate(10);
            }
        } else {
            $terms = Term::paginate(10);
        }

        return view('terms.index', ['terms' => $terms]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Auth::user()->authorizeRoles([Role::ROLE_ADMIN, Role::ROLE_TEACHER]);

        return view('terms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Auth::user()->authorizeRoles([Role::ROLE_ADMIN, Role::ROLE_TEACHER]);

        $term = new Term([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
        ]);
        $term->save();

        return redirect(route('terms.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function show(Term $term)
    {
    }

    /**
     * Show the form for editing the s  pecified resource.
     *
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function edit(Term $term)
    {
        Auth::user()->authorizeRoles([Role::ROLE_ADMIN, Role::ROLE_TEACHER]);

        return view('terms.edit', ['term' => $term]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Term $term)
    {
        Auth::user()->authorizeRoles([Role::ROLE_ADMIN, Role::ROLE_TEACHER]);

        $term
            ->setTitle($request->get('title'))
            ->setBody($request->get('body'))
            ->save()
        ;
        return redirect(route('terms.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function destroy(Term $term)
    {
        Auth::user()->authorizeRoles([Role::ROLE_ADMIN, Role::ROLE_TEACHER]);

        $term->forceDelete();

        return redirect(route('terms.index'));
    }


    /**
     * @param string $key
     * @return \Illuminate\Http\Response
     */
    public function searchByLetter(string $key){
        $terms = Term::searchByLetter($key)->paginate(10);

        return view('terms.index', ['terms' => $terms]);

    }
}
