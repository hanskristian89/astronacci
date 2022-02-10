<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\UserArticles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function getArticleList()
    {
        $id_user = Auth::user()->id;
        $articleList = UserArticles::where('id_user', '=', $id_user)->get();

        return $articleList;
    }

    public function getArticleIdList()
    {
        $articleList = $this->getArticleList();
        $articleList = @json_decode(json_encode($articleList), true);

        $articleIdList = array();
        foreach ($articleList as $a) {
            array_push($articleIdList, $a['id_article']);
        }

        return $articleIdList;
    }

    public function getArticleQuota()
    {
        $level = Auth::user()->level;
        if ($level == 'A') {
            $articleQuota = 3;
        } else if ($level == 'B') {
            $articleQuota = 10;
        } else {
            $articleQuota = INF;
        }
        return $articleQuota;
    }

    public function index()
    {
        $articleList = $this->getArticleList();
        $articleCount = count($articleList);
        $articleQuota = $this->getArticleQuota();
        $remainingQuota = $articleQuota - $articleCount;
        $articleIdList = $this->getArticleIdList();

        return view('articles', [
            "title" => "Articles",
            "articleQuota" => $articleQuota,
            "remainingQuota" => $remainingQuota,
            "articleList" => $articleIdList,
            "articles" => Article::all()
        ]);
    }

    public function show(Article $article)
    {
        $articleList = $this->getArticleList();
        $articleCount = count($articleList);
        $articleQuota = $this->getArticleQuota();
        $remainingQuota = $articleQuota - $articleCount;
        $articleIdList = $this->getArticleIdList();

        if ($remainingQuota > 0) {
            $id_user = Auth::user()->id;
            $id_article = $article->id;

            UserArticles::firstOrCreate([
                'id_user' => $id_user,
                'id_article' => $id_article
            ]);

            return view('article', [
                "title" => "Article",
                "article" => $article
            ]);
        } else {
            $id_article = $article->id;
            if (in_array($id_article, $articleIdList)) {
                return view('article', [
                    "title" => "Article",
                    "article" => $article
                ]);
            } else {
                return view('articles', [
                    "title" => "Articles",
                    "articleQuota" => $articleQuota,
                    "remainingQuota" => $remainingQuota,
                    "articleList" => $articleIdList,
                    "articles" => Article::all()
                ]);
            }
        }
    }
}
