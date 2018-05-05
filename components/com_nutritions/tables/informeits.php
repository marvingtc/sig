<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class informeits extends JTable
{
    /** @var integer */
    var $id_its = null;
    var $cod_2000 = null;
    var $nu_dni = null;
    var $nu_ano = null;
    var $nu_mes = null;
    var $nu_poba = null;
    var $nu_pobb = null;
    var $nu_pobc = null;
    var $nu_pobd = null;
    var $nu_pobe = null;
    var $nu_pobf = null;
    var $nu_pobg = null;
    var $nu_pobh = null;
    var $nu_pobi = null;
    var $nu_pobj = null;
    
    var $nu_a1_1a = null;
    var $nu_a1_1b = null;
    var $nu_a1_1c = null;
    var $nu_a1_1d = null;
    var $nu_a1_1e = null;
    var $nu_a1_1f = null;
    var $nu_a1_1g = null;
    var $nu_a1_1h = null;
    var $nu_a1_1i = null;
    var $nu_a1_1j = null;
    var $nu_a1_1k = null;
    var $nu_a1_1l = null;
    var $nu_a1_1m = null;
    var $nu_a1_1n = null;
    var $nu_a1_1o = null;
    var $nu_a1_1p = null;
    var $nu_a1_1q = null;
    var $nu_a1_1r = null;
    var $nu_a1_1s = null;
    var $nu_a1_1t = null;
    var $nu_a1_1u = null;
    var $nu_a1_1v = null;

    var $nu_a2_1a = null;
    var $nu_a2_1b = null;
    var $nu_a2_1c = null;
    var $nu_a2_1d = null;
    var $nu_a2_1e = null;
    var $nu_a2_1f = null;
    var $nu_a2_1g = null;
    var $nu_a2_1h = null;
    var $nu_a2_1i = null;
    var $nu_a2_1j = null;
    var $nu_a2_1k = null;
    var $nu_a2_1l = null;
    var $nu_a2_1m = null;
    var $nu_a2_1n = null;
    var $nu_a2_1o = null;
    var $nu_a2_1p = null;
    var $nu_a2_1q = null;
    var $nu_a2_1r = null;
    var $nu_a2_1s = null;
    var $nu_a2_1t = null;
    var $nu_a2_1u = null;
    var $nu_a2_1v = null;

    var $nu_a3_2a = null;
    var $nu_a3_2b = null;
    var $nu_a3_2c = null;
    var $nu_a3_2d = null;
    var $nu_a3_2e = null;
    var $nu_a3_2f = null;
    var $nu_a3_2g = null;
    var $nu_a3_2h = null;
    var $nu_a3_2i = null;
    var $nu_a3_2j = null;

    var $nu_a4_2a = null;
    var $nu_a4_2b = null;
    var $nu_a4_2c = null;
    var $nu_a4_2d = null;
    var $nu_a4_2e = null;
    var $nu_a4_2f = null;
    var $nu_a4_2g = null;
    var $nu_a4_2h = null;
    var $nu_a4_2i = null;
    var $nu_a4_2j = null;

    var $nu_a5_2a = null;
    var $nu_a5_2b = null;
    var $nu_a5_2c = null;
    var $nu_a5_2d = null;
    var $nu_a5_2e = null;
    var $nu_a5_2f = null;
    var $nu_a5_2g = null;
    var $nu_a5_2h = null;
    var $nu_a5_2i = null;
    var $nu_a5_2j = null;

    var $nu_a6_3a = null;
    var $nu_a6_3b = null;
    var $nu_a6_3c = null;
    var $nu_a6_3d = null;
    var $nu_a6_3e = null;
    var $nu_a6_3f = null;
    var $nu_a6_3g = null;
    var $nu_a6_3h = null;
    var $nu_a6_3i = null;
    var $nu_a6_3j = null;

    var $nu_a7_3a = null;
    var $nu_a7_3b = null;
    var $nu_a7_3c = null;
    var $nu_a7_3d = null;
    var $nu_a7_3e = null;
    var $nu_a7_3f = null;
    var $nu_a7_3g = null;
    var $nu_a7_3h = null;
    var $nu_a7_3i = null;
    var $nu_a7_3j = null;

    var $nu_a8_4a = null;
    var $nu_a8_4b = null;
    var $nu_a8_4c = null;
    var $nu_a8_4d = null;
    var $nu_a8_4e = null;
    var $nu_a8_4f = null;
    var $nu_a8_4g = null;
    var $nu_a8_4h = null;
    var $nu_a8_4i = null;
    var $nu_a8_4j = null;

    var $nu_a9_4a = null;
    var $nu_a9_4b = null;
    var $nu_a9_4c = null;
    var $nu_a9_4d = null;
    var $nu_a9_4e = null;
    var $nu_a9_4f = null;
    var $nu_a9_4g = null;
    var $nu_a9_4h = null;
    var $nu_a9_4i = null;
    var $nu_a9_4j = null;

    var $nu_a10_5a = null;
    var $nu_a10_5b = null;
    var $nu_a10_5c = null;
    var $nu_a10_5d = null;
    var $nu_a10_5e = null;
    var $nu_a10_5f = null;
    var $nu_a10_5g = null;
    var $nu_a10_5h = null;
    var $nu_a10_5i = null;
    var $nu_a10_5j = null;

    var $nu_a11_5a = null;
    var $nu_a11_5b = null;
    var $nu_a11_5c = null;
    var $nu_a11_5d = null;
    var $nu_a11_5e = null;
    var $nu_a11_5f = null;
    var $nu_a11_5g = null;
    var $nu_a11_5h = null;
    var $nu_a11_5i = null;
    var $nu_a11_5j = null;

    var $nu_a12_6 = null;
    var $nu_a12_6a = null;
    var $nu_a12_6b = null;
    var $nu_a12_6c = null;
    var $nu_a12_6d = null;
    var $nu_a12_6e = null;
    var $nu_a12_6f = null;

    var $nu_a13_6a = null;
    var $nu_a13_6b = null;
    var $nu_a13_6c = null;
    var $nu_a13_6d = null;
    var $nu_a13_6e = null;
    var $nu_a13_6f = null;

    var $nu_a14_6a = null;
    var $nu_a14_6b = null;
    var $nu_a14_6c = null;
    var $nu_a14_6d = null;
    var $nu_a14_6e = null;
    var $nu_a14_6f = null;

    var $nu_a15_6a = null;
    var $nu_a15_6b = null;
    var $nu_a15_6c = null;
    var $nu_a15_6d = null;
    var $nu_a15_6e = null;
    var $nu_a15_6f = null;

    var $nu_a16_6a = null;
    var $nu_a16_6b = null;
    var $nu_a16_6c = null;
    var $nu_a16_6d = null;
    var $nu_a16_6e = null;
    var $nu_a16_6f = null;

    var $nu_a17_6a = null;
    var $nu_a17_6b = null;
    var $nu_a17_6c = null;
    var $nu_a17_6d = null;
    var $nu_a17_6e = null;
    var $nu_a17_6f = null;

    var $nu_a18_6a = null;
    var $nu_a18_6b = null;
    var $nu_a18_6c = null;
    var $nu_a18_6d = null;
    var $nu_a18_6e = null;
    var $nu_a18_6f = null;

    var $nu_a19_6a = null;

    var $nu_a20_6a = null;
    var $nu_a20_6b = null;

    var $nu_a21_7a = null;
    var $nu_a21_7b = null;
    var $nu_a21_7c = null;
    var $nu_a21_7d = null;
    var $nu_a21_7e = null;
    var $nu_a21_7f = null;
    var $nu_a21_7g = null;
    var $nu_a21_7h = null;
    var $nu_a21_7i = null;

    var $nu_a22_7a = null;
    var $nu_a22_7b = null;
    var $nu_a22_7c = null;
    var $nu_a22_7d = null;
    var $nu_a22_7e = null;
    var $nu_a22_7f = null;
    var $nu_a22_7g = null;
    var $nu_a22_7h = null;
    var $nu_a22_7i = null;

    var $nu_a23_7a = null;
    var $nu_a23_7b = null;
    var $nu_a23_7c = null;
    var $nu_a23_7d = null;
    var $nu_a23_7e = null;
    var $nu_a23_7f = null;
    var $nu_a23_7g = null;
    var $nu_a23_7h = null;
    var $nu_a23_7i = null;

    var $nu_a24_7a = null;
    var $nu_a24_7b = null;
    var $nu_a24_7c = null;
    var $nu_a24_7d = null;
    var $nu_a24_7e = null;
    var $nu_a24_7f = null;
    var $nu_a24_7g = null;
    var $nu_a24_7h = null;
    var $nu_a24_7i = null;

    var $nu_a25_7a = null;
    var $nu_a25_7b = null;
    var $nu_a25_7c = null;
    var $nu_a25_7d = null;
    var $nu_a25_7e = null;
    var $nu_a25_7f = null;
    var $nu_a25_7g = null;
    var $nu_a25_7h = null;
    var $nu_a25_7i = null;

    var $nu_a26_9a = null;
    var $nu_a26_9b = null;
    var $nu_a26_9c = null;
    var $nu_a26_9d = null;
    var $nu_a26_9e = null;
    var $nu_a26_9f = null;

    var $nu_a27_9a = null;
    var $nu_a27_9b = null;
    var $nu_a27_9c = null;
    var $nu_a27_9d = null;
    var $nu_a27_9e = null;
    var $nu_a27_9f = null;

    var $nu_a28_9a = null;
    var $nu_a28_9b = null;
    var $nu_a28_9c = null;
    var $nu_a28_9d = null;
    var $nu_a28_9e = null;
    var $nu_a28_9f = null;

    var $nu_a29_9a = null;
    var $nu_a29_9b = null;
    var $nu_a29_9c = null;
    var $nu_a29_9d = null;
    var $nu_a29_9e = null;
    var $nu_a29_9f = null;
    
    var $nu_001a = null;
    var $nu_001b = null;
    var $nu_001c = null;
    var $nu_001d = null;
    var $nu_001e = null;
    var $nu_001f = null;
    var $nu_001g = null;
    var $nu_001h = null;
    var $nu_001i = null;
    var $nu_001j = null;
    var $nu_001k = null;
    var $nu_001l = null;
    var $nu_001m = null;
    var $nu_001n = null;
    var $nu_001o = null;
    var $nu_001p = null;
    var $nu_001q = null;
    var $nu_001r = null;
    var $nu_001s = null;
    var $nu_001t = null;
    var $nu_001u = null;
    var $nu_001v = null;
    
    var $nu_002a = null;
    var $nu_002b = null;
    var $nu_002c = null;
    var $nu_002d = null;
    var $nu_002e = null;
    var $nu_002f = null;
    var $nu_002g = null;
    var $nu_002h = null;
    var $nu_002i = null;
    var $nu_002j = null;
    var $nu_002k = null;
    var $nu_002l = null;
    
    var $nu_003a = null;
    var $nu_003b = null;
    var $nu_003c = null;
    var $nu_003d = null;
    var $nu_003e = null;
    var $nu_003f = null;
    var $nu_003g = null;
    var $nu_003h = null;
    var $nu_003i = null;
    var $nu_003j = null;
    var $nu_003k = null;
    var $nu_003l = null;
    
    var $nu_004a = null;
    var $nu_004b = null;
    var $nu_004c = null;
    var $nu_004d = null;
    var $nu_004e = null;
    var $nu_004f = null;
    var $nu_004g = null;
    var $nu_004h = null;
    var $nu_004i = null;
    var $nu_004j = null;
    var $nu_004k = null;
    var $nu_004l = null;
    var $nu_004m = null;
    var $nu_004n = null;
    var $nu_004o = null;
    var $nu_004p = null;
    var $nu_004q = null;
    var $nu_004r = null;
    var $nu_004s = null;
    var $nu_004t = null;
    var $nu_004u = null;
    var $nu_004v = null;
    
    var $nu_005a = null;
    var $nu_005b = null;
    var $nu_005c = null;
    var $nu_005d = null;
    var $nu_005e = null;
    var $nu_005f = null;
    var $nu_005g = null;
    var $nu_005h = null;
    var $nu_005i = null;
    var $nu_005j = null;
    var $nu_005k = null;
    var $nu_005l = null;
    var $nu_005m = null;
    var $nu_005n = null;
    var $nu_005o = null;
    var $nu_005p = null;
    var $nu_005q = null;
    var $nu_005r = null;
    var $nu_005s = null;
    var $nu_005t = null;
    var $nu_005u = null;
    var $nu_005v = null;
    
    var $nu_006a = null;
    var $nu_006b = null;
    var $nu_006c = null;
    var $nu_006d = null;
    var $nu_006e = null;
    var $nu_006f = null;
    var $nu_006g = null;
    var $nu_006h = null;
    var $nu_006i = null;
    var $nu_006j = null;
    var $nu_006k = null;
    var $nu_006l = null;
    
    var $nu_007a = null;
    var $nu_007b = null;
    var $nu_007c = null;
    var $nu_007d = null;
    var $nu_007e = null;
    var $nu_007f = null;
    var $nu_007g = null;
    var $nu_007h = null;
    var $nu_007i = null;
    var $nu_007j = null;
    var $nu_007k = null;
    var $nu_007l = null;
    var $nu_007m = null;
    var $nu_007n = null;
    var $nu_007o = null;
    var $nu_007p = null;
    var $nu_007q = null;
    var $nu_007r = null;
    var $nu_007s = null;
    var $nu_007t = null;
    var $nu_007u = null;
    var $nu_007v = null;
    
    var $nu_008a = null;
    var $nu_008b = null;
    var $nu_008c = null;
    var $nu_008d = null;
    var $nu_008e = null;
    var $nu_008f = null;
    var $nu_008g = null;
    var $nu_008h = null;
    
    var $nu_009a = null;
    var $nu_009b = null;
    var $nu_009c = null;
    var $nu_009d = null;
    var $nu_009e = null;
    var $nu_009f = null;
    var $nu_009g = null;
    var $nu_009h = null;
    var $nu_009i = null;
    var $nu_009j = null;
    
    var $nu_010a = null;
    var $nu_010b = null;
    var $nu_010c = null;
    var $nu_010d = null;
    var $nu_010e = null;
    var $nu_010f = null;
    var $nu_010g = null;
    var $nu_010h = null;
    var $nu_010i = null;
    var $nu_010j = null;
    
    var $nu_011a = null;
    var $nu_011b = null;
    var $nu_011c = null;
    var $nu_011d = null;
    var $nu_011e = null;
    var $nu_011f = null;
    var $nu_011g = null;
    var $nu_011h = null;
    var $nu_011i = null;
    var $nu_011j = null;
    
    var $nu_012a = null;
    var $nu_012b = null;
    var $nu_012c = null;
    var $nu_012d = null;
    var $nu_012e = null;
    var $nu_012f = null;
    var $nu_012g = null;
    var $nu_012h = null;
    var $nu_012i = null;
    var $nu_012j = null;
    
    var $nu_013a = null;
    var $nu_013b = null;
    var $nu_013c = null;
    var $nu_013d = null;
    var $nu_013e = null;
    var $nu_013f = null;
    var $nu_013g = null;
    var $nu_013h = null;
    var $nu_013i = null;
    var $nu_013j = null;
    
    var $nu_014a = null;
    var $nu_014b = null;
    var $nu_014c = null;
    var $nu_014d = null;
    var $nu_014e = null;
    var $nu_014f = null;
    var $nu_014g = null;
    var $nu_014h = null;
    var $nu_014i = null;
    var $nu_014j = null;

    var $nu_015a = null;
    var $nu_015b = null;
    var $nu_015c = null;
    var $nu_015d = null;
    var $nu_015e = null;
    var $nu_015f = null;
    var $nu_015g = null;
    var $nu_015h = null;
    var $nu_015i = null;
    var $nu_015j = null;
    
    var $nu_016a = null;
    var $nu_016b = null;
    var $nu_016c = null;
    var $nu_016d = null;
    var $nu_016e = null;
    var $nu_016f = null;
    var $nu_016g = null;
    var $nu_016h = null;
    var $nu_016i = null;
    var $nu_016j = null;
    
    var $nu_017a = null;
    var $nu_017b = null;
    var $nu_017c = null;
    var $nu_017d = null;
    var $nu_017e = null;
    var $nu_017f = null;
    var $nu_017g = null;
    var $nu_017h = null;
    var $nu_017i = null;
    var $nu_017j = null;

    var $nu_018a = null;
    var $nu_018b = null;
    var $nu_018c = null;
    var $nu_018d = null;
    var $nu_018e = null;
    var $nu_018f = null;
    var $nu_018g = null;
    var $nu_018h = null;
    var $nu_018i = null;
    var $nu_018j = null;
    
    var $nu_019a = null;
    var $nu_019b = null;
    var $nu_019c = null;
    var $nu_019d = null;
    var $nu_019e = null;
    var $nu_019f = null;
    var $nu_019g = null;
    var $nu_019h = null;
    var $nu_019i = null;
    var $nu_019j = null;
    
    var $nu_020a = null;
    var $nu_020b = null;
    var $nu_020c = null;
    var $nu_020d = null;
    var $nu_020e = null;
    var $nu_020f = null;
    var $nu_020g = null;
    var $nu_020h = null;
    var $nu_020i = null;
    var $nu_020j = null;
    
    var $nu_021a = null;
    var $nu_021b = null;
    var $nu_021c = null;
    var $nu_021d = null;
    var $nu_021e = null;
    var $nu_021f = null;
    var $nu_021g = null;
    var $nu_021h = null;
    var $nu_021i = null;
    var $nu_021j = null;
    
    var $nu_022a = null;
    var $nu_022b = null;
    var $nu_022c = null;
    var $nu_022d = null;
    var $nu_022e = null;
    var $nu_022f = null;
    var $nu_022g = null;
    var $nu_022h = null;
    var $nu_022i = null;
    var $nu_022j = null;
    
    var $nu_023a = null;
    var $nu_023b = null;
    var $nu_023c = null;
    var $nu_023d = null;
    var $nu_023e = null;
    var $nu_023f = null;
    var $nu_023g = null;
    var $nu_023h = null;
    var $nu_023i = null;
    var $nu_023j = null;
    
    var $nu_024a = null;
    var $nu_024b = null;
    var $nu_024c = null;
    var $nu_024d = null;
    var $nu_024e = null;
    var $nu_024f = null;
    var $nu_024g = null;
    var $nu_024h = null;
    var $nu_024i = null;
    var $nu_024j = null;
    
    var $nu_025a = null;
    var $nu_025b = null;
    var $nu_025c = null;
    var $nu_025d = null;
    var $nu_025e = null;
    var $nu_025f = null;
    var $nu_025g = null;
    var $nu_025h = null;
    var $nu_025i = null;
    var $nu_025j = null;
    
    var $nu_026a = null;
    var $nu_026b = null;
    var $nu_026c = null;
    var $nu_026d = null;
    var $nu_026e = null;
    var $nu_026f = null;
    var $nu_026g = null;
    var $nu_026h = null;
    var $nu_026i = null;
    var $nu_026j = null;
    
    var $nu_027a = null;
    var $nu_027b = null;
    var $nu_027c = null;
    var $nu_027d = null;
    var $nu_027e = null;
    var $nu_027f = null;
    var $nu_027g = null;
    var $nu_027h = null;
    var $nu_027i = null;
    var $nu_027j = null;
    
    var $nu_028a = null;
    var $nu_028b = null;
    var $nu_028c = null;
    var $nu_028d = null;
    var $nu_028e = null;
    var $nu_028f = null;
    var $nu_028g = null;
    var $nu_028h = null;
    var $nu_028i = null;
    var $nu_028j = null;
    
    var $nu_029a = null;
    var $nu_029b = null;
    var $nu_029c = null;
    var $nu_029d = null;
    var $nu_029e = null;
    var $nu_029f = null;
   
    var $nu_030a = null;
   
    var $nu_031a = null;
    var $nu_031b = null;
    var $nu_031c = null;
    var $nu_031d = null;
    var $nu_031e = null;
    var $nu_031f = null;
    
    var $nu_032a = null;
    var $nu_032b = null;
    var $nu_032c = null;
    
    var $nu_033a = null;
   
    var $nu_034a = null;
   
    var $nu_035a = null;
    var $nu_035b = null;
    var $nu_035c = null;
    var $nu_035d = null;
    var $nu_035e = null;
    var $nu_035f = null;
    
    var $nu_037a = null;
    var $nu_037b = null;
    var $nu_037c = null;
    
    var $nu_038a = null;
    var $nu_038b = null;
    var $nu_038c = null;
    
    var $nu_039a = null;
    var $nu_039b = null;
    var $nu_039c = null;
    
    var $nu_040a = null;
    var $nu_040b = null;
    var $nu_040c = null;
    var $nu_040d = null;
    var $nu_040e = null;
    var $nu_040f = null;
    var $nu_040g = null;
    var $nu_040h = null;
    var $nu_040i = null;
    
    var $nu_041a = null;
    var $nu_041b = null;
    var $nu_041c = null;
    var $nu_041d = null;
    var $nu_041e = null;
    var $nu_041f = null;
    var $nu_041g = null;
    var $nu_041h = null;
    var $nu_041i = null;

    var $nu_042a = null;
    var $nu_042b = null;
    var $nu_042c = null;
    var $nu_042d = null;
    var $nu_042e = null;
    var $nu_042f = null;
    var $nu_042g = null;
    var $nu_042h = null;
    var $nu_042i = null;

    var $nu_043a = null;
    var $nu_043b = null;
    var $nu_043c = null;
    var $nu_043d = null;
    var $nu_043e = null;
    var $nu_043f = null;
    var $nu_043g = null;
    var $nu_043h = null;
    var $nu_043i = null;

    var $nu_044a = null;
    var $nu_044b = null;
    var $nu_044c = null;
    var $nu_044d = null;
    var $nu_044e = null;
    var $nu_044f = null;
    var $nu_044g = null;
    var $nu_044h = null;
    var $nu_044i = null;

    var $nu_045a = null;
    var $nu_045b = null;
    var $nu_045c = null;
    var $nu_045d = null;
    var $nu_045e = null;
    var $nu_045f = null;
    var $nu_045g = null;
    var $nu_045h = null;
    var $nu_045i = null;

    var $nu_046a = null;
    var $nu_046b = null;
    var $nu_046c = null;
    var $nu_046d = null;
    var $nu_046e = null;
    var $nu_046f = null;
    var $nu_046g = null;
    var $nu_046h = null;
    var $nu_046i = null;
    var $nu_046j = null;
    var $nu_046k = null;
    var $nu_046l = null;
    var $nu_046m = null;
    var $nu_046n = null;
    
    var $nu_047a = null;
    var $nu_047b = null;
    var $nu_047c = null;
    var $nu_047d = null;
    var $nu_047e = null;
    var $nu_047f = null;
    var $nu_047g = null;
    var $nu_047h = null;
    var $nu_047i = null;
    var $nu_047j = null;
    var $nu_047k = null;
    
    var $nu_048a = null;
    var $nu_048b = null;
    var $nu_048c = null;
    var $nu_048d = null;
    var $nu_048e = null;
    var $nu_048f = null;
    
    var $nu_049a = null;
    var $nu_049b = null;
    var $nu_049c = null;
    var $nu_049d = null;
    var $nu_049e = null;
    var $nu_049f = null;
    var $nu_049g = null;
    var $nu_049h = null;
    var $nu_049i = null;
    var $nu_049j = null;
    var $nu_049k = null;
    var $nu_049l = null;
    var $nu_049m = null;
    var $nu_049n = null;
    
    var $nu_050a = null;
    var $nu_050b = null;
    var $nu_050c = null;
    var $nu_050d = null;
    var $nu_050e = null;
    var $nu_050f = null;
    var $nu_050g = null;
    var $nu_050h = null;
    var $nu_050i = null;
    var $nu_050j = null;
    var $nu_050k = null;
    var $nu_050l = null;
    var $nu_050m = null;
    var $nu_050n = null;
    
    var $nu_051a = null;
    var $nu_051b = null;
    var $nu_051c = null;
    var $nu_051d = null;
    var $nu_051e = null;
    var $nu_051f = null;
    
    var $nu_052a = null;
    var $nu_052b = null;
    var $nu_052c = null;
    var $nu_052d = null;
    var $nu_052e = null;
    var $nu_052f = null;
    var $nu_052g = null;
    var $nu_052h = null;
    var $nu_052i = null;
    var $nu_052j = null;
    var $nu_052k = null;
    var $nu_052l = null;
    var $nu_052m = null;
    var $nu_052n = null;
    
    var $nu_053a = null;
    var $nu_053b = null;
    var $nu_053c = null;
    var $nu_053d = null;
    var $nu_053e = null;
    var $nu_053f = null;
    
    var $nu_054a = null;
    var $nu_054b = null;
    var $nu_054c = null;
    var $nu_054d = null;
    var $nu_054e = null;
    var $nu_054f = null;
    var $nu_054g = null;
    var $nu_054h = null;
    var $nu_054i = null;
    var $nu_054j = null;
    var $nu_054k = null;
    var $nu_054l = null;
    var $nu_054m = null;
    var $nu_054n = null;
    
    var $nu_055a = null;
    var $nu_055b = null;
    var $nu_055c = null;
    var $nu_055d = null;
    var $nu_055e = null;
    var $nu_055f = null;
    var $nu_055g = null;
    var $nu_055h = null;
    var $nu_055i = null;
    var $nu_055j = null;
    var $nu_055k = null;
    var $nu_055l = null;
    var $nu_055m = null;
    var $nu_055n = null;
    
    var $nu_056a = null;
    var $nu_056b = null;
    var $nu_056c = null;
    var $nu_056d = null;
    var $nu_056e = null;
    var $nu_056f = null;
    
    var $nu_057a = null;
    var $nu_057b = null;
    var $nu_057c = null;
    var $nu_057d = null;
    var $nu_057e = null;
    var $nu_057f = null;

    
    var $nu_058a = null;
    var $nu_058b = null;
    var $nu_058c = null;
    var $nu_058d = null;
    var $nu_058e = null;
    var $nu_058f = null;
    
    var $nu_059a = null;
    var $nu_059b = null;
    var $nu_059c = null;
    var $nu_059d = null;
    var $nu_059e = null;
    var $nu_059f = null;
    
    var $nu_060a = null;
    var $nu_060b = null;
    var $nu_060c = null;
    var $nu_060d = null;
    var $nu_060e = null;
    var $nu_060f = null;
  
    var $nu_061a = null;
    var $nu_061b = null;
    var $nu_061c = null;
    var $nu_061d = null;
    var $nu_061e = null;
    var $nu_061f = null;
    
    var $nu_062a = null;
    var $nu_062b = null;
    var $nu_062c = null;
    var $nu_062d = null;
    var $nu_062e = null;
    var $nu_062f = null;
    var $nu_062g = null;
    var $nu_062h = null;
    var $nu_062i = null;
    var $nu_062j = null;
    
    var $nu_063a = null;
    var $nu_063b = null;
    var $nu_063c = null;
    var $nu_063d = null;
    var $nu_063e = null;
    var $nu_063f = null;
    var $nu_063g = null;
    var $nu_063h = null;
    var $nu_063i = null;
    var $nu_063j = null;
    
    var $nu_064a = null;
    var $nu_064b = null;
    var $nu_064c = null;
    var $nu_064d = null;
    var $nu_064e = null;
    var $nu_064f = null;
    var $nu_064g = null;
    var $nu_064h = null;
    var $nu_064i = null;
    var $nu_064j = null;
    
    var $nu_065a = null;
    var $nu_065b = null;
    var $nu_065c = null;
    var $nu_065d = null;
    var $nu_065e = null;
    var $nu_065f = null;
    var $nu_065g = null;
    var $nu_065h = null;
    var $nu_065i = null;
    var $nu_065j = null;
    
    var $nu_066a = null;
    var $nu_066b = null;
    var $nu_066c = null;
    var $nu_066d = null;
    var $nu_066e = null;
    var $nu_066f = null;
    var $nu_066g = null;
    var $nu_066h = null;
    var $nu_066i = null;
    var $nu_066j = null;
    
    var $nu_067a = null;
    var $nu_067b = null;
    var $nu_067c = null;
    var $nu_067d = null;
    var $nu_067e = null;
    var $nu_067f = null;
    var $nu_067g = null;
    var $nu_067h = null;
    var $nu_067i = null;
    var $nu_067j = null;

    var $nu_068a = null;
    var $nu_068b = null;
    var $nu_068c = null;
    var $nu_068d = null;
    var $nu_068e = null;
    var $nu_068f = null;
    var $nu_068g = null;
    var $nu_068h = null;
    var $nu_068i = null;
    var $nu_068j = null;
   

    function informeits(& $db) {        
        parent::__construct('inf_its', 'id_its', $db);
    }

}

?>
