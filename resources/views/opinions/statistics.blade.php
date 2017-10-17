<div class="row">
    <div class="col-sm-4">
        <div class="rating-block">
            <h4>Średnia ocena</h4>
            <h2 class="bold padding-bottom-7">{{ number_format($averageScope,2,'.','') }}<small>/ 6</small></h2>
        </div>
    </div>
    <div class="col-sm-7">
        <div class="pull-left col-md-12">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;">6 ★</div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $gradesCount['6'] }}" aria-valuemin="0" aria-valuemax="{{ $gradesCount['all'] }}" style="width: {{ ($gradesCount['6']/$gradesCount['all']*100).'%' }}">
                    </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">{{ $gradesCount['6'] }}</div>
        </div>
        <div class="pull-left col-md-12">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;">5 ★</div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $gradesCount['5'] }}" aria-valuemin="0" aria-valuemax="{{ $gradesCount['all'] }}" style="width: {{ ($gradesCount['5']/$gradesCount['all']*100).'%' }}">
                    </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">{{ $gradesCount['5'] }}</div>
        </div>
        <div class="pull-left col-md-12">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;">4 ★</div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{ $gradesCount['4'] }}" aria-valuemin="0" aria-valuemax="{{ $gradesCount['all'] }}" style="width: {{ ($gradesCount['4']/$gradesCount['all']*100).'%' }}">
                    </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">{{ $gradesCount['4'] }}</div>
        </div>
        <div class="pull-left col-md-12">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;">3 ★</div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $gradesCount['3'] }}" aria-valuemin="0" aria-valuemax="{{ $gradesCount['all'] }}" style="width: {{ ($gradesCount['3']/$gradesCount['all']*100).'%' }}">
                    </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">{{ $gradesCount['3'] }}</div>
        </div>
        <div class="pull-left col-md-12">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;">2 ★</div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ $gradesCount['2'] }}" aria-valuemin="0" aria-valuemax="{{ $gradesCount['all'] }}" style="width: {{ ($gradesCount['2']/$gradesCount['all']*100).'%' }}">
                    </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">{{ $gradesCount['2'] }}</div>
        </div>
        <div class="pull-left col-md-12">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;">1 ★</div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ $gradesCount['1'] }}" aria-valuemin="0" aria-valuemax="{{ $gradesCount['all'] }}" style="width: {{ ($gradesCount['1']/$gradesCount['all']*100).'%' }}">
                    </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">{{ $gradesCount['1'] }}</div>
        </div>
    </div>
</div>