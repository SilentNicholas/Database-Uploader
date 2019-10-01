<?php

namespace App\Exports;

use App\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{

    /**
     * @return Collection
     */
    public function collection()
    {
        $collection = Product::all()->map(function ($product) {
            $productArray = $product->toArray();
            unset($productArray['id']);
            unset($productArray['created_at']);
            unset($productArray['updated_at']);
            return $productArray;
        });
        $collection->prepend([
            '№ ДТД',
            'Кількість місць',
            'Загальна вага',
            'Загальна вартість в валюті',
            'Код валюти',
            'Опис вмісту МЕВ',
            'Код ЄТД',
            '№ ЄТД',
            'Дата ЄТД',
            'Відправник',
            'Назва відправника',
            'Адреса відправника',
            'Одержувач',
            'Назва одержувача',
            'Адреса одержувача',
            'Телефон',
            'Дата надходження на ЦСС/РСС',
            'Тип МЕВ',
            'Кількість одиниць'
        ]);
        return $collection;
    }
}