<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();
        // fetch course in add students 
        $shw=$this->selectalldata('tbl_addcourse');
        // join and show all students list in show students data
        $shwjoin=$this->joindata('tbl_addstudents','tbl_addcourse','tbl_addstudents.course_id=tbl_addcourse.course_id');
        // insert addstudents data in tables 
        if(isset($_POST["add_student"]))
        {
            $fnm=$_POST["fnm"];
            $lnm=$_POST["lnm"];
            $em=$_POST["em"];
            $ph=$_POST["phone"];
            $course=$_POST["course"];
            $data=array("firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"phone"=>$ph,"course_id"=>$course);
            $chk=$this->insalldata('tbl_addstudents',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks for adding students data')
                window.location='./';
                </script>";
            }
        }
        // load views 
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once("index.php");
                    require_once("navigations.php");
                    require_once("showdata.php");
                    require_once("footer.php");
                    require_once("addstudent.php");
                    break;
                
                default:
                require_once("index.php");
                require_once("navigations.php");
                require_once("404.php");
                require_once("footer.php");
                    break;
            }
        }
    }
}

$obj=new controller;
?>