<?php
// mysql=>producture way
// mysql=>OOP way
// mysql => PDO(php data object)
// CRUD
// C=>create
// R=>read=>select
// U=>update
// D=>Delete
define("DB_HOST", 'localhost');
define("DB_NAME", 'Day8');
define('DB_USER', 'root');
define('DB_PASS', '');

function connectDb()
{
    $db_con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(mysqli_connect_errno($db_con)>0)
        die("not connected");
    else
    return $db_con;
}
function executeQuery($qry){
    $result=mysqli_query(connectDb(),$qry);
    return $result?"successfully":"not success";
}
function showAll($id=5){
    $db=connectDb();
    if($id==5){
        $qry="SELECT * FROM users";
        $result=mysqli_query($db,$qry);
        if(mysqli_num_rows($result)>0){
            foreach($result as $user){
                echo "Name is ".$user['name']."<br>";
                echo "NickName is ".$user['nickname']."<br>";
                echo "Email is ".$user['email']."<br>";
               echo " <hr>";
            }
        }
    }else{
        $qry="SELECT * FROM users where name='$id'";
        $result=mysqli_query($db,$qry);
        if(mysqli_num_rows($result)>0){
            foreach($result as $user){
                echo "Name is ".$user['name']."<br>";
                echo "NickName is ".$user['nickname']."<br>";
                echo "Email is ".$user['email']."<br>";
               echo " <hr>";
            }
        }
    }
    
}

function uniqueDataInsert($name,$nickname,$email,$pass){
    $qry="SELECT * FROM users WHERE email='$email'";
    $result=mysqli_query(connectDb(),$qry);
    if(mysqli_num_rows($result)>0){
        return "already exits";
    }else
        $qry="INSERT INTO users VALUES (null,'$name','$nickname','$email','$pass')";
        return executeQuery($qry);
    // toResult($result);
}
function toResult($result){
    echo  "<pre>" . print_r($result, true) . "</pre>";
}
function generatePass($pass){
    return crypt(sha1(md5($pass)),$pass);
}
function multiInsert($qry){
    $result=mysqli_multi_query(connectDb(),$qry);
    return $result?"Successfully multiple insert":"not success";
}
// function deleteUser($id){
//     $qry("DELETE FROM users WHERE id=$id")
// }
// echo md5("123123",true)."<br>";
// echo sha1("123123",true)."<br>";
// echo crypt("123123","123123")."<br>";
// generatePass("123123");
// $qry="INSERT INTO users VALUES(null,'U Mya','Mya Gyi','mya@gmail.com','123123')";
// echo executeQuery($qry);
// showAll("U ba");
$qry="INSERT INTO users VALUES(null,'U ba','Mya Gyi','mya@gmail.com','123123');";
$qry.="INSERT INTO users VALUES(null,'U hal','Mya Gyi','mya@gmail.com','123123');";
$qry.="INSERT INTO users VALUES(null,'U Maung','Mya Gyi','mya@gmail.com','123123');";
// echo multiInsert($qry);
// echo uniqueDataInsert('U Myat','Mya Gyi','mgmyatss@gmail.com',generatePass("123"));
$qry="DELETE FROM users WHERE id=14";
$qry="UPDATE users SET name='chit' ,nickname='user' WHERE id=1";
echo executeQuery($qry);