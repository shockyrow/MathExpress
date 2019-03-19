<?php

namespace App\Http\Controllers;

use App\Doc;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocController extends Controller
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
                $docs = Doc::search(
                    $request->get('q'),
                    $request->get('searchType')
                )->paginate(10);
            }
            else {
                $docs = Doc::search($request->get('q'))->paginate(10);
            }
        } else {
            $docs = Doc::paginate(10);
        }

        return view('docs.index', ['docs' => $docs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Auth::user()->authorizeRoles([Role::ROLE_ADMIN, Role::ROLE_TEACHER]);

        return view('docs.create');
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

        if($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->storePublicly('public/thumbnails');
        } else {
            $thumbnailPath = 'public/thumbnails/doc_thumb.default.jpg';
        }

        if($request->hasFile('file')) {
            $filePath = $request->file('file')->storePublicly('public/files');
        } else {
            return abort('403');
        }

        $doc = new Doc([
            'title' => $request->get('title'),
            'author' => $request->get('author'),
            'description' => $request->get('description'),
            'thumbnail' => $thumbnailPath,
            'filename' => $filePath,
        ]);
        $doc->save();

        return redirect(route('docs.show', $doc->getId()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function show(Doc $doc)
    {
        return view('docs.show', ['doc' => $doc]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function edit(Doc $doc)
    {
        Auth::user()->authorizeRoles([Role::ROLE_ADMIN, Role::ROLE_TEACHER]);

        return view('docs.edit', ['doc' => $doc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doc $doc)
    {
        Auth::user()->authorizeRoles([Role::ROLE_ADMIN, Role::ROLE_TEACHER]);

        if($request->hasFile('thumbnail')) {
            //Storage::delete($doc->getThumbnail()); // should not delete default thumbnail
            $thumbnailPath = $request->file('thumbnail')->storePublicly('public/thumbnails');
        } else {
            $thumbnailPath = $doc->getThumbnail();
        }

        if($request->hasFile('file')) {
            Storage::delete($doc->getFilename());
            $filePath = $request->file('file')->storePublicly('public/files');
        } else {
            $filePath = $doc->getFilename();
        }

        $doc
            ->setTitle($request->get('title'))
            ->setAuthor($request->get('author'))
            ->setDescription($request->get('description'))
            ->setThumbnail($thumbnailPath)
            ->setFilename($filePath)
            ->save()
        ;

        return redirect(route('docs.show', $doc->getId()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doc $doc)
    {
        Auth::user()->authorizeRoles([Role::ROLE_ADMIN, Role::ROLE_TEACHER]);

        $doc->forceDelete();

        return redirect(route('docs.index'));
    }

    /**
     * @param Doc $doc
     * @return mixed
     */
    public function download(Doc $doc)
    {
        return Storage::download($doc->getFilename());
    }
}
