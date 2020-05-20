<!-- File Handling 
File Reading 
File writing
File Appending -->
<!-- testing for git change -->
<?php 
// fread=>binary format 
// file_get_contents=>string
// function createFile($name){

// }
function fileRead($name){
    if(file_exists($name)){
        $handler=fopen($name,"r");
        return fread($handler,filesize($name));
    }else
        exit("not found 404 error");
}
function readString($name){
    if(file_exists($name))
        return file_get_contents($name);
    else
        return "not found 404 error";
}


echo fileRead("fjad.txt");

echo "something";
echo "something";
echo "something";


// echo fileRead("my.txt");
// echo readString("data.txt");

// function writeFile($name,$str){

// }
//  fopen("filename","mode")
// File reading
// $handler=fopen("mySelf.txt","r");
// echo fread($handler,filesize("mySelf.txt"));
// $file='auwae.txt';
// fopen($file,"w");
// fwrite($handler," hellow world !");
// fclose($handler);
