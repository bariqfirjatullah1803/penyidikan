<!DOCTYPE html>
<html>

<head>
    <title>P21</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <script src="https://cdn.tiny.cloud/1/8ruryyv1pw5lv0nudelhfsql8uqcb4ale6qf34711vk5r3iw/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <style>
        .sidebar {
            background-color: #f8f9fa;
            padding: 10px;
        }

        .sidebar-item {
            margin-bottom: 10px;
            cursor: pointer;
        }

        .sidebar-item.active {
            font-weight: bold;
        }

        .form-card {
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            margin-bottom: 20px;
        }
    </style>
    <script>
        tinymce.init({
            selector: 'textarea#editor',
            skin: 'bootstrap',
            plugins: 'lists',
            toolbar: 'bold italic strikethrough blockquote bullist numlist',
            menubar: false,
        });
    </script>
</head>

<body>
    <nav class="navbar bg-body-tertiary navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('upload/') ?>logo-navbar-2.png" height="70">
                <img src="<?= base_url('upload/') ?>logo-navbar-1.png" height="70">
            </a>
        </div>
    </nav>
    <form action="<?= base_url('cetak') ?>" method="POST" id="formNext" enctype="multipart/form-data">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar sticky-top">
                        <?php $no = 1;
                        foreach ($list as $value): ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="list[<?= $value['file'] ?>]" id="step<?= $no ?>Checkbox"
                                onchange="toggleStep(<?= $no ?>)" <?= ($no == 1) ? 'checked disabled' : '' ?>>
                                <label class="form-check-label" for="step<?= $no ?>Checkbox">
                                    <?= $value['label'] ?>
                                </label>
                            </div>
                            <?php $no++;
                        endforeach ?>
                        <button type="submit" class="btn btn-primary w-100">Cetak</button>
                    </div>
                </div>
                <div class="col-md-9">
                    <?php $no = 1;
                    foreach ($list as $value): ?>
                        <div class="form-section" id="section<?= $no ?>" <?= ($no != 1) ? 'style="display: none;"' : '' ?>>
                            <?php
                            $data['label'] = $value['label'];
                            $view = 'form/' . $value['view'];
                            $this->load->view($view, $data);
                            ?>
                        </div>
                        <?php $no++;
                    endforeach ?>
                </div>
            </div>
        </div>
    </form>
    <script>
        function toggleStep(step) {
            var form = document.getElementById('formNext');
            var section = document.getElementById('section' + step);
            var checkbox = document.getElementById('step' + step + 'Checkbox');

            if (checkbox.checked) {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        }
        function duplicateSaksi() {
            // Dapatkan elemen kontainer saksi
            var container = document.querySelector('.saksi-container');

            
            
            // Dapatkan elemen saksi pertama
            var saksiItem = container.querySelector('.saksi-item');
            
            
            // Dapatkan clone elemen saksi pertama
            var clone = saksiItem.cloneNode(true);
            
            // var title = document.createElement('h5');
            // title.innerText = 'Saksi'
            // clone.appendChild(title)

            // Reset nilai input dalam elemen clone
            var inputs = clone.querySelectorAll('input[type="text"], textarea');
            inputs.forEach(function (input) {
                input.value = '';
            });

            // Tambahkan tombol "Hapus"
            var hapusButton = document.createElement('button');
            hapusButton.type = 'button';
            hapusButton.classList.add('btn', 'btn-sm', 'btn-danger', 'btn-remove-saksi');
            hapusButton.innerText = 'Hapus';

            // Tambahkan event listener untuk tombol "Hapus"
            hapusButton.addEventListener('click', function () {
                hapusSaksi(this);
            });

            // Tambahkan tombol "Hapus" ke dalam elemen clone
            clone.appendChild(hapusButton);

            // Tambahkan elemen clone ke dalam kontainer saksi
            container.appendChild(clone);
        }

        function hapusSaksi(button) {
            // Dapatkan elemen saksi yang ingin dihapus
            var saksiItem = button.parentNode;
            
            // Dapatkan elemen kontainer saksi
            var container = saksiItem.parentNode;
            console.log(container);

            // Hapus elemen saksi dari kontainer
            container.removeChild(saksiItem);
        }

        // Tangkap tombol "Tambah Saksi"
        var addSaksiButton = document.querySelector('.btn-add-saksi');

        // Tambahkan event listener untuk tombol "Tambah Saksi"
        addSaksiButton.addEventListener('click', function () {
            duplicateSaksi();
        });

        // Tangkap tombol "Hapus Saksi" di dalam kontainer saksi
        document.addEventListener('click', function (event) {
            if (event.target.classList.contains('btn-remove-saksi')) {
                hapusSaksi(event.target);
            }
        });

    </script>
    
    

    <script>
        // Menambahkan penyidik
        let indexPenyidik = 1;
        function tambahPenyidik() {
            const penyidikContainer = document.querySelector('.penyidik-container');

            const penyidikItem = document.createElement('div');
            penyidikItem.classList.add('penyidik-item');

            const penyidikTitle = document.createElement('h5');
            penyidikTitle.textContent = 'Penyidik';

            const namaInput = createInput1('text', 'Nama', `surat-perintah-penyidikan[penyidik][${indexPenyidik}][nama]`);
            const pangkatNipInput = createInput1('text', 'Pangkat / NIP', `surat-perintah-penyidikan[penyidik][${indexPenyidik}][pangkat-nip]`);
            const jabatanInput = createInput1('text', 'Jabatan', `surat-perintah-penyidikan[penyidik][${indexPenyidik}][jabatan]`);

            const deleteButton = createDeleteButton('hapusPenyidik(this)');

            penyidikItem.appendChild(penyidikTitle);
            penyidikItem.appendChild(namaInput);
            penyidikItem.appendChild(pangkatNipInput);
            penyidikItem.appendChild(jabatanInput);
            penyidikItem.appendChild(deleteButton);

            penyidikContainer.insertBefore(penyidikItem, penyidikContainer.lastElementChild);
            indexPenyidik++;
        }

        // Menghapus penyidik
        function hapusPenyidik(button) {
            const penyidikItem = button.parentNode;
            penyidikItem.remove();
        }

        // Fungsi pembantu untuk membuat elemen input
        function createInput1(type, label, name) {
            const inputContainer = document.createElement('div');
            inputContainer.classList.add('mb-3');

            const inputLabel = document.createElement('label');
            inputLabel.classList.add('form-label');
            inputLabel.textContent = label;

            const input = document.createElement('input');
            input.type = type;
            input.classList.add('form-control');
            input.name = name;

            inputContainer.appendChild(inputLabel);
            inputContainer.appendChild(input);

            return inputContainer;
        }

        // Fungsi pembantu untuk membuat tombol hapus
        function createDeleteButton(onClick) {
            const deleteButton = document.createElement('button');
            deleteButton.type = 'button';
            deleteButton.classList.add('btn', 'btn-danger');
            deleteButton.textContent = 'Hapus';
            deleteButton.setAttribute('onclick', onClick);

            return deleteButton;
        }

        // Event listener untuk tombol tambah penyidik
        const btnAddPenyidik = document.querySelector('.btn-add-penyidik');
        btnAddPenyidik.addEventListener('click', tambahPenyidik);

    </script>
    <script>
        function tambahPertanyaan1(containerId) {
            var container = document.getElementById(containerId);
            var pertanyaanContainer = container.querySelector('#pertanyaan-berita-acara-pemeriksaan-saksi');
            var pertanyaan = document.createElement('div');
            pertanyaan.setAttribute('class', 'pertanyaan');
            var pertanyaanInput = document.createElement('input');
            pertanyaanInput.setAttribute('type', 'text');
            pertanyaanInput.setAttribute('class', 'form-control');
            pertanyaanInput.setAttribute('name', containerId + '[pertanyaan][]');
            var hapusButton = document.createElement('button');
            hapusButton.setAttribute('type', 'button');
            hapusButton.setAttribute('class', 'btn btn-danger');
            hapusButton.setAttribute('onclick', 'hapusPertanyaan1(this, \'' + containerId + '\')');
            hapusButton.textContent = 'Hapus';
            pertanyaan.appendChild(pertanyaanInput);
            pertanyaan.appendChild(hapusButton);
            pertanyaanContainer.appendChild(pertanyaan);
        }

        function hapusPertanyaan1(button, containerId) {
            var pertanyaanContainer = document.getElementById(containerId).querySelector('#pertanyaan-berita-acara-pemeriksaan-saksi');
            var pertanyaan = button.parentNode;
            pertanyaanContainer.removeChild(pertanyaan);
        }
    </script>

    <script>
        function tambahPertanyaan2(id) {
            var pertanyaanDiv = document.getElementById(id).querySelector("#pertanyaan");
            var pertanyaanCount = pertanyaanDiv.getElementsByTagName("div").length;

            var newPertanyaanDiv = document.createElement("div");
            newPertanyaanDiv.classList.add("mb-3");

            var newPertanyaanLabel = document.createElement("label");
            newPertanyaanLabel.classList.add("form-label");
            newPertanyaanLabel.textContent = "Pertanyaan";

            var newPertanyaanInput = document.createElement("input");
            newPertanyaanInput.type = "text";
            newPertanyaanInput.classList.add("form-control");
            newPertanyaanInput.name = id + "[pertanyaan][]";

            var hapusButton = document.createElement("button");
            hapusButton.type = "button";
            hapusButton.classList.add("btn", "btn-danger", "btn-sm");
            hapusButton.textContent = "Hapus";
            hapusButton.onclick = function () {
                hapusPertanyaan2(this);
            };

            newPertanyaanDiv.appendChild(newPertanyaanLabel);
            newPertanyaanDiv.appendChild(newPertanyaanInput);
            newPertanyaanDiv.appendChild(hapusButton);

            pertanyaanDiv.appendChild(newPertanyaanDiv);
        }

        function hapusPertanyaan2(button) {
            var pertanyaanDiv = button.parentNode;
            pertanyaanDiv.parentNode.removeChild(pertanyaanDiv);
        }
    </script>
    <script>
        const container = document.getElementById("surat-perintah-tugas");
        const dataContainer = document.getElementById("data-container");
        const tambahDataButton = document.getElementById("tambah-data");

        function tambahData() {
            const newDataDiv = document.createElement("div");
            newDataDiv.classList.add("data-petugas");

            const namaInput = document.createElement("input");
            namaInput.type = "text";
            namaInput.classList.add("form-control");
            namaInput.name = "surat-perintah-tugas[nama-petugas][]";
            newDataDiv.appendChild(namaInput);

            const nipInput = document.createElement("input");
            nipInput.type = "text";
            nipInput.classList.add("form-control");
            nipInput.name = "surat-perintah-tugas[nip-petugas][]";
            newDataDiv.appendChild(nipInput);

            const jabatanInput = document.createElement("input");
            jabatanInput.type = "text";
            jabatanInput.classList.add("form-control");
            jabatanInput.name = "surat-perintah-tugas[jabatan-petugas][]";
            newDataDiv.appendChild(jabatanInput);

            const hapusButton = document.createElement("button");
            hapusButton.type = "button";
            hapusButton.classList.add("btn", "btn-danger");
            hapusButton.textContent = "Hapus";
            hapusButton.addEventListener("click", function () {
                dataContainer.removeChild(newDataDiv);
            });
            newDataDiv.appendChild(hapusButton);

            dataContainer.appendChild(newDataDiv);
        }

        tambahDataButton.addEventListener("click", tambahData);
    </script>
    <script>
        // Fungsi untuk menambahkan data petugas
        function tambahPetugas2() {
            const container = document.getElementById("data-petugas-container2");

            const dataPetugas = document.createElement("div");
            dataPetugas.classList.add("data-petugas");

            const namaInput = createInput("Nama", "surat-perintah-penangkapan[nama-petugas][]");
            const nipInput = createInput("NIP", "surat-perintah-penangkapan[nip-petugas][]");
            const jabatanInput = createInput("Jabatan", "surat-perintah-penangkapan[jabatan-petugas][]");

            const hapusButton = createButton("Hapus", "btn-danger", () => {
                container.removeChild(dataPetugas);
            });

            dataPetugas.appendChild(namaInput);
            dataPetugas.appendChild(nipInput);
            dataPetugas.appendChild(jabatanInput);
            dataPetugas.appendChild(hapusButton);

            container.appendChild(dataPetugas);
        }

        // Fungsi untuk menambahkan data tersangka
        function tambahTersangka2() {
            const container = document.getElementById("data-tersangka-container2");

            const dataTersangka = document.createElement("div");
            dataTersangka.classList.add("data-tersangka");

            const namaInput = createInput("Nama", "surat-perintah-penangkapan[nama-tersangka][]");
            const nikInput = createInput("NIK", "surat-perintah-penangkapan[nik-tersangka][]");
            const ttlInput = createInput("Tempat Tanggal Lahir", "surat-perintah-penangkapan[tempat-lahir-tersangka][]");
            const kewarganegaraanInput = createInput("Kewarganegaraan", "surat-perintah-penangkapan[kewarganegaraan-tersangka][]");
            const alamatInput = createInput("Alamat", "surat-perintah-penangkapan[alamat-tersangka][]");

            const hapusButton = createButton("Hapus", "btn-danger", () => {
                container.removeChild(dataTersangka);
            });

            dataTersangka.appendChild(namaInput);
            dataTersangka.appendChild(nikInput);
            dataTersangka.appendChild(ttlInput);
            dataTersangka.appendChild(kewarganegaraanInput);
            dataTersangka.appendChild(alamatInput);
            dataTersangka.appendChild(hapusButton);

            container.appendChild(dataTersangka);
        }

        // Fungsi utilitas untuk membuat input dengan label
        function createInput(labelText, inputName) {
            const label = document.createElement("label");
            label.textContent = labelText;

            const input = document.createElement("input");
            input.type = "text";
            input.classList.add("form-control");
            input.name = inputName;

            const container = document.createElement("div");
            container.classList.add("mb-3");
            container.appendChild(label);
            container.appendChild(input);

            return container;
        }

        // Fungsi utilitas untuk membuat tombol dengan kelas dan fungsi klik
        function createButton(text, className, clickHandler) {
            const button = document.createElement("button");
            button.textContent = text;
            button.classList.add("btn", className);
            button.type = "button";
            button.addEventListener("click", clickHandler);

            return button;
        }
    </script>
    <script>
        let petugasCount = 1;

        function tambahPetugas3() {
            const container = document.getElementById("petugas-container");

            const petugas = document.createElement("div");
            petugas.className = "petugas";

            const namaLabel = document.createElement("label");
            namaLabel.className = "form-label";
            namaLabel.textContent = "Nama";

            const namaInput = document.createElement("input");
            namaInput.type = "text";
            namaInput.className = "form-control";
            namaInput.name = `berita-acara-penangkapan[petugas][${petugasCount}][nama]`;

            const nipLabel = document.createElement("label");
            nipLabel.className = "form-label";
            nipLabel.textContent = "NIP";

            const nipInput = document.createElement("input");
            nipInput.type = "text";
            nipInput.className = "form-control";
            nipInput.name = `berita-acara-penangkapan[petugas][${petugasCount}][nip]`;

            const jabatanLabel = document.createElement("label");
            jabatanLabel.className = "form-label";
            jabatanLabel.textContent = "Jabatan";

            const jabatanInput = document.createElement("input");
            jabatanInput.type = "text";
            jabatanInput.className = "form-control";
            jabatanInput.name = `berita-acara-penangkapan[petugas][${petugasCount}][jabatan]`;

            petugas.appendChild(namaLabel);
            petugas.appendChild(namaInput);
            petugas.appendChild(nipLabel);
            petugas.appendChild(nipInput);
            petugas.appendChild(jabatanLabel);
            petugas.appendChild(jabatanInput);

            container.appendChild(petugas);

            petugasCount++;
        }

        function hapusPetugas3() {
            const container = document.getElementById("petugas-container");
            const petugas = container.getElementsByClassName("petugas");

            if (petugas.length > 0) {
                container.removeChild(petugas[petugas.length - 1]);
                petugasCount--;
            }
        }
    </script>
    <script>
        let petugasCount4 = 1;

        function tambahPetugas4() {
            const container4 = document.getElementById("petugas-container4");

            const petugasDiv = document.createElement("div");
            petugasDiv.className = "mb-3";


            const namaLabel = document.createElement("label");
            namaLabel.className = "form-label";
            namaLabel.textContent = "Nama Petugas";

            const namaInput = document.createElement("input");
            namaInput.type = "text";
            namaInput.className = "form-control";
            namaInput.name = `berita-acara-penangkapan[petugas][${petugasCount}][nama-petugas]`;

            const nipLabel = document.createElement("label");
            nipLabel.className = "form-label";
            nipLabel.textContent = "NIP Petugas";

            const nipInput = document.createElement("input");
            nipInput.type = "text";
            nipInput.className = "form-control";
            nipInput.name = `berita-acara-penangkapan[petugas][${petugasCount}][nip-petugas]`;

            const jabatanLabel = document.createElement("label");
            jabatanLabel.className = "form-label";
            jabatanLabel.textContent = "Jabatan Petugas";

            const jabatanInput = document.createElement("input");
            jabatanInput.type = "text";
            jabatanInput.className = "form-control";
            jabatanInput.name = `berita-acara-penangkapan[petugas][${petugasCount}][jabatan-petugas]`;

            petugasDiv.appendChild(namaLabel);
            petugasDiv.appendChild(namaInput);
            petugasDiv.appendChild(nipLabel);
            petugasDiv.appendChild(nipInput);
            petugasDiv.appendChild(jabatanLabel);
            petugasDiv.appendChild(jabatanInput);

            container4.appendChild(petugasDiv);

            petugasCount4++;
        }

        function hapusPetugas4(button) {
            const petugasDiv = button.parentElement;
            petugasDiv.remove();
        }
    </script>

    <script>
        // Fungsi untuk menambahkan petugas
        function tambahPetugas5() {
            let container = document.getElementById('petugas-container5');
            let petugasCount = container.getElementsByClassName('petugas').length;

            let petugasDiv = document.createElement('div');
            petugasDiv.className = 'petugas';

            let namaInput = document.createElement('input');
            namaInput.type = 'text';
            namaInput.className = 'form-control';
            namaInput.name = 'berita-acara-penggeledahan[petugas-penyaksikan][' + petugasCount + '][nama]';
            namaInput.placeholder = 'Nama';

            let jabatanInput = document.createElement('input');
            jabatanInput.type = 'text';
            jabatanInput.className = 'form-control';
            jabatanInput.name = 'berita-acara-penggeledahan[petugas-penyaksikan][' + petugasCount + '][jabatan]';
            jabatanInput.placeholder = 'Jabatan';

            let alamatInput = document.createElement('input');
            alamatInput.type = 'text';
            alamatInput.className = 'form-control';
            alamatInput.name = 'berita-acara-penggeledahan[petugas-penyaksikan][' + petugasCount + '][alamat]';
            alamatInput.placeholder = 'Alamat';

            let hapusButton = document.createElement('button');
            hapusButton.type = 'button';
            hapusButton.className = 'btn btn-danger btn-sm';
            hapusButton.innerHTML = 'Hapus Petugas';
            hapusButton.onclick = function () {
                hapusPetugas5(petugasDiv);
            };

            petugasDiv.appendChild(namaInput);
            petugasDiv.appendChild(jabatanInput);
            petugasDiv.appendChild(alamatInput);
            petugasDiv.appendChild(hapusButton);

            container.appendChild(petugasDiv);
        }

        // Fungsi untuk menghapus petugas
        function hapusPetugas5(petugasDiv) {
            let container = document.getElementById('petugas-container5');
            container.removeChild(petugasDiv);
        }

    </script>
    <script>
        let diperintahCount = 1;
        function tambahGrup() {
            var grupData = document.getElementById("surat-perintah-penggeledahan");
            var divGrupData = document.createElement("div");
            divGrupData.className = "grup-data";

            var divNamaDiperintah = document.createElement("div");
            divNamaDiperintah.className = "mb-3";
            var labelNamaDiperintah = document.createElement("label");
            labelNamaDiperintah.className = "form-label";
            labelNamaDiperintah.innerHTML = "Nama yang diperintah";
            var inputNamaDiperintah = document.createElement("input");
            inputNamaDiperintah.type = "text";
            inputNamaDiperintah.className = "form-control";
            inputNamaDiperintah.name = `surat-perintah-penggeledahan[petugas][${diperintahCount}][nama-diperintah]`;
            divNamaDiperintah.appendChild(labelNamaDiperintah);
            divNamaDiperintah.appendChild(inputNamaDiperintah);

            var divPangkatGolongan = document.createElement("div");
            divPangkatGolongan.className = "mb-3";
            var labelPangkatGolongan = document.createElement("label");
            labelPangkatGolongan.className = "form-label";
            labelPangkatGolongan.innerHTML = "Pangkat golongan";
            var inputPangkatGolongan = document.createElement("input");
            inputPangkatGolongan.type = "text";
            inputPangkatGolongan.className = "form-control";
            inputPangkatGolongan.name = `surat-perintah-penggeledahan[petugas][${diperintahCount}][pangkat-golongan]`;
            divPangkatGolongan.appendChild(labelPangkatGolongan);
            divPangkatGolongan.appendChild(inputPangkatGolongan);

            var divJabatan = document.createElement("div");
            divJabatan.className = "mb-3";
            var labelJabatan = document.createElement("label");
            labelJabatan.className = "form-label";
            labelJabatan.innerHTML = "Jabatan";
            var inputJabatan = document.createElement("input");
            inputJabatan.type = "text";
            inputJabatan.className = "form-control";
            inputJabatan.name = `surat-perintah-penggeledahan[petugas][${diperintahCount}][jabatan]`;
            divJabatan.appendChild(labelJabatan);
            divJabatan.appendChild(inputJabatan);

            var divAgama = document.createElement("div");
            divAgama.className = "mb-3";
            var labelAgama = document.createElement("label");
            labelAgama.className = "form-label";
            labelAgama.innerHTML = "Agama";
            var inputAgama = document.createElement("input");
            inputAgama.type = "text";
            inputAgama.className = "form-control";
            inputAgama.name = `surat-perintah-penggeledahan[petugas][${diperintahCount}][agama]`;
            divAgama.appendChild(labelAgama);
            divAgama.appendChild(inputAgama);

            diperintahCount++

            var divHapusButton = document.createElement("div");
            divHapusButton.className = "mb-3";
            var hapusButton = document.createElement("button");
            hapusButton.type = "button";
            hapusButton.className = "btn btn-danger";
            hapusButton.innerHTML = "Hapus";
            hapusButton.onclick = function () {
                hapusGrup(divGrupData);
            };
            divHapusButton.appendChild(hapusButton);

            divGrupData.appendChild(divNamaDiperintah);
            divGrupData.appendChild(divPangkatGolongan);
            divGrupData.appendChild(divJabatan);
            divGrupData.appendChild(divAgama);
            divGrupData.appendChild(divHapusButton);

            grupData.appendChild(divGrupData);
        }

        function hapusGrup(grup) {
            grup.parentNode.removeChild(grup);
        }
    </script>

    <script>
        function tambahPetugas5() {
            const grupPetugas = document.createElement("div");
            grupPetugas.classList.add("petugas");

            const namaLabel = document.createElement("label");
            namaLabel.innerHTML = "Nama";
            const namaInput = document.createElement("input");
            namaInput.setAttribute("type", "text");
            namaInput.classList.add("form-control");
            namaInput.setAttribute("name", "berita-acara-penyitaan[nama-petugas][]");

            const nipLabel = document.createElement("label");
            nipLabel.innerHTML = "NIP";
            const nipInput = document.createElement("input");
            nipInput.setAttribute("type", "text");
            nipInput.classList.add("form-control");
            nipInput.setAttribute("name", "berita-acara-penyitaan[nip-petugas][]");

            const jabatanLabel = document.createElement("label");
            jabatanLabel.innerHTML = "Jabatan";
            const jabatanInput = document.createElement("input");
            jabatanInput.setAttribute("type", "text");
            jabatanInput.classList.add("form-control");
            jabatanInput.setAttribute("name", "berita-acara-penyitaan[jabatan-petugas][]");

            const hapusButton = document.createElement("button");
            hapusButton.setAttribute("type", "button");
            hapusButton.classList.add("btn", "btn-danger");
            hapusButton.innerHTML = "Hapus";
            hapusButton.addEventListener("click", function () {
                hapusPetugas6(this);
            });

            grupPetugas.appendChild(namaLabel);
            grupPetugas.appendChild(namaInput);
            grupPetugas.appendChild(nipLabel);
            grupPetugas.appendChild(nipInput);
            grupPetugas.appendChild(jabatanLabel);
            grupPetugas.appendChild(jabatanInput);
            grupPetugas.appendChild(hapusButton);

            const saksiContainer = document.getElementById("saksi-berita-acara-penyitaan");
            saksiContainer.appendChild(grupPetugas);
        }

        function hapusPetugas6(button) {
            const grupPetugas = button.parentNode;
            grupPetugas.remove();
        }

    </script>

    <script>
        let petugasCount7 = 1;
        function tambahPetugas7() {
            const grupPetugas = document.createElement("div");
            grupPetugas.classList.add("petugas");

            const namaLabel = document.createElement("label");
            namaLabel.innerHTML = "Nama";
            const namaInput = document.createElement("input");
            namaInput.setAttribute("type", "text");
            namaInput.classList.add("form-control");
            namaInput.setAttribute("name", `surat-acara-penyitaan[petugas][${petugasCount7}][nama-petugas]`);

            const nipLabel = document.createElement("label");
            nipLabel.innerHTML = "NIP";
            const nipInput = document.createElement("input");
            nipInput.setAttribute("type", "text");
            nipInput.classList.add("form-control");
            nipInput.setAttribute("name", `surat-acara-penyitaan[petugas][${petugasCount7}][nip-petugas]`);

            const jabatanLabel = document.createElement("label");
            jabatanLabel.innerHTML = "Jabatan";
            const jabatanInput = document.createElement("input");
            jabatanInput.setAttribute("type", "text");
            jabatanInput.classList.add("form-control");
            jabatanInput.setAttribute("name", `surat-acara-penyitaan[petugas][${petugasCount7}][jabatan-petugas]`);

            petugasCount7++

            const hapusButton = document.createElement("button");
            hapusButton.setAttribute("type", "button");
            hapusButton.classList.add("btn", "btn-danger");
            hapusButton.innerHTML = "Hapus";
            hapusButton.addEventListener("click", function () {
                hapusPetugas7(this);
            });

            grupPetugas.appendChild(namaLabel);
            grupPetugas.appendChild(namaInput);
            grupPetugas.appendChild(nipLabel);
            grupPetugas.appendChild(nipInput);
            grupPetugas.appendChild(jabatanLabel);
            grupPetugas.appendChild(jabatanInput);
            grupPetugas.appendChild(hapusButton);

            const saksiContainer = document.getElementById("saksi-surat-acara-penyitaan");
            saksiContainer.appendChild(grupPetugas);
        }

        function hapusPetugas7(button) {
            const grupPetugas = button.parentNode;
            grupPetugas.remove();
        }

    </script>
    <script>
        let saksiCount2 = 1;
        function tambahSaksi2() {
            const saksiContainer = document.getElementById("daftar-saksi");

            const saksiElement = document.createElement("div");
            saksiElement.classList.add("mb-3");

            const namaLabel = document.createElement("label");
            namaLabel.innerHTML = "Nama";
            const namaInput = document.createElement("input");
            namaInput.type = "text";
            namaInput.classList.add("form-control");
            namaInput.name = `daftar-saksi[saksi][${saksiCount2}][nama]`;

            const kebangsaanLabel = document.createElement("label");
            kebangsaanLabel.innerHTML = "Kebangsaan";
            const kebangsaanInput = document.createElement("input");
            kebangsaanInput.type = "text";
            kebangsaanInput.classList.add("form-control");
            kebangsaanInput.name = `daftar-saksi[saksi][${saksiCount2}][kebangsaan]`;

            const alamatLabel = document.createElement("label");
            alamatLabel.innerHTML = "Alamat";
            const alamatInput = document.createElement("input");
            alamatInput.type = "text";
            alamatInput.classList.add("form-control");
            alamatInput.name = `daftar-saksi[saksi][${saksiCount2}][alamat]`;

            const pekerjaanLabel = document.createElement("label");
            pekerjaanLabel.innerHTML = "Pekerjaan";
            const pekerjaanInput = document.createElement("input");
            pekerjaanInput.type = "text";
            pekerjaanInput.classList.add("form-control");
            pekerjaanInput.name = `daftar-saksi[saksi][${saksiCount2}][pekerjaan]`;

            const agamaLabel = document.createElement("label");
            agamaLabel.innerHTML = "Agama";
            const agamaInput = document.createElement("input");
            agamaInput.type = "text";
            agamaInput.classList.add("form-control");
            agamaInput.name = `daftar-saksi[saksi][${saksiCount2}][agama]`;

            const keteranganLabel = document.createElement("label");
            keteranganLabel.innerHTML = "Keterangan";
            const keteranganTextarea = document.createElement("textarea");
            keteranganTextarea.classList.add("form-control");
            keteranganTextarea.name = `daftar-saksi[saksi][${saksiCount2}][keterangan]`;

            saksiCount2++

            const hapusButton = document.createElement("button");
            hapusButton.type = "button";
            hapusButton.classList.add("btn", "btn-danger");
            hapusButton.innerHTML = "Hapus";
            hapusButton.addEventListener("click", function () {
                hapusSaksi2(this);
            });

            saksiElement.appendChild(namaLabel);
            saksiElement.appendChild(namaInput);
            saksiElement.appendChild(kebangsaanLabel);
            saksiElement.appendChild(kebangsaanInput);
            saksiElement.appendChild(alamatLabel);
            saksiElement.appendChild(alamatInput);
            saksiElement.appendChild(pekerjaanLabel);
            saksiElement.appendChild(pekerjaanInput);
            saksiElement.appendChild(agamaLabel);
            saksiElement.appendChild(agamaInput);
            saksiElement.appendChild(keteranganLabel);
            saksiElement.appendChild(keteranganTextarea);
            saksiElement.appendChild(hapusButton);

            saksiContainer.appendChild(saksiElement);
        }

        function hapusSaksi2(button) {
            const saksiElement = button.parentNode;
            saksiElement.remove();
        }

    </script>
    <script>
        function tambahTersangka() {
            const tersangkaContainer = document.getElementById("daftar-tersangka");

            const tersangkaElement = document.createElement("div");
            tersangkaElement.classList.add("mb-3");

            const namaLabel = document.createElement("label");
            namaLabel.innerHTML = "Nama";
            const namaInput = document.createElement("input");
            namaInput.type = "text";
            namaInput.classList.add("form-control");
            namaInput.name = "daftar-tersangka[nama][]";

            const kebangsaanLabel = document.createElement("label");
            kebangsaanLabel.innerHTML = "Kebangsaan";
            const kebangsaanInput = document.createElement("input");
            kebangsaanInput.type = "text";
            kebangsaanInput.classList.add("form-control");
            kebangsaanInput.name = "daftar-tersangka[kebangsaan][]";

            const alamatLabel = document.createElement("label");
            alamatLabel.innerHTML = "Alamat";
            const alamatInput = document.createElement("input");
            alamatInput.type = "text";
            alamatInput.classList.add("form-control");
            alamatInput.name = "daftar-tersangka[alamat][]";

            const pekerjaanLabel = document.createElement("label");
            pekerjaanLabel.innerHTML = "Pekerjaan";
            const pekerjaanInput = document.createElement("input");
            pekerjaanInput.type = "text";
            pekerjaanInput.classList.add("form-control");
            pekerjaanInput.name = "daftar-tersangka[pekerjaan][]";

            const agamaLabel = document.createElement("label");
            agamaLabel.innerHTML = "Agama";
            const agamaInput = document.createElement("input");
            agamaInput.type = "text";
            agamaInput.classList.add("form-control");
            agamaInput.name = "daftar-tersangka[agama][]";

            const keteranganLabel = document.createElement("label");
            keteranganLabel.innerHTML = "Keterangan";
            const keteranganTextarea = document.createElement("textarea");
            keteranganTextarea.classList.add("form-control");
            keteranganTextarea.name = "daftar-tersangka[keterangan][]";

            const hapusButton = document.createElement("button");
            hapusButton.type = "button";
            hapusButton.classList.add("btn", "btn-danger");
            hapusButton.innerHTML = "Hapus";
            hapusButton.addEventListener("click", function () {
                hapusTersangka(this);
            });

            tersangkaElement.appendChild(namaLabel);
            tersangkaElement.appendChild(namaInput);
            tersangkaElement.appendChild(kebangsaanLabel);
            tersangkaElement.appendChild(kebangsaanInput);
            tersangkaElement.appendChild(alamatLabel);
            tersangkaElement.appendChild(alamatInput);
            tersangkaElement.appendChild(pekerjaanLabel);
            tersangkaElement.appendChild(pekerjaanInput);
            tersangkaElement.appendChild(agamaLabel);
            tersangkaElement.appendChild(agamaInput);
            tersangkaElement.appendChild(keteranganLabel);
            tersangkaElement.appendChild(keteranganTextarea);
            tersangkaElement.appendChild(hapusButton);

            tersangkaContainer.appendChild(tersangkaElement);
        }

        function hapusTersangka(button) {
            const tersangkaElement = button.parentNode;
            tersangkaElement.remove();
        }

    </script>

    <script>
        function tambahBarangBukti() {
            const barangBuktiContainer = document.getElementById("daftar-barang-bukti-container");

            const barangBuktiElement = document.createElement("div");
            barangBuktiElement.classList.add("barang-bukti");

            const nomorRegisterLabel = document.createElement("label");
            nomorRegisterLabel.innerHTML = "Nomor Register Barang Bukti";
            const nomorRegisterInput = document.createElement("input");
            nomorRegisterInput.type = "text";
            nomorRegisterInput.classList.add("form-control");
            nomorRegisterInput.name = "daftar-barang-bukti[nomor-register][]";

            const jenisBarangLabel = document.createElement("label");
            jenisBarangLabel.innerHTML = "Jenis Barang Bukti";
            const jenisBarangInput = document.createElement("input");
            jenisBarangInput.type = "text";
            jenisBarangInput.classList.add("form-control");
            jenisBarangInput.name = "daftar-barang-bukti[jenis-barang][]";

            const pemilikLabel = document.createElement("label");
            pemilikLabel.innerHTML = "Pemilik yang Diakui";
            const pemilikInput = document.createElement("input");
            pemilikInput.type = "text";
            pemilikInput.classList.add("form-control");
            pemilikInput.name = "daftar-barang-bukti[pemilik-diakui][]";

            const disitaLabel = document.createElement("label");
            disitaLabel.innerHTML = "Disita";
            const disitaInput = document.createElement("input");
            disitaInput.type = "text";
            disitaInput.classList.add("form-control");
            disitaInput.name = "daftar-barang-bukti[disita][]";

            const tanggalLabel = document.createElement("label");
            tanggalLabel.innerHTML = "Tanggal";
            const tanggalInput = document.createElement("input");
            tanggalInput.type = "text";
            tanggalInput.classList.add("form-control");
            tanggalInput.name = "daftar-barang-bukti[tanggal][]";

            const dariLabel = document.createElement("label");
            dariLabel.innerHTML = "Dari";
            const dariInput = document.createElement("input");
            dariInput.type = "text";
            dariInput.classList.add("form-control");
            dariInput.name = "daftar-barang-bukti[dari][]";

            const olehLabel = document.createElement("label");
            olehLabel.innerHTML = "Oleh";
            const olehInput = document.createElement("input");
            olehInput.type = "text";
            olehInput.classList.add("form-control");
            olehInput.name = "daftar-barang-bukti[oleh][]";

            const keteranganLabel = document.createElement("label");
            keteranganLabel.innerHTML = "Keterangan";
            const keteranganTextarea = document.createElement("textarea");
            keteranganTextarea.classList.add("form-control");
            keteranganTextarea.name = "daftar-barang-bukti[keterangan][]";

            const hapusButton = document.createElement("button");
            hapusButton.type = "button";
            hapusButton.classList.add("btn", "btn-danger");
            hapusButton.innerHTML = "Hapus";
            hapusButton.addEventListener("click", function () {
                hapusBarangBukti(this);
            });

            barangBuktiElement.appendChild(nomorRegisterLabel);
            barangBuktiElement.appendChild(nomorRegisterInput);
            barangBuktiElement.appendChild(jenisBarangLabel);
            barangBuktiElement.appendChild(jenisBarangInput);
            barangBuktiElement.appendChild(pemilikLabel);
            barangBuktiElement.appendChild(pemilikInput);
            barangBuktiElement.appendChild(disitaLabel);
            barangBuktiElement.appendChild(disitaInput);
            barangBuktiElement.appendChild(tanggalLabel);
            barangBuktiElement.appendChild(tanggalInput);
            barangBuktiElement.appendChild(dariLabel);
            barangBuktiElement.appendChild(dariInput);
            barangBuktiElement.appendChild(olehLabel);
            barangBuktiElement.appendChild(olehInput);
            barangBuktiElement.appendChild(keteranganLabel);
            barangBuktiElement.appendChild(keteranganTextarea);

            barangBuktiElement.appendChild(hapusButton);

            barangBuktiContainer.appendChild(barangBuktiElement);
        }

        function hapusBarangBukti(button) {
            const barangBuktiElement = button.parentNode;
            barangBuktiElement.remove();
        }

    </script>
</body>

</html>