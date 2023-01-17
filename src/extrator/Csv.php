<?php
    namespace src\extrator;

    use src\extrator\Arquivo;

    class Csv extends Arquivo{
        public function lerArquivo(){
            $handle = fopen($this->getArquivo(), 'r');

            while(($linha = fgetcsv($handle, 10000, ';'))){
                $this->setDados($linha[0], $linha[1], $linha[2]);
            }

            fclose($handle);
        }
    }
