<?php
/**
 * 从Model类继承，可以使用父类方法或者增加自己的方法
 */
	class CourseModel extends Model{
		//查找推荐课程
		public function getRec(){
			$sql = "select course.title,course.image from course,u_c where rec='Y' and course.title=u_c.title;";
			// $this->conn->connect();
			// $this->conn->close();
			 $this->data = $this->conn->select($sql);
			 // var_dump($this->data);die;
			 return $this->data;
		}

}
?>