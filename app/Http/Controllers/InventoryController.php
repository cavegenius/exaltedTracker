<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;

class InventoryController extends Controller
{
    /**
     * Saves the inventory for a new character
     */
    public function save( $inventoryItems, $character ) {
        foreach( $inventoryItems as $item) {
            $inventoryModel = Inventory::firstOrNew(['characterId' => $character, 'item' => $item]);
            $inventoryModel->characterId = $character;
            $inventoryModel->item = $item;
            $inventoryModel->save();
        }
        return true;
    }

    public function retrieve( $character ) {
        $model = new Inventory;
        $inventory = $model->where('characterId', $character)->get();
        return $inventory;
    }
}
