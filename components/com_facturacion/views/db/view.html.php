<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class EmpresasViewEmpresa extends JView {

    function display($tpl = null) {
        global $mainframe, $option;
        jimport('joomla.html.pane');

        $user = JFactory::getUser();
//$groups = $user->groups;
        if ($user->id) {
            $document = JFactory::getDocument();
            $document->addScript(JURI::base() . 'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
            $document->addStyleSheet(JURI::base() . 'components/com_nutritions/assets/css/style.css');
            $document->addStyleSheet(JURI::base() . 'components/com_nutritions/assets/css/autosuggest_inquisitor.css');
            $document->addScript(JURI::base() . 'components/com_facturacion/assets/js/funciones.js');

            $document->addStyleSheet(JURI::base() . 'components/com_facturacion/assets/css/bootstrap.min_.css');
            $document->addStyleSheet(JURI::base() . 'components/com_facturacion/assets/css/table.css');
            $document->addScript(JURI::base() . 'components/com_facturacion/assets/js/bootstrap.min.js');

// Includs database connection
//include "db_connect.php";

// Database name
$database_name = "BDFacturador.db";

// Database Connection
$db = new SQLite3($database_name);

// Create Table "students" into Database if not exists 
$query = "CREATE TABLE IF NOT EXISTS TXXXX_BANDFACT (NUM_RUC	VARCHAR(11) NOT NULL,
	TIP_DOCU	CHAR(2) NOT NULL,
	NUM_DOCU	VARCHAR(60) NOT NULL,
	FEC_CARG	DATETIME,
	FEC_GENE	DATETIME,
	FEC_ENVI	DATETIME,
	DES_OBSE	VARCHAR(250),
	NOM_ARCH	VARCHAR(250),
	IND_SITU	CHAR(2),
	TIP_ARCH	CHAR(6),
	FIRM_DIGITAL	VARCHAR(250))";
$db->exec($query);

// Makes query with rowid
$query = "SELECT NUM_RUC, TIP_DOCU, NUM_DOCU, FEC_CARG,	FEC_GENE, FEC_ENVI, DES_OBSE, NOM_ARCH,	IND_SITU, TIP_ARCH, FIRM_DIGITAL FROM TXXXX_BANDFACT";
// Run the query and set query result in $result
// Here $db comes from "db_connection.php"
$result = $db->query($query) or trigger_error($db->error."[$query]");;
//print_r($result);
//exit();
}}}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data List</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">
		<a href="insert.php">Add New</a>
		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<tr>
				<td>NUM_RUC</td>
				<td>TIP_DOCU</td> 
                                <td>NUM_DOCU</td>
                                <td>FEC_CARG</td>
                                <td>FEC_GENE</td>
                                <td>FEC_ENVI</td>
                                <td>DES_OBSE</td> 
                                <td>NOM_ARCH</td>
                                <td>IND_SITU</td>
                                <td>TIP_ARCH</td>
                                <td>FIRM_DIGITAL</td>
				<td>Action</td>
			</tr>
			<?php while($row = $result->mysqli_fetch_assoc()) {?>
			<tr>
				<td><?php echo $row['NUM_RUC'];?></td>
				<td><?php echo $row['TIP_DOCU'];?></td>
                                <td><?php echo $row['NUM_DOCU'];?></td>
				<td><?php echo $row['FEC_CARG'];?></td>
                                <td><?php echo $row['FEC_GENE'];?></td>
				<td><?php echo $row['FEC_ENVI'];?></td>
                                <td><?php echo $row['DES_OBSE'];?></td>
				<td><?php echo $row['NOM_ARCH'];?></td>
                                <td><?php echo $row['IND_SITU'];?></td>
				<td><?php echo $row['TIP_ARCH'];?></td>
                                <td><?php echo $row['FIRM_DIGITAL'];?></td>
				<td>
					<a href="update.php?id=<?php echo $row['rowid'];?>">Edit</a> | 
					<a href="delete.php?id=<?php echo $row['rowid'];?>" onclick="return confirm('Are you sure?');">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>