<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<link rel="shortcut icon" type="image/x-icon" href="http://www.auplod.com/u/opdlau836c1.png" /><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
💛👉ijaz-BOT Team 👈💛
</title><link rel="stylesheet" type="text/css" href="spark.css" media="all,handheld"/><link rel="shortcut icon" href="">

<?php
session_start();
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by aaa',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot Saved In CoD3R-BOT TEAM")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Succes Data CoD3R-BOT TEAM")</script>';}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">PENGATURAN BOT by '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Matikan Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
 Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
 Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="STAR BOT"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Juma't",
        "Sabtu",
        "Minggu"
);

$bulan=array(1=>
"Januari",
  "Februari",
    "Maret",
     "April",
       "Mei",
         "Juni",
           "Juli",
             "Agustus",
               "September",
          "Oktober",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
'.$hr.' : '.$tgl.' - '.$bln.' - '.$thn.'<br>
'.$jam.'</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<center>
<img src="http://orig09.deviantart.net/5395/f/2011/148/1/7/anonymous_by_thenaruterox100pre-d3hfjf8.png" height="300" width="400">
<center>
<embed width="900" height="90" align="middle" flashvars="letter= CoD3R-BOT TEAM" src="http://www.widgeo.net/effets/7.swf" quality="high" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" color="black"> </center>
<h4 class="title">
<br>
     <b><font size="5" face="Eras Demi ITC" color="red">MEMBERS: 💛 Sp@rK CoD3R 💛 Kamran Lara 💛 Anas Khalid 💛 Kafeel Afzal 💛 Arfat Nizamani 💛 Ijaz Ansari 💛 Prince Nadeem 💛 </b></font>
<div class="post-content" aligen="left">

<a href="http://m.facebook.com/100011283763057"><img src="https://graph.facebook.com/100011998180646/picture" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 500px; height: 500px; float: left;" alt="nurcholis deryawan" class="thumbnail"/></a>
<span>
<br>
     <b><font size="5" face="Eras Demi ITC" color="red">Contact Us On Facebook</b></font><b><font size="5" face="Eras Demi ITC" color="red"> : <a href="https://www.facebook.com/groups/552993714887043/">CoD3R-BOT TEAM</b></a>
</span>
</div>
<div class="post-meta2">
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h4><a name="navigation-name" class="no-link">GET TOKEN BELOW</a></h4>
<ul>
<li><a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=200758583311692&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.2%2Fdialog%2Foauth%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.facebook.com%252Fconnect%252Flogin_success.html%253F%253DInstall-Nokia%253D%26scope%3Dpublish_stream%252Coffline_access%252Cread_stream%252Cpublish_actions%26response_type%3Dtoken%26client_id%3D200758583311692%26ret%3Dlogin%26logger_id%3D8ea16076-6abd-41b1-af44-d5ce915827e5&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fconnect%2Flogin_success.html%3F%3DInstall-Nokia%253D%26error%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%23_%3D_&display=page&locale=en_GB&logger_id=8ea16076-6abd-41b1-af44-d5ce915827e5">FIRST INSTAL NOKIA APP</a></li>
<a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=200758583311692&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv1.0%2Fdialog%2Foauth%3Fredirect_uri%3Dhttp%253A%252F%252Faccount.nokia.com%252Facct%252Faccount%252FCOPY_All_URL_ACCESS_TOKEN_FROM_ADDRESS_BAR%26scope%3Demail%252Cpublish_actions%252Cuser_about_me%252Cuser_actions.books%252Cuser_actions.music%252Cuser_actions.news%252Cuser_actions.video%252Cuser_activities%252Cuser_birthday%252Cuser_education_history%252Cuser_events%252Cuser_games_activity%252Cuser_groups%252Cuser_hometown%252Cuser_interests%252Cuser_likes%252Cuser_location%252Cuser_notes%252Cuser_photos%252Cuser_questions%252Cuser_relationship_details%252Cuser_relationships%252Cuser_religion_politics%252Cuser_status%252Cuser_subscriptions%252Cuser_videos%252Cuser_website%252Cuser_work_history%252Cfriends_about_me%252Cfriends_actions.books%252Cfriends_actions.music%252Cfriends_actions.news%252Cfriends_actions.video%252Cfriends_activities%252Cfriends_birthday%252Cfriends_education_history%252Cfriends_events%252Cfriends_games_activity%252Cfriends_groups%252Cfriends_hometown%252Cfriends_interests%252Cfriends_likes%252Cfriends_location%252Cfriends_notes%252Cfriends_photos%252Cfriends_questions%252Cfriends_relationship_details%252Cfriends_relationships%252Cfriends_religion_politics%252Cfriends_status%252Cfriends_subscriptions%252Cfriends_videos%252Cfriends_website%252Cfriends_work_history%252Cads_management%252Ccreate_event%252Ccreate_note%252Cexport_stream%252Cfriends_online_presence%252Cmanage_friendlists%252Cmanage_notifications%252Cmanage_pages%252Cphoto_upload%252Cpublish_stream%252Cread_friendlists%252Cread_insights%252Cread_mailbox%252Cread_page_mailboxes%252Cread_requests%252Cread_stream%252Crsvp_event%252Cshare_item%252Csms%252Cstatus_update%252Cuser_online_presence%252Cvideo_upload%252Cxmpp_login%26response_type%3Dcode%2Btoken%26client_id%3D200758583311692%26ret%3Dlogin%26logger_id%3D99ec7ef8-c1a4-4e2a-98e3-524f99649f22&cancel_url=http%3A%2F%2Faccount.nokia.com%2Facct%2Faccount%2FCOPY_All_URL_ACCESS_TOKEN_FROM_ADDRESS_BAR%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%23_%3D_&display=page&locale=en_GB&logger_id=99ec7ef8-c1a4-4e2a-98e3-524f99649f22">NOW GET TOKEN</a>
</li>
</ul></div>

<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
User robot : <font color="red">'.count($user).'</font>
<br>
Script bot &copy; 2017<br>
Powered by <a href="https://www.facebook.com/groups/552993714887043/">CoD3R-BOT TEAM</a></div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_friends%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired mohon comot ulang")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>																																	