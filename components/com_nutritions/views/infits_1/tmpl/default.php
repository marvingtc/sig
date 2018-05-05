<?php defined('_JEXEC') or die('Restricted access'); ?>

<style type="text/css">
    .input-wrapper {
        padding: .2em;
        border: 1px #333 solid;
    }
    .input-wrapper input, .input-wrapper textarea {
        width: 100%;
        margin: 0;
        padding: 0;
        font: inherit;
        color: inherit;
        border: 0;
        background-color: transparent;
    }
</style>
<form id="frmInfits" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="frmInfits" 
      oninput="
      pob_F.value = parseInt(nu_poba.value) + parseInt(nu_pobc.value) + parseInt(nu_pobe.value) + parseInt(nu_pobg.value) + parseInt(nu_pobi.value) 
      pob_M.value = parseInt(nu_pobb.value) + parseInt(nu_pobd.value) + parseInt(nu_pobf.value) + parseInt(nu_pobh.value) + parseInt(nu_pobj.value)
      
      FD_1_1.value = parseInt(nu_001a.value) + parseInt(nu_001c.value) + parseInt(nu_001e.value) + parseInt(nu_001g.value) + parseInt(nu_001i.value) 
      FT_1_1.value = parseInt(nu_001b.value) + parseInt(nu_001d.value) + parseInt(nu_001f.value) + parseInt(nu_001h.value) + parseInt(nu_001j.value)
      MD_1_1.value = parseInt(nu_001k.value) + parseInt(nu_001m.value) + parseInt(nu_001o.value) + parseInt(nu_001q.value) + parseInt(nu_001s.value) 
      MT_1_1.value = parseInt(nu_001l.value) + parseInt(nu_001n.value) + parseInt(nu_001p.value) + parseInt(nu_001r.value) + parseInt(nu_001t.value)
      
      MD_1_2.value = parseInt(nu_002a.value) + parseInt(nu_002c.value) + parseInt(nu_002e.value) + parseInt(nu_002g.value) + parseInt(nu_002i.value) 
      MT_1_2.value = parseInt(nu_002b.value) + parseInt(nu_002d.value) + parseInt(nu_002f.value) + parseInt(nu_002h.value) + parseInt(nu_002j.value)
      
      FD_1_3.value = parseInt(nu_003a.value) + parseInt(nu_003c.value) + parseInt(nu_003e.value) + parseInt(nu_003g.value) + parseInt(nu_003i.value) 
      FT_1_3.value = parseInt(nu_003b.value) + parseInt(nu_003d.value) + parseInt(nu_003f.value) + parseInt(nu_003h.value) + parseInt(nu_003j.value)
      
      FD_1_4.value = parseInt(nu_004a.value) + parseInt(nu_004c.value) + parseInt(nu_004e.value) + parseInt(nu_004g.value) + parseInt(nu_004i.value) 
      FT_1_4.value = parseInt(nu_004b.value) + parseInt(nu_004d.value) + parseInt(nu_004f.value) + parseInt(nu_004h.value) + parseInt(nu_004j.value)
      MD_1_4.value = parseInt(nu_004k.value) + parseInt(nu_004m.value) + parseInt(nu_004o.value) + parseInt(nu_004q.value) + parseInt(nu_004s.value) 
      MT_1_4.value = parseInt(nu_004l.value) + parseInt(nu_004n.value) + parseInt(nu_004p.value) + parseInt(nu_004r.value) + parseInt(nu_004t.value)
      
      FD_1_5.value = parseInt(nu_005a.value) + parseInt(nu_005c.value) + parseInt(nu_005e.value) + parseInt(nu_005g.value) + parseInt(nu_005i.value) 
      FT_1_5.value = parseInt(nu_005b.value) + parseInt(nu_005d.value) + parseInt(nu_005f.value) + parseInt(nu_005h.value) + parseInt(nu_005j.value)
      MD_1_5.value = parseInt(nu_005k.value) + parseInt(nu_005m.value) + parseInt(nu_005o.value) + parseInt(nu_005q.value) + parseInt(nu_005s.value) 
      MT_1_5.value = parseInt(nu_005l.value) + parseInt(nu_005n.value) + parseInt(nu_005p.value) + parseInt(nu_005r.value) + parseInt(nu_005t.value)
      
      FD_1_6.value = parseInt(nu_006a.value) + parseInt(nu_006c.value) + parseInt(nu_006e.value) + parseInt(nu_006g.value) + parseInt(nu_006i.value) 
      FT_1_6.value = parseInt(nu_006b.value) + parseInt(nu_006d.value) + parseInt(nu_006f.value) + parseInt(nu_006h.value) + parseInt(nu_006j.value)
      
      FD_1_7.value = parseInt(nu_007a.value) + parseInt(nu_007c.value) + parseInt(nu_007e.value) + parseInt(nu_007g.value) + parseInt(nu_007i.value) 
      FT_1_7.value = parseInt(nu_007b.value) + parseInt(nu_007d.value) + parseInt(nu_007f.value) + parseInt(nu_007h.value) + parseInt(nu_007j.value)
      MD_1_7.value = parseInt(nu_007k.value) + parseInt(nu_007m.value) + parseInt(nu_007o.value) + parseInt(nu_007q.value) + parseInt(nu_007s.value) 
      MT_1_7.value = parseInt(nu_007l.value) + parseInt(nu_007n.value) + parseInt(nu_007p.value) + parseInt(nu_007r.value) + parseInt(nu_007t.value)
      
      FD_1_8.value = parseInt(nu_008a.value) + parseInt(nu_008b.value) + parseInt(nu_008c.value) + parseInt(nu_008d.value)
      MD_1_8.value = parseInt(nu_008e.value) + parseInt(nu_008f.value) + parseInt(nu_008g.value) + parseInt(nu_008h.value)
      
      F_2_1.value = parseInt(nu_009a.value) + parseInt(nu_009b.value) + parseInt(nu_009c.value) + parseInt(nu_009d.value) + parseInt(nu_009e.value) 
      M_2_1.value = parseInt(nu_009f.value) + parseInt(nu_009g.value) + parseInt(nu_009h.value) + parseInt(nu_009i.value) + parseInt(nu_009j.value)
      
      F_2_2.value = parseInt(nu_010a.value) + parseInt(nu_010b.value) + parseInt(nu_010c.value) + parseInt(nu_010d.value) + parseInt(nu_010e.value) 
      M_2_2.value = parseInt(nu_010f.value) + parseInt(nu_010g.value) + parseInt(nu_010h.value) + parseInt(nu_010i.value) + parseInt(nu_010j.value)
      
      F_2_3.value = parseInt(nu_011a.value) + parseInt(nu_011b.value) + parseInt(nu_011c.value) + parseInt(nu_011d.value) + parseInt(nu_011e.value) 
      M_2_3.value = parseInt(nu_011f.value) + parseInt(nu_011g.value) + parseInt(nu_011h.value) + parseInt(nu_011i.value) + parseInt(nu_011j.value) 
      
      F_3_1.value = parseInt(nu_012a.value) + parseInt(nu_012b.value) + parseInt(nu_012c.value) + parseInt(nu_012d.value) + parseInt(nu_012e.value) 
      M_3_1.value = parseInt(nu_012f.value) + parseInt(nu_012g.value) + parseInt(nu_012h.value) + parseInt(nu_012i.value) + parseInt(nu_012j.value)
      
      F_3_2.value = parseInt(nu_013a.value) + parseInt(nu_013b.value) + parseInt(nu_013c.value) + parseInt(nu_013d.value) + parseInt(nu_013e.value) 
      M_3_2.value = parseInt(nu_013f.value) + parseInt(nu_013g.value) + parseInt(nu_013h.value) + parseInt(nu_013i.value) + parseInt(nu_013j.value)
      
      F_3_3.value = parseInt(nu_014a.value) + parseInt(nu_014b.value) + parseInt(nu_014c.value) + parseInt(nu_014d.value) + parseInt(nu_014e.value) 
      M_3_3.value = parseInt(nu_014f.value) + parseInt(nu_014g.value) + parseInt(nu_014h.value) + parseInt(nu_014i.value) + parseInt(nu_014j.value)
      
      F_3_4.value = parseInt(nu_015a.value) + parseInt(nu_015b.value) + parseInt(nu_015c.value) + parseInt(nu_015d.value) + parseInt(nu_015e.value) 
      M_3_4.value = parseInt(nu_015f.value) + parseInt(nu_015g.value) + parseInt(nu_015h.value) + parseInt(nu_015i.value) + parseInt(nu_015j.value)
      
      F_4_1.value = parseInt(nu_016a.value) + parseInt(nu_016b.value) + parseInt(nu_016c.value) + parseInt(nu_016d.value) + parseInt(nu_016e.value) 
      M_4_1.value = parseInt(nu_016f.value) + parseInt(nu_016g.value) + parseInt(nu_016h.value) + parseInt(nu_016i.value) + parseInt(nu_016j.value)
      
      F_4_2.value = parseInt(nu_017a.value) + parseInt(nu_017b.value) + parseInt(nu_017c.value) + parseInt(nu_017d.value) + parseInt(nu_017e.value) 
      M_4_2.value = parseInt(nu_017f.value) + parseInt(nu_017g.value) + parseInt(nu_017h.value) + parseInt(nu_017i.value) + parseInt(nu_017j.value)
      
      F_4_3.value = parseInt(nu_018a.value) + parseInt(nu_018b.value) + parseInt(nu_018c.value) + parseInt(nu_018d.value) + parseInt(nu_018e.value) 
      M_4_3.value = parseInt(nu_018f.value) + parseInt(nu_018g.value) + parseInt(nu_018h.value) + parseInt(nu_018i.value) + parseInt(nu_018j.value)
      
      F_4_4.value = parseInt(nu_019a.value) + parseInt(nu_019b.value) + parseInt(nu_019c.value) + parseInt(nu_019d.value) + parseInt(nu_019e.value) 
      M_4_4.value = parseInt(nu_019f.value) + parseInt(nu_019g.value) + parseInt(nu_019h.value) + parseInt(nu_019i.value) + parseInt(nu_019j.value)
      
      F_5_1.value = parseInt(nu_020a.value) + parseInt(nu_020b.value) + parseInt(nu_020c.value) + parseInt(nu_020d.value) + parseInt(nu_020e.value) 
      M_5_1.value = parseInt(nu_020f.value) + parseInt(nu_020g.value) + parseInt(nu_020h.value) + parseInt(nu_020i.value) + parseInt(nu_020j.value)
      
      F_5_2.value = parseInt(nu_021a.value) + parseInt(nu_021b.value) + parseInt(nu_021c.value) + parseInt(nu_021d.value) + parseInt(nu_021e.value) 
      M_5_2.value = parseInt(nu_021f.value) + parseInt(nu_021g.value) + parseInt(nu_021h.value) + parseInt(nu_021i.value) + parseInt(nu_021j.value)
      
      F_5_3.value = parseInt(nu_022a.value) + parseInt(nu_022b.value) + parseInt(nu_022c.value) + parseInt(nu_022d.value) + parseInt(nu_022e.value) 
      M_5_3.value = parseInt(nu_022f.value) + parseInt(nu_022g.value) + parseInt(nu_022h.value) + parseInt(nu_022i.value) + parseInt(nu_022j.value)
      
      F_5_4.value = parseInt(nu_023a.value) + parseInt(nu_023b.value) + parseInt(nu_023c.value) + parseInt(nu_023d.value) + parseInt(nu_023e.value) 
      M_5_4.value = parseInt(nu_023f.value) + parseInt(nu_023g.value) + parseInt(nu_023h.value) + parseInt(nu_023i.value) + parseInt(nu_023j.value)
      
      F_5_5.value = parseInt(nu_024a.value) + parseInt(nu_024b.value) + parseInt(nu_024c.value) + parseInt(nu_024d.value) + parseInt(nu_024e.value) 
      M_5_5.value = parseInt(nu_024f.value) + parseInt(nu_024g.value) + parseInt(nu_024h.value) + parseInt(nu_024i.value) + parseInt(nu_024j.value)
      
      F_5_6.value = parseInt(nu_025a.value) + parseInt(nu_025b.value) + parseInt(nu_025c.value) + parseInt(nu_025d.value) + parseInt(nu_025e.value) 
      M_5_6.value = parseInt(nu_025f.value) + parseInt(nu_025g.value) + parseInt(nu_025h.value) + parseInt(nu_025i.value) + parseInt(nu_025j.value)
      
      F_5_7.value = parseInt(nu_026a.value) + parseInt(nu_026b.value) + parseInt(nu_026c.value) + parseInt(nu_026d.value) + parseInt(nu_026e.value) 
      M_5_7.value = parseInt(nu_026f.value) + parseInt(nu_026g.value) + parseInt(nu_026h.value) + parseInt(nu_026i.value) + parseInt(nu_026j.value)
      
      F_5_8.value = parseInt(nu_027a.value) + parseInt(nu_027b.value) + parseInt(nu_027c.value) + parseInt(nu_027d.value) + parseInt(nu_027e.value) 
      M_5_8.value = parseInt(nu_027f.value) + parseInt(nu_027g.value) + parseInt(nu_027h.value) + parseInt(nu_027i.value) + parseInt(nu_027j.value)
      
      F_5_9.value = parseInt(nu_028a.value) + parseInt(nu_028b.value) + parseInt(nu_028c.value) + parseInt(nu_028d.value) + parseInt(nu_028e.value) 
      M_5_9.value = parseInt(nu_028f.value) + parseInt(nu_028g.value) + parseInt(nu_028h.value) + parseInt(nu_028i.value) + parseInt(nu_028j.value)
     
      T_6_1.value = parseInt(nu_029a.value) + parseInt(nu_029b.value) + parseInt(nu_029c.value)      
      T_6_2.value = parseInt(nu_030a.value)      
      T_6_3.value = parseInt(nu_031a.value) + parseInt(nu_031b.value) + parseInt(nu_031c.value)
      T_6_4.value = parseInt(nu_032a.value) + parseInt(nu_032b.value) + parseInt(nu_032c.value)
      T_6_5.value = parseInt(nu_033a.value)
      T_6_6.value = parseInt(nu_034a.value)
      T_6_7.value = parseInt(nu_035a.value) + parseInt(nu_035b.value) + parseInt(nu_035c.value)
      T_6_8.value = parseInt(nu_037a.value)
      T_6_9.value = parseInt(nu_038a.value)
      T_6_10.value = parseInt(nu_039a.value)
      
      F_7_1.value = parseInt(nu_040a.value) + parseInt(nu_040b.value) + parseInt(nu_040c.value)
      HSH_7_1.value = parseInt(nu_040d.value) + parseInt(nu_040e.value) + parseInt(nu_040f.value)
      TRANS_7_1.value = parseInt(nu_040g.value) + parseInt(nu_040h.value) + parseInt(nu_040i.value)      
      F_7_2.value = parseInt(nu_041a.value) + parseInt(nu_041b.value) + parseInt(nu_041c.value)
      HSH_7_2.value = parseInt(nu_041d.value) + parseInt(nu_041e.value) + parseInt(nu_041f.value)
      TRANS_7_2.value = parseInt(nu_041g.value) + parseInt(nu_041h.value) + parseInt(nu_041i.value)
      F_7_3.value = parseInt(nu_042a.value) + parseInt(nu_042b.value) + parseInt(nu_042c.value)
      HSH_7_3.value = parseInt(nu_042d.value) + parseInt(nu_042e.value) + parseInt(nu_042f.value)
      TRANS_7_3.value = parseInt(nu_042g.value) + parseInt(nu_042h.value) + parseInt(nu_042i.value)
      F_7_4.value = parseInt(nu_043a.value) + parseInt(nu_043b.value) + parseInt(nu_043c.value)
      HSH_7_4.value = parseInt(nu_043d.value) + parseInt(nu_043e.value) + parseInt(nu_043f.value)
      TRANS_7_4.value = parseInt(nu_043g.value) + parseInt(nu_043h.value) + parseInt(nu_043i.value)
      F_7_5.value = parseInt(nu_044a.value) + parseInt(nu_044b.value) + parseInt(nu_044c.value)
      HSH_7_5.value = parseInt(nu_044d.value) + parseInt(nu_044e.value) + parseInt(nu_044f.value)
      TRANS_7_5.value = parseInt(nu_044g.value) + parseInt(nu_044h.value) + parseInt(nu_044i.value)
      F_7_6.value = parseInt(nu_045a.value) + parseInt(nu_045b.value) + parseInt(nu_045c.value)
      HSH_7_6.value = parseInt(nu_045d.value) + parseInt(nu_045e.value) + parseInt(nu_045f.value)
      TRANS_7_6.value = parseInt(nu_045g.value) + parseInt(nu_045h.value) + parseInt(nu_045i.value)
      F_8_1.value = parseInt(nu_046a.value) + parseInt(nu_046b.value) + parseInt(nu_046c.value)
      HSH_8_1.value = parseInt(nu_046d.value) + parseInt(nu_046e.value) + parseInt(nu_046f.value)
      TRANS_8_1.value = parseInt(nu_046g.value) + parseInt(nu_046h.value) + parseInt(nu_046i.value)
      HSH_8_2.value = parseInt(nu_047a.value) + parseInt(nu_047b.value) + parseInt(nu_047c.value)
      TRANS_8_2.value = parseInt(nu_047d.value) + parseInt(nu_047e.value) + parseInt(nu_047f.value)
      F_8_3.value = parseInt(nu_048a.value) + parseInt(nu_048b.value) + parseInt(nu_048c.value)
      F_8_4.value = parseInt(nu_049a.value) + parseInt(nu_049b.value) + parseInt(nu_049c.value)
      HSH_8_4.value = parseInt(nu_049d.value) + parseInt(nu_049e.value) + parseInt(nu_049f.value)
      TRANS_8_4.value = parseInt(nu_049g.value) + parseInt(nu_049h.value) + parseInt(nu_049i.value)
      F_8_5.value = parseInt(nu_050a.value) + parseInt(nu_050b.value) + parseInt(nu_050c.value)
      HSH_8_5.value = parseInt(nu_050d.value) + parseInt(nu_050e.value) + parseInt(nu_050f.value)
      TRANS_8_5.value = parseInt(nu_050g.value) + parseInt(nu_050h.value) + parseInt(nu_050i.value)
      F_8_6.value = parseInt(nu_051a.value) + parseInt(nu_051b.value) + parseInt(nu_051c.value)
      F_8_7.value = parseInt(nu_052a.value) + parseInt(nu_052b.value) + parseInt(nu_052c.value)
      HSH_8_7.value = parseInt(nu_052d.value) + parseInt(nu_052e.value) + parseInt(nu_052f.value)
      TRANS_8_7.value = parseInt(nu_052g.value) + parseInt(nu_052h.value) + parseInt(nu_052i.value)
      F_8_8.value = parseInt(nu_053a.value) + parseInt(nu_053b.value) + parseInt(nu_053c.value)
      F_8_9.value = parseInt(nu_054a.value) + parseInt(nu_054b.value) + parseInt(nu_054c.value)
      HSH_8_9.value = parseInt(nu_054d.value) + parseInt(nu_054e.value) + parseInt(nu_054f.value)
      TRANS_8_9.value = parseInt(nu_054g.value) + parseInt(nu_054h.value) + parseInt(nu_054i.value)
      F_8_10.value = parseInt(nu_055a.value) + parseInt(nu_055b.value) + parseInt(nu_055c.value)
      HSH_8_10.value = parseInt(nu_055d.value) + parseInt(nu_055e.value) + parseInt(nu_055f.value)
      TRANS_8_10.value = parseInt(nu_055g.value) + parseInt(nu_055h.value) + parseInt(nu_055i.value)
      
      F_9_1.value = parseInt(nu_056a.value) + parseInt(nu_056b.value) + parseInt(nu_056c.value)
      M_9_1.value = parseInt(nu_056d.value) + parseInt(nu_056e.value) + parseInt(nu_056f.value)
      F_9_2.value = parseInt(nu_057a.value) + parseInt(nu_057b.value) + parseInt(nu_057c.value)
      M_9_2.value = parseInt(nu_057d.value) + parseInt(nu_057e.value) + parseInt(nu_057f.value)
      F_9_3.value = parseInt(nu_058a.value) + parseInt(nu_058b.value) + parseInt(nu_058c.value)
      M_9_3.value = parseInt(nu_058d.value) + parseInt(nu_058e.value) + parseInt(nu_058f.value)
      F_9_4.value = parseInt(nu_059a.value) + parseInt(nu_059b.value) + parseInt(nu_059c.value)
      M_9_4.value = parseInt(nu_059d.value) + parseInt(nu_059e.value) + parseInt(nu_059f.value)
      F_9_5.value = parseInt(nu_060a.value) + parseInt(nu_060b.value) + parseInt(nu_060c.value)
      M_9_5.value = parseInt(nu_060d.value) + parseInt(nu_060e.value) + parseInt(nu_060f.value)
      F_9_6.value = parseInt(nu_061a.value) + parseInt(nu_061b.value) + parseInt(nu_061c.value)
      M_9_6.value = parseInt(nu_061d.value) + parseInt(nu_061e.value) + parseInt(nu_061f.value)
      
      HSH_10_1.value = parseInt(nu_062a.value) + parseInt(nu_062b.value) + parseInt(nu_062c.value)
      TRANS_10_1.value = parseInt(nu_062d.value) + parseInt(nu_062e.value) + parseInt(nu_062f.value)
      HSH_10_2.value = parseInt(nu_063a.value) + parseInt(nu_063b.value) + parseInt(nu_063c.value)
      TRANS_10_2.value = parseInt(nu_063d.value) + parseInt(nu_063e.value) + parseInt(nu_063f.value)
      HSH_10_3.value = parseInt(nu_064a.value) + parseInt(nu_064b.value) + parseInt(nu_064c.value)
      TRANS_10_3.value = parseInt(nu_064d.value) + parseInt(nu_064e.value) + parseInt(nu_064f.value)
      HSH_10_4.value = parseInt(nu_065a.value) + parseInt(nu_065b.value) + parseInt(nu_065c.value)
      TRANS_10_4.value = parseInt(nu_065d.value) + parseInt(nu_065e.value) + parseInt(nu_065f.value)
      HSH_10_5.value = parseInt(nu_066a.value) + parseInt(nu_066b.value) + parseInt(nu_066c.value)
      TRANS_10_5.value = parseInt(nu_066d.value) + parseInt(nu_066e.value) + parseInt(nu_066f.value)
      HSH_10_6.value = parseInt(nu_067a.value) + parseInt(nu_067b.value) + parseInt(nu_067c.value)
      TRANS_10_6.value = parseInt(nu_067d.value) + parseInt(nu_067e.value) + parseInt(nu_067f.value)
      HSH_10_7.value = parseInt(nu_068a.value) + parseInt(nu_068b.value) + parseInt(nu_068c.value)
      TRANS_10_7.value = parseInt(nu_068d.value) + parseInt(nu_068e.value) + parseInt(nu_068f.value)
      ">

    <div class="container">

        <div>
            <fieldset>
                <legend>Acciones</legend>

                <input type="button" id="btngrabar" value="Grabar" onclick="validateFields_infits();"/>
                <label></label>
                <input type="button" class="cancelar" name="cancelar" id="cancelar" value="Cancelar" onclick="Cancelar()" />
                <label></label>
                <input type="button" class="btnPrint" name="btnPrint" id="btnPrint" value="Imprimir" onclick="javascript:window.print()" />
                <label></label>
                <input type="button" value="Nuevo" onclick="javascript:document.getElementById('task').value = 'newAction';
                        document.getElementById('frmInfits').submit();"/>
            </fieldset>

        </div>
        <div>&nbsp;</div>       
        <div class="elegant-aero">
            <input style="font-size: 12px;" placeholder="Personal de Salud" type="text" name="encuestador" id="encuestador" size="60" maxlength="250" value="<?php echo $this->infits->encuestador_name; ?>" required autofocus/>
            <input type="hidden" name="nu_dni" id="nu_dni" value="<?php echo $this->infits->nu_dni; ?>" required autofocus/>
            <input style="font-size: 12px;" placeholder="Establecimiento de Salud" type="text" name="establec" id="establec" size="100" maxlength="250" value="<?php echo $this->infits->establec_name; ?>" required autofocus/>
            <input type="hidden" name="cod_2000" id="cod_2000" value="<?php echo $this->infits->cod_2000; ?>" required/>
            <div id="informe">
                <table>                
                    <tr>
                        <td style="font-size: 12px;"><?php echo $this->lists['resultado_anho']; ?></td>
                        <td style="font-size: 12px;"><?php echo $this->lists['resultado_mes']; ?></td>
                    </tr>                
                </table>
            </div>
        </div>
        <div>
            <section class="tabs">
                <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
                <label for="tab-1" class="tab-label-1">ITS 1</label>

                <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
                <label for="tab-2" class="tab-label-2">ITS 2</label>

                <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
                <label for="tab-3" class="tab-label-3">ITS 3</label>

                <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
                <label for="tab-4" class="tab-label-4">ITS 4</label>

                <div class="clear-shadow"></div>

                <div class="content">
                    <div class="content-1">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f3" summary="tabla_actividades">
                                                        <thead>
                                <tr>
                                    <th scope="col" rowspan="3" colspan="2"  style="text-align:center;">Población total atendida</th>
                                    <th scope="col" colspan="2" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="2" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="2" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="2" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="2" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="2" style="text-align:center;">Total</th>
                                </tr>
                                <tr>                                           
                                    <th scope="col" style="text-align:center;">F</th>
                                    <th scope="col" style="text-align:center;">M</th>                                            
                                    <th scope="col" style="text-align:center;">F</th>
                                    <th scope="col" style="text-align:center;">M</th>                                            
                                    <th scope="col" style="text-align:center;">F</th>
                                    <th scope="col" style="text-align:center;">M</th>                                            
                                    <th scope="col" style="text-align:center;">F</th>
                                    <th scope="col" style="text-align:center;">M</th>                                            
                                    <th scope="col" style="text-align:center;">F</th>
                                    <th scope="col" style="text-align:center;">M</th>                                            
                                    <th scope="col" style="text-align:center;">F</th>
                                    <th scope="col" style="text-align:center;">M</th>
                                </tr>
                                <tr>    
                                    <td><input class="text" maxlength="4" type="text" name="nu_poba" id="nu_poba"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_poba; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_pobb" id="nu_pobb"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_pobb; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_pobc" id="nu_pobc"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_pobc; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_pobd" id="nu_pobd"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_pobd; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_pobe" id="nu_pobe"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_pobe; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_pobf" id="nu_pobf"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_pobf; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_pobg" id="nu_pobg"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_pobg; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_pobh" id="nu_pobh"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_pobh; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_pobi" id="nu_pobi"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_pobi; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_pobj" id="nu_pobj"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_pobj; ?>"/></td>
                                    <td class="o1"><output name="pob_F"></output></td>
                                    <td class="o1"><output name="pob_M"></output></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <td></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="3" colspan="2" style="text-align:center;">1.-  POBLACION GENERAL: ITS</th>
                                    <th scope="col" colspan="10" style="text-align:center;">Femenino</th>
                                    <th scope="col" colspan="10" style="text-align:center;">Masculino</th>
                                    <th scope="col" rowspan="2" colspan="2" style="text-align:center;">Total Diagnósticos</th>
                                    <th scope="col" rowspan="2" colspan="2" style="text-align:center;">Total Tratados</th>
                                    <th scope="col" rowspan="3" style="text-align:center;">Contactos</th>
                                    <th scope="col" rowspan="3" style="text-align:center;">Contactos Tratados</th>
                                </tr>
                                <tr>

                                    <th scope="col" colspan="2" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="2" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="2" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="2" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="2" style="text-align:center;">60a más</th>
                                    <th scope="col" colspan="2" style="text-align:center;"> 0-11a</th>
                                    <th scope="col" colspan="2" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="2" style="text-align:center;">18-29a</th>
                                    <th scope="col" colspan="2" style="text-align:center;">30-59a</th>                                    
                                    <th scope="col" colspan="2" style="text-align:center;">60a más</th>

                                </tr>
                                <tr>
                                    <th scope="col" style="text-align:center;">D</th>                                            
                                    <th scope="col" style="text-align:center;">T</th>
                                    <th scope="col" style="text-align:center;">D</th>                                            
                                    <th scope="col" style="text-align:center;">T</th>
                                    <th scope="col" style="text-align:center;">D</th>                                            
                                    <th scope="col" style="text-align:center;">T</th>
                                    <th scope="col" style="text-align:center;">D</th>                                            
                                    <th scope="col" style="text-align:center;">T</th>
                                    <th scope="col" style="text-align:center;">D</th>                                            
                                    <th scope="col" style="text-align:center;">T</th>

                                    <th scope="col" style="text-align:center;">D</th>                                            
                                    <th scope="col" style="text-align:center;">T</th>
                                    <th scope="col" style="text-align:center;">D</th>                                            
                                    <th scope="col" style="text-align:center;">T</th>
                                    <th scope="col" style="text-align:center;">D</th>                                            
                                    <th scope="col" style="text-align:center;">T</th>
                                    <th scope="col" style="text-align:center;">D</th>                                            
                                    <th scope="col" style="text-align:center;">T</th>
                                    <th scope="col" style="text-align:center;">D</th>                                            
                                    <th scope="col" style="text-align:center;">T</th>

                                    <th scope="col" style="text-align:center;">F</th>                                            
                                    <th scope="col" style="text-align:center;">M</th>

                                    <th scope="col" style="text-align:center;">F</th>                                            
                                    <th scope="col" style="text-align:center;">M</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n2" scope="col" style="text-align:left;">1.1</td>
                                    <td class="n2" scope="col" style="text-align:left;">N° de Personas con manejo sindrómico</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001a" id="nu_001a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001b" id="nu_001b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001c" id="nu_001c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001d" id="nu_001d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001e" id="nu_001e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001f" id="nu_001f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001g" id="nu_001g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001h" id="nu_001h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001i" id="nu_001i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001j" id="nu_001j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001j; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001k" id="nu_001k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001k; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001l" id="nu_001l"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001m" id="nu_001m"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001n" id="nu_001n"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001n; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001o" id="nu_001o"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001o; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001p" id="nu_001p"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001p; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001q" id="nu_001q"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001q; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001r" id="nu_001r"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001r; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001s" id="nu_001s"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001s; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001t" id="nu_001t"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001t; ?>"/></td>
                                    <td class="o1"><output name="FD_1_1"></output></td>
                                    <td class="o1"><output name="MD_1_1"></output></td>
                                    <td class="o1"><output name="FT_1_1"></output></td>
                                    <td class="o1"><output name="MT_1_1"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001u" id="nu_001u"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001u; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_001v" id="nu_001v"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_001v; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">1.2</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos de descarga uretral</td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002a" id="nu_002a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_002a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002b" id="nu_002b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_002b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002c" id="nu_002c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_002c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002d" id="nu_002d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_002d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002e" id="nu_002e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_002e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002f" id="nu_002f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_002f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002g" id="nu_002g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_002g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002h" id="nu_002h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_002h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002i" id="nu_002i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_002i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002j" id="nu_002j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_002j; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="MD_1_2"></output></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="MT_1_2"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002k" id="nu_002k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_002k; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_002l" id="nu_002l"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_002l; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">1.3</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos de flujo vaginal compatible con ITS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003a" id="nu_003a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_003a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003b" id="nu_003b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_003b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003c" id="nu_003c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_003c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003d" id="nu_003d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_003d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003e" id="nu_003e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_003e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003f" id="nu_003f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_003f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003g" id="nu_003g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_003g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003h" id="nu_003h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_003h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003i" id="nu_003i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_003i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003j" id="nu_003j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_003j; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="FD_1_3"></output></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="FT_1_3"></output></td>
                                    <td class="s1"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003k" id="nu_003k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_003k; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_003l" id="nu_003l"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_003l; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">1.4</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos de úlcera genital </td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004a" id="nu_004a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004b" id="nu_004b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004c" id="nu_004c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004d" id="nu_004d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004e" id="nu_004e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004f" id="nu_004f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004g" id="nu_004g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004h" id="nu_004h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004i" id="nu_004i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004j" id="nu_004j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004j; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004k" id="nu_004k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004k; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004l" id="nu_004l"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004m" id="nu_004m"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004n" id="nu_004n"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004n; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004o" id="nu_004o"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004o; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004p" id="nu_004p"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004p; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004q" id="nu_004q"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004q; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004r" id="nu_004r"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004r; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004s" id="nu_004s"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004s; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004t" id="nu_004t"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004t; ?>"/></td>
                                    <td class="o1"><output name="FD_1_4"></output></td>
                                    <td class="o1"><output name="MD_1_4"></output></td>
                                    <td class="o1"><output name="FT_1_4"></output></td>
                                    <td class="o1"><output name="MT_1_4"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004u" id="nu_004u"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004u; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_004v" id="nu_004v"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_004v; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">1.5</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos de bubón inguinal</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005a" id="nu_005a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005b" id="nu_005b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005c" id="nu_005c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005d" id="nu_005d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005e" id="nu_005e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005f" id="nu_005f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005g" id="nu_005g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005h" id="nu_005h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005i" id="nu_005i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005j" id="nu_005j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005j; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005k" id="nu_005k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005k; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005l" id="nu_005l"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005m" id="nu_005m"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005n" id="nu_005n"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005n; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005o" id="nu_005o"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005o; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005p" id="nu_005p"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005p; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005q" id="nu_005q"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005q; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005r" id="nu_005r"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005r; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005s" id="nu_005s"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005s; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005t" id="nu_005t"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005t; ?>"/></td>
                                    <td class="o1"><output name="FD_1_5"></output></td>
                                    <td class="o1"><output name="MD_1_5"></output></td>
                                    <td class="o1"><output name="FT_1_5"></output></td>
                                    <td class="o1"><output name="MT_1_5"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005u" id="nu_005u"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005u; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_005v" id="nu_005v"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_005v; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">1.6</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos con síndrome de dolor abdominal bajo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006a" id="nu_006a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_006a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006b" id="nu_006b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_006b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006c" id="nu_006c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_006c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006d" id="nu_006d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_006d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006e" id="nu_006e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_006e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006f" id="nu_006f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_006f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006g" id="nu_006g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_006g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006h" id="nu_006h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_006h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006i" id="nu_006i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_006i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_006j" id="nu_006j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_006j; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="FD_1_6"></output></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="FT_1_6"></output></td>
                                    <td class="s1"></td>
                                    <td style="text-align:center;"><input class="text" maxlength="4" type="text" name="nu_006k" id="nu_006k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_006k; ?>"/></td>
                                    <td style="text-align:center;"><input class="text" maxlength="4" type="text" name="nu_006l" id="nu_006l"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_006l; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="n2" scope="col" style="text-align:left;">1.7</td>
                                    <td class="n2" scope="col" style="text-align:left;">Nº de casos con serología reactiva para sífilis</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007a" id="nu_007a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007b" id="nu_007b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007c" id="nu_007c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007d" id="nu_007d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007e" id="nu_007e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007f" id="nu_007f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007g" id="nu_007g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007h" id="nu_007h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007i" id="nu_007i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007j" id="nu_007j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007j; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007k" id="nu_007k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007k; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007l" id="nu_007l"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007m" id="nu_007m"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007n" id="nu_007n"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007n; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007o" id="nu_007o"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007o; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007p" id="nu_007p"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007p; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007q" id="nu_007q"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007q; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007r" id="nu_007r"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007r; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007s" id="nu_007s"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007s; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007t" id="nu_007t"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007t; ?>"/></td>
                                    <td class="o1"><output name="FD_1_7"></output></td>
                                    <td class="o1"><output name="MD_1_7"></output></td>
                                    <td class="o1"><output name="FT_1_7"></output></td>
                                    <td class="o1"><output name="MT_1_7"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007u" id="nu_007u"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007u; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_007v" id="nu_007v"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_007v; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">1.8</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de personas que reciben consejería en ITS</td>
                                    <td colspan="2" class="s1"></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_008a" id="nu_008a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_008a; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_008b" id="nu_008b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_008b; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_008c" id="nu_008c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_008c; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_008d" id="nu_008d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_008d; ?>"/></td>
                                    <td colspan="2" class="s1"></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_008e" id="nu_008e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_008e; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_008f" id="nu_008f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_008f; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_008g" id="nu_008g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_008g; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_008h" id="nu_008h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_008h; ?>"/></td>

                                    <td class="o1"><output name="FD_1_8"></output></td>
                                    <td class="o1"><output name="MD_1_8"></output></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>

                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2" colspan="2"  style="text-align:center;">2.-  Hepatitis B</th>
                                    <th scope="col" colspan="10" style="text-align:center;">Femenino</th>
                                    <th scope="col" colspan="10" style="text-align:center;">Masculino</th>
                                    <th scope="col" colspan="2" style="text-align:center;">Total</th>
                                </tr>
                                <tr>
                                    <th scope="col" colspan="2" style="text-align:center;">0-11a</th>                                            
                                    <th scope="col" colspan="2" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="2" style="text-align:center;">18-29a</th>                                            
                                    <th scope="col" colspan="2" style="text-align:center;">30-59a</th>
                                    <th scope="col" colspan="2" style="text-align:center;">60a más</th>                                            
                                    <th scope="col" colspan="2" style="text-align:center;">0-11a</th>                                            
                                    <th scope="col" colspan="2" style="text-align:center;">12-17a</th>
                                    <th scope="col" colspan="2" style="text-align:center;">18-29a</th>                                            
                                    <th scope="col" colspan="2" style="text-align:center;">30-59a</th>
                                    <th scope="col" colspan="2" style="text-align:center;">60a más</th> 
                                    <th scope="col" style="text-align:center;">F</th>                                            
                                    <th scope="col" style="text-align:center;">M</th>
                                </tr>                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">2.1</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° personas tamizadas para Hepatitis B (prueba rápida o Elisa)</td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_009a" id="nu_009a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_009a; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_009b" id="nu_009b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_009b; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_009c" id="nu_009c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_009c; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_009d" id="nu_009d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_009d; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_009e" id="nu_009e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_009e; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_009f" id="nu_009f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_009f; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_009g" id="nu_009g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_009g; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_009h" id="nu_009h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_009h; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_009i" id="nu_009i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_009i; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_009j" id="nu_009j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_009j; ?>"/></td>
                                    <td class="o1"><output name="F_2_1"></output></td>
                                    <td class="o1"><output name="M_2_1"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">2.2</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° personas reactivas a prueba para Hepatitis B (prueba rápida o Elisa)</td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_010a" id="nu_010a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_010a; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_010b" id="nu_010b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_010b; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_010c" id="nu_010c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_010c; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_010d" id="nu_010d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_010d; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_010e" id="nu_010e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_010e; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_010f" id="nu_010f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_010f; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_010g" id="nu_010g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_010g; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_010h" id="nu_010h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_010h; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_010i" id="nu_010i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_010i; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_010j" id="nu_010j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_010j; ?>"/></td>
                                    <td class="o1"><output name="F_2_2"></output></td>
                                    <td class="o1"><output name="M_2_2"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">2.3</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° Personas con diagnóstico confirmado de Hepatitis B Crónica</td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_011a" id="nu_011a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_011a; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_011b" id="nu_011b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_011b; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_011c" id="nu_011c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_011c; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_011d" id="nu_011d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_011d; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_011e" id="nu_011e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_011e; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_011f" id="nu_011f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_011f; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_011g" id="nu_011g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_011g; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_011h" id="nu_011h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_011h; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_011i" id="nu_011i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_011i; ?>"/></td>
                                    <td colspan="2" style="text-align:center;"><input style="width: 50px" class="text" maxlength="4" type="text" name="nu_011j" id="nu_011j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_011j; ?>"/></td>
                                    <td class="o1"><output name="F_2_3"></output></td>
                                    <td class="o1"><output name="M_2_3"></output></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-2">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f3" style="width: 90%;" summary="tabla_actividades">
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2" colspan="2" style="text-align:center; width: 40%;">3.- POBLACION GENERAL : Tamizaje</th>
                                    <th scope="col" colspan="5" style="text-align:center;">Femenino</th>
                                    <th scope="col" colspan="5" style="text-align:center;">Masculino</th>
                                    <th scope="col" colspan="2" style="text-align:center; width: 250px;">Total</th>
                                </tr>
                                <tr>
                                    <th scope="col" style="text-align:center;">0-11a</th>                                            
                                    <th scope="col" style="text-align:center;">12-17a</th>
                                    <th scope="col" style="text-align:center;">18-29a</th>                                            
                                    <th scope="col" style="text-align:center;">30-59a</th>
                                    <th scope="col" style="text-align:center;">60a más</th>                                            
                                    <th scope="col" style="text-align:center;">0-11a</th>                                            
                                    <th scope="col" style="text-align:center;">12-17a</th>
                                    <th scope="col" style="text-align:center;">18-29a</th>                                            
                                    <th scope="col" style="text-align:center;">30-59a</th>
                                    <th scope="col" style="text-align:center;">60a más</th>  
                                    <th scope="col" style="text-align:center;">F</th>                                            
                                    <th scope="col" style="text-align:center;">M</th>
                                </tr>                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">3.1</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de personas tamizadas para VIH (excepto gestantes)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012a" id="nu_012a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_012a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012b" id="nu_012b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_012b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012c" id="nu_012c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_012c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012d" id="nu_012d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_012d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012e" id="nu_012e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_012e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012f" id="nu_012f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_012f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012g" id="nu_012g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_012g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012h" id="nu_012h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_012h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012i" id="nu_012i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_012i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_012j" id="nu_012j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_012j; ?>"/></td>
                                    <td class="o1"><output name="F_3_1"></output></td>
                                    <td class="o1"><output name="M_3_1"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">3.2</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de personas tamizadas para VIH con resultado reactivo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013a" id="nu_013a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_013a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013b" id="nu_013b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_013b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013c" id="nu_013c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_013c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013d" id="nu_013d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_013d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013e" id="nu_013e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_013e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013f" id="nu_013f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_013f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013g" id="nu_013g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_013g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013h" id="nu_013h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_013h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013i" id="nu_013i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_013i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_013j" id="nu_013j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_013j; ?>"/></td>
                                    <td class="o1"><output name="F_3_2"></output></td>
                                    <td class="o1"><output name="M_3_2"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">3.3</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de personas con TB tamizadas para VIH</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014a" id="nu_014a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_014a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014b" id="nu_014b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_014b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014c" id="nu_014c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_014c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014d" id="nu_014d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_014d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014e" id="nu_014e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_014e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014f" id="nu_014f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_014f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014g" id="nu_014g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_014g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014h" id="nu_014h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_014h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014i" id="nu_014i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_014i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_014j" id="nu_014j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_014j; ?>"/></td>
                                    <td class="o1"><output name="F_3_3"></output></td>
                                    <td class="o1"><output name="M_3_3"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">3.4</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de personas con TB tamizadas reactivas para VIH</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015a" id="nu_015a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_015a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015b" id="nu_015b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_015b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015c" id="nu_015c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_015c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015d" id="nu_015d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_015d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015e" id="nu_015e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_015e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015f" id="nu_015f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_015f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015g" id="nu_015g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_015g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015h" id="nu_015h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_015h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015i" id="nu_015i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_015i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_015j" id="nu_015j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_015j; ?>"/></td>
                                    <td class="o1"><output name="F_3_4"></output></td>
                                    <td class="o1"><output name="M_3_4"></output></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2" colspan="2" style="text-align:center;">4.-   EXPOSICION A VIH</th>
                                    <th scope="col" colspan="5" style="text-align:center;">Femenino</th>
                                    <th scope="col" colspan="5" style="text-align:center;">Masculino</th>
                                    <th scope="col" colspan="2" style="text-align:center;">Total</th>
                                </tr>
                                <tr>
                                    <th scope="col" style="text-align:center;">0-11a</th>                                            
                                    <th scope="col" style="text-align:center;">12-17a</th>
                                    <th scope="col" style="text-align:center;">18-29a</th>                                            
                                    <th scope="col" style="text-align:center;">30-59a</th>
                                    <th scope="col" style="text-align:center;">60a más</th>                                            
                                    <th scope="col" style="text-align:center;">0-11a</th>                                            
                                    <th scope="col" style="text-align:center;">12-17a</th>
                                    <th scope="col" style="text-align:center;">18-29a</th>                                            
                                    <th scope="col" style="text-align:center;">30-59a</th>
                                    <th scope="col" style="text-align:center;">60a más</th> 
                                    <th scope="col" style="text-align:center;">F</th>                                            
                                    <th scope="col" style="text-align:center;">M</th>
                                </tr>                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">4.1</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de personas que sufrieron exposición ocupacional al VIH</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016a" id="nu_016a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_016a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016b" id="nu_016b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_016b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016c" id="nu_016c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_016c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016d" id="nu_016d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_016d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016e" id="nu_016e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_016e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016f" id="nu_016f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_016f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016g" id="nu_016g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_016g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016h" id="nu_016h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_016h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016i" id="nu_016i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_016i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_016j" id="nu_016j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_016j; ?>"/></td>
                                    <td class="o1"><output name="F_4_1"></output></td>
                                    <td class="o1"><output name="M_4_1"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">4.2</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de personas que sufrieron exposición ocupacional al VIH y reciben profilaxis ARV</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017a" id="nu_017a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_017a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017b" id="nu_017b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_017b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017c" id="nu_017c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_017c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017d" id="nu_017d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_017d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017e" id="nu_017e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_017e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017f" id="nu_017f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_017f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017g" id="nu_017g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_017g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017h" id="nu_017h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_017h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017i" id="nu_017i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_017i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_017j" id="nu_017j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_017j; ?>"/></td>
                                    <td class="o1"><output name="F_4_2"></output></td>
                                    <td class="o1"><output name="M_4_2"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">4.3</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de personas expuestas a VIH por exposición no ocupacional</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018a" id="nu_018a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_018a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018b" id="nu_018b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_018b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018c" id="nu_018c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_018c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018d" id="nu_018d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_018d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018e" id="nu_018e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_018e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018f" id="nu_018f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_018f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018g" id="nu_018g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_018g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018h" id="nu_018h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_018h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018i" id="nu_018i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_018i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_018j" id="nu_018j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_018j; ?>"/></td>
                                    <td class="o1"><output name="F_4_3"></output></td>
                                    <td class="o1"><output name="M_4_3"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">4.4</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de personas expuestas a VIH por exposición no ocupacional y reciben profilaxis ARV</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019a" id="nu_019a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_019a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019b" id="nu_019b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_019b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019c" id="nu_019c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_019c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019d" id="nu_019d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_019d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019e" id="nu_019e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_019e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019f" id="nu_019f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_019f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019g" id="nu_019g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_019g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019h" id="nu_019h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_019h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019i" id="nu_019i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_019i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_019j" id="nu_019j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_019j; ?>"/></td>
                                    <td class="o1"><output name="F_4_4"></output></td>
                                    <td class="o1"><output name="M_4_4"></output></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2" colspan="2" style="text-align:center;">5.-   PVVS:  Atención Integral</th>
                                    <th scope="col" colspan="5" style="text-align:center;">Femenino</th>
                                    <th scope="col" colspan="5" style="text-align:center;">Masculino</th>
                                    <th scope="col" colspan="2" style="text-align:center;">Total</th>
                                </tr>
                                <tr>
                                    <th scope="col" style="text-align:center;">0-11a</th>                                            
                                    <th scope="col" style="text-align:center;">12-17a</th>
                                    <th scope="col" style="text-align:center;">18-29a</th>                                            
                                    <th scope="col" style="text-align:center;">30-59a</th>
                                    <th scope="col" style="text-align:center;">60a más</th>                                            
                                    <th scope="col" style="text-align:center;">0-11a</th>                                            
                                    <th scope="col" style="text-align:center;">12-17a</th>
                                    <th scope="col" style="text-align:center;">18-29a</th>                                            
                                    <th scope="col" style="text-align:center;">30-59a</th>
                                    <th scope="col" style="text-align:center;">60a más</th> 
                                    <th scope="col" style="text-align:center;">F</th>                                            
                                    <th scope="col" style="text-align:center;">M</th>
                                </tr>                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">5.1</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de PVVS que inician Terapia preventiva con Cotrimoxazol (TPC)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020a" id="nu_020a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_020a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020b" id="nu_020b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_020b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020c" id="nu_020c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_020c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020d" id="nu_020d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_020d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020e" id="nu_020e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_020e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020f" id="nu_020f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_020f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020g" id="nu_020g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_020g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020h" id="nu_020h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_020h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020i" id="nu_020i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_020i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_020j" id="nu_020j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_020j; ?>"/></td>
                                    <td class="o1"><output name="F_5_1"></output></td>
                                    <td class="o1"><output name="M_5_1"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">5.2</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de PVVS que inician Terapia preventiva con INH (TPI)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021a" id="nu_021a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_021a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021b" id="nu_021b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_021b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021c" id="nu_021c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_021c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021d" id="nu_021d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_021d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021e" id="nu_021e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_021e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021f" id="nu_021f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_021f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021g" id="nu_021g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_021g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021h" id="nu_021h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_021h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021i" id="nu_021i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_021i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_021j" id="nu_021j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_021j; ?>"/></td>
                                    <td class="o1"><output name="F_5_2"></output></td>
                                    <td class="o1"><output name="M_5_2"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">5.3</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de PVVS que completan Terapia preventiva con INH (TPI)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022a" id="nu_022a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_022a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022b" id="nu_022b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_022b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022c" id="nu_022c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_022c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022d" id="nu_022d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_022d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022e" id="nu_022e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_022e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022f" id="nu_022f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_022f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022g" id="nu_022g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_022g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022h" id="nu_022h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_022h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022i" id="nu_022i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_022i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_022j" id="nu_022j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_022j; ?>"/></td>
                                    <td class="o1"><output name="F_5_3"></output></td>
                                    <td class="o1"><output name="M_5_3"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">5.4</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° de PVVS con diagnóstico de TB</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023a" id="nu_023a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_023a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023b" id="nu_023b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_023b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023c" id="nu_023c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_023c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023d" id="nu_023d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_023d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023e" id="nu_023e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_023e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023f" id="nu_023f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_023f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023g" id="nu_023g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_023g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023h" id="nu_023h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_023h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023i" id="nu_023i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_023i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_023j" id="nu_023j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_023j; ?>"/></td>
                                    <td class="o1"><output name="F_5_4"></output></td>
                                    <td class="o1"><output name="M_5_4"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">5.5</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° de PVVS con TB que inician tratamiento para TB</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024a" id="nu_024a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_024a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024b" id="nu_024b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_024b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024c" id="nu_024c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_024c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024d" id="nu_024d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_024d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024e" id="nu_024e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_024e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024f" id="nu_024f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_024f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024g" id="nu_024g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_024g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024h" id="nu_024h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_024h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024i" id="nu_024i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_024i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_024j" id="nu_024j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_024j; ?>"/></td>
                                    <td class="o1"><output name="F_5_5"></output></td>
                                    <td class="o1"><output name="M_5_5"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">5.6</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° de PVVS con TB que completan tratamiento para TB</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025a" id="nu_025a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_025a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025b" id="nu_025b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_025b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025c" id="nu_025c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_025c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025d" id="nu_025d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_025d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025e" id="nu_025e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_025e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025f" id="nu_025f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_025f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025g" id="nu_025g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_025g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025h" id="nu_025h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_025h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025i" id="nu_025i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_025i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_025j" id="nu_025j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_025j; ?>"/></td>
                                    <td class="o1"><output name="F_5_6"></output></td>
                                    <td class="o1"><output name="M_5_6"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">5.7</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° de PVVS con TB que abandonan tratamiento para TB</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026a" id="nu_026a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_026a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026b" id="nu_026b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_026b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026c" id="nu_026c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_026c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026d" id="nu_026d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_026d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026e" id="nu_026e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_026e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026f" id="nu_026f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_026f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026g" id="nu_026g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_026g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026h" id="nu_026h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_026h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026i" id="nu_026i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_026i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_026j" id="nu_026j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_026j; ?>"/></td>
                                    <td class="o1"><output name="F_5_7"></output></td>
                                    <td class="o1"><output name="M_5_7"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">5.8</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° de PVVS con Hepatitis B crónica</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027a" id="nu_027a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_027a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027b" id="nu_027b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_027b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027c" id="nu_027c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_027c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027d" id="nu_027d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_027d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027e" id="nu_027e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_027e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027f" id="nu_027f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_027f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027g" id="nu_027g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_027g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027h" id="nu_027h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_027h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027i" id="nu_027i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_027i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_027j" id="nu_027j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_027j; ?>"/></td>
                                    <td class="o1"><output name="F_5_8"></output></td>
                                    <td class="o1"><output name="M_5_8"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">5.9</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de PVVS fallecidos en el mes</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028a" id="nu_028a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_028a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028b" id="nu_028b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_028b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028c" id="nu_028c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_028c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028d" id="nu_028d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_028d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028e" id="nu_028e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_028e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028f" id="nu_028f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_028f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028g" id="nu_028g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_028g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028h" id="nu_028h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_028h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028i" id="nu_028i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_028i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_028j" id="nu_028j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_028j; ?>"/></td>
                                    <td class="o1"><output name="F_5_9"></output></td>
                                    <td class="o1"><output name="M_5_9"></output></td>
                                </tr>    
                            </tbody>
                        </table>
                    </div>
                    <div class="content-3">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f3" style="width: 75%;" summary="tabla_actividades">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2" rowspan="2" style="text-align:center; width: 60%;">6.-   GESTANTES Y PUERPERAS: Transmisión Vertical (Sífilis, VIH, Hepatitis B)</th>
                                    <th scope="col" rowspan="2" style="text-align:center;">0-11a</th>                                            
                                    <th scope="col" rowspan="2" style="text-align:center;">12-17a</th>
                                    <th scope="col" rowspan="2" style="text-align:center;">18-29a</th>                                            
                                    <th scope="col" rowspan="2" style="text-align:center;">30-59a</th>
                                    <th scope="col" rowspan="2" style="text-align:center; width: 150px;">Total</th> 
                                    <th scope="col" colspan="3" style="text-align:center; width: 150px;">Trimestre de embarazo</th> 
                                    
                                </tr>
                                <tr>
                                    <th scope="col" style="text-align:center; width: 150px;">1er Trim.</th> 
                                    <th scope="col" style="text-align:center; width: 150px;">2do Trim.</th>
                                    <th scope="col" style="text-align:center; width: 150px;">3er Trim.</th> 
                                </tr>    
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">6.1</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° de gestantes con Sífilis que inician tratamiento</td>
                                    <td class="s1"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029a" id="nu_029a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_029a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029b" id="nu_029b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_029b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029c" id="nu_029c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_029c; ?>"/></td>
                                    <td class="o1"><output name="T_6_1"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029d" id="nu_029d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_029d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029e" id="nu_029e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_029e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_029f" id="nu_029f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_029f; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">6.2</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° de RN con Sífilis congénita que inician tratamiento</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_030a" id="nu_030a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_030a; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="T_6_2"></output></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">6.3</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° de Gestantes con VIH que reciben TARGA</td>
                                    <td class="s1"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031a" id="nu_031a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_031a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031b" id="nu_031b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_031b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031c" id="nu_031c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_031c; ?>"/></td>
                                    <td class="o1"><output name="T_6_3"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031d" id="nu_031d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_031d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031e" id="nu_031e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_031e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_031f" id="nu_031f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_031f; ?>"/></td>                                    
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">6.4</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° de Gestantes con VIH que culminan con cesárea</td>
                                    <td class="s1"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032a" id="nu_032a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_032a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032b" id="nu_032b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_032b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_032c" id="nu_032c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_032c; ?>"/></td>
                                    <td class="o1"><output name="T_6_4"></output></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">6.5</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° de RN expuestos a VIH (hijos de madre VIH) que inician ARV</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_033a" id="nu_033a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_033a; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="T_6_5"></output></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>                                   
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">6.6</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° de RN expuestos a VIH que inician sucedáneos de leche materna</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_034a" id="nu_034a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_034a; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="T_6_6"></output></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">6.7</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° de Gestantes reactivas para Hepatitis B</td>
                                    <td class="s1"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035a" id="nu_035a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_035a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035b" id="nu_035b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_035b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035c" id="nu_035c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_035c; ?>"/></td>
                                    <td class="o1"><output name="T_6_7"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035d" id="nu_035d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_035d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035e" id="nu_035e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_035e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_035f" id="nu_035f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_035f; ?>"/></td>                                    
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" rowspan="2" style="text-align:left;">6.8</td>
                                    <td class="f1" scope="col" rowspan="2" style="text-align:left;">N° RN expuestos a Hepatitis B</td>
                                    <td class="s1"></td>
                                    <td class="s1" rowspan="2"></td>
                                    <td class="s1" rowspan="2"></td>
                                    <td class="s1" rowspan="2"></td>
                                    <td class="s1"></td>
                                    <td class="o1" style="text-align:center;">F</td>
                                    <td class="o1" style="text-align:center;">M</td>
                                    <td class="s1" rowspan="2"></td>
                                </tr>
                                 <tr>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037a" id="nu_037a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_037a; ?>"/></td>
                                    <td class="o1"><output name="T_6_8"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037b" id="nu_037b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_037b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_037c" id="nu_037c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_037c; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">6.9</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° RN Expuestos con Vacuna de Hepatitis B en atencion de Parto</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038a" id="nu_038a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_038a; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="T_6_9"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038b" id="nu_038b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_038b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_038c" id="nu_038c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_038c; ?>"/></td>
                                    <td class="s1"></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">6.10</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° RN Expuestos que reciben Inmunoglobulina (HBIG)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039a" id="nu_039a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_039a; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="T_6_10"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039b" id="nu_039b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_039b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_039c" id="nu_039c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_039c; ?>"/></td>
                                    <td class="s1"></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th scope="col" colspan="3" rowspan="2" style="text-align:center; width: 60%;">7.-   POBLACION CLAVE: Trabajadoras/es Sexuales</th>                                           
                                    <th scope="col" colspan="3" style="text-align:center;">TS-F</th>
                                    <th scope="col" colspan="3" style="text-align:center;">TS-HSH</th>                                            
                                    <th scope="col" colspan="3" style="text-align:center;">TS-Trans</th>
                                    <th scope="col" colspan="3" style="text-align:center;">Total</th> 
                                </tr>
                                <tr>
                                    <th scope="col" style="text-align:center;">18-29a</th>
                                    <th scope="col" style="text-align:center;">30-59a</th>                                            
                                    <th scope="col" style="text-align:center;">60a más</th>
                                    <th scope="col" style="text-align:center;">18-29a</th>
                                    <th scope="col" style="text-align:center;">30-59a</th>                                            
                                    <th scope="col" style="text-align:center;">60a más</th>
                                    <th scope="col" style="text-align:center;">18-29a</th>
                                    <th scope="col" style="text-align:center;">30-59a</th>                                            
                                    <th scope="col" style="text-align:center;">60a más</th>
                                    <th scope="col" style="text-align:center;">TS-F</th>
                                    <th scope="col" style="text-align:center;">TS-HSH</th>                                            
                                    <th scope="col" style="text-align:center;">TS-Trans</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">7.1</td>
                                    <td class="f1" scope="col" style="text-align:left;" colspan="2">Nº TS atendidos/as en AMP</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040a" id="nu_040a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_040a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040b" id="nu_040b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_040b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040c" id="nu_040c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_040c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040d" id="nu_040d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_040d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040e" id="nu_040e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_040e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040f" id="nu_040f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_040f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040g" id="nu_040g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_040g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040h" id="nu_040h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_040h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_040i" id="nu_040i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_040i; ?>"/></td>
                                    <td class="o1"><output name="F_7_1"></output></td>                                
                                    <td class="o1"><output name="HSH_7_1"></output></td>
                                    <td class="o1"><output name="TRANS_7_1"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">7.2</td>
                                    <td class="f1" scope="col" style="text-align:left;" colspan="2">Nº de atenciones a TS  en AMP</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041a" id="nu_041a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_041a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041b" id="nu_041b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_041b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041c" id="nu_041c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_041c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041d" id="nu_041d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_041d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041e" id="nu_041e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_041e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041f" id="nu_041f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_041f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041g" id="nu_041g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_041g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041h" id="nu_041h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_041h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_041i" id="nu_041i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_041i; ?>"/></td>
                                    <td class="o1"><output name="F_7_2"></output></td>                                
                                    <td class="o1"><output name="HSH_7_2"></output></td>
                                    <td class="o1"><output name="TRANS_7_2"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">7.3</td>
                                    <td class="f1" scope="col" style="text-align:left;" colspan="2">Nº TS controlados/as (4 veces/año)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042a" id="nu_042a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_042a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042b" id="nu_042b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_042b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042c" id="nu_042c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_042c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042d" id="nu_042d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_042d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042e" id="nu_042e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_042e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042f" id="nu_042f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_042f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042g" id="nu_042g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_042g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042h" id="nu_042h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_042h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_042i" id="nu_042i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_042i; ?>"/></td>
                                    <td class="o1"><output name="F_7_3"></output></td>                                
                                    <td class="o1"><output name="HSH_7_3"></output></td>
                                    <td class="o1"><output name="TRANS_7_3"></output></td>                                   
                                </tr>  
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">7.4</td>
                                    <td class="f1" scope="col" style="text-align:left;" colspan="2">Nº de TS tamizados/as para VIH</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043a" id="nu_043a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_043a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043b" id="nu_043b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_043b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043c" id="nu_043c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_043c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043d" id="nu_043d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_043d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043e" id="nu_043e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_043e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043f" id="nu_043f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_043f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043g" id="nu_043g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_043g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043h" id="nu_043h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_043h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_043i" id="nu_043i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_043i; ?>"/></td>
                                    <td class="o1"><output name="F_7_4"></output></td>                                
                                    <td class="o1"><output name="HSH_7_4"></output></td>
                                    <td class="o1"><output name="TRANS_7_4"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">7.5</td>
                                    <td class="f1" scope="col" style="text-align:left;" colspan="2">Nº  TS con tamizaje para VIH con resultado reactivo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044a" id="nu_044a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_044a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044b" id="nu_044b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_044b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044c" id="nu_044c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_044c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044d" id="nu_044d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_044d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044e" id="nu_044e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_044e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044f" id="nu_044f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_044f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044g" id="nu_044g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_044g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044h" id="nu_044h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_044h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_044i" id="nu_044i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_044i; ?>"/></td>
                                    <td class="o1"><output name="F_7_5"></output></td>                                
                                    <td class="o1"><output name="HSH_7_5"></output></td>
                                    <td class="o1"><output name="TRANS_7_5"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">7.6</td>
                                    <td class="f1" scope="col" style="text-align:left;" colspan="2">Nº TS referidos/as a CERITS y UAMPs por PEPs</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045a" id="nu_045a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_045a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045b" id="nu_045b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_045b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045c" id="nu_045c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_045c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045d" id="nu_045d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_045d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045e" id="nu_045e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_045e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045f" id="nu_045f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_045f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045g" id="nu_045g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_045g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045h" id="nu_045h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_045h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_045i" id="nu_045i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_045i; ?>"/></td>
                                    <td class="o1"><output name="F_7_6"></output></td>                                
                                    <td class="o1"><output name="HSH_7_6"></output></td>
                                    <td class="o1"><output name="TRANS_7_6"></output></td>                             
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-4">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style_f3" style="width: 95%;" summary="tabla_actividades">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2" rowspan="2" style="text-align:center; width: 60%;">8.-   POBLACION CLAVE: Trabajadoras/es Sexuales : ITS</th>                                           
                                    <th scope="col" colspan="3" style="text-align:center;">TS-F</th>
                                    <th scope="col" colspan="3" style="text-align:center;">TS-HSH</th>                                            
                                    <th scope="col" colspan="3" style="text-align:center;">TS-Trans</th>
                                    <th scope="col" colspan="3" style="text-align:center;">Total</th>
                                    <th scope="col" colspan="3" style="text-align:center;">TS Tratados</th>
                                    <th scope="col" rowspan="2" style="text-align:center;">Contactos</th> 
                                    <th scope="col" rowspan="2" style="text-align:center;">Contactos Tratados</th>
                                </tr>
                                <tr>
                                    <th scope="col" style="text-align:center;">18-29a</th>
                                    <th scope="col" style="text-align:center;">30-59a</th>                                            
                                    <th scope="col" style="text-align:center;">60a más</th>
                                    <th scope="col" style="text-align:center;">18-29a</th>
                                    <th scope="col" style="text-align:center;">30-59a</th>                                            
                                    <th scope="col" style="text-align:center;">60a más</th>
                                    <th scope="col" style="text-align:center;">18-29a</th>
                                    <th scope="col" style="text-align:center;">30-59a</th>                                            
                                    <th scope="col" style="text-align:center;">60a más</th>
                                    <th scope="col" style="text-align:center;">TS-Femenino</th>
                                    <th scope="col" style="text-align:center;">TS-HSH</th>                                            
                                    <th scope="col" style="text-align:center;">TS-Trans</th>
                                    <th scope="col" style="text-align:center;">18-29a</th>
                                    <th scope="col" style="text-align:center;">30-59a</th>                                            
                                    <th scope="col" style="text-align:center;">60a más</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">8.1</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de personas con diagnóstico de ITS con manejo sindrómico</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046a" id="nu_046a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046b" id="nu_046b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046c" id="nu_046c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046d" id="nu_046d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046e" id="nu_046e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046f" id="nu_046f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046g" id="nu_046g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046h" id="nu_046h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046i" id="nu_046i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046i; ?>"/></td>
                                    <td class="o1"><output name="F_8_1"></output></td>                                
                                    <td class="o1"><output name="HSH_8_1"></output></td>
                                    <td class="o1"><output name="TRANS_8_1"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046j" id="nu_046j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046j; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046k" id="nu_046k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046k; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046l" id="nu_046l"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046m" id="nu_046m"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_046n" id="nu_046n"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_046n; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">8.2</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos con descarga uretral</td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047a" id="nu_047a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_047a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047b" id="nu_047b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_047b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047c" id="nu_047c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_047c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047d" id="nu_047d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_047d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047e" id="nu_047e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_047e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047f" id="nu_047f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_047f; ?>"/></td>
                                    <td class="s1"></td>                               
                                    <td class="o1"><output name="HSH_8_2"></output></td>
                                    <td class="o1"><output name="TRANS_8_2"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047g" id="nu_047g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_047g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047h" id="nu_047h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_047h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047i" id="nu_047i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_047i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047j" id="nu_047j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_047j; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_047k" id="nu_047k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_047k; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">8.3</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos con flujo vaginal compatible con ITS</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048a" id="nu_048a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_048a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048b" id="nu_048b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_048b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048c" id="nu_048c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_048c; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="F_8_3"></output></td>                                
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048d" id="nu_048d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_048d; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048e" id="nu_048e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_048e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_048f" id="nu_048f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_048f; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">8.4</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos de úlcera genital</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049a" id="nu_049a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049b" id="nu_049b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049c" id="nu_049c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049d" id="nu_049d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049e" id="nu_049e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049f" id="nu_049f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049g" id="nu_049g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049h" id="nu_049h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049i" id="nu_049i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049i; ?>"/></td>
                                    <td class="o1"><output name="F_8_4"></output></td>                                
                                    <td class="o1"><output name="HSH_8_4"></output></td>
                                    <td class="o1"><output name="TRANS_8_4"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049j" id="nu_049j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049j; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049k" id="nu_049k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049k; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049l" id="nu_049l"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049m" id="nu_049m"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_049n" id="nu_049n"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_049n; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">8.5</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos de bubón inguinal</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050a" id="nu_050a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050b" id="nu_050b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050c" id="nu_050c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050d" id="nu_050d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050e" id="nu_050e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050f" id="nu_050f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050g" id="nu_050g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050h" id="nu_050h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050i" id="nu_050i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050i; ?>"/></td>
                                    <td class="o1"><output name="F_8_5"></output></td>                                
                                    <td class="o1"><output name="HSH_8_5"></output></td>
                                    <td class="o1"><output name="TRANS_8_5"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050j" id="nu_050j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050j; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050k" id="nu_050k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050k; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050l" id="nu_050l"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050m" id="nu_050m"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_050n" id="nu_050n"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_050n; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">8.6</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos con síndrome de dolor abdominal bajo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051a" id="nu_051a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_051a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051b" id="nu_051b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_051b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051c" id="nu_051c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_051c; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="F_8_6"></output></td>                                
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051d" id="nu_051d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_051d; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051e" id="nu_051e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_051e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_051f" id="nu_051f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_051f; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">8.7</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de personas con diagnóstico de ITS con manejo etiológico</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052a" id="nu_052a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052b" id="nu_052b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052c" id="nu_052c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052d" id="nu_052d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052e" id="nu_052e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052f" id="nu_052f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052g" id="nu_052g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052h" id="nu_052h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052i" id="nu_052i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052i; ?>"/></td>
                                    <td class="o1"><output name="F_8_7"></output></td>                                
                                    <td class="o1"><output name="HSH_8_7"></output></td>
                                    <td class="o1"><output name="TRANS_8_7"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052j" id="nu_052j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052j; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052k" id="nu_052k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052k; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052l" id="nu_052l"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052m" id="nu_052m"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_052n" id="nu_052n"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_052n; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">8.8</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos de tricomoniasís</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053a" id="nu_053a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_053a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053b" id="nu_053b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_053b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053c" id="nu_053c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_053c; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td class="o1"><output name="F_8_8"></output></td>                                
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053d" id="nu_053d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_053d; ?>"/></td>
                                    <td class="s1"></td>
                                    <td class="s1"></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053e" id="nu_053e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_053e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_053f" id="nu_053f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_053f; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">8.9</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos de gonorrea</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054a" id="nu_054a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054b" id="nu_054b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054c" id="nu_054c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054d" id="nu_054d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054e" id="nu_054e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054f" id="nu_054f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054g" id="nu_054g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054h" id="nu_054h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054i" id="nu_054i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054i; ?>"/></td>
                                    <td class="o1"><output name="F_8_9"></output></td>                                
                                    <td class="o1"><output name="HSH_8_9"></output></td>
                                    <td class="o1"><output name="TRANS_8_9"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054j" id="nu_054j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054j; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054k" id="nu_054k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054k; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054l" id="nu_054l"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054m" id="nu_054m"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_054n" id="nu_054n"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_054n; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">8.10</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos con serología reactiva para sífilis (>= 8 dil)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055a" id="nu_055a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055b" id="nu_055b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055c" id="nu_055c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055d" id="nu_055d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055e" id="nu_055e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055f" id="nu_055f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055f; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055g" id="nu_055g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055h" id="nu_055h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055i" id="nu_055i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055i; ?>"/></td>
                                    <td class="o1"><output name="F_8_10"></output></td>                                
                                    <td class="o1"><output name="HSH_8_10"></output></td>
                                    <td class="o1"><output name="TRANS_8_10"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055j" id="nu_055j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055j; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055k" id="nu_055k"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055k; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055l" id="nu_055l"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055l; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055m" id="nu_055m"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055m; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_055n" id="nu_055n"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_055n; ?>"/></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2" rowspan="2" style="text-align:center;">09.-   POBLACION CLAVE: Hombres que tienen sexo con otros hombres / Trans</th>
                                    <th scope="col" colspan="3" style="text-align:center;">HSH</th>                                            
                                    <th scope="col" colspan="3" style="text-align:center;">Trans</th>
                                    <th scope="col" colspan="2" style="text-align:center; width: 150px;">Total</th> 
                                </tr>                                
                                <tr>
                                    <th scope="col" style="text-align:center;">18-29a</th>                                            
                                    <th scope="col" style="text-align:center;">30-59a</th>
                                    <th scope="col" style="text-align:center;">60a más</th>                                            
                                    <th scope="col" style="text-align:center;">18-29a</th>                                            
                                    <th scope="col" style="text-align:center;">30-59a</th>
                                    <th scope="col" style="text-align:center;">60a más</th>
                                    <th scope="col" style="text-align:center; width: 150px;">HSH</th> 
                                    <th scope="col" style="text-align:center; width: 150px;">Trans</th>
                                </tr>                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">9.1</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº HSH/Trans atendidos/as</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056a" id="nu_056a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_056a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056b" id="nu_056b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_056b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056c" id="nu_056c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_056c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056d" id="nu_056d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_056d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056e" id="nu_056e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_056e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_056f" id="nu_056f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_056f; ?>"/></td>
                                    <td class="o1"><output name="F_9_1"></output></td>
                                    <td class="o1"><output name="M_9_1"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">9.2</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de atenciones a HSH/Trans</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057a" id="nu_057a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_057a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057b" id="nu_057b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_057b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057c" id="nu_057c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_057c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057d" id="nu_057d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_057d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057e" id="nu_057e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_057e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_057f" id="nu_057f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_057f; ?>"/></td>
                                    <td class="o1"><output name="F_9_2"></output></td>
                                    <td class="o1"><output name="M_9_2"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">9.3</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de HSH/Trans  tamizados/as para VIH</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058a" id="nu_058a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_058a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058b" id="nu_058b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_058b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058c" id="nu_058c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_058c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058d" id="nu_058d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_058d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058e" id="nu_058e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_058e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_058f" id="nu_058f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_058f; ?>"/></td>
                                    <td class="o1"><output name="F_9_3"></output></td>
                                    <td class="o1"><output name="M_9_3"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">9.4</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº  HSH/Trans con tamizaje para VIH con resultado reactivo</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059a" id="nu_059a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_059a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059b" id="nu_059b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_059b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059c" id="nu_059c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_059c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059d" id="nu_059d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_059d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059e" id="nu_059e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_059e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_059f" id="nu_059f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_059f; ?>"/></td>
                                    <td class="o1"><output name="F_9_4"></output></td>
                                    <td class="o1"><output name="M_9_4"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">9.5</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº HSH/Trans  referidos/as a CERITS y UAMPs por PEPs</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060a" id="nu_060a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_060a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060b" id="nu_060b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_060b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060c" id="nu_060c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_060c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060d" id="nu_060d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_060d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060e" id="nu_060e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_060e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_060f" id="nu_060f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_060f; ?>"/></td>
                                    <td class="o1"><output name="F_9_5"></output></td>
                                    <td class="o1"><output name="M_9_5"></output></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">9.6</td>
                                    <td class="f1" scope="col" style="text-align:left;">N° HSH/Trans que inician Terapia Antiretroviral</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061a" id="nu_061a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_061a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061b" id="nu_061b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_061b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061c" id="nu_061c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_061c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061d" id="nu_061d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_061d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061e" id="nu_061e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_061e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_061f" id="nu_061f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_061f; ?>"/></td>
                                    <td class="o1"><output name="F_9_6"></output></td>
                                    <td class="o1"><output name="M_9_6"></output></td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2" rowspan="2" style="text-align:center;">10.-   POBLACION CLAVE: Hombres que tienen sexo con otros hombres / Trans : ITS</th>
                                    <th scope="col" colspan="3" style="text-align:center;">HSH</th>                                            
                                    <th scope="col" colspan="3" style="text-align:center;">Trans</th>
                                    <th scope="col" colspan="2" style="text-align:center; width: 150px;">Total</th> 
                                    <th scope="col" colspan="2" style="text-align:center; width: 150px;">Tratados</th>
                                    <th scope="col" rowspan="2" style="text-align:center; width: 150px;">Contactos</th>
                                    <th scope="col" rowspan="2" style="text-align:center; width: 150px;">Contactos tratados</th> 
                                </tr>                                
                                <tr>
                                    <th scope="col" style="text-align:center;">18-29a</th>                                            
                                    <th scope="col" style="text-align:center;">30-59a</th>
                                    <th scope="col" style="text-align:center;">60a más</th>                                            
                                    <th scope="col" style="text-align:center;">18-29a</th>                                            
                                    <th scope="col" style="text-align:center;">30-59a</th>
                                    <th scope="col" style="text-align:center;">60a más</th>
                                    <th scope="col" style="text-align:center; width: 150px;">HSH</th> 
                                    <th scope="col" style="text-align:center; width: 150px;">Trans</th>
                                    <th scope="col" style="text-align:center; width: 150px;">HSH</th> 
                                    <th scope="col" style="text-align:center; width: 150px;">Trans</th>
                                </tr>                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">10.1</td>
                                    <td class="f1" scope="col" style="text-align:left;"> Nº de personas con diagnóstico de ITS con manejo sindrómico</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062a" id="nu_062a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_062a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062b" id="nu_062b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_062b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062c" id="nu_062c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_062c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062d" id="nu_062d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_062d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062e" id="nu_062e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_062e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062f" id="nu_062f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_062f; ?>"/></td>
                                    <td class="o1"><output name="HSH_10_1"></output></td>
                                    <td class="o1"><output name="TRANS_10_1"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062g" id="nu_062g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_062g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062h" id="nu_062h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_062h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062i" id="nu_062i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_062i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_062j" id="nu_062j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_062j; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">10.2</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos con descarga uretral</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063a" id="nu_063a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_063a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063b" id="nu_063b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_063b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063c" id="nu_063c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_063c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063d" id="nu_063d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_063d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063e" id="nu_063e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_063e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063f" id="nu_063f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_063f; ?>"/></td>
                                    <td class="o1"><output name="HSH_10_2"></output></td>
                                    <td class="o1"><output name="TRANS_10_2"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063g" id="nu_063g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_063g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063h" id="nu_063h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_063h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063i" id="nu_063i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_063i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_063j" id="nu_063j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_063j; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">10.3</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos de úlcera genital</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064a" id="nu_064a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_064a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064b" id="nu_064b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_064b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064c" id="nu_064c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_064c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064d" id="nu_064d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_064d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064e" id="nu_064e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_064e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064f" id="nu_064f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_064f; ?>"/></td>
                                    <td class="o1"><output name="HSH_10_3"></output></td>
                                    <td class="o1"><output name="TRANS_10_3"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064g" id="nu_064g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_064g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064h" id="nu_064h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_064h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064i" id="nu_064i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_064i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_064j" id="nu_064j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_064j; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">10.4</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos de bubón inguinal</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065a" id="nu_065a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_065a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065b" id="nu_065b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_065b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065c" id="nu_065c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_065c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065d" id="nu_065d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_065d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065e" id="nu_065e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_065e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065f" id="nu_065f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_065f; ?>"/></td>
                                    <td class="o1"><output name="HSH_10_4"></output></td>
                                    <td class="o1"><output name="TRANS_10_4"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065g" id="nu_065g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_065g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065h" id="nu_065h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_065h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065i" id="nu_065i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_065i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_065j" id="nu_065j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_065j; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">10.5</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de personas con diagnóstico de ITS con manejo etiológico</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066a" id="nu_066a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_066a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066b" id="nu_066b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_066b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066c" id="nu_066c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_066c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066d" id="nu_066d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_066d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066e" id="nu_066e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_066e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066f" id="nu_066f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_066f; ?>"/></td>
                                    <td class="o1"><output name="HSH_10_5"></output></td>
                                    <td class="o1"><output name="TRANS_10_5"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066g" id="nu_066g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_066g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066h" id="nu_066h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_066h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066i" id="nu_066i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_066i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_066j" id="nu_066j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_066j; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">10.6</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos de gonorrea</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067a" id="nu_067a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_067a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067b" id="nu_067b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_067b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067c" id="nu_067c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_067c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067d" id="nu_067d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_067d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067e" id="nu_067e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_067e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067f" id="nu_067f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_067f; ?>"/></td>
                                    <td class="o1"><output name="HSH_10_6"></output></td>
                                    <td class="o1"><output name="TRANS_10_6"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067g" id="nu_067g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_067g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067h" id="nu_067h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_067h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067i" id="nu_067i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_067i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_067j" id="nu_067j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_067j; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="f1" scope="col" style="text-align:left;">10.7</td>
                                    <td class="f1" scope="col" style="text-align:left;">Nº de casos con serología reactiva para sífilis (>= 8 dil)</td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068a" id="nu_068a"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_068a; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068b" id="nu_068b"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_068b; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068c" id="nu_068c"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_068c; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068d" id="nu_068d"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_068d; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068e" id="nu_068e"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_068e; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068f" id="nu_068f"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_068f; ?>"/></td>
                                    <td class="o1"><output name="HSH_10_7"></output></td>
                                    <td class="o1"><output name="TRANS_10_7"></output></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068g" id="nu_068g"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_068g; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068h" id="nu_068h"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_068h; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068i" id="nu_068i"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_068i; ?>"/></td>
                                    <td><input class="text" maxlength="4" type="text" name="nu_068j" id="nu_068j"  onKeypress="return validaNum(event)" value="<?php echo $this->infits->nu_068j; ?>"/></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>        
        <script type="text/javascript">
            var options = {
                script: "index.php?option=com_nutritions&controller=person&task=getEncuestador&",
                varname: "encuestadorName",
                json: true,
                shownoresults: false,
                maxresults: 6,
                callback: function(obj) {
                    document.getElementById('nu_dni').value = obj.id;
                }
            };
            var as_json = new bsn.AutoSuggest('encuestador', options);
        </script>

        <script type="text/javascript">
            var options_es = {
                script: "index.php?option=com_nutritions&controller=establec&task=getEstablec&",
                varname: "establecName",
                json: true,
                shownoresults: false,
                maxresults: 6,
                callback: function(obj) {
                    document.getElementById('cod_2000').value = obj.id;
                }
            };
            var as_json_es = new bsn.AutoSuggest('establec', options_es);
        </script> 

    </div>

    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->infits->id_its; ?>" />
    <input type="hidden" name="id_its" value="<?php echo $this->infits->id_its; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="infits" />
</form>
