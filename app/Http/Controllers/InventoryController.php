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
        $saveData = array();

        foreach( $inventoryItems as $key => $value ) {
            if ( is_numeric($key) ) {
                $saveData[$key]['name'] = $value;
            } else if($key[0] == 'i') {
                $saveData[$key[2]]['id'] = $value;
            }
        }

        foreach( $saveData as $item) {
            if(is_array($item) && array_key_exists('id', $item)) {
                $inventoryModel = Inventory::firstOrNew(['id' => $item['id']]);
            } else {
                $inventoryModel = new Inventory;
            }
            $inventoryModel->characterId = $character;
            $inventoryModel->item = $item['name'];
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
