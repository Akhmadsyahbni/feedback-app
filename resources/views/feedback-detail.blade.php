@extends('layouts.app')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Feedback</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section" style="min-height: 500px">
        <div class="row">
            <div class="col-lg-12">
                <form id="contact-form" action="" method="">
                    <div class="row">
                        <div class="col-lg-4">
                            <fieldset>
                                <label for="no_kamar">No Kamar </label>
                                <input type="no_kamar" class="form-control" name="no_kamar" id="no_kamar" value="{{ $feedback->no_kamar }}"
                                   >
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <label for="nama">Nama </label>
                                <input type="nama" name="nama" id="nama"  class="form-control" value="{{ $feedback->nama }}">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <label for="alamat">Alamat </label>
                                <input type="alamat" name="alamat" id="alamat"  class="form-control" value="{{ $feedback->alamat }}">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <label for="phone">Phone</label>
                                <input type="phone" name="phone" id="phone"  class="form-control" value="{{ $feedback->phone }}">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <label for="email">Email </label>
                                <input type="email" name="email" id="email"  class="form-control" value="{{ $feedback->email }}">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <label for="maksud_kunjungan">Maksud Kunjungan </label>
                                <input type="maksud_kunjungan" name="maksud_kunjungan"  class="form-control" id="maksud_kunjungan"  class="form-control" value="{{ $feedback->maksud_kunjungan }}">
                            </fieldset>
                        </div>
                        <p>Apakah Anda Merasa Puas Dengan</p>
                         <div class="col-lg-12">
                            <fieldset>
                                <div class="form-group">
                                    <label for="feedback"><b>Makan Pagi</b></label>
                                    <div class="radio-group">
                                        <label for="sangat_bagus">Sangat Bagus</label>
                                        <input type="checkbox" id="sangat_bagus" name="makan_pagi" value="sangat_bagus" 
                                            {{ $feedback->makan_pagi == 'sangat_bagus' ? 'checked' : '' }}>
                                
                                        <label for="bagus">Bagus</label>
                                        <input type="checkbox" id="bagus" name="makan_pagi" value="bagus" 
                                            {{ $feedback->makan_pagi == 'bagus' ? 'checked' : '' }}>
                                
                                        <label for="cukup">Cukup</label>
                                        <input type="checkbox" id="cukup" name="makan_pagi" value="cukup" 
                                            {{ $feedback->makan_pagi == 'cukup' ? 'checked' : '' }}>
                                
                                        <label for="kurang">Kurang</label>
                                        <input type="checkbox" id="kurang" name="makan_pagi" value="kurang" 
                                            {{ $feedback->makan_pagi == 'kurang' ? 'checked' : '' }}>
                                    </div>
                                </div>
                                
                            </fieldset>
                        </div>
                        {{-- <div class="col-lg-12">
                            <fieldset>
                                <div class="form-group">
                                    <label for="feedback"><b>Makan Pagi</b></label>
                                    <div class="checkbox-group">
                                        <input type="checkbox" id="sangat_bagus" name="makan_pagi"
                                            value="sangat_bagus" class="single-checkbox makan-pagi-checkbox" >
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div> --}}
                        <div class="col-lg-12">
                            <fieldset>
                                <div class="form-group">
                                    <label for="feedback"><b>Makan Minuman </b></label>
                                    <div class="radio-group">
                                        <label for="sangat_bagus">Sangat Bagus</label>
                                        <input type="checkbox" id="sangat_bagus" name="makan_minuman" value="sangat_bagus" 
                                            {{ $feedback->makan_minuman == 'sangat_bagus' ? 'checked' : '' }}>
                                
                                        <label for="bagus">Bagus</label>
                                        <input type="checkbox" id="bagus" name="makan_minuman" value="bagus" 
                                            {{ $feedback->makan_minuman == 'bagus' ? 'checked' : '' }}>
                                
                                        <label for="cukup">Cukup</label>
                                        <input type="checkbox" id="cukup" name="makan_minuman" value="cukup" 
                                            {{ $feedback->makan_minuman == 'cukup' ? 'checked' : '' }}>
                                
                                        <label for="kurang">Kurang</label>
                                        <input type="checkbox" id="kurang" name="makan_minuman" value="kurang" 
                                            {{ $feedback->makan_minuman == 'kurang' ? 'checked' : '' }}>
                                    </div>
                                </div>
                                
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <div class="form-group">
                                    <label for="feedback"><b>Pelayanan Seluruhan</b></label>
                                    <div class="checkbox-group">
                                        <label for="sangat_bagus">Sangat Bagus</label>
                                        <input type="checkbox" id="sangat_bagus" name="pelayanan"
                                            value="sangat_bagus" class="single-checkbox pelayanan-checkbox">
                                        </label>
                                        <label for="bagus">Bagus</label>
                                        <input type="checkbox" id="bagus" name="pelayanan" value="bagus"
                                            class="single-checkbox pelayanan-checkbox">
                                        </label>
                                        <label for="cukup">Cukup</label>
                                        <input type="checkbox" id="cukup" name="pelayanan" value="cukup"
                                            class="single-checkbox pelayanan-checkbox">
                                        </label>
                                        <label for="kurang">Kurang</label>
                                        <input type="checkbox" id="kurang" name="pelayanan" value="kurang"
                                            class="single-checkbox pelayanan-checkbox">
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <div class="form-group">
                                    <label for="feedback"><b>Kebersihan</b></label>
                                    <div class="checkbox-group">
                                        <label for="sangat_bagus">Sangat Bagus</label>
                                        <input type="checkbox" id="sangat_bagus" name="kebersihan"
                                            value="sangat_bagus" class="single-checkbox kebersihan-checkbox">
                                        </label>
                                        <label for="bagus">Bagus</label>
                                        <input type="checkbox" id="bagus" name="kebersihan" value="bagus"
                                            class="single-checkbox kebersihan-checkbox">
                                        </label>
                                        <label for="cukup">Cukup</label>
                                        <input type="checkbox" id="cukup" name="kebersihan" value="cukup"
                                            class="single-checkbox kebersihan-checkbox">
                                        </label>
                                        <label for="kurang">Kurang</label>
                                        <input type="checkbox" id="kurang" name="kebersihan" value="kurang"
                                            class="single-checkbox kebersihan-checkbox">
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <div class="form-group">
                                    <label for="feedback"><b>Pelayanan SPA</b></label>
                                    <div class="checkbox-group">
                                        <label for="sangat_bagus">Sangat Bagus</label>
                                        <input type="checkbox" id="sangat_bagus" name="pelayanan_spa"
                                            value="sangat_bagus" class="single-checkbox fasilitas-spa-checkbox">
                                        </label>
                                        <label for="bagus">Bagus</label>
                                        <input type="checkbox" id="bagus" name="pelayanan_spa" value="bagus"
                                            class="single-checkbox fasilitas-spa-checkbox">
                                        </label>
                                        <label for="cukup">Cukup</label>
                                        <input type="checkbox" id="cukup" name="pelayanan_spa" value="cukup"
                                            class="single-checkbox fasilitas-spa-checkbox">
                                        </label>
                                        <label for="kurang">Kurang</label>
                                        <input type="checkbox" id="kurang" name="pelayanan_spa" value="kurang"
                                            class="single-checkbox fasilitas-spa-checkbox">
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <div class="form-group">
                                    <label for="feedback"><b>Penampilan Karyawan</b></label>
                                    <div class="checkbox-group">
                                        <label for="sangat_bagus">Sangat Bagus</label>
                                        <input type="checkbox" id="sangat_bagus" name="penampilan_karyawan"
                                            value="sangat_bagus" class="single-checkbox penampilan-checkbox">
                                        </label>
                                        <label for="bagus">Bagus</label>
                                        <input type="checkbox" id="bagus" name="penampilan_karyawan" value="bagus"
                                            class="single-checkbox penampilan-checkbox">
                                        </label>
                                        <label for="cukup">Cukup</label>
                                        <input type="checkbox" id="cukup" name="penampilan_karyawan" value="cukup"
                                            class="single-checkbox penampilan-checkbox">
                                        </label>
                                        <label for="kurang">Kurang</label>
                                        <input type="checkbox" id="kurang" name="penampilan_karyawan" value="kurang"
                                            class="single-checkbox penampilan-checkbox">
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <div class="form-group">
                                    <label for="feedback"><b>Keramahtamahan</b></label>
                                    <div class="checkbox-group">
                                        <label for="sangat_bagus">Sangat Bagus</label>
                                        <input type="checkbox" id="sangat_bagus" name="keramahtamahan"
                                            value="sangat_bagus" class="single-checkbox keramahtamahan-checkbox">
                                        </label>
                                        <label for="bagus">Bagus</label>
                                        <input type="checkbox" id="bagus" name="keramahtamahan" value="bagus"
                                            class="single-checkbox keramahtamahan-checkbox">
                                        </label>
                                        <label for="cukup">Cukup</label>
                                        <input type="checkbox" id="cukup" name="keramahtamahan" value="cukup"
                                            class="single-checkbox keramahtamahan-checkbox">
                                        </label>
                                        <label for="kurang">Kurang</label>
                                        <input type="checkbox" id="kurang" name="keramahtamahan" value="kurang"
                                            class="single-checkbox keramahtamahan-checkbox">
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div> 
                        <div class="col-lg-4">
                            <fieldset>
                                <label for="Kunjungan">Apakah ini Merupakan Kunjuan Pertama </label>
                                <input type="Kunjungan"  class="form-control" name="Kunjungan" id="Kunjungan" value="{{$feedback->kunjungan}}"
                                    autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <label for="datang">Apakah anda akan datang kembali </label>
                                <input type="datang"  class="form-control" name="datang" id="datang" value="{{$feedback->datang}}"
                                    autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <label for="datanag">Saran Anda </label>
                                <textarea  class="form-control" name="saran" id="" cols="7" rows="5" style="text-align:initial">
                                    {{ $feedback->saran }}
                                </textarea>
                            </fieldset>
                        </div>
                         {{-- <p>Apakah Anda Merasa Puas Dengan</p> --}}
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection