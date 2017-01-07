<?php
use App\Models\flight;
require app_path()."/includes/check.php";
require app_path()."/includes/assets.php";
class HomeController extends BaseController
{


    public static $username123 = 123;
    public static $password123 = 123;

    public function showWelcome()
    {
        Session::put('key.b', 'asdda');
        //dd(Session::all());


        //echo $value;
        return View::make('login');
    }

    public function Loginfunction()
    {
        Session::put('key.c', 'asdda');
        Session::push('Hi', 'This is test');

        return View::make('login');
    }

    public function Logincheck()
    {
        //dd(Session::all());
        //echo "string";
        $postStudent = Input::all();
        if (isset($postStudent['Login'])) {
            $Username = $postStudent['Username'];
            $Password = $postStudent['Password'];

            $users = 0;
            $flight = App\Models\flight::all();
            foreach ($flight as $flight1) {
                // echo $flight1->Passsword;

            }
            DB::connection()->enableQueryLog();

            echo $Username;
            echo $Password;

            //exit();
            $flights = App\Models\flight::where('UserName', '=', $Username)
                ->where('Passsword', '=', $Password)
                ->get();
            if ($flights->count() > 0) {
                foreach ($flights as $flight2) {

                    if ($flight2->Passsword == $Password) {

                        echo "Login Successfully!";

                        $session = new App\Models\Online;
                        $rand = rand(10, 100);
                        $flight2->UserId = $session->Id;
                        $flight2->UserId = $rand;
                        $flight2->UserId = $session->payload;
                        $flight->UserId = $session->data;


                        //$session->save;

                        return Redirect::intended('Home');
                    } else {
                        echo "Login Failed!";
                    }

                }
            } else {

                echo "Login Failed!";
            }
            //exit();
        }

    }

    public function sessioninsert()
    {

    }

    public function Home()
    {
        return View::make('students');
    }

    public function showStudent()
    {
        return View::make('students');
    }

    public function studentManage()
    {
        $someModel = new Student;
        $someModel->setConnection('mysql2');
        $users = DB::connection('mysql2');
        echo $users;
        $postStudent = Input::all();
        //insert data into mysql table
        if (isset($postStudent['insert'])) {
            $data = array('sno' => $postStudent['sno'],
                'sname' => $postStudent['sname'],
                'course' => $postStudent['course']
            );
            //  echo print_r($data);
            $ck = 0;
            $ck = DB::table('studentstbl')->Insert($data);
            if ($ck > 0) {
                echo "Record Added Successfully!";
            }
        }
        //update record
        if (isset($postStudent['update'])) {
            $sno = $postStudent['sno'];
            $data = array('sno' => $postStudent['sno'],
                'sname' => $postStudent['sname'],
                'course' => $postStudent['course']
            );
            //  echo print_r($data);


            $ck = DB::table('studentstbl')
                ->where('sno', $sno)
                ->Update($data);
            if ($ck > 0) {
                echo "Record Updated Successfully!";
            }
        }

        //delete record
        if (isset($postStudent['delete'])) {
            $sno = $postStudent['sno'];

            //  echo print_r($data);

            $ck = DB::table('studentstbl')
                ->where('sno', $sno)
                ->delete();
            if ($ck > 0) {
                echo "Record Deleted Successfully!";
            }
        }
        //show data
        if (isset($postStudent['show'])) {
            $data = DB::table('studentstbl')->get();
            return View::make('viewdata')->with('data', $data);

        }

    }

    /**
     *
     */
    public function usermaster()
    {
        echo "string";

        $postStudent = Input::all();

        

        echo json_encode($postStudent);
        
        $sMode = "";
        $sCnd = "";
        $sErrMsg = "";
        $sSql = "";
        $UserId = "";
        $UserName = "";
        $EmpName = "";
        $Password = "";
        $MobileNo = "";
        $MobileNumber = "";
        $EmailId = "";
        $RoleId = "";
        $RecStatus = "";
        $InsDt = "";
        $ModDt = "";
        $UserId = "";
        $Emailid = "";
        $Passsword = "";
        $RoleId = "";
        $InsDt = "";
        $ModDt = "";
        $UserName = "";
        $UniqueName = "";
        $RecStatus = "";
        $HeadUserId = "";
        $RoleName = "";

        if (isset($postStudent['Mode'])){
            echo "string";
        }
        
        //    $sMode = $_GET["Mode"];
        //echo "stringif";
        //else
        //    echo "fi";
        //    $sMode = "LIST";
        $sno = $postStudent['sno'];

        if (isset($postStudent['insert'])) {
            echo "sdas";
            $Emailid = $_REQUEST["txtEmailid"];
            $UserName = $_REQUEST["txtUserName"];
            $Passsword = $_REQUEST["txtPasssword"];
            $MobileNumber = $_REQUEST["txtMobileNumber"];
            $UserId = $_REQUEST['txtUserId'];
            $RoleId = $_REQUEST["lstRoleId"];
            $UniqueName = $_REQUEST["UniqueName"];
            $HeadUserId = $_REQUEST["lstHeadUserId"];
        }
            
                 if (isset($postStudent['update'])) {
                    echo($sno);
                    echo "string";
                    $session1 = new App\Models\UserDet;
                    /*$session1::wherein('UserId', $sno);
                    $session1->Emailid = $Emailid;
                    $session1->Passsword = $Passsword;
                    $session1->UserName = $UserName;
                    $session1->RoleId = $RoleId;
                    $session1->HeadUserId = $HeadUserId;
                    $session1->ModDt = 'CURRENT_TIMESTAMP';
                    $session1->UniqueName = $UniqueName;
                    $session1->save();*/
                    $session1::where('UserId', '=', $sno)->update(['HeadUserId' => 2]);
                    return Redirect::intended('studentManage');

                }
         
          if ($postStudent == "DELETE") {
            $UserId = $_REQUEST["UserId"];
            $sSql = "";
            $sErrMsg = "";
           

    $session1 = new App\Models\UserDet;
    $session1->Emailid = "~" + $Emailid + "+";
    $session1->RecStatus = 0;
    $session1->UserName = $UserName;
    $session1->RoleId = $RoleId;
    $session1->HeadUserId = $HeadUserId;
    $session1->ModDt = 'CURRENT_TIMESTAMP';
    $session1->UniqueName = $UniqueName;
    $session1->save();

            header("Location: UserMaster.php", TRUE, 301);
            exit();
        }
        
        }
}
?>

