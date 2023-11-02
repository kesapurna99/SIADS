<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
      
		.tengah {
			text-align: center;
			line-height: 5px;
		}
		.kiri {
			text-align: right;
			line-height: 10px;
			padding-right: 20px;
		}
		.kanan {
			line-height: 10px;
		}
		.cop_surat {
    		height: 173px;
 			width: 100%;
		}
		.atas {
			height: 102px;
    		width: 100%;
		}
		.tujuan {
			width: 100%;
		}
		.isi_surat {
			width: 100%;
			height: 350px;
		
		}

    </style>
    <title>Document</title>
</head>
<body>

<div class="cop_surat">
   <table width="100%" style="border-bottom: 5px solid;" >
    <tr>
        <td width="153px">
		<img src="<?php echo 'uploads/logo_kib.png' ?>" width="153px">
        </td>
        <td class="tengah">
        <P>KEMENTRIAN HUKUM DAN HAK ASASI MANUSIA</P>
        <P>REPUBLIK INDONESIA</P>
        <P>KANTOR WILAYAH JAWA BARAT</P>
        <b>KANTOR IMIGRASI KELAS I NON TPI BOGOR</b>
		<p>Jl. Jend. A Yani No. 19, RT.03/RW.02, Tanah Sareal, Kota Bogor 16161</p>
		<p>Telepon (0251)8338074 Faksimile (0251)8332870</p>
		<p>Laman : <u style="color: blue;">www.bogor.imigrasi.go.id</u> Surel : Kanim.bogor@ymail.com</p>
        </td>
    </tr>
   </table>
    </div>
</div>
<div class="atas">
		<table width="100%">
			<tr>
				<td class="kanan" width = "145px">
					<p>Nomor</p>
					<p>Lampiran</p>
					<p>Perihal</p>
				</td>
				<td class="kanan">
					<p>: <?php echo $Surat->kode.'.'.$Surat->klasifikasi.'.'.$Surat->nomor_surat ?></p>
					<p>: <?php echo $Surat->lampiran ?></p>
					<p>: <?php echo $Surat->perihal ?></p>
				</td>
				<td class="kiri">
					<p><?php echo date('d-m-y',strtotime($Surat->tgl)) ?></p>
					<p>⠀  </p>
					<p>⠀  </p>
				</td>
			</tr>
		</table>
</div>
<div class="tujuan">
	<table>
		<tr>
			<td style="line-height: 10px ;">
				
					<?php echo $Surat->kepada ?>
				
			</td>
		</tr>
</table>
</div>
<div class="isi_surat">
		<p>
		<?php echo $Surat->isi_surat ?>
		</p>
		
</div>
<div class="ttd">
<table style="float: right;">
		<tr>
			<td style="line-height: 10px ;">
				<p>an. <?php echo $Surat->jabatan ?></p>
				<p><?php echo $Surat->divisi ?></p>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<p><?php echo $Surat->nama ?></p>
				<p>NIP <?php echo $Surat->NIP ?></p>
			</td>
		</tr>
</table>

</div>


</body>
</html>
