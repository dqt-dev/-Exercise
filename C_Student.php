<?php
    include_once("..//Model/M_Student.php");
    class C_Student{
        public function invoke()
        {
            $modelStudent = new Model_Student();
            if(isset($_GET['ID'])){ // xem chi tiết
                $student = $modelStudent->getStudentDetail($_GET['ID']);
                include_once("..//View/StudentDetail.php");
            }
            else if(isset($_GET['ID_Update'])) // Update
            {
                if(($_GET['ID_Update']) != null)
                {
                    $student = $modelStudent->Update($_GET['ID_Update'],$_REQUEST['name'],
                    $_REQUEST['age'],$_REQUEST['university']);
                    //include_once("..//View/StudentList.php");
                }
                else
                {
                    $studentList = $modelStudent->getAllStudent();
                    include_once("..//View/ViewUpdate.php");
                }
            }
            else if(isset($_GET['delete'])) // Delete
            {
                if($_GET['delete'] != null)
                {
                    $list = $_GET['delete'];
                    foreach($list as $NV)
                    {
                        $modelStudent->Delete($NV);
                    }
                }
                else
                {
                    $studentList = $modelStudent->getAllStudent();
                    include_once("..///View/FormDell.php");
                }
                
            }
            else if(isset($_GET['ID_Add'])) // Delete
            {
                if($_GET['ID_Add'] != null)
                {
                    $modelStudent->Add($_GET['ID_Add'],$_REQUEST['name'],
                    $_REQUEST['age'],$_REQUEST['university']);
                }
                else
                {
                    header('location: http://localhost:2000/MVC/MVC/View/FormAdd.php');
                }
            }
            else if(isset($_GET['textSearch'])) // Delete
            {
                if($_GET['textSearch'] != null)
                {
                    $studentList = $modelStudent->Search($_GET['textSearch'],$_REQUEST['option']);
                    include_once("..//View/ViewSearch.php");
                }
                else
                {
                    header('location: http://localhost:2000/MVC/MVC/View/FormSearch.php');
                }
            }
            else // Show all
            {
                $studentList = $modelStudent->getAllStudent();
                include_once("..//View/StudentList.php");
            }

        }
        
    }
    $C_Student = new C_Student();
    $C_Student->invoke();
?>