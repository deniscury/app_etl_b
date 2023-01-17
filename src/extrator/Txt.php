<?php
    namespace src\extrator;

    use src\extrator\Arquivo;

    class Txt extends Arquivo{
        public function lerArquivo(){
            $handle = fopen($this->getArquivo(), 'r');

            while(!feof($handle)){
                $linha = fgets($handle);
                $nome = substr($linha, 11, 30);
                $documento = substr($linha, 0, 11);
                $email = substr($linha, 41, 50);

                $this->setDados($nome, $documento, $email);
            }

            fclose($handle);
        }
    }
