<!-- head -->
<?php $this->load->view('admin/catalog/head', $this->data)?>
<div class="line"></div>
<div class="wrapper">
      <div class="widget">
           <div class="title">
			<h6>Cập nhật tag</h6>
		</div>
      <form id="form" class="form" enctype="multipart/form-data" method="post" action="">
          <fieldset>
                <div class="formRow">
                	<label for="param_name" class="formLeft">Tên:<span class="req">*</span></label>
                	<div class="formRight">
                		<span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="<?php echo $info->tag_name?>" name="name"></span>
                		<span class="autocheck" name="name_autocheck"></span>
                		<div class="clear error" name="name_error"><?php echo form_error('name')?></div>
                	</div>
                	<div class="clear"></div>
                </div>
                 <div class="formRow">
                	<label for="param_name" class="formLeft">Thứ tự hiển thị:</label>
                	<div class="formRight">
                		<span class="oneTwo"><input type="text" _autocheck="true" id="param_sort_order" value="<?php echo $info->sort_order?>" name="sort_order"></span>
                		<span class="autocheck" name="sort_order_autocheck"></span>
                		<div class="clear error" name="sort_order_error"><?php echo form_error('sort_order')?></div>
                	</div>
                	<div class="clear"></div>
                </div>
                <div class="formSubmit">
	           		<input type="submit" class="redB" value="Cập nhật">
	           	</div>
          </fieldset>
      </form>
      </div>
</div>
