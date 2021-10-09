<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class GoogleController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionCreate()
	{
		$gg = new Google();
		$gg -> ID = '3';
		$gg -> Url = 'https://hongngochospital.vn';
		$gg -> Title = 'Bệnh viện Đa khoa Hồng Ngọc';
		$gg -> Description = '+(84-24) 3927 5568 ext *0] Thăm khám và điều trị tại Bệnh viện Đa khoa Hồng Ngọc với trải nghiệm dịch vụ chăm sóc sức khỏe 5* cùng đội ngũ chuyên gia hàng ...';
		$gg -> save();
	}

	public function actionShow()
	{
		// echo 'Google.com';
		$ds = Google::model() -> findAll();
		// print_r($ds);
		$this -> render("GoogleSearch", array('ds' => $ds));
	}
	
	public function actionLogin()
	{
		$this -> render("Login");
	}


}