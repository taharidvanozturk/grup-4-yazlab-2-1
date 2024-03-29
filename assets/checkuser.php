<?php
echo $kadi=trim($_POST["kadi"]);
echo $sifre=trim($_POST["sifre"]);
echo $kontrol=trim($_POST["login"]);

if ($kontrol=="Oturum Aç"){
	if (($kadi!="")&&($sifre!="")){
		echo "oturum açıldı";
	}
	else{
		echo "bilgi girilmedi";
	}
}
