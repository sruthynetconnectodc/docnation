<div class="albumItems form">
<?php echo $this->Form->create('AlbumItem', array("id"=>"fileupload", "method"=>"post", "enctype"=>"multipart/form-data"));?>
	<fieldset>
		<legend><?php echo __('Add Album Item'); ?></legend>
	<?php
		echo $this->Form->input('album_id');
	//	echo $this->Form->input('item');
	//	echo $this->Form->input('description');
		//echo $this->Form->input('item_type');
		//echo $this->Form->input('item_extension');
		//echo $this->Form->input('modified_date');
		//echo $this->Form->input('status');
	?>
                    <!-- The file upload form used as target for the file upload widget -->
   
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="span7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="icon-plus icon-white"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="icon-upload icon-white"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="icon-ban-circle icon-white"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="icon-trash icon-white"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle" style="float:none;">
            </div>
            <!-- The global progress information -->
            <!--<div class="span5 fileupload-progress fade">-->
                <!-- The global progress bar -->
                <!--<div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="bar" style="width:0%;"></div>
                </div>-->
                <!-- The extended global progress information -->
               <!-- <div class="progress-extended">&nbsp;</div>-->
           <!-- </div> -->
           <!-- Drag & Drop Area -->
           <!---- ---->
        </div>
        <!-- The loading indicator is shown during file processing -->
        <div class="fileupload-loading"></div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped files-drop-area"><tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody></table>

	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Album Items'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Albums'), array('controller' => 'albums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album'), array('controller' => 'albums', 'action' => 'add')); ?> </li>
	</ul>
</div>
