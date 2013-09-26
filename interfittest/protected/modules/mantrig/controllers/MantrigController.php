<?php

class MantrigController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionDashboard()
	{
		$this->render('test');
	}
}