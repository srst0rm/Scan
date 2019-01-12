#!/usr/bin/php -q
<?php
error_reporting(0);
exec(reset);
/*
|-------------------------------------------------------------------------------------------|

  Bem vindo Ao Mind-Scanner, é uma versão simples feita
  para analise de diretorios e arquivos de um site desejado

  Não esqueça de dar as devidas permissões para o script. (chmod)
  Fb = https://facebook.com/fail.org
  Github = https://github.com/jord-baskov/
  Blog = https://mindsetsecurity.wordpress.com
  Greetz : Sr Storm - john-kaiser - L1L1TH - e geral ae :3 
  Qualquer bug encontrado  poderá ser reportado para o email (jordison@protonmail.com)
  codado no dia 12-01-2019
|-------------------------------------------------------------------------------------------|
*/
$pag = file('.back.txt');
echo "\033[31m
     dBBBBb  dBP dBBBBBb         .dBBBBP   dBBBP dBBBBBb     dBBBBb
        dB'          dBP         BP                   BB        dBP
   dBP dB' dBP   dBBBBK          `BBBBb  dBP      dBP BB   dBP dBP
  dBP dB' dBP   dBP  BB dBBBBBP     dBP dBP      dBP  BB  dBP dBP
 dBBBBB' dBP   dBP  dB'        dBBBBP' dBBBBP   dBBBBBBB dBP dBP \n
                                  \033[36:2m[◉]Coded by Jord@Root-Exploit[◉]\n \033[31m
";
if(!$argv[1]){
   echo("[!]WARNING[!]\nFalta de argumento!!!\npara usar digite ./scan.php https://site.com/\n\n");
   exit();
}
$url = $argv[1];
echo "Scanner Em andamento...";
sleep(2);
echo("\n \033[3;5m[+]Site──➤$url\n\n");
foreach($pag as $link){
    $mac = $url.$link;
    $enviando = get_headers($mac)[0];
    $not = substr($enviando, 9, 3);
    if($not != 200 ){
           echo "\033[0;31m";
           echo "[✘]Pag Não localizada──➤" . $url.$link . "\n";
    }else{
        echo "\033[0;32m";
        echo("[✔]Pag localizada──➤" . $mac . "\n");
    }
}
?>
