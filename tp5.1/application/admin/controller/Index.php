<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\User;

class Index extends Controller
{
    public function index()
    {
    	return view('index');
    }
    public function add()
    {
    	$data = input('post.');
    }
    public function show()
    {
    	$search = input('post.search');
    	if($search){
    		$data = db('marathon_registration')->where('name','%$search%')->paginate(3);
    	}else{
    		$data = db('marathon_registration')->paginate(3);
    	}
    	return view('show',['data'=>$data]);
    }
    public function edit()
    {
    	$data = db('marathon_registration')->select();
    	return view('edit',['data'=>$data]);
    }
}
