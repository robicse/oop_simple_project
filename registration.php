   <?php
    include "pages/header.php";
   
    include "pages/menu.php";
    
    require_once('classes/user.php');
	$obj = new User();
	if(isset($_POST['btn'])=='Register')
	{
		//echo 'ok';
		$msg = $obj->save_user($_POST);
	}
    
   ?> 
			<!---main_content--->
		    <div class="content_area">
			  <div class="structure fix content">
                              <div>
								<?php
									if(isset($msg)){
										echo $msg;
										unset($msg);
									}
								?>
							  </div>
							  <div class="fix form_area">
                                    <form action="" method="post">
                                        <table>
                                            <tr>
                                                <td>First Name</td>
                                                <td><input type="text" name="first_name" value="" /></td>
                                            </tr>
                                            <tr>
                                                <td>Last Name</td>
                                                <td><input type="text" name="last_name" value="" /></td>
                                            </tr>
                                            <tr>
                                                <td>Email Address</td>
                                                <td><input type="text" name="email_address" value="" /></td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td><input type="text" name="password" value="" /></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td><textarea rows="4" cols="25" name="address"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>Mobile No</td>
                                                <td><input type="text" name="mobile_no" value="" /></td>
                                            </tr>
                                            <tr>
                                                <td>City</td>
                                                <td><input type="text" name="city" value="" /></td>
                                            </tr>
                                            <tr>
                                                <td>Country</td>
                                                <td>
                                                    <select name="county" value="">
                                                        <option action="disable">select any country</option>
                                                        <option>Bangladesh</option>
                                                        <option>India</option>
                                                        <option>Pakistan</option>
                                                        <option>Srilanka</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Zip Code</td>
                                                <td><input type="text" name="zip_code" value="" /></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" name="btn" value="Register" /></td>
                                            </tr>
                                        </table>
                                        
                                    </form>
                              </div> 
			  </div>
			</div>
    <?php
    include "pages/footer.php";
   ?> 	  