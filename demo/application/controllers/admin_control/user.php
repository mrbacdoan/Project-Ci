<?php
if($this->login=='') redirect('admin_control/'); 
		$type=$this->uri->segment(3);
		$id=$this->uri->segment(4);
		if(isset($type) && $type!='')
		{
			// selectone show su lieu ra form
			if(isset($type) && $type=='form' && isset($id) && is_numeric($id))
			{
				$detail=$this->thuvien->selectone('tb_user',array('user_id'=>$id));
				$data['detail']=$detail;
			}
			//xoa 1 ban ghi
			if(isset($type) && $type=='del' && isset($id) && is_numeric($id))
			{
				$this->db->delete('tb_user', array('user_id' => $id));
				redirect('admin_control/user'); 
			}
		}
		else
		{
			if(isset($_POST['btnGui']))
			{
				if(isset($_POST['od']))$od=$_POST['od'];
				if(isset($od) && is_numeric($od))
				{
					//update
					unset($_POST['od']);
					unset($_POST['btnGui']);
					unset($_POST['repass']);
					$dulieu=$this->input->post(NULL, TRUE);
					$dulieu['password']=md5($_POST['password']);
					$this->db->update('tb_user',$dulieu,array('user_id' => $od));
					redirect('admin_control/user'); 
				}
				else
				{
					//insert
					unset($_POST['od']);
					unset($_POST['btnGui']);
					unset($_POST['repass']);
					$dulieu=$this->input->post(NULL, TRUE);
					$dulieu['password']=md5($_POST['password']);
					$this->db->insert('tb_user',$dulieu);
					redirect('admin_control/user'); 
				}
			}
			// xoa nhieu ban ghi
			if(isset($_POST['btnxoa']) && isset($_POST['cbitem']) && count($_POST['cbitem'])>0)
			{
				$listid=$_POST['cbitem'];
				for($i=0;$i<=count($listid);$i++)
				{
					$this->db->delete('tb_user', array('user_id' => $listid[$i]));
				}
				redirect('admin_control/user'); 
			}
			//selectall
				$this->data['link']=$this->url_admin.'user';
				$tukhoa=$this->input->post('tukhoa', TRUE);
				$data['tukhoa']=$tukhoa;
				$where='';
				$data['data_user']=$this->thuvien->selectall('tb_user',10,$this->data['link'],'user_id DESC','email;'.$tukhoa,$where);
		}
		$data['type']=$type;
		$data['id']=$id;
		$data['login']=$this->login;
		$data['template']='user/user';
		$data['url_admin']=$this->url_admin;
		$this->load->view('backend/index',$data);	
?>