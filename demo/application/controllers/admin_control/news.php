<?php
if($this->login=='') redirect('admin_control/'); 
		$type=$this->uri->segment(3);
		$id=$this->uri->segment(4);
		if(isset($type) && $type!='')
		{
			//selectone
			if(isset($type) && $type=='form' && isset($id) && is_numeric($id))
			{
				$detail=$this->thuvien->selectone('tb_news',array('news_id'=>$id));
				$data['detail']=$detail;
			}
			// xoa 1 ban ghi
			if(isset($type) && $type=='del' && isset($id) && is_numeric($id))
			{
				$this->db->delete('tb_news', array('news_id' => $id));
				redirect('admin_control/news'); 
			}
			//slectall newstype
			$query=$this->db->get_where('tb_newstype',array('newstype_status'=>1));
			$data['data_newstype']=$query->result();
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
					$dulieu=$this->input->post(NULL, FALSE);
					$this->db->update('tb_news',$dulieu,array('news_id' => $od));
					redirect('admin_control/news'); 
				}
				else
				{
					//insert
					unset($_POST['od']);
					unset($_POST['btnGui']);
					$dulieu=$this->input->post(NULL, FALSE);
					$this->db->insert('tb_news',$dulieu);
					redirect('admin_control/news'); 
				}
			}
			// xoa nhieu ban ghi
			if(isset($_POST['btnxoa']) && isset($_POST['cbitem']) && count($_POST['cbitem'])>0)
			{
				$listid=$_POST['cbitem'];
				for($i=0;$i<=count($listid);$i++)
				{
					$this->db->delete('tb_news', array('news_id' => $listid[$i]));
				}
				redirect('admin_control/news'); 
			}
			//selectall
			$this->data['link']=$this->url_admin.'news';
			$tukhoa=$this->input->post('tukhoa', TRUE);
			$data['tukhoa']=$tukhoa;
			$where='';
			$data['data_news']=$this->thuvien->selectall('tb_news',10,$this->data['link'],'news_id DESC','news_title;'.$tukhoa,$where);	
		}
		$data['type']=$type;
		$data['id']=$id;
		$data['login']=$this->login;
		$data['template']='news/news';
		$data['url_admin']=$this->url_admin;
		$this->load->view('backend/index',$data);	
?>
