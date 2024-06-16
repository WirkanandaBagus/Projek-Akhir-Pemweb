@extends('layouts.template3DPrinting')

@section('headTambahan3DPrinting')
<link rel="stylesheet" href="{{ asset('css/dashboardOrderCSS.css') }}">
@endsection

@section('isiInformasi3DPrinting')



    <div class="order-table-container">
        <form method="GET" action="{{ route('search') }}">
            <input type="text" name="search" placeholder="Cari Nama atau Kontak" value="{{ request()->get('search') }}">
            <button type="submit">Cari</button>
        </form>
        
        <table border="1">
            <tbody>
                @if(isset($tableorderprint))
                    <thead>
                        <tr>
                            <th>
                                <a href="{{ request()->fullUrlWithQuery(['date_order' => ($dateOrder ?? 'asc') == 'asc' && $statusOrder !== 'desc' ? 'desc' : 'asc', 'status_order' => $statusOrder]) }}">
                                    Tanggal Pesan
                                </a>
                            </th>
                            <th>Jam</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kontak</th>
                            <th>Keluhan</th>
                            <th>
                                <a href="{{ request()->fullUrlWithQuery(['status_order' => ($statusOrder == 'asc') ? 'desc' : 'asc', 'date_order' => $dateOrder ?? null]) }}">
                                    Status
                                </a>
                            </th>
                        </tr>
                    </thead>
                    @foreach($tableorderprint as $op)
                        <tr>
                            <td>{{ $op->tanggal_pesan }}</td>
                            <td>{{ $op->jam_pesan }}</td>
                            <td>{{ $op->nama }}</td>
                            <td>{{ $op->alamat }}</td>
                            <td>{{ $op->kontak }}</td>
                            <td>{{ $op->keluhan }}</td>
                            @if ($op->status == 'waiting')
                                <td><button onclick="showPopup('viewOrder{{ $op->id_orderprint }}')">View order</button></td>
                            @elseif($op->status == 'checking')
                            <td>
                                <form action="{{ url('/finishorder/' . $op->id_orderprint) }}" method="post">
                                    @csrf
                                    <button type="submit">Finish Order</button>
                                </form>
                            </td>
                            @else
                                <td>{{ $op->status }}</td>
                            @endif
                        </tr>
    
                        <!-- Popup for View Order -->
                        <div class="popupprintadmin" id="viewOrder{{ $op->id_orderprint }}" style="display: none; background-color: #ffffff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); padding: 20px; width: 30%; max-width: 8000px;">
                            <button onclick="closePopup('viewOrder{{ $op->id_orderprint }}')" style="position: absolute; top: 10px; right: 10px; border: none; background: none; cursor: pointer;">
                                <img class="logo" src="{{ asset('img/x.svg') }}" />
                            </button>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                                <h2 style="font-size: 20px; margin: 0;">Accept Reservasi</h2>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <h4 style="font-size: 16px; margin-bottom: 5px;">Kontak (WhatsApp/ Email)</h4>
                                <div style="background-color: #f5f5f5; padding: 10px; border-radius: 5px;">
                                    <h4 style="font-size: 14px; margin: 0;">{{ $op->kontak }}</h4>
                                </div>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <h4 style="font-size: 16px; margin-bottom: 5px;">Nama</h4>
                                <div style="background-color: #f5f5f5; padding: 10px; border-radius: 5px;">
                                    <h4 style="font-size: 14px; margin: 0;">{{ $op->nama }}</h4>
                                </div>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <h4 style="font-size: 16px; margin-bottom: 5px;">Alamat</h4>
                                <div style="background-color: #f5f5f5; padding: 10px; border-radius: 5px;">
                                    <h4 style="font-size: 14px; margin: 0;">{{ $op->alamat }}</h4>
                                </div>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; margin-bottom: 5px;">Keluhan</h4>
                                <div style="background-color: #f5f5f5; padding: 10px; border-radius: 5px;">
                                    <h4 style="font-size: 14px; margin: 0;">{{ $op->keluhan }}</h4>
                                </div>
                            </div>

                            
                            <div style="display: flex; flex-direction: row; margin-top: 20px;">
                                <form id="acceptForm" action="{{ route('accept-print-admin', ['id' => $op->id_orderprint]) }}" method="post" enctype="multipart/form-data" style="margin-right: 10px;">
                                    @csrf
                                    <button type="submit" style="background-color: #1CB6B6; color: white; border: none; padding: 10px 15px; cursor: pointer; border-radius: 5px; font-family: 'Montserrat', sans-serif; font-size: 14px; transition: background-color 0.3s;">Accept</button>
                                </form>
                                <form id="declineForm" action="{{ route('decline-order', ['id' => $op->id_orderprint]) }}" method="post" style="margin-left: 10px;">
                                    @csrf
                                    <button type="submit" style="background-color: #FF6347; color: white; border: none; padding: 10px 15px; cursor: pointer; border-radius: 5px; font-family: 'Montserrat', sans-serif; font-size: 14px; transition: background-color 0.3s;" onclick="return confirm('Are you sure you want to decline this order?')">Decline</button>
                                </form>
                            </div>    
                        </div>

                        
                        <!-- Popup for Check Payment -->
                        <div class="popupcheckpayment" id="checkPayment{{ $op->id_orderprint }}" style="display: none;">
                            <div >
                                <h2>Check Payment</h2>
                                <button onclick="closePopup('checkPayment{{ $op->id_orderprint }}')"><img class="logo" src="{{ asset('img/x.svg') }}" /></button>
                            </div>
                            <div>
                                <h4>Kontak (WhatsApp/ Email)</h4>
                                <div>
                                    <h4>{{ $op->kontak }}</h4>
                                </div>
                            </div>
                            <div>
                                <h4>Nama</h4>
                                <div>
                                    <h4>{{ $op->nama }}</h4>
                                </div>
                            </div>
                            <form id="acceptForm" action="{{ route('accept-payment-admin', ['id' => $op->id_orderprint]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <h4>Alamat</h4>
                                    <div>
                                        <h4>{{ $op->alamat }}</h4>
                                    </div>
                                </div>
                                <div class="downloadFile">
                                    <a href="{{ asset($op->file_name) }}" download>{{ $op->file_name }}</a>
                                    <a href="{{ Storage::url($op->file_resi) }}" download>{{ $op->file_resi }}</a>
                                </div>
                                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                                    <form id="acceptForm" action="{{ route('accept-print-admin', ['id' => $op->id_orderprint]) }}" method="post">
                                        @csrf
                                        <button type="submit" style="background-color: #1CB6B6; color: white; border: none; padding: 10px 15px; cursor: pointer; border-radius: 5px; font-family: 'Montserrat', sans-serif; font-size: 14px; transition: background-color 0.3s;">Accept</button>
                                    </form>
                                    <form id="declineForm" action="{{ route('decline-order', ['id' => $op->id_orderprint]) }}" method="post">
                                        @csrf
                                        <button type="submit" style="background-color: #FF6347; color: white; border: none; padding: 10px 15px; cursor: pointer; border-radius: 5px; font-family: 'Montserrat', sans-serif; font-size: 14px; transition: background-color 0.3s;" onclick="return confirm('Are you sure you want to decline this order?')">Decline</button>
                                    </form>
                                </div>
                            </form>

                        </div>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    



<script>
    function showPopup(id) {
        var popup = document.getElementById(id);
        popup.style.display = "block";
    }

    function closePopup(id) {
        var popup = document.getElementById(id);
        popup.style.display = "none";
    }
</script>
@endsection