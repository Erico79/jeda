<br>
<h3><strong>Step 3 </strong> - Other Details</h3>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list
                fa-fw"></i></span>
                <select name="form" class="form-control">
                    <option value="">--Select Form--</option>
                    @if(count($forms))
                        <option value="">--Choose Form--</option>
                        @foreach($forms as $form)
                            <option value="{{ $form->id }}">{{ $form->form_name }}</option>
                        @endforeach
                    @endif
                </select>

            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list
                fa-fw"></i></span>
                <select name="stream" id="stream" class="form-control"></select>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-keyboard-o
                fa-fw"></i></span>
                <input class="form-control" placeholder="KRA PIN" type="text" name="kra_pin" id="kra_pin" value="{{ old('stream') }}">

            </div>
        </div>
    </div>
</div>