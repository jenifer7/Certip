<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Detail;
use App\Product;
use App\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $venta = DB::table('sales as s')
                ->join('customers as c', 's.customer_id', '=', 'c.id')
                ->join('details as d', 's.id', '=', 'd.sale_id')
                ->select('s.id', 's.date_sale', 'c.fullname', 's.total_sales')
                ->orderBy('s.id')
                ->groupBy('s.id', 's.date_sale', 'c.fullname')
                ->get();

            return view('sale.index', compact('venta'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fecha = now()->toDateString('Y-m-d');
        $cliente = DB::table('customers')->get();
        $productos = DB::table('products as p')
            ->select(DB::raw('CONCAT(p.code, "  ", p.name)as producto'), 'p.id', 'p.stock', 'p.unit_price')
            ->where('p.is_active', '=', '1')
            ->where('p.stock', '>', '0')
            ->get();

        return view('sale.create', ['cliente' => $cliente, 'productos' => $productos, 'fecha' => $fecha]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $venta = new Sale;
            $venta->customer_id = $request->get('customer_id');
            $venta->user_id = $request->get('user_id');
            $venta->date_sale = $request->get('date_sale');
            $venta->total_sales = $request->get('total_sales');
            $venta->saveOrFail();

            $product_id = $request->get('id_producto');
            $quantity = $request->get('cantidad');
            $price = $request->get('precio_venta');

            $cont = 0;

            while ($cont < count($product_id)) {
                $detalle = new Detail;
                $detalle->sale_id = $venta->id;
                $detalle->product_id = $product_id[$cont];
                $detalle->quantity = $quantity[$cont];
                DB::table('products')->decrement('stock', $detalle->quantity);
                $detalle->price = $price[$cont];
                $detalle->saveOrFail();

                $cont = $cont + 1;
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }

        return redirect('sales');
        // return($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta = DB::table('sales as s')
            ->join('customers as c', 's.customer_id', '=', 'c.id')
            ->join('details as d', 's.id', '=', 'd.sale_id')
            ->select(
                's.id',
                's.date_sale',
                'c.fullname',
                's.total_sales'
            )
            ->where('s.id', '=', $id)
            ->first();

        $detalles = DB::table('details as d')
            ->join('products as p', 'd.product_id', '=', 'p.id')
            ->select('p.name as pro', 'd.quantity', 'd.price')
            ->where('d.sale_id', '=', $id)->get();
        return view('sale.show', ['venta' => $venta, 'detalles' => $detalles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
