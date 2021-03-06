<?= $this->extend('Templates/app') ?>
<?= $this->section('content') ?>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="container mx-auto">

    <!--    <div class="bg-red-500 text-white p-5 m-5">--><?//= /** @var array $validation */ $validation->listErrors( ) ?><!--</div>-->
    <div class="lg:flex lg:items-center lg:justify-between mt-10">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-200 sm:text-3xl sm:truncate">
                Formulir Mahasiswa
            </h2>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-100">Personal Information</h3>
                    <p class="mt-1 text-sm text-gray-400">
                        Biodata mahasiswa
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <?= /** @var object $mahasiswa */
                form_open(route_to('Mahasiswa.update', $mahasiswa->id)) ?>
                    <?= csrf_field()?>
                    <input type="hidden" name="_method" value="PUT" />
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-gray-800 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <?= form_label('NIM', 'nim', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= /** @var object $validation */
                                    form_input(['type' => 'text', 'name' => 'nim', 'id' => 'nim' , 'autocomplete' => 'off', 'value' => $mahasiswa->nim, 'class' => "px-2 py-1 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"]) ?>
                                    <?php if ($validation->hasError('nim')): ?>
                                        <script>
                                            document.getElementById('nim').classList.add('border-2')
                                            document.getElementById('nim').classList.add('border-red-500')
                                        </script>
                                        <div class="text-red-400 font-bold"><?= $validation->getError('nim') ?></div>
                                    <?php endif ?>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <?= form_label('Nama Lengkap', 'nama_lengkap', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= form_input(['type' => 'text', 'name' => 'nama_lengkap', 'id' => 'nama_lengkap' , 'autocomplete' => 'off', 'value' => $mahasiswa->nama_lengkap, 'class' => 'px-2 py-1 mt-1 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) ?>
                                    <?php if ($validation->hasError('nama_lengkap')): ?>
                                        <script>
                                            document.getElementById('nama_lengkap').classList.add('border-2')
                                            document.getElementById('nama_lengkap').classList.add('border-red-500')
                                        </script>
                                        <div class="text-red-400 font-bold"><?= $validation->getError('nama_lengkap') ?></div>
                                    <?php endif ?>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <?= form_label('Password', 'password', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= form_password(['name' => 'password', 'id' => 'password' , 'autocomplete' => 'off', 'value' => $mahasiswa->password, 'class' => 'px-2 py-1 mt-1 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) ?>
                                    <?php if ($validation->hasError('password')): ?>
                                        <script>
                                            document.getElementById('password').classList.add('border-2')
                                            document.getElementById('password').classList.add('border-red-500')
                                        </script>
                                        <div class="text-red-400 font-bold"><?= $validation->getError('password') ?></div>
                                    <?php endif ?>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <?= form_label('Email', 'email', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= form_input(['type' => 'email', 'name' => 'email', 'id' => 'email' , 'autocomplete' => 'off', 'value' => $mahasiswa->email, 'class' => 'px-2 py-1 mt-1 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) ?>
                                    <?php if ($validation->hasError('email')): ?>
                                        <script>
                                            document.getElementById('email').classList.add('border-2')
                                            document.getElementById('email').classList.add('border-red-500')
                                        </script>
                                        <div class="text-red-400 font-bold"><?= $validation->getError('email') ?></div>
                                    <?php endif ?>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <?= form_label('Tanggal Lahir', 'tanggal_lahir', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= form_input(['type' => 'date', 'name' => 'tanggal_lahir', 'id' => 'tanggal_lahir' , 'autocomplete' => 'off', 'value' => $mahasiswa->tanggal_lahir, 'class' => 'px-2 py-1 mt-1 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) ?>
                                    <?php if ($validation->hasError('tanggal_lahir')): ?>
                                        <script>
                                            document.getElementById('tanggal_lahir').classList.add('border-2')
                                            document.getElementById('tanggal_lahir').classList.add('border-red-500')
                                        </script>
                                        <div class="text-red-400 font-bold"><?= $validation->getError('tanggal_lahir') ?></div>
                                    <?php endif ?>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <span class="block text-sm font-medium text-gray-400">Jenis Kelamin</span>
                                    <div class="mt-1">
                                        <label for="jenis_kelamin" class="inline-flex items-center text-sm font-medium text-gray-400">
                                            <?= form_radio(['type' => 'radio', 'name' => 'jenis_kelamin', 'class' => 'form-radio', 'value' => 'L']) ?>
                                            <span class="ml-2 mr-2">Laki-laki</span>
                                        </label>
                                        <label for="jenis_kelamin" class="inline-flex items-center text-sm font-medium text-gray-400">
                                            <?= form_radio(['type' => 'radio', 'name' => 'jenis_kelamin', 'class' => 'form-radio', 'value' => 'P']) ?>
                                            <span class="ml-2">Perempuan</span>
                                        </label>
                                        <div class="text-red-400 font-bold"><?= $validation->getError('jenis_kelamin') ?></div>
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <?= form_label('Program Studi', 'program_studi', ['class' => 'px-2 py-1 mt-1 block text-sm font-medium text-gray-400']) ?>
                                    <?php
                                    $prodi = [
                                        $mahasiswa->prodi => $mahasiswa->prodi,
                                        'D3 Teknik Informatika' => 'D3 Teknik Informatika',
                                        'S1 Matematika' => 'S1 Matematika',
                                        'S1 Fisika' => 'S1 Fisika',
                                        'S1 Biologi' => 'S1 Biologi',
                                        'S1 Farmasi' => 'S1 Farmasi',
                                    ]
                                    ?>
                                    <?= form_dropdown(['name' => 'prodi', 'id' => 'prodi', 'class' => 'px-2 py-1 mt-1 mt-1 form-select focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'], $prodi, $mahasiswa->prodi) ?>
                                    <?php if ($validation->hasError('prodi')): ?>
                                        <script>
                                            document.getElementById('prodi').classList.add('border-2')
                                            document.getElementById('prodi').classList.add('border-red-500')
                                        </script>
                                        <div class="text-red-400 font-bold"><?= $validation->getError('prodi') ?></div>
                                    <?php endif ?>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <span class="block text-sm font-medium text-gray-400">Warga Negara</span>
                                    <div class="mt-2">
                                        <div>
                                            <label class="inline-flex items-center text-sm font-medium text-gray-400">
                                                <?= form_checkbox(['class' => 'form-checkbox', 'name' => 'warga_negara', 'value' => 'WNA']) ?>
                                                <span class="ml-2">WNA</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center text-sm font-medium text-gray-400">
                                                <?= form_checkbox(['class' => 'form-checkbox', 'name' => 'warga_negara', 'value' => 'WNI']) ?>
                                                <span class="ml-2">WNI</span>
                                            </label>
                                        </div>
                                        <div class="text-red-400 font-bold"><?= $validation->getError('warga_negara') ?></div>
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <?= form_label('Status', 'status', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= form_input(['type' => 'text', 'name' => 'status', 'id' => 'status', 'autocomplete' => 'off', 'value' => $mahasiswa->status, 'class' => 'px-2 py-1 mt-1 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) ?>
                                    <?php if ($validation->hasError('status')): ?>
                                        <script>
                                            document.getElementById('status').classList.add('border-2')
                                            document.getElementById('status').classList.add('border-red-500')
                                        </script>
                                        <div class="text-red-400 font-bold"><?= $validation->getError('status') ?></div>
                                    <?php endif ?>
                                </div>

                                <div class="col-span-6">
                                    <?= form_label('Keterangan', 'keterangan', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= form_textarea(['name' => 'keterangan', 'id' => 'keterangan', 'autocomplete' => 'off', 'value' => $mahasiswa->keterangan, 'class' => 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'])?>
                                    <?php if ($validation->hasError('keterangan')): ?>
                                        <script>
                                            document.getElementById('keterangan').classList.add('border-2')
                                            document.getElementById('keterangan').classList.add('border-red-500')
                                        </script>
                                        <div class="text-red-400 font-bold"><?= $validation->getError('keterangan') ?></div>
                                    <?php endif ?>
                                </div>
                                <?= form_hidden('pesan', 'Berhasil Ditambahkan!') ?>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-800 text-right sm:px-6">
                            <a href="<?= route_to('Mahasiswa.index') ?>" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Kembali
                            </a>
                            <?= form_button(['type' => 'submit', 'name' => 'submit', 'content' => 'Submit', 'class' => 'inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500']) ?>
                        </div>
                    </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
