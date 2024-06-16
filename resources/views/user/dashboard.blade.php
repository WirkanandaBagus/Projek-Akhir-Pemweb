@extends('layouts.template3DPrinting')

@section('headTambahan3DPrinting')
<link rel="stylesheet" href="{{ asset('css/dashboardOrderCSS.css') }}">
@endsection

@section('isiInformasi3DPrinting')
<div class="palingLuar">
    <div class="outer1">
        <div class="inner1">
            <div class="inti1">
                <h1>Kami ada jika, <br> Kalian Membutuhkan</h1>
            </div>
            <div class="inti2">
                <button class="button1" onclick="openModal()">Reservasi</button>
            </div>
        </div>
    </div>
   

 
 
 

        </div>

      

<br>
<br>

@auth
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <!-- Form di sini -->
        @auth
        <form action="orderprint" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="senddesign">
                <h1>Reservasi</h1>
                <div>
                    <h3>Kontak (WhatsApp/ Email)</h3>
                    <input type="text" name="kontak" class="wide-input" required>
                </div>
                <div>
                    <h3>Nama</h3>
                    <input type="text" name="nama" class="wide-input" required>
                </div>
                <div>
                    <h3>Alamat</h3>
                    <input type="text" name="alamat" class="wide-input" required>
                </div>
                <div>
                    <h3>Keluhan</h3>
                    <input type="text" name="keluhan" class="wide-input" required>
                </div>
                <button type="submit" class="submit-button" style="margin-top: 30px;">Submit</button>
            </div>
        </form>
        @endauth
    </div>
</div>
<script src="{{ asset('js/dashboard.js') }}"></script>
@endauth




@endsection