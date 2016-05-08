   <?php
    include "pages/header.php";
   
    include "pages/menu.php";
    
    require_once('classes/user.php');
	$obj = new User();
	$result = $obj->select_all_user();
    
   ?> 
			<!---main_content--->
		    <div class="content_area">
			  <div class="structure fix content">
                              <table border="1" width="700px">
                                  <tr>
                                      <th>User Id</th>
                                      <th>Full Name</th>
                                      <th>Email Address</th>
                                      <th>Mobile No</th>
                                      <th>City</th>
                                      <th>Action</th>
                                  </tr>
									<?php
										while($row=mysql_fetch_array($result))
										{
									?>
									<tr>
										<td><?php echo $row['user_id'];?></td>
										<td><?php echo $row['first_name'].$row['last_name'];?></td>
										<td><?php echo $row['email_address'];?></td>
										<td><?php echo $row['mobile_no'];?></td>
										<td><?php echo $row['city'];?></td>
										<td><a href="">Edit</a> ! <a href="delete.php?user_id=<?php echo $row['user_id'];?>">Delete</a></td>
									</tr>
									<?php
										}
									?>
                                  
                              </table>
							  
			  </div>
			</div>
    <?php
    include "pages/footer.php";
   ?> 	  