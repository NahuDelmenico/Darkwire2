<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Game;

class CartController extends Controller
{
    public function view()
    {
        // Obtener carrito
        // $cart = Session::get('cart', []);

        return view('cart.view', [
            // Enviar carrito
            //'cart' => $cart
        ]);
    }

    public function add(Request $request) 
    {
        $request->validate([
            'game_id' => 'required|integer|exists:games,id'
        ]);

        $gameId = $request->game_id;

        // Buscar el juego
        $game = Game::findOrFail($gameId);

        // Obtener carrito actual
        // $cart = Session::get('cart', []);

        // Verificar si el juego ya está en el carrito
        //if (isset($cart[$gameId])) {
        //    return response()->json([
        //        'success' => false,
        //        'message' => 'Este juego ya está en tu carrito'
        //    ]);

        // Guardar en carrito
        //$cart[$gameId] = [
        //    'id' => $game->id,
        //    'name' => $game->name,
        //    'category' => $game->category_fk,
        //    'description' => $game->description,
        //    'logo' => $game->logo,
        //    'price' => $game->price
        //];
        
        // Guardar en sesión
        //Session::put('cart', $cart);

    }

    public function remove($id) 
    {
        // Buscar el juego
        $game = Game::findOrFail($id);

        // Obtener carrito actual
        // $cart = Session::get('cart', []);

        // Sacar del carrito
        //if (isset($cart[$gameId])) {
        //    unset($cart[$gameId]);
        //    Session::put('cart', $cart);
        //    return redirect()
        //    ->route('cart.view')
        //    ->with([
        //        'feedback.message' => 'El juego' . e($game->name) . 'fue <b>eliminado</b> exitosamente',
        //        'feedback.type' => 'error' // success, error, warning, info
        //    ]);
        //}


        // Esto dejenlo y pongan otro redirect si se encuentra el juego correcto antes de este
        return redirect()
            ->route('cart.view')
            ->with([
                'feedback.message' => 'El juego no fue <b>encontrado</b>',
                'feedback.type' => 'error' // success, error, warning, info
            ]);
    }

    public function clear()
    {

        // Vaciamos el carrito
        //Session::forget('cart');
        
        return redirect()
            ->route('cart.view')
            ->with([
                'feedback.message' => 'El carrito fue <b>vaciado</b> exitosamente',
                'feedback.type' => 'error' // success, error, warning, info
            ]);
    }
}
