@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Report',
        'key' => 'List',
        'url' => route('report.view'),
    ])

    <div class="container-fluid py-4">
        <form action="{{ route('report.getReport') }}" method="post">
            @csrf
            <div class=row>
                <div class="col-2">
                    <div class="input-group input-group-static my-3">
                        <label>Từ</label>
                        <input type="datetime-local" class="form-control" name="date_time_before">
                    </div>
                </div>
                <div class="col-2">
                    <div class="input-group input-group-static my-3">
                        <label>Đến</label>
                        <input type="datetime-local" class="form-control" name="date_time_after">
                    </div>
                </div>
                <div class="col-2 mt-4">
                    <input type="submit" name="submit" class="btn btn-info" value="Xem Doanh Thu">
                </div>
            </div>
        </form>
        @if (!empty($reports))
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mã Hóa
                                    đơn
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số tiền
                                    thanh toán
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Thời
                                    gian
                                    Lập Hóa Đơn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $key=>$report)
                            {{ dd($report); }}
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <p>
                                            {{ $key+1 }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <p>
                                        {{ $report->order_id }}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{ $report->order_total }} vnđ
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{ $report->created_at }}
                                    </p>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    {{-- {{ $products->links() }} --}}
                </div>
            </div>
        @endif

    </div>

@endsection
