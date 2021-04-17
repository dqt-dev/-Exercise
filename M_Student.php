<?php
    include_once("E_Student.php");
    class Model_Student{
        public function __construct()
        {
            
        }
        public function getAllStudent()
        {
            $conn = mysqli_connect("localhost","root","","csdl");
            $query = "select * from sinhvien";
            $result = mysqli_query($conn,$query);
            $arr = array();
            while($row = mysqli_fetch_array($result))
            {
                array_push($arr, new Entity_Student($row[0],"$row[1]",$row[2],"$row[3]"));
            }
            return $arr;
        }
        public function getStudentDetail($ID)
        {
            $conn = mysqli_connect("localhost","root","","csdl");
            $query = "select * from sinhvien where ID =" .$ID;
            $result = mysqli_query($conn,$query);
            $arr = array();
            while($row = mysqli_fetch_array($result))
            {
                array_push($arr, new Entity_Student($row[0],"$row[1]",$row[2],"$row[3]"));
            }
            return $arr[0];
        }
        public function Delete($ID)
        {
            $conn = mysqli_connect("localhost","root","","csdl");
            $query = "delete from sinhvien where ID = ".$ID;
            $result = mysqli_query($conn,$query);
            if($result == 1)
            {
                header('location: http://localhost:2000/MVC/MVC/Controller/C_Student.php?delete');
            }
            else 
            echo "Error: ".mysqli_error($conn);
            mysqli_close($conn);
        }
        public function Update($ID,$name,$age,$university)
        {
            $conn = mysqli_connect("localhost","root","","csdl");
            $query = "UPDATE sinhvien SET name = '$name', age = $age, university = '$university' WHERE sinhvien.ID=$ID";
            $result = mysqli_query($conn,$query);
            if($result == 1)
            {
            header('location: http://localhost:2000/MVC/MVC/Controller/C_Student.php?ID_Update');
            }
            else 
            echo "Error: ".mysqli_error($conn);
            mysqli_close($conn);
        }
        public function Add($ID,$name,$age,$university)
        {
            $conn = mysqli_connect("localhost","root","","csdl");
            $query = "INSERT INTO `sinhvien` (`ID`, `name`, `age`, `university`) VALUES ('$ID', '$name', '$age', '$university')";
            $result = mysqli_query($conn,$query);
            if($result == 1)
            {
            header('location: http://localhost:2000/MVC/MVC/Controller/C_Student.php');
            }
            else 
            echo "Error: ".mysqli_error($conn);
            mysqli_close($conn);
        }
        public function Search($textSearch,$option)
        {
            $conn = mysqli_connect("localhost","root","","csdl");
            $query = "";
            if($option == "Name")
            {
                $query = "select * from sinhvien where name like '%".$textSearch."%'";
                $result=mysqli_query($conn,$query);
            }
            else
            {
                $query = "select * from sinhvien where ID =".$textSearch;
                $result=mysqli_query($conn,$query);
            }
            if($result != null)
            {
                $arr = array();
                while($row = mysqli_fetch_array($result))
                {
                    array_push($arr, new Entity_Student($row[0],"$row[1]",$row[2],"$row[3]"));
                }
                return $arr;
            }
            else{
                echo "Không tồn tài sinh viên cần tìm!" .'<br>';
                echo mysqli_error($conn);
            }
        }
    }
?>