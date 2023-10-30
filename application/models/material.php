<?php
class Material extends ci_model
{
	public function fetchMaterial($materialName, $groupField = 'count') {
        $query = $this->db->select('material_id,'.$groupField)->from('material_master')->where('material_name', $materialName)->group_by($groupField)->get();
          return $query->result_object();
      }
}


