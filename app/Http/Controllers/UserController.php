<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        try {
            $response = Http::get("https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0");

            if ($response->successful()) {
                $data = $response->json();

                if (isset($data['users'])) {
                    $collection = $data['users'];

                    $perPage = 10; // Quantidade de usuários por página
                    $currentPage = $request->query('page', 1); // Página atual

                    $offset = ($currentPage - 1) * $perPage;
                    $slice = array_slice($collection, $offset, $perPage, true);

                    $pagination = new LengthAwarePaginator(
                        $slice,
                        count($collection),
                        $perPage,
                        $currentPage
                    );

                    $pagination->withPath(request()->url());

                    return view('users', ['pagination' => $pagination]);
                }
            }

            throw new \Exception('Unable to retrieve user data');
        } catch (\Exception $e) {
            // Tratamento de erro
            return $e->getMessage();
        }
    }
}