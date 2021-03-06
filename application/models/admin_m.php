<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_m extends CI_Model{
	/****** PHYLUM ONLY!!!!! ******/

	public function showAllPhylum(){
		$query = $this->db->get('tblPhylum');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		
	}

	 public function addPhylum(){
		$field = array(
			'strDomainName'=>$this->input->post('txtdName'),
			'strKingdomName'=>$this->input->post('txtkName'),
			'strPhylumName'=>$this->input->post('txtpName')
			);
		$this->db->insert('tblPhylum', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}	public function editPhylum(){
		$id = $this->input->get('id');
		$this->db->where('intPhylumID', $id);
		$query = $this->db->get('tblPhylum');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
    public function updatePhylum(){
    $id = $this->input->post('txtId');
    $field = array(
    'strDomainName'=>$this->input->post('txtedName'),
    'strKingdomName'=>$this->input->post('txtekName'),
    'strPhylumName'=>$this->input->post('txtepName')
    );
    $this->db->where('intPhylumID', $id);
    $this->db->update('tblPhylum', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

	/****** END PHYLUM!!!!! ******/
	/****** CLASS START!!!!! ******/
	public function showAllClass(){
		$query = $this->db->select('intClassID,
			 p.strPhylumName,
			 strClassName')
			->join('tblPhylum p', 'p.intPhylumID = c.intPhylumID')
			->get('tblCLass c');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}
			public function showClassPhylumName(){
		$query = $this->db->get('tblPhylum');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		
	}
		
	public function addClass(){
		$field = array(
			'intPhylumID'=>$this->input->post('spID'),
			'strClassName'=>$this->input->post('txtCName'),
			);
		$this->db->insert('tblClass', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function editClass(){

		$id = $this->input->get('id');
		$this->db->where('intClassID', $id);
		$query = $this->db->select('intClassID,
			 p.strPhylumName,
			 p.intPhylumID,
			 strClassName')
			->join('tblPhylum p', 'p.intPhylumID = c.intPhylumID')
			->get('tblCLass c');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}	
	public function updateClass(){
    $id = $this->input->post('txtId');
    $field = array(
    'intPhylumID'=>$this->input->post('speID'),
    'strClassName'=>$this->input->post('txteCName'),
    );
    $this->db->where('intClassID', $id);
    $this->db->update('tblClass', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }
	/****** END CLASS!!!!! ******/
	/****** ORDER START!!!!! ******/
	public function showAllOrder(){
		$query = $this->db->select('intOrderID,
			 c.strClassName,
			 strOrderName')
			->join('tblClass c', 'c.intClassID = o.intClassID')
			->get('tblOrder o');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showOrderClassName(){
		$query = $this->db->get('tblClass');
		if($query->num_rows() > 0){
			return $query->result();	
		}else{
			return false;
		}
		
	}
	
		public function addOrder(){
		$field = array(
			'intClassID'=>$this->input->post('txtcID'),
			'strOrderName'=>$this->input->post('txtOName'),
			);
		$this->db->insert('tblOrder', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
		public function editOrder(){

		$id = $this->input->get('id');
		$this->db->where('intOrderID', $id);
		$query = $this->db->select('intOrderID,
			 c.strClassName,
			 c.intClassID,
			 strOrderName')
			->join('tblClass c', 'c.intClassID = o.intClassID')
			->get('tblOrder o');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}	
	public function updateOrder(){
    $id = $this->input->post('txtId');
    $field = array(
    'intClassID'=>$this->input->post('sceID'),
    'strOrderName'=>$this->input->post('txteOName'),
    );
    $this->db->where('intOrderID', $id);
    $this->db->update('tblOrder', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }
	/****** END ORDER!!!!! ******/
	/****** FAMILY START!!!!! ******/

public function showAllFamily(){
		$query = $this->db->select('intFamilyID,
			 o.strOrderName,
			 strFamilyName')
			->join('tblOrder o', 'o.intOrderID = f.intOrderID')
			->get('tblFamily f');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}	public function showFamilyOrderName(){
		$query = $this->db->get('tblOrder');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
			
	public function addFamily(){
		$field = array(
			'intOrderID'=>$this->input->post('txtoID'),
			'strFamilyName'=>$this->input->post('txtfName'),
			);
		$this->db->insert('tblFamily', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function editFamily(){

		$id = $this->input->get('id');
		$this->db->where('intFamilyID', $id);
		$query = $this->db->select('intFamilyID,
			 o.strOrderName,
			 o.intOrderID,
			 strFamilyName')
			->join('tblOrder o', 'o.intOrderID = f.intOrderID')
			->get('tblFamily f');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}	
    public function updateFamily(){
    $id = $this->input->post('txtId');
    $field = array(
    'intOrderID'=>$this->input->post('seOID'),
    'strFamilyName'=>$this->input->post('txteFName'));
    $this->db->where('intFamilyID', $id);
    $this->db->update('tblFamily', $field);
    if($this->db->affected_rows() >0){
      return true;
    }else{
      return false;
    }
  }

	/****** END FAMILY!!!!! ******/
	/****** GENUS START!!!!! ******/

public function showAllGenus(){
		$query = $this->db->select('intGenusID,
			 f.strFamilyName,
			 strGenusName')
			->join('tblFamily f', 'f.intfamilyID = g.intFamilyID')
			->get('tblGenus g');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}public function showGenusFamilyName(){
		$query = $this->db->get('tblFamily');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	
	public function addGenus(){
		$field = array(
			'intFamilyID'=>$this->input->post('txtoID'),
			'strGenusName'=>$this->input->post('txtgName'),
			);
		$this->db->insert('tblGenus', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function editGenus(){

		$id = $this->input->get('id');
		$this->db->where('intGenusID', $id);
		$query = $this->db->select('intGenusID,
			 f.strFamilyName,
			 f.intFamilyID,
			 strGenusName')
			->join('tblFamily f', 'f.intFamilyID = g.intFamilyID')
			->get('tblGenus g');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}	
    public function updateGenus(){
    $id = $this->input->post('txtId');
    $field = array(
    'intFamilyID'=>$this->input->post('segFID'),
    'strGenusName'=>$this->input->post('txteGName'));
    $this->db->where('intGenusID', $id);
    $this->db->update('tblGenus', $field);
    if($this->db->affected_rows() >0){
      return true;
    }else{
      return false;
    }
  }

	/****** END GENUS!!!!! ******/
	/****** SPECIES START!!!!! ******/

public function showAllSpecies(){
		$query = $this->db->select('intSpeciesID,
			 g.strGenusName,
			 strSpeciesName,
			 strCommonName')
			->join('tblGenus g', 'g.intGenusID = s.intGenusID')
			->get('tblSpecies s');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showSpeciesGenusName(){
		$query = $this->db->get('tblGenus');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	
	public function addSpecies(){
		$field = array(
			'intGenusID'=>$this->input->post('txtgID'),
			'strSpeciesName'=>$this->input->post('txtsName'),
			'strCommonName'=>$this->input->post('txtcoName')
			);
		$this->db->insert('tblSpecies', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function editSpecies(){

		$id = $this->input->get('id');
		$this->db->where('intSpeciesID', $id);
		$query = $this->db->select('intSpeciesID,
			 g.strGenusName,
			 g.intGenusID,
			 strSpeciesName,
			 strCommonName')
			->join('tblGenus g', 'g.intGenusID = s.intGenusID')
			->get('tblSpecies s');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}	
    public function updateSpecies(){
    $id = $this->input->post('txtId');
    $field = array(
    'intGenusID'=>$this->input->post('sesGID'),
    'strSpeciesName'=>$this->input->post('txteSName'),
	'strCommonName'=>$this->input->post('txtecName')
	);
    $this->db->where('intSpeciesID', $id);
    $this->db->update('tblSpecies', $field);
    if($this->db->affected_rows() >0){
      return true;
    }else{
      return false;
    }
  }

	/****** END SPECIES!!!!! ******/
	/****** FAMILY BOXES START!!!!! ******/

public function showAllFamilyBoxes(){
		$query = $this->db->select('intBoxID,
			 f.strFamilyName,
			 strBoxNumber,
			 intBoxLimit')
			->join('tblFamily f', 'f.intFamilyID = fb.intFamilyID')
			->get('tblFamilyBox fb');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showFBFamilyName(){
		$query = $this->db->get('tblFamily');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function addFamilyBox(){
			$familyid=$this->input->post('sfbFID');
			$boxlimit=$this->input->post('txtBLLimit');
	$execquery  = "

		DECLARE @familyID INT
		DECLARE @identifier INT
		DECLARE @boxlimit INT
		DECLARE @boxNumber VARCHAR(10)
		SET @familyid = '$familyid'
		set @boxLimit = '$boxlimit'

		SET @identifier = (SELECT TOP 1 CAST(SUBSTRING(strBoxNumber, 5, 3) AS INT) FROM tblFamilyBox ORDER BY strBoxNumber DESC)

		IF @identifier IS NULL
			SET @boxNumber = 'BOX-001'
		ELSE 
			SET @boxNumber = 'BOX-' + FORMAT(@identifier + 1, '00#')

		INSERT INTO tblFamilyBox (strBoxNumber, intFamilyID, intBoxLimit)
		VALUES (@boxNumber, @familyID, @boxLimit);";

		$this->db->query($execquery);

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function editFamilyBox(){

		$id = $this->input->get('id');
		$this->db->where('intBoxID', $id);
		$query = $this->db->select('intBoxID,
			 f.strFamilyName,
			 f.intFamilyID,
			 strBoxNumber,
			 intBoxLimit')
			->join('tblFamily f', 'f.intFamilyID = fb.intFamilyID')
			->get('tblFamilyBox fb');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}	
    public function updateFamilyBox(){
    $id = $this->input->post('txtId');
    $field = array(
    'intFamilyID'=>$this->input->post('sefbFID'),
    'intBoxLimit'=>$this->input->post('txteBLLimit')
	);
    $this->db->where('intBoxID', $id);
    $this->db->update('tblFamilyBox', $field);
    if($this->db->affected_rows() >0){
      return true;
    }else{
      return false;
    }
  }
		/****** END FAMILY BOXES!!!!! ******/
	/****** LOCALITY START!!!!! ******/
		public function showAllLocality(){
		$query = $this->db->get('tblLocality');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	/****** END LOCALITY BOXES!!!!! ******/
	/****** COLLECTOR START!!!!! ******/
public function showAllCollector(){
		$query = $this->db->select('intCollectorID,
			 pe.intPersonID,
			 pe.strFirstName,
			 pe.strMiddleInitial,
			 pe.strLastName,
			 strSection')
			->join('tblPerson pe', 'pe.intPersonID = co.intPersonID')
			->get('tblCollector co');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function addCollector(){
	
	$fname = $this->input->post('fName');
	$mname = $this->input->post('mName');
	$minitial = $this->input->post('mInitial');
	$lname = $this->input->post('lName');
	$nsuffix = $this->input->post('nSuffix');
	$cname = $this->input->post('cName');
	$email = $this->input->post('eMail');
	$cdname = $this->input->post('cdName');
	$secname = $this->input->post('secName');


	$query="
	DECLARE @firstname		VARCHAR(50);
	DECLARE @middlename		VARCHAR(50);
	DECLARE @lastname		VARCHAR(50);
	DECLARE @middleinitial	VARCHAR(3);
	DECLARE @namesuffix		VARCHAR(5);
	DECLARE @contactno		VARCHAR(15);
	DECLARE @email			VARCHAR(255);
	DECLARE @college		VARCHAR(100);
	DECLARE @section		VARCHAR(50);
	
	set @firstname = '$fname'
	set @middlename = '$mname'
	set @lastname = '$lname'
	set @middleinitial = '$minitial'
	set @namesuffix = '$nsuffix'
	set @contactno = '$cname'
	set @email = '$email'
	set @college = '$cdname'
	set @section = '$secname'


		DECLARE @personID INT;
		DECLARE @duplicateID INT;

		SELECT @duplicateID = intPersonID
		FROM tblPerson 
		WHERE strFirstname = @firstname
			AND strMiddlename = @middlename
			AND strLastname = @lastname
			AND strMiddleInitial = @middleinitial
			AND strNameSuffix = @namesuffix

		IF @duplicateID IS NULL
			BEGIN
				INSERT INTO tblPerson(strFirstname, strMiddlename, strLastname, 
									  strMiddleInitial, strNameSuffix, 
									  strContactNumber, strEmailAddress)
				VALUES(@firstname, @middlename, @lastname, @middleinitial, @namesuffix, @contactno, @email)

				SELECT @personID = intPersonID
				FROM tblPerson 
				WHERE strFirstname = @firstname
					AND strMiddlename = @middlename
					AND strLastname = @lastname
					AND strMiddleInitial = @middleinitial
					AND strNameSuffix = @namesuffix
					AND strContactNumber = @contactno
					AND strEmailAddress = @email 
			END
		ELSE
			SET @personID = @duplicateID

		IF NOT EXISTS (SELECT intCollectorID
					   FROM tblCollector
					   WHERE intPersonID = @personID AND strCollege = @college AND strSection = @section)
		BEGIN
			INSERT INTO tblCollector (intPersonID, strCollege, strSection)
			VALUES (@personID, @college, @section)
		END";
		$this->db->query($query);

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function updateCollector(){
	$fname = $this->input->post('feName');
	$mname = $this->input->post('meName');
	$minitial = $this->input->post('meInitial');
	$lname = $this->input->post('leName');
	$nsuffix = $this->input->post('neSuffix');
	$cname = $this->input->post('ceName');
	$email = $this->input->post('eeMail');
	$cdname = $this->input->post('cdeName');
	$secname = $this->input->post('seceName');
	$collectorid = $this->input->post('txtId');



	$query="
	DECLARE @firstname		VARCHAR(50);
	DECLARE @middlename		VARCHAR(50);
	DECLARE @lastname		VARCHAR(50);
	DECLARE @middleinitial	VARCHAR(3);
	DECLARE @namesuffix		VARCHAR(5);
	DECLARE @contactno		VARCHAR(15);
	DECLARE @email			VARCHAR(255);
	DECLARE @college		VARCHAR(100);
	DECLARE @section		VARCHAR(50);
	DECLARE @collectorID		INT;
	
	set @firstname = '$fname'
	set @middlename = '$mname'
	set @lastname = '$lname'
	set @middleinitial = '$minitial'
	set @namesuffix = '$nsuffix'
	set @contactno = '$cname'
	set @email = '$email'
	set @college = '$cdname'
	set @section = '$secname'
	set @collectorID = '$collectorid'


		DECLARE @personID INT;
		SET @personID = (SELECT intPersonID FROM tblCollector WHERE intCollectorID = @collectorID)

		UPDATE tblPerson
		SET strFirstname = @firstname,
			strMiddlename = @middlename,
			strLastname = @lastname,
			strMiddleInitial = @middleinitial,
			strNameSuffix = @namesuffix,
			strContactNumber = @contactno,
			strEmailAddress = @email
		WHERE intPersonID = @personID;

		UPDATE tblCollector
		SET strCollege = @college,
			strSection = @section
		WHERE intCollectorID = @collectorID";
		$this->db->query($query);

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function editCollector(){
		$id = $this->input->get('id');
		$this->db->where('intCollectorID', $id);
		$query = $this->db->select('intCollectorID,
			 pe.intPersonID
      ,pe.strFirstname
      ,pe.strMiddlename
      ,pe.strLastname
      ,pe.strMiddleInitial
      ,pe.strNameSuffix
      ,pe.strContactNumber
      ,pe.strEmailAddress,
			 strCollege,
			 strSection')
			->join('tblPerson pe', 'pe.intPersonID = co.intPersonID')
			->get('tblCollector co');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}



}?>