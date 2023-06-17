
    <div class="alert alert-info" style="border-left:5px solid lightblue">Silahkan lengkapi kolom dibawah ini dengan data anda yang benar atau Baca Persyaratan terlebih dahulu <a href="javascript:void(0)" onclick="$('.modal').modal('show')"><b>Disini</b></a></div>
    <form enctype="multipart/form-data" class="needs-validation" style="background:#f5f5f5;border:3px dashed #777;border-radius:10px; padding:15px 10px" method="post" action="https://simpel.kelurahankota.bengkaliskab.go.id/buat/surat-keterangan-domisili-penduduk" novalidate>
        <input type="hidden" name="_token" value="w1TXJscvlTydBLJmFqXhUYaDQxfGUjJdx83F1uE7">
        <div class="row">
            <div class="col-12">
                <h5 class="mb-3 pb-3" style="color:#444;border-bottom:3px dashed #777">
                    <center>Formulir Permohonan<br> <b>Surat Keterangan Domisili Penduduk</b></center>
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
                <small for="firstName" class="text-muted"> Alamat Domisili </small>
                <input type="text" class="form-control " placeholder="Masukkan Alamat Pemohon" name="alamat_pemohon" required>

            </div>
            <div class="col-md-12">
                <small for="firstName" class="text-muted"> Nomor Telp atau WA Pemohon </small>
                <input maxlength="13" onchange="if(!nohp(this.value) || this.value.length < 11 || this.value.length > 13){ alert('No Telp atau Wa tidak valid');this.value='';this.focus();}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" type="number" class="form-control " placeholder="Masukkan Nomor Telp atau WA Pemohon" name="nomor_telp_atau_wa_pemohon" required>

            </div>


            <div class="col-md-6  col-6">
                <small class="text-muted" for="firstName">RW Domisili</small>
                <select name="rw" class="form-control " required onchange="if(this.value){$('.rt').load('https://simpel.kelurahankota.bengkaliskab.go.id/checkrt/'+this.value);}">
                    <option value="">-pilih-</option>
                    <option value="001">001</option>
                    <option value="002">002</option>
                    <option value="003">003</option>
                </select>
            </div>
            <div class="col-md-6 col-6">
                <small class="text-muted" for="firstName">RT Domisili</small>
                <select name="rt" class="form-control rt " required>
                    <option value="">-pilih-</option>

                </select>
            </div>


            <div class="col-md-6 col-12 ">
                <small for="firstName" class="text-muted">Jenis Kelamin</small>

                <select required name="jenis_kelamin" class="form-control ">
                    <option value="">--pilih--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value=" Perempuan"> Perempuan</option>
                </select>
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
                    <option value=" Hindu"> Hindu</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <div class="col-md-6 col-12">
                <small class="text-muted" for="firstName">Alamat KTP <i class="text-warning">(?) Alamat Sesuai KTP</i></small>
                <input type="Text" class="form-control " placeholder="Masukkan Alamat KTP" name="alamat_ktp" required>

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
                <small class="text-muted" for="firstName">KK </small>
                <input onchange="fileselect('kk')" required type="File" class="form-control " id="kk" name="kk">
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
                <p class="MsoNormal" style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: Arial, sans-serif;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Syarat-syarat pengurus pengurusan melalui Sistem Informasi Pelayanan Desa (Sipedes) sebagai berikut :</font>
                        </font>
                        <o:p></o:p>
                    </span></p>
                <ol start="1" type="1">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Dokumen/Foto/Hasil Scan Kartu Keluarga (KK); dan</font>
                    </font>
                    </span></li>
                    <li class="MsoNormal" style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Dokumen/Foto/Hasil Scan&nbsp;Kartu Tanda Penduduk (KTP).</font>
                        </font>
                    </li>
                </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Tutup</button>

            </div>
        </div>
    </div>
</div>
