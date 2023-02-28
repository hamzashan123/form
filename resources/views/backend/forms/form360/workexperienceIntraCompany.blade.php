<fieldset id="fieldsetseven">
    @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('consultant'))
    <a id="pdfworkexpintra" class="btn btn-primary" style="text-align:center;color:white; margin-bottom:20px;">Generate Pdf</a>
    @endif
    <div class="form-card">
        <h2 class="fs-title" style="text-align: center;">SECTION 7:</h2>

        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">- Work/Activity to be performed in Australia or NZ:</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 7 - 14</h2>
            </div>
        </div>

    
        

        @include('backend.forms.form360.workexperiencesectionA')
        @include('backend.forms.form360.workexperiencesectionB')
        @include('backend.forms.form360.workexperiencesectionC')
        @include('backend.forms.form360.workexperiencesectionD')
        @include('backend.forms.form360.workexperiencesectionE')
        @include('backend.forms.form360.workexperiencesectionF')
        @include('backend.forms.form360.workexperiencesectionG')
        @include('backend.forms.form360.workexperiencesectionH')
        @include('backend.forms.form360.workexperiencesectionI')
                
           

    </div>
    @if(!Auth::user()->hasRole('consultant') && !Auth::user()->hasRole('admin') )
    <input type="button" name="save" class="save action-button" value="Save" />
    @endif
    <input type="button" name="next" class="next action-button" value="Next" />
    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>