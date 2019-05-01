<?php
/**
 * 
 */

class UserController {
    //查询推荐课程
    public  function getRec(){
        $cou= new CourseModel();
        $data = $cou->getRec();
        // var_dump($data);die;
        // require "./index.php";
    }
}