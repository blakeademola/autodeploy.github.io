<?php

namespace App\Http\Controllers;

use App\Country;
use App\Item;
use App\ItemOrder;
use App\TransportMode;
use App\User;
use Illuminate\Http\Request;


class CalculateTotalController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function getTotal(Request $request)
    {
        $user = User::first();
        $item_order = ItemOrder::where('status', 'unpaid');
        $countries = Country::all();
        $transport_modes = TransportMode::all();
        $items = Item::all();
        $item_orders = ItemOrder::all();

        if ($request->isMethod('POST')) {
            $exempted_form_data = (collect($request->form)->groupBy('name')->except(['country', 'mode']));
            $full_form_data = (collect($request->form)->groupBy('name')->toArray());

            $errors = $this->validateRequest($full_form_data);

            if (count($errors)) {
                return response()->json(
                    [
                        "status" => false,
                        "msg" => implode(',', $errors),
                    ]
                );
            }
            $sum = [];
            $mode_check = TransportMode::where('name', $full_form_data['mode'][0]['value'])->first();
            $mode_base_fare = (int)($mode_check->base_fare);
            $country = Country::where('name', $full_form_data['country'][0]['value'])->first();
            $country_flat_rate = (int)$country->flat_rate;
            $country_name = $country->name;
            $data = [];

            foreach ($exempted_form_data as $key => $val) {
                $i = 0;
                $vals = $val->toArray();
                $p = count($vals);
                //map and group each item with it's correspondign details
                while ($i < $p) {
                    if ($i == 0 && isset($vals[$i])) {
                        $data[$i][$vals[$i]['name']] = $vals[$i]['value'];
                    }
                    if ($i > 0 && isset($vals[$i])) {
                        $data[$i][$vals[$i]['name']] = $vals[$i]['value'] ?? null;
                    }
                    $i++;
                }


                $item = $val->pluck('value')->toArray();
                if ($key == 'item' && count($val) > 1 && (count($item) != count(array_unique($item)))) {
                    return response()->json([
                        'status' => false,
                        'msg' => "Duplicate item found, select only one type of item per order"
                    ]);
                }

                if ($key == "weight") {
                    $weight = $val->pluck('value')->toArray();
                    $weight = (array_sum($weight));

                    $weight = $weight == 1 ? $mode_base_fare : ($mode_base_fare + ((--$weight) * ($mode_check == 'air' ? 10000 : 2000)));
                }

                if ($key == "qty") {
                    $quantity = $val->pluck('value')->toArray();
                    $quantity = (array_sum($quantity));
                }

            }
            $total = ($country_flat_rate + $weight) * $quantity;
            $tax = 10 * ($total / 100);
            $grand_total = ($total + $tax);

            $this->saveRecord($data, $mode_check, $mode_base_fare, $country_name, $user, $total, $tax, $grand_total);


            return response()->json(
                [
                    "status" => true,
                    "total" => $total,
                    "tax" => $tax,
                    "grand_total" => $grand_total
                ]
            );
        }
        return view("freight.index", compact('user', 'item_order', 'countries', 'transport_modes', 'items','item_orders'));
    }

    public function validateRequest($test2)
    {
        $errors = [];
        foreach ($test2 as $key => $item) {

            if ($key != 'country' && $key != 'mode') {
                foreach ($item as $keys => $value) {
                    if (is_null($value['value']) || $value['value'] == 'select') {
                        $errors[] = $value['name'] . " on row" . ++$keys . " cannot be null";
                    }
                }
            }

        }
        if (is_null($test2['country'][0]['value']) || $test2['country'][0]['value'] == 'select') {
            $errors[] = $test2['country'][0]['name'] . " cannot be null";
        }
        if (is_null($test2['mode'][0]['value']) || $test2['mode'][0]['value'] == 'select') {
            $errors[] = $test2['mode'][0]['name'] . " cannot be null";
        }
        return ($errors);
    }

    public function saveRecord($data, $mode_check, $mode_base_fare, $country_name, $user, $total, $tax, $grand_total)
    {
        $rand = '#' . rand(50000, 23);

        foreach ($data as $item) {
            $mode = TransportMode::where('name', $mode_check->name)->first();
            $country_id = Country::where('name', $country_name)->first()->id;
            $base_fare = (int)$mode_base_fare;
            $weight = (int)$item['weight'];
            $qty = (int)$item['qty'];

            $save = ItemOrder::updateOrCreate(
                [
                    'item_id' => Item::where('name', $item['item'])->first()->id,
                    'user_id' => $user->id,
                    'order_no' => $rand],
                [

                    'desc' => $item['desc'],
                    'weight' => $item['weight'],
                    'qty' => $item['qty'],
                    'dispatch_country_id' => $country_id,
                    'transport_mode_id' => $mode->id,
//                'single_item_total' => (($weight == 1 ? $base_fare : ($base_fare + ((--$weight) * ($mode_check == 'air' ? 10000 : 2000)))) / count($data)) * $qty, ,
                    'country_id' => $country_id,
                    'status' => 'unpaid',
                    'total' => $total,
                    'tax' => $tax,
                    'grand_total' => $grand_total
                ]);

        }

    }
}
