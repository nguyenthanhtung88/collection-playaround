@extends('app')

@section('content')
    <h1>Pricing Lamps and Wallets</h1>

    <div class="row">
        <div class="col-md-6">
            <h3>Products</h3>

            <pre>
                <code class="json">
{
    "products": [
        {
            "title": "Small Rubber Wallet",
            "product_type": "Wallet",
            "variants": [
                { "title": "Blue", "price": 29.33 },
                { "title": "Turquoise", "price": 18.50 }
            ]
        },
        {
            "title": "Sleek Cotton Shoes",
            "product_type": "Shoes",
            "variants": [
                { "title": "Sky Blue", "price": 20.00 }
            ]
        },
        {
            "title": "Intelligent Cotton Wallet",
            "product_type": "Wallet",
            "variants": [
                { "title": "White", "price": 17.97 }
            ]
        },
        {
            "title": "Enormous Leather Lamp",
            "product_type": "Lamp",
            "variants": [
                { "title": "Azure", "price": 65.99 },
                { "title": "Salmon", "price": 1.66 }
            ]
        }
    ]
}
                </code>
            </pre>
        </div>
        <div class="col-md-6">
            <h3>Result</h3>
            <blockquote>Given a JSON feed of products from a store, figure out how much it would cost to buy every variant of every single lamp and wallet that store has for sale.</blockquote>

            <h4>Total Cost: <b style="color: red">{{ $totalCost }}</b></h4>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('pre code').each(function(i, block) {
                hljs.highlightBlock(block);
            });
        })
    </script>
@endsection
