<?php
function upd() {
  logo();
  echo "\n\033[01;32mMise à jour de Ouistiti.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/stan2702/ouistiti.git");
  system("cd ~/ && sudo git clone https://github.com/stan2702/ouistiti.git");
  system("cd ~/ouistiti && bash ouistiti");
  logo();
  echo "\n\033[01;32m              Ouistiti a été mise à jour!!!\033[01;37m\n";
  sleep(1);
}
upd();
?>
