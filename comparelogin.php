<form action="index.php" method="post" id="myform">
     <tr>
        <td>User Name </td>
        <td><input type="text" name="text_username" placeholder="your username here" class="validate[required]"/></td>
     </tr>
      <tr>
        <td>Pass Word </td>
        <td><input type="password" name="text_password" placeholder="your password here" class="validate[required]" /></td>
     </tr>
     <?php 
            $userPass = array();
            $userName = array();
            $userID = array();
            include ('include/connectdb.php');
            if(isset($_POST['tbn_submit'])){
                $query = mysql_query("SELECT * FROM tblusers");
                $username = $_POST['text_username'];
                $password = $_POST['text_password'];

                 while($value= mysql_fetch_array($query)){ 
                            $userPass = $value['user_password'];
                            $userName = $value['user_username'];
                            $userID = $value['user_id'];
                                if($username == $userName && $password == $userPass){
                                     header("location:DataInfo.php?uid=".$userID);
                                   }
                                 else if($username != $userName && $password == $userPass) {
                                    echo'<tr><td colspan="2"><center><b style="color:red;">Invalide username or password, please check again!   </b></center></td></tr>';             
                                    }
                }
             }      
    ?>
     <tr>
        <td></td>
        <td><input type="submit" name="tbn_submit" class="btn btn-success" value="Login"/><input type="reset" class="btn btn-warning" value="Cancel"/></td>
     </tr>
     </form>