<?php
class MahasiswaModel
{
	private $table = 'mahasiswas';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getMahasiswas()
	{
		$this->db->query('SELECT * FROM '.$this->table);
		return $this->db->setResults();
	}

	public function getMahasiswa($id)
	{
		$this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->setResult();
	}

	public function addMahasiswa($data)
	{
		$query = "INSERT INTO mahasiswas 
		VALUES ('',:nama,:npm,:jurusan)";
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('npm',$data['npm']);
		$this->db->bind('jurusan',$data['jurusan']);

		$this->db->execute();

		return redirect('/dashboard');
	}
}