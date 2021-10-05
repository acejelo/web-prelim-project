<!-- Your Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Your_email', 'Your Email:') !!}
    {!! Form::text('Your_email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Message', 'Message:') !!}
    {!! Form::text('Message', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>