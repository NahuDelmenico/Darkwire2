<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function view()
    {
        // Obtener carrito
        $cart = Session::get('cart', []);

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'];
        }
        $impuestos = $subtotal * 0.10; // 10%
        $total = $subtotal + $impuestos;

        return view('cart.view', [
            // Pasar carrito
            'cartItems' => $cart,
            'subtotal' => $subtotal,
            'impuestos' => $impuestos,
            'total' => $total
        ]);
    }

    public function add($id) 
    {

        // Buscar el juego
        $game = Game::findOrFail($id);

        // Obtener carrito actual
        $cart = Session::get('cart', []);

        // Verificar si el juego ya está en el carrito
        if (isset($cart[$id])) {
            return redirect()
            ->route('cart.view')
            ->with([
                'feedback.message' => 'El juego <b>' . e($game->name) . '</b> ya esta en tu carrito',
                'feedback.type' => 'info' // success, error, warning, info
            ]);
        }

        $category = Category::findOrFail($game->category_fk)->name;

        // Guardar en carrito
        $cart[$id] = [
            'id' => $game->id,
            'name' => $game->name,
            'category' => $category,
            'description' => $game->description,
            'logo' => $game->logo,
            'price' => $game->price
        ];
        
        // Guardar en sesión
        Session::put('cart', $cart);

        return redirect()
            ->route('cart.view')
            ->with([
                'feedback.message' => 'El juego <b>' . e($game->name) . '</b> fue <b>agregado</b> exitosamente',
                'feedback.type' => 'success' // success, error, warning, info
            ]);
    }

    public function remove($id) 
    {
        // Buscar el juego
        $game = Game::findOrFail($id);

        // Obtener carrito actual
        $cart = Session::get('cart', []);

        // Sacar del carrito
        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);

            return redirect()
            ->route('cart.view')
            ->with([
                'feedback.message' => 'El juego <b>' . e($game->name) . '</b> fue <b>eliminado</b> exitosamente',
                'feedback.type' => 'danger' // success, danger, warning, info
            ]);
        }


        // Esto dejenlo y pongan otro redirect si se encuentra el juego correcto antes de este
        return redirect()
            ->route('cart.view')
            ->with([
                'feedback.message' => 'El juego no fue <b>encontrado</b>',
                'feedback.type' => 'danger' // success, danger, warning, info
            ]);
    }

    public function clear()
    {

        // Vaciamos el carrito
        Session::forget('cart');
        
        return redirect()
            ->route('cart.view')
            ->with([
                'feedback.message' => 'El carrito fue <b>vaciado</b> exitosamente',
                'feedback.type' => 'danger' // success, danger, warning, info
            ]);
    }
}
