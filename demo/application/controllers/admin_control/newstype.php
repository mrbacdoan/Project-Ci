<?php
if($this->login=='') redirect('admin_control/'); 
		$type=$this->uri->segment(3);
		$id=$this->uri->segment(4);
		if(isset($type) && $type!='' && !is_numeric($type))
		{
			//selectone 
			if(isset($type) && $type=='form' && isset($id) && is_numeric($id))
			{
				$detail=$this->thuvien->selectone('tb_newstype',array('newstype_id'=>$id));
				$data['detail']=$detail;
			}
			// xóa newstype
			if(isset($type) && $type=='del' && isset($id) && is_numeric($id))
			{
				$this->db->delete('tb_newstype', array('newstype_id' => $id));
				redirect('admin_control/newstype'); 
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
					unset($_POST['btnGui']);
					unset($_POST['od']);
					$dulieu=$this->input->post(NULL, TRUE);
					$this->db->update('tb_newstype',$dulieu,array('newstype_id' => $od));
					redirect('admin_control/newstype'); 
				}
				else
				{
					//insert
					unset($_POST['od']);
					unset($_POST['btnGui']);
					$dulieu=$this->input->post(NULL, TRUE);
					$this->db->insert('tb_newstype',$dulieu);
					redirect('admin_control/newstype'); 
				}
			}
			// xoa many newstype
			if(isset($_POST['btnxoa']) && isset($_POST['cbitem']) && count($_POST['cbitem'])>0)
			{
				$listid=$_POST['cbitem'];
				for($i=0;$i<=count($listid);$i++)
				{
					$this->db->delete('tb_newstype', array('newstype_id' => $listid[$i]));
				}
				redirect('admin_control/newstype'); 
			}
			//selectall de show ra list
			$this->data['link']=$this->url_admin.'newstype';
			$tukhoa=$this->input->post('tukhoa', TRUE);
			$data['tukhoa']=$tukhoa;
			$where='';
			$data['data_newstype']=$this->thuvien->selectall('tb_newstype',10,$this->data['link'],'newstype_id DESC','newstype_name;'.$tukhoa,$where);
		}
		
		
		$data['type']=$type;
		$data['id']=$id;
		$data['login']=$this->login;
		$data['template']='newstype/newstype';
		$data['url_admin']=$this->url_admin;
		$this->load->view('backend/index',$data);	
?>