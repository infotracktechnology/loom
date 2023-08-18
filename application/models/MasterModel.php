<?php
class MasterModel extends ci_model
{
	
	public function agent_master_update($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('agent_master',$data);
	}
	public function agent_master_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('agent_master');
	}
}