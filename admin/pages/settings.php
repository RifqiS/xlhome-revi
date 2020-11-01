<div class="container mx-auto text-center">
    <h2>Setting</h2>
</div>
<div class="container">
    <div class="row justify-content-md-center mx-n1">
        <form class="needs-validation" novalidate>
            <div class="row">
                <div class="col">
                    <h4>Data Aplikasi</h4>
                    <div class="form-group row">
                        <label for="id_aplikasi" class="col-sm-4 col-form-label">Id Aplikasi</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="id_aplikasi" id="id_aplikasi" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-4 col-form-label">Username</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="username" id="username" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-md">
                            <input type="password" class="form-control border-primary" name="password" id="password" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title_home" class="col-sm-4 col-form-label">Title Home</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="title_home" id="title_home" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="logo" class="col-sm-4 col-form-label">Logo</label>
                        <div class="col-md">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control custom-file-input" name="logo" id="logo" required>
                                    <label class="custom-file-label border-primary" for="foto_ktp">Piilh Foto</label>
                                    <div class="invalid-feedback">
                                        Tidak boleh kosong!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_kantor" class="col-sm-4 col-form-label">Alamat Kantor</label>
                        <div class="col-md">
                            <textarea class="form-control border-primary" name="alamat_kantor" id="alamat_kantor" cols="30" rows="3" placeholder="Alamat Lengkap" required></textarea>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Kontak</h4>
                    <div class="form-group row">
                        <label for="media_sosial_1" class="col-sm-4 col-form-label">Sosial Media 1</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="media_sosial_1" id="media_sosial_1" placeholder="">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="media_sosial_2" class="col-sm-4 col-form-label">Sosial Media 2</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="media_sosial_2" id="media_sosial_2" placeholder="">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <h5>Agen 1</h5>
                    <div class="form-group row">
                        <label for="nama_agen_1" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="nama_agen_1" id="nama_agen_1" placeholder="">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_tlp_agen_1" class="col-sm-4 col-form-label">No Telepon</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="no_tlp_agen_1" id="no_tlp_agen_1" placeholder="" onkeypress="return isNumberKey(event)">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_wa_agen_1" class="col-sm-4 col-form-label">Whatsapp</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="no_wa_agen_1" id="no_wa_agen_1" placeholder="" onkeypress="return isNumberKey(event)">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <h5>Agen 2</h5>
                    <div class="form-group row">
                        <label for="nama_agen_2" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="nama_agen_2" id="nama_agen_2" placeholder="">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_tlp_agen_2" class="col-sm-4 col-form-label">No Telepon</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="no_tlp_agen_2" id="no_tlp_agen_2" placeholder="" onkeypress="return isNumberKey(event)">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_wa_agen_2" class="col-sm-4 col-form-label">Whatsapp</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="no_wa_agen_2" id="no_wa_agen_2" placeholder="" onkeypress="return isNumberKey(event)">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <h5>Agen 3</h5>
                    <div class="form-group row">
                        <label for="nama_agen_3" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="nama_agen_3" id="nama_agen_3" placeholder="">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_tlp_agen_3" class="col-sm-4 col-form-label">No Telepon</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="no_tlp_agen_3" id="no_tlp_agen_3" placeholder="" onkeypress="return isNumberKey(event)">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_wa_agen_3" class="col-sm-4 col-form-label">Whatsapp</label>
                        <div class="col-md">
                            <input type="text" class="form-control border-primary" name="no_wa_agen_3" id="no_wa_agen_3" placeholder="" onkeypress="return isNumberKey(event)">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-outline-primary" name="" type="submit">Simpan</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>