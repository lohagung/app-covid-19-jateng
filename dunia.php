<?php
    $data [] = array(
        'id'     => 1,
        'faq'     => 'Apakah orang tua rentan terkena COVID-19? ',
        'jawab'     => ' Tidak hanya manula, bahkan generasi muda pun dapat tertular COVID-19 jika tidak menjaga diri. Biasanya, manula memang rentan terkena COVID-19 dikarenakan sistem imun tubuh yang sudah tidak seprima dulu. Selain itu, manula yang memiliki riwayat penyakit seperti hipertensi, diabetes, penyakit pernapasan, atau penyakit parah lainnya memiliki kemungkinan besar untuk tertular COVID-19 akut. ',
    );
	
	$data [] = array(
        'id'     => 2,
        'faq'     => 'Apakah COVID-19 perlu dikhawatirkan? ',
        'jawab'     => ' Sebanyak 80 persen kasus COVID-19 bersifat "ringan", sehingga perawatan yang cukup dapat memulihkan mereka segera dalam waktu cepat. Namun, dikarenakan penyebarannya yang cepat, diimbau untuk tetap waspada pada penyebaran COVID-19. Jika Anda merasakan gejala-gejalanya, maka jangan ragu untuk menghubungi Hotline 024-3580713 atau ke fasilitas kesehatan terdekat. ',
    );
	
	$data [] = array(
        'id'     => 3,
        'faq'     => 'Apakah COVID-19 sama dengan SARS dan MERS? ',
        'jawab'     => 'Severe Acute Respiratory Syndrome (SARS-CoV) yang berawal dari 2003 dan Middle East Respiratory Syndrome (MERS-CoV) pada 2012 memang sama-sama menyerang pernapasan, sama seperti COVID-19. Meskipun disebabkan oleh jenis virus yang sama, COVID-19, dan MERS serta SARS memiliki jenis virus corona yang berbeda. Dari segi penularan, COVID-19 jauh lebih pesat dibandingkan SARS dan MERS.',
    );
	
	$data [] = array(
        'id'     => 4,
        'faq'     => 'Perlukah saya menggunakan masker? ',
        'jawab'     => 'Berhenti membeli atau menggunakan masker jika memang tidak perlu (sehat). Dikarenakan praktik beli massal, WHO sempat mengumumkan status krisis masker. Hal tersebut sebenarnya dapat dicegah dengan tidak melakukan panic buying dan hoarding. Jika Anda ingin bersin atau batuk, gunakan tisu atau siku tangan untuk menutup hidung dan mulut, bukan masker. Selain itu, jaga jarak 1 - 3 meter agar orang tidak terkena droplet dari Anda. ',
    );
	
	$data [] = array(
        'id'     => 5,
        'faq'     => 'Apakah COVID-19 dapat melekat pada benda mati? ',
        'jawab'     => 'Ya. COVID-19 dapat menempel pada benda mati atau barang selama beberapa jam atau beberapa hari jika tidak secepatnya dibersihkan dengan disinfektan. Akan tetapi, ketahanan COVID-19 menempel pada satu benda tergantung dari beberapa faktor seperti suhu, kelembapan, dan jenis permukaan. Sesudah membersihkan barang yang terpapar COVID-19 dengan disinfektan, segera bersihkan tangan dengan alkohol atau sabun. Hindari menyentuh mata, hidung dan mulut. ',
    );
	
	$data [] = array(
        'id'     => 6,
        'faq'     => 'Apakah COVID-19 sudah ada obatnya? ',
        'jawab'     => 'Hingga saat ini, vaksin dan obat untuk COVID-19 masih dalam tahap penelitian. Pengobatan masih berupa pengobatan suportif.',
    );
	
	$data [] = array(
        'id'     => 7,
        'faq'     => 'Apakah hewan peliharaan dapat menularkan COVID-19? ',
        'jawab'     => 'WHO menyatakan bahwa COVID-19 tidak dapat ditularkan dari hewan peliharaan apapun, baik anjing maupun kucing. Tidak ada dasar ilmiah yang mendukung penyebaran COVID-19 lewat hewan peliharaan. Namun Anda tetap perlu menjaga kebersihan dengan rajin mencuci tangan setelah melakukan kontak dengan hewan peliharaan. ',
    );
	
	$data [] = array(
        'id'     => 8,
        'faq'     => 'Apakah ada hal lain yang tidak boleh dilakukan demi mencegah COVID-19? ',
        'jawab'     => ' Tidak merokok dan tidak menggunakan masker berlapis-lapis. Jika Anda memang mengalami gejala-gejala COVID-19, segera hubungi Hotline 024-3580713 atau laporkan diri ke rumah sakit rujukan virus corona.',
    );
	
	$data [] = array(
        'id'     => 9,
        'faq'     => 'Apakah Antibiotik efektif mencegah dan menangani COVID-19? ',
        'jawab'     => 'Tidak. Antibiotik tidak dapat melawan virus, melainkan hanya melawan infeksi bakteri. COVID-19 disebabkan oleh virus sehingga antibiotik tidak efektif. Antibiotik tidak boleh digunakan untuk mencegah atau mengobati COVID-19. Antibiotik hanya digunakan sesuai arahan dokter untuk mengobati infeksi bakteri. ',
    );	
	
// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam anggota.json
file_put_contents('faq.json', $jsonfile);
?>