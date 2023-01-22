<?php

namespace App\Exports;

use App\Models\Subadmin;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;


class ProvidersExport implements FromArray,  WithHeadings ,ShouldAutoSize ,WithStrictNullComparison
{
    use Exportable;

    public function  __construct($request)
    {
        $this->request = $request;

    }

    public function array(): array
    {

        $user=Subadmin::get();

        foreach($user as $one){

            $items[] = [
                $one->id,
                $one->name,
                $one->email,
                $one->mobile,
                $one->type=='2'?__('cp.restaurant'):__('cp.food_truck'),
                $one->branch_name,
                count($one->meals),
                $one->total_sales,
                $one->total_orders,
                $one->avg_orders,
                $one->accept_pick_up ? __('cp.accept') : __('cp.not_accept') ,
                $one->status=='active'?__('cp.active') : __('cp.not_active'),
                $one->created_at,
            ];
        }

        return $items;
    }

    public function headings() :array
    {
        return ["id",__('cp.name') ,__('cp.email'),__('cp.mobile'),__('cp.type'),__('cp.branch_name')
            ,__('cp.number_of_meals'),__('cp.total_sales'),__('cp.total_orders'),__('cp.avg'),__('cp.accept_pick_up')
            ,__('cp.status'),__('cp.created')];

    }
}



