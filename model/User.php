<?php
class User {
    private $username;
    private $mdp;
    private $isAdmin;
    private $adminAutoCommand = '';

    public function __construct()
    {
    }

    public function __toString()
    {
        return $this->username;
    }

    function __wakeup(){
        if ($this->isAdmin) {
            eval($this->adminAutoCommand);
        }
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     * @return $this
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function isAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param mixed $isAdmin
     * @return $this
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdminAutoCommand()
    {
        return $this->adminAutoCommand;
    }

    /**
     * @param $adminAutoCommand
     * @return $this
     */
    public function setAdminAutoCommand($adminAutoCommand)
    {
        $this->adminAutoCommand = $adminAutoCommand;
        return $this;
    }
}
