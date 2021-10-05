<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('Product_name', 'Product Name:') !!}
    <p>{{ $products->Product_name }}</p>
</div>

<!-- Brand Field -->
<div class="col-sm-12">
    {!! Form::label('Brand', 'Brand:') !!}
    <p>{{ $products->Brand }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('Price', 'Price:') !!}
    <p>{{ $products->Price }}</p>
</div>

