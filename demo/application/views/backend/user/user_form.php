<ol class="breadcrumb">
    <li class="active">
        <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
    </li>
</ol>
<div class="well">
<span>Trường có dấu (<b style="color:red">*</b>) là bắt buộc.</span>
<form method="post" action="<?php echo $url_admin?>user" enctype="multipart/form-data" id="frmform">
<input type="hidden" name="od" value="<?php if(isset($id)) echo $id;?>">
  <table width="100%" border="0">
	  <tr>
	    <td width="18%" height="43">Email <b style="color:red">*</b></td>
	    <td width="34%"><input value="<?php if(isset($detail))echo $detail->email;?>" class="form-control" name="email" id="email" ></td>
	    <td width="14%">Trạng thái <b style="color:red">*</b></td>
	    <td width="34%"><label>
	      <input type="radio" name="user_status" id="user_status" value="0" checked="true">
	      Chưa kích hoạt</label>
          <label>
            <input type="radio" name="user_status" id="user_status" value="2">
            Khóa</label>
          <label>
            <input type="radio" name="user_status" id="user_status"  value="1">
        Hoạt động</label></td>
    </tr>
	  <tr>
	    <td height="42">Mật khẩu<b style="color:red">*</b></td>
	    <td><input type="password" name="password" id="password" class="form-control" ></td>

            <td>Loại tài khoản <b style="color:red">*</b></td>
            <td><label>
              <input type="radio" value="2" name="user_type" id="user_type" checked>
              Nhân viên</label>
              <label>
                <input type="radio" value="1"  name="user_type" id="user_type" >
            Quản trị</label></td>
    </tr>
	  <tr>
	    <td height="45">Nhập lại MK<b style="color:red">*</b></td>
	    <td><input type="password" name="repass" id="repass" class="form-control"></td>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
      </tr>
	  <tr>
	    <td height="45">Giới tính</td>
	    <td><label>
	      <input type="radio" value="1"  name="sex" id="sex" checked>
	      Nam</label>
          <label style="white-space:nowrap">
            <input type="radio" value="0"  name="sex" id="sex">
        Nữ </label></td>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
      </tr>
	  <tr>
	    <td height="45">Địa chỉ</td>
	    <td><input value="<?php if(isset($detail))echo $detail->address;?>"class="form-control" name="address" id="address" ></td>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
    </tr>
	  <tr>
	    <td height="43">Ngày sinh</td>
	    <td><input class="form-control" type="date" name="birthday" id="birthday" value="<?php if(isset($detail))echo $detail->birthday;?>"></td>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
    </tr>
	  <tr>
	    <td height="45">Điện thoại <b style="color:red">*</b></td>
	    <td><input value="<?php if(isset($detail))echo $detail->phone;?>" class="form-control" name="phone" id="phone"></td>
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