<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hóa Đơn</title>

    <link rel="icon" href="{{ asset('./print/img/logoDN.png') }}">
    <link rel="stylesheet" href="{{ asset('./print/css/style.css') }}">
    <style>
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: normal;
            src: url({{ asset('./print/fonts/Roboto-Regular.ttf') }}) format('truetype');
            src: url({{ asset('./print/fonts/Roboto-Italic.ttf') }}) format('truetype');
            src: url({{ asset('./print/fonts/Roboto-Bold.ttf') }}) format('truetype');
        }

        table {
            width: 80%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 0px 10px;
        }

        .page {
            padding-left: 70px;
        }
    </style>
</head>

<body style="font-family:Roboto;">
    <div class="page">
        <div class="header">
            <div class="row">
                <table style="border: none;">
                    <tr style="border: none;">
                        <td style="border: none;">
                            <div class="col-md-2">
                                <div class="logo">
                                    <img class="img-fluid" src="{{ asset('./print/img/logoDN.png') }}" alt="">
                                </div>
                            </div>
                        </td>
                        <td style="border: none;">
                            <div class="col-md-6 title-in">
                                <h1 class="title">Bảng báo giá</h1>
                                <p>Liên 1: Lưu</p>
                                <p>Ngày {{ $date[2] }} tháng {{ $date[1] }} năm {{ $date[0] }}</p>
                            </div>
                        </td>
                        <td style="border: none;">
                            <div class="col-md-4">
                                <h5>Mẫu số: </h5>
                                <p>Ký hiệu: </p>
                                <p>Mã Hóa Đơn: {{ $order_by_id->id }}</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="content">
            <p><strong>Đơn vị bán hàng:</strong><span class="viethoa">Công ty TNHH Thương mại và dịch vụ thiết bị DN
                    Phone</span></p>
            <p><strong>Mã số thuế:</strong><span></span></p>
            <p><strong>Địa chỉ:</strong><span>Quán Gánh ,Nhị Khê ,Thường Tín ,Hà Nội , Việt Nam</span></p>
            <p><strong>Điện thoại:</strong><span>0399574700</span></p>
            <p><strong>Số tài khoản</strong><span>19910000748627 tại Ngân hàng BIDV Hồng Hà Hà Nội</span></p>
            <div class="gach"></div>
            <div class="gach mgb-10"></div>
            <p><strong>Họ và tên người mua
                    hàng:</strong><span>{{ $shipping->shipping_name }} ({{ $user->name }})</span></p>
            <p><strong>Tên đơn vị:</strong><span>..........................................................</span></p>
            <p><strong>Mã số thuế:</strong><span>..........................................................</span></p>
            <p><strong>Địa
                    chỉ:</strong><span>{{ $shipping->shipping_address }}</span>
            </p>
            <p><strong>Hình thức thanh
                    toán:</strong><span>.................Tiền mặt...................................</span></p>
            <p><strong>Số tài khoản:</strong><span>..........................................................</span></p>

            <table class="table table-bordered" style="width: 650px">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên hàng hóa, dịch vụ</th>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">ĐVT</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product_order as $key => $product_orderDetail)
                        <tr>
                            <td class="text-center">{{ $key }}</td>
                            <td class="text-center">{{ $product_orderDetail->product_name }}</td>
                            <td class="text-center">{{ $product_orderDetail->product_id }}</td>
                            <td class="text-center">vnd</td>
                            <td class="text-center">{{ $product_orderDetail->product_qty }}</td>
                            <td class="text-center">{{ number_format($product_orderDetail->product_discount) }} vnđ
                            </td>
                            <td class="text-center">
                                {{ number_format($product_orderDetail->product_qty * $product_orderDetail->product_discount) }}
                                vnđ</td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="6" class="text-center">Tổng cộng tiền thanh toán: </td>
                        <td colspan="6">
                            <p class="text-right">{{ $order_by_id->order_total }} vnd</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="footer" style="margin-top:50px; width: 800px">
            <table style="border: none">
                <tr style="border: none">
                    <td style="border: none">
                        <div>
                            <strong>Người mua hàng</strong>
                            <p>(Ký, ghi rõ họ tên)</p>
                        </div>
                    </td>
                    <td style="border: none">
                        <div>
                            <strong>Người bán hàng</strong>
                            <p>(Ký, ghi rõ họ tên)</p>
                        </div>
                    </td>
                    <td style="border: none">
                        <div>
                            <strong>Thủ trưởng đơn vị</strong>
                            <p>(Ký, ghi rõ họ tên)</p>
                        </div>
                    </td>
                </tr>
            </table>

        </div>

    </div>
</body>

</html>
