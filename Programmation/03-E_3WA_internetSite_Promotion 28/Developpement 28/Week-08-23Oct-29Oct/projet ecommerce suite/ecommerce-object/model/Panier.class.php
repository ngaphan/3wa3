<?php


class Panier
{
	public function add($idProduit, $qty = 1)
	{
		if (!isset($_SESSION['panier']))
		{
			$_SESSION['panier'] = [];
		}

		if(isset($_SESSION['panier'][$idProduit]))
		{
			$_SESSION['panier'][$idProduit] += $qty;
		}
		else
		{
			$_SESSION['panier'][$idProduit] = $qty;
		}
	}

	public function down($idProduit, $qty = 1)
	{
		if (isset($_SESSION['panier'][$idProduit]))
		{
			if ($_SESSION['panier'][$idProduit] - $qty <= 0)
			{
				$this->remove($idProduit);
			}
			else
			{
				$_SESSION['panier'][$idProduit] -= $qty;
			}
		}
	}

	public function get()
	{
		if (isset($_SESSION['panier']))
		{
			return $_SESSION['panier'];
		}

		return null;
	}

	public function remove($idProduit)
	{
		if (isset($_SESSION['panier'][$idProduit]))
		{
			unset($_SESSION['panier'][$idProduit]);
		}
	}
}