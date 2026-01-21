<?php
class user
{
    private $name;

    public function getRole()
    {
    }
}

class client extends user
{
    public function getRole()
    {
        return "Client";
    }
}

class admin extends user
{
    private $role;

    public function __construct($role = "admine")
    {
        $this->role = $role;
    }
    public function getRole()
    {
        return "admine";
    }
}

class order implements payement_methode
{
    private $id;
    private $amount;

    public function pye($id, $amount)
    {
        return "this $id are $amount";
    }
}

interface payement_methode
{

    public function pye($id, $amount);
}
$clint = new client();
echo $clint->getRole();

$admin = new admin();
echo $admin->getRole();

$order = new order();
echo $order->pye(1, 200);


