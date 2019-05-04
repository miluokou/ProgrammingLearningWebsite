<?php
	/**
	 * 从Model类继承，可以使用父类方法或者增加自己的方法
	 */
	
	class CourseModel extends Model{
		//查找index.php页面显示的推荐课程
		public function getRec(){
			$sql = "select course.title,course.image
			from course,user_course
			where rec='Y' and course.title=user_course.title";
			return $this->data = $this->conn->select($sql);
		}
	
	
	
	
	
	
	}
?>