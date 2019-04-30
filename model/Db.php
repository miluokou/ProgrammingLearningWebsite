<?php
 
/**
 * 单例模式创建数据库封装类
 * 此类中包含连接，关闭数据库及执行sql语句
 */
class Db 
{
	
    //单例模式,保存类实例对象的静态成员
    private static $instance = null;

    //数据库连接对象
    private $conn = null;

    //数据库的连接参数
    private $dbConfig = array(
        'host' => 'localhost', //主机名称
        'port' => '3306',  //端口
        'user' => 'root',  //用户名
        'pass' => '',  //密码
        'charset' => 'utf8', //字符集
        'dbname' => 'test',  //数据库
    );

	//构造函数私有,防止外部实例化
	private	function __construct(){
		
	}

	//私有的克隆方法,为了防止在类外通过clone生成另一个对象
	private function __clone(){
		
	}

	//公有的静态方法,为了让用户获取唯一可用的对象instance
	public static function getInstance(){
		//!self::$instance用于检测是否有实例对象
		if(!self::$instance){    
		    self::$instance = new self();
        }
        return self::$instance;
	}
 
    //数据库连接
    public  function  connect(){
    	//配置连接数据,面向对象写法的连接
        $this->conn = new mysqli($this->dbConfig['host'],$this->dbConfig['user'],$this->dbConfig['pass'],$this->dbConfig['dbname']);
        //设置编码
        $this->conn->query("SET NAMES {$this->dbConfig['charset']}");    
        if($this->conn->connect_error){
        	die("连接失败: " . $this->conn->connect_error);
        	}
    }
    
    //数据库连接关闭
    public  function  close(){
	        $this->conn->close();
    }

    //完成数据表的写操作:新增,更新,删除
    public function exec($sql){
    	if($this->conn->query($sql)==true){
    		echo '更改成功!';
    	}else{
    		echo "失败: " . $sql . "<br>" . $this->conn->error;		
    	}
   }
   
    //查询单条数据
    public function find($sql){
    	$result = $this->conn->query($sql);
   		return $result;
   }

    //查询多条数据
    public function select($sql){
    	$result = $this->conn->query($sql);
    	//fetch_array函数:把查询结果的一行作为一个关联数组
    	while($row= $result->fetch_array()){
    		$data[] = $row;
    		}
	    return $data;
    }

}

?>