<ol class="breadcrumb">
    <li class="active">
        <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
    </li>
</ol>
<div class="well">
<form method="post" action="<?php echo $url_admin?>newstype" enctype="multipart/form-data" id="frmform">
<input type="hidden" name="od" value="<?php if(isset($id)) echo $id;?>">
  <table width="100%" border="0">
	  <tr>
	    <td width="18%" height="43">Tên loại tin <b style="color:red">*</b></td>
	    <td width="34%"><input value="<?php if(isset($detail))echo $detail->newstype_name;?>" class="form-control" name="newstype_name" id="newstype_name"></td>
	    <td width="14%">&nbsp;</td>
	    <td width="34%">&nbsp;</td>
    </tr>
	  <tr>
	    <td height="42">Trạng thái<b style="color:red"></b></td>
	    <td>
        	<label><input type="radio" name="newstype_status" id="newstype_status" value="1" <?php if(isset($detail) && $detail->newstype_status==1)echo 'checked'?> checked>Hiển  thị</label>
            <label><input type="radio" name="newstype_status" id="newstype_status" value="0" <?php if(isset($detail) && $detail->newstype_status==0)echo 'checked'?>>Không hiển thị</label>
        </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
	  <tr>
	    <td height="87"></td>
	    <td><button type="submit" class="btn btn-primary" name="btnGui">Cập nhật</button>
       	  <button type="reset" class="btn btn-danger" style="margin-left:50px;">Làm lại</button>
        </td>
	    <td></td>
	    <td>&nbsp;</td>
    </tr>
  </table>
</form>
</div>