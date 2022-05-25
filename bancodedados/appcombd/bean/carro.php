<?php 
    class Carro {
        private $codigo;
        private $marca;
        private $cor;
        private $aro;
        private $conversivel;
        private $placa;
        private $tipo;
        private $preco;
        private $motor;
        private $velocidademax;


    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
        return $this;
    }

    public function getMarca(){
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @param   mixed  $marca  
     *
     * @return  self
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
        return $this;
    }

    /**
     * Get the value of cor
     *
     * @return  mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     *
     * @param   mixed  $cor  
     *
     * @return  self
     */
    public function setCor($cor)
    {
        $this->cor = $cor;
        return $this;
    }

    /**
     * Get the value of aro
     *
     * @return  mixed
     */
    public function getAro()
    {
        return $this->aro;
    }

    /**
     * Set the value of aro
     *
     * @param   mixed  $aro  
     *
     * @return  self
     */
    public function setAro($aro)
    {
        $this->aro = $aro;
        return $this;
    }

    /**
     * Get the value of conversivel
     *
     * @return  mixed
     */
    public function getConversivel()
    {
        return $this->conversivel;
    }

    /**
     * Set the value of conversivel
     *
     * @param   mixed  $conversivel  
     *
     * @return  self
     */
    public function setConversivel($conversivel)
    {
        $this->conversivel = $conversivel;
        return $this;
    }

    /**
     * Get the value of placa
     *
     * @return  mixed
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set the value of placa
     *
     * @param   mixed  $placa  
     *
     * @return  self
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
        return $this;
    }

    /**
     * Get the value of tipo
     *
     * @return  mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @param   mixed  $tipo  
     *
     * @return  self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * Get the value of preco
     *
     * @return  mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @param   mixed  $preco  
     *
     * @return  self
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
        return $this;
    }

    /**
     * Get the value of motor
     *
     * @return  mixed
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * Set the value of motor
     *
     * @param   mixed  $motor  
     *
     * @return  self
     */
    public function setMotor($motor)
    {
        $this->motor = $motor;
        return $this;
    }

    /**
     * Get the value of velocidademax
     *
     * @return  mixed
     */
    public function getVelocidademax()
    {
        return $this->velocidademax;
    }

    /**
     * Set the value of velocidademax
     *
     * @param   mixed  $velocidademax  
     *
     * @return  self
     */
    public function setVelocidademax($velocidademax)
    {
        $this->velocidademax = $velocidademax;
        return $this;
    }
}
