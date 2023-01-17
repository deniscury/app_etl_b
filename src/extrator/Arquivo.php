<?php
    namespace src\extrator;

    class Arquivo{
        private $arquivo;
        private $dados = array();

        /**
         * Get the value of arquivo
         */
        public function getArquivo()
        {
                return $this->arquivo;
        }

        /**
         * Set the value of arquivo
         *
         * @return  self
         */
        public function setArquivo($arquivo)
        {
                $this->arquivo = $arquivo;

                return $this;
        }

        /**
         * Get the value of dados
         */
        public function getDados()
        {
                return $this->dados;
        }

        /**
         * Set the value of dados
         *
         * @return  self
         */
        public function setDados(string $nome, string $documento, string $email)
        {
            array_push($this->dados, array(
                "nome" => iconv('ISO-8859-1', 'UTF-8', $nome),
                "documento" => $documento,
                "email" => $email
            ));

            return $this;
        }
    }
