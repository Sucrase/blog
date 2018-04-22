<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Article as ArticleModel;
class Articles extends Controller
{
    public function index()
    {
        $articles = ArticleModel::paginate(3);
        $this->assign('articles', $articles);
        clearstatcache();
        return $this->fetch();
    }
}
