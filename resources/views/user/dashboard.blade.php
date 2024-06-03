@extends('layouts.template3DPrinting')

@section('headTambahan3DPrinting')
<link rel="stylesheet" href="{{ asset('css/dashboard3dPrinting.css') }}">
@endsection

@section('isiInformasi3DPrinting')
<div class="palingLuar">
    <div class="outer1">
        <div class="inner1">
            <div class="inti1">
                <h1>ROBOTIIK <br> 3D Printing</h1>
            </div>
            <div class="inti2">
                <button class="button1" onclick="openModal()">Send Design</button>
            </div>
        </div>
        <img src="/img/AlatPrinting3D.svg" alt="AlatPrinting3D">
    </div>
    <div class="outer2">
        <div class="inner3">
            <h1>Why 3D Print?</h1>
        </div>
        <div class="inner4">
            <div class="inti3">
                <div class="kotak1">
                    <h2>Reduce Assembly Time</h2>
                </div>
                <p>Don't waste time putting products together! Rely on 3D printing to make complex geometries that
                    can be printed as one piece or consolidated in one build.</p>
            </div>
            <div class="inti3">
                <div class="kotak1">
                    <h2>Strong And Fast</h2>
                </div>
                <p>Working on a project for a customer that has to be just right? Get models back fast, and 3D print
                    new iterations, if needed, for final feedback and production</p>
            </div>
            <div class="inti3">
                <div class="kotak1">
                    <h2>Make Model you Want</h2>
                </div>
                <p>Proprietary processes, expert 3D printing operators, and inspections are our secrets to
                    delivering exceptional, quality products every time.</p>
            </div>
        </div>
    </div>


 
 
 
            <div class="frameMaterial">
                <div class="text-wrapper">What our Material ?</div>
                <div class="div">
                    <div class="div-2">
                        <div class="div-wrapper"><div class="text-wrapper-3">PLA</div></div>
                        <div class="div-wrapper-4r">
                            <p class="p">
                                Material ini merupakan termoplastik biodegradable yang ramah lingkungan karena terbuat dari pati jagung
                                atau gula tebu.
                            </p>
                        </div>
                    </div>
                    <div class="div-2">
                        <div class="div-wrapper">
                            <div class="div-wrapper-2"><div class="text-wrapper-3">ABS</div></div>
                        </div>
                        <div class="div-wrapper-4">
                            <p class="p">
                                ABS adalah material murah yang sesuai untuk produk dan bagian-bagian yang kuat dan tahan panas.
                            </p>
                        </div>
                    </div>
                    <div class="div-2">
                        <div class="div-wrapper"><div class="text-wrapper-3">PET</div></div>
                        <div class="div-wrapper-4">
                            <p class="p">
                                PET filamen dikenal karena mudah dicetak, dapat menghasilkan permukaan yang lembut, dan tahan air.
                            </p>
                        </div>
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
                <h1>Send Design</h1>
                <div>
                    <h3>Kontak (WhatsApp/ Email)</h3>
                    <input type="text" name="kontak" class="wide-input" required>
                </div>
                <div>
                    <h3>Nama</h3>
                    <input type="text" name="nama" class="wide-input" required>
                </div>
                <div>
                    <h3>Material</h3>
                    <select name="material" id="material" class="wide-input" required>
                        <option value="ABS">ABS</option>
                        <option value="PLA">PLA</option>
                        <option value="PET">PET</option>
                    </select>
                </div>
                <div>
                    <h3>File</h3>
                    <input type="file" name="file_name" class="wide-input" required>
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