<?php
 $path=”wenjian/”;
 $dr=opendir($path);
 while($filen=readdir($dr))
 {
  if($filen!=”.” and $filen!=”..”)
  {
   $fs=fopen($path.$filen,”r”);
   echo “标题：”.fgets($fs).”<br />”;
   echo “作者：”.fgets($fs).”<br />”;
   echo “内容：”.fread($fs,filesize($path.$filen)).”<br />”;
   echo “<hr>”;
   fclose($fs);
 
  }
 }
 closedir($dr);
 ?>
 <a href=”index.html”>返回首页</a>