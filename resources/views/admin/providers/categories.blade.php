@extends('admin.providers.sideMenu')
@section('companyContent')
    <div class="container">
        <div class="card card-custom gutter-b example example-compact" style="padding: 30px">
            <div class="table-responsive">
                <table class="table table-hover tableWithSearch" id="tableWithSearch">
                    <thead>
                    <tr>
                        <th class="wd-5p"> {{ucwords(__('cp.name'))}}</th>
                        <th class="wd-25p"> {{ucwords(__('cp.sort_order'))}}</th>
                        <th class="wd-10p"> {{ucwords(__('cp.created'))}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $one)
                        <tr class="odd gradeX" id="tr-{{$one->id}}">
                            <td class="v-align-middle wd-25p">{{$one->name}}</td>
                            <td class="v-align-middle wd-25p">{{$one->sort_order}}</td>
                            <td class="v-align-middle wd-10p">{{$one->created_at->format('Y-m-d')}}</td>
                        </tr>
                    @empty

                    @endforelse


                    </tbody>
                </table>
{{--                                {{$items->appends($_GET)->links("pagination::bootstrap-4") }}--}}
            </div>

        </div>
    </div>
@endsection
