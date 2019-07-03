<?php
require '../db_params.php';
										 if (isset($_POST['update_status'])) {
					
									$Status_save = $_POST['Status'];
									$UserID = $_POST['UserID'];
																		
									mysql_query("UPDATE studentreg SET time='$Status_save'
									WHERE id = '$UserID'")
													or die(mysql_error()); 
									header("Location:confirmstudents.php");		
								
								}
									?>