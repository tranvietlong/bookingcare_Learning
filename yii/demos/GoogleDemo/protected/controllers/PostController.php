<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class PostController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
		echo 'Hello Post';
	}

	public function actionShow($id)
		{
			echo $id;
			// echo 'show';
			$this -> render('show', array('id1' => $id));

		}
	
}