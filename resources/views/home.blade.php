@extends('layouts.templateFooterHeader')
@section('headTambahan')
<link rel="stylesheet" href="css/home.css" />
@endsection

@section('isiInformasi')
<div class="header" data-aos="fade-up">
                    <div class="left">
                        <div class="header-2">
                            <p class="text">
                                <span class="span"
                                    >KAMI ADA, JIKA  <br />KALIAN MEMBUTUHKAN</span
                                >
                            </p>
                            
                        </div>
                        <a href="/dashboard" class="butt" style="display: inline-block; text-decoration: none;">
                            <div class="text-wrapper-2">Reservasi</div>
                        </a>
                    </div>
                </div>

                
                    
                
                <div id="tentang-kami" class="tagline" data-aos="fade-up">
                    <div class="text-wrapper-2">Tentang Kami</div>
                    <div class="isi">
                        
                        <div class="div-wrapper">
                            <p class="text-4">
                                Klinik home.infusion adalah layanan medis di rumah pasien. Tim medis berpengalaman seperti perawat dan dokter yang datang untuk pemantauan, pemberian obat dan infus, serta edukasi pasien. Keuntungan dari layanan klinik home.infusion termasuk kenyamanan, privasi, dan pengurangan risiko infeksi yang mungkin timbul di lingkungan rumah sakit.
                            </p>
                            <p class="text-4">
                                Klinik home.infusion biasanya digunakan untuk pasien dengan kondisi lelah, orang lanjut usia, individu yang pulih dari operasi, atau mereka yang membutuhkan perawatan infus di rumah. Layanan ini dapat membantu memastikan bahwa pasien menerima perawatan yang sesuai sambil tetap berada di lingkungan yang nyaman bagi mereka.
                                
                            </p>
                        </div>
                    </div>
                </div>
                <div class="division" data-aos="fade-up">
                    <div class="technical">
                        <div class="Awan">
                            <img
                                    class="AwanIcon"
                                    src="{{URL::to('img/Awan.svg')}}"
                                />
                        </div>
                        
                        <div class="anggota">
                            <div class="frame-2">
                                <img
                                    class="icon-3"
                                    src="{{URL::to('img/GambarLayanan1.png')}}"
                                />
                                <div class="frame-3">
                                    <div class="text-7">Layanan yang mudah, nyaman, dan terjamin keamanannya</div>
                                </div>
                            </div>
                            <div class="frame-2">
                                <img
                                    class="icon-3"
                                    src="{{URL::to('img/GambarLayanan2.png')}}"
                                />
                                <div class="frame-3">
                                    <div class="text-7">Didukung oleh tim medis yang berpengalaman, terampil, dan tersertifikasi</div>
                                </div>
                            </div>
                        </div>
                        <div class="anggota">
                            <div class="frame-2">
                                <img
                                    class="icon-3"
                                    src="{{URL::to('img/GambarLayanan3.png')}}"
                                />
                                <div class="frame-3">
                                    <div class="text-7">Area pelayanan yang luas</div>
                                </div>
                            </div>
                            <div class="frame-2">
                                <img
                                    class="icon-3"
                                    src="{{URL::to('img/GambarLayanan4.png')}}"
                                />
                                <div class="frame-3">
                                    <div class="text-7">Pelayanan Infus di rumah </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="layanan-kami" class="achievement" data-aos="fade-up">
                    <div class="text-wrapper-3">Layanan Kami</div>
                    <div class="achievement-2">
                        <div class="frame-7">
                            <div class="frame-wrapper">
                                <div class="frame-8">
                                    <div class="frame-10">
                                        <div class="COMPETITION-wrapper">
                                            <div class="COMPETITION-2">
                                                <img class="icon-3" src="{{URL::to('img/LayananKami1.png')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="frame-wrapper">
                                <div class="frame-8">
                                    <div class="frame-10">
                                        <div class="COMPETITION-wrapper">
                                            <div class="COMPETITION-2">
                                                <img class="icon-3" src="{{URL::to('img/LayananKami2.png')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="frame-7">
                            <div class="frame-wrapper">
                                <div class="frame-8">
                                    <div class="frame-10">
                                        <div class="COMPETITION-wrapper">
                                            <div class="COMPETITION-2">
                                                <img class="icon-3" src="{{URL::to('img/LayananKami3.png')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="frame-wrapper">
                                <div class="frame-8">
                                    <div class="frame-10">
                                        <div class="COMPETITION-wrapper">
                                            <div class="COMPETITION-2">
                                                <img class="icon-3" src="{{URL::to('img/LayananKami4.png')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="frame-7">
                            <div class="frame-wrapper">
                                <div class="frame-8">
                                    <div class="frame-10">
                                        <div class="COMPETITION-wrapper">
                                            <div class="COMPETITION-2">
                                                <img class="icon-3" src="{{URL::to('img/LayananKami5.png')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="frame-wrapper">
                                <div class="frame-8">
                                    <div class="frame-10">
                                        <div class="COMPETITION-wrapper">
                                            <div class="COMPETITION-2">
                                                <img class="icon-3" src="{{URL::to('img/LayananKami6.png')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="frame-layanan">
                            <div class="frame-wrapper-layanan">
                                <div class="div-layanan">
                                    <div class="text-wrapper-layanan">Tambahan Obat</div>
                                    <div class="div-wrapper-layanan"><div class="text-wrapper-layanan">Rp250.000 /obat</div>
                                </div>
                                
                            </div>
                            
                            </div>
                            <div class="frame-wrapper-layanan">
                                <div class="div-layanan">
                                    <div class="text-wrapper-layanan">Biaya visitasi Jakarta dan Bekasi</div>
                                    <div class="div-wrapper-layanan"><div class="text-wrapper-layanan">Rp250.000 </div>
                                </div>
                                
                            </div>
                            
                            </div>
                            <div class="frame-wrapper-layanan">
                                <div class="div-layanan">
                                    <div class="text-wrapper-layanan">Biaya visitasi Bogor, Depok, Tangerang</div>
                                    <div class="div-wrapper-layanan"><div class="text-wrapper-layanan">Rp350.000 </div>
                                </div>
                                
                            </div>
                            
                            </div>
                            <div class="frame-wrapper-layanan">
                                <div class="div-layanan">
                                    <div class="text-wrapper-layanan">Biaya Konsultasi Online</div>
                                    <div class="div-wrapper-layanan"><div class="text-wrapper-layanan">Rp50.000</div>
                                </div>
                                
                            </div>
                            
                            </div>
                        </div>
                </div>
                </div>



                <div id="testimoni" class="testimoni" data-aos="fade-up">
                    <div class="text-wrapper-3">Testimoni</div>
                    <div class="testimoni-2">
                        <div class="frame-2">
                            <img
                                class="icon-testimoni"
                                src="{{URL::to('img/mockupHP.png')}}"
                            />
                            
                        </div>

                    </div>
                </div>

@endsection