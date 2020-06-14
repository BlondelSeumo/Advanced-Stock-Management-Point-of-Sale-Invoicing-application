<div class="modal-dialog" role="document">
  <div class="modal-content">

    {!! Form::open(['url' => action('CustomerGroupController@store'), 'method' => 'post', 'id' => 'customer_group_add_form' ]) !!}

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">@lang( 'lang_v1.add_customer_group' )</h4>
    </div>

    <div class="modal-body">
      <div class="form-group">
        {!! Form::label('name', __( 'lang_v1.customer_group_name' ) . ':*') !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'lang_v1.customer_group_name' ) ]); !!}
      </div>

      <div class="form-group">
        {!! Form::label('amount', __( 'lang_v1.calculation_percentage' ) . ':') !!}
        @show_tooltip(__('lang_v1.tooltip_calculation_percentage'))
        {!! Form::number('amount', null, ['class' => 'form-control','placeholder' => __( 'lang_v1.calculation_percentage'), 'max' => 100, 'min' => '-100', 'step' => 0.1]); !!}
      </div>
    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">@lang( 'messages.save' )</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
    </div>

    {!! Form::close() !!}

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->