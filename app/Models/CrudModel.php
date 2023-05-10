<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class CrudModel extends Model {
        
        public function getNames() {
            $names = $this->db->query('SELECT * FROM t_personas');
            return $names->getResult();
        }

        public function getUserById($idNombre) {
            $name = $this->db->query('SELECT * FROM t_personas WHERE id_nombre='.$idNombre);
            return $name->getResult();
        }
    }

