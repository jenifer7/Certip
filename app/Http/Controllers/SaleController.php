<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Employee;
use App\Product;
use App\Sale;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
            ->orderBy('s.id')
            ->groupBy('s.id', 's.date_sale', 'c.fullname')
            ->get();
        return view('sale.index', compact('venta'));
        // return view('sale.index', ["venta" => $venta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = DB::table('customers')->get();
        $productos = DB::table('products as p')
            ->join('details as de', 'p.id', '=', 'de.product_id')
            ->select(
                DB::raw('CONCAT(p.code," ",p.name)as producto'),
                'p.id',
                'p.stock',
                DB::raw('avg(de.price)as sale_price')
            )
            ->where('p.is_active', '=', '1')
            ->where('p.stock', '>', '0')
            ->groupBy('producto', 'p.id', 'p.stock')
            ->get();

        return view('sale.create', ['cliente' => $cliente, 'productos' => $productos]);
        // return view('sale.create', compact('empleado', 'cliente', 'producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $vent = Sale::create($request->all());
        // return redirect('sales');

        DB::beginTransaction();
        $venta = new Sale;
        $venta->customer_id = $request->get('customer_id');
        $venta->total_sales = $request->get('total_sales');

        $fecha = now()->toDateString('Y-m-d');
        $venta->date_sale = $fecha;
        $venta->save();

        $idarticulo = $request->get('product_id');
        $cantidad = $request->get('stock');
        $precio = $request->get('sale_price');

        $cont = 0;
        while ($cont < count($idarticulo)) {
            $detalle = new Detail();
            $detalle->sale_id = $venta->id;
            $detalle->product_id = $idarticulo[$cont];
            $detalle->stock = $cantidad[$cont];
            $detalle->price = $precio[$cont];
            $detalle->save();
            $cont = $cont + 1;
        }
        DB::commit();

        return redirect('sales');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $vent = Sale::find($id);
        // return view('sale.show', compact('vent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $empleado = Employee::all();
        // $cliente = Customer::all();
        // $producto = Product::all();

        // $vent = Sale::find($id);
        // return view('sale.edit', compact('vent','empleado','cliente','producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $vent = Sale::find($id);
        // $vent->update($request->all());
        // return view('sale.show', compact('vent'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $vent = Sale::find($id);
        // $vent->delete();

        // return redirect('sales');
    }
}
