<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelInfits extends JModel {

    var $_id;
    var $_data;

    function __construct() {
        parent::__construct();

        $array = JRequest::getVar('cid', 0, '', 'array');
        $this->setId((int) $array[0]);
    }

    function setId($id) {
        // Set id and wipe data
        $this->_id = $id;
        $this->_data = null;
    }

    function &getData() {

        // Load the data
        if (empty($this->_data)) {
            $query = "SELECT CONCAT_WS(' ', p.tx_nro_documento,'-',p.tx_apellido_paterno, p.tx_apellido_materno, p.tx_nombres) AS encuestador_name,
                      CONCAT_WS(' - ',r.cod_2000, r.DESC_Dpto, r.desc_prov, r.desc_dist, '|', r.desc_disa, r.DESC_RED, r.DESC_ESTAB) AS establec_name,
                      inf.*
                      FROM inf_its inf 
                      LEFT JOIN persona AS p ON (inf.nu_dni = p.tx_nro_documento)
                      INNER JOIN entidad r ON (inf.cod_2000 = r.cod_2000) WHERE inf.id_its=" . $this->_id;
            //echo $query;
            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
            $this->_data = new stdClass();
            $this->_data->id_its = 0;
            $this->_data->nu_dni = null;
            $this->_data->cod_2000 = null;
            $this->_data->nu_ano = null;
            $this->_data->nu_mes = null;
            
            $this->_data->nu_poba = null;
            $this->_data->nu_pobb = null;
            $this->_data->nu_pobc = null;
            $this->_data->nu_pobd = null;
            $this->_data->nu_pobe = null;
            $this->_data->nu_pobf = null;
            $this->_data->nu_pobg = null;
            $this->_data->nu_pobh = null;
            $this->_data->nu_pobi = null;
            $this->_data->nu_pobj = null;

            $this->_data->nu_001a = null;
            $this->_data->nu_001b = null;
            $this->_data->nu_001c = null;
            $this->_data->nu_001d = null;
            $this->_data->nu_001e = null;
            $this->_data->nu_001f = null;
            $this->_data->nu_001g = null;
            $this->_data->nu_001h = null;
            $this->_data->nu_001i = null;
            $this->_data->nu_001j = null;
            $this->_data->nu_001k = null;
            $this->_data->nu_001l = null;
            $this->_data->nu_001m = null;
            $this->_data->nu_001n = null;
            $this->_data->nu_001o = null;
            $this->_data->nu_001p = null;
            $this->_data->nu_001q = null;
            $this->_data->nu_001r = null;
            $this->_data->nu_001s = null;
            $this->_data->nu_001t = null;
            $this->_data->nu_001u = null;
            $this->_data->nu_001v = null;
            

            $this->_data->nu_002a = null;
            $this->_data->nu_002b = null;
            $this->_data->nu_002c = null;
            $this->_data->nu_002d = null;
            $this->_data->nu_002e = null;
            $this->_data->nu_002f = null;
            $this->_data->nu_002g = null;
            $this->_data->nu_002h = null;
            $this->_data->nu_002i = null;
            $this->_data->nu_002j = null;
            $this->_data->nu_002k = null;
            $this->_data->nu_002l = null;

            $this->_data->nu_003a = null;
            $this->_data->nu_003b = null;
            $this->_data->nu_003c = null;
            $this->_data->nu_003d = null;
            $this->_data->nu_003e = null;
            $this->_data->nu_003f = null;
            $this->_data->nu_003g = null;
            $this->_data->nu_003h = null;
            $this->_data->nu_003i = null;
            $this->_data->nu_003j = null;
            $this->_data->nu_003k = null;
            $this->_data->nu_003l = null;

            $this->_data->nu_004a = null;
            $this->_data->nu_004b = null;
            $this->_data->nu_004c = null;
            $this->_data->nu_004d = null;
            $this->_data->nu_004e = null;
            $this->_data->nu_004f = null;
            $this->_data->nu_004g = null;
            $this->_data->nu_004h = null;
            $this->_data->nu_004i = null;
            $this->_data->nu_004j = null;
            $this->_data->nu_004k = null;
            $this->_data->nu_004l = null;
            $this->_data->nu_004m = null;
            $this->_data->nu_004n = null;
            $this->_data->nu_004o = null;
            $this->_data->nu_004p = null;
            $this->_data->nu_004q = null;
            $this->_data->nu_004r = null;
            $this->_data->nu_004s = null;
            $this->_data->nu_004t = null;
            $this->_data->nu_004u = null;
            $this->_data->nu_004v = null;

            $this->_data->nu_005a = null;
            $this->_data->nu_005b = null;
            $this->_data->nu_005c = null;
            $this->_data->nu_005d = null;
            $this->_data->nu_005e = null;
            $this->_data->nu_005f = null;
            $this->_data->nu_005g = null;
            $this->_data->nu_005h = null;
            $this->_data->nu_005i = null;
            $this->_data->nu_005j = null;
            $this->_data->nu_005k = null;
            $this->_data->nu_005l = null;
            $this->_data->nu_005m = null;
            $this->_data->nu_005n = null;
            $this->_data->nu_005o = null;
            $this->_data->nu_005p = null;
            $this->_data->nu_005q = null;
            $this->_data->nu_005r = null;
            $this->_data->nu_005s = null;
            $this->_data->nu_005t = null;
            $this->_data->nu_005u = null;
            $this->_data->nu_005v = null;

            $this->_data->nu_006a = null;
            $this->_data->nu_006b = null;
            $this->_data->nu_006c = null;
            $this->_data->nu_006d = null;
            $this->_data->nu_006e = null;
            $this->_data->nu_006f = null;
            $this->_data->nu_006g = null;
            $this->_data->nu_006h = null;
            $this->_data->nu_006i = null;
            $this->_data->nu_006j = null;
            $this->_data->nu_006k = null;
            $this->_data->nu_006l = null;

            $this->_data->nu_007a = null;
            $this->_data->nu_007b = null;
            $this->_data->nu_007c = null;
            $this->_data->nu_007d = null;
            $this->_data->nu_007e = null;
            $this->_data->nu_007f = null;
            $this->_data->nu_007g = null;
            $this->_data->nu_007h = null;
            $this->_data->nu_007i = null;
            $this->_data->nu_007j = null;
            $this->_data->nu_007k = null;
            $this->_data->nu_007l = null;
            $this->_data->nu_007m = null;
            $this->_data->nu_007n = null;
            $this->_data->nu_007o = null;
            $this->_data->nu_007p = null;
            $this->_data->nu_007q = null;
            $this->_data->nu_007r = null;
            $this->_data->nu_007s = null;
            $this->_data->nu_007t = null;
            $this->_data->nu_007u = null;
            $this->_data->nu_007v = null;

            $this->_data->nu_008a = null;
            $this->_data->nu_008b = null;
            $this->_data->nu_008c = null;
            $this->_data->nu_008d = null;
            $this->_data->nu_008e = null;
            $this->_data->nu_008f = null;
            $this->_data->nu_008g = null;
            $this->_data->nu_008h = null;

            $this->_data->nu_009a = null;
            $this->_data->nu_009b = null;
            $this->_data->nu_009c = null;
            $this->_data->nu_009d = null;
            $this->_data->nu_009e = null;
            $this->_data->nu_009f = null;
            $this->_data->nu_009g = null;
            $this->_data->nu_009h = null;
            $this->_data->nu_009i = null;
            $this->_data->nu_009j = null;

            $this->_data->nu_010a = null;
            $this->_data->nu_010b = null;
            $this->_data->nu_010c = null;
            $this->_data->nu_010d = null;
            $this->_data->nu_010e = null;
            $this->_data->nu_010f = null;
            $this->_data->nu_010g = null;
            $this->_data->nu_010h = null;
            $this->_data->nu_010i = null;
            $this->_data->nu_010j = null;

            $this->_data->nu_011a = null;
            $this->_data->nu_011b = null;
            $this->_data->nu_011c = null;
            $this->_data->nu_011d = null;
            $this->_data->nu_011e = null;
            $this->_data->nu_011f = null;
            $this->_data->nu_011g = null;
            $this->_data->nu_011h = null;
            $this->_data->nu_011i = null;
            $this->_data->nu_011j = null;
            
            $this->_data->nu_a1_1a = null;
            $this->_data->nu_a1_1b = null;
            $this->_data->nu_a1_1c = null;
            $this->_data->nu_a1_1d = null;
            $this->_data->nu_a1_1e = null;
            $this->_data->nu_a1_1f = null;
            $this->_data->nu_a1_1g = null;
            $this->_data->nu_a1_1h = null;
            $this->_data->nu_a1_1i = null;
            $this->_data->nu_a1_1j = null;
            $this->_data->nu_a1_1k = null;
            $this->_data->nu_a1_1l = null;
            $this->_data->nu_a1_1m = null;
            $this->_data->nu_a1_1n = null;
            $this->_data->nu_a1_1o = null;
            $this->_data->nu_a1_1p = null;
            $this->_data->nu_a1_1q = null;
            $this->_data->nu_a1_1r = null;
            $this->_data->nu_a1_1s = null;
            $this->_data->nu_a1_1t = null;
            $this->_data->nu_a1_1u = null;
            $this->_data->nu_a1_1v = null;
            
            $this->_data->nu_a2_1a = null;
            $this->_data->nu_a2_1b = null;
            $this->_data->nu_a2_1c = null;
            $this->_data->nu_a2_1d = null;
            $this->_data->nu_a2_1e = null;
            $this->_data->nu_a2_1f = null;
            $this->_data->nu_a2_1g = null;
            $this->_data->nu_a2_1h = null;
            $this->_data->nu_a2_1i = null;
            $this->_data->nu_a2_1j = null;
            $this->_data->nu_a2_1k = null;
            $this->_data->nu_a2_1l = null;
            $this->_data->nu_a2_1m = null;
            $this->_data->nu_a2_1n = null;
            $this->_data->nu_a2_1o = null;
            $this->_data->nu_a2_1p = null;
            $this->_data->nu_a2_1q = null;
            $this->_data->nu_a2_1r = null;
            $this->_data->nu_a2_1s = null;
            $this->_data->nu_a2_1t = null;
            $this->_data->nu_a2_1u = null;
            $this->_data->nu_a2_1v = null;
            
            $this->_data->nu_a3_2a = null;
            $this->_data->nu_a3_2b = null;
            $this->_data->nu_a3_2c = null;
            $this->_data->nu_a3_2d = null;
            $this->_data->nu_a3_2e = null;
            $this->_data->nu_a3_2f = null;
            $this->_data->nu_a3_2g = null;
            $this->_data->nu_a3_2h = null;
            $this->_data->nu_a3_2i = null;
            $this->_data->nu_a3_2j = null;
            
            $this->_data->nu_a4_2a = null;
            $this->_data->nu_a4_2b = null;
            $this->_data->nu_a4_2c = null;
            $this->_data->nu_a4_2d = null;
            $this->_data->nu_a4_2e = null;
            $this->_data->nu_a4_2f = null;
            $this->_data->nu_a4_2g = null;
            $this->_data->nu_a4_2h = null;
            $this->_data->nu_a4_2i = null;
            $this->_data->nu_a4_2j = null;
            
            $this->_data->nu_a5_2a = null;
            $this->_data->nu_a5_2b = null;
            $this->_data->nu_a5_2c = null;
            $this->_data->nu_a5_2d = null;
            $this->_data->nu_a5_2e = null;
            $this->_data->nu_a5_2f = null;
            $this->_data->nu_a5_2g = null;
            $this->_data->nu_a5_2h = null;
            $this->_data->nu_a5_2i = null;
            $this->_data->nu_a5_2j = null;
            
            $this->_data->nu_a6_3a = null;
            $this->_data->nu_a6_3b = null;
            $this->_data->nu_a6_3c = null;
            $this->_data->nu_a6_3d = null;
            $this->_data->nu_a6_3e = null;
            $this->_data->nu_a6_3f = null;
            $this->_data->nu_a6_3g = null;
            $this->_data->nu_a6_3h = null;
            $this->_data->nu_a6_3i = null;
            $this->_data->nu_a6_3j = null;
            
            $this->_data->nu_a7_3a = null;
            $this->_data->nu_a7_3b = null;
            $this->_data->nu_a7_3c = null;
            $this->_data->nu_a7_3d = null;
            $this->_data->nu_a7_3e = null;
            $this->_data->nu_a7_3f = null;
            $this->_data->nu_a7_3g = null;
            $this->_data->nu_a7_3h = null;
            $this->_data->nu_a7_3i = null;
            $this->_data->nu_a7_3j = null;
            
            $this->_data->nu_a8_4a = null;
            $this->_data->nu_a8_4b = null;
            $this->_data->nu_a8_4c = null;
            $this->_data->nu_a8_4d = null;
            $this->_data->nu_a8_4e = null;
            $this->_data->nu_a8_4f = null;
            $this->_data->nu_a8_4g = null;
            $this->_data->nu_a8_4h = null;
            $this->_data->nu_a8_4i = null;
            $this->_data->nu_a8_4j = null;
            
            $this->_data->nu_a9_4a = null;
            $this->_data->nu_a9_4b = null;
            $this->_data->nu_a9_4c = null;
            $this->_data->nu_a9_4d = null;
            $this->_data->nu_a9_4e = null;
            $this->_data->nu_a9_4f = null;
            $this->_data->nu_a9_4g = null;
            $this->_data->nu_a9_4h = null;
            $this->_data->nu_a9_4i = null;
            $this->_data->nu_a9_4j = null;
            
            $this->_data->nu_a10_5a = null;
            $this->_data->nu_a10_5b = null;
            $this->_data->nu_a10_5c = null;
            $this->_data->nu_a10_5d = null;
            $this->_data->nu_a10_5e = null;
            $this->_data->nu_a10_5f = null;
            $this->_data->nu_a10_5g = null;
            $this->_data->nu_a10_5h = null;
            $this->_data->nu_a10_5i = null;
            $this->_data->nu_a10_5j = null;
            
            $this->_data->nu_a11_5a = null;
            $this->_data->nu_a11_5b = null;
            $this->_data->nu_a11_5c = null;
            $this->_data->nu_a11_5d = null;
            $this->_data->nu_a11_5e = null;
            $this->_data->nu_a11_5f = null;
            $this->_data->nu_a11_5g = null;
            $this->_data->nu_a11_5h = null;
            $this->_data->nu_a11_5i = null;
            $this->_data->nu_a11_5j = null;
            
            $this->_data->nu_a12_6 = null;
            $this->_data->nu_a12_6a = null;
            $this->_data->nu_a12_6b = null;
            $this->_data->nu_a12_6c = null;
            $this->_data->nu_a12_6d = null;
            $this->_data->nu_a12_6e = null;
            $this->_data->nu_a12_6f = null;
            
            $this->_data->nu_a13_6a = null;
            $this->_data->nu_a13_6b = null;
            $this->_data->nu_a13_6c = null;
            $this->_data->nu_a13_6d = null;
            $this->_data->nu_a13_6e = null;
            $this->_data->nu_a13_6f = null;
            
            $this->_data->nu_a14_6a = null;
            $this->_data->nu_a14_6b = null;
            $this->_data->nu_a14_6c = null;
            $this->_data->nu_a14_6d = null;
            $this->_data->nu_a14_6e = null;
            $this->_data->nu_a14_6f = null;
            
            $this->_data->nu_a15_6a = null;
            $this->_data->nu_a15_6b = null;
            $this->_data->nu_a15_6c = null;
            $this->_data->nu_a15_6d = null;
            $this->_data->nu_a15_6e = null;
            $this->_data->nu_a15_6f = null;
            
            $this->_data->nu_a16_6a = null;
            $this->_data->nu_a16_6b = null;
            $this->_data->nu_a16_6c = null;
            $this->_data->nu_a16_6d = null;
            $this->_data->nu_a16_6e = null;
            $this->_data->nu_a16_6f = null;
            
            $this->_data->nu_a17_6a = null;
            $this->_data->nu_a17_6b = null;
            $this->_data->nu_a17_6c = null;
            $this->_data->nu_a17_6d = null;
            $this->_data->nu_a17_6e = null;
            $this->_data->nu_a17_6f = null;
            
            $this->_data->nu_a18_6a = null;
            $this->_data->nu_a18_6b = null;
            $this->_data->nu_a18_6c = null;
            $this->_data->nu_a18_6d = null;
            $this->_data->nu_a18_6e = null;
            $this->_data->nu_a18_6f = null;
            
            $this->_data->nu_a19_6a = null;
            
            $this->_data->nu_a20_6a = null;
            $this->_data->nu_a20_6b = null;
            
            $this->_data->nu_a21_7a = null;
            $this->_data->nu_a21_7b = null;
            $this->_data->nu_a21_7c = null;
            $this->_data->nu_a21_7d = null;
            $this->_data->nu_a21_7e = null;
            $this->_data->nu_a21_7f = null;
            $this->_data->nu_a21_7g = null;
            $this->_data->nu_a21_7h = null;
            $this->_data->nu_a21_7i = null;
            
            $this->_data->nu_a22_7a = null;
            $this->_data->nu_a22_7b = null;
            $this->_data->nu_a22_7c = null;
            $this->_data->nu_a22_7d = null;
            $this->_data->nu_a22_7e = null;
            $this->_data->nu_a22_7f = null;
            $this->_data->nu_a22_7g = null;
            $this->_data->nu_a22_7h = null;
            $this->_data->nu_a22_7i = null;
            
            $this->_data->nu_a23_7a = null;
            $this->_data->nu_a23_7b = null;
            $this->_data->nu_a23_7c = null;
            $this->_data->nu_a23_7d = null;
            $this->_data->nu_a23_7e = null;
            $this->_data->nu_a23_7f = null;
            $this->_data->nu_a23_7g = null;
            $this->_data->nu_a23_7h = null;
            $this->_data->nu_a23_7i = null;
            
            $this->_data->nu_a24_7a = null;
            $this->_data->nu_a24_7b = null;
            $this->_data->nu_a24_7c = null;
            $this->_data->nu_a24_7d = null;
            $this->_data->nu_a24_7e = null;
            $this->_data->nu_a24_7f = null;
            $this->_data->nu_a24_7g = null;
            $this->_data->nu_a24_7h = null;
            $this->_data->nu_a24_7i = null;
            
            $this->_data->nu_a25_7a = null;
            $this->_data->nu_a25_7b = null;
            $this->_data->nu_a25_7c = null;
            $this->_data->nu_a25_7d = null;
            $this->_data->nu_a25_7e = null;
            $this->_data->nu_a25_7f = null;
            $this->_data->nu_a25_7g = null;
            $this->_data->nu_a25_7h = null;
            $this->_data->nu_a25_7i = null;
            
            $this->_data->nu_a26_9a = null;
            $this->_data->nu_a26_9b = null;
            $this->_data->nu_a26_9c = null;
            $this->_data->nu_a26_9d = null;
            $this->_data->nu_a26_9e = null;
            $this->_data->nu_a26_9f = null;
            
            $this->_data->nu_a27_9a = null;
            $this->_data->nu_a27_9b = null;
            $this->_data->nu_a27_9c = null;
            $this->_data->nu_a27_9d = null;
            $this->_data->nu_a27_9e = null;
            $this->_data->nu_a27_9f = null;
            
            $this->_data->nu_a28_9a = null;
            $this->_data->nu_a28_9b = null;
            $this->_data->nu_a28_9c = null;
            $this->_data->nu_a28_9d = null;
            $this->_data->nu_a28_9e = null;
            $this->_data->nu_a28_9f = null;
            
            $this->_data->nu_a29_9a = null;
            $this->_data->nu_a29_9b = null;
            $this->_data->nu_a29_9c = null;
            $this->_data->nu_a29_9d = null;
            $this->_data->nu_a29_9e = null;
            $this->_data->nu_a29_9f = null;

            $this->_data->nu_012a = null;
            $this->_data->nu_012b = null;
            $this->_data->nu_012c = null;
            $this->_data->nu_012d = null;
            $this->_data->nu_012e = null;
            $this->_data->nu_012f = null;
            $this->_data->nu_012g = null;
            $this->_data->nu_012h = null;
            $this->_data->nu_012i = null;
            $this->_data->nu_012j = null;

            $this->_data->nu_013a = null;
            $this->_data->nu_013b = null;
            $this->_data->nu_013c = null;
            $this->_data->nu_013d = null;
            $this->_data->nu_013e = null;
            $this->_data->nu_013f = null;
            $this->_data->nu_013g = null;
            $this->_data->nu_013h = null;
            $this->_data->nu_013i = null;
            $this->_data->nu_013j = null;

            $this->_data->nu_014a = null;
            $this->_data->nu_014b = null;
            $this->_data->nu_014c = null;
            $this->_data->nu_014d = null;
            $this->_data->nu_014e = null;
            $this->_data->nu_014f = null;
            $this->_data->nu_014g = null;
            $this->_data->nu_014h = null;
            $this->_data->nu_014i = null;
            $this->_data->nu_014j = null;

            $this->_data->nu_015a = null;
            $this->_data->nu_015b = null;
            $this->_data->nu_015c = null;
            $this->_data->nu_015d = null;
            $this->_data->nu_015e = null;
            $this->_data->nu_015f = null;
            $this->_data->nu_015g = null;
            $this->_data->nu_015h = null;
            $this->_data->nu_015i = null;
            $this->_data->nu_015j = null;

            $this->_data->nu_016a = null;
            $this->_data->nu_016b = null;
            $this->_data->nu_016c = null;
            $this->_data->nu_016d = null;
            $this->_data->nu_016e = null;
            $this->_data->nu_016f = null;
            $this->_data->nu_016g = null;
            $this->_data->nu_016h = null;
            $this->_data->nu_016i = null;
            $this->_data->nu_016j = null;

            $this->_data->nu_017a = null;
            $this->_data->nu_017b = null;
            $this->_data->nu_017c = null;
            $this->_data->nu_017d = null;
            $this->_data->nu_017e = null;
            $this->_data->nu_017f = null;
            $this->_data->nu_017g = null;
            $this->_data->nu_017h = null;
            $this->_data->nu_017i = null;
            $this->_data->nu_017j = null;

            $this->_data->nu_018a = null;
            $this->_data->nu_018b = null;
            $this->_data->nu_018c = null;
            $this->_data->nu_018d = null;
            $this->_data->nu_018e = null;
            $this->_data->nu_018f = null;
            $this->_data->nu_018g = null;
            $this->_data->nu_018h = null;
            $this->_data->nu_018i = null;
            $this->_data->nu_018j = null;

            $this->_data->nu_019a = null;
            $this->_data->nu_019b = null;
            $this->_data->nu_019c = null;
            $this->_data->nu_019d = null;
            $this->_data->nu_019e = null;
            $this->_data->nu_019f = null;
            $this->_data->nu_019g = null;
            $this->_data->nu_019h = null;
            $this->_data->nu_019i = null;
            $this->_data->nu_019j = null;

            $this->_data->nu_020a = null;
            $this->_data->nu_020b = null;
            $this->_data->nu_020c = null;
            $this->_data->nu_020d = null;
            $this->_data->nu_020e = null;
            $this->_data->nu_020f = null;
            $this->_data->nu_020g = null;
            $this->_data->nu_020h = null;
            $this->_data->nu_020i = null;
            $this->_data->nu_020j = null;

            $this->_data->nu_021a = null;
            $this->_data->nu_021b = null;
            $this->_data->nu_021c = null;
            $this->_data->nu_021d = null;
            $this->_data->nu_021e = null;
            $this->_data->nu_021f = null;
            $this->_data->nu_021g = null;
            $this->_data->nu_021h = null;
            $this->_data->nu_021i = null;
            $this->_data->nu_021j = null;

            $this->_data->nu_022a = null;
            $this->_data->nu_022b = null;
            $this->_data->nu_022c = null;
            $this->_data->nu_022d = null;
            $this->_data->nu_022e = null;
            $this->_data->nu_022f = null;
            $this->_data->nu_022g = null;
            $this->_data->nu_022h = null;
            $this->_data->nu_022i = null;
            $this->_data->nu_022j = null;

            $this->_data->nu_023a = null;
            $this->_data->nu_023b = null;
            $this->_data->nu_023c = null;
            $this->_data->nu_023d = null;
            $this->_data->nu_023e = null;
            $this->_data->nu_023f = null;
            $this->_data->nu_023g = null;
            $this->_data->nu_023h = null;
            $this->_data->nu_023i = null;
            $this->_data->nu_023j = null;

            $this->_data->nu_024a = null;
            $this->_data->nu_024b = null;
            $this->_data->nu_024c = null;
            $this->_data->nu_024d = null;
            $this->_data->nu_024e = null;
            $this->_data->nu_024f = null;
            $this->_data->nu_024g = null;
            $this->_data->nu_024h = null;
            $this->_data->nu_024i = null;
            $this->_data->nu_024j = null;

            $this->_data->nu_025a = null;
            $this->_data->nu_025b = null;
            $this->_data->nu_025c = null;
            $this->_data->nu_025d = null;
            $this->_data->nu_025e = null;
            $this->_data->nu_025f = null;
            $this->_data->nu_025g = null;
            $this->_data->nu_025h = null;
            $this->_data->nu_025i = null;
            $this->_data->nu_025j = null;

            $this->_data->nu_026a = null;
            $this->_data->nu_026b = null;
            $this->_data->nu_026c = null;
            $this->_data->nu_026d = null;
            $this->_data->nu_026e = null;
            $this->_data->nu_026f = null;
            $this->_data->nu_026g = null;
            $this->_data->nu_026h = null;
            $this->_data->nu_026i = null;
            $this->_data->nu_026j = null;

            $this->_data->nu_027a = null;
            $this->_data->nu_027b = null;
            $this->_data->nu_027c = null;
            $this->_data->nu_027d = null;
            $this->_data->nu_027e = null;
            $this->_data->nu_027f = null;
            $this->_data->nu_027g = null;
            $this->_data->nu_027h = null;
            $this->_data->nu_027i = null;
            $this->_data->nu_027j = null;

            $this->_data->nu_028a = null;
            $this->_data->nu_028b = null;
            $this->_data->nu_028c = null;
            $this->_data->nu_028d = null;
            $this->_data->nu_028e = null;
            $this->_data->nu_028f = null;
            $this->_data->nu_028g = null;
            $this->_data->nu_028h = null;
            $this->_data->nu_028i = null;
            $this->_data->nu_028j = null;

            $this->_data->nu_029a = null;
            $this->_data->nu_029b = null;
            $this->_data->nu_029c = null;
            $this->_data->nu_029d = null;
            $this->_data->nu_029e = null;
            $this->_data->nu_029f = null;
            
            $this->_data->nu_030a = null;
            
            $this->_data->nu_031a = null;
            $this->_data->nu_031b = null;
            $this->_data->nu_031c = null;
            $this->_data->nu_031d = null;
            $this->_data->nu_031e = null;
            $this->_data->nu_031f = null;

            $this->_data->nu_032a = null;
            $this->_data->nu_032b = null;
            $this->_data->nu_032c = null;

            $this->_data->nu_033a = null;
            
            $this->_data->nu_034a = null;

            $this->_data->nu_035a = null;
            $this->_data->nu_035b = null;
            $this->_data->nu_035c = null;
            $this->_data->nu_035d = null;
            $this->_data->nu_035e = null;
            $this->_data->nu_035f = null;
           
            $this->_data->nu_036a = null;
            $this->_data->nu_036b = null;
            $this->_data->nu_036c = null;
            $this->_data->nu_036d = null;
            $this->_data->nu_036e = null;
            $this->_data->nu_036f = null;
            $this->_data->nu_036g = null;
            $this->_data->nu_036h = null;
            $this->_data->nu_036i = null;
            $this->_data->nu_036j = null;

            $this->_data->nu_037a = null;
            $this->_data->nu_037b = null;
            $this->_data->nu_037c = null;

            $this->_data->nu_038a = null;
            $this->_data->nu_038b = null;
            $this->_data->nu_038c = null;

            $this->_data->nu_039a = null;
            $this->_data->nu_039b = null;
            $this->_data->nu_039c = null;

            $this->_data->nu_040a = null;
            $this->_data->nu_040b = null;
            $this->_data->nu_040c = null;
            $this->_data->nu_040d = null;
            $this->_data->nu_040e = null;
            $this->_data->nu_040f = null;
            $this->_data->nu_040g = null;
            $this->_data->nu_040h = null;
            $this->_data->nu_040i = null;

            $this->_data->nu_041a = null;
            $this->_data->nu_041b = null;
            $this->_data->nu_041c = null;
            $this->_data->nu_041d = null;
            $this->_data->nu_041e = null;
            $this->_data->nu_041f = null;
            $this->_data->nu_041g = null;
            $this->_data->nu_041h = null;
            $this->_data->nu_041i = null;

            $this->_data->nu_042a = null;
            $this->_data->nu_042b = null;
            $this->_data->nu_042c = null;
            $this->_data->nu_042d = null;
            $this->_data->nu_042e = null;
            $this->_data->nu_042f = null;
            $this->_data->nu_042g = null;
            $this->_data->nu_042h = null;
            $this->_data->nu_042i = null;

            $this->_data->nu_043a = null;
            $this->_data->nu_043b = null;
            $this->_data->nu_043c = null;
            $this->_data->nu_043d = null;
            $this->_data->nu_043e = null;
            $this->_data->nu_043f = null;
            $this->_data->nu_043g = null;
            $this->_data->nu_043h = null;
            $this->_data->nu_043i = null;

            $this->_data->nu_044a = null;
            $this->_data->nu_044b = null;
            $this->_data->nu_044c = null;
            $this->_data->nu_044d = null;
            $this->_data->nu_044e = null;
            $this->_data->nu_044f = null;
            $this->_data->nu_044g = null;
            $this->_data->nu_044h = null;
            $this->_data->nu_044i = null;

            $this->_data->nu_045a = null;
            $this->_data->nu_045b = null;
            $this->_data->nu_045c = null;
            $this->_data->nu_045d = null;
            $this->_data->nu_045e = null;
            $this->_data->nu_045f = null;
            $this->_data->nu_045g = null;
            $this->_data->nu_045h = null;
            $this->_data->nu_045i = null;

            $this->_data->nu_046a = null;
            $this->_data->nu_046b = null;
            $this->_data->nu_046c = null;
            $this->_data->nu_046d = null;
            $this->_data->nu_046e = null;
            $this->_data->nu_046f = null;
            $this->_data->nu_046g = null;
            $this->_data->nu_046h = null;
            $this->_data->nu_046i = null;
            $this->_data->nu_046j = null;
            $this->_data->nu_046k = null;
            $this->_data->nu_046l = null;
            $this->_data->nu_046m = null;
            $this->_data->nu_046n = null;

            $this->_data->nu_047a = null;
            $this->_data->nu_047b = null;
            $this->_data->nu_047c = null;
            $this->_data->nu_047d = null;
            $this->_data->nu_047e = null;
            $this->_data->nu_047f = null;
            $this->_data->nu_047g = null;
            $this->_data->nu_047h = null;
            $this->_data->nu_047i = null;
            $this->_data->nu_047j = null;
            $this->_data->nu_047k = null;

            $this->_data->nu_048a = null;
            $this->_data->nu_048b = null;
            $this->_data->nu_048c = null;
            $this->_data->nu_048d = null;
            $this->_data->nu_048e = null;
            $this->_data->nu_048f = null;

            $this->_data->nu_049a = null;
            $this->_data->nu_049b = null;
            $this->_data->nu_049c = null;
            $this->_data->nu_049d = null;
            $this->_data->nu_049e = null;
            $this->_data->nu_049f = null;
            $this->_data->nu_049g = null;
            $this->_data->nu_049h = null;
            $this->_data->nu_049i = null;
            $this->_data->nu_049j = null;
            $this->_data->nu_049k = null;
            $this->_data->nu_049l = null;
            $this->_data->nu_049m = null;
            $this->_data->nu_049n = null;

            $this->_data->nu_050a = null;
            $this->_data->nu_050b = null;
            $this->_data->nu_050c = null;
            $this->_data->nu_050d = null;
            $this->_data->nu_050e = null;
            $this->_data->nu_050f = null;
            $this->_data->nu_050g = null;
            $this->_data->nu_050h = null;
            $this->_data->nu_050i = null;
            $this->_data->nu_050j = null;
            $this->_data->nu_050k = null;
            $this->_data->nu_050l = null;
            $this->_data->nu_050m = null;
            $this->_data->nu_050n = null;

            $this->_data->nu_051a = null;
            $this->_data->nu_051b = null;
            $this->_data->nu_051c = null;
            $this->_data->nu_051d = null;
            $this->_data->nu_051e = null;
            $this->_data->nu_051f = null;

            $this->_data->nu_052a = null;
            $this->_data->nu_052b = null;
            $this->_data->nu_052c = null;
            $this->_data->nu_052d = null;
            $this->_data->nu_052e = null;
            $this->_data->nu_052f = null;
            $this->_data->nu_052g = null;
            $this->_data->nu_052h = null;
            $this->_data->nu_052i = null;
            $this->_data->nu_052j = null;
            $this->_data->nu_052k = null;
            $this->_data->nu_052l = null;
            $this->_data->nu_052m = null;
            $this->_data->nu_052n = null;

            $this->_data->nu_053a = null;
            $this->_data->nu_053b = null;
            $this->_data->nu_053c = null;
            $this->_data->nu_053d = null;
            $this->_data->nu_053e = null;
            $this->_data->nu_053f = null;

            $this->_data->nu_054a = null;
            $this->_data->nu_054b = null;
            $this->_data->nu_054c = null;
            $this->_data->nu_054d = null;
            $this->_data->nu_054e = null;
            $this->_data->nu_054f = null;
            $this->_data->nu_054g = null;
            $this->_data->nu_054h = null;
            $this->_data->nu_054i = null;
            $this->_data->nu_054j = null;
            $this->_data->nu_054k = null;
            $this->_data->nu_054l = null;
            $this->_data->nu_054m = null;
            $this->_data->nu_054n = null;

            $this->_data->nu_055a = null;
            $this->_data->nu_055b = null;
            $this->_data->nu_055c = null;
            $this->_data->nu_055d = null;
            $this->_data->nu_055e = null;
            $this->_data->nu_055f = null;
            $this->_data->nu_055g = null;
            $this->_data->nu_055h = null;
            $this->_data->nu_055i = null;
            $this->_data->nu_055j = null;
            $this->_data->nu_055k = null;
            $this->_data->nu_055l = null;
            $this->_data->nu_055m = null;
            $this->_data->nu_055n = null;

            $this->_data->nu_056a = null;
            $this->_data->nu_056b = null;
            $this->_data->nu_056c = null;
            $this->_data->nu_056d = null;
            $this->_data->nu_056e = null;
            $this->_data->nu_056f = null;

            $this->_data->nu_057a = null;
            $this->_data->nu_057b = null;
            $this->_data->nu_057c = null;
            $this->_data->nu_057d = null;
            $this->_data->nu_057e = null;
            $this->_data->nu_057f = null;
            
            $this->_data->nu_058a = null;
            $this->_data->nu_058b = null;
            $this->_data->nu_058c = null;
            $this->_data->nu_058d = null;
            $this->_data->nu_058e = null;
            $this->_data->nu_058f = null;

            $this->_data->nu_059a = null;
            $this->_data->nu_059b = null;
            $this->_data->nu_059c = null;
            $this->_data->nu_059d = null;
            $this->_data->nu_059e = null;
            $this->_data->nu_059f = null;

            $this->_data->nu_060a = null;
            $this->_data->nu_060b = null;
            $this->_data->nu_060c = null;
            $this->_data->nu_060d = null;
            $this->_data->nu_060e = null;
            $this->_data->nu_060f = null;

            $this->_data->nu_061a = null;
            $this->_data->nu_061b = null;
            $this->_data->nu_061c = null;
            $this->_data->nu_061d = null;
            $this->_data->nu_061e = null;
            $this->_data->nu_061f = null;

            $this->_data->nu_062a = null;
            $this->_data->nu_062b = null;
            $this->_data->nu_062c = null;
            $this->_data->nu_062d = null;
            $this->_data->nu_062e = null;
            $this->_data->nu_062f = null;
            $this->_data->nu_062g = null;
            $this->_data->nu_062h = null;
            $this->_data->nu_062i = null;
            $this->_data->nu_062j = null;

            $this->_data->nu_063a = null;
            $this->_data->nu_063b = null;
            $this->_data->nu_063c = null;
            $this->_data->nu_063d = null;
            $this->_data->nu_063e = null;
            $this->_data->nu_063f = null;
            $this->_data->nu_063g = null;
            $this->_data->nu_063h = null;
            $this->_data->nu_063i = null;
            $this->_data->nu_063j = null;

            $this->_data->nu_064a = null;
            $this->_data->nu_064b = null;
            $this->_data->nu_064c = null;
            $this->_data->nu_064d = null;
            $this->_data->nu_064e = null;
            $this->_data->nu_064f = null;
            $this->_data->nu_064g = null;
            $this->_data->nu_064h = null;
            $this->_data->nu_064i = null;
            $this->_data->nu_064j = null;

            $this->_data->nu_065a = null;
            $this->_data->nu_065b = null;
            $this->_data->nu_065c = null;
            $this->_data->nu_065d = null;
            $this->_data->nu_065e = null;
            $this->_data->nu_065f = null;
            $this->_data->nu_065g = null;
            $this->_data->nu_065h = null;
            $this->_data->nu_065i = null;
            $this->_data->nu_065j = null;

            $this->_data->nu_066a = null;
            $this->_data->nu_066b = null;
            $this->_data->nu_066c = null;
            $this->_data->nu_066d = null;
            $this->_data->nu_066e = null;
            $this->_data->nu_066f = null;
            $this->_data->nu_066g = null;
            $this->_data->nu_066h = null;
            $this->_data->nu_066i = null;
            $this->_data->nu_066j = null;

            $this->_data->nu_067a = null;
            $this->_data->nu_067b = null;
            $this->_data->nu_067c = null;
            $this->_data->nu_067d = null;
            $this->_data->nu_067e = null;
            $this->_data->nu_067f = null;
            $this->_data->nu_067g = null;
            $this->_data->nu_067h = null;
            $this->_data->nu_067i = null;
            $this->_data->nu_067j = null;

            $this->_data->nu_068a = null;
            $this->_data->nu_068b = null;
            $this->_data->nu_068c = null;
            $this->_data->nu_068d = null;
            $this->_data->nu_068e = null;
            $this->_data->nu_068f = null;
            $this->_data->nu_068g = null;
            $this->_data->nu_068h = null;
            $this->_data->nu_068i = null;
            $this->_data->nu_068j = null;

            $this->_data->desc_estab = null;
            $this->_data->establec_name = NULL;

            $this->_data->encuestador_name = NULL;
        }
        return $this->_data;
    }

    public function store($data) {
        $row = & $this->getTable('informeits', '');
        // bind it to the table
        if (!$row->bind($data)) {
            JError::raiseError(500, $this->_db->getErrorMsg());
            return false;
        }

        // Make sure the data is valid
        if (!$row->check()) {
            $this->setError($row->getError());
            return false;
        }
        // Store it in the db
        if (!$row->store()) {
            JError::raiseError(500, $this->_db->getErrorMsg());
            return false;
        }
        return $row->id_its;
    }

    public function getDetalleGeneral($idGeneral, $defaultId) {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '$idGeneral' AND id_detalle_general != '$defaultId' ";
        $this->_db->setQuery($query);
        $resultado = $this->_db->loadObjectList();
        return $resultado;
    }

    public function removeInfits($infitsId) {
        $query = "DELETE FROM inf_its WHERE id_its = '$infitsId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

    public function indicadorInforme($eess, $anho, $mes) {
        $query = "SELECT id_its, cod_2000, nu_ano, nu_mes FROM inf_its WHERE cod_2000='$eess' AND nu_ano='$anho' AND nu_mes='$mes'";
        $this->_db->setQuery($query);
//        $resultado = $this->_db->loadObjectList();
//        $nfilas = mysql_num_rows($resultado);
//        $nfilas = mysql_num_rows($resultado);
//        
        $this->_db->query();
        $nfilas = $this->_db->getNumRows();
        //mysql_close($conexion);
        // Los datos introducidos son correctos
        if ($nfilas > 0) {
            echo 'invalid';
        } else {
            echo 'OK';
        }
        die();
//        return $resultado;
    }

}

?>
