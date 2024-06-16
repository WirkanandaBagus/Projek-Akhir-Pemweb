@extends('layouts.template3DPrinting')

@section('headTambahan3DPrinting')
<link rel="stylesheet" href="{{ asset('css/dashboardOrderCSS.css') }}">
@endsection

@section('isiInformasi3DPrinting')

@php
    $order = request()->get('order', 'asc');
@endphp



    <div class="Table">
        <table border="1">
            <thead>
                <tr>
                    <th>
                        <a href="{{ request()->fullUrlWithQuery(['order' => ($order == 'asc') ? 'desc' : 'asc']) }}">
                            Tanggal Pesan
                        </a>
                    </th>
                    <th>Jam</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Keluhan</th>
                    <th>Status</th>
                </tr>
            </thead>
        <tbody>
            @foreach($tableorderprintuser as $op)
                <tr>
                    <td>{{ $op->tanggal_pesan }}</td>
                    <td>{{ $op->jam_pesan }}</td>
                    <td>{{ $op->nama }}</td>
                    <td>{{ $op->alamat }}</td>
                    <td>{{ $op->keluhan }}</td>
                    <td>
                        @if ($op->status == 'waiting')
                            {{ $op->status }}
                        @else
                            {{ $op->status }}
                        @endif
                    </td>
                </tr>
    
               
            @endforeach
        </tbody>
    </table>
    </div>
    

<script>
    document.querySelectorAll('.pay-now-btn').forEach(button => {
        button.addEventListener('click', function () {
            const orderId = this.getAttribute('data-order-id');
            showPopup(orderId);
        });
    });

    function showPopup(orderprintId) {
        var popup = document.getElementById('popup' + orderprintId);
        popup.style.display = 'block';
    }

    function closePopup(orderprintId) {
        var popup = document.getElementById('popup' + orderprintId);
        popup.style.display = 'none';
    }
</script>

@endsection