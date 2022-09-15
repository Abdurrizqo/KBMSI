<!-- Header Section -->
<div class="w-full h-screen relative">
    <div class="w-full left-0 right-0 absolute -z-40 lg:hidden">
        <img src="<?php echo base_url(); ?>assets/img/sembilan/langit.svg" class="w-full h-full object-cover" />
    </div>

    <div class="w-full bg-red px-8 relative top-72 lg:top-52 text-hijau">
        <h1 class="text-3xl lg:text-5xl font-bold text-center shadowText">SEMANGAT PAGI!</h1>
        <h4 class="text-2xl text-3xl font-thin text-hijau mt-2 text-center">#Demokrasi Beraksi</h4>
        <h4 class="text-2xl text-3xl font-thin text-hijau text-center">#Kolaborasi Beraksi</h4>

    </div>

    <div class="w-full left-0 right-0 absolute -bottom-6 z-20 lg:-bottom-60 -z-10">
        <img src="<?php echo base_url(); ?>assets/img/sembilan/pohonHeader.png" class="w-full h-full object-cover" />
    </div>

    <div class="w-full left-0 right-0 absolute bottom-6 -z-20 lg:-bottom-60">
        <img src="<?php echo base_url(); ?>assets/img/sembilan/gunung.png" class="w-full h-full object-cover" />
    </div>
</div>
<!-- Header Section -->


<!-- About Section -->
<div class="w-full h-screen bg-hijau mb-20 px-6 flex items-center relative">
    <div>
        <h1 class="text-2xl lg:text-3xl text-center font-bold text-white">TENTANG KBMSI</h1>
        <div class="md:grid md:gap-16 md:grid-cols-2 lg:px-24 md:mt-8">
            <div class="mt-4 w-full">
                <iframe class="w-full" height="400" src="https://www.youtube.com/embed/jfhMkhzzEv4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="w-full md:mt-24">
                <p class="text-white text-sm md:text-xl text-center mt-4">Keluarga Besar Mahasiswa Sistem Informasi Universitas Brawijaya (KBMSI UB) adalah wadah bagi mahasiswa Sistem Informasi Universitas Brawijaya dalam mengembangkan segala potensi yang ada dalam diri mereka dengan semangat kekeluargaan yang erat.</p>
                <a href="<?= base_url('Kelembagaan') ?>">
                    <button class="rounded-full text-white mt-6 py-2 px-5 bg-orange shadow block mx-auto">LEMBAGA</button>
                </a>
            </div>
        </div>
    </div>
    <div class="w-full absolute -bottom-16 right-0 left-0 -z-10 md:-bottom-60">
        <img src="<?php echo base_url(); ?>assets/img/sembilan/lumut.svg" class="w-full" />
    </div>

    <div class="w-full absolute -bottom-16 -bottom-[74px] right-0 left-0 -z-10 md:-bottom-[260px] opacity-5">
        <img src="<?php echo base_url(); ?>assets/img/sembilan/lumut.svg" class="w-full" />
    </div>
</div>
<!-- About Section -->


<!-- Berita Section -->
<div class="text-xl font-medium lg:mb-20 mt-32 lg:mt-96 px-8 md:px-20 lg:px-32">
    <h1 class="text-hijau font-bold text-4xl text-center mb-12">BERITA</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-x-12 gap-y-8">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div class="h-[560px] md:h-[660px] w-full">
                <div class=" rounded bg-orange h-full flex flex-col">
                    <div class="w-full px-3 py-6 rounded grow">
                        <img src="<?= $berita[$i - 1]->gambar; ?>" class="w-full h-full object-cover rounded block shadow-2xl" alt="img_berita">
                    </div>

                    <div class="w-full bg-hijau rounded-b p-5 flex flex-col justify-between">
                        <h5 class="text-white text-center text-sm"><?= $berita[$i - 1]->JUDUL ?></h5>
                        <div class="flex justify-end gap-5 mt-5 items-center">
                            <p class="text-sm text-orange"><?= $berita[$i - 1]->LAST_UPDATE ?></p>
                            <button class="h-10 w-10 rounded-full bg-orange shadow-xl"></button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <button class="rounded-full text-white mt-16 py-2 px-5 bg-orange shadow block mx-auto shakeAnimation">BERITA LAINNYA</button>
</div>
<!-- Berita Section -->