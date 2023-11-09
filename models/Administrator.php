<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class Administrator extends db
{

	private function view_autos()
	{
		try {
			$SQL = "SELECT * FROM autos";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die('Error Administrator(view_autos) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function get_view_autos()
	{
		return $this->view_autos();
	}

	private function registerauto($data)
	{
		try {
			$SQL = 'INSERT INTO autos (modelo, año, color, pasajeros, cilindros, transmicion, velocidad) VALUES (?,?,?,?,?,?,?)';
			$result = $this->connect()->prepare($SQL);
			$result->execute(
				array(
					$data['modelo'],
					$data['año'],
					$data['color'],
					$data['pasajeros'],
					$data['cilindros'],
					$data['transmision'],
					$data['velocidad']
				)
			);
		} catch (Exception $e) {
			die('Error Administrator(register_autos) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function set_register_auto($data)
	{
		$this->registerauto($data);
	}

	private function updateauto($data)
	{
		try {
			$SQL = 'UPDATE autos SET modelo = ?, año = ?, color = ?, pasajeros = ?, cilindros = ?, transmicion = ?, velocidad = ? WHERE id = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(
				array(
					$data['modelo'],
					$data['año'],
					$data['color'],
					$data['pasajeros'],
					$data['cilindros'],
					$data['transmision'],
					$data['velocidad'],
					$data['id']
				)
			);
		} catch (Exception $e) {
			die('Error Administrator(update_auto) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function set_update_auto($data)
	{
		$this->updateauto($data);
	}

	private function delete_auto($id)
	{
		try {
			$SQL = 'DELETE FROM autos WHERE id = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($id));
		} catch (Exception $e) {
			die('Error Administrator(delete_auto) ' . $e->getMessage());
		} finally {
			$result = null;
		}
	}

	function set_delete_auto($id)
	{
		$this->delete_auto($id);
	}
}
?>