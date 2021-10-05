<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_name', 'Product Name:') !!}
    {!! Form::text('Product_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Brand', 'Brand:') !!}
    {!! Form::text('Brand', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Price', 'Price:') !!}
    {!! Form::text('Price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>