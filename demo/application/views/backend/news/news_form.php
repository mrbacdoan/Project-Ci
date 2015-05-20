<ol class="breadcrumb">
    <li class="active">
        <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
    </li>
</ol>
<div class="well">
  <form method="post" action="<?php echo $url_admin?>news" enctype="multipart/form-data" id="frmform">
  <input type="hidden" name="od" value="<?php if(isset($id)) echo $id;?>">
    <table width="100%" border="0">
	  <tr>
	    <td width="18%" height="53">Thể loại<b style="color:red">*</b></td>
	    <td width="42%">
        
	      <select name="newstype_id" id="newstype_id" class="form-control">
          <?php 
		  if(isset($data_newstype))
		  		foreach($data_newstype as $item_newstype)
				{
		  ?>
	        <option value="<?php echo $item_newstype->newstype_id;?>"><?php echo $item_newstype->newstype_name;?></option>
		  <?php
        		}
          ?>
       	</select></td>
	    <td width="13%">&nbsp;</td>
	    <td width="27%">&nbsp;</td>
    </tr>
	  <tr>
	    <td height="54">Tiêu đề<b style="color:red">*</b></td>
	    <td><input value="<?php if(isset($detail))echo $detail->news_title;?>" class="form-control" name="news_title" id="news_title" ></td>

            <td>&nbsp;</td>
            <td>&nbsp;</td>
    </tr>
	  <tr>
	    <td height="65">Giới thiệu<b style="color:red">*</b></td>
	    <td><textarea name="news_header" id="news_header" class="form-control" style="min-height:150px;"><?php if(isset($detail))echo $detail->news_header;?></textarea></td>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
      </tr>
	  <tr>
	    <td height="21">&nbsp;</td>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
      </tr>
	  <tr>
	    <td height="45">Nội dung<b style="color:red">*</b></td>
	    <td colspan="3"><textarea name="news_content" id="news_content" class="wysiwygEditor"><?php if(isset($detail))echo $detail->news_content;?></textarea></td>
      </tr>
	  <tr>
	    <td height="43">Ảnh<b style="color:red">*</b></td>
	    <td><input type="text" name="news_img" id="news_img" class="form-control validate[required]" style="float:left;" value="<?php if(isset($detail)) echo $detail->news_img;?>"><button onclick="browseKCFinder('news_img', 'image');return false;" class="btn btn-primary" style="float:left;">Chọn</button></td>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
    </tr>
	  <tr>
	    <td height="42">Trạng thái <b style="color:red">*</b></td>
	    <td><label>
	      <input type="radio" name="news_status" id="news_status" value="1" checked>
	      Hiển thị</label>
          <label>
            <input type="radio" name="news_status" id="news_status" value="0">
        Không hiển thị</label></td>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
      </tr>
	  <tr>
	    <td height="42">&nbsp;</td>
	    <td>&nbsp;</td>
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