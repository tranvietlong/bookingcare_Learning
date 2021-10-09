<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class studentController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionCreate()
	{
		$st = new student();
		// $st -> id = $_REQUEST['stt'] ;
		$st -> name = $_REQUEST['name'];
		$st -> DateOfBirth = $_REQUEST['DOB'];
		$st -> class = $_REQUEST['class'];
		$st -> save();
        return $this -> redirect(['show']);
	}


	public function actionShow()
	{
		// echo 'Google.com';
		$data = student::model() -> findAll();
		// print_r($ds);
		$this -> render("TableStudent", array('data' => $data));
	}
	
	public function actionLogin()
	{
        // echo "Login";
		$this -> render("AddStu");
	}

	public function actionDelete($id)
	{
		// echo "Delete";
		$data = student::model() -> findByPk($id);
		$data -> delete();
		return $this -> redirect(['show']);
	}

	public function actionUpdateStu($id)
	{
		$st = student::model() -> findByPk($id);
		$this -> render('updateSt',array('st' => $st));
	}

	public function actionUpdate($id)
	{
		$st = student::model() -> findByPk($id);
		$st -> id = $_REQUEST['id'];
		$st -> name = $_REQUEST['name'];
		$st -> DateOfBirth = $_REQUEST['DOB'];
		$st -> class = $_REQUEST['class'];
		$st -> save();
		$this -> redirect(['show']);
	}
}