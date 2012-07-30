
<?php
//<h2>Login</h2>
//echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));
//echo $this->Form->input('User.username');
//echo $this->Form->input('User.password');
//echo $this->Form->end('Login');
?>
<!--[if !IE]> Content Starts Here <![endif]-->
        <div class="login-area">
            <div class="login">
                <?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));?>
                <div class="message-area">        	
			<?php echo $this->Session->flash(); ?></div>
                <div><?php echo $this->Form->input('User.username'); ?></div>
                <div><?php echo $this->Form->input('User.password'); ?></div>
                <div><?php echo $this->Form->end('Login'); ?></div>
            </div>
        </div>
        <!--[if !IE]> Content Ends Here <![endif]-->