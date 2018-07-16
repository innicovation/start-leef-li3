<?php
namespace app\controllers;

use app\models\Posts;

class PostsController extends \lithium\action\Controller {

	public function add() {
		$post = Posts::create();
		$success = false;

		if ($this->request->data && $post->save($this->request->data)) {
			$success = true;
		}
		return compact('post', 'success');


	}
}
