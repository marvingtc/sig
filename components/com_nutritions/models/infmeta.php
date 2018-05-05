<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelInfmeta extends JModel {

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
                      FROM inf_meta inf 
                      LEFT JOIN persona AS p ON (inf.nu_dni = p.tx_nro_documento)
                      INNER JOIN entidad r ON (inf.cod_2000 = r.cod_2000) WHERE inf.id_meta=" . $this->_id;
            //echo $query;
            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
            $this->_data = new stdClass();
            $this->_data->id_meta = 0;
            $this->_data->nu_dni = null;
            $this->_data->cod_2000 = null;
            $this->_data->nu_ano = null;
            $this->_data->nu_mes = null;

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

            $this->_data->nu_008a = null;
            $this->_data->nu_008b = null;
            $this->_data->nu_008c = null;
            $this->_data->nu_008d = null;
            $this->_data->nu_008e = null;
            $this->_data->nu_008f = null;
            $this->_data->nu_008g = null;
            $this->_data->nu_008h = null;
            $this->_data->nu_008i = null;
            $this->_data->nu_008j = null;
            $this->_data->nu_008k = null;
            $this->_data->nu_008l = null;

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
            $this->_data->nu_009k = null;
            $this->_data->nu_009l = null;


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
            $this->_data->nu_010k = null;
            $this->_data->nu_010l = null;

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
            $this->_data->nu_011k = null;
            $this->_data->nu_011l = null;

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
            $this->_data->nu_012k = null;
            $this->_data->nu_012l = null;

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
            $this->_data->nu_013k = null;
            $this->_data->nu_013l = null;

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
            $this->_data->nu_014k = null;
            $this->_data->nu_014l = null;

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
            $this->_data->nu_015k = null;
            $this->_data->nu_015l = null;

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
            $this->_data->nu_016k = null;
            $this->_data->nu_016l = null;

            $this->_data->nu_017a = null;
            $this->_data->nu_017b = null;
            $this->_data->nu_017c = null;
            $this->_data->nu_017d = null;
            
            $this->_data->nu_018a = null;
            $this->_data->nu_018b = null;
            $this->_data->nu_018c = null;
            $this->_data->nu_018d = null;
            
            $this->_data->nu_019a = null;
            $this->_data->nu_019b = null;
            $this->_data->nu_019c = null;
            $this->_data->nu_019d = null;
            $this->_data->nu_019e = null;
            $this->_data->nu_019f = null;
            
            $this->_data->nu_020a = null;
            $this->_data->nu_020b = null;
            $this->_data->nu_020c = null;
            $this->_data->nu_020d = null;
            $this->_data->nu_020e = null;
            $this->_data->nu_020f = null;

            $this->_data->nu_021a = null;
            $this->_data->nu_021b = null;
            $this->_data->nu_021c = null;
            $this->_data->nu_021d = null;
            $this->_data->nu_021e = null;
            $this->_data->nu_021f = null;

            $this->_data->nu_022a = null;
            $this->_data->nu_022b = null;
            $this->_data->nu_022c = null;
            $this->_data->nu_022d = null;
            $this->_data->nu_022e = null;
            $this->_data->nu_022f = null;

            $this->_data->nu_023a = null;
            $this->_data->nu_023b = null;
            $this->_data->nu_023c = null;
            $this->_data->nu_023d = null;
            $this->_data->nu_023e = null;
            $this->_data->nu_023f = null;

            $this->_data->nu_024a = null;
            $this->_data->nu_024b = null;
            $this->_data->nu_024c = null;
            $this->_data->nu_024d = null;
            $this->_data->nu_024e = null;
            $this->_data->nu_024f = null;

            $this->_data->nu_025a = null;
            $this->_data->nu_025b = null;
            $this->_data->nu_025c = null;
            $this->_data->nu_025d = null;
            $this->_data->nu_025e = null;
            $this->_data->nu_025f = null;

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
            $this->_data->nu_026k = null;
            $this->_data->nu_026l = null;
            $this->_data->nu_026m = null;
            
            $this->_data->nu_027_1a = null;
            $this->_data->nu_027_1b = null;
            $this->_data->nu_027_1c = null;
            $this->_data->nu_027_1d = null;
            $this->_data->nu_027_1e = null;
            $this->_data->nu_027_1f = null;
            $this->_data->nu_027_1g = null;
            
            $this->_data->nu_027a = null;
            $this->_data->nu_027b = null;
            $this->_data->nu_027c = null;
            $this->_data->nu_027d = null;
            $this->_data->nu_027e = null;
            $this->_data->nu_027f = null;         

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
            $this->_data->nu_028k = null;
            $this->_data->nu_028l = null;

            $this->_data->nu_029a = null;
            $this->_data->nu_029b = null;
            $this->_data->nu_029c = null;
            $this->_data->nu_029d = null;
            $this->_data->nu_029e = null;
            $this->_data->nu_029f = null;
            $this->_data->nu_029g = null;
            $this->_data->nu_029h = null;
            $this->_data->nu_029i = null;
            $this->_data->nu_029j = null;
            $this->_data->nu_029k = null;
            $this->_data->nu_029l = null;

            $this->_data->nu_030a = null;
            $this->_data->nu_030b = null;
            $this->_data->nu_030c = null;
            $this->_data->nu_030d = null;
            $this->_data->nu_030e = null;
            $this->_data->nu_030f = null;
            $this->_data->nu_030g = null;
            $this->_data->nu_030h = null;
            $this->_data->nu_030i = null;
            $this->_data->nu_030j = null;
            $this->_data->nu_030k = null;
            $this->_data->nu_030l = null;
            $this->_data->nu_030m = null;
            $this->_data->nu_030n = null;
            $this->_data->nu_030o = null;
            $this->_data->nu_030p = null;
            
            $this->_data->nu_031a = null;
            $this->_data->nu_031b = null;
            $this->_data->nu_031c = null;
            $this->_data->nu_031d = null;
            $this->_data->nu_031e = null;
            $this->_data->nu_031f = null;
            $this->_data->nu_031g = null;
            $this->_data->nu_031h = null;
            $this->_data->nu_031i = null;
            $this->_data->nu_031j = null;
            $this->_data->nu_031k = null;
            $this->_data->nu_031l = null;

            $this->_data->nu_032a = null;
            $this->_data->nu_032b = null;
            $this->_data->nu_032c = null;
            $this->_data->nu_032d = null;
            $this->_data->nu_032e = null;
            $this->_data->nu_032f = null;
            $this->_data->nu_032g = null;
            $this->_data->nu_032h = null;
            $this->_data->nu_032i = null;
            $this->_data->nu_032j = null;
            $this->_data->nu_032k = null;
            $this->_data->nu_032l = null;

            $this->_data->nu_033a = null;
            $this->_data->nu_033b = null;
            $this->_data->nu_033c = null;
            $this->_data->nu_033d = null;
            $this->_data->nu_033e = null;
            $this->_data->nu_033f = null;
            $this->_data->nu_033g = null;
            $this->_data->nu_033h = null;
            $this->_data->nu_033i = null;
            $this->_data->nu_033j = null;
            $this->_data->nu_033k = null;
            $this->_data->nu_033l = null;

            $this->_data->nu_034a = null;
            $this->_data->nu_034b = null;
            $this->_data->nu_034c = null;
            $this->_data->nu_034d = null;
            $this->_data->nu_034e = null;
            $this->_data->nu_034f = null;
            $this->_data->nu_034g = null;
            $this->_data->nu_034h = null;
            $this->_data->nu_034i = null;
            $this->_data->nu_034j = null;
            $this->_data->nu_034k = null;
            $this->_data->nu_034l = null;

            $this->_data->nu_035a = null;
            $this->_data->nu_035b = null;
            $this->_data->nu_035c = null;
            $this->_data->nu_035d = null;
            $this->_data->nu_035e = null;
            $this->_data->nu_035f = null;
            $this->_data->nu_035g = null;
            $this->_data->nu_035h = null;
            $this->_data->nu_035i = null;
            $this->_data->nu_035j = null;
            $this->_data->nu_035k = null;
            $this->_data->nu_035l = null;

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
            $this->_data->nu_036k = null;
            $this->_data->nu_036l = null;

            $this->_data->nu_037a = null;
            $this->_data->nu_037b = null;
            $this->_data->nu_037c = null;
            $this->_data->nu_037d = null;
            $this->_data->nu_037e = null;
            $this->_data->nu_037f = null;
            $this->_data->nu_037g = null;
            $this->_data->nu_037h = null;
            $this->_data->nu_037i = null;
            $this->_data->nu_037j = null;
            $this->_data->nu_037k = null;
            $this->_data->nu_037l = null;

            $this->_data->nu_038a = null;
            $this->_data->nu_038b = null;
            $this->_data->nu_038c = null;
            $this->_data->nu_038d = null;
            $this->_data->nu_038e = null;
            $this->_data->nu_038f = null;
            $this->_data->nu_038g = null;
            $this->_data->nu_038h = null;
            $this->_data->nu_038i = null;
            $this->_data->nu_038j = null;
            $this->_data->nu_038k = null;
            $this->_data->nu_038l = null;

            $this->_data->nu_039a = null;
            $this->_data->nu_039b = null;
            $this->_data->nu_039c = null;
            $this->_data->nu_039d = null;
            $this->_data->nu_039e = null;
            $this->_data->nu_039f = null;
            $this->_data->nu_039g = null;
            $this->_data->nu_039h = null;
            $this->_data->nu_039i = null;
            $this->_data->nu_039j = null;
            $this->_data->nu_039k = null;
            $this->_data->nu_039l = null;

            $this->_data->nu_040a = null;
            $this->_data->nu_040b = null;
            $this->_data->nu_040c = null;
            $this->_data->nu_040d = null;
            $this->_data->nu_040e = null;
            $this->_data->nu_040f = null;
            $this->_data->nu_040g = null;
            $this->_data->nu_040h = null;
            $this->_data->nu_040i = null;
            $this->_data->nu_040j = null;
            $this->_data->nu_040k = null;
            $this->_data->nu_040l = null;

            $this->_data->nu_041a = null;
            $this->_data->nu_041b = null;
            $this->_data->nu_041c = null;
            $this->_data->nu_041d = null;
            $this->_data->nu_041e = null;
            $this->_data->nu_041f = null;
            $this->_data->nu_041g = null;
            $this->_data->nu_041h = null;
            $this->_data->nu_041i = null;
            $this->_data->nu_041j = null;
            $this->_data->nu_041k = null;
            $this->_data->nu_041l = null;

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
            $this->_data->nu_043j = null;
            $this->_data->nu_043k = null;
            $this->_data->nu_043l = null;
            $this->_data->nu_043m = null;

            $this->_data->nu_044a = null;
            $this->_data->nu_044b = null;
            $this->_data->nu_044c = null;
            $this->_data->nu_044d = null;
            $this->_data->nu_044e = null;
            $this->_data->nu_044f = null;
            $this->_data->nu_044g = null;
            $this->_data->nu_044h = null;
            $this->_data->nu_044i = null;
            $this->_data->nu_044j = null;
            $this->_data->nu_044k = null;
            $this->_data->nu_044l = null;

            $this->_data->nu_045a = null;
            $this->_data->nu_045b = null;
            $this->_data->nu_045c = null;
            $this->_data->nu_045d = null;
            $this->_data->nu_045e = null;
            $this->_data->nu_045f = null;
            $this->_data->nu_045g = null;
            $this->_data->nu_045h = null;
            $this->_data->nu_045i = null;
            $this->_data->nu_045j = null;
            $this->_data->nu_045k = null;
            $this->_data->nu_045l = null;
            $this->_data->nu_045m = null;

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

            $this->_data->nu_047a = null;
            $this->_data->nu_047b = null;
            $this->_data->nu_047c = null;
            $this->_data->nu_047d = null;
            $this->_data->nu_047e = null;
            $this->_data->nu_047f = null;
            $this->_data->nu_047g = null;
            $this->_data->nu_047h = null;

            $this->_data->nu_048a = null;
            $this->_data->nu_048b = null;
            $this->_data->nu_048c = null;
            $this->_data->nu_048d = null;
            $this->_data->nu_048e = null;
            $this->_data->nu_048f = null;
            $this->_data->nu_048g = null;
            $this->_data->nu_048h = null;
            $this->_data->nu_048i = null;
            $this->_data->nu_048j = null;
            $this->_data->nu_048k = null;
            $this->_data->nu_048l = null;
            $this->_data->nu_048m = null;

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
            $this->_data->nu_050o = null;
            $this->_data->nu_050p = null;
            $this->_data->nu_050q = null;
            $this->_data->nu_050r = null;

            $this->_data->nu_051a = null;
            $this->_data->nu_051b = null;
            $this->_data->nu_051c = null;
            $this->_data->nu_051d = null;
            $this->_data->nu_051e = null;
            $this->_data->nu_051f = null;
            $this->_data->nu_051g = null;
            $this->_data->nu_051h = null;
            $this->_data->nu_051i = null;
            $this->_data->nu_051j = null;
            $this->_data->nu_051k = null;
            $this->_data->nu_051l = null;

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
            $this->_data->nu_052o = null;

            $this->_data->nu_053a = null;
            $this->_data->nu_053b = null;
            $this->_data->nu_053c = null;
            $this->_data->nu_053d = null;
            $this->_data->nu_053e = null;
            $this->_data->nu_053f = null;
            $this->_data->nu_053g = null;
            $this->_data->nu_053h = null;
            $this->_data->nu_053i = null;
            $this->_data->nu_053j = null;
            $this->_data->nu_053k = null;
            $this->_data->nu_053l = null;

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

            $this->_data->nu_056a = null;
            $this->_data->nu_056b = null;
            $this->_data->nu_056c = null;
            $this->_data->nu_056d = null;
            $this->_data->nu_056e = null;
            $this->_data->nu_056f = null;
            $this->_data->nu_056g = null;
            $this->_data->nu_056h = null;
            $this->_data->nu_056i = null;
            $this->_data->nu_056j = null;
            $this->_data->nu_056k = null;
            $this->_data->nu_056l = null;

            $this->_data->nu_057a = null;
            $this->_data->nu_057b = null;
            $this->_data->nu_057c = null;
            $this->_data->nu_057d = null;
            $this->_data->nu_057e = null;
            $this->_data->nu_057f = null;
            $this->_data->nu_057g = null;
            $this->_data->nu_057h = null;
            $this->_data->nu_057i = null;
            $this->_data->nu_057j = null;
            $this->_data->nu_057k = null;
            $this->_data->nu_057l = null;

            $this->_data->nu_058a = null;
            $this->_data->nu_058b = null;
            $this->_data->nu_058c = null;
            $this->_data->nu_058d = null;
            $this->_data->nu_058e = null;
            $this->_data->nu_058f = null;
            $this->_data->nu_058g = null;
            $this->_data->nu_058h = null;
            $this->_data->nu_058i = null;
            $this->_data->nu_058j = null;
            $this->_data->nu_058k = null;
            $this->_data->nu_058l = null;

            $this->_data->nu_059a = null;
            $this->_data->nu_059b = null;
            $this->_data->nu_059c = null;
            $this->_data->nu_059d = null;
            $this->_data->nu_059e = null;
            $this->_data->nu_059f = null;
            $this->_data->nu_059g = null;
            $this->_data->nu_059h = null;
            $this->_data->nu_059i = null;
            $this->_data->nu_059j = null;
            $this->_data->nu_059k = null;
            $this->_data->nu_059l = null;
            $this->_data->nu_059m = null;
            $this->_data->nu_059n = null;
            $this->_data->nu_059o = null;
            $this->_data->nu_059p = null;

            $this->_data->nu_060a = null;
            $this->_data->nu_060b = null;
            $this->_data->nu_060c = null;
            $this->_data->nu_060d = null;
            $this->_data->nu_060e = null;
            $this->_data->nu_060f = null;
            $this->_data->nu_060g = null;
            $this->_data->nu_060h = null;
            $this->_data->nu_060i = null;
            $this->_data->nu_060j = null;
            $this->_data->nu_060k = null;
            $this->_data->nu_060l = null;

            $this->_data->nu_061a = null;
            $this->_data->nu_061b = null;
            $this->_data->nu_061c = null;
            $this->_data->nu_061d = null;
            $this->_data->nu_061e = null;
            $this->_data->nu_061f = null;
            $this->_data->nu_061g = null;
            $this->_data->nu_061h = null;
            $this->_data->nu_061i = null;
            $this->_data->nu_061j = null;
            $this->_data->nu_061k = null;
            $this->_data->nu_061l = null;

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
            $this->_data->nu_062k = null;
            $this->_data->nu_062l = null;

            $this->_data->nu_063_1a = null;
            $this->_data->nu_063_1b = null;
            $this->_data->nu_063_1c = null;
            $this->_data->nu_063_1d = null;
            $this->_data->nu_063_1e = null;
            $this->_data->nu_063_1f = null;
            
            $this->_data->nu_063_2a = null;
            $this->_data->nu_063_2b = null;
            $this->_data->nu_063_2c = null;
            $this->_data->nu_063_2d = null;
            $this->_data->nu_063_2e = null;
            $this->_data->nu_063_2f = null;
                
            $this->_data->nu_063_3a = null;
            $this->_data->nu_063_3b = null;
            $this->_data->nu_063_3c = null;
            $this->_data->nu_063_3d = null;
            $this->_data->nu_063_3e = null;
            $this->_data->nu_063_3f = null;

            
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
            $this->_data->nu_064k = null;
            $this->_data->nu_064l = null;

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
            $this->_data->nu_065k = null;
            $this->_data->nu_065l = null;

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
            $this->_data->nu_066k = null;
            $this->_data->nu_066l = null;
            $this->_data->nu_066m = null;

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
            $this->_data->nu_067k = null;
            $this->_data->nu_067l = null;
            $this->_data->nu_067m = null;
            $this->_data->nu_067n = null;
            $this->_data->nu_067o = null;
            $this->_data->nu_067p = null;
            
            $this->_data->nu_068a = null;
            $this->_data->nu_068b = null;
            $this->_data->nu_068c = null;
            $this->_data->nu_068d = null;
            $this->_data->nu_068e = null;
            $this->_data->nu_068f = null;
            $this->_data->nu_068g = null;
            
            $this->_data->nu_069a = null;
            $this->_data->nu_069b = null;
            $this->_data->nu_069c = null;
            $this->_data->nu_069d = null;
            $this->_data->nu_069e = null;
            $this->_data->nu_069f = null;
            
            $this->_data->nu_070a = null;
            $this->_data->nu_070b = null;
            $this->_data->nu_070c = null;
            $this->_data->nu_070d = null;
            $this->_data->nu_070e = null;
            $this->_data->nu_070f = null;
            $this->_data->nu_070g = null;
            $this->_data->nu_070h = null;
            $this->_data->nu_070i = null;
            $this->_data->nu_070j = null;
            $this->_data->nu_070k = null;
            $this->_data->nu_070l = null;
            
            $this->_data->nu_071a = null;
            $this->_data->nu_071b = null;
            $this->_data->nu_071c = null;
            $this->_data->nu_071d = null;
            $this->_data->nu_071e = null;
            $this->_data->nu_071f = null;
            $this->_data->nu_071g = null;
            
            $this->_data->nu_072a = null;
            $this->_data->nu_072b = null;
            $this->_data->nu_072c = null;
            $this->_data->nu_072d = null;
            $this->_data->nu_072e = null;
            $this->_data->nu_072f = null;
            
            $this->_data->nu_073a = null;
            $this->_data->nu_073b = null;
            $this->_data->nu_073c = null;
            $this->_data->nu_073d = null;
            $this->_data->nu_073e = null;
            $this->_data->nu_073f = null;
            $this->_data->nu_073g = null;
            $this->_data->nu_073h = null;
            $this->_data->nu_073i = null;
            $this->_data->nu_073j = null;
            $this->_data->nu_073k = null;
            
            $this->_data->nu_074a = null;
            $this->_data->nu_074b = null;
            $this->_data->nu_074c = null;
            $this->_data->nu_074d = null;
            $this->_data->nu_074e = null;
            $this->_data->nu_074f = null;
            $this->_data->nu_074g = null;
            
            $this->_data->nu_075a = null;
            $this->_data->nu_075b = null;
            $this->_data->nu_075c = null;
            $this->_data->nu_075d = null;
            $this->_data->nu_075e = null;
            $this->_data->nu_075f = null;
            
            $this->_data->nu_076a = null;
            $this->_data->nu_076b = null;
            
            $this->_data->nu_077a = null;
            $this->_data->nu_077b = null;
            $this->_data->nu_077c = null;
            $this->_data->nu_077d = null;
            $this->_data->nu_077e = null;
            $this->_data->nu_077f = null;
            $this->_data->nu_077g = null;
            
            
            $this->_data->nu_078a = null;
            $this->_data->nu_078b = null;
            $this->_data->nu_078c = null;
            $this->_data->nu_078d = null;
            $this->_data->nu_078e = null;
            $this->_data->nu_078f = null;
            
            
            $this->_data->nu_079a = null;
            $this->_data->nu_079b = null;
            
            $this->_data->nu_080a = null;
            $this->_data->nu_080b = null;
            $this->_data->nu_080c = null;
            $this->_data->nu_080d = null;
            $this->_data->nu_080e = null;
            $this->_data->nu_080f = null;
            $this->_data->nu_080g = null;
            
            $this->_data->nu_081a = null;
            $this->_data->nu_081b = null;
            $this->_data->nu_081c = null;
            $this->_data->nu_081d = null;
            $this->_data->nu_081e = null;
            $this->_data->nu_081f = null;
            
            $this->_data->nu_082a = null;
            $this->_data->nu_082b = null;
            $this->_data->nu_082c = null;
            $this->_data->nu_082d = null;
            $this->_data->nu_082e = null;
            $this->_data->nu_082f = null;
            $this->_data->nu_082g = null;
            $this->_data->nu_082h = null;
            $this->_data->nu_082i = null;
            $this->_data->nu_082j = null;
            
            $this->_data->nu_083a = null;
            $this->_data->nu_083b = null;
            $this->_data->nu_083c = null;
            $this->_data->nu_083d = null;
            $this->_data->nu_083e = null;
            $this->_data->nu_083f = null;
            
            $this->_data->nu_084a = null;
            $this->_data->nu_084b = null;
            $this->_data->nu_084c = null;
            $this->_data->nu_084d = null;
            $this->_data->nu_084e = null;
            $this->_data->nu_084f = null;
            
            $this->_data->nu_085a = null;
            $this->_data->nu_085b = null;
            $this->_data->nu_085c = null;
            $this->_data->nu_085d = null;
            $this->_data->nu_085e = null;
            $this->_data->nu_085f = null;
            
            $this->_data->nu_086a = null;
            $this->_data->nu_086b = null;
            $this->_data->nu_086c = null;
            $this->_data->nu_086d = null;
            $this->_data->nu_086e = null;
            $this->_data->nu_086f = null;
            
            $this->_data->nu_087a = null;
            $this->_data->nu_087b = null;
            $this->_data->nu_087c = null;
            $this->_data->nu_087d = null;
            $this->_data->nu_087e = null;
            $this->_data->nu_087f = null;
            
            $this->_data->nu_088a = null;
            $this->_data->nu_088b = null;
            $this->_data->nu_088c = null;
            $this->_data->nu_088d = null;
            $this->_data->nu_088e = null;
            $this->_data->nu_088f = null;
            
            $this->_data->nu_089a = null;
            $this->_data->nu_089b = null;
            $this->_data->nu_089c = null;
            $this->_data->nu_089d = null;
            $this->_data->nu_089e = null;
            $this->_data->nu_089f = null;
            
            $this->_data->nu_090a = null;
            $this->_data->nu_090b = null;
            $this->_data->nu_090c = null;
            $this->_data->nu_090d = null;
            $this->_data->nu_090e = null;
            $this->_data->nu_090f = null;
            
            $this->_data->nu_091a = null;
            $this->_data->nu_091b = null;
            $this->_data->nu_091c = null;
            $this->_data->nu_091d = null;
            $this->_data->nu_091e = null;
            $this->_data->nu_091f = null;
            
            $this->_data->nu_092a = null;
            $this->_data->nu_092b = null;
            $this->_data->nu_092c = null;
            $this->_data->nu_092d = null;
            $this->_data->nu_092e = null;
            $this->_data->nu_092f = null;
            
            $this->_data->nu_093a = null;
            $this->_data->nu_093b = null;
            $this->_data->nu_093c = null;
            $this->_data->nu_093d = null;
            $this->_data->nu_093e = null;
            $this->_data->nu_093f = null;
            
            $this->_data->nu_094a = null;
            $this->_data->nu_094b = null;
            $this->_data->nu_094c = null;
            $this->_data->nu_094d = null;
            $this->_data->nu_094e = null;
            $this->_data->nu_094f = null;
            
            $this->_data->nu_095a = null;
            $this->_data->nu_095b = null;
            $this->_data->nu_095c = null;
            $this->_data->nu_095d = null;
            $this->_data->nu_095e = null;
            $this->_data->nu_095f = null;
            
            $this->_data->nu_096a = null;
            $this->_data->nu_096b = null;
            $this->_data->nu_096c = null;
            $this->_data->nu_096d = null;
            $this->_data->nu_096e = null;
            $this->_data->nu_096f = null;
                        
            $this->_data->desc_estab = null;
            $this->_data->establec_name = NULL;

            $this->_data->encuestador_name = NULL;            
            
            $this->_data->nu_010_1a = null;
            $this->_data->nu_010_1b = null;
            
            $this->_data->nu_064_1a = null;
            $this->_data->nu_064_1b = null;
            $this->_data->nu_064_1c = null;
            $this->_data->nu_064_1d = null;
            $this->_data->nu_064_1e = null;
            $this->_data->nu_064_1f = null;
            $this->_data->nu_064_1g = null;
            $this->_data->nu_064_1h = null;
            
            $this->_data->nu_048_1a = null;
            $this->_data->nu_048_1b = null;
            $this->_data->nu_048_1c = null;
            $this->_data->nu_048_1d = null;
            $this->_data->nu_048_1e = null;
            $this->_data->nu_048_1f = null;
            $this->_data->nu_048_1g = null;
            
            $this->_data->nu_049_1a = null;
            $this->_data->nu_049_1b = null;
            $this->_data->nu_049_1c = null;
            $this->_data->nu_049_1d = null;
            $this->_data->nu_049_1e = null;
            $this->_data->nu_049_1f = null;
            
            //Dengue
            $this->_data->nu_100 = null;
            $this->_data->nu_100a = null;
            $this->_data->nu_100b = null;
            $this->_data->nu_100c = null;
            $this->_data->nu_100d = null;
            $this->_data->nu_100e = null;
            $this->_data->nu_100f = null;
            
            $this->_data->nu_101a = null;
            $this->_data->nu_101b = null;
            $this->_data->nu_101c = null;
            $this->_data->nu_101d = null;
            $this->_data->nu_101e = null;
            $this->_data->nu_101f = null;

            $this->_data->nu_102a = null;
            $this->_data->nu_102b = null;
            $this->_data->nu_102c = null;
            $this->_data->nu_102d = null;
            $this->_data->nu_102e = null;
            $this->_data->nu_102f = null;

            $this->_data->nu_103a = null;
            $this->_data->nu_103b = null;
            $this->_data->nu_103c = null;
            $this->_data->nu_103d = null;
            $this->_data->nu_103e = null;
            $this->_data->nu_103f = null;

            $this->_data->nu_104a = null;
            $this->_data->nu_104b = null;
            $this->_data->nu_104c = null;
            $this->_data->nu_104d = null;
            $this->_data->nu_104e = null;
            $this->_data->nu_104f = null;

            $this->_data->nu_105a = null;
            $this->_data->nu_105b = null;
            $this->_data->nu_105c = null;
            $this->_data->nu_105d = null;
            $this->_data->nu_105e = null;
            $this->_data->nu_105f = null;

            $this->_data->nu_106a = null;
            $this->_data->nu_106b = null;
            $this->_data->nu_106c = null;
            $this->_data->nu_106d = null;
            $this->_data->nu_106e = null;
            $this->_data->nu_106f = null;

            $this->_data->nu_107a = null;
            $this->_data->nu_107b = null;
            $this->_data->nu_107c = null;
            $this->_data->nu_107d = null;
            $this->_data->nu_107e = null;
            $this->_data->nu_107f = null;

            $this->_data->nu_108a = null;
            $this->_data->nu_108b = null;
            $this->_data->nu_108c = null;
            $this->_data->nu_108d = null;
            $this->_data->nu_108e = null;
            $this->_data->nu_108f = null;

            $this->_data->nu_109a = null;
            $this->_data->nu_109b = null;
            $this->_data->nu_109c = null;
            $this->_data->nu_109d = null;
            $this->_data->nu_109e = null;
            $this->_data->nu_109f = null;

            $this->_data->nu_110a = null;
            $this->_data->nu_110b = null;
            $this->_data->nu_110c = null;
            $this->_data->nu_110d = null;
            $this->_data->nu_110e = null;
            $this->_data->nu_110f = null;

            $this->_data->nu_111a = null;
            $this->_data->nu_111b = null;
            $this->_data->nu_111c = null;
            $this->_data->nu_111d = null;
            $this->_data->nu_111e = null;
            $this->_data->nu_111f = null;

            $this->_data->nu_112a = null;
            $this->_data->nu_112b = null;
            $this->_data->nu_112c = null;
            $this->_data->nu_112d = null;
            $this->_data->nu_112e = null;
            $this->_data->nu_112f = null;

            $this->_data->nu_113a = null;
            $this->_data->nu_113b = null;
            $this->_data->nu_113c = null;
            $this->_data->nu_113d = null;
            $this->_data->nu_113e = null;
            $this->_data->nu_113f = null;

            $this->_data->nu_114a = null;
            $this->_data->nu_114b = null;
            $this->_data->nu_114c = null;
            $this->_data->nu_114d = null;
            $this->_data->nu_114e = null;
            $this->_data->nu_114f = null;

            $this->_data->nu_115a = null;
            $this->_data->nu_115b = null;
            $this->_data->nu_115c = null;
            $this->_data->nu_115d = null;
            $this->_data->nu_115e = null;
            $this->_data->nu_115f = null;

            $this->_data->nu_116a = null;
            $this->_data->nu_116b = null;
            $this->_data->nu_116c = null;
            $this->_data->nu_116d = null;
            $this->_data->nu_116e = null;
            $this->_data->nu_116f = null;

            $this->_data->nu_117a = null;
            $this->_data->nu_117b = null;
            $this->_data->nu_117c = null;
            $this->_data->nu_117d = null;
            $this->_data->nu_117e = null;
            $this->_data->nu_117f = null;
            
            $this->_data->nu_118a = null;
            $this->_data->nu_118b = null;
            $this->_data->nu_118c = null;
            $this->_data->nu_118d = null;
            $this->_data->nu_118e = null;
            $this->_data->nu_118f = null;
            
            $this->_data->nu_119a = null;
            $this->_data->nu_119b = null;
            $this->_data->nu_119c = null;
            $this->_data->nu_119d = null;
            $this->_data->nu_119e = null;
            $this->_data->nu_119f = null;
            
            $this->_data->nu_120a = null;
            $this->_data->nu_120b = null;
            $this->_data->nu_120c = null;
            $this->_data->nu_120d = null;
            $this->_data->nu_120e = null;
            $this->_data->nu_120f = null;

            $this->_data->nu_121a = null;
            $this->_data->nu_121b = null;
            $this->_data->nu_121c = null;
            $this->_data->nu_121d = null;
            $this->_data->nu_121e = null;
            $this->_data->nu_121f = null;

            $this->_data->nu_122a = null;
            $this->_data->nu_122b = null;
            $this->_data->nu_122c = null;
            $this->_data->nu_122d = null;
            $this->_data->nu_122e = null;
            $this->_data->nu_122f = null;
            $this->_data->nu_122g = null;
            $this->_data->nu_122h = null;
            $this->_data->nu_122i = null;
            $this->_data->nu_122j = null;
            $this->_data->nu_122k = null;
            $this->_data->nu_122l = null;
            $this->_data->nu_122m = null;
            $this->_data->nu_122n = null;
            $this->_data->nu_122o = null;
            
            $this->_data->nu_123 = null;
            $this->_data->nu_123 = null;
$this->_data->nu_123a = null;
            $this->_data->nu_123b = null;
            $this->_data->nu_123c = null;
            $this->_data->nu_123d = null;
            $this->_data->nu_123e = null;
            $this->_data->nu_123f = null;
            $this->_data->nu_123g = null;

            $this->_data->nu_124a = null;
            $this->_data->nu_124b = null;
            $this->_data->nu_124c = null;
            $this->_data->nu_124d = null;
            $this->_data->nu_124e = null;
            $this->_data->nu_124f = null;

            $this->_data->nu_125a = null;
            $this->_data->nu_125b = null;
            $this->_data->nu_125c = null;
            $this->_data->nu_125d = null;
            $this->_data->nu_125e = null;
            $this->_data->nu_125f = null;

            $this->_data->nu_126a = null;
            $this->_data->nu_126b = null;
            $this->_data->nu_126c = null;
            $this->_data->nu_126d = null;
            $this->_data->nu_126e = null;
            
            $this->_data->nu_127a = null;
            $this->_data->nu_127b = null;
            $this->_data->nu_127c = null;
            $this->_data->nu_127d = null;
            $this->_data->nu_127e = null;
            $this->_data->nu_127f = null;         
            $this->_data->nu_127g = null;

            $this->_data->nu_128a = null;
            $this->_data->nu_128b = null;
            $this->_data->nu_128c = null;
            $this->_data->nu_128d = null;
            $this->_data->nu_128e = null;
            $this->_data->nu_128f = null;

            $this->_data->nu_129a = null;
            $this->_data->nu_129b = null;
            $this->_data->nu_129c = null;
            $this->_data->nu_129d = null;
            $this->_data->nu_129e = null;
            $this->_data->nu_129f = null;
            $this->_data->nu_129g = null;
            $this->_data->nu_129h = null;
            
            $this->_data->nu_082_1a = null;
            
            $this->_data->nu_043 = null;

            
            // fin dengue
            
            $this->_data->tx_especi_prod = NULL;           
            $this->_data->tx_obs_malaria = NULL;           
            $this->_data->tx_obs_barto = NULL;   
            $this->_data->tx_obs_leshma = NULL;       
            $this->_data->tx_obs_dengue = NULL;
            $this->_data->tx_obs_otros = NULL;
        }
        
        return $this->_data;
    }

    public function store($data) {
        $row = & $this->getTable('informemeta', '');
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
        return $row->id_meta;
    }

    public function getDetalleGeneral($idGeneral, $defaultId) {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '$idGeneral' AND id_detalle_general != '$defaultId' ";
        $this->_db->setQuery($query);
        $resultado = $this->_db->loadObjectList();
        return $resultado;
    }

    public function removeInfmeta($infmetaId) {
        $query = "DELETE FROM inf_meta WHERE id_meta = '$infmetaId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

    public function indicadorInforme($eess, $anho, $mes) {
        $query = "SELECT id_meta, cod_2000, nu_ano, nu_mes FROM inf_meta WHERE cod_2000='$eess' AND nu_ano='$anho' AND nu_mes='$mes'";
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
