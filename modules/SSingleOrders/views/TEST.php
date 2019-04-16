<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */
use Spipu\Html2Pdf\Html2Pdf;
class SSingleOrders_Cheque_View extends Vtiger_Index_View
{
    public function process(\App\Request $request)
    {
        $print_pdf=true;
        if($request->get('mode') ) {
            $mode = $request->get('mode');
            if ($mode == 'updateOrdreNonaff') {
               $this->getEncaissement($request);

            }
        }
    }
    public function getEncaissement($request)
    {
        $date_echeance=$request->get('date_echeance');
        $date_echeance= date('Y-m-d',strtotime(str_replace('/', '-', $date_echeance)));
        $encaissements=(new \App\Db\Query())->select("inv.number,acc.accountname,acc.ville,r.date_valeur,r.reg_a_recevoir,r.bordereau,r.type,r.banque,r.montant,r.banque,r.libelle,r.banque_edicom")
            ->leftJoin('u_yf_finvoice inv','inv.finvoiceid=r.factu')
            ->leftJoin('vtiger_account acc','inv.accountid=acc.accountid')
            ->from("u_yf_reglements r")->all();
        var_dump($encaissements);
        die();
    }


}
