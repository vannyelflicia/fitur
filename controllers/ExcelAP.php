<?php
Class ExcelAP extends CI_Controller{
    
    function __construct() {
        parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('pagemodel');
    }
    
    function cetakAP(){
        $this->load->helper('url');
        $this->load->model('pagemodel');
        $this->load->library("excel");
        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Sample Sheet');
        $object->getActiveSheet()->getStyle("A1:Y1")->applyFromArray(
                array(
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => '#4169E1')
                    ),
                    'font' => array(
                        'color' => array('rgb' => '#FFFFFF')
                    )
                )
            );
        $object->getActiveSheet()->getStyle("Z1:CL1")->applyFromArray(
                array(
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => '#483D8B')
                    ),
                    'font' => array(
                        'color' => array('rgb' => '#FFFFFF')
                    )
                )
            );
            
        $table_columns = array(
            "No Transaksi" , "IMO" , "No. & Size Container" , "Name CUST" , "No. Shipment 1" ,"No. Shipment 2", "No. Seal" , "Full / Empty" ,"Reefer / Dry" ,"Stuffing Date" ,"Container In / Out" ,"Origin Town" , "Destination Town" , "Vessel Name" , "Delivery From JKT (ETD)" , "Arv At Dest (ETA)" ,"Tanggal Container Masuk", "Remark","Tanggal Dooring Container" , "No. Shipment ULI HUB 1" ,"Tujuan Shipment ULI HUB 1" , "Tgl Dooring Shipment ULI HUB 1" ,"No. Shipment ULI HUB 2" ,"Tujuan Shipment ULI HUB 2" ,"Tgl Dooring Shipment ULI HUB 2" ,
            //25
            "Name AGEN" ,"Invoice No. AGEN" ,"Invoice AGEN date" ,"Tgl Terima Invoice" ,"Invoice AGEN Amount" ,"Payment amount AGEN" ,"Payment Date AGEN" ,"No B/L","Pembayaran", 
            "Invoice No. GENSET" , "Invoice GENSET date" , "Tgl Terima Invoice" , "Invoice GENSET Amount" , "Payment GENSET" , "Payment Date GENSET" ,
            "Invoice No. BJTI" , "Invoice BJTI date" , "Tgl Terima Invoice" , "Invoice BJTI Amount" , "Payment BJTI" , "Payment Date BJTI" , 
            "Name SHIP" , "Invoice No. SHIP" , "Invoice SHIP date" , "Tgl Terima Invoice" , "Invoice SHIP Amount" , "Payment SHIP" , "Payment Date SHIP" , 
            "Invoice No. THC" , "Invoice THC date" , "Tgl Terima Invoice" , "Invoice THC Amount" , "Payment THC" , "Payment Date THC" , 
            "Invoice No. PLUG" , "Invoice PLUG date" , "Tgl Terima Invoice" , "Invoice PLUG Amount" , "Payment PLUG" , "Payment Date PLUG" ,  "Tanggal Kirim Dokumen ke AR" ,
            "Invoice No. Buruh" , "Invoice Buruh date" , "Tgl Terima Invoice" , "Invoice Buruh Amount" , "Payment Buruh" , "Payment Date Buruh" , 
            "No. Invoice Shipment ULI HUB 1" , "Tgl Invoice Shipment ULI HUB 1" , "Tgl Terima Invoice" , "Invoice Shipment ULI HUB 1 Amount" , "Payment Shipment ULI HUB 1" , "Payment Date Shipment ULI HUB 1" , 
            "No. Invoice Shipment ULI HUB 2" , "Tgl Invoice Shipment ULI HUB 2" , "Tgl Terima Invoice" , "Invoice Shipment ULI HUB 2 Amount" , "Payment Shipment ULI HUB 2" ,"Payment Date Shipment ULI HUB 2" , 
            "Invoice No. LAIN" , "Invoice LAIN date" , "Tgl Terima Invoice" , "Invoice LAIN Amount" , "Payment LAIN" , "Payment Date LAIN" ,
            //65
            );
        $column = 0;

        foreach($table_columns as $field)
        {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }

        $AllData = $this->pagemodel->getAP();

        $excel_row = 2;

        foreach($AllData as $row)
        {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->no_transaksi);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->IMO);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->no_container);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->name_cust); 
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->no_shipment); 
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->no_shipment2);             
            
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->no_seal); 
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->full_empty); 
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->reefer_dry); 
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->stuff_date);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->in_out); 
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->origin_town);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->dest_town);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->vessel_name);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->deliv_date);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->arv_at_dest);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->tgl_kon_masuk);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->remark_op);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->tgl_door );
            $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->no_ship_uli );

            $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->tuj_ship_uli);
            $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->tgl_door_uli);
            $object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->no_ship_uli2);
            
            $object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->tuj_ship_uli2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->tgl_door_uli2);
            //OP
            $object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->name_ag);
            $object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row->inv_ag);
            $object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row->inv_ag_date);
            $object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row->tgl_trima_inv_ag);
            $object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row->inv_ag_am);
            $object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->pay_ag);
            $object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row->date_ag);
            $object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row->no_bl);
            $object->getActiveSheet()->setCellValueByColumnAndRow(33, $excel_row, $row->no_pem);

            $object->getActiveSheet()->setCellValueByColumnAndRow(34, $excel_row, $row->inv_genset);
            $object->getActiveSheet()->setCellValueByColumnAndRow(35, $excel_row, $row->inv_genset_date);
            $object->getActiveSheet()->setCellValueByColumnAndRow(36, $excel_row, $row->tgl_trima_inv_genset);
            $object->getActiveSheet()->setCellValueByColumnAndRow(37, $excel_row, $row->inv_genset_am);
            $object->getActiveSheet()->setCellValueByColumnAndRow(38, $excel_row, $row->pay_genset);
            $object->getActiveSheet()->setCellValueByColumnAndRow(39, $excel_row, $row->date_genset);

            $object->getActiveSheet()->setCellValueByColumnAndRow(40, $excel_row, $row->inv_bjti);
            $object->getActiveSheet()->setCellValueByColumnAndRow(41, $excel_row, $row->inv_date_bjti);
            $object->getActiveSheet()->setCellValueByColumnAndRow(42, $excel_row, $row->tgl_trima_inv_bjti);
            $object->getActiveSheet()->setCellValueByColumnAndRow(43, $excel_row, $row->inv_bjti_am);
            $object->getActiveSheet()->setCellValueByColumnAndRow(44, $excel_row, $row->pay_bjti);
            $object->getActiveSheet()->setCellValueByColumnAndRow(45, $excel_row, $row->date_bjti);

            $object->getActiveSheet()->setCellValueByColumnAndRow(46, $excel_row, $row->name_ship);
            $object->getActiveSheet()->setCellValueByColumnAndRow(47, $excel_row, $row->inv_ship);
            $object->getActiveSheet()->setCellValueByColumnAndRow(48, $excel_row, $row->inv_ship_date);
            $object->getActiveSheet()->setCellValueByColumnAndRow(49, $excel_row, $row->tgl_trima_inv_ship);
            $object->getActiveSheet()->setCellValueByColumnAndRow(50, $excel_row, $row->inv_ship_am);
            $object->getActiveSheet()->setCellValueByColumnAndRow(51, $excel_row, $row->pay_ship);
            $object->getActiveSheet()->setCellValueByColumnAndRow(52, $excel_row, $row->date_ship);

            $object->getActiveSheet()->setCellValueByColumnAndRow(53, $excel_row, $row->inv_thc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(54, $excel_row, $row->inv_thc_date);
            $object->getActiveSheet()->setCellValueByColumnAndRow(55, $excel_row, $row->tgl_trima_inv_thc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(56, $excel_row, $row->inv_thc_am);
            $object->getActiveSheet()->setCellValueByColumnAndRow(57, $excel_row, $row->pay_thc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(58, $excel_row, $row->date_thc);

            $object->getActiveSheet()->setCellValueByColumnAndRow(59, $excel_row, $row->inv_plug);
            $object->getActiveSheet()->setCellValueByColumnAndRow(60, $excel_row, $row->inv_plug_date);
            $object->getActiveSheet()->setCellValueByColumnAndRow(61, $excel_row, $row->tgl_trima_inv_plug);
            $object->getActiveSheet()->setCellValueByColumnAndRow(62, $excel_row, $row->inv_plug_am);
            $object->getActiveSheet()->setCellValueByColumnAndRow(63, $excel_row, $row->pay_plug);
            $object->getActiveSheet()->setCellValueByColumnAndRow(64, $excel_row, $row->date_plug);
            $object->getActiveSheet()->setCellValueByColumnAndRow(65, $excel_row, $row->tgl_kirim_plug_ar);

            $object->getActiveSheet()->setCellValueByColumnAndRow(66, $excel_row, $row->inv_buruh);
            $object->getActiveSheet()->setCellValueByColumnAndRow(67, $excel_row, $row->inv_buruh_date);
            $object->getActiveSheet()->setCellValueByColumnAndRow(68, $excel_row, $row->tgl_trima_inv_buruh);
            $object->getActiveSheet()->setCellValueByColumnAndRow(69, $excel_row, $row->inv_buruh_am);
            $object->getActiveSheet()->setCellValueByColumnAndRow(70, $excel_row, $row->pay_buruh);
            $object->getActiveSheet()->setCellValueByColumnAndRow(71, $excel_row, $row->date_buruh);

            $object->getActiveSheet()->setCellValueByColumnAndRow(72, $excel_row, $row->inv_uli);
            $object->getActiveSheet()->setCellValueByColumnAndRow(73, $excel_row, $row->tgl_inv_uli);
            $object->getActiveSheet()->setCellValueByColumnAndRow(74, $excel_row, $row->tgl_trima_uli);
            $object->getActiveSheet()->setCellValueByColumnAndRow(75, $excel_row, $row->inv_uli_am);
            $object->getActiveSheet()->setCellValueByColumnAndRow(76, $excel_row, $row->pay_ship_uli);
            $object->getActiveSheet()->setCellValueByColumnAndRow(77, $excel_row, $row->pay_date_uli);
            $object->getActiveSheet()->setCellValueByColumnAndRow(78, $excel_row, $row->inv_uli2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(79, $excel_row, $row->tgl_inv_uli2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(80, $excel_row, $row->tgl_trima_uli2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(81, $excel_row, $row->inv_uli_am2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(82, $excel_row, $row->pay_ship_uli2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(83, $excel_row, $row->pay_date_uli2);

            $object->getActiveSheet()->setCellValueByColumnAndRow(84, $excel_row, $row->inv_lain);
            $object->getActiveSheet()->setCellValueByColumnAndRow(85, $excel_row, $row->inv_lain_date);
            $object->getActiveSheet()->setCellValueByColumnAndRow(86, $excel_row, $row->tgl_trima_inv_lain);
            $object->getActiveSheet()->setCellValueByColumnAndRow(87, $excel_row, $row->inv_lain_am);
            $object->getActiveSheet()->setCellValueByColumnAndRow(88, $excel_row, $row->pay_lain);
            $object->getActiveSheet()->setCellValueByColumnAndRow(89, $excel_row, $row->date_lain);
            // AP
            $excel_row++;
        }

        $object->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AH')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AI')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AJ')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AK')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AL')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AM')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AN')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AO')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AP')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AQ')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AR')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AS')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AT')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AU')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AV')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AW')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AX')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AY')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('AZ')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BA')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BB')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BC')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BD')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BE')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BF')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BG')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BH')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BI')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BJ')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BK')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BL')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BM')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BN')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BO')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BP')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BQ')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BR')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BS')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BT')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BU')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BV')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BW')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BX')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BY')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('BZ')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('CA')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('CB')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('CC')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('CD')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('CE')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('CF')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('CG')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('CH')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('CI')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('CJ')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('CK')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('CL')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('CM')->setAutoSize(true);

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Dispotition: attachment;filename="Delivery From JKT.xls"');
        $object_writer->save('php://output');   
    }
}