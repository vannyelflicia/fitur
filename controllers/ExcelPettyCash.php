<?php
Class ExcelPettyCash extends CI_Controller{
    
    function __construct() {
        parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('pagemodel');
    }
    
    function cetakPettyCash(){
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
        $object->getActiveSheet()->getStyle("Z1:AG1")->applyFromArray(
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
            "Biaya Stuffing" , "Tambahan Biaya Stuffing" , "Electrison" , "Biaya Karantina" , "Biaya Handling Full" , "Biaya Lolo" , "Biaya Adm" , "Biaya Lain-Lain" ,
            //8
            );
        $column = 0;

        foreach($table_columns as $field)
        {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }

        $AllData = $this->pagemodel->getPettyCash();

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
            $object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->b_stuff);
            $object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row->plus_b_stuff);
            $object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row->electricson);
            $object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row->b_karantina);
            $object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row->b_handlfull);
            $object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->b_lolo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row->b_adm);
            $object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row->b_lain);
            //PETTY CASH
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
        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Dispotition: attachment;filename="Delivery From JKT.xls"');
        $object_writer->save('php://output');   
    }
}