<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    // Source code befor Improve the endpoints. (We will try with ( Ctrl + /, remove comment out) and comment out for source code after Improve the endpoints)
    // /**
    //  * Retrieve the list => select all item in table article
    //  *
    //  * @return Article[]|\Illuminate\Database\Eloquent\Collection
    //  */
    // public function index()
    // {
    //     return Article::all();
    // }
 
    //  /***
    //  * Retrieve a single one => select item in table article by  id
    //  *
    //  * @param $id
    //  * @return mixed
    //  */
    // public function show($id)
    // {
    //     return Article::find($id);
    // }

    // /***
    //  * Insert new item in table article
    //  *
    //  * @param Request $request
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function store(Request $request)
    // {
    //     return Article::create($request->all());
    // }

    // /***
    //  * Update one item in table article
    //  *
    //  * @param Request $request
    //  * @param $id
    //  * @return mixed
    //  */
    // public function update(Request $request, $id)
    // {
    //     $article = Article::findOrFail($id);
    //     $article->update($request->all());

    //     return $article;
    // }

    // /***
    //  * Delete one item in table article by id
    //  *
    //  * @param Request $request
    //  * @param $id
    //  * @return int
    //  */
    // public function delete(Request $request, $id)
    // {
    //     $article = Article::findOrFail($id);
    //     $article->delete();

    //     return 204;
    // }
    
    ////////////////////////////////////////////////////////////////////////////////////////////////

    // // Source code after Improve the endpoints.
    /**
     * Retrieve the list => select all item in table article
     *
     * @return Article[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Article::all();
    }
 
     /***
     * Retrieve a single one => select item in table article by  id
     *
     * @param Article $article
     * @return Article
     */
    public function show(Article $article)
    {
        return $article;
    }

    /***
     * Insert new item in table article
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        return Article::create($request->all());
    }

    /***
     * Update one item in table article
     *
     * @param Request $request
     * @param Article $article
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    /***
     * Delete one item in table article by id
     *
     * @param Article $article
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
