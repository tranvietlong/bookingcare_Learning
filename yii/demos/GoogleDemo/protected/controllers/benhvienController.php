<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class benhvienController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionCreate()
	{
		$bv = new Benhvien();
		$bv -> ten = "benh vien 108";
		$bv -> diachi = "Hoan Kie, Ha Noi";
		$bv -> gioithieu = "benh vien quan doi";
		$bv -> save();
	}

	public function actionDanhsach()
	{
		$cond = new CDbCriteria();
		$cond -> compare('trangthai', 0);
		
		$ds = Benhvien::model()->findall($cond);
		// print_r($ds);
		$this -> render('danhsach', array('ds' => $ds));
	}

	public function actionXem($id)
	{
		$bv = Benhvien::model()->findByPk($id);
		echo "<pre>";
		print_r($bv);
	}
}
?>