<?php

namespace App\Exports;

use Modules\WidgetManager\Entities\ImsClients;
use Maatwebsite\Excel\Concerns\FromCollection;


class ExportImsClients implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ImsClients::all('id','contact_via','client_name','phone_number','client_email','message','message','ip_address','assign_by','manager_comment','comment','action_taken','status');
    }
}
