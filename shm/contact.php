<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
        // put your code here
        include_once 'includes/header.php';
        ?>
            <!-- MAIN PAGE -->
            <div class="container">
                <h1>Contact</h1>
            </div>
        </div>
        <?php
        // put your code here
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Contact Me</h3>
                        </div>
                        
                        <!--- Form has to be updated for Post of message to the Email associated with the control -->
                        <div class="panel-body">
                            <p>Please fill out this form</p>
                            <form>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" placeholder="Type your message here"></textarea>
                                </div>  
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <h3>The Character set of SHB</h3>
                        <p>His personality trait on the 16 personality traits test is ESFJ known as the caregiver or consult type. People with such personalities are popular, 
                            conscientious,  warm hearted , has strong sense of responsibilities and duty, value traditions. Some famous people with such personality traits are Bill Clinton, 
                            Taylor Swift, Jennifer Garner  and Steve Harvey. On temperament spectrum he identifies as sanguine and choleric. </p>
                    </div>
                </div>
            </div>
        </div>
  <?php 
        include_once 'includes/footer.php';
        