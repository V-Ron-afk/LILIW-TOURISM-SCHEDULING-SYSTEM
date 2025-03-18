<?php
ob_start();
require('conn.php');  
?>
<section class="discussions">
                <div class="discussion search">
                    <div class="searchbar">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="text" placeholder="Search..."></input>
                    </div>
                </div>
                <div class="discussion message-active">
                    <div class="photo"
                        style="background-image: url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
                        <div class="online"></div>
                    </div>

                             
            <?php
                      
                       
                            $sqlget = "SELECT * FROM users";
                            $sqldata = mysqli_query($con, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());
                            while ($row = mysqli_fetch_assoc($sqldata)){
                         
   
                        ?>

					<a href="chat.php?id=<?php echo $row['user_id'];?>" class="list-group-item list-group-item-action border-0">
					
						<div class="d-flex align-items-start">
							<img src="../img/<?php echo $row['valid_id'];?>" class="rounded-circle mr-1"  onerror="this.onerror=null;this.src='https://placeimg.com/200/300/animals';" alt="Vanessa Tucker" width="40" height="40">
							<div class="flex-grow-1 ml-3">
								<?php echo $row['fullname'];?>
								<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
							</div>
						</div>
					</a>

                    <?php }?>


            </section>
            <section class="chat">
                <div class="header-chat">
                    <i class="icon fa fa-user-o" aria-hidden="true"></i>
                    <p class="name"><?php 
      
         $id=$_GET['id'];

         $sqlget = "SELECT * FROM users where user_id =$id ";
         $sqldata = mysqli_query($con, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());
     
       while ($row = mysqli_fetch_assoc($sqldata)) {

		echo $row['fullname'];
	   }
		
		?></p>
                    <i class="icon clickable fa fa-ellipsis-h right" aria-hidden="true"></i>
                </div>
                <div class="messages-chat">


                <?php 
   
         $id=$_GET['id'];

         $sqlget = "SELECT * FROM users where user_id =$id ";
         $sqldata = mysqli_query($con, $sqlget) or die('Error Displaying Data'. mysqli_connect_error());
     
       while ($row = mysqli_fetch_assoc($sqldata)) {
     

       $send=$_SESSION['user_id'];
       $sqlget1 = "SELECT * FROM messages";
       $sqldata1 = mysqli_query($con, $sqlget1) or die('Error Displaying Data'. mysqli_connect_error());

       while ($row1 = mysqli_fetch_assoc($sqldata1)) {
        if ($row1['sender']==$_SESSION['user_id'] &&  $row1['receiver']==$id){
          
       
       ?>

       
                <!--sender-->

                <div class="message">
                        <div class="photo"
                            style="background-image: url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
                            <div class="online"></div>
                        </div>
                        <p class="text"><?php echo $row1['message'];?></p>
                    </div>
                    <p class="time"> 14h58</p>
                       <!--sender-->

						

                            <?php }

else if ($row1['sender']==$id &&  $row1['receiver']==$_SESSION['user_id']){ ?>



           <!--receiver-->
           <div class="message text-only">
                        <div class="response">
                            <p class="text"> <?php echo $row1['message'];?></p>
                        </div>
                    </div>
                    <p class="response-time time"> 15h04</p>
                     <!--receiver-->

							

							
							

                            <?php
}

        }
        }?>			


                       
                 
                   
                </div>
                <div class="footer-chat">
                    <i class="icon fa fa-smile-o clickable" style="font-size:25pt;" aria-hidden="true"></i>
                    <input type="text" class="write-message" placeholder="Type your message here"></input>
                    <i class="icon send fa fa-paper-plane-o clickable" aria-hidden="true"></i>
                </div>
            </section>