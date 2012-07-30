<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="topnavigation">
            	<ul>
                	<li class="nav-active" id="client-services">
                    	<?php echo $this->Html->link('Client Services', array('#')); ?>
                        <ul>
                        	<li><?php echo $this->Html->link('Add Client', array('controller'=>'Clients', 'action'=>'add')); ?></li>
                        	<li><?php echo $this->Html->link('Edit Client', array('controller'=>'Clients')); ?></li>
                        </ul>
                    </li>
                	<li id="production">
                    	<?php echo $this->Html->link('Production', array('#')); ?>
                        <ul>
                        	<li><?php echo $this->Html->link('Call Sheet', array('#')); ?></li>
                        	<li><?php echo $this->Html->link('File Search', array('#')); ?></li>
                                <li><?php echo $this->Html->link('Registration', array('#')); ?></li>
                        	<li><?php echo $this->Html->link('Merge File Info', array('#')); ?></li>
                                <li><?php echo $this->Html->link('Create Flash Drive', array('#')); ?></li>
                        </ul>
                    </li>
                	<li id="billing">
                    	<?php echo $this->Html->link('Billing', array('#')); ?>
                        <ul>
                        	<li><?php echo $this->Html->link('See Reports & Flags', array('#')); ?></li>
                        </ul>
                    </li>
                	<!-- <li><a href="#">CMS</a></li> -->
                	<li><?php echo $this->Html->link('Logout', array('controller'=>'Users', 'action'=>'logout')); ?></li>
                </ul>
            </div>