<?php
    class produit{
        private $id,$libille,$prix,$qte,$desc,$img,$promo;

        function __construct($id,$libille,$prix,$qte,$desc,$img,$promo){

            $this->id = $id;
            $this->libille = $libille;
            $this->prix = $prix;
            $this->qte = $qte;
            $this->desc = $desc;
            $this->img = $img;
            $this->promo = $promo;
        }
        
        public function getId()
        {
                return $this->id;
        }


        /**
         * Get the value of libille
         */
        public function getLibille()
        {
                return $this->libille;
        }

        /**
         * Set the value of libille
         */
        public function setLibille($libille): self
        {
                $this->libille = $libille;

                return $this;
        }

        /**
         * Get the value of prix
         */
        public function getPrix()
        {
                return $this->prix;
        }

        /**
         * Set the value of prix
         */
        public function setPrix($prix): self
        {
                $this->prix = $prix;

                return $this;
        }

        /**
         * Get the value of qte
         */
        public function getQte()
        {
                return $this->qte;
        }

        /**
         * Set the value of qte
         */
        public function setQte($qte): self
        {
                $this->qte = $qte;

                return $this;
        }

        /**
         * Get the value of desc
         */
        public function getDesc()
        {
                return $this->desc;
        }

        /**
         * Set the value of desc
         */
        public function setDesc($desc): self
        {
                $this->desc = $desc;

                return $this;
        }

        /**
         * Get the value of img
         */
        public function getImg()
        {
                return $this->img;
        }

        /**
         * Set the value of img
         */
        public function setImg($img): self
        {
                $this->img = $img;

                return $this;
        }

        /**
         * Get the value of promo
         */
        public function getPromo()
        {
                return $this->promo;
        }

        /**
         * Set the value of promo
         */
        public function setPromo($promo): self
        {
                $this->promo = $promo;

                return $this;
        }
    }