<div class="alert alert-info" style="border-left:5px solid lightblue">Silahkan lengkapi kolom dibawah ini dengan data anda yang benar atau Baca Persyaratan terlebih dahulu <a href="javascript:void(0)" onclick="$('.modal').modal('show')"><b>Disini</b></a></div>
<form enctype="multipart/form-data" class="needs-validation" style="background:#f5f5f5;border:3px dashed #777;border-radius:10px; padding:15px 10px" method="post" action="https://simpel.kelurahankota.bengkaliskab.go.id/buat/surat-keterangan-kematian" novalidate>
    <input type="hidden" name="_token" value="OYXbizqAZguz2aYPm2mhRJy4Iz91pTu4O2Ecxm2F">
    <div class="row">
        <div class="col-12">
            <h5 class="mb-3 pb-3" style="color:#444;border-bottom:3px dashed #777">
                <center>Formulir Permohonan<br> <b>Surat Keterangan Kematian</b></center>
            </h5>
            <h6 style="border-bottom:2px dotted #111">Data Pemohon</h6>
        </div>


        <div class="col-md-12">
            <small for="firstName" class="text-muted"> NIK Pemohon </small>
            <input onchange="if(this.value.length < 16 || this.value.length > 16){ alert('NIK haru 16 digit');this.value='';this.focus();}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" type="number" class="form-control " placeholder="Masukkan NIK Pemohon" name="nik_pemohon" required>

        </div>
        <div class="col-md-12">
            <small for="firstName" class="text-muted"> Nama Pemohon </small>
            <input type="text" class="form-control " placeholder="Masukkan Nama Pemohon" name="nama_pemohon" required>

        </div>
        <div class="col-md-12">
            <small for="firstName" class="text-muted"> Alamat Pemohon </small>
            <input type="text" class="form-control " placeholder="Masukkan Alamat Pemohon" name="alamat_pemohon" required>

        </div>
        <div class="col-md-12">
            <small for="firstName" class="text-muted"> Nomor Telp atau WA Pemohon </small>
            <input maxlength="13" onchange="if(!nohp(this.value) || this.value.length < 11 || this.value.length > 13){ alert('No Telp atau Wa tidak valid');this.value='';this.focus();}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" type="number" class="form-control " placeholder="Masukkan Nomor Telp atau WA Pemohon" name="nomor_telp_atau_wa_pemohon" required>

        </div>


        <div class="col-md-6  col-6">
            <small class="text-muted" for="firstName">RW Warga yang dilapor</small>
            <select name="rw" class="form-control " required onchange="if(this.value){$('.rt').load('https://simpel.kelurahankota.bengkaliskab.go.id/checkrt/'+this.value);}">
                <option value="">-pilih-</option>
                <option value="001">001</option>
                <option value="002">002</option>
                <option value="003">003</option>
            </select>
        </div>
        <div class="col-md-6 col-6">
            <small class="text-muted" for="firstName">RT Warga yang dilapor</small>
            <select name="rt" class="form-control rt " required>
                <option value="">-pilih-</option>

            </select>
        </div>


        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">Nomor Kartu Keluarga </small>
            <input type="Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control " placeholder="Masukkan Nomor Kartu Keluarga" name="nomor_kartu_keluarga" required>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">KTP Pemohon <i class="text-warning">(?) scan atau foto</i></small>
            <input onchange="fileselect('ktp_pemohon')" required type="File" class="form-control " id="ktp_pemohon" name="ktp_pemohon">
        </div>
        <div class="col-12  mt-3">
            <h6 for="" style="border-bottom:2px dotted #111">Data Warga Yang Dilapor </h6>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">Nama </small>
            <input type="Text" class="form-control " placeholder="Masukkan Nama" name="nama" required>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">NIK </small>
            <input type="Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control " placeholder="Masukkan NIK" name="nik" required>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">Tempat Lahir </small>
            <input type="Text" class="form-control " placeholder="Masukkan Tempat Lahir" name="tempat_lahir" required>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">Tanggal Lahir </small>
            <input type="Date" class="form-control " placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" required>

        </div>
        <div class="col-md-6 col-12 ">
            <small for="firstName" class="text-muted">Agama</small>

            <select required name="agama" class="form-control ">
                <option value="">--pilih--</option>
                <option value="Islam">Islam</option>
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Kathollik">Kathollik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
            </select>
        </div>
        <div class="col-md-6 col-12 ">
            <small for="firstName" class="text-muted">Status Kawin</small>

            <select required name="status_kawin" class="form-control ">
                <option value="">--pilih--</option>
                <option value="Kawin">Kawin</option>
                <option value="Belum Kawin">Belum Kawin</option>
            </select>
        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">Pekerjaan </small>
            <input type="Text" class="form-control " placeholder="Masukkan Pekerjaan" name="pekerjaan" required>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">KTP </small>
            <input onchange="fileselect('ktp')" required type="File" class="form-control " id="ktp" name="ktp">
        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">KK <i class="text-warning">(?) scan atau foto</i></small>
            <input onchange="fileselect('kk')" required type="File" class="form-control " id="kk" name="kk">
        </div>
        <div class="col-12  mt-3">
            <h6 for="" style="border-bottom:2px dotted #111">Telah Meninggal Dunia Pada : </h6>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">Tanggal </small>
            <input type="Date" class="form-control " placeholder="Masukkan Tanggal" name="tanggal" required>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">Pukul </small>
            <input type="Time" class="form-control " placeholder="Masukkan Pukul" name="pukul" required>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">Tempat Kematian </small>
            <input type="Text" class="form-control " placeholder="Masukkan Tempat Kematian" name="tempat_kematian" required>

        </div>
        <div class="col-md-6 col-12 ">
            <small for="firstName" class="text-muted">Penyebab Kematian</small>

            <select required name="penyebab_kematian" class="form-control ">
                <option value="">--pilih--</option>
                <option value="Sakit biasa/Tua">Sakit biasa/Tua</option>
                <option value="Wabah penyakit">Wabah penyakit</option>
                <option value="Kecelakaan">Kecelakaan</option>
                <option value="Kriminalitas">Kriminalitas</option>
                <option value="Bunuh diri">Bunuh diri</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
        <div class="col-md-6 col-12 ">
            <small for="firstName" class="text-muted">Yang Menerangkang</small>

            <select required name="yang_menerangkang" class="form-control ">
                <option value="">--pilih--</option>
                <option value="Dokter">Dokter</option>
                <option value="Tenaga Kesehatan">Tenaga Kesehatan</option>
                <option value="Kepolisian">Kepolisian</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">Surat Keterangan Kematian <i class="text-warning">(?) Dari Rumah Sakit</i></small>
            <input onchange="fileselect('surat_keterangan_kematian')" required type="File" class="form-control " id="surat_keterangan_kematian" name="surat_keterangan_kematian">
        </div>
        <div class="col-12  mt-3">
            <h6 for="" style="border-bottom:2px dotted #111">Data Saksi </h6>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">Nama Saksi I </small>
            <input type="Text" class="form-control " placeholder="Masukkan Nama Saksi I" name="nama_saksi_i" required>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">NIK Saksi I </small>
            <input type="Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control " placeholder="Masukkan NIK Saksi I" name="nik_saksi_i" required>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">KTP Saksi I <i class="text-warning">(?) scan atau foto</i></small>
            <input onchange="fileselect('ktp_saksi_i')" required type="File" class="form-control " id="ktp_saksi_i" name="ktp_saksi_i">
        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">Nomor KK Saksi I </small>
            <input type="Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control " placeholder="Masukkan Nomor KK Saksi I" name="nomor_kk_saksi_i" required>

        </div>

        <div class="col-12">
            <hr class="py-0 mt-4 mt-0">
        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">Nama Saksi II </small>
            <input type="Text" class="form-control " placeholder="Masukkan Nama Saksi II" name="nama_saksi_ii" required>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">NIK Saksi II </small>
            <input type="Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control " placeholder="Masukkan NIK Saksi II" name="nik_saksi_ii" required>

        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">KTP Saksi II <i class="text-warning">(?) scan atau foto</i></small>
            <input onchange="fileselect('ktp_saksi_ii')" required type="File" class="form-control " id="ktp_saksi_ii" name="ktp_saksi_ii">
        </div>
        <div class="col-md-6 col-12">
            <small class="text-muted" for="firstName">Nomor KK Saksi II </small>
            <input type="Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control " placeholder="Masukkan Nomor KK Saksi II" name="nomor_kk_saksi_ii" required>

        </div>
    </div>



    <hr class="mb-4">
    <button class="btn btn-primary btn-md btn-block btn-kirim" onclick="if(confirm('Apakah anda sudah yakin mengisi semua data dengan benar ?')){this.submit()}" type="submit" name="proses" value="true">Kirim Permohonan <i class="fa fa-envelope" aria-hidden="true"></i> </button>
</form>
<br>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    const compressImage = async (file, {
        quality = 1,
        type = file.type
    }) => {
        // Get as image data
        const imageBitmap = await createImageBitmap(file);

        // Draw to canvas
        const canvas = document.createElement('canvas');
        canvas.width = imageBitmap.width;
        canvas.height = imageBitmap.height;
        const ctx = canvas.getContext('2d');
        // const [newWidth, newHeight] = 1000, 1000);
        ctx.drawImage(imageBitmap, 0, 0);

        // Turn into Blob
        const blob = await new Promise((resolve) =>
            canvas.toBlob(resolve, type, quality)
        );

        // Turn Blob into File
        return new File([blob], file.name, {
            type: blob.type,
        });
    };

    // Get the selected file from the file input

    const fileselect = async (par) => {
        // Get the files
        const e = document.querySelector('#' + par);
        var fil = e.value;
        if (fil != '') {
            var checkimg = fil.toLowerCase();
            if (!checkimg.match(/(\.jpg|\.png|\.JPG|\.PNG|\.PDF|\.pdf)$/)) { // validation of file extension using regular expression before file upload
                e.value = '';
                alert('File hanya mendukuing format gambar JPG , PNG dan PDF');
                return false;
            }
        }
        const {
            files
        } = e;

        // No files selected

        // We'll store the files in this data transfer object
        const dataTransfer = new DataTransfer();

        // For every file in the files list
        for (const file of files) {
            // We don't have to compress files that aren't images
            if (!file.type.startsWith('image')) {
                // Ignore this file, but do add it to our result
                dataTransfer.items.add(file);
                continue;
            }

            // We compress the file by 50%
            const compressedFile = await compressImage(file, {
                quality: 0.3,
                type: 'image/jpeg',
            });

            // Save back the compressed file instead of the original file
            dataTransfer.items.add(compressedFile);
        }

        // Set value of the file input to our new files list
        e.files = dataTransfer.files;
        // alert(e.files);
    };
</script>
<script>
    function nohp(phone) {
        const prefix = phone.slice(0, 4);
        if (['0831', '0832', '0833', '0838'].includes(prefix)) return 'axis';
        if (['0895', '0896', '0897', '0898', '0899'].includes(prefix)) return 'three';
        if (['0817', '0818', '0819', '0859', '0878', '0877'].includes(prefix)) return 'xl';
        if (['0814', '0815', '0816', '0855', '0856', '0857', '0858'].includes(prefix)) return 'indosat';
        if (['0812', '0813', '0852', '0853', '0821', '0823', '0822', '0851', '0811'].includes(prefix)) return 'telkomsel';
        if (['0881', '0882', '0883', '0884', '0885', '0886', '0887', '0888', '0889'].includes(prefix)) return 'smartfren';
        return null;
    }

    function ceksizetype(el) {
        var file = el.value;
        if (file != '') {
            var checkimg = file.toLowerCase();
            if (!checkimg.match(/(\.jpg|\.png|\.JPG|\.PNG|\.PDF|\.pdf)$/)) { // validation of file extension using regular expression before file upload
                el.value = '';
                alert('File hanya mendukuing format gambar JPG , PNG dan PDF');
                return false;
            }
            //   var src = el; 
            //   // alert(src.files[0].size);
            //   if(src.files[0].size >  1024000)  // validation according to file size
            //   {
            //   el.value='';

            //  alert('Ukuran file terlalu besar, Maksimal hanya 500KB');
            //       return false;
            //    }
            return true;
        }
    }
</script>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Persyaratan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="MsoNormal" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: normal;"><span style="font-size: 10.5pt; font-family: Arial, sans-serif;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Syarat-syarat pengurus pengurusan melalui Sistem Pelayanan (Simpel) Kelurahan Kota Bengkalis sebagai berikut :</font>
                        </font>
                        <o:p></o:p>
                    </span></p>
                <ol start="1" type="1">
                    <li class="MsoNormal" style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: Arial, sans-serif;">Dokumen/Foto/Hasil Scan Kartu Tanda Penduduk (KTP) Pemohon;</span></li>
                    <li class="MsoNormal" style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: Arial, sans-serif;">Dokumen/Foto/Hasil Scan Kartu Tanda Penduduk (KTP) yang meninggal dunia;</span></li>
                    <li class="MsoNormal" style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <font style="vertical-align: inherit;">Dokumen/Foto/Hasil Scan Kartu Keluarga (KK) yang meninggal dunia;</font>
                    </li>
                    <li class="MsoNormal" style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: Arial, sans-serif;">Dokumen/Foto/Hasil Scan Surat Keterangan Kematian dari Rumah Sakit/Puskesmas; dan</span></li>
                    <li class="MsoNormal" style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: Arial, sans-serif;">Dokumen/Foto/Hasil Scan Kartu Tanda Penduduk (KTP) 2 (dua) Orang Saksi.</span></li>
                </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Tutup</button>

            </div>
        </div>
    </div>
</div>
</div>