<?php

namespace App\Http\Controllers;

use App\Module;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ModuleController extends Controller
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
                $modules = Module::search(
                    $request->get('q'),
                    $request->get('searchType')
                )->paginate(9);
            }
            else {
                $modules = Module::search($request->get('q'))->paginate(9);
            }
        } else {
            $modules = Module::paginate(9);
        }

        return view('modules.index', ['modules' => $modules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Auth::user()->authorizeRoles([Role::ROLE_ADMIN, Role::ROLE_TEACHER]);

        return view('modules.create');
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

        $module = new Module([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'thumbnail' => "public/thumbnails/module_thumb.default.jpeg",
        ]);
        $module
            ->user()
            ->associate(Auth::user())
            ->save()
        ;

        return redirect(route('modules.show', $module->getId()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        return view('modules.show', ['module' => $module]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        if(Auth::id() !== $module->getUserId() && !Auth::user()->hasAnyRole([Role::ROLE_ADMIN])) {
            abort(Response::HTTP_FORBIDDEN);
        }

        return view('modules.edit', ['module' => $module]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        if(Auth::id() !== $module->getUserId() && !Auth::user()->hasAnyRole([Role::ROLE_ADMIN])) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $module
            ->setTitle($request->get('title'))
            ->setDescription($request->get('description'))
            ->user()
            ->associate(Auth::user())
            ->save()
        ;

        return redirect(route('modules.show', $module->getId()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        if(Auth::id() !== $module->getUserId() && !Auth::user()->hasAnyRole([Role::ROLE_ADMIN])) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $module->forceDelete();

        return redirect(route('modules.index'));
    }
}
