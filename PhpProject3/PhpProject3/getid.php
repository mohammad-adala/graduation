<?php
include "config";
function getid($x){
     $sql = "select `group_id` FROM `groups` WHERE group_name='" . $x .
          "'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
     
       $r =   $_SESSION['username'] ;
    
       return $r;  
}}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

