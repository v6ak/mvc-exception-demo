<?php
require_once APP_DIR . '/models/Article.php';
require_once dirname(__FILE__) . '/BasePresenter.php';

class ArticlePresenter extends BasePresenter {
	
	function renderDetail($id) {
		// tady bude načtení hlavního obsahu stránky - detailu článku
	}
	
	function getPartBestArticles(){
		// kromě toho načteme i výběr článků pro postranní menu
		return Article::findBests();
	}
	
}
