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


    public function convEurosLibras($euros)
    {
        $conversion = 0.9;
        $conversion *= $euros;
        return $conversion;
    }
    public function convLibrasEuros($libras)
    {
        $conversion = 1.11;
        $conversion *= $libras;
        return $conversion;
    }
    public function convEurosDolares($euros)
    {
        $conversion = 1.17;
        $conversion *= $euros;
        return $conversion;
    }
    public function convDolaresEuros($dolares)
    {
        $conversion = 0.86;
        $conversion *= $dolares;
        return $conversion;
    }
}
