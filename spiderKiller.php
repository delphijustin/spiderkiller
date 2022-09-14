<?php if(strlen($_GET['S'])*strlen($_GET['B'])==0){
header("HTTP/1.1 403 Forbidden");
die();
}
header('Content-type: text/javascript');
$alpha='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
function caseStr($s){
    $sOut= "";
    for($i=0;$i<strlen($s);$i++)if(mt_rand(0,1)==1){
$sOut.=strtoupper($s[$i]);}else{$sOut.=strtolower($s[$i]);}
return $sOut;
}
$fn="";
$dv="";
for($i=0;$i<16;$i++){
$fn.=$alpha[mt_rand(0,strlen($alpha)-1)];
$dv.=$alpha[mt_rand(0,strlen($alpha)-1)];
}
$email=base64_decode($_GET['B']);
?>function <?php echo $fn;?>(){window.open(new Array(atob('<?php echo base64_encode(caseStr("mailto"));?>'),atob('<?php echo base64_encode(caseStr($email));?>')).join(":").toLowerCase());}var <?php echo $dv;?>=document;<?php echo $dv;?>.write('<span style="text-decoration: underline; cursor: pointer; text-decoration-color: blue;" onclick="<?php echo $fn;?>()"><?php echo $_GET['S'];?></span>');
