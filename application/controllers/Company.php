<?php

class Company extends Frontend_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->set_layout('company_profile');
		$this->load->helper(array('html', 'array', 'form', 'url'));
	}

	public function index($slag)
	{
		//echo $slag;exit;
		$info = $this->websitemodel->getCompanyProfile($slag);

		$this->assign('info', $info);

		$plist = $this->websitemodel->get_company_product_list($info['id']);
		$this->assign('plist', $plist);

		$com_cat = $this->websitemodel->get_com_cat_list($info['id']);
		$this->assign('com_cat', $com_cat);

		// echo '<pre>';
		// print_r($com_cat);
		// exit;

		$sdata['com_slag'] = $info['slag'];
		$this->session->set_userdata($sdata);

		$this->load->view('company/profile');
	}

	public function product($slag)
	{

		$info = $this->websitemodel->getCompanyProfile($slag);

		$this->assign('info', $info);


		$plist = $this->websitemodel->get_all_company_product_list($info['id']);
		$this->assign('plist', $plist);

		//echo '<pre>';print_r($plist);exit;

		$this->load->view('company/com_product');
	}

	public function contact($slag)
	{
		$info = $this->websitemodel->getCompanyProfile($slag);
		$this->assign('info', $info);
		// echo '<pre>';
		// print_r($info);
		// exit;

		// $pinfo = $this->websitemodel->get_product_details($slag);
		// $this->assign('pinfo', $pinfo);
		// echo '<pre>';
		// print_r($pinfo);
		// exit;

		// $countylist = $this->websitemodel->get_country_list();
		// $this->assign('countylist', $countylist);

		// $pgalary = $this->websitemodel->get_product_gallary($pinfo['pid']);
		// $this->assign('pgalary', $pgalary);

		// $relatedproduct = $this->websitemodel->get_related_product($pinfo['category_id'], $pinfo['sub_category_id'], $pinfo['pid']);
		// $this->assign('relatedproduct', $relatedproduct);



		$this->load->view('company/contact');
	}
}
