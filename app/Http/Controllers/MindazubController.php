<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \DateTime;

class MindazubController extends Controller
{
    public function index(){

    	$countOfOrders = 10;
    	// for ($i=0; $i < $countOfOrders; $i++) { 
    	// 	echo ' == '.$i . '==';
    	// }

for ($i=0; $i < $countOfOrders; $i++) { 

$date=new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d-H-i-s');
$result1 = $date->format('Y-m-d');
$fileName = "ESHOP_" .$result . ".txt"; 

$myfile = fopen($fileName, "w") or die("Unable to open file!");

$failoInformacija =
        ' Pavadinimas yra "'. $result .'" ' . "\r\n\r\n" .
        ' <?xml version="1.0" encoding="UTF-8"?> ' . "\r\n" .
        '-<AgnumData CreatedOn="' . $result1 .'" CreatedByLogin="1" CreatedByApp="AGNUM 1.529" Version="12"> ' . "\r\n" ;

fwrite($myfile, $failoInformacija);
fclose($myfile);

	echo "Failo pavadinimas: " . $fileName . "\r\n\r\n sukurtas <br>";

sleep(5);


}


    }




    public function failoEksporttas()
    {
    	$date=new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d-H-i-s');
$result1 = $date->format('Y-m-d');
$fileName = "ESHOP_" .$result . ".xml"; 

$myfile = fopen($fileName, "w") or die("Unable to open file!");

$failoInformacija =
      '  <?xml version="1.0" encoding="UTF-8"?>
<AgnumData Version="13" CreatedByApp="AGNUM 1.534" CreatedByLogin="Gedas" CreatedOn="2016-08-05">
	<Customers Count="1">
		<Item KOD="BRIGANTINE" PAVAD="Brigantinė UAB" CONTACT="" ADR="Verkių g. 24-19, LT-44469 Kaunas" TLF="" FAX="" RKOD="302828025" PVMKOD="LT100007112617" BKOD="" BPAVAD="" BSASK="" F1="" F2="" F3="" F4="" F5="" INFO="" ACC1="240" ACC2="450" ACC3="" ACC4="" ACC5="" ACC6="" ACC7="" ACC8="" ACC9="" ACC10="" ACC11="" ACC12="" SALIS="" MIESTAS="" GATVE="" EMAIL="" PINDEX="" SAVIVKOD="" APSKR="" KRD="Y" DEB="Y" AKTYVUS="Y" POZYMIAI="1000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000" KOD_IS="" DEFAULT_CURR="EUR" SALIS_KOD=""/>
	</Customers>
	<Departments Count="0"/>
	<Goods Count="5">
		<Item KOD="KRUTP5ES305IN" SND_KOD="KAUNAS" PAVAD="Kabelis ryšio SCHNUR UTP 5E kategorijos (305m)" CLASS="0" KATEG="" GRUPE="KABELIS LAN 5cat" POGRUPIS="KAB 5cat Vidaus" PAVAD1="LAN cable SCHNUR UTP 5E INDOOR (305m)" PAVAD2="" PAVAD3="" PAVAD4="" PAVAD5="" PAVAD6="" PAVAD7="ftp://88.119.195.35/CE_Deklaracijos/VIDEO/KABELIS/CE%20Eagle%20SCHNUR%20UTP%20kabeliai.jpg" PAVAD8="" VNT="100m" SVORIS="3.267" SVORIS1="3.0446" TURIS="0" VIETA="          " METOD="0" IPAK="2" KN0="13.56" KN1="9.5081" KN2="12.848770935" KN3="15.99" KN4="15.2" KN5="10.934315" KNB="9.5081" KNBVAL="EUR" REZ="0" UZS="0" APMOKPVM="Y" PVM0="21" PVM="21" PVM2="21" PVM3="21" PVM4="21" PVM5="21" MOK0="0" MEMO="" F1="" F2="CN" F3="85444993" F4="Elektros kabeliai skirti iki 80 V įtampai, naudojami pastatų apsaugos sistemose" F5="" F6="0" F7="0" F8="0" ACC1="" ACC2="" ACC3="" ACC4="" ACC5="" VNT2="" BKOD=""/>
		<Item KOD="TVKIPDS2CD2342FWD-I-F2.8" SND_KOD="KAUNAS" PAVAD="IP kamera D/N DS-2CD2342WD-I F2.8, DOME, WDR, Hikvision, EXIR, H.264; 4MPix, 2.8mm(?86?), IR pašvietimas iki 30m, IP66, PoE" CLASS="0" KATEG="" GRUPE="V KAMEROS IP" POGRUPIS="KAM IP DOME" PAVAD1="IP camera D/N DS-2CD2342-I F2.8, DOME, WDR, Hikvision, EXIR, H.264; 4MPix,2.8mm, IR LED ill. up to 30m, IP66, PoE" PAVAD2="" PAVAD3="" PAVAD4="" PAVAD5="" PAVAD6="" PAVAD7="ftp://88.119.195.35/CE_Deklaracijos/VIDEO/HIKVISION/CE%20Hikvision%20kameros_12_DS-2CD23.jpg" PAVAD8="" VNT="vnt." SVORIS="0.762" SVORIS1="0.575" TURIS="0" VIETA="" METOD="0" IPAK="27" KN0="99" KN1="99" KN2="133.78365" KN3="84.15" KN4="0" KN5="113.85" KNB="99" KNBVAL="EUR" REZ="0" UZS="0" APMOKPVM="Y" PVM0="21" PVM="21" PVM2="21" PVM3="21" PVM4="21" PVM5="21" MOK0="0" MEMO="" F1="" F2="CN" F3="" F4="" F5="" F6="0" F7="0" F8="0" ACC1="" ACC2="" ACC3="" ACC4="" ACC5="" VNT2="" BKOD=""/>
		<Item KOD="TVNVRDS7604NI-E1/4P" SND_KOD="KAUNAS" PAVAD="Tinklinis įraš. įrenginys NVR Hikvision DS-7604NI-E1/4P, 4 kanalų, 4 PoE portai, iki 5 Mpix/kan.; 1 HDD VGA, HDMI išėjimai;In 40 Mbps/Out 80 Mbps;" CLASS="0" KATEG="" GRUPE="V NVR IP" POGRUPIS="NVR 4 kanalų" PAVAD1="Network video recorder Hikvision DS-7604NI-E1/4P 8ch. 4 PoE, up to 5 Mpix/ch.; VGA, HDMI output" PAVAD2="" PAVAD3="" PAVAD4="" PAVAD5="" PAVAD6="" PAVAD7="" PAVAD8="" VNT="vnt." SVORIS="2.32" SVORIS1="1.8" TURIS="0" VIETA="          " METOD="0" IPAK="8" KN0="53.2876" KN1="109" KN2="147.29715" KN3="92.65" KN4="0" KN5="125.35" KNB="109" KNBVAL="EUR" REZ="0" UZS="0" APMOKPVM="Y" PVM0="21" PVM="21" PVM2="21" PVM3="21" PVM4="21" PVM5="21" MOK0="0" MEMO="" F1="85319080TW" F2="CN" F3="" F4="" F5="" F6="0" F7="0" F8="0" ACC1="" ACC2="" ACC3="" ACC4="" ACC5="" VNT2="" BKOD=""/>
		<Item KOD="VGOF16V" SND_KOD="KAUNAS" PAVAD="Gofruotas  vamzdis su viela 16mm" CLASS="0" KATEG="" GRUPE="INSTAL PRIEDAI" POGRUPIS="INST PRIE Kita" PAVAD1="Corrugated pipe 16mm" PAVAD2="" PAVAD3="" PAVAD4="" PAVAD5="" PAVAD6="" PAVAD7="" PAVAD8="" VNT="m" SVORIS="0.03376" SVORIS1="0.03336" TURIS="0" VIETA="          " METOD="0" IPAK="50" KN0="0.072" KN1="0.1" KN2="0.135135" KN3="0" KN4="0" KN5="0.115" KNB="0.1" KNBVAL="EUR" REZ="0" UZS="0" APMOKPVM="Y" PVM0="21" PVM="21" PVM2="21" PVM3="21" PVM4="21" PVM5="21" MOK0="0" MEMO="" F1="" F2="PL" F3="" F4="" F5="" F6="0" F7="0" F8="0" ACC1="" ACC2="" ACC3="" ACC4="" ACC5="" VNT2="" BKOD=""/>
		<Item KOD="XKD2SEAGATE" SND_KOD="KAUNAS" PAVAD="Kietas diskas SEAGATE Surveillance HDD 2 TB skirtas DVR/NVR įrenginiams" CLASS="0" KATEG="" GRUPE="HDD" POGRUPIS="HDD 2 TB" PAVAD1="Hard disk drive 2TB" PAVAD2="" PAVAD3="" PAVAD4="" PAVAD5="" PAVAD6="" PAVAD7="ftp://88.119.195.35/CE_Deklaracijos/VIDEO/Kieti%20diskai%20HDD/CE%20Seagate%20HDD.jpg" PAVAD8="" VNT="vnt." SVORIS="0.532" SVORIS1="0.528" TURIS="0" VIETA="0         " METOD="0" IPAK="20" KN0="63.79" KN1="73.36" KN2="99.135036" KN3="70.3" KN4="67.24" KN5="84.364" KNB="73.36" KNBVAL="EUR" REZ="0" UZS="0" APMOKPVM="Y" PVM0="21" PVM="21" PVM2="21" PVM3="21" PVM4="21" PVM5="21" MOK0="0" MEMO="" F1="" F2="TH" F3="85238010" F4="Neįrašyti kietieji diskai" F5="" F6="0" F7="0" F8="0" ACC1="" ACC2="" ACC3="" ACC4="" ACC5="" VNT2="" BKOD=""/>
	</Goods>
	<Accounts Count="1">
		<Item SASK="LT027044060003087184" KOD="70440" PAVAD="AB SEB bankas" ADR="" TLF="" SWIFT="CBVILT2X"/>
	</Accounts>
	<Documents Type="4" Count="1">
		<Item DATA="2016.08.05" DOKNR="EBK4069969" DOKNR2="00166172" GVNR="" KL_KOD="BRIGANTINE" PAD_KOD="" SND_KOD="KAUNAS" VAL="EUR" KURS="1" NUOLPROC="0" PVMPROC="0" PVM="109.91" MOK0="0" SUMVISO="523.36" SKOLA="633.27" APMSUM="0" APM_SAL="3" TERM="3" KNTIP="3" PR_VIETA="Verkių g. 24-19, LT-44469 Kaunas" PR_DATA="2016.08.05" KIENO_TR="1" SUMISR="N" CHECKNR="2248" KSNR="ID12001480" CHECKD="2016.08.05 09:24:59" ADDR1="" ADDR2="" DRBKOD="AK010" DRB="Vadybininkas Gediminas Marozas" DRBKOD1="" DRB1="Sandėlininkas- vadybininkas Žilvinas Arlauskas" AG_KOD="" SANDORIS="" PRISTSAL="" TRANSPORTAS="" SALISSIUNT="" FNUM1="0" FNUM2="0" FNUM3="0" SASK="LT027044060003087184" SAVIK="361.6449" SUMAK="0" M10="Y" POZYMIAI="0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000" NUOL="0" SUMA="523.3597" SUMAP="0" SUMAVISO="523.3597" Count="5">
			<Row KOD="KRUTP5ES305IN" BKOD="" KIEKIS="3.05" PVM="6.09" PVM_PROC="20.9999927586232" MOK0_PROC="0" MOK0_LT="0" VNT="100m" PARKN="9.5081" ORIGPARKN="9.5081" NUOL="0" NUOL2="0" UZS_PRDATA="2016.08.05" UZS_UZSNR="" UZS_PRKKOD="KRUTP5ES305IN" UZS_SHOPNR="" ZYME=""/>
			<Row KOD="TVKIPDS2CD2342FWD-I-F2.8" BKOD="" KIEKIS="3" PVM="62.37" PVM_PROC="21" MOK0_PROC="0" MOK0_LT="0" VNT="vnt." PARKN="99" ORIGPARKN="99" NUOL="0" NUOL2="0" UZS_PRDATA="2016.08.05" UZS_UZSNR="" UZS_PRKKOD="TVKIPDS2CD2342FWD-I-F2.8" UZS_SHOPNR="" ZYME=""/>
			<Row KOD="TVNVRDS7604NI-E1/4P" BKOD="" KIEKIS="1" PVM="22.89" PVM_PROC="21" MOK0_PROC="0" MOK0_LT="0" VNT="vnt." PARKN="109" ORIGPARKN="109" NUOL="0" NUOL2="0" UZS_PRDATA="2016.08.05" UZS_UZSNR="" UZS_PRKKOD="TVNVRDS7604NI-E1/4P" UZS_SHOPNR="" ZYME=""/><Row KOD="VGOF16V" BKOD="" KIEKIS="150" PVM="3.15" PVM_PROC="21" MOK0_PROC="0" MOK0_LT="0" VNT="m" PARKN="0.1" ORIGPARKN="0.1" NUOL="0" NUOL2="0" UZS_PRDATA="2016.08.05" UZS_UZSNR="" UZS_PRKKOD="VGOF16V" UZS_SHOPNR="" ZYME=""/>
			<Row KOD="XKD2SEAGATE" BKOD="" KIEKIS="1" PVM="15.4056" PVM_PROC="21" MOK0_PROC="0" MOK0_LT="0" VNT="vnt." PARKN="73.36" ORIGPARKN="73.36" NUOL="0" NUOL2="0" UZS_PRDATA="2016.08.05" UZS_UZSNR="" UZS_PRKKOD="XKD2SEAGATE" UZS_SHOPNR="" ZYME=""/>
		</Item>
	</Documents>
	<Barcodes Count="5">
		<Item KOD="KRUTP5ES305IN" BKOD="" KIEKIS="1"/>
		<Item KOD="TVKIPDS2CD2342FWD-I-F2.8" BKOD="" KIEKIS="1"/>
		<Item KOD="TVNVRDS7604NI-E1/4P" BKOD="" KIEKIS="1"/>
		<Item KOD="VGOF16V" BKOD="" KIEKIS="1"/>
		<Item KOD="XKD2SEAGATE" BKOD="" KIEKIS="1"/>
	</Barcodes>
</AgnumData>


';




fwrite($myfile, $failoInformacija);
fclose($myfile);



return  " ir " . $myfile;
    }
}
