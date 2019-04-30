<?php
/**
 * 
 */

class UserController {
    //查询推荐课程
    public  function getRec(){
        $cou= new CourseModel();
        $data = $cou->getRec();
        require "view/test.php";
    }


}