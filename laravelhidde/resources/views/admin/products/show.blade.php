@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.product.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        headtitle
                    </th>
                    <td>
                    {{ $product->headtitle ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Title
                    </th>
                    <td>
                    {{ $product->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                      Category
                    </th>
                    <td>
                    {{ $product->category ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Sub-title
                    </th>
                    <td>
                    {{ $product->sub_title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Slug
                    </th>
                    <td>
                    {{ $product->slug ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                     day
                    </th>
                    <td>
                    {{ $product->day ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Month
                    </th>
                    <td>
                    {{ $product->month ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                    description
                    </th>
                    <td>
                    {{ $product->description ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                       body
                    </th>
                    <td>
                    {{ $product->body ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                       image
                    </th>
                    <td>
                    {{ $product->image ?? '' }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
