<?php
class Conversion
{
    private $euros;
    private $libras;
    private $dolares;

    /**
     * Get the value of euros
     */
    public function getEuros()
    {
        return $this->euros;
    }

    /**
     * Set the value of euros
     *
     * @return  self
     */
    public function setEuros($euros)
    {
        $this->euros = $euros;
    }

    /**
     * Get the value of libras
     */
    public function getLibras()
    {
        return $this->libras;
    }

    /**
     * Set the value of libras
     *
     * @return  self
     */
    public function setLibras($libras)
    {
        $this->libras = $libras;
    }

    /**
     * Get the value of dolares
     */
    public function getDolares()
    {
        return $this->dolares;
    }

    /**
     * Set the value of dolares
     *
     * @return  self
     */
    public function setDolares($dolares)
    {
        $this->dolares = $dolares;
    }


    public function convEurosLibras()
    {
        $conversion = 0.9;
        $conversion *= $this->euros;
        return $conversion;
    }
    public function convLibrasEuros()
    {
        $conversion = 1.11;
        $conversion *= $this->libras;
        return $conversion;
    }
    public function convEurosDolares()
    {
        $conversion = 1.17;
        $conversion *= $this->euros;
        return $conversion;
    }
    public function convDolaresEuros()
    {
        $conversion = 0.86;
        $conversion *= $this->dolares;
        return $conversion;
    }
}
