<div class="modal fade" id="posModal" aria-hidden="true" style="z-index: 16000">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalHeading"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

{{--                    <pre>--}}
{{--                    @php--}}
{{--                    print_r($orderDetails);--}}
{{--                    @endphp--}}
{{--                    </pre>--}}
                <form autocomplete="off" method="POST" id="orderForm" name="orderForm" class="form-horizontal">
                    <input type="hidden" name="id" id="id" value="{{$orderDetails->id}}" >
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="note" class="col-sm-12 control-label">Delivery Mobile</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" readonly id="delivery_mobile" name="delivery_mobile" placeholder="Delivery Mobile" value="{{$orderDetails->delivery_mobile}}">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="note" class="col-sm-12 control-label">Delivery Address</label>
                                <div class="col-sm-12">
                                    <textarea readonly id="delivery_address" name="delivery_address" placeholder="Enter Delivery Address"class="form-control">{{$orderDetails->delivery_address}}</textarea>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="note" class="col-sm-12 control-label">Note</label>
                                <div class="col-sm-12">
                                    <textarea id="note" name="note" placeholder="Enter Special Notes"
                                        class="form-control">{{$orderDetails->delivery_note}}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary float-right" id="saveBtn" value="create">
                            Place order
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
