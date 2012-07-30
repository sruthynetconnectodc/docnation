<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->Html->charset(); ?>
<title>
		<?php //echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('cake.generic','style','SpryTabbedPanels' ));
                echo $this->Html->script(array('jquery-1.7.2.min', 'wysiwyg', 'scripts', 'SpryTabbedPanels'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body>
    <div class="outer">
        <!--[if !IE]> Header Starts Here <![endif]-->
        <div class="header">
            <div class="logo"><?php echo $this->Html->image('logo.png'); ?></div>
            <?php if($this->Session->check('Auth.User') == true) echo $this->element('topnavigation'); ?>
        </div>
        <!--[if !IE]> Header Ends Here <![endif]-->
        <!--[if !IE]> Content Starts Here <![endif]-->
        <div class="content-area">
			<?php echo $this->fetch('content'); ?>
        </div>
        <!--[if !IE]> Content Ends Here <![endif]-->
    </div>
    <!--[if !IE]> Footer Starts Here <![endif]-->
    <div class="footer">(855) Doc-Nation | <a href="mailto:info@docnation.com">info@docnation.com</a><br />1500 SW 30th Avenue | Suite 10 | Boynton Beach, FL 33426 | &copy; 2012 Document Nation </div>
    <!--[if !IE]> Footer Ends Here <![endif]-->
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
