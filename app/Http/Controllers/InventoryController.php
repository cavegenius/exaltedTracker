<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;

class InventoryController extends Controller
{
    /**
     * Saves the inventory for a new character
     */
    public static function saveNewInventoryData( $inventoryItems, $character ) {
        foreach( $inventoryItems as $item) {
            $inventoryModel = new Inventory;
            $inventoryModel->characterId = $character;
            $inventoryModel->item = $item;
            $inventoryModel->save();
        }
        return true;
    }
}
