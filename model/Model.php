<?php 
class Model{

	//数据库连接对象
	public $conn =null;

	//返回的数据
	public $data = null;

    //构造函数
	public function __construct(){
		$this->init();
	}

    //获取Db类对象instance
	public function init(){
        //调用Db类的静态方法获取唯一实例对象instance
		$this->conn = Db::getInstance();     
	}

	//查询某张表所有数据
	public function getList($table){
		$sql = "select * from '$table'";
		$this->conn->connect();
		return $this->data = $this->conn->select($sql);
		$this->conn->close();
	}


}
?>