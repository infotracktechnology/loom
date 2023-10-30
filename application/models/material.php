<?php
class Material extends CI_Model
{
	public function fetchMaterial($materialName, $groupField = 'count') {
        $query = $this->db->select('material_id,'.$groupField)->from('material_master')->where('material_name', $materialName)->group_by($groupField)->get();
          return $query->result_object();
      }
}
?>

